<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio',['portfolios' => $portfolio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'platforms' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'platform_url' => 'string'
        ]);

        $input = $request->all();
        $input['platforms'] = json_encode($request->platforms);

        if ($image = $request->file('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/portfolio'), $imageName);
            $input['image'] = $imageName;
        }

        Portfolio::create($input);

        return redirect()->route('portfolio.index')
            ->with('success','Portfolio post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio_post',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'platforms' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'platform_url' => 'string'
       ]);

        $input = $request->all();
        $input['platforms'] = json_encode($request->platforms);
        
        if ($image = $request->file('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/portfolio'), $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        $portfolio->update($input);

        return redirect()->route('portfolio.index')
            ->with('success','Portfolio updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('portfolio.index')
            ->with('success','Portfolio post deleted successfully');
    }
}
