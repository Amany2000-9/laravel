<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('Backend.Posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        return view('Backend.Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('photo'))
        {
            $file=$request->photo;
            $new_file=time().$file->getClientOriginalName();
            $file->move('image_store/',$new_file);
        }

            Post::create([
                "title"=>$request->title,
                "desc"=>$request->desc,
                "photo"=>'image_store/'.$new_file,
            ]);



        return redirect()->back();
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
    public function edit($id)
    {
        $posts=Post::find($id);
        return view('Backend.Posts.edit',compact('posts'));
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

        $posts = Post::find($id);

        if($request->hasFile('photo'))
        {
            $file=$request->photo;
            $new_file=time().$file->getClientOriginalName();
            $file->move('image_store',$new_file);

        }

        $posts->title=$request->title;
        $posts->desc=$request->desc;
        $posts->update();
        return redirect()->route('Posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->destroy($id);
        return redirect()->route('Posts.index');
    }
}
