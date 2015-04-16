<?php
//Require the composer autoloader. 
require(dirname(dirname(__FILE__)).'/vendor/autoload.php');

//setup the application
\Disco\classes\App::instance()->setUp();


/**
 * YOUR APPLICATION LOGIC GOES BELOW
 * ---------------------------------
*/



// Swap the View Service With an Extended View Class.
App::make('View','StandardView');

//match the index route
Router::get('/',function(){
	Template::with('index');
	View::title('Lumen Camera Repairs');	
});

Router::get('/products',function(){
	Template::with('products');
	View::title('');
});

Router::get('/services',function(){
	Template::with('services');
	View::title('');
});

Router::get('/services/repair',function(){
	Template::with('services-repair');
	View::title('');
});

Router::get('/services/develop',function(){
	Template::with('services-develop');
	View::title('');
});

//Router::get('/services','Services@index');

//Router::get('/services/repair','Services@repair');

//Router::get('/services/develop','Services@develop');


Router::get('/events',function(){
	Template::with('events');
	View::title('');
});

Router::get('/about',function(){
	Template::with('about');
	View::title('');
});

Router::get('/register',function(){
	Template::with('register');
	View::title('');
});


/**
 * ---------------------------------
 * YOUR APPLICATION LOGIC STAYS ABOVE 
*/
App::tearDown();
