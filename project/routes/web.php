<?php

class Mail
{

}

class RegistersUsers
{
	
	protected $email;
	protected $name;

	public function __construct(Mail $email, $name)
	{
		$this->email = $email;
		$this->name = $name;
	}

	public function sayHello()
	{
		return "Hello {$this->name}.";
	}
}

// App::bind('RegistersUsers', function(){
// 	return new RegistersUsers(new Mail, 'Matheus');
// });

// app()->singleton('RegistersUsers', function(){
// 	return new RegistersUsers(new Mail, 'Matheus');
// });

app()->bind('RegistersUsers', function(){
	return new RegistersUsers(new Mail, 'Matheus');
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/cards', 'CardsController@index');

Route::get('/cards/{card}', 'CardsController@show');

Route::post('/cards/{card}/notes', 'NotesController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit');

Route::patch('/notes/{note}', 'NotesController@update');

// Route::get('/ServiceContainer', function(RegistersUsers $registersUsers){
// 	$one = app('RegistersUsers');
// 	return $one->sayHello();
// });

Route::get('/ServiceContainer', function(RegistersUsers $registersUsers){
	$one = app('RegistersUsers');
	$two = app('RegistersUsers');

	dd($one, $two);
});