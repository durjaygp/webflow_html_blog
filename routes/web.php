<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\RecipeController;
use App\Http\Controllers\Web\BookController;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminBookController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserPanelController;
use App\Http\Controllers\Admin\AdminRecipeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Web\CommentController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\NewPageController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProjectController;


// =============== Home Routes ===============
Route::get('/', [WebController::class,'index'])->name('home');
Route::get('/blog/{slug}', [WebController::class,'blogDetails'])->name('home.blog');
Route::get('/details/{slug}', [WebController::class,'projectDetails'])->name('home.project');
Route::get('/category/{slug}', [WebController::class,'category'])->name('home.category');
Route::get('/about-me', [WebController::class,'about'])->name('home.about');
Route::get('/privacy-policy', [WebController::class,'privacyPolicy'])->name('privacy-policy');
Route::get('/search',[WebController::class,'searchRecipe'])->name('search.blog');
Route::get('sitemap.xml', [WebController::class, 'siteMap']);
Route::get('/page/{slug}', [HomeController::class,'page'])->name('home.page');
Route::post('/contact/save', [HomeController::class,'contactMessage'])->name('contact.save');
Route::post('comment/save',[CommentController::class,'store'])->name('comment.save');
Route::get('/comments/delete/{id}', [CommentController::class,'destroy'])->name('comments.destroy');

Route::get('/dashboard', function () {
    return view('userPanel.admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/favorite/save',[WebController::class,'favoriteSave'])->name('favorite.save');
    Route::get('/favorite/games',[WebController::class,'favoriteGame'])->name('favorite.games');

    Route::get('/dashboard/my-books',[UserPanelController::class,'index'])->name('user.myBooks');
  //  Route::get('/dashboard/book/read/{id}',[UserPanelController::class,'read'])->name('myBooks.read');
    Route::get('/dashboard/book/read/{encryptedId}', [UserPanelController::class, 'read'])
        ->name('myBooks.read')
        ->where('encryptedId', '[A-Za-z0-9]+'); // Adjust the pattern based on your use case

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'isadmin'])->group(function(){
    Route::get('/admin',[DashboardController::class,'index'])->name('admin.index');
    //======== Category Routes ==========
    Route::get('/admin/category',[AdminCategoryController::class,'index'])->name('category.index');
    Route::get('/admin/category/create',[AdminCategoryController::class,'create'])->name('category.create');
    Route::post('/admin/category/save',[AdminCategoryController::class,'save'])->name('category.save');
    Route::get('/admin/category/delete/{id}',[AdminCategoryController::class,'delete'])->name('category.delete');
    Route::get('admin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name('category.edit');
    Route::post('admin/category/update', [AdminCategoryController::class, 'update'])->name('category.update');

    //========== Book Routes =================
    Route::get('/admin/book/create',[AdminBookController::class,'create'])->name('book.create');
    Route::get('/admin/book',[AdminBookController::class,'index'])->name('book.list');
    Route::post('/admin/book/save',[AdminBookController::class,'save'])->name('book.save');
    Route::get('admin/book/delete/{id}', [AdminBookController::class,'delete'])->name('book.delete');
    Route::get('admin/book/edit/{id}',[AdminBookController::class,'edit'])->name('book.edit');
    Route::post('admin/book/update', [AdminBookController::class, 'update'])->name('book.update');

    Route::get('/admin/comment-list',function (){
        return view('backEnd.admin.comments');
    })->name('comment.message');


    //========== Blog Routes =================
    Route::get('admin/blog/create',[BlogController::class,'create'])->name('blog.create');
    Route::get('admin/blog',[BlogController::class,'index'])->name('blog.list');
    Route::post('admin/blog/save',[BlogController::class,'save'])->name('blog.save');
    Route::get('admin/blog/delete/{id}', [BlogController::class,'delete'])->name('blog.delete');
    Route::get('admin/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('admin/blog/update', [BlogController::class, 'update'])->name('blog.update');

    //========== Recipe Routes =================
    Route::get('/admin/recipe/create',[AdminRecipeController::class,'create'])->name('recipe.create');
    Route::get('/admin/recipe',[AdminRecipeController::class,'index'])->name('recipe.list');
    Route::post('/admin/recipe/save',[AdminRecipeController::class,'save'])->name('recipe.save');
    Route::get('admin/recipe/delete/{id}', [AdminRecipeController::class,'delete'])->name('recipe.delete');
    Route::get('admin/recipe/edit/{id}',[AdminRecipeController::class,'edit'])->name('recipe.edit');
    Route::post('admin/recipe/update', [AdminRecipeController::class, 'update'])->name('recipe.update');

    //========== Order List ================
    Route::get('/admin/order',[AdminOrderController::class,'index'])->name('order.list');
    Route::get('/admin/order/pending',[AdminOrderController::class,'pendingOrder'])->name('pendingOrder.list');
    Route::get('/admin/order/delete/{id}',[AdminOrderController::class,'cartDelete'])->name('order.delete');
    Route::get('/admin/order/approve/{id}',[AdminOrderController::class,'orderStatus'])->name('order.approve');


    // ============ Personal Update ==========
    Route::get('admin/personal-details',[AdminController::class,'index'])->name('personal.details');

    //================ Website Setting =====================
    Route::get('admin/website/settings/', [SettingController::class, 'index'])->name('admin.setting');
    Route::post('admin/website/settings/update', [SettingController::class, 'update'])->name('update.setting');

    // ================= Contact Message =================
    Route::get('/admin/contact/message',[AdminController::class,'message'])->name('contact.message');
    Route::get('/admin/delete/message/{id}',[AdminController::class,'messageDelete'])->name('contact.message.delete');

    Route::get('/admin/delete/comment/{id}',[CommentController::class,'delete'])->name('comment.delete');

    //================ Page Routes =====================
    Route::get('admin/page/about/', [AdminController::class, 'homeAbout'])->name('page.homeAbout');
    Route::post('admin/page/about/', [AdminController::class, 'homeAboutSave'])->name('page.homeAboutSave');

    Route::get('admin/page/privacy/', [AdminController::class, 'homePrivacy'])->name('page.homePrivacy');
    Route::post('admin/page/privacy/save', [AdminController::class, 'homePrivacySave'])->name('page.homePrivacySave');

  //Route::post('admin/website/settings/update', [SettingController::class, 'update'])->name('update.setting');

    Route::resource('game',GameController::class);

    Route::resource('new-page', NewPageController::class);

    Route::resource('socials',SocialController::class);
    Route::resource('newsletters',NewsletterController::class);

    Route::get('newsletter/delete/{id}',[NewsletterController::class,'del'])->name('newsletter.del');

    Route::post('ckeditor-upload', [AdminController::class, 'ckeditorUpload'])->name('ckeditor.upload');
    Route::post('/summernote/upload', [AdminController::class, 'summernoteUpload'])->name('summernote.upload');

    Route::resource('project',ProjectController::class);


});





require __DIR__.'/auth.php';
