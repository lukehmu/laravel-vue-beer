<?php

use App\Beer;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     $beers = Beer::orderBy('created_at', 'asc')->get();
//     `return view('beer', [
//         'beers' => $beers
//     ]);`
// });

// Route::get('/add-beer', function () {
//     return view('addBeer');
// });


// Route::post('/beer', function (Request $request) {
//     $validator = Validator::make($request->all(), [
//         'name' => 'required|max:255',
//     ]);

//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }

//     // $beer = new Beer;
//     // $beer->name = $request->name;
//     // $beer->description = $request->description;
//     // $beer->percentage = $request->percentage;
//     // $beer->save();


//     return redirect('/');
// });
// Route::post('/beer', 'BeerController@store');
Route::resource('beers', 'BeerController');
