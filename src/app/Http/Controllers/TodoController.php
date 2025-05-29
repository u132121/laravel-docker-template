<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    // 一覧画面表示
    public function index()
    {
        $todos = $this->todo->all();

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

        $this->todo->fill($inputs);
        $this->todo->save();

        return redirect()->route('todo.index');
    }

    // 変更画面表示
    public function show($id)
    {
        $todo = $this->todo->find($id);
        
        return view('todo.show', ['todo' => $todo]);
    }

    public function edit($id)
    {
        $todo = $this->todo->find($id);
        
        return view('todo.edit', ['todo' => $todo]);
    }
}