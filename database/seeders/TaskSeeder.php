<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'body' => 'we denounce with righteous',
            'status' => 'pending',
        ]);
        Task::create([
            'body' => 'indignation and dislike men who are',
            'status' => 'pending',
        ]);
        Task::create([
            'body' => 'On the other hand',
            'status' => 'pending',
        ]);
        Task::create([
            'body' => 'Lorem ipsum dolor sit amet',
            'status' => 'pending',
        ]);
        Task::create([
            'body' => 'consectetur adipiscing elit',
            'status' => 'progressing',
        ]);
        Task::create([
            'body' => 'sed do eiusmod tempor incididunt',
            'status' => 'progressing',
        ]);
        Task::create([
            'body' => 'labore et dolore magna aliqua',
            'status' => 'progressing',
        ]);
        Task::create([
            'body' => 'quis nostrud exercitation ullamco',
            'status' => 'progressing',
        ]);
        Task::create([
            'body' => 'aute irure dolor in reprehenderit',
            'status' => 'progressing',
        ]);
        Task::create([
            'body' => 'beatae vitae dicta sunt explicabo',
            'status' => 'completed',
        ]);
        Task::create([
            'body' => 'enim ipsam voluptatem quia voluptas',
            'status' => 'completed',
        ]);
        Task::create([
            'body' => 'mistaken idea of denouncing pleasure',
            'status' => 'completed',
        ]);
        Task::create([
            'body' => 'voluptate velit esse cillum dolore',
            'status' => 'completed',
        ]);
        Task::create([
            'body' => 'sunt in culpa qui officia',
            'status' => 'completed',
        ]);
    }
}
