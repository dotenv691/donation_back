<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feautured;

class FeauturedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feautre = new Feautured;
        $feautre->id = 1;
        $feautre->category = 'Donation';
        $feautre->title = 'Together, we can make a difference in the lives of cancer patients in Mongolia.';
        $feautre->desc = 'Cancer is a devastating disease that affects millions of people around the world, including in Mongolia. Many cancer patients in Mongolia face significant financial and logistical challenges when it comes to accessing the care and treatment they need. The Cancer Support "Munkh" Foundation is dedicated to addressing these challenges and providing meaningful support to cancer patients and their families.';
        $feautre->img = '1.png';
        $feautre->save();
    }
}
