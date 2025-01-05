<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exdata;

class CustomerController extends Controller
{

    protected $task;
    public function __construct()
    {
        $this->task = new Exdata();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res['tasks'] = $this->task->all();
        return view ('Components.index')->with($res);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Components.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->task->create($request->all());
        return redirect()->route('index')->with('success', 'Task created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, string $id)
    {
        $task=Exdata::find($id);
        $task->update($request->all());
        return redirect()->route('index')->with('success', 'Task updated successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task=$this->task->find($id);
        return view ('components.edit', ['task'=>$task]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $task=$this->task->find($id);
        $task->delete();
        return redirect()->back();
    }

}
