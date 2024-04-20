<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;

class TopicController extends Controller
{
  
    public function index()
    {
        return view('topics.index',['topics'=>Topic::all()]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('topics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $topic = Topic::create($request->validated());
      

        
        return redirect()->route('topics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        return view('topics.show',compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        return view('topics.show',compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopicRequest $request, Topic $topic)
    {
        $topic->update($request->validated());
        return redirect()->route('topics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id){
        Topic::Destroy($id);
        return redirect()->route('topics.index');
    }
  
    public function destroy($id)
    {
        $topic = Topic::withTrashed()->where('id', $id)->first();
        $topic->forceDelete();
        
        return redirect()->route('topics.index');
    }
}
