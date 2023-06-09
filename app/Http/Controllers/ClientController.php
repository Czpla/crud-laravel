<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();

        return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();

        $client->name = $request->input('name');
        $client->last_name = $request->input('LastName');
        $client->email = $request->input('Email');

        $client->save();

        $clients = Client::all();

        return view('clients.index')->with('clients', $clients)
            ->with('msg', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);

        if ($client) {
            return view('clients.show')->with('client', $client);
        } else {
            return view('clients.show')->with('msg', 'Cliente não encontrado!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);

        if ($client) {
            return view('clients.edit')->with('client', $client);
        } else {
            $clients = Client::all();

            return view('clients.index')->with('clients', $clients)
                ->with('msg', 'Cliente não encontrado!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);

        $client->name = $request->input('name');
        $client->last_name = $request->input('LastName');
        $client->email = $request->input('Email');

        $client->save();

        $clients = Client::all();
        return view('clients.index')->with('clients', $clients)
            ->with('msg', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);

        $client->delete();

        $clients = Client::all();
        return view('clients.index')->with('clients', $clients)
            ->with('msg', "Cliente excluído com sucesso!");
    }
}
