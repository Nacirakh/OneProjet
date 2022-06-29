<?php
use App\Item;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inde', 'HomeController@Inde');

//*******************************************************************************authentification

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
 
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


//*****************************************************************************Admin
//pages admin
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/profill', 'HomeController@profill');
Route::get('/control', 'HomeController@control');
Route::get('/itemA', 'HomeController@itemA');
Route::get('/tableA', 'HomeController@TableA');
Route::get('/FreecommandeA', 'HomeController@FreeCommandeA');
Route::get("/test","HomeController@CommandeAd");



//add edit delete  page Users => admin
Route::get('/add', 'HomeController@AddClient');
Route::post('/add', 'HomeController@AddClient');

Route::get('/adduser', 'HomeController@AddUser');
Route::post('/adduser', 'HomeController@AddUser');

Route::get('control/{id}','HomeController@Userdelete');

Route::post('/update-role/{id}','HomeController@updateRole');

Route::get('/editUser/{id}','HomeController@EditUser');
Route::post('/editUser/{id}','HomeController@EditUser');

//add edit delete  page Tables => Admin
Route::get('/addtable', 'HomeController@AddTable');
Route::post('/addtable', 'HomeController@AddTable');

Route::get('tableA/{id}','HomeController@Tabledelete');

Route::post('/update-etat/{id}','HomeController@updateEtat');


//add edit delete page item =>admin

Route::get('/additem', 'HomeController@AddItem');
Route::post('/additem', 'HomeController@AddItem');

Route::get('itemA/{id}','Homecontroller@Itemdelete');

Route::get('/editItem/{id}','HomeController@EditItem');
Route::post('/editItem/{id}','HomeController@EditItem');

//modifier role admin
Route::post('/updateRole/{user}', 'HomeController@updateRole');
Route::get('/updateRole/{user}', 'HomeController@updateRole');

// delete page commande and freecommande =>admin


Route::get('test/{id}','Homecontroller@Commandedelete');
Route::get('FreecommandeA/{id}','Homecontroller@Freecommandedelete');


//***************************************************************************client

 //ajouter panier client page itemA

Route::get('/add_item', 'HomeController@Add_Item');
Route::get('panier/{id}','HomeController@Panier');

Route::get('ajouter_qty', 'HomeController@Ajouter_qty');
Route::post('ajouter_qty', 'HomeController@Ajouter_qty');



//pages client
Route::get('/view', 'HomeController@view');
Route::get('/profil', 'HomeController@profil');  
Route::get('/ligne', 'HomeController@ligne');
Route::get('/item', 'HomeController@item');
Route::get('/iteme', 'HomeController@iteme');

Route::get('/table', 'HomeController@Table');
Route::get('/commande', 'HomeController@Commande');

Route::get('/commandelibre', 'HomeController@CommandeLibre');
Route::post('/commandelibre', 'HomeController@CommandeLibre');



Route::get('/info', 'HomeController@Info');


Route::get('/afficher', 'HomeController@Afficher');


Route::get('getcart/{id}', [
	'uses' =>'HomeController@getAddToCart',
	'as' => 'manage.item'
	]);


Route::get('/shopping-cart', [
	'uses' =>'HomeController@getCart',
	'as' => 'manage.shopping-cart'
	]);
//Route::get('/reserve','HomeController@Reserve');
Route::get('/checkout',[
	'uses' => 'HomeController@getCheckout',
	'as' => 'manage.checkout'
	]);
Route::post('/checkout',[
	'uses' => 'HomeController@postCheckout',
	'as' => 'manage.item'
	]);


//Ana creetlikhadroute
/*Route::post('/Checkout','HomeController@Checkout')->name('Checkout');*/



