class demo extends Controller
{
    public function gotoview($name)
    {
        $data = compact('name');
        return view('first')->with($data);
    }
}
use App\Http\Controllers\demo;
Route::get('/', [demo::class, 'gotoview']);

