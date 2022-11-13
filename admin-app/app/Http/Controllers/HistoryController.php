<?php

namespace App\Http\Controllers;

use App\Http\Resources\HistoryResource;
use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$history = History::all();

        //return  view('history.index');
        return  HistoryResource::collection(History::all());
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('user_id', 'service_id', 'price');

        $user = User::find($data['user_id']);
        $amount = $user['amount'] - $data['price'];

        $user->update([
            'amount' => $amount
        ]);

        $history = History::create([
            'user_id' => $data['user_id'],
            'service_id' => $data['service_id'],
            'price' => $data['price']
        ]);

        return response()->json($history->id, 204);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        return HistoryResource::make($history);
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
    public function update(Request $request, History $history)
    {
        $data = $request->only('user_id', 'service_id', 'price');

        $user = User::find($data['user_id']);
        $amount = $user['amount'] - $data['price'];

        $user->update([
            'amount' => $amount
        ]);

        $history->update([
            'user_id' => $data['user_id'],
            'service_id' => $data['service_id'],
            'price' => $data['price']
        ]);

        return response()->json($history->id, 204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        $history->delete();

        return response()->json('Succes', 204);
    }
}
