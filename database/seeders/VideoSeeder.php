<?php

namespace Database\Seeders;

use App\Models\Description;
use App\Models\Goal;
use App\Models\Image;
use App\Models\Lesson;
use App\Models\Video;
use App\Models\Requirement;
use App\Models\Section;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = Video::factory(40)->create();

        foreach ($videos as $video) {
            Image::factory(1)->create([
                'imageable_id' => $video->id,
                'imageable_type' => 'App\Models\Video'
            ]);

            Requirement::factory(4)->create([
                'video_id' => $video->id
            ]);

            Goal::factory(4)->create([
                'video_id' => $video->id
            ]);

            $sections = Section::factory(4)->create(['video_id' => $video->id]);

            foreach ($sections as $section) {
                $lessons = Lesson::factory(4)->create(['section_id' => $section->id]);
                foreach ($lessons as $lesson) {
                    Description::factory(1)->create(['lesson_id' => $lesson->id]);
                }
            }
        }
    }
}
