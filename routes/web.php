use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/books', function () {
    return "Books Page - Coming Soon";
});

Route::get('/location', function () {
    return "Location Hierarchy Page - Coming Soon";
});

Route::get('/map', function () {
    return "GIS Map Page - Coming Soon";
});
