<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('clinic_name');
            $table->string('login');
            $table->string('password');
            $table->timestamps();
        });

        DB::table('admins')->insert([
            ['clinic_name' => 'MED', 'login' => 'medadmin', 'password' => bcrypt(12345)],
            ['clinic_name' => 'Surgemed', 'login' => 'suradmin', 'password' => bcrypt(12345)],
            ['clinic_name' => 'Max', 'login' => 'maxadmin', 'password' => bcrypt(12345)],
            ['clinic_name' => 'Komp med', 'login' => 'komadmin', 'password' => bcrypt(12345)],
        ]);
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
