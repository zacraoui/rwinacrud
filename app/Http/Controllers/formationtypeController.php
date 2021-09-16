<?php

namespace App\Http\Controllers;

use App\formationtype;
use Illuminate\Http\Request;

class formationtypeController extends Controller
{
    public function index()
    {
        $fomationtype = formationtype::all();
        return view('index', compact('fomationtype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'title' => 'required|max:255',
            
        ]);
        $fomationtype = formationtype::create($storeData);

        return redirect('/formationtype')->with('completed', 'formationtype created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fomationtype = formationtype::findOrFail($id);
        return view('update', compact('formationtype'));
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
        $data = $request->validate([
            'title' => 'required|max:255',
            
        ]);

        formationtype::whereId($id)->update($data);
        return redirect('/formationtype')->with('completed', 'fomationtype updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fomationtype = formationtype::findOrFail($id);
        $fomationtype->delete();

        return redirect('/formationtype')->with('completed', 'fomationtype deleted');
    }   
}
