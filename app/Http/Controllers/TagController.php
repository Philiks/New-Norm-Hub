<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return Tag::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Models\Tag $tag
     */
    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->id = Str::uuid()->toString();
        $tag->title = $request->title;
        $tag->save();

        return $tag;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return json $title
     */
    public function show(Tag $tag)
    {
        return response()->json(['title' => $tag->title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return json $title
     */
    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->all());
        return response()->json(['title' => $tag->title]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return back();
    }
}
