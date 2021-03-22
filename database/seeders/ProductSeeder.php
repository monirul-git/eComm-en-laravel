<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([ 
            [
                'name'=>'Oppo mobile',
                'price'=>'300',
                'description'=>'A smart phone with 8gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTeFanKHWXFAHzwNU9KmnXQK-994fjLWSvrNiNiWgREC7k-y7ycQY7xKhOjuIiJKLH3PWshJxDeYr2f9k8KHfus-7nw2dBWkIo3&usqp=CAc'
            ],
            [
                'name'=>'Panasonic Tv',
                'price'=>'400',
                'description'=>'A smart tv with much more feature',
                'category'=>'tv',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSlGyFPzEbQ9vHbdMNZhuS7thZ7v7h4UaSKhjENiGKnZlgYXee0FaTt5Y8KsIjeTdVXjTZK5yiLNzXiTHScDKnZLj0YV4gBTAU&usqp=CAc'
            ],
            [
                'name'=>'Soni tv',
                'price'=>'500',
                'description'=>'A smart tv with 4gb ram and much more feature',
                'category'=>'tv',
                'gallery'=>'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQNtlqMsnpwAYjZDpAdFy7wMVc9_ectGIe3TaC-stHdJP2v-cH6EqnmWlJwZ-HWZ6ci30apzjMNxNUDu3rN442T6OoPV3td3_WO&usqp=CAc'
            ],
            [
                'name'=>'LG fridge',
                'price'=>'200',
                'description'=>'A fridge with 4gb ram and much more feature',
                'category'=>'fridge',
                'gallery'=>'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTReE-mXtwozzG7cfJpu88iVbL9mCBKgKYi8VzW-GhZHKmPUip8ZDzGhYhGrBeIsPddvWYA-ho0YO94gn0SUqRbdrbd-NYOVnA&usqp=CAc'
            ]
        
        ]);
    }
}
