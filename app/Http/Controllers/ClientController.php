<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class ClientController extends Controller
{
    public function create(){
       
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * 
    */
    public function index(){
        $client = client::all();
        return $client;
    }

    public function show($id)
{
    $clients = clients::find($id);
    return view('clients.show', ['clients'=>$clients]);
}

    public function get($id){
        $data = Person::find($id);
        return response()->json($data, 200);
      }

    /**
     * 
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request){
        $client = new client();
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->cel = $request->cel;
        $client->email = $request->email;
        $client->nit = $request->nit;

        $client->save();
    }


    /**
     * 
     * @param  \Illuminate\Http\Response $request
     * @param  \App\Models\client $product
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request){
        $client = client::findOrFail($request->id);
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->cel = $request->cel;
        $client->email = $request->email;
        $client->nit = $request->nit;

        $client->save();
        return $client;
    }


    /**
     * 
     * @param  \Illuminate\Http\Response $request
     * @param  \App\Models\client $product
     * @return \Illuminate\Http\Response
     * 
     */
    public function destroy(Request $request){
        $client = client::destroy($request->id);
        return $client;
    }
}
