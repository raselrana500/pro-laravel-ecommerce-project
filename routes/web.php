<?php



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
//add to card route
Route::get('add/to/cart/{id}','CartController@addToCart');
//show cart page
Route::get('product/cart','CartController@showCartPage')->name('show.cart');
//remove cart item
Route::get('remove/cart/{id}','CartController@deleteCartItem');
//update cart qty cart item
Route::post('remove/cart/qty','CartController@updateCartQty')->name('update.cartqty');
//check cart product
Route::get('check','CartController@check');
Route::get('product/details/{id}/{product_name}','ProductDetailsController@singleProductView');
Route::post('cart/product/add/{id}','ProductDetailsController@addToCart');