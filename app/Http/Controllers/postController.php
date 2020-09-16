<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use App\post;
use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
      {  
        $posts=post::with('User')->get();
        //$posts = post::orderBy('id', 'asc')->get();
        //dd($posts);
        return view("posts.list",["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        $request['user_id']= Auth::user()->id;
        post::create($request->all());
        // post:: create([
        //     'title' => "$request->title",
        //     'body' => "$request->body",
        //     'user_id' => 1,
        // ]);
        // $post= new post();
        // $post->title=$request->title;
        // $post->body=$request->body;
        // $post->user_id=1;
        // $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=post::find($id);
        return view("posts.show",['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=post::find($id);
        return view("posts.edit",['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPost $request, $id)
    {
        $post = post::find($id);
        $request['user_id'] = Auth::user()->id;
        post::create($request->all());
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::find($id)->delete();
        return redirect()->route('posts.index');
    }
    public function showall()
    {
        $posts = post::paginate(2);
        return view("posts.showall",["posts"=>$posts]);
    }

    public function show_ur_posts(){

        $postes=User::find(Auth::user()->id)->posts;
        //$postes->join('posts', 'posts.user_id', '=', 'users.id')->get();
        //$posts->find($no)->get();
        //dd($postes);
        return view("posts.show_ur_posts", ["postes" => $postes]);
    }
    
}
