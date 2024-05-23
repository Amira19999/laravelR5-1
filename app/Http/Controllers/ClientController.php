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

       // 'ClientName' => 'requed|max:100|min:5',
      //  'phone'=>'requed|min:6',
        //'email'=>'requed|min:6',

            'clientName' => 'required|max:100|min:5',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required',
            'city' => 'required|max:30'
     

        $data['active'] = isset($request->active);
        Client::create($data);
        return redirect('clients');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);

        return view ('showClient',compact ('client'));

        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {  
          $client = Client::findOrFail($id);
        return view ('editClient',compact ('client'));

    {
        $client = Client::findOrFail($id);
        return view('editClient', compact('client'));

    }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Client::where('id', $id)->update ($request->only($this->columns));
        $masage
        $data = $request->validate([
            'clientName' => 'required|max:100|min:5',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required',
            'Image'=>'required',
        ]$masage);
        Client::create($data);
        return redirect('clients');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {

        $id =$request->id;
        Client::where('id',$id)->delete();
        return redirect ('clients'); 

        $id = $request->id;
        Client::where('id',$id)->delete();
        return redirect('clients');

        //error
        public function errMsg(){
            return[
               'clientName'.required=>the client name is missed
            ]
        }

    }

}