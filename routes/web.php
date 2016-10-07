<?php

class Mailer {

}

class RegisterUsers {

	protected $mailer;

	public function __construct(Mailer $mailer) {

		$this->mailer = $mailer;

	}

	public function setMailer(Mailer $mailer) {

		$this->mailer = $mailer;

	}

}


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function (RegisterUsers $registration) {
    var_dump($registration);
});


/*
|----------------------------------------------------------------------------
| Application Routes
|----------------------------------------------------------------------------
|
| This route group applies the 	"web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
	Route::get('posts', 'PostsController@index');
});