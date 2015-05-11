<?php
/* This is a new user defined controller */
/* location: Desktop/laravel/app/controllers/Taskscontroller.php */


class TasksController extends BaseController {


public function home()
{
$tasks=Task::all();
return View::make('home', compact('tasks'));
}

public function create()
{
	return View::make('create');
}

public function edit(Task $task)
{

	return  View::make('edit', compact('task')); 
}

public function delete(Task $task)
{
	return View::make('delete', compact('task'));
}


public function saveCreate()
{
$input = Input::all();
$task = new Task;
$task->title = Input::get('title');
$task->body = Input::get('body');
$task->save();
return Redirect::action('TasksController@home');
}

public function doEdit()
{
$task = Task::findOrFail(Input::get('id'));
$task->title = Input::get('title');
$task->body = Input::get('body');
$task->done = Input::get('done');
$task->save();
return Redirect::action('TasksController@home');
}

public function doDelete()
{
$task = Task::findOrFail(Input::get('id'));
$task->delete();
return Redirect::action('TasksController@home');
}

} // End of Taskscontroller class


