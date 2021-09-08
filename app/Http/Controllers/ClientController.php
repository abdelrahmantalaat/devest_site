<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class ClientController extends Controller
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
        $client = Client::all();
        return view('admin.clients', ['clients'=>$client]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request -> validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $input = $request->all();

        // if ($image = $request->file('image')) {

        //     $image = $request['image'];
        //     \Storage::disk('public')->putFileAs('images/client',$image, $image);
        //     $input['image'] = $image;
        // }

        Client::create($input);

        return redirect()->route('client.index')
            ->with('success','client feedback added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client_edit',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);

        $input = $request->all();

        // if ($client_photo = $request->file('image')) {
        //     $client_photo = $request['image'];
        //     \Storage::disk('public')->putFileAs('images/client',$client_photo, $client_photo);
        //     $input['image'] = $client_photo;
        // }else{
        //     unset($input['image']);
        // }

        $client->update($input);

        return redirect()->route('client.index')
            ->with('success','Client review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('client.index')
            ->with('success','Client review deleted successfully');
    }
}
