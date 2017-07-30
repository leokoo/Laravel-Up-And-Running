<?php

namespace App\Http\Controllers;

class TasksController extends Controller
{
    public function home()
    {
    	return "Hello World!";
    }

    public function index()
    {
    	return view('tasks.index')
		    ->with('task', Tasks::all());
    }

	/**
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * We're injecting our dependencies instead of using the Input facade
	 */

    public function store(\Illuminate\Http\Request $request)
    {
		$task = new Task;
		$task->title = $request->input('title');
		$task->description = $request->input('description');
		$task->save();

		return redirect('tasks');
    }
}
