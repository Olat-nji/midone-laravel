<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'name' => 'About (Home Page)',
            'value' => '<p>Skylevel Concepts is a Nigerian IT Firm, where creative minds provide solutions and help to move businesses to the next level... </p>
                ',

        ]);
        About::create([
            'name' => 'About (About Page)',
            'value' => 'Skylevel Concepts (SLC) is an IT company based in Nigeria, where creative minds provide solutions and help to move businesses to the next level. We are built on a great level of integrity, principle and excellence out put.
            <p>
            Our websites are designed <b>specifically</b> to encapsulate the <b>3</b> most important things for <b>any</b> online representation: <b>Style</b>, <b>Content</b>, And <b>Responsivesness</b> </p>',

        ]);
        About::create([
            'name' => 'Our Values',
            'value' => '
        <strong>Unity:</strong> We work as a team, devoted to each other, and bound by trust and loyalty.<br>
        <strong>Excellence:</strong> We are always seeking to meet or exceed expectations.<br>
        <strong>Morality:</strong> We treat one another, and all our stakeholders with dignity and respect.',

        ]);
        About::create([
            'name' => 'Our Mission',
            'value' => 'To give our customers the online representation their businesses’ deserve by deploying every of our technical skills to make creative contents.',

        ]);
    }
}
