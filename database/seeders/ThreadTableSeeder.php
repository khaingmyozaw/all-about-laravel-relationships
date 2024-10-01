<?php

namespace Database\Seeders;

use App\Models\Thread;
use Illuminate\Database\Seeder;

class ThreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $threads = [
        ['body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."],
        ['body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."],
        ];
        
        foreach($threads as $thread) {
            Thread::updateOrCreate($thread);
        }
    }
}
