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
        $comicsList = Comic::all();

        $data = [
            "fumetti" => $comicsList
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

        // Creo un nuovo comic e ne scrivo i dati
        $newComic = new Comic();
        $newComic->titolo = $data["titolo"];
        $newComic->autore = $data["autore"];
        $newComic->descrizione = $data["descrizione"];
        $newComic->img = $data["img"];
        // Scrivo il comic sul database
        $newComic->save();

        // Col view si fa così, ma in pagina non si vedrà l'id
        // $data = [
            // "fumetti" => $newComic
        // ];
        // return view("show", $data);

        return redirect()->route("comics.show" , $newComic);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comicsList = Comic::findOrFail($id);

        $data = [
            "fumetti" => $comicsList
        ];

        return view("show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comicSingolo = Comic::findOrFail($id);
        $data = [
            "comic" => $comicSingolo
        ];

        return view("comics.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // $comic è la nostra istanza di comic
        // $data è un array associativo con tutti i dati inviati dal form

        //come per il metodo store, recupero tutti i dati inviati con il form

        
        // $comicsList = Comic::all();
        // $data = [
        //     "fumetti" => $comicsList
        // ];
        // $data = Comic::all();
        // $data =[
        //     Comic::all()
        // ];


        $data = $request->all();

        // return dump($data);

        // non ho bisogno di creare un new comic
        // cambio i valori delle proprietà
        // esempio: $comic->nomeCampoSulDatabase = $data["nameDellaInputNelForm"];
        $comic->titolo = $data["titolo"];
        $comic->autore = $data["autore"];
        $comic->descrizione = $data["descrizione"];
        $comic->img = $data["img"];
        $comic->save();

        //come per il metodo store, redireziono sulla pagina che mostra i dettagli del gioco
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('home');
    }
}
