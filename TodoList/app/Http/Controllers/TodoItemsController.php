<?php

namespace App\Http\Controllers;


use App\Models\TodoItem;

class TodoItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = auth()->user()->todo_items;

        return view('todoList', compact('items'));
    }

    public function store()
    {
        $newTask = new TodoItem();
        $newTask->text = request()->inputText;
        $newTask->user_id = auth()->user()->id;
        $newTask->save();

        return redirect('/');
    }

    public function destroy(TodoItem $item)
    {
        $item->delete();
        return redirect('/');
    }

    public function update(TodoItem $item)
    {
        print $item;
        $item->done = $item->done  == '1' ? '0' : '1';
        $item->save();
        print $item;
        return ;
        return redirect('/');
    }
}
