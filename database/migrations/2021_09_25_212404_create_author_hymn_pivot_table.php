<?php

use App\Models\{Author, Hymn};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorHymnPivotTable extends Migration
{
    public function up()
    {
        Schema::create('author_hymn', function (Blueprint $table) {
            $table->foreignIdFor(Author::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Hymn::class)->constrained()->cascadeOnDelete();

            $table->unique(['author_id', 'hymn_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('author_hymn');
    }
}
