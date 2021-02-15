<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiscussionRequest;  

use App\Discussion;

use Illuminate\Support\Str;

use Illuminate\Http\Request;


class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index () 
    {
        return view ('discussions.index',[
            'discussions' => Discussion::filterByChannels()->paginate(5) 
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth')->only(['create','store']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('discussions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiscussionRequest $request)
    {
        auth()->user()->discussions()->create ([
            'title' => $request ->title,
            'content' => $request ->content,
            'channel_id' => $request ->channel,
            'slug' => Str::slug($request->title)
        ]);

        session()->flash('success','Discussion posted.');
        return redirect()->route('discussion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Discussion $discussion)
    {
        return view ('discussions\show', [
            'discussion' => $discussion
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
