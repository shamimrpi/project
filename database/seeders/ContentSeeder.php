<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::create([
            'name' => 'Link Up Technology',
            'phone_1' => '019251541525',
            'phone_2' => '019251541524',
            'logo' => 'no logo',
            'slogan' => 'Lorem ipsum dolor sit amet',
            'email' => 'linkuptechnology@gmail.com',
            'address'=> 'Mirpur-10,Dhaka',
            'about_description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                                    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam',
            'about_image'=> 'no image',
            'fb_link' => 'facebook.com/linkup',
            'youtube_link' => 'youtube.com/linkup',
            'linkedin_link'=> 'linkedin.com/linkup',
            'inst_link' => 'instragram.com/linkup',
            'condition'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident',
            'mission'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit',


        	]);
    }
}
