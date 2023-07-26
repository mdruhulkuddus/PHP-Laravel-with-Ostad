//Step 1: Open CLI for set up Laravel project

composer create-project laravel/laravel TaskApp
cd TaskApp

// Step 2: Create the Task model

php artisan make:model Task -m

// Step 3: Define the Task migration
<?php 

public function up()
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->boolean('is_completed')->default(false);
        $table->timestamps();
    });
}

// Step 4: migrate on database

php artisan migrate

// Step 5: Create the Task controller

php artisan make:controller TaskController --resource

// Step 6: Implement the TaskController for CRUD operation

<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'is_completed' => 'boolean',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}



//Step 7: Define the routes
<?php

use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);
