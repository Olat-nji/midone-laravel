<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting =new Setting;
        $setting->email='support@setting.ng';
        $setting->phone='+234 811 363 5975';
        $setting->facebook='';
        $setting->instagram='';
        $setting->twitter='';
        $setting->whatsapp='+234 811 363 5975';
        $setting->address='';
        $setting->logo='public/img/apple-touch-icon.png';
        $setting->opening_hours='Mon - Sat 8.00 - 18.00. Sunday CLOSED';
        $setting->save();
    }
}
