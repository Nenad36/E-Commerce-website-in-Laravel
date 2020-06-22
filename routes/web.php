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
    return view('pages.index');
});

//auth & user
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password/change', 'HomeController@changePassword')->name('password.change');
Route::post('/password/update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//Admin
Route::get('/admin/home', 'AdminController@index');
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Admin\LoginController@login');

// Password Reset Route
Route::get('/admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');

//Category Route
Route::get('/admin/categories', 'Admin\Category\CategoryController@category')->name('categories');
Route::post('/admin/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('/edit/category/{id}', 'Admin\Category\CategoryController@editcategory');
Route::post('/update/category/{id}', 'Admin\Category\CategoryController@updatetegory');
Route::get('/delete/category/{id}', 'Admin\Category\CategoryController@deletecategory');

//Brand Route
Route::get('/admin/brands', 'Admin\Category\BrandController@brand')->name('brands');
Route::post('/admin/store/brand', 'Admin\Category\BrandController@storebrand')->name('store.brand');
Route::get('/edit/brand/{id}', 'Admin\Category\BrandController@editbrand');
Route::post('/update/brand/{id}', 'Admin\Category\BrandController@updatebrand');
Route::get('/delete/brand/{id}', 'Admin\Category\BrandController@deletebrand');

//Sub Category Route
Route::get('/admin/sub/category', 'Admin\Category\SubCategoryController@subcategories')->name('sub.categories');
Route::post('/admin/store/subcat', 'Admin\Category\SubCategoryController@storesubcat')->name('store.subcategory');
Route::get('/edit/subcategory/{id}', 'Admin\Category\SubCategoryController@editsubcat');
Route::post('/update/subcategory/{id}', 'Admin\Category\SubCategoryController@updatesubcat');
Route::get('/delete/subcategory/{id}', 'Admin\Category\SubCategoryController@deletesubcat');

// For Show Sub category with ajax
Route::get('get/subcategory/{category_id}', 'Admin\ProductController@getsubcat');

//Coupon Route
Route::get('/admin/sub/coupon', 'Admin\Category\CouponController@coupon')->name('admin.coupon');
Route::post('/admin/store/coupon', 'Admin\Category\CouponController@storecoupon')->name('store.coupon');
Route::get('/edit/coupon/{id}', 'Admin\Category\CouponController@editcoupon');
Route::post('/update/coupon/{id}', 'Admin\Category\CouponController@updatecoupon');
Route::get('/delete/coupon/{id}', 'Admin\Category\CouponController@deletecoupon');

//Product Route
Route::get('/admin.product/all', 'Admin\ProductController@index')->name('all.product');
Route::get('/admin.product/add', 'Admin\ProductController@create')->name('add.product');
Route::post('/admin/store/product', 'Admin\ProductController@store')->name('store.product');
Route::get('/inactive/product/{id}', 'Admin\ProductController@inactive');
Route::get('/active/product/{id}', 'Admin\ProductController@active');
Route::get('view/product/{id}', 'Admin\ProductController@viewproduct');
Route::get('edit/product/{id}', 'Admin\ProductController@editproduct');
Route::post('update/product/withoutphoto/{id}', 'Admin\ProductController@updateproductwithoutphoto');
Route::post('update/product/photo/{id}', 'Admin\ProductController@updaterroductphoto');
Route::get('/delete/product/{id}', 'Admin\ProductController@deleteproduct');

//Blog Route
Route::get('/blog/category/lis', 'Admin\PostController@blogcatlist')->name('add.blog.categorylist');
Route::post('/blog/category/store', 'Admin\PostController@blogcatstore')->name('store.blog.category');
Route::get('/edit/blogcategory/{id}', 'Admin\PostController@editblogcat');
Route::post('/update/blogcategory/{id}', 'Admin\PostController@updateblogcat');
Route::get('/delete/blogcategory/{id}', 'Admin\PostController@deleteblogcat');

Route::get('/admin/add/post', 'Admin\PostController@create')->name('add.blogpost');
Route::get('/admin/all/post', 'Admin\PostController@index')->name('all.blogpost');

Route::post('admin/store/post', 'Admin\PostController@store')->name('store.post');
Route::get('/edit/post/{id}', 'Admin\PostController@editpost');
Route::post('/update/post/{id}', 'Admin\PostController@updatepost');
Route::get('/delete/post/{id}', 'Admin\PostController@deletepost');

//Newsletter Route
Route::get('/admin/newslater', 'Admin\Category\CouponController@newsletter')->name('admin.newsletter');
Route::post('/store/newsletter/', 'FrontController@storenewsletter')->name('store.newsletter');
Route::get('/delete/sub/{id}', 'Admin\Category\CouponController@deletesub');
Route::delete('/newsletterDeleteAll', 'Admin\Category\CouponController@deleteAll');

//Add Wishlists
Route::get('/add/wishlist/{id}', 'WishlistController@addwishlist');

//Add to cart
Route::get('/add/to/cart/{id}', 'CartController@addcart');
Route::get('/check', 'CartController@check');

Route::get('/product/cart', 'CartController@showcart')->name('show.cart');
Route::get('remove/cart/{rowId}', 'CartController@removecart');
Route::get('/cart/product/view/{id}', 'CartController@viewproduct');
Route::post('insert/into/cart/', 'CartController@insertcart')->name('insert.into.cart');
Route::post('update/cart/item/', 'CartController@updatecart')->name('update.cartitem');
Route::post('insert/into/cart/', 'CartController@insertCart')->name('insert.into.cart');
Route::get('user/checkout/', 'CartController@checkout')->name('user.checkout');
Route::get('user/wishlist/', 'CartController@wishlist')->name('user.wishlist');
Route::post('user/apply/coupon/', 'CartController@Coupon')->name('apply.coupon');
Route::get('coupon/remove/', 'CartController@CouponRemove')->name('coupon.remove');

Route::get('/product/details/{id}/{product_name}', 'ProductController@productview');
Route::post('/cart/product/add/{id}', 'ProductController@addcart');

// Coupons All
Route::get('/admin/sub/coupon', 'Admin\Category\CouponController@Coupon')->name('admin.coupon');
Route::post('/admin/store/coupon', 'Admin\Category\CouponController@StoreCoupon')->name('store.coupon');
Route::get('/delete/coupon/{id}', 'Admin\Category\CouponController@DeleteCoupon');
Route::get('/edit/coupon/{id}', 'Admin\Category\CouponController@EditCoupon');
Route::post('/update/coupon/{id}', 'Admin\Category\CouponController@UpdateCoupon');

//Blog
Route::get('/blog/post', 'BlogController@blog')->name('blog.post');
Route::get('/language/english', 'BlogController@english')->name('language.english');
Route::get('/language/hindi', 'BlogController@hindi')->name('language.hindi');
Route::get('/blog/single/{id}', 'BlogController@BlogSingle');

//Payment
Route::get('/payment/page', 'CartController@PaymentPage')->name('payment.step');
Route::post('/user/payment/process/', 'PaymentController@Payment')->name('payment.process');

//Product page
Route::get('/products/{id}', 'ProductController@ProductsView');
Route::get('/allcategory/{id}', 'ProductController@CategoryView');
Route::post('/user/stripe/charge/', 'PaymentController@StripeCharge')->name('stripe.charge');

//Admin Order
Route::get('/admin/pading/order', 'Admin\OrderController@NewOrder')->name('admin.neworder');
Route::get('admin/view/order/{id}', 'Admin\OrderController@ViewOrder');
Route::get('admin/payment/accept/{id}', 'Admin\OrderController@PaymentAccept');
Route::get('admin/payment/cancel/{id}', 'Admin\OrderController@PaymentCancel');
Route::get('admin/accept/payment', 'Admin\OrderController@AcceptPayment')->name('admin.accept.payment');
Route::get('admin/cancel/order', 'Admin\OrderController@CancelOrder')->name('admin.cancel.order');
Route::get('admin/process/payment', 'Admin\OrderController@ProcessPayment')->name('admin.process.payment');
Route::get('admin/success/payment', 'Admin\OrderController@SuccessPayment')->name('admin.success.payment');
Route::get('admin/delevery/process/{id}', 'Admin\OrderController@DeleveryProcess');
Route::get('admin/delevery/done/{id}', 'Admin\OrderController@DeleveryDone');

/// SEO Setting Route
Route::get('admin/seo', 'Admin\OrderController@seo')->name('admin.seo');
Route::post('admin/seo/update', 'Admin\OrderController@UpdateSeo')->name('update.seo');
