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
            $table->boolean('has_landline_phone')->default(0);
            $table->integer('phone')->nullable();
            $table->boolean('has_mobile')->default(0);
            $table->integer('mobile_no')->nullable(false);
            $table->string('mobile_network')->nullable(false);
            $table->boolean('is_has_contact_person')->default(0);
            $table->string('other_contact_person_name');
            $table->integer('other_contact_person_number');
            $table->string("seasonal_home_stayer");
            $table->integer('family_member_count');
            $table->integer('family_death');
            $table->string('health_checkup');
            $table->boolean('health_checkup_HCU001')->default(0);
            $table->boolean('health_checkup_HCU002')->default(0);
            $table->boolean('health_checkup_HCU003')->default(0);
            $table->boolean('health_checkup_HCU004')->default(0);
            $table->boolean('health_checkup_HCU005')->default(0);
            $table->boolean('health_checkup_HCU006')->default(0);
            $table->boolean('health_checkup_HCU007')->default(0);
            $table->boolean('health_checkup_others');
            $table->string('perodic_pregenancy_test');
            $table->string('no_perodic_pregnancy_test_reason');
            $table->string('no_perodic_pregnancy_test_reason_other');
            $table->string('baby_delivery_place');
            $table->string('baby_delivery_place_other');
            $table->string('baby_delivery_helper');
            $table->string('baby_delivery_helper_other');
            $table->string('no_delivery_helper_reason');
            $table->string('no_delivery_helper_reason_other');
            $table->boolean('has_pregnancy_death');
            $table->boolean('has_infant_death');
            $table->boolean('has_vaccinated_children');
            $table->boolean('has_agri_land');
            $table->string('group_7_own_land_area_1');
            $table->string('group_7_own_land_area_2');
            $table->boolean('group_7_has_other_land')->default(0);
            $table->string('group_7/group_7_1/non_family_land_area_1');
            $table->string('group_7/group_7_1/non_family_land_area_2');
            $table->string('crop_land_management');
            $table->boolean('has_irrigation')->default(0);
            $table->string('group_11/irrigated_land_area_1');
            $table->string('group_11/irrigated_land_area_2');
            $table->string('irrigation_source');
            $table->string('building_ownership');
            $table->string('building_ownership_other');
            $table->boolean('has_house_elsewhere')->default(0);

            $table->timestamps();
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
