Route::get('/{name?}', function ($name = Null) {
    $data = compact('name');
    return view('first')->with($data);
});
