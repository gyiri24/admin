<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Rating;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rating::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rating::create([
            'service_id' => $request->get('service_id'),
            'rating'  => $request->get('rating'),
            'comment'  => $request->get('comment')
        ]);
        
        return response()->json('Succes', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        return $rating;
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
    public function update(Request $request, Rating $rating)
    {
        $rating->update([
            'service_id' => $request->get('service_id'),
            'rating'  => $request->get('rating'),
            'comment'  => $request->get('comment')
        ]);

        return response()->json('Succes', 204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        $rating->delete();

        return response()->json('No content', 204);
    }
}
