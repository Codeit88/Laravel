<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<div class="form">
<form action="{{URL('/')}}/reg" method="post" >
@csrf
<input type="text" name="name" placeholder="enter name">;
<input type="password" name="password" placeholder="password">;

<button type="submit" value="Save "></button>;
</div> 


</form>
</div>


</body>
</html>


<!--   controller -->


    class reg extends Controller
{
    public function get_n()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        print_r($request->all());
    }
}


<!--   routing -->


use App\Http\Controllers\reg;
Route::get('/reg', [reg::class, 'get_n']);

Route::post('/reg', [reg::class, 'store']);