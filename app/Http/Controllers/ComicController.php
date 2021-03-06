<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $comics_album = Comic::all();
    return view('comhp', compact('comics_album'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
  $validated_comic = $request->validate([
            'title' => 'required|unique:comics',
            'description' => 'nullable'
        ]);

        Comic::create($validated_comic);
        return redirect()->route('comic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)

    {
  
    $date_format = $comic->sale_date;
    $date_format = date("M d y"); 
    
    return view('dett_comics',compact('comic','date_format'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
         return view('comic_edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
         $validated_comic = $request->validate([
            'title' => 'required|unique:comics',
            'description' => 'nullable'
        ]);
        $comic->update($validated_comic);

        return redirect()->route('comic.index')->with('message', 'Fumetto modificato con successo!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
         return redirect()->route('comic.index')->with('message', 'Fumetto eliminato con successo!');

    }
}
