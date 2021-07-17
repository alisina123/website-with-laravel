<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomepageController@index')->name('homepage');
Route::get('changeLang/{lang}','HomeController@lang_change')->name('changLang');
Route::get('changeLang1/{lang}','Localization@lang_change')->name('changLang1');
Route::get('allServices', 'HomepageController@allServices')->name('allServices');

Route::get('service_details/{id}', 'HomepageController@service_details')->name('service_details');
Route::get('aboutUs', 'HomepageController@aboutUs')->name('aboutUs');

Route::get('index', 'LocalizationController@index');
Route::get('change/lang', 'LocalizationController@lang_change')->name('LangChange');
   
Auth::routes();
Route::group(['middleware' => ['auth']], function()
 {
    
//Route::get('services', 'ServiceController@index')->name('services');
//Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('services', 'ServiceController@index')->name('services.index');
Route::get('services/create', 'ServiceController@create')->name('services.create');
Route::post('/services/store', 'ServiceController@store')->name('services.store');
Route::get('services/servicesEdit/{id}', 'ServiceController@servicesEdit')->name('servicesEdit');
Route::delete('services/{id}', 'ServiceController@servicesDelete')->name('services');
Route::post('servicesUpdate/{id}', 'ServiceController@servicesUpdate')->name('servicesUpdate');
//projects
 
Route::get('projects', 'ProjectsController@index')->name('projects.index');
Route::get('projects/create', 'ProjectsController@create')->name('projects.create');
Route::post('/projects/store', 'ProjectsController@store')->name('projects.store');
Route::get('projects/projectsEdit/{id}', 'ProjectsController@projectsEdit')->name('projectsEdit');
Route::delete('projects/{id}', 'ProjectsController@projectsDelete')->name('projects');
Route::post('projectsUpdate/{id}', 'ProjectsController@projectsUpdate')->name('projectsUpdate');

//core 
Route::get('coreValue', 'CoreValuesController@index')->name('coreValue.index');
Route::get('coreValue/create', 'CoreValuesController@create')->name('coreValue.create');
Route::post('/coreValue/store', 'CoreValuesController@store')->name('coreValue.store');
Route::get('coreValue/coreValueEdit/{id}', 'CoreValuesController@coreValueEdit')->name('coreValueEdit');
Route::delete('coreValue/{id}', 'CoreValuesController@coreValueDelete')->name('core');
Route::post('coreValueUpdate/{id}', 'CoreValuesController@coreValueUpdate')->name('coreValueUpdate');
//storeValue
Route::get('storeValue', 'StoresController@index')->name('storeValue.index');
Route::get('storeValue/create', 'StoresController@create')->name('storeValue.create');
Route::post('/storeValue/store', 'StoresController@store')->name('storeValue.store');
Route::get('storeValue/storeValueEdit/{id}', 'StoresController@storeValueEdit')->name('storeValueEdit');
Route::delete('storeValue/{id}', 'StoresController@storeValueDelete')->name('storeValue');
Route::post('storeValueUpdate/{id}', 'StoresController@storeValueUpdate')->name('storeValueUpdate');

//Slider
Route::get('slider', 'SlidersController@index')->name('slider.index');
Route::get('slider/create', 'SlidersController@create')->name('slider.create');
Route::post('/slider/store', 'SlidersController@store')->name('slider.store');
Route::get('slider/sliderEdit/{id}', 'SlidersController@sliderEdit')->name('sliderEdit');
Route::delete('slider/{id}', 'SlidersController@sliderDelete')->name('sliderDelete');
Route::post('sliderUpdate/{id}', 'SlidersController@sliderUpdate')->name('sliderUpdate');
 
//Clients
Route::get('clients', 'ClientsController@index')->name('clients.index');
Route::get('clients/create', 'ClientsController@create')->name('clients.create');
Route::post('/clients/store', 'ClientsController@store')->name('clients.store');
Route::get('clients/clientsEdit/{id}', 'ClientsController@clientsEdit')->name('clientsEdit');
Route::delete('clients/{id}', 'ClientsController@clientsDelete')->name('clientsDelete');
Route::post('clientsUpdate/{id}', 'ClientsController@clientsUpdate')->name('clientsUpdate');
//ContactUs
Route::get('contactUs', 'ContactUsController@index')->name('contactUs.index');
Route::get('contactUs/create', 'ContactUsController@create')->name('contactUs.create');
Route::post('/contactUs/store', 'ContactUsController@store')->name('contactUs.store');
Route::get('contactUs/contactUsEdit/{id}', 'ContactUsController@clientsEdit')->name('contactUsEdit');
Route::delete('contactUs/{id}', 'ContactUsController@contactUsDelete')->name('contactUsDelete');
Route::post('contactUsUpdate/{id}', 'ContactUsController@contactUsUpdate')->name('contactUsUpdate');

Route::get('about', 'AboutController@index')->name('about.index');
Route::get('about/create', 'AboutController@create')->name('about.create');
Route::post('about/store', 'AboutController@store')->name('about.store');
Route::get('Aedit/{id}', 'AboutController@Aedit')->name('Aedit');
Route::post('Aupdate/{id}', 'AboutController@Aupdate')->name('Aupdate');
Route::get('Adelete/{id}', 'AboutController@destroy')->name('Adelete');

Route::get('category', 'CategoryController@index')->name('category.index');
Route::get('category/create', 'CategoryController@create')->name('category.create');
// Route::post('category/store', 'CategoryController@store')->name('category.store');
// Route::get('category/categoryEdit/{id}', 'CategoryController@categoryEdit')->name('categoryEdit');
// Route::delete('category/{id}', 'CategoryController@categoryDelete')->name('category');
// Route::post('categoriesUpdate/{id}', 'CategoryController@categoriesUpdate')->name('categoriesUpdate');
});