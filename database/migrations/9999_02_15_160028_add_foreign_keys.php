<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('movies', function (Blueprint $table) {

            $table->foreignId('genre_id')
                ->constrained();
        });

        Schema::table('movie_tag', function (Blueprint $table) {

            $table->foreignId('movie_id')
                ->constrained();
            $table->foreignId('tag_id')
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {

            $table->dropForeign('movies_genre_id_foreign');
            $table->dropColumn('genre_id');
        });

        Schema::table('movie_tag', function (Blueprint $table) {

            $table->dropForeign('movie_tag_movie_id_foreign');
            $table->dropColumn('movie_id');

            $table->dropForeign('movie_tag_tag_id_foreign');
            $table->dropColumn('tag_id');

        });
    }
};