<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Classe;
use App\Models\Niveau;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments(Classe::ID);
            $table->string(Classe::CLASSNAME);
            $table->integer(Classe::LEVEL)->unsigned();
            $table->timestamp(Classe::DELETED_AT)->nullable();
            $table->timestamps();
            $table->foreign(Classe::LEVEL)->on('niveaux')->references(Niveau::ID)->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
