<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pricing::create([
            'name' => 'Premium',
            'price' => '280000',
            'features' => 'Unlimited Pages,Comodo Positive SSL,Unlimited Email,Project Duration: 47days,Yearly Renewal: ₦103,300,Logo design,Weekly back up,Unlimited Disk Space,Domain Name: You pick,3-month maintenance,Live Chat,Advanced SEO,Contact Form,Ecommerce,Payment gateway,Social Share,Search Engine Submission'
        ]);
        Pricing::create([
            'name' => 'Professional',
            'price' => '175800',
            'features' => '21 Pages,Comodo Positive SSL,Customise Email: 25,Project Duration: 31days,Yearly Renewal: ₦62,300,Weekly back up,Disk Space 12GB,Domain Name: .com,2-month maintenance,Live Chat,Basic SEO,Contact Form,Ecommerce,Payment gateway,Social Share,Search Engine Submission'
        ]);
        Pricing::create([
            'name' => 'Standard',
            'price' => '105000',
            'features' => '10 Pages,Basic SSL,Customise Email: 10,Project Duration: 27days,Yearly Renewal: ₦41,650,Weekly back up,Disk Space 6GB,Domain Name: .com,Live Chat,Basic SEO,Contact Form,Ecommerce,Payment gateway,Social Share,Search Engine Submission'
        ]);
        Pricing::create([
            'name' => 'Starters',
            'price' => '65000',
            'features' => '5 Pages,Basic SSL,Customise Email: 5,Project Duration: 11days,Yearly Renewal: ₦24,300,Disk Space 2GB,Domain Name: .com.ng,Live Chat,Basic SEO,Contact Form,Social Share,Search Engine Submission'
        ]);
    }
}
