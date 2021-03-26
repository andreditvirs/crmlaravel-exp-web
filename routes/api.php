<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Upcoming;
use App\Http\Resources\UpcomingResource;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ** Upcoming Task *//
Route::get('/upcoming', function(){
    $upcoming = Upcoming::all();
    return UpcomingResource::collection($upcoming);
});

Route::post('/upcoming')