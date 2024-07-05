<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gamesList = Comic::all();

        $data = [
            "fumetti" => $gamesList
        ];

        return view("home", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$validatedData = $request->validate([
            'titolo' => 'required|string|max:255',
            // Aggiungi qui altre regole di validazione per altri campi
        ]);

        // Creare un nuovo fumetto con i dati validati
        $comic = Comic::create($validatedData);

        // Reindirizzare l'utente alla pagina dei dettagli del fumetto creato
        return redirect()->route('show', ['id' => $comic->id]);*/


        // return dump( $request->all() );

        $data = $request->all();
        // dump($data);
        
        // Creo un nuovo Game e ne scrivo i dati
        $newComic = new Comic();
        $newComic->titolo = $data["titolo"];
        $newComic->autore = $data["autore"];
        $newComic->descrizione = $data["descrizione"];
        $newComic->img = $data["img"];
        // Scrivo il Game sul database
        $newComic->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gamesList = Comic::findOrFail($id);

        $data = [
            "fumetti" => $gamesList
        ];

        return view("show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
