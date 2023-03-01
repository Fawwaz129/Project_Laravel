<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('is_admin');
    }
    public function index(Request $request) {
        if ($request -> search) {
            $task = Task::where('task', 'LIKE', "%$request->search%")
            ->get();

            return $task;
        }
        $task = Task::paginate();
        return view('task.index', [
            'data' => $task
        ]);
        
    }

    public function user(Request $request) {
        if ($request -> search) {
            $task = User::where('user', 'LIKE', "%$request->search%")
            ->get();

            return $task;
        }
        $task = User::paginate();
        return view('task.user', [
            'data' => $task
        ]);
        
    }
    public function create(){
        return view('task.create');
    }
    public function store(Request $request){
        Task::create([
            'book_name' => $request->book_name,
            'rate_book' => $request->rate_book,
            'pengarang_book' => $request->pengarang_book
        ]);
        // return 'Success';
        return redirect('/tasks');
    }
    public function delete($id) {
        $task = Task::find($id)
        ->delete();
        return redirect('/tasks');
    }
    public function update(Request $request, $id){
        $task = Task::find($id);
        $task->update([
            'book_name' => $request->book_name,
            'rate_book' => $request->rate_book,
            'pengarang_book' => $request->pengarang_book
        ]);
        return redirect('/tasks');
    }
    public function edit($id){
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }
}
