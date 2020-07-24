
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


    Auth::routes();

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/employee', 'Auth\LoginController@showEmployeeLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/employee', 'Auth\RegisterController@showEmployeeRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/employee', 'Auth\LoginController@employeeLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/employee', 'Auth\RegisterController@createEmployee');

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/admin', 'admin')->middleware('auth');
    Route::view('/employee', 'employee');

    Route::view('/userDetails', 'Auth\RegisterController@editUser');
    

    //---------------------frontend routes-----------------------------------------

    Route::get('/','PagesController@index');
    Route::get('/index','PagesController@index');
    Route::get('/services','PagesController@index2');
    Route::get('/blog','PagesController@index3');
    Route::get('/about','PagesController@index4');
    Route::get('/contact','PagesController@index5');
    Route::get('/calculator','PagesController@index6');
    Route::get('/calculation','PagesController@index7');
  //  Route::get('/store','PagesController@store')->name('index');
 //   Route::get('/buy','PagesController@buy')->name('cart');



    //--------------------Shopping Cart routes----------------------------------------
            //cart CRUD
    Route::get('/store', 'ProductsController@index')->name('index'); 
    Route::get('cart', 'ProductsController@cart'); 
    Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
    Route::patch('update-cart', 'ProductsController@update'); 
    Route::delete('remove-from-cart', 'ProductsController@remove');
    Route::get('/buy','ProductsController@buy')->name('cart');
    Route::post('/order','ProductsController@order')->name('order');
    Route::get('/orderview','ProductsController@orderview');
    Route::get('ordersee/{id}','ProductsController@ordersee');
    Route::get('markascompleted/{id}','ProductsController@updated');
    Route::get('markasnotcompleted/{id}','ProductsController@updatenot');
    Route::get('notcompletedorders','ProductsController@notcompleted');

            //store CRUD
    Route::get('getpro' ,function(){
    $products=App\Product::all();
    $tags= App\Tag::all();
    $categories= App\Category::all();
    return view('getProducts')->with('data',['products'=>$products,'tags'=>$tags,'categories'=>$categories]);
    });
            
    Route::post('/saveProduct','GetProductsController@store');
    Route::get('deleteProduct/{id}','GetProductsController@deleteProduct');
    Route::get('updateProduct/{id}','GetProductsController@updateProduct');
    Route::post('editProducts','GetProductsController@editProducts');

            //category CRUD
    Route::get('getcat' ,function(){
    $data=App\category::all();
    return view('category')->with('categories',$data);
    });

    Route::post('/saveCategory','CategoryController@store');
    Route::get('deleteCategory/{id}','CategoryController@deleteCategory');
    Route::get('/showcat/{id}', 'CategoryController@filter');
    Route::get('updateCategory/{id}','CategoryController@updateCategory');
    Route::post('editCategory','CategoryController@editCategory');


            //tag CRUD
    Route::get('gettag' ,function(){
    $data=App\Tag::all();
    return view('tag')->with('tags',$data);
    });

    Route::post('/saveTag','TagController@store');
    Route::get('deleteTag/{id}','TagController@deleteTag');
    Route::get('/showtag/{id}', 'TagController@filter');
    Route::get('updateTag/{id}','TagController@updateTag');
    Route::post('editTag','TagController@editTag');


    //--------------------------------Blog CRUD-----------------------------------------
    Route::get('getblog' ,function(){
        $blogs=App\Blog::all();
        return view('blog')->with('blogs',$blogs);
    });

    Route::post('/saveBlog','BlogController@store');              
    Route::get('deleteBlog/{id}','BlogController@deleteBlog');
    Route::get('updateBlog/{id}','BlogController@updateBlog');
    Route::post('editBlog','BlogController@editBlog');

    //------------------------Emailsending------------------------------------------------

    Route::get('/sendemail','SendEmailController@index');
    Route::get('/sendemail/send/{id}','SendEmailController@send');
    Route::post('/sendemail/get','SendEmailController@get');

    //------------------------About details CRUD-------------------------------------------

    Route::get('getabout' ,function(){
        $abouts= App\About::all();
        return view('getCompanydetails')->with('abouts',$abouts);
        });
                
        Route::post('/saveabout','AboutController@store');
        Route::get('updateabout/{id}','AboutController@updateAbout');
        Route::post('/editabout','AboutController@editAbout');

   //---------------------Social Media Links------------------------------------------------
   
   Route::get('getsocial' ,function(){
        $socials= App\Social::all();
        return view('getSocialdetails')->with('socials',$socials);
        });
                
        Route::post('/savesocial','SocialController@store');
        Route::get('updatesocial/{id}','SocialController@updateSocial');
        Route::post('/editsocial','SocialController@editSocial');


        Route::view('/contract', 'contract');
       

        Route::get('/contract' ,function(){
                $contracts=App\Contract::all();
                return view('contract')->with('contracts',$contracts);
            });
        
            Route::post('/saveContract','ContractController@store');              
            Route::get('deleteContract/{id}','ContractController@deleteContract');
            Route::get('updateContract/{id}','ContractController@updateContract');
            Route::post('editContract','ContractController@editContract');
        
        Route::get('/losdchart', 'ContractController@loadChart');

        Route::get('/employeeList','AdminController@employee');
        Route::get('deleteEmployee/{id}','AdminController@deleteEmployee');
        Route::get('/dashboard','AdminController@dashboard'); 
        
        Route::get('/customerList','AdminController@customer');
        Route::get('deleteCustomer/{id}','AdminController@deleteCustomer'); 

        Route::get('/report','ReportController@index');
        Route::get('/report/pdf_customer', 'ReportController@pdf_Customer');
        Route::get('/report/pdf_employee', 'ReportController@pdf_Employee');
        Route::get('/report/pdf_product', 'ReportController@pdf_Product');
        Route::get('/report/pdf_contract', 'ReportController@pdf_Contract');


        