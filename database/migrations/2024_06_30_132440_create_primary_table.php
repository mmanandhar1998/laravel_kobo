<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('primary', function (Blueprint $table) {
            $table->id();
            $table->dateTime('custom_datetime')->nullable(false);
            $table->dateTime('custom_datetime')->nullable(false);
            $table->date('custom_date')->default(DB::raw('CURRENT_DATE'))->nullable(false);
            $table->string('username')->nullable(false);
            $table->string('deviceid');
            $table->string('phone_number');
            $table->float('start_geopoint');
            $table->float('start_geopoint_latitude');
            $table->float('start_geopoint_longitude');
            $table->float('start_geopoint_longitude');
            $table->float('start_geopoint_precision');
            $table->sting('fullname_np')->nullable(false);
            $table->sting('fullname_en')->nullable(false);
            $table->sting('photo_name')->nullable(false);
            $table->sting('photo_url')->nullable(false);
            $table->string('father_name')->nullable(false);
            $table->string('mother_name')->nullable(false);
            $table->string('grandfather_name')->nullable(false);
            $table->string('grandmother_name')->nullable(false);
            $table->integer('province')->nullable(false);
            $table->integer('district')->nullable(false);
            $table->integer('localbody')->nullable(false);
            $table->integer('ward')->nullable(false);
            $table->string('geo_hazard_class')->nullable(false);
            $table->boolean('has_house_no')->default(0);
            $table->integer('house_no')->nullable();
            $table->string('google_maps');
            $table->float('plus_code');
            $table->string('plus_clean_code');
            $table->string('device')->nullable(false);
            $table->string('device_code')->nullable(false);
            $table->string('auto_house_no')->nullable(false);
            $table->string('tole');
            $table->string('street')->nullable(false);
            $table->string('family_serial_no');
            $table->boolean('affiliated_to_tole_dev_instution')->default(0);
            $table->string('tole_dev_instution');

            $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('primary');
    }
};
