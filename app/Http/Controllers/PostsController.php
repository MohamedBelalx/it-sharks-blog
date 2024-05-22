<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')->join('category', 'posts.category_id', '=', 'category.id')
            ->select('posts.*', 'category.title as category')->get();
        return view('dashboard.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->image;
        $image_new_name = time() . $image->getClientOriginalName();
        $image->move('image/posts', $image_new_name);
        Posts::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'user_id' => Auth::id(),
            'image' => '/image/posts/' . $image_new_name,
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Posts::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Posts::findOrFail($id);
        if ($request->image) {

            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('image/posts', $image_new_name);
            $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category,
                'user_id' => Auth::id(),
                'image' => '/image/posts/' . $image_new_name,
            ]);
        } else {
            $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category,
                'user_id' => Auth::id(),
            ]);
        }
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Posts::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }
}
