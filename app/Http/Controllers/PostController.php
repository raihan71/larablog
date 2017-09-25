<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::paginate(10);
        return view('admin/posting')->with('post',$post);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/posting-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->get('title');
        $post->desc = $request->get('content');
       if($request->hasFile('image')){
         $post->image = $request->file('image');

         $imageName = time().'.'.$request->image->getClientOriginalExtension();
         $request->image->move(public_path('/images'), $imageName);
        }else{
         $post->image = ('images/default.jpg');
        }
        $post->save();
        return redirect('admin/post');
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
        $post = post::find($id);
        return view('admin/posting-edit')->with('post',$post);
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
       $post = Post::find($id);
       $post->title = $request->get('title');
       $post->desc = $request->get('content');
       if($request->hasFile('image')){
         $post->image = $request->file('image');
         
         $imageName = time().'.'.$request->image->getClientOriginalExtension();
         $request->image->move(public_path('/images'), $imageName);
        }
       $post->save();
        return redirect('admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // Massive delete for checkbox All

    public function destroyall(Request $request)
    {
        if(count(collect($request->checkbox)) > 1){
          $post = Post::whereIn('id',$request->get('checkbox'));
          $post->delete();
        }else{
          $post = post::find($request->get('checkbox'))->first();
          $post->delete();
        }
        return back();
    }
}
