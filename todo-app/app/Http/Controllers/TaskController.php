<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => 'Task 1', 'description' => 'Description for Task 1', 'created_at' => '2023-01-01', 'updated_at' => '2023-01-02', 'status' => false, 'priority' => 'High', 'assignment' => 'User 1'],
            ['id' => 2, 'title' => 'Task 2', 'description' => 'Description for Task 2', 'created_at' => '2023-01-03', 'updated_at' => '2023-01-04', 'status' => true, 'priority' => 'Medium', 'assignment' => 'User 2'],
            ['id' => 3, 'title' => 'Task 3', 'description' => 'Description for Task 3', 'created_at' => '2023-01-05', 'updated_at' => '2023-01-06', 'status' => false, 'priority' => 'Low', 'assignment' => 'User 3'],
        ];

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        
    }

    public function store()
    {

    }

    public function show($id)
    {
        $task = [
            'id' => $id,
            'title' => 'Task Title',
            'description' => 'Task Description',
            'created_at' => '2023-01-01',
            'updated_at' => '2023-01-02',
            'status' => false,
            'priority' => 'High',
            'assignment' => 'User 1',
        ];

        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id)
    {
        
    }

    public function update($id)
    {
       
    }

    public function destroy($id)
    {
        
    }
}