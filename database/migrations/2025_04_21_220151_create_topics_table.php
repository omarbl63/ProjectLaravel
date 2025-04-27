<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_topics_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Topic name
            $table->text('description'); // Topic description
            $table->string('category'); // Topic category
            $table->string('image')->nullable(); // Optional image column
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
