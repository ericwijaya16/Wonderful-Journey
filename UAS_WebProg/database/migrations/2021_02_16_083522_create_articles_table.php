<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table-> id();
            $table-> foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table-> foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table-> string ('title');
            $table-> longText('description');
            $table-> string ('image');
            $table-> timestamp('created_at')->useCurrent();
            $table-> timestamp('updated_at')->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'))->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
