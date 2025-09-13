<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=> '_site_name',
            'label'=> 'Judul Situs',
            'value'=> 'Website sederhana',
            'type'=> 'text',
        ]);

        setting::create([
            'key'=> '_location',
            'label'=> 'Alamat rumah',
            'value'=> 'Tangerang, Sukabakti, Indonesia',
            'type'=> 'text',
        ]);

        setting::create([
            'key'=> '_instagram',
            'label'=> 'Instagram',
            'value'=> 'https://www.instagram.com/hafidz_arrahman?igsh=a3Nsa2RqcHV5NWs4',
            'type'=> 'text',
        ]);

        setting::create([
    'key'=> '_github',
    'label'=> 'Github',
    'value'=> 'https://github.com/hafidzzznut',
    'type'=> 'text',
]);


        setting::create([
            'key'=> '_youtube',
            'label'=> 'Youtube',
            'value'=> 'https://www.youtube.com/@m.hafidzarrahmanoak3568',
            'type'=> 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
