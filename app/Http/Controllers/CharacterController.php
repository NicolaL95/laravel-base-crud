<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters_list = Character::orderBy('id','desc')->paginate(5);
        return view('characters_list',compact('characters_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_characters = $request->validate([
            'name' => ['required', 'unique:characters'],
            'birth_date' => ['nullable'],
            'bio' => ['nullable']
        ]);

        Character::create($validate_characters);
        
        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return view('characters_show',compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        return view('characters_edit',compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
          $validated_character = $request->validate([
            'name' => [
                'required',
                Rule::unique('characters')->ignore($character->id),
            ],
            'birth_date' => ['nullable'],
            'bio' => ['nullable'],
            
        ]);
       
        $character->update($validated_character);
        return redirect()->route('characters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('characters.index');
    }
}
