<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'name' => 'TFRG Ministry',
            'image' => 'public/img/office/our-office-1.jpg',
            'description' => '',
            'link'=>'https://tfrgministry.org'
        ]);
        Portfolio::create([
            'name' => 'Lilovat Solar',
            'image' => 'public/img/office/our-office-2.jpg',
            'description' => '',
            'link'=>'https://lilovatsolar.ng'
        ]);
        Portfolio::create([
            'name' => '',
            'image' => 'public/img/office/our-office-3.jpg',
            'description' => '',
            'link'=>'https://'
        ]);
        Portfolio::create([
            'name' => 'God Cures Hospital',
            'image' => 'public/img/office/our-office-4.jpg',
            'description' => '',
            'link'=>'https://'
        ]);
        Portfolio::create([
            'name' => 'Colinfy',
            'image' => 'public/img/office/our-office-5.jpg',
            'description' => 'Colinfy is an E-Commerce company Based In Canada',
            'link'=>'https://colinfy.com'
        ]);
        
    }
}
