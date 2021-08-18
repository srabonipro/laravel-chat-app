<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function pendingTasks()
    {
        $pendingTasks = Task::whereStatus('pending')->get();
        return response()->json($pendingTasks);
    }

    public function progressingTasks()
    {
        $progressingTasks = Task::whereStatus('progressing')->get();
        return response()->json($progressingTasks);
    }

    public function completedTasks()
    {
        $completedTasks = Task::whereStatus('completed')->get();
        return response()->json($completedTasks);
    }

    public function sortTasks(Request $request)
    {
        $tasks = Task::all();
        foreach ($tasks as $task) {
            $task->timestamps = false; // To disable update_at field updation
            $id = $task->id;

            foreach ($request->order as $order) {
                if ($order['id'] == $id) {
                    $task->update(['order' => $order['position']]);
                }
            }
        }

        return true;
    }
}
