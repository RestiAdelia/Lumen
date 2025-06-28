<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kampus');
            $table->text('alamat_lengkap');
            $table->string('no_telpon');
            $table->enum('kategori', ['Swasta', 'Negeri']);
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->string('jurusan');
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
        Schema::dropIfExists('kampus');
    }
}
