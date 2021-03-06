<?php

namespace Tests\Feature\Livewire\Hymns;

use App\Http\Livewire\Hymns\View;
use App\Models\Hymn;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Livewire\Livewire;
use Tests\TestCase;

class ViewTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_should_render_all_hymn_strophes()
    {
        /** @var Hymn $hymn */
        $hymn = Hymn::factory()->forSection()->create([
            'number' => 1,
            'title'  => 'Hymn 1',
        ]);

        $hymn->strophes()->create([
            'title' => 'Parte 1',
            'text'  => 'La La La La',
        ]);

        $hymn->strophes()->create([
            'title' => 'Parte 2',
            'text'  => 'Le Le Le Le',
        ]);

        Livewire::test(View::class, ['hymn' => $hymn])->assertSeeTextInOrder([
            'Hymn 1',
            'Parte 1',
            'La La La La',
            'Parte 2',
            'Le Le Le Le',
        ]);
    }

    /** @test */
    public function it_should_go_to_previous_hymn_page()
    {
        $hymn  = Hymn::factory()->forSection()->create(['number' => 1]);
        $hymn2 = Hymn::factory()->forSection()->create(['number' => 2]);

        Livewire::test(View::class, ['hymn' => $hymn2])
            ->call('previous')
            ->assertRedirect(route('hymns.view', $hymn));
    }

    /** @test */
    public function it_should_go_to_next_hymn_page()
    {
        $hymn  = Hymn::factory()->forSection()->create(['number' => 1]);
        $hymn2 = Hymn::factory()->forSection()->create(['number' => 2]);

        Livewire::test(View::class, ['hymn' => $hymn])
            ->call('next')
            ->assertRedirect(route('hymns.view', $hymn2));
    }
}
