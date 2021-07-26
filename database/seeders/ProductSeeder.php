<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Features;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [

            [
                '500 Followers', 'Followers', '2000',
                [
                    'Real followers',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ],
            [
                '1000 Followers', 'Followers', '3000',
                [
                    'Real followers',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ],
            [
                '2000 Followers', 'Followers', '6000',
                [
                    'Real followers',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ],
            [
                '5000 Followers', 'Followers', '15000',
                [
                    'Real followers',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '10000 Followers', 'Followers', '30000',
                [
                    'Real followers',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '20000 Followers', 'Followers', '60000',
                [
                    'Real followers',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '50000 Followers', 'Followers', '130000',
                [
                    'Real followers',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '100000 Followers', 'Followers', '230000',
                [
                    'Real followers',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ]

            ///.//////// Likes


            , [
                '500 Likes', 'Likes', '1000',
                [
                    'Real likes',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '1000 Likes', 'Likes', '2000',
                [
                    'Real likes',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '2000 Likes', 'Likes', '4000',
                [
                    'Real likes',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '5000 Likes', 'Likes', '10000',
                [
                    'Real likes',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '10000 Likes', 'Likes', '20000',
                [
                    'Real likes',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '20000 Likes', 'Likes', '40000',
                [
                    'Real likes',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '50000 Likes', 'Likes', '100000',
                [
                    'Real likes',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '100000 Likes', 'Likes', '200000',
                [
                    'Real likes',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '500 Views', 'Views', '1000',
                [
                    'Increased video views',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '1000 Views', 'Views', '2500',
                [
                    'Increased video views',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '500 Views', 'Views', '1000',
                [
                    'Increased video views',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '2000 Views', 'Views', '4500',
                [
                    'Increased video views',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '5000 Views', 'Views', '10500',
                [
                    'Increased video views',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '10000 Views', 'Views', '30000',
                [
                    'Increased video views',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '20000 Views', 'Views', '40000',
                [
                    'Increased video views',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '50000 Views', 'Views', '100000',
                [
                    'Increased video views',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '100000 Views', 'Views', '210000',
                [
                    'Increased video views',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]
            ], [
                '', 'Comments', '100',
                [
                    'Increased comments',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]

            ], [
                '1000 - 100000+ followers available', 'Pages', '',
                [
                    'Real Account',
                    'Delivered in 1-2 days',
                    'Refill guaranteed',
                    'No password needed'
                ]

            ]


        ];



        foreach ($products as $key => $value) {
            $product = new Products();
            $product->name = $value[0];
            $product->type = $value[1];
            $product->price = $value[2];
            $product->save();
            $features = $value[3];

            foreach ($features as $key => $val) {
                $feature = new Features();
                $feature->product_id = $product->id;
                $feature->value = $val;
                $feature->save();
            }
        }
    }
}
