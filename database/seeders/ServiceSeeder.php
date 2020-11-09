<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Web Development',
            'image' => asset('public/images/it-startup/service1.png'),
            'description' => 'We offer Creative Website and Web App services for any kind of business or industry; we will work side by side together to make sure your business is well represented..'
        ]);
        Service::create([
            'name' => 'Digital Marketing',
            'image' => asset('public/images/it-startup/service4.png'),
            'description' => 'An online presence that will boost your business is what we provide, we manage social media marketing campaigns, we also help you develop relevant contents.'
        ]);
        Service::create([
            'name' => 'Software Designs',
            'image' => asset('public/images/sass-banner-main.png'),
            'description' => 'The software we produce are clean and fresh each uniquely designed.'
        ]);
        Service::create([
            'name' => 'Mobile App',
            'image' => asset('public/images/sass-feature1.png'),
            'description' => 'Maximize the effectiveness of the smart phone world; you can only get the best!.'
        ]);
        Service::create([
            'name' => 'Data Analysis',
            'image' => asset('public/images/sass/faq-main.png'),
            'description' => 'Understand how to grow your business, explore data in a meaningful to help you determine the next step to take.'
        ]);
       
        Service::create([
            'name' => 'Training / Online Lectures',
            'image' => asset('public/images/it-startup/service3.png'),
            'description' => 'We organise monthly trainings and online training periodically.'
        ]);
    }
}
