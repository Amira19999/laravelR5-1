<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    private $columns = ['clientName','phone', 'email','website'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $client = new Client();
        // $client->clientName = $request->clientName;
        // $client->phone = $request->phone;
        // $client->email = $request->email;
        // $client->website = $request->website;
        // $client->save();
        Client::create($request->only($this->columns));
        return redirect('clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
<<<<<<< HEAD
        return view ('showClient',compact ('client'));
=======
        return view('showClient', compact('client'));
>>>>>>> 4e7be649a13bcf26637459ffb86bb44d65f21c6a
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
<<<<<<< HEAD

    {    $client = Client::findOrFail($id);
        return view ('editClient',compact ('client'));
=======
    {
        $client = Client::findOrFail($id);
        return view('editClient', compact('client'));
>>>>>>> 4e7be649a13bcf26637459ffb86bb44d65f21c6a
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< HEAD
        Client::where('id',$id)->update($request->only($this->columns));
        return redirect ('clients');
=======
        Client::where('id', $id)->update($request->only($this->columns));
        return redirect('clients');
>>>>>>> 4e7be649a13bcf26637459ffb86bb44d65f21c6a
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
<<<<<<< HEAD
        $id =$request->id;
        Client::where('id',$id)->delete();
        return redirect ('clients'); 
=======
        $id = $request->id;
        Client::where('id',$id)->delete();
        return redirect('clients');
>>>>>>> 4e7be649a13bcf26637459ffb86bb44d65f21c6a
    }

}