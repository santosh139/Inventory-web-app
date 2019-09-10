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
Route::get('/abcd', function () {
    return view('test');
});
Route::get('/file1', function () {
    return view('home.file1');
});
Route::get('/file2','FirstTableController@firstView');
Route::get('/insertContents','FirstTableController@insertContents');
Route::post('/emp_insert','ThirdController@insertEmployeeDetails');
Route::get('/form1', function () {
    return view('form.form1');
});
Route::post('/emp_detail','FifthController@insertEmployeeDetails');
Route::get('/form2', function () {
    return view('form.form2');
});
Route::post('/emp_info','SixthController@insertEmployeeDetails');
Route::get('/form3', function () {
    return view('form.form3');
});
Route::post('/emp_infos','SeventhController@insertEmployeeDetails');
Route::get('/form4', function () {
    return view('form.form4');
});
Route::post('/emp_infoss','EightController@insertEmployeeDetails');
Route::get('/form5', function () {
    return view('form.form5');
});
Route::post('/emp_infosss','NinthController@insertEmployeeDetails');
Route::get('/form6', function () {
    return view('form.form6');
});


Route::get('empView','ThirdController@empView');
Route::get('/edit/{id}','ThirdController@edit');
Route::post('/emp_update','ThirdController@update');

Route::get('empView1','FifthController@empView1');
Route::get('/edit1/{id}','FifthController@edit1');
Route::post('/emp_update1','FifthController@update');
Route::get('/emp/view1',[
                'uses'=>'FifthController@view1',
                'as'=>'view1.emp'
]);

Route::get('/delete1/{id}','FifthController@delete1');







Route::get('empView2','SixthController@empView2');
Route::get('/edit2/{id}','SixthController@empView');
Route::get('/emp/view',[
                'uses'=>'ThirdController@view',
                'as'=>'view.emp'
]);

Route::get('/empSearch','ThirdController@search');



Route::get('/delete/{id}','ThirdController@delete');

Route::get('/contact',function(){
    return view('mail.contact');

});
Route::post('contact_us','MailController@basic_email');

Route::get('/downloadPDF/{id}','ThirdController@downloadPDF');


Route::get('/downloadAllPDF','ThirdController@downloadAllPDF');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
