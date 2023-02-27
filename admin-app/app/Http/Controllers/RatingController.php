<?php

namespace App\Http\Controllers;

use App\Http\Resources\RatingResource;
use Illuminate\Http\Request;
use  App\Models\Rating;
use  App\Models\Service;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return RatingResource::collection(Rating::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
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
     * @param Rating $rating
     * @return Rating
     */
    public function show(Rating $rating)
    {
        return $rating;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Rating $rating)
    {
        $rating->delete();

        return response()->json('No content', 204);
    }

    public function getServiceRating(Service $service): AnonymousResourceCollection
    {
        $ratings = Rating::where('service_id', '=', $service->id)->get();

        return RatingResource::collection($ratings);
    }
}
