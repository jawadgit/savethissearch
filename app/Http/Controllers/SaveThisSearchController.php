<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaveThisSearch;

class SaveThisSearchController extends Controller
{
    public function index()
    {
        //return 'list';
        return SaveThisSearch::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Instantiate the model
        $record = new SaveThisSearch;

        // Set the data for the new document
        $record->store_id = $request->input('store_id');
        $record->customer_id = $request->input('customer_id');
        $record->search_string = $request->input('search_string');

        // Save the document to the MongoDB collection
        $record->save();
        return 'success';

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
