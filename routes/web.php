<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Http\RedirectResponse;

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

Route::get("/", function () {
    return view("app.home");
});



// CONTACT PAGES
Route::get("/contact-us", [App\Http\Controllers\ContactController::class, 'contact_us'])->name("contact-us");
Route::post("/contact-us", [App\Http\Controllers\ContactController::class, 'submit_contact_us'])->name("contact_us");
Route::post("/callback-number", [App\Http\Controllers\ContactController::class, 'callback_number_only'])->name("callback_number");
Route::post("/callback-item", [App\Http\Controllers\ContactController::class, 'callback_with_item'])->name("callback_item");
Route::get("/free-quote", [App\Http\Controllers\ContactController::class, 'free_quote'])->name("free-quote");
Route::post("/free-quote", [App\Http\Controllers\ContactController::class, 'submit_free_quote'])->name("free-quote");


Route::get("/about-us", function () {
    return view("app.about_us");
})->name("about-us");

Route::get("/faqs", function () {
    return view("app.faq");
})->name("faqs");


Route::get("/privacy-policy", function () {
    return view("app.privacy");
})->name("privacy");


// SERVICE ROUTING 
Route::prefix('services')->group(function () {

    //Main controller
    $c = App\Http\Controllers\ServiceController::class;

    //Index for services
    Route::get('/', [$c, 'index'])->name('services');

    //Services
    Route::get('/house-cleaning-services', [$c, 'house_cleaning'])->name('house_cleaning');
    Route::get('/post-construction-cleaning', [$c, 'post_construct'])->name('post_construct');
    Route::get('/move-in-cleaning-services', [$c, 'move_in'])->name('move_in');
    Route::get('/move-out-cleaning-services', [$c, 'move_out'])->name('move_out');
    Route::get('/apartment-cleaning-services', [$c, 'apart_cleaning'])->name('apart_cleaning');
    Route::get('/green-cleaning', [$c, 'green_cleaning'])->name('green_cleaning');
    Route::get('/commercial-cleaning-services', [$c, 'comm_cleaning'])->name('comm_cleaning');
    Route::get('/maid-cleaning-service', [$c, 'maid_cleaning'])->name('maid_cleaning');
    Route::get('/residential-cleaning-services', [$c, 'res_cleaning'])->name('res_cleaning');
    Route::get('/deep-cleaning-services', [$c, 'deep_cleaning'])->name('deep_cleaning');
    Route::get('/cleaning-lady', [$c, 'cleaning_lady'])->name('cleaning_lady');
    Route::get('/house-keeping', [$c, 'house_keeping'])->name('house_keeping');

});

// ROUTES FOR AUTHINTECATED USERS
Route::middleware(['auth'])->group(function () {

    //DASHBOARD ROUTES
    Route::prefix('dashboard')->group(function () {
        $main_c = App\Http\Controllers\Dashboard\DashboardController::class;

        Route::get('/', [$main_c, 'index'])->name('dashboard');

        Route::prefix('blog')->group(function () {
            $blog_controller = App\Http\Controllers\Dashboard\BlogController::class;

            Route::get('/', [$blog_controller, 'index'])->name('blog.list');

            Route::get('/create', [$blog_controller, 'create'])->name('blog.create');
            Route::post('/create', [$blog_controller, 'store'])->name('blog.create');

            Route::get('/edit/{id}', [$blog_controller, 'edit'])->name('blog.update');
            Route::put('/edit/{id}', [$blog_controller, 'update'])->name('blog.update');

            Route::get('/delete/{id}', [$blog_controller, 'delete'])->name('blog.delete');
        });

        Route::prefix('gallery')->group(function () {
            $gallery_controller = App\Http\Controllers\Dashboard\GalleryController::class;

            Route::get('/', [$gallery_controller, 'index'])->name('gallery.list');

            Route::get('/create', [$gallery_controller, 'create'])->name('gallery.create');
            Route::post('/create', [$gallery_controller, 'store'])->name('gallery.create');

            Route::get('/edit/{id}', [$gallery_controller, 'edit'])->name('gallery.update');
            Route::put('/edit/{id}', [$gallery_controller, 'update'])->name('gallery.update');

            Route::get('/delete/{id}', [$gallery_controller, 'delete'])->name('gallery.delete');
        });


        Route::prefix('requests')->group(function () {
            $request_controller = App\Http\Controllers\Dashboard\RequestController::class;

            Route::get('/', [$request_controller, 'index'])->name('requests.list');

            Route::get('/email/{id}', [$request_controller, 'email'])->name('request');
        });

        Route::prefix('payments')->group(function () {
            $payment_controller = App\Http\Controllers\Dashboard\PaymentsController::class;

            Route::get('/', [$payment_controller, 'index'])->name('payments.list');

            Route::get('/{slug}', [$payment_controller, 'payment'])->name('dashboard.payment');
        });


        Route::prefix('service-areas')->group(function () {

            $service_controller = App\Http\Controllers\Dashboard\ServiceAreasContoller::class;

            Route::get('/', [$service_controller, 'index'])->name('areas.list');

            Route::get('/create', [$service_controller, 'create'])->name('service-areas.create');
            Route::post('/create', [$service_controller, 'store'])->name('service-areas.create');

            Route::get('/{id}', [$service_controller, 'edit'])->name('service-areas.update');
            Route::post('/{id}', [$service_controller, 'update'])->name('service-areas.update');

            Route::get('delete/{id}', [$service_controller, 'delete'])->name('service-areas.delete');
        });

        Route::prefix('invoices')->group(function () {
            $invoices_controller = App\Http\Controllers\Dashboard\InvoicesController::class;
            Route::get('/', [$invoices_controller, 'index'])->name('invoices.index');
            
            Route::get('/create', [$invoices_controller, 'create'])->name('invoices.create');
            Route::post('/create', [$invoices_controller, 'store'])->name('invoices.create');

            Route::get('/edit/{id}', [$invoices_controller, 'edit'])->name('invoices.edit');
            Route::put('/edit/{id}', [$invoices_controller, 'update'])->name('invoices.edit');
        });

    });
});


Auth::routes();












// Route::get("/service-areas", [App\Http\Controllers\ServiceLocationController::class, 'index'])->name("service-area");

// Route::get("/service-areas-locations/{slug}", [App\Http\Controllers\ServiceLocationController::class, 'service_areas_location'])->name("service_areas_location");









// Route::get("/gallery", [App\Http\Controllers\GalleryController::class, 'index'])->name("gallery");








// Route::get("/coupon", function () {
//     return view("app.coupon");
// })->name("coupon");







// Route::get("/blog", [App\Http\Controllers\ShowBlogController::class, 'index'])->name("blog");




// Route::get("/blog/{slug}", [App\Http\Controllers\ShowBlogController::class, 'blog'])->name("blog01");












// PAYMENT ROUTES 
// Route::prefix('payment')->group(function () {

//     //Main controller
//     $c = App\Http\Controllers\PaymentController::class;

//     //Index for services
//     Route::get('/', [$c, 'index'])->name('payment');
//     Route::post('/', [$c, 'presubmit'])->name('presubmit');
//     Route::get('/success', [$c, 'success'])->name('success');
// });



//SERIVCE AREA BRANCHS
// Route::prefix('service-areas/business-locations')->group(function () {

//     //Main controller
//     $c = App\Http\Controllers\ServiceLocationController::class;



//     Route::get("gramercy-manhattan", [$c, 'gramercy_manhattan'])->name("gramercy_manhattan");
//     Route::get("astoria-queens", [$c, 'astoria_queens'])->name("astoria_queens");
//     Route::get("ues-manhattan", [$c, 'ues_manhattan'])->name("ues_manhattan");
//     Route::get("ridgewood-queens", [$c, 'ridgewood_queens'])->name("ridgewood_queens");
// });



