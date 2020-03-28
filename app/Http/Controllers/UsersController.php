<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Level;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $us=User::all();
        return view('welcome', compact('us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $us=User::find($id);
		$ins=$us->profile->instagram;
		$git=$us->profile->github;
		$web=$us->profile->web;
		$pa=$us->location->country;
		$ni=$us->level;
		$pos=$us->posts()->withCount('comments')->get();
		$vid=$us->videos()->withCount('comments')->get();
		$lev=$us->level;
		
        return view('profile', compact("us", "ins", "git", "web", "pa", "ni", "pos", "vid"));
    }

	 public function levels($id)
    {
        $level=Level::find($id);
		

        $posts=$level->posts()

            ->with('category', 'image', 'tags')
            ->withCount('comments')->get();

        $videos=$level->videos()

            ->with('category', 'image', 'tags')
            ->withCount('comments')->get();
		
        return view('levels', compact("level", 'posts', 'videos'));
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
