<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comicsList = Library::all();
        return view('library.index', compact('comicsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('library.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $info = $request->all();
            $newComicStrip = new Library();

            $newComicStrip->fill($info);
            $newComicStrip->save();

            return redirect()->route('Library.index')->with('add', 'Elemento aggiunto');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comicStrip = Library::findOrFail($id);
        return view('library.show', compact('comicStrip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comicStrip = Library::findOrFail($id);
        return view('library.edit', compact('comicStrip'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comicStrip = Library::findOrFail($id);
        $data = $request->all();
        $comicStrip->update($data);
        $comicStrip->save();
        
        return redirect()->route('Library.index')->with('update', 'Elemento aggiornato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comicStrip = Library::findOrFail($id);
        $comicStrip->delete();

        return redirect()->route('Library.index')->with('status', 'Elemento eliminato');
    }
}
