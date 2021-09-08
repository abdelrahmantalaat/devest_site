<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Request $request){
        // Get the search value from the request
        $category = $request->input('category');
    
        // Search in the title and body columns from the posts table
        $categories = Category::query()
            ->where('name', 'LIKE', "%{$category}%")
            ->get();
    
        $posts = $categories[0]->blogs;
    
        $recent_post = Blog::latest()->first();
        $categories = Category::all();
        $settings = Setting::all();
    
        // Return the search view with the results compacted
        return view('blog', compact('posts','recent_post','categories','settings'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        //
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
