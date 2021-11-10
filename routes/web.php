<?php

//social login
Route::get('/auth/redirect/{provider}', 'GoogleLoginController@redirect');
Route::get('/callback/{provider}', 'GoogleLoginController@callback');

Route::get('/','FrontController@homePage')->name('home.page');
Route::get('/user/profile','HomeController@showUserProfile')->name('user.profile');
//  function () {return view('frontend.pages.index');});
//auth & user
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/index', 'AdminController@index')->name('admin.index');
Route::get('admin', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\Auth\LoginController@login');


        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\Auth\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

//admin routes
//categories route
Route::get('admin/categories', 'Admin\Category\CategoryController@index')->name('categories');
Route::get('delete/category/{id}', 'Admin\Category\CategoryController@deleteCat');
Route::post('admin/store/categories', 'Admin\Category\CategoryController@storeCategory')->name('store.category');
Route::post('update/category/{id}', 'Admin\Category\CategoryController@updateCategory')->name('update.category');


//sub-categories route
Route::get('admin/sub/categories', 'Admin\Category\SubCategoryController@index')->name('sub.categories');
Route::get('delete/subcategory/{id}', 'Admin\Category\SubCategoryController@deleteSubCat');
Route::post('admin/store/subcategories', 'Admin\Category\SubCategoryController@storeSubCategory')->name('store.subcategory');
Route::post('update.subcategory{id}', 'Admin\Category\SubCategoryController@updateSubCategory')->name('update.subcategory');


//brands
Route::get('admin/brands', 'Admin\Category\BrandController@index')->name('brands');
Route::post('admin/store/brand', 'Admin\Category\BrandController@storeBrand')->name('store.brand');
Route::get('delete/brand/{id}', 'Admin\Category\BrandController@deleteBrand');
Route::post('update/brand/{id}', 'Admin\Category\BrandController@updateBrand')->name('update.brand');

//coupons
Route::get('admin/coupon', 'Admin\Coupon\CouponController@coupon')->name('admin.coupon');
Route::post('admin/store/coupon', 'Admin\Coupon\CouponController@storeCoupon')->name('store.coupon');
Route::get('delete/coupon/{id}', 'Admin\Coupon\CouponController@deleteCoupon');
Route::post('update/coupon/{id}', 'Admin\Coupon\CouponController@updateCoupon')->name('update.coupon');


//Newslatter
Route::get('admin/newslatter', 'Admin\Newslatter\NewslatterController@index')->name('admin.newslatter');
Route::get('delete/sub/{id}', 'Admin\Newslatter\NewslatterController@deleteNewslater');

//for show sub category with ajax
Route::get('/get/subcategory/{catId}', 'Admin\Product\ProductController@getSubCategory');

//Products route
Route::get('admin/product/add', 'Admin\Product\ProductController@create')->name('add.products');
Route::get('admin/product/all', 'Admin\Product\ProductController@index')->name('all.products');
Route::post('admin/product/store', 'Admin\Product\ProductController@store')->name('store.product');
Route::get('inactive/product/{id}','Admin\Product\ProductController@inactiveProduct');
Route::get('active/product/{id}','Admin\Product\ProductController@activeProduct');
Route::get('delete/product/{id}','Admin\Product\ProductController@deleteProduct');
Route::get('view/product/{id}','Admin\Product\ProductController@viewProduct');
Route::get('edit/product/{id}','Admin\Product\ProductController@editProduct');
Route::post('update/product/withoutImage/{id}','Admin\Product\ProductController@updateProductWithoutImage')->name('update.product.withoutImage');
Route::post('update/product/image/{id}','Admin\Product\ProductController@updateProductImage')->name('update.product.image');
Route::get('update/product/imageshow/{id}','Admin\Product\ProductController@updateProductImageshow')->name('update.product.imageshow');


//blog category routes
Route::get('blog/category/list', 'Admin\Post\PostCategoryController@blogCategory')->name('blog.category.list');
Route::get('delete/blogcategory/{id}', 'Admin\Post\PostCategoryController@deleteBlogCat');
Route::post('store/blog/category', 'Admin\Post\PostCategoryController@storeBlogCategory')->name('store.blog.category');
Route::post('update/blog/category/{id}', 'Admin\Post\PostCategoryController@updateBlogCategory')->name('update.blog.category');

//blog post routes
Route::get('blog/all/post', 'Admin\Post\PostController@allBlogPost')->name('blog.all.post');
Route::get('blog/add/post', 'Admin\Post\PostController@addBlogPost')->name('add.blog.post');
Route::get('delete/blogpost/{id}', 'Admin\Post\PostController@deleteBlogPost');
Route::get('edit/blogpost/{id}', 'Admin\Post\PostController@editBlogPost');
Route::post('store/blog/post', 'Admin\Post\PostController@storeBlogPost')->name('store.blog.post');
Route::post('update/blog/post/{id}', 'Admin\Post\PostController@updateBlogPost')->name('update.blog.post');


//all frontend routes
Route::post('store/newslater', 'FrontController@storeNewslater')->name('store.newslatter');
// Route::post('update/coupon/{id}', 'Admin\Coupon\CouponController@updateCoupon')->name('update.coupon');

//wishlist route
Route::get('add/wishlist/{id}','WishlistController@addWishlist');
Route::get('user/wishlist','WishlistController@showWishlistItem')->name('user.wishlist');

//add to card route
Route::get('add/to/cart/{id}','CartController@addToCart');
//show cart page
Route::get('product/cart','CartController@showCartPage')->name('show.cart');

//show Qucik view
Route::get('/cart/product/view/{id}','CartController@viewProduct');

//show Qucik view
Route::post('/cart/product/insert','CartController@insertIntoCart')->name('insert.into.cart');

//remove cart item
Route::get('remove/cart/{id}','CartController@deleteCartItem');
//update cart qty cart item
Route::post('remove/cart/qty','CartController@updateCartQty')->name('update.cartqty');
//check cart product
Route::get('check','CartController@check');
Route::get('product/details/{id}/{product_name}','ProductDetailsController@singleProductView');
Route::post('cart/product/add/{id}','ProductDetailsController@addToCart');

//checkout

Route::get('user/checkout','CartController@checkout')->name('user.checkout');
//apply coupon

Route::post('user/apply/coupon','CartController@applyCoupon')->name('apply.coupon');
Route::get('user/remove/coupon','CartController@removeCoupon')->name('coupon.remove');

//blog routes
Route::get('blog/post','BlogController@blog')->name('blog.post');
Route::get('blog/post/english','BlogController@english')->name('language.english');
Route::get('blog/post/bangla','BlogController@bangla')->name('language.bangla');
Route::get('blog/postdetails/{id}','BlogController@viewSinglePost');

//payment routes
Route::get('payment/page','PaymentController@paymentPage')->name('payment.step');
Route::post('payment/process','PaymentController@paymentProcess')->name('payment.process');
Route::post('payment/stripe','PaymentController@stripeCharge')->name('stripe.charge');
Route::post('payment/cashon','PaymentController@cashOnCharge')->name('cashon.charge');
//product details route
Route::get('subcategory/{id}','ProductDetailsController@productsView');
Route::get('category/{id}','ProductDetailsController@categoryProductView');
Route::get('brand/{id}','ProductDetailsController@brandProductView');

//order route for admin pannel
Route::get('admin/order/new','Admin\Order\OrderController@newOrder')->name('admin.neworder');
Route::get('admin/order/view/{id}','Admin\Order\OrderController@viewOrder');
Route::get('admin/payment/accept/{id}','Admin\Order\OrderController@paymentAccept');
Route::get('admin/payment/cancel/{id}','Admin\Order\OrderController@cancelOrder');
Route::get('admin/accept/payment','Admin\Order\OrderController@acceptPayment')->name('admin.payment.accept');
Route::get('admin/cancel/order','Admin\Order\OrderController@cancelOrderView')->name('admin.cancel.order');
Route::get('admin/process/delivery','Admin\Order\OrderController@processDeliveryOrderView')->name('admin.process.delivery');
Route::get('admin/order/delivery/success','Admin\Order\OrderController@deliveredOrderView')->name('admin.delivery.order');

Route::get('admin/delivery/process/{id}','Admin\Order\OrderController@OrderDeliveryProcess');
Route::get('admin/delivery/done/{id}','Admin\Order\OrderController@OrderDeliveryDone');
Route::get('admin/all/order','Admin\Order\OrderController@allOrderItemShow')->name('admin.all.order');


//user order view route from frontend
Route::get('user/profile/order/view/{id}','OrderDetailController@viewOrder');

//seo routes
Route::get('admin/seo','Admin\Seo\SeoController@seo')->name('admin.seo');
Route::post('admin/seo/info/update','Admin\Seo\SeoController@updateSeoInfo')->name('admn.seo.info.update');

//order tracking route
Route::post('admin/order/track','FrontController@orderTracking')->name('order.tracking');

//Reports controller
Route::get('admin/today/order','Admin\Report\ReportController@todayOrder')->name('today.order');
Route::get('admin/today/delivery','Admin\Report\ReportController@todayDelivery')->name('today.delivery');
Route::get('admin/report/this/month','Admin\Report\ReportController@thisMonthReport')->name('this.month');
Route::get('admin/report/search','Admin\Report\ReportController@searchReport')->name('search.report');
//report search
Route::post('admin/report/search/by/year','Admin\Report\ReportController@searchByYear')->name('search.by.year');
Route::post('admin/report/search/by/month','Admin\Report\ReportController@searchByMonth')->name('search.by.month');
Route::post('admin/report/search/by/date','Admin\Report\ReportController@searchByDate')->name('search.by.date');

//admin role route
Route::get('admin/all/user','Admin\User\UserRoleController@allUserRole')->name('admin.all.user');
Route::get('admin/create','Admin\User\UserRoleController@createAdmin')->name('create.admin');
Route::post('admin/store','Admin\User\UserRoleController@storeAdminInfo')->name('store.admin.info');
Route::post('admin/update','Admin\User\UserRoleController@updateAdminInfo')->name('update.admin.info');
Route::get('admin/delete/admin/{id}','Admin\User\UserRoleController@delteAdmin');
Route::get('admin/edit/admin/{id}','Admin\User\UserRoleController@editAdmin');

//route for site setting
Route::get('admin/site/setting','Admin\SiteSetting\SiteSettingController@siteSetting')->name('admin.site.setting');
Route::post('admin/site/setting/update','Admin\SiteSetting\SiteSettingController@updateSiteSetting')->name('update.site.setting');

//Return order route
Route::get('received/order','PaymentController@viewReceivedItem')->name('received.order');
Route::get('request/return/{id}','PaymentController@returnRequest');

//admin return order routes
Route::get('admin/return/request','Admin\Returns\ReturnController@returnRequest')->name('admin.return.request');
Route::get('admin/all/return','Admin\Returns\ReturnController@allReturn')->name('admin.all.return');
Route::get('admin/cancel/return/request','Admin\Returns\ReturnController@CancelReturn')->name('admin.cancel.return');
Route::get('admin/approve/return/{id}','Admin\Returns\ReturnController@approveReturnRequest');
Route::get('admin/cancel/return/{id}','Admin\Returns\ReturnController@cancelReturnRequest');

//stock routes
Route::get('admin/product/stock','Admin\User\UserRoleController@stock')->name('admin.product.stock');

//contact page routes
Route::get('contact/page','ContactController@index')->name('contact.page');
Route::post('contact/send','ContactController@sendData')->name('contact.form');

//admin message route
Route::get('admin/all/message','Admin\Contact\ContactController@index')->name('all.message');
Route::get('admin/message/view/{id}','Admin\Contact\ContactController@viewMessage');
Route::get('admin/message/seen/{id}','Admin\Contact\ContactController@seenMessage');
Route::get('admin/message/unseen/{id}','Admin\Contact\ContactController@unseenMessage');

//search route
Route::post('product/search','FrontController@search')->name('product.search');


// SSLCOMMERZ Start
Route::get('/example1','SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END