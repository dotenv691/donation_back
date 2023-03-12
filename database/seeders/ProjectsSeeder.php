<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projects;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = array(
            array(
                'id' => 1,
                'category' => 'non-profit',
                'title' => 'Cancer Support Munkh Foundation',
                'img' => '1.jpg',
            ),
            array(
                'id' => 2,
                'category' => 'non-profit',
                'title' => 'Cancer Support Munkh Foundation',
                'img' => '2.jpg',
            ),
            array(
                'id' => 3,
                'category' => 'non-profit',
                'title' => 'Cancer Support Munkh Foundation',
                'img' => '3.jpg',
            ),
            array(
                'id' => 4,
                'category' => 'non-profit',
                'title' => 'Cancer Support Munkh Foundation',
                'img' => '4.jpg',
            ),
            array(
                'id' => 5,
                'category' => 'non-profit',
                'title' => 'Cancer Support Munkh Foundation',
                'img' => '5.jpg',
            ),
            array(
                'id' => 6,
                'category' => 'non-profit',
                'title' => 'Cancer Support Munkh Foundation',
                'img' => '6.jpg',
            ),
            array(
                'id' => 7,
                'category' => 'non-profit',
                'title' => 'Cancer Support Munkh Foundation',
                'img' => '7.jpg',
            ),
            array(
                'id' => 8,
                'category' => 'non-profit',
                'title' => 'Cancer Support Munkh Foundation',
                'img' => '8.jpg',
            ),
        );
        foreach($projects as $project) {
            $p = new Projects;
            $p->id = $project['id'];
            $p->title = $project['title'];
            $p->category = $project['category'];
            $p->img = $project['img'];
            $p->save();
        }
    }
}
