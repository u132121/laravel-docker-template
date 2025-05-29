<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // 一覧画面表示
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('todo.index', ['todos' => $todos]);
    }
    
    // 新規追加画面表示
    public function create()
    {
        return view('todo.create');
    }

    // 新規追加処理
    public function store(Request $request)
    {
        $inputs = $request->all();

        $todo = new Todo(); 
        $todo->fill($inputs);
        $todo->save();

        return redirect()->route('todo.index');
    }

    // 変更画面表示
    public function show($id)
    {
        $model = new Todo();
        $todo = $model->find($id);

        return view('todo.show', ['todo' => $todo]);
    }
}