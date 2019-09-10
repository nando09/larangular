<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{

	public function index()
	{
		return Task::all();
	}

	public function show($id)
	{
		return Task::find($id);
	}

	public function store(Request $request)
	{
		Task::create($request->all());
	}

	public function update(Request $request, $id)
	{
		$task = Task::findOrFail($id);
		$task->update($request->all());

		return $task;
	}

	public function delete(Request $request, $id)
	{
		$task = Task::findOrFail($id);
		$task->delete();

		return 204;
	}
}
