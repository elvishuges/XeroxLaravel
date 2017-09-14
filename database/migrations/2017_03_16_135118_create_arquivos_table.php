    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status')->default(false);
            $table->string('nome');
            $table->string('mime');
            $table->string('nomeXerox');
            $table->string('nomeUsuario');
            $table->string('hash');
            $table->string('dataDeBusca');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('xerox_id');
            $table->foreign('xeroxe_id')->references('id')->on('xeroxes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arquivos');
    }
}
