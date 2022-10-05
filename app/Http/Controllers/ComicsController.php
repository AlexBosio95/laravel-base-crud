<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $request->validate(
            [
                'title' => 'required|max:50|min:2',
                'description' => 'required|max:65535|min:50',
                'thumb' => 'required|max:255|url',
                'series' => 'required|max:50|min:2',
                'type' => 'required|max:50|min:2',
                'sale_date' => 'required|date',
                'price' => 'required|integer'
            ]
        );

        $info = $request->all();
            $newComicStrip = new Library();

            $newComicStrip->fill($info);
            $newComicStrip->save();

            return redirect()->route('Library.index')->with('add', 'Item added');;
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
        $request->validate(
            [
                'title' => 'required|max:50|min:2',
                'description' => 'required|max:65535|min:50',
                'thumb' => 'required|max:255|url',
                'series' => 'required|max:50|min:2',
                'type' => 'required|max:50|min:2',
                'sale_date' => 'required|date',
                'price' => 'required|integer'
            ]
        );

        $comicStrip = Library::findOrFail($id);

        $data = $request->all();
        $comicStrip->update($data);
        $comicStrip->save();
        
        return redirect()->route('Library.edit', ['Library' => $comicStrip])->with('update', 'Item updated');
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

        return redirect()->route('Library.index')->with('status', 'Item deleted');
    }
}
