<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Content\CategoryController as ContentCategoryController;
use App\Http\Controllers\Admin\Content\CommentController as ContentCommentController;

/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
|
| All routes Admin Panel
| Use Prefix admin
|
*/

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');




    // Market Prefix ===============================================
    Route::prefix('market')->group(function () {

        //    Category Section ================================================
        Route::prefix('category')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\Market\CategoryController::class, 'index'])->name('admin.market.category.index');
            Route::get('/create', [\App\Http\Controllers\Admin\Market\CategoryController::class, 'create'])->name('admin.market.category.create');
            Route::post('/store', [\App\Http\Controllers\Admin\Market\CategoryController::class, 'store'])->name('admin.market.category.store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\Market\CategoryController::class, 'edit'])->name('admin.market.category.edit');
            Route::put('/update/{id}', [\App\Http\Controllers\Admin\Market\CategoryController::class, 'update'])->name('admin.market.category.update');
            Route::delete('/delete/{id}', [\App\Http\Controllers\Admin\Market\CategoryController::class, 'destroy'])->name('admin.market.category.destroy');
        });
        //    End Category Section ======================================


        //    Brand   Section ================================================
        Route::prefix('brand')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\Market\BrandController::class, 'index'])->name('admin.market.brand.index');
            Route::get('/create', [\App\Http\Controllers\Admin\Market\BrandController::class, 'create'])->name('admin.market.brand.create');
            Route::post('/store', [\App\Http\Controllers\Admin\Market\BrandController::class, 'store'])->name('admin.market.brand.store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\Market\BrandController::class, 'edit'])->name('admin.market.brand.edit');
            Route::put('/update/{id}', [\App\Http\Controllers\Admin\Market\BrandController::class, 'update'])->name('admin.market.brand.update');
            Route::delete('/delete/{id}', [\App\Http\Controllers\Admin\Market\BrandController::class, 'destroy'])->name('admin.market.brand.destroy');
        });
        //    End Brand Section ======================================

        //    Comment   Section ================================================
        Route::prefix('comment')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\Market\CommentController::class, 'index'])->name('admin.market.comment.index');
            Route::get('/show/', [\App\Http\Controllers\Admin\Market\CommentController::class, 'show'])->name('admin.market.comment.show');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\Market\CommentController::class, 'edit'])->name('admin.market.comment.edit');
            Route::put('/update/{id}', [\App\Http\Controllers\Admin\Market\CommentController::class, 'update'])->name('admin.market.comment.update');
            Route::delete('/destroy/{id}', [\App\Http\Controllers\Admin\Market\CommentController::class, 'destroy'])->name('admin.market.comment.destroy');
        });
        //    End Comment Section ======================================


        //    Delivery   Section ================================================
        Route::prefix('delivery')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\Market\DeliveryController::class, 'index'])->name('admin.market.delivery.index');
            Route::get('/show/', [\App\Http\Controllers\Admin\Market\DeliveryController::class, 'show'])->name('admin.market.delivery.show');
            Route::get('/create/', [\App\Http\Controllers\Admin\Market\DeliveryController::class, 'create'])->name('admin.market.delivery.create');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\Market\DeliveryController::class, 'edit'])->name('admin.market.delivery.edit');
            Route::put('/update/{id}', [\App\Http\Controllers\Admin\Market\DeliveryController::class, 'update'])->name('admin.market.delivery.update');
            Route::delete('/destroy/{id}', [\App\Http\Controllers\Admin\Market\DeliveryController::class, 'destroy'])->name('admin.market.delivery.destroy');
        });
        //    End Delivery Section ======================================

        //    Discount    Section ================================================
        Route::prefix('discount')->group(function () {

            Route::get('/voucher', [\App\Http\Controllers\Admin\Market\DiscountController::class, 'voucher'])->name('admin.market.discount.index');
            Route::get('voucher/create/', [\App\Http\Controllers\Admin\Market\DiscountController::class, 'voucherCreate'])->name('admin.market.discount.voucher.create');
            Route::get('/common-discount/', [\App\Http\Controllers\Admin\Market\DiscountController::class, 'commonDiscount'])->name('admin.market.discount.common');
            Route::get('/common-discount/create', [\App\Http\Controllers\Admin\Market\DiscountController::class, 'createCommon'])->name('admin.market.discount.common.create');
            Route::get('/amazing-sale', [\App\Http\Controllers\Admin\Market\DiscountController::class, 'AmazingSale'])->name('admin.market.discount.amazing.sale');
            Route::get('/amazing-sale/create', [\App\Http\Controllers\Admin\Market\DiscountController::class, 'amazingSaleCreate'])->name('admin.market.discount.amazingSale.create');
        });
        //    End Discount  Section ======================================



        // Start Order Section =================================================

        Route::prefix('order')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\Market\OrderController::class, 'all'])->name('admin.market.order.all');
            Route::get('/new-order', [\App\Http\Controllers\Admin\Market\OrderController::class, 'newOrders'])->name('admin.market.order.newOrders');
            Route::get('/sending', [\App\Http\Controllers\Admin\Market\OrderController::class, 'sending'])->name('admin.market.order.sending');
            Route::get('/unpaid', [\App\Http\Controllers\Admin\Market\OrderController::class, 'unpaid'])->name('admin.market.order.unpaid');
            Route::get('/canceled', [\App\Http\Controllers\Admin\Market\OrderController::class, 'canceled'])->name('admin.market.order.canceled');
            Route::get('/returned', [\App\Http\Controllers\Admin\Market\OrderController::class, 'returned'])->name('admin.market.order.returned');
            Route::get('/show', [\App\Http\Controllers\Admin\Market\OrderController::class, 'show'])->name('admin.market.order.show');
            Route::get('/change-send-status', [\App\Http\Controllers\Admin\Market\OrderController::class, 'changeSendStatus'])->name('admin.market.order.changeSendStatus');
            Route::get('/change-order-status', [\App\Http\Controllers\Admin\Market\OrderController::class, 'changeOrderStatus'])->name('admin.market.order.changeOrderStatus');
            Route::get('/cancel-order', [\App\Http\Controllers\Admin\Market\OrderController::class, 'cancelOrder'])->name('admin.market.order.cancelOrder');
        });
        // End Order Section ======================================================================



        // Start Payment Section ======================================================================        Route::prefix('payment')->group(function(){
        Route::prefix('payment')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\Market\PaymentController::class, 'index'])->name('admin.market.payment.index');
            Route::get('/online', [\App\Http\Controllers\Admin\Market\PaymentController::class, 'online'])->name('admin.market.payment.online');
            Route::get('/offline', [\App\Http\Controllers\Admin\Market\PaymentController::class, 'offline'])->name('admin.market.payment.offline');
            Route::get('/attendance', [\App\Http\Controllers\Admin\Market\PaymentController::class, 'attendance'])->name('admin.market.payment.attendance');
            Route::get('/confirm', [\App\Http\Controllers\Admin\Market\PaymentController::class, 'confirm'])->name('admin.market.payment.confirm');
        });
        // End Payment Section =================================================================================================


        //Start Product Section =============================================================================================================================
        Route::prefix('product')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\Market\ProductController::class, 'index'])->name('admin.market.product.index');
            Route::get('/create', [\App\Http\Controllers\Admin\Market\ProductController::class, 'create'])->name('admin.market.product.create');
            Route::post('/store', [\App\Http\Controllers\Admin\Market\ProductController::class, 'store'])->name('admin.market.product.store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\Market\ProductController::class, 'edit'])->name('admin.market.product.edit');
            Route::put('/update/{id}', [\App\Http\Controllers\Admin\Market\ProductController::class, 'update'])->name('admin.market.product.update');
            Route::delete('/destroy/{id}', [\App\Http\Controllers\Admin\Market\ProductController::class, 'destroy'])->name('admin.market.product.destroy');
            //gallery
            Route::get('/gallery', [\App\Http\Controllers\Admin\Market\GalleryController::class, 'index'])->name('admin.market.gallery.index');
            Route::post('/gallery/store', [\App\Http\Controllers\Admin\Market\GalleryController::class, 'store'])->name('admin.market.gallery.store');
            Route::delete('/gallery/destroy/{id}', [\App\Http\Controllers\Admin\Market\GalleryController::class, 'destroy'])->name('admin.market.gallery.destroy');
        });
        // End Product Section =================================================================================================================================================================================================



        // Start Property Section ========================================================================================================================================================================================================
        Route::prefix('property')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\Market\PropertyController::class, 'index'])->name('admin.market.property.index');
            Route::get('/create', [\App\Http\Controllers\Admin\Market\PropertyController::class, 'create'])->name('admin.market.property.create');
            Route::post('/store', [\App\Http\Controllers\Admin\Market\PropertyController::class, 'store'])->name('admin.market.property.store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\Market\PropertyController::class, 'edit'])->name('admin.market.property.edit');
            Route::put('/update/{id}', [\App\Http\Controllers\Admin\Market\PropertyController::class, 'update'])->name('admin.market.property.update');
            Route::delete('/destroy/{id}', [\App\Http\Controllers\Admin\Market\PropertyController::class, 'destroy'])->name('admin.market.property.destroy');
        });
        // End Property Section =================================================================================================================================================================================================



        // Start Store Section ========================================================================================================================================================================================================


        Route::prefix('store')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\Market\StoreController::class, 'index'])->name('admin.market.store.index');
            Route::get('/add-to-store', [\App\Http\Controllers\Admin\Market\StoreController::class, 'addToStore'])->name('admin.market.store.add-to-store');
            Route::post('/store', [\App\Http\Controllers\Admin\Market\StoreController::class, 'store'])->name('admin.market.store.store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\Market\StoreController::class, 'edit'])->name('admin.market.store.edit');
            Route::put('/update/{id}', [\App\Http\Controllers\Admin\Market\StoreController::class, 'update'])->name('admin.market.store.update');
            Route::delete('/destroy/{id}', [\App\Http\Controllers\Admin\Market\StoreController::class, 'destroy'])->name('admin.market.store.destroy');
        });



        // End Store Section ========================================================================================================================================================================================================




    });
    // Start Content prefix =================================================================
    Route::prefix('content')->group(function () {

        Route::prefix('category')->group(function () {
            Route::get('/', [ContentCategoryController::class, 'index'])->name('admin.content.category.index');
            Route::get('/create', [ContentCategoryController::class, 'create'])->name('admin.content.category.create');
            Route::post('/store', [ContentCategoryController::class, 'store'])->name('admin.content.category.store');
            Route::get('/edit/{id}', [ContentCategoryController::class, 'edit'])->name('admin.content.category.edit');
            Route::put('/update/{id}', [ContentCategoryController::class, 'update'])->name('admin.content.category.update');
            Route::delete('/destroy/{id}', [ContentCategoryController::class, 'destroy'])->name('admin.content.category.destroy');
        });

        // Start Comment Section =======================================================
        Route::prefix('comment')->group(function () {
            Route::get('/', [ContentCommentController::class, 'index'])->name('admin.content.comment.index');
            Route::get('/show', [ContentCommentController::class, 'show'])->name('admin.content.comment.show');
            Route::post('/store', [ContentCommentController::class, 'store'])->name('admin.content.comment.store');
            Route::get('/edit/{id}', [ContentCommentController::class, 'edit'])->name('admin.content.comment.edit');
            Route::put('/update/{id}', [ContentCommentController::class, 'update'])->name('admin.content.comment.update');
            Route::delete('/destroy/{id}', [ContentCommentController::class, 'destroy'])->name('admin.content.comment.destroy');
        });
        // End  Comment Section =======================================================
        // Start faq Section =================================================================================================================
        Route::prefix('faq')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\Content\FAQController::class, 'index'])->name('admin.content.faq.index');
            Route::get('/create', [App\Http\Controllers\Admin\Content\FAQController::class, 'create'])->name('admin.content.faq.create');
            Route::post('/store', [App\Http\Controllers\Admin\Content\FAQController::class, 'store'])->name('admin.content.faq.store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\Content\FAQController::class, 'edit'])->name('admin.content.faq.edit');
            Route::put('/update/{id}', [App\Http\Controllers\Admin\Content\FAQController::class, 'update'])->name('admin.content.faq.update');
            Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Content\FAQController::class, 'destroy'])->name('admin.content.faq.destroy');
        });
        // End faq Section =================================================================================================================================
        // Start menu Section =================================================================================================================================================================
        Route::prefix('menu')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\Content\MenuController::class, 'index'])->name('admin.content.menu.index');
            Route::get('/create', [App\Http\Controllers\Admin\Content\MenuController::class, 'create'])->name('admin.content.menu.create');
            Route::post('/store', [App\Http\Controllers\Admin\Content\MenuController::class, 'store'])->name('admin.content.menu.store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\Content\MenuController::class, 'edit'])->name('admin.content.menu.edit');
            Route::put('/update/{id}', [App\Http\Controllers\Admin\Content\MenuController::class, 'update'])->name('admin.content.menu.update');
            Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Content\MenuController::class, 'destroy'])->name('admin.content.menu.destroy');
        });
        // End menu Section ==============================================================================================================================================================================

        // Start Page Section ======================================================================================================================================================================================
        Route::prefix('page')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\Content\PageController::class, 'index'])->name('admin.content.page.index');
            Route::get('/create', [App\Http\Controllers\Admin\Content\PageController::class, 'create'])->name('admin.content.page.create');
            Route::post('/store', [App\Http\Controllers\Admin\Content\PageController::class, 'store'])->name('admin.content.page.store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\Content\PageController::class, 'edit'])->name('admin.content.page.edit');
            Route::put('/update/{id}', [App\Http\Controllers\Admin\Content\PageController::class, 'update'])->name('admin.content.page.update');
            Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Content\PageController::class, 'destroy'])->name('admin.content.page.destroy');
        });
        // End Page Section ===================================================================================================================================================================================================
        // Start Post Section ==========================================================================================================================================================================================================
        Route::prefix('post')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\Content\PostController::class, 'index'])->name('admin.content.post.index');
            Route::get('/create', [App\Http\Controllers\Admin\Content\PostController::class, 'create'])->name('admin.content.post.create');
            Route::post('/store', [App\Http\Controllers\Admin\Content\PostController::class, 'store'])->name('admin.content.post.store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\Content\PostController::class, 'edit'])->name('admin.content.post.edit');
            Route::put('/update/{id}', [App\Http\Controllers\Admin\Content\PostController::class, 'update'])->name('admin.content.post.update');
            Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Content\PostController::class, 'destroy'])->name('admin.content.post.destroy');
        });
        // End Post Section ==========================================================================================================================================================================================================





    });

    // Start User Prefix
    Route::prefix('user')->namespace('User')->group(function () {
        // Start user Admin Section = = === = = = = = = = = = = = = = = = =

        Route::prefix('admin-user')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\User\AdminUserController::class, 'index'])->name('admin.user.admin-user.index');
            Route::get('/create', [App\Http\Controllers\Admin\User\AdminUserController::class, 'create'])->name('admin.user.admin-user.create');
            Route::post('/store', [App\Http\Controllers\Admin\User\AdminUserController::class, 'store'])->name('admin.user.admin-user.store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\User\AdminUserController::class, 'edit'])->name('admin.user.admin-user.edit');
            Route::put('/update/{id}', [App\Http\Controllers\Admin\User\AdminUserController::class, 'update'])->name('admin.user.admin-user.update');
            Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\User\AdminUserController::class, 'destroy'])->name('admin.user.admin-user.destroy');
        });
        // End user Admin Section = = === = = = = = = = = = = = = = = = =
        // Start Customer Section = = === = = = = = = = = = = = = = = = =


        Route::prefix('customer')->group(function(){
            Route::get('/', [App\Http\Controllers\Admin\User\CustomerController::class, 'index'])->name('admin.user.customer.index');
            Route::get('/create', [App\Http\Controllers\Admin\User\CustomerController::class, 'create'])->name('admin.user.customer.create');
            Route::post('/store', [App\Http\Controllers\Admin\User\CustomerController::class, 'store'])->name('admin.user.customer.store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\User\CustomerController::class, 'edit'])->name('admin.user.customer.edit');
            Route::put('/update/{id}', [App\Http\Controllers\Admin\User\CustomerController::class, 'update'])->name('admin.user.customer.update');
            Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\User\CustomerController::class, 'destroy'])->name('admin.user.customer.destroy');
    });



        // End Customer Section = = === = = = = = = = = = = = = = = = =




        // Start role Section = = === = = = = = = = = = = = = = = = =

        Route::prefix('role')->group(function(){
            Route::get('/', [App\Http\Controllers\Admin\User\RoleController::class, 'index'])->name('admin.user.role.index');
            Route::get('/create', [App\Http\Controllers\Admin\User\RoleController::class, 'create'])->name('admin.user.role.create');
            Route::post('/store', [App\Http\Controllers\Admin\User\RoleController::class, 'store'])->name('admin.user.role.store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\User\RoleController::class, 'edit'])->name('admin.user.role.edit');
            Route::put('/update/{id}', [App\Http\Controllers\Admin\User\RoleController::class, 'update'])->name('admin.user.role.update');
            Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\User\RoleController::class, 'destroy'])->name('admin.user.role.destroy');
    });






        // End role Section = = === = = = = = = = = = = = = = = = =



        // Start permission Section = = === = = = = = = = = = = = = = = = =


        Route::prefix('permission')->group(function(){
            Route::get('/', [App\Http\Controllers\Admin\User\PermissionController::class, 'index'])->name('admin.user.permission.index');
            Route::get('/create', [App\Http\Controllers\Admin\User\PermissionController::class, 'create'])->name('admin.user.permission.create');
            Route::post('/store', [App\Http\Controllers\Admin\User\PermissionController::class, 'store'])->name('admin.user.permission.store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\User\PermissionController::class, 'edit'])->name('admin.user.permission.edit');
            Route::put('/update/{id}', [App\Http\Controllers\Admin\User\PermissionController::class, 'update'])->name('admin.user.permission.update');
            Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\User\PermissionController::class, 'destroy'])->name('admin.user.permission.destroy');
    });



        // End permission Section = = === = = = = = = = = = = = = = = = =

    });
        // End User Section = = === = = = = = = = = = = = = = = = =








// Start notification Prefix =================================================================================================================
Route::prefix('notification')->group(function(){

    Route::prefix('email')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\Notification\EmailController::class, 'index'])->name('admin.notify.email.index');
        Route::get('/create', [App\Http\Controllers\Admin\Notification\EmailController::class, 'create'])->name('admin.notify.email.create');
        Route::post('/store', [App\Http\Controllers\Admin\Notification\EmailController::class, 'store'])->name('admin.notify.email.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\Notification\EmailController::class, 'edit'])->name('admin.notify.email.edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\Notification\EmailController::class, 'update'])->name('admin.notify.email.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Notification\EmailController::class, 'destroy'])->name('admin.notify.email.destroy');
});



Route::prefix('sms')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\Notification\SMSController::class, 'index'])->name('admin.notify.sms.index');
    Route::get('/create', [App\Http\Controllers\Admin\Notification\SMSController::class, 'create'])->name('admin.notify.sms.create');
    Route::post('/store', [App\Http\Controllers\Admin\Notification\SMSController::class, 'store'])->name('admin.notify.sms.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\Notification\SMSController::class, 'edit'])->name('admin.notify.sms.edit');
    Route::put('/update/{id}', [App\Http\Controllers\Admin\Notification\SMSController::class, 'update'])->name('admin.notify.sms.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Notification\SMSController::class, 'destroy'])->name('admin.notify.sms.destroy');
});


});
// End Notification Section =================================================================

//Start ticket Prefix ================================================================================
Route::prefix('ticket')->group(function(){


    Route::get('/new-tickets', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'newTickets'])->name('admin.ticket.newTickets');
    Route::get('/open-tickets', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'openTickets'])->name('admin.ticket.openTickets');
    Route::get('/close-tickets', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'closeTickets'])->name('admin.ticket.closeTickets');
    Route::get('/', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'index'])->name('admin.ticket.index');
    Route::get('/show', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'show'])->name('admin.ticket.show');
    Route::get('/create', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'create'])->name('admin.ticket.create');
    Route::post('/store', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'store'])->name('admin.ticket.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'edit'])->name('admin.ticket.edit');
    Route::put('/update/{id}', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'update'])->name('admin.ticket.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Ticket\TicketController::class, 'destroy'])->name('admin.ticket.destroy');


});
//End  ticket Prefix ================================================================================

//  Start Settings Prefix =================================================================================================================
Route::prefix('setting')->group(function(){

    Route::get('/', [App\Http\Controllers\Admin\Settings\SettingController::class, 'index'])->name('admin.setting.index');
    Route::get('/create', [App\Http\Controllers\Admin\Settings\SettingController::class, 'create'])->name('admin.setting.create');
    Route::post('/store', [App\Http\Controllers\Admin\Settings\SettingController::class, 'store'])->name('admin.setting.store');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\Settings\SettingController::class, 'edit'])->name('admin.setting.edit');
    Route::put('/update/{id}', [App\Http\Controllers\Admin\Settings\SettingController::class, 'update'])->name('admin.setting.update');
    Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Settings\SettingController::class, 'destroy'])->name('admin.setting.destroy');

});
//  End Settings Prefix =================================================================================================================





});














