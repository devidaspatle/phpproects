<?php

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
Route::get('/', function () {
    return view('welcome');
});
/*Route::get('my-theme', function () {
    return view('welcome2');
});*/


Route::get('my-users', 'HomeController@myUsers');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('newsletters', 'NewsletterController');
Route::resource('contacts', 'ContactController');
//Route::resource('changepasswords','ChangepasswordController');
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
Route::resource('categorys','CategoryController');
Route::resource('subcategorys', 'SubcategoryController');
Route::resource('products', 'ProductController');
Route::resource('users', 'UserController');
Route::resource('goldrates', 'GoldrateController');
Route::resource('webcontents', 'WebcontentController');
Route::resource('testimonials', 'TestimonialController');
Route::resource('faqs', 'FaqController');
Route::resource('patients', 'PatientController');
Route::resource('prescriptions', 'PrescriptionController');
Route::resource('investigations', 'InvestigationController');
Route::resource('allopathics', 'AllopathicController');
Route::resource('centres', 'CentreController');
Route::resource('diagnosis', 'DiagnosiController');
Route::resource('formulas', 'FormulaController');
Route::resource('albumgalleries', 'AlbumgalleryController');
Route::resource('photos', 'PhotoController');
Route::resource('services', 'ServiceController');
Route::resource('appointments', 'AppointmentController');

Route::get('/settings','HomeController@showSettingsForm');
Route::post('/settings','HomeController@editSetting')->name('settings');

Route::get('notes', 'NotesController@index');
Route::get('pdf', 'NotesController@pdf');

Route::get('import-export-view', 'ExcelController@importExportView')->name('import.export.view');
Route::post('import-file', 'ExcelController@importFile')->name('import.file');
Route::get('export-file/{type}', 'ExcelController@exportFile')->name('export.file');