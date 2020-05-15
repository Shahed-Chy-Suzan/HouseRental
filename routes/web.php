<?php


        //---------Socialite----------
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
        //------------blog-------------------
Route::get('blog/post','BlogController@blog')->name('blog.post');
Route::get('language/bangla','BlogController@Bangla')->name('language.bangla');
Route::get('language/english','BlogController@English')->name('language.english');
Route::get('blog/description/{id}','BlogController@description');
        //-------------Wishlists-------------
Route::get('add/wishlist/{id}','WishlistController@AddWishlist');
Route::get('user/wishlist/','WishlistController@Wishlist')->name('user.wishlist');  //--nav--


//----------------------------------------------------------------------------------------------------------------
Route::get('/', function(){
    return view('pages.index');
});

            //-------AUTH & USER Section----------
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('update.password');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

            //-------admin---------------
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');	//--d--

            //-------Password Reset Routes------------
Route::get('admin/password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');	//--d--
Route::get('admin/reset/password/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');	//--d--
Route::get('/admin/Change/Password', 'AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update', 'AdminController@Update_pass')->name('admin.password.update');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');		//--d--


                        //--------Admin Section-------------

        //--------Cities-------------------
Route::get('admin/city', 'Admin\City\CityController@cities')->name('city');
Route::post('admin/store/city', 'Admin\City\CityController@storecity')->name('store.city');
Route::get('delete/city/{id}', 'Admin\City\CityController@deleteCity');
Route::get('edit/city/{id}', 'Admin\City\CityController@editCity');
Route::post('update/city/{id}', 'Admin\City\CityController@updateCity');
        //----------Subcities-------------
Route::get('admin/sub/cities','Admin\City\SubcityController@subcities')->name('subcity');
Route::post('admin/store/subcity','Admin\City\SubcityController@Storesubcity')->name('store.subcity');
Route::get('delete/subcity/{id}', 'Admin\City\SubcityController@deletesubcity');
Route::get('edit/subcity/{id}', 'Admin\City\SubcityController@editsubcity');
Route::post('update/subcity/{id}', 'Admin\City\SubcityController@updatesubcity');
        //----------Coupon------------------
Route::get('admin/coupon','Admin\CouponController@coupon')->name('coupons');
Route::post('admin/store/coupon', 'Admin\CouponController@storeCoupon')->name('store.coupon');
Route::get('delete/coupon/{id}', 'Admin\CouponController@deleteCoupon');
Route::get('edit/coupon/{id}', 'Admin\CouponController@editCoupon');
Route::post('update/coupon/{id}', 'Admin\CouponController@updateCoupon');
        //--------------Newsletter--------------------
Route::get('admin/newsletter','Admin\CouponController@newsletter')->name('admin.newsletter');
Route::get('delete/newsletter/{id}', 'Admin\CouponController@deletenewsletter');
        //----------Contact/Get_in_Touch-------------
Route::get('admin/contact','Admin\CouponController@contact')->name('admin.new.contact');  //--nav
Route::get('delete/contact/{id}','Admin\CouponController@deleteContact');
Route::get('view/contact/{id}','Admin\CouponController@viewContact');
Route::get('mark/read/contact/{id}','Admin\CouponController@markAsRead');
Route::get('mark/unread/contact/{id}','Admin\CouponController@markAsUnRead');
Route::get('admin/all/contact','Admin\CouponController@allContact')->name('admin.all.contact');  //--nav
        //--------Blog routes(en/bn)---------------
Route::get('admin/post/categoryName','Admin\PostController@postCategory')->name('postCategory.name');
Route::get('admin/post/add/categoryName','Admin\PostController@addCategory')->name('add.categoryName');
Route::post('admin/post/store/categoryName','Admin\PostController@storeCategory')->name('store.categoryName');
Route::get('delete/category/name/{id}','Admin\PostController@deleteCat');
Route::get('edit/category/name/{id}','Admin\PostController@editCat');
Route::post('update/categoryName/{id}','Admin\PostController@updateCat');
//----------------------
Route::get('admin/add/post', 'Admin\PostController@create')->name('add.blogpost');
Route::post('admin/store/post', 'Admin\PostController@store')->name('store.post');
Route::get('admin/all/post', 'Admin\PostController@index')->name('all.blogpost');
Route::get('delete/post/{id}','Admin\PostController@destroy');
Route::get('edit/post/{id}','Admin\PostController@edit');
Route::post('update/post/{id}','Admin\PostController@update');
        //----------user role(add_admin_(child))----------------
Route::get('admin/create/admin', 'Admin\ReportController@UserCreate')->name('create.admin');
Route::get('admin/create/role', 'Admin\ReportController@UserRole')->name('create.user.role');
Route::post('admin/store/admin', 'Admin\ReportController@UserStore')->name('store.admin');
Route::get('delete/admin/{id}', 'Admin\ReportController@UserDelete');
Route::get('edit/admin/{id}', 'Admin\ReportController@UserEdit');
Route::post('admin/update/admin', 'Admin\ReportController@UserUpdate')->name('update.admin');
        //-----------site-setting----------------
Route::get('admin/site/setting', 'Admin\SettingController@SiteSetting')->name('admin.site.setting');
Route::post('admin/update/sitesetting', 'Admin\SettingController@UpdateSetting')->name('update.sitesetting');
        //-----------database backup---------------
Route::get('admin/database/backup', 'Admin\SettingController@DatabaseBackup')->name('admin.database.backup');
Route::get('admin/database/backup/now', 'Admin\SettingController@BackupNow')->name('admin.backup.now');
Route::get('delete/database/{getFilename}', 'Admin\SettingController@DeleteDatabase');
Route::get('{getFilename}','Admin\SettingController@DownloadDatabase');
        //--------User_Property_Request_to_Admin-------------
Route::get('admin/property/add', 'Admin\PropertyController@create')->name('admin.add.property');  //--nav
// Route::post('admin/store/property', 'Admin\PropertyController@store')->name('store.property');
Route::get('admin/pending/property','Admin\PropertyController@backendUserProperty')->name('pending.user_property'); //-nav
Route::get('delete/property/{id}','Admin\PropertyController@DeleteProperty');
Route::get('view/property/{id}','Admin\PropertyController@ViewProperty');
Route::get('edit/property/{id}','Admin\PropertyController@EditProperty');
Route::post('update/property/withoutphoto/{id}','Admin\PropertyController@UpdatePropertyWithoutPhoto');
Route::post('update/property/photo/{id}','Admin\PropertyController@UpdatePropertyPhoto');
//---------------------
Route::get('admin/property/accept/{id}', 'Admin\PropertyController@uploadProperty');
Route::get('admin/property/cancel/{id}', 'Admin\PropertyController@cancelProperty');
Route::get('admin/uploaded/property', 'Admin\PropertyController@uploadedProperties')->name('admin.uploaded.property'); //-nav
Route::get('admin/delevery/progress/{id}', 'Admin\PropertyController@DeliveryProgress');
Route::get('admin/property/pending/{id}', 'Admin\PropertyController@pendingProperty');
Route::get('admin/delivery/progress', 'Admin\PropertyController@delivery_Progress')->name('admin.delivery.progress'); //-nav
Route::get('admin/delivery/done/{id}', 'Admin\PropertyController@DeliveryDone');
Route::get('admin/delivered/property', 'Admin\PropertyController@successfully_Delivered')->name('admin.delivered.property'); //-nav
Route::get('admin/cancelled/property', 'Admin\PropertyController@cancelledProperty')->name('admin.cancelled.property');  //-nav







//============================================================================================
//============================================================================================


        //---------Frontend All Routes are here:---------------

        //--------User_Property_Add-------------
Route::get('user/add/property','FrontController@userProperty')->name('add.property.user');
Route::post('store/user/property','FrontController@storeUserProperty')->name('store.user.property');  //(user+admin) insert property)

        //----------Newsletter-------------
Route::post('store/newsletters','FrontController@storeNewsletter')->name('store.newsletters');
        //----------Contact/Get_in_Touch-------------
Route::post('store/contact','FrontController@storeContact')->name('store.contact');


        //for subcategory productShowing
// Route::get('/products/{id}', 'ProductController@productsView');
        //---------Order Tracking----------

        //---------UserOrderView-----------

        //----------Search-----------
// Route::post('product/search', 'FrontController@ProductSearch')->name('product.search');
