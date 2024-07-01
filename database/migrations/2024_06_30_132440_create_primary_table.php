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
            $table->string('group_7_group_7_1_non_family_land_area_1');
            $table->string('group_7_group_7_1_non_family_land_area_2');
            $table->string('crop_land_management');
            $table->boolean('has_irrigation')->default(0);
            $table->string('group_11_irrigated_land_area_1');
            $table->string('group_11_irrigated_land_area_2');
            $table->string('irrigation_source');
            $table->string('building_ownership');
            $table->string('building_ownership_other');
            $table->boolean('has_house_elsewhere')->default(0);
            $table->string('other_house_address');
            $table->boolean('has_house_rent')->default(0);
            $table->integer('rent_family_count');
            $table->integer('rent_people_count');
            $table->integer('rent_female_count');
            $table->integer('rent_male_count');
            $table->boolean('has_rent_social_security_');
            $table->string('drinking_water_source');
            $table->string('drinking_water_source_other');
            $table->string('drinking_water_purification_procress');
            $table->string('drinking_water_purification_procress_other');
            $table->string('cooking_fuel');
            $table->string('cooking_fuel_other');
            $table->string('cooking_stove');
            $table->string('cooking_stove_other');
            $table->boolean('has_kitchen_verification')->default(0);
            $table->string('kitchen_ventilation');
            $table->string('light_source');
            $table->string('light_source_other');
            $table->boolean('has_electricity_in_house')->default(0);
            $table->string('no_electricity_reason');
            $table->string('toilet_type');
            $table->float('income_agriculture');
            $table->float('income_business');
            $table->float('income_industry');
            $table->float('income_job');
            $table->float('income_foreign_employment');
            $table->float('income_rent');
            $table->float('income_service');
            $table->float('income_other');
            $table->float('expense_food');
            $table->float('expense_education');
            $table->float('expense_health');
            $table->float('expense_tax');
            $table->float('expense_entertainment');
            $table->float('expense_social_work');
            $table->float('expense_loan');
            $table->float('expense_donation');
            $table->float('expense_other');
            $table->string('facilities');
            $table->boolean('facilities_FAC002')->default(0);
            $table->boolean('facilities_FAC001')->default(0);
            $table->boolean('facilities_FAC003')->default(0);
            $table->boolean('facilities_FAC004')->default(0);
            $table->boolean('facilities_FAC005')->default(0);
            $table->boolean('facilities_FAC006')->default(0);
            $table->boolean('facilities_FAC007')->default(0);
            $table->boolean('facilities_FAC008')->default(0);
            $table->boolean('facilities_FAC009')->default(0);
            $table->boolean('facilities_FAC0010')->default(0);
            $table->boolean('facilities_FAC0011')->default(0);
            $table->boolean('facilities_FAC0012')->default(0);
            $table->boolean('facilities_FAC0013')->default(0);
            $table->boolean('facilities_FAC0014')->default(0);
            $table->boolean('facilities_FAC0015')->default(0);
            $table->boolean('facilities_FAC0016')->default(0);
            $table->boolean('facilities_FAC0017')->default(0);
            $table->boolean('facilities_FAC0018')->default(0);
            $table->boolean('facilities_FAC0019')->default(0);
            $table->boolean('has_livestock')->default(0);
            $table->boolean('has_cow')->default(0);
            $table->integer('cow_count');
            $table->string('cow_milk');
            $table->string('cow_others');
            $table->float('cow_annual_income');
            $table->boolean('has_buffalo')->default(0);
            $table->integer('buffalo_count');
            $table->string('buffalo_milk');
            $table->string('buffalo_meat');
            $table->string('buffalo_bone_leather');
            $table->string('buffalo_others');
            $table->float('buffalo_annual_income');
            $table->boolean('has_yak')->default(0);
            $table->integer('yak_count');
            $table->string('yak_milk');
            $table->string('yak_wool');
            $table->string('yak_bone_leather');
            $table->string('yak_others');
            $table->float('yak_annual_income');
            $table->boolean('has_goat')->default(0);
            $table->integer('goat_count');
            $table->string('goat_milk');
            $table->string('goat_wool');
            $table->string('goat_meat');
            $table->string('goat_others');
            $table->float('goat_annual_income');
            $table->boolean('has_hen')->default(0);
            $table->integer('hen_count');
            $table->string('hen_meat');
            $table->string('hen_egg');
            $table->string('hen_others');
            $table->float('hen_annual_income');
            $table->boolean('has_ostrich')->default(0);
            $table->integer('ostrich_count');
            $table->string('ostrich_meat');
            $table->string('ostrich_egg');
            $table->string('ostrich_others');
            $table->float('ostrich_annual_income');
            $table->boolean('has_turkey')->default(0);
            $table->integer('turkey_count');
            $table->string('turkey_meat');
            $table->string('turkey_egg');
            $table->string('turkey_others');
            $table->float('turkey_annual_income');
            $table->boolean('has_fishery')->default(0);
            $table->integer('pond_count');
            $table->string('group_34_pond_area_1');
            $table->string('group_34_pond_area_2');
            $table->float('fishery_income');
            $table->boolean('has_bee_farming')->default(0);
            $table->integer('beehive_count');
            $table->float('annual_honey_produce');
            $table->boolean('has_silk_farming')->default(0);
            $table->integer('silkworm_count');
            $table->string('silk_produce');
            $table->string('health_post_address');
            $table->float('health_post_time_taken');
            $table->string('health_post_means_to_reach');
            $table->string('hospital_address');
            $table->float('hospital_time_taken');
            $table->string('hospital_means_to_reach');
            $table->string('dumping_site');
            $table->boolean('dumping_site_river')->default(0);
            $table->boolean('dumping_site_roadside')->default(0);
            $table->boolean('dumping_site_dump_site')->default(0);
            $table->boolean('dumping_site_own_compound')->default(0);
            $table->boolean('dumping_site_compound')->default(0);
            $table->boolean('dumping_site_public_site')->default(0);
            $table->boolean('dumping_site_random')->default(0);
            $table->string('drainage_type');
            $table->string('sec_drainage');
            $table->boolean('sec_drainage_SD001')->default(0);
            $table->boolean('sec_drainage_SD002')->default(0);
            $table->boolean('sec_drainage_SD003')->default(0);
            $table->boolean('sec_drainage_SD004')->default(0);
            $table->boolean('sec_drainage_other')->default(0);
            $table->string('local_dev_comm_contribution');
            $table->boolean('has_involvment_in_other_org')->default(0);
            $table->string('organization');
            $table->string('riaky_natural_disaster');
            $table->boolean('risky_natural_disaster_ND01')->default(0);
            $table->boolean('risky_natural_disaster_ND02')->default(0);
            $table->boolean('risky_natural_disaster_ND03')->default(0);
            $table->boolean('risky_natural_disaster_ND04')->default(0);
            $table->boolean('risky_natural_disaster_ND05')->default(0);
            $table->boolean('risky_natural_disaster_ND06')->default(0);
            $table->boolean('risky_natural_disaster_ND07')->default(0);
            $table->boolean('risky_natural_disaster_ND08')->default(0);
            $table->boolean('risky_natural_disaster_ND09')->default(0);
            $table->boolean('risky_natural_disaster_ND010')->default(0);
            $table->boolean('risky_natural_disaster_ND011')->default(0);
            $table->boolean('risky_natural_disaster_other')->default(0);
            $table->boolean('risky_natural_disaster_ND013')->default(0);
            $table->boolean('affected_by_natural_disaster')->default(0);
            $table->string('activity_male_female1');
            $table->string('activity_male_female2');
            $table->string('activity_male_female3');
            $table->string('activity_male_female4');
            $table->string('activity_male_female5');
            $table->string('activity_male_female6');
            $table->boolean('is_taxpayer')->default(0);
            $table->string('taxpayer_code');
            $table->float('tax_paid');
            $table->string('income_sufficient_for_months');
            $table->string('thumb_left');
            $table->string('thumb__left_url');
            $table->string('thumb_right');
            $table->string('thumb_right_url');
            $table->integer('id');
            $table->string('uuid');
            $table->timestamp('submission_time');
            $table->string('_validation_status');
            $table->string('_status');
            $table->string('_sbumitted_by');
            $table->string('version');
            $table->string('__version__');
            $table->string('_tags');
            $table->string('_index');
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
