<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as  AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as  AdminCategoryController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\OrderController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopCartController;
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
Route::get('/hello', function () {
    return 'Hello World';
});

// **************** Home Page Routes**************
Route::get('/',[HomeController::class,'index'])->name(name:'home');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name(name:'aboutus');
Route::get('/references',[HomeController::class,'references'])->name(name:'references');
Route::get('/contact',[HomeController::class,'contact'])->name(name:'contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name(name:'storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name(name:'faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name(name:'storecomment');
Route::view('/loginuser','home.login')->name(name:'loginuser');
Route::view('/registeruser','home.register')->name(name:'registeruser');
Route::get('/logoutuser',[HomeController::class,'logout'])->name(name:'logoutuser');
Route::view('/loginadmin','admin.login')->name(name:'loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name(name:'loginadmincheck');


Route::get('/product/{id}',[HomeController::class,'product'])->name(name:'product');
Route::get('/categoryproducts/{id}/{slug}',[HomeController::class,'categoryproducts'])->name(name:'categoryproducts');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// **************** User Auth Control**************
Route::middleware('auth')->group(function(){
    // **************** User Routes**************
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function(){
        Route::get('/','index')->name(name:'index');
        Route::get('/reviews','reviews')->name(name:'reviews');
        Route::get('/reviewdestroy/{id}','reviewdestroy')->name(name:'reviewdestroy');
        Route::get('/orders','orders')->name(name:'orders');
        Route::get('/orderdetail/{id}','orderdetail')->name(name:'orderdetail');
        Route::get('/cancelproduct/{id}','cancelproduct')->name(name:'cancelproduct');

    });

    // **************** ShopCart Routes**************
    Route::prefix('/shopcart')->name('shopcart.')->controller(ShopCartController::class)->group(function(){
        Route::get('/','index')->name(name:'index');
        Route::get('/create','create')->name(name:'create');
        Route::post('/store','store')->name(name:'store');
        Route::get('/add/{id}','add')->name(name:'add');
        Route::post('/update/{id}','update')->name(name:'update');
        Route::get('/destroy/{id}','destroy')->name(name:'destroy');
        Route::get('/show/{id}','show')->name(name:'show');
        Route::post('/order','order')->name(name:'order');
        Route::post('/storeorder','storeorder')->name(name:'storeorder');
        Route::get('/ordercomplete','ordercomplete')->name(name:'ordercomplete');
        Route::get('/userpanel',[UserController::class,'userpanel']);
    });




// **************** Admin Panel Routes**************
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){
        Route::get('/',[AdminHomeController::class,'index'])->name(name:'index');

        // **************** General Routes**************
        Route::get('/setting',[AdminHomeController::class,'setting'])->name(name:'setting');
        Route::post('/setting',[AdminHomeController::class,'settingUpdate'])->name(name:'setting.update');
        // **************** Admin Category Routes**************
        Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function(){
            Route::get('/','index')->name(name:'index');
            Route::get('/create','create')->name(name:'create');
            Route::post('/store','store')->name(name:'store');
            Route::get('/edit/{id}','edit')->name(name:'edit');
            Route::post('/update/{id}','update')->name(name:'update');
            Route::get('/destroy/{id}','destroy')->name(name:'destroy');
            Route::get('/show/{id}','show')->name(name:'show');
        });

        // **************** Admin Product Routes**************
        Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function(){
            Route::get('/','index')->name(name:'index');
            Route::get('/create','create')->name(name:'create');
            Route::post('/store','store')->name(name:'store');
            Route::get('/edit/{id}','edit')->name(name:'edit');
            Route::post('/update/{id}','update')->name(name:'update');
            Route::get('/destroy/{id}','destroy')->name(name:'destroy');
            Route::get('/show/{id}','show')->name(name:'show');
        });

        // **************** Admin Product Image Gallery Routes**************
        Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function(){
            Route::get('/{pid}','index')->name(name:'index');

            Route::post('/store/{pid}','store')->name(name:'store');
            Route::post('/update/{pid}/{id}','update')->name(name:'update');
            Route::get('/destroy/{pid}/{id}','destroy')->name(name:'destroy');
            
        });

        // **************** Admin Message Routes**************
        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function(){
            Route::get('/','index')->name(name:'index');

            Route::post('/store','store')->name(name:'store');
            Route::get('/show/{id}','show')->name(name:'show');
            Route::post('/update/{id}','update')->name(name:'update');
            Route::get('/destroy/{id}','destroy')->name(name:'destroy');
            
        });


        // **************** Admin Faq Routes**************
        Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function(){
            Route::get('/','index')->name(name:'index');
            Route::get('/create','create')->name(name:'create');
            Route::post('/store','store')->name(name:'store');
            Route::get('/edit/{id}','edit')->name(name:'edit');
            Route::post('/update/{id}','update')->name(name:'update');
            Route::get('/destroy/{id}','destroy')->name(name:'destroy');
            Route::get('/show/{id}','show')->name(name:'show');
        });

        // **************** Admin Comment Routes**************
        Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function(){
            Route::get('/','index')->name(name:'index');

            Route::get('/show/{id}','show')->name(name:'show');
            Route::post('/update/{id}','update')->name(name:'update');
            Route::get('/destroy/{id}','destroy')->name(name:'destroy');
            
        });

        // **************** Admin User Routes**************
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function(){
            Route::get('/','index')->name(name:'index');
            Route::get('/edit/{id}','edit')->name(name:'edit');
            Route::get('/show/{id}','show')->name(name:'show');
            Route::post('/update/{id}','update')->name(name:'update');
            Route::get('/destroy/{id}','destroy')->name(name:'destroy');
            Route::post('/addrole/{id}','addrole')->name(name:'addrole');
            Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name(name:'destroyrole');
            
        });


        // **************** Admin Orders Routes**************
        Route::prefix('/order')->name('order.')->controller(OrderController::class)->group(function(){
            Route::get('/{slug}','index')->name(name:'index');
            Route::get('/create','create')->name(name:'create');
            Route::post('/store','store')->name(name:'store');
            Route::get('/edit/{id}','edit')->name(name:'edit');
            Route::post('/update/{id}','update')->name(name:'update');
            Route::get('/destroy/{id}','destroy')->name(name:'destroy');
            Route::get('/show/{id}','show')->name(name:'show');
            Route::get('/cancelorder/{id}','cancelorder')->name(name:'cancelorder');
            Route::get('/cancelproduct/{id}','cancelproduct')->name(name:'cancelproduct');
            Route::get('/acceptproduct/{id}','acceptproduct')->name(name:'acceptproduct');
        });

    });
});