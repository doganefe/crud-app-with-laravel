<?php
use App\Http\Middleware\checkAge;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*
/
/*
GET /projects (index)
GET /projects/create (create)
GET /projects/1 (show)
POST /projests (store)
GET /projects/1/edit (edit)
PATCH /projects/1 (update)
DELETE /projects/1 (destroy)
*/

Route::get('/','HomeController@index');

Route::resources([
    'posts' => 'PostController',
    'blog' => 'BlogController'
]);

Route::patch('/tasks/{task}','PostTasksController@update');
Route::post('/posts/{post}/tasks','PostTasksController@store');

Route::post('/blog/{blog}/gorevs','BlogGorevsController@store');
Route::delete('/gorevs/{gorev}','BlogGorevsController@destroy');
Route::patch('/gorevs/{gorev}','BlogGorevsController@update');



//Auth::routes();
//Route::get('/', 'HomeController@index')->name('home');


