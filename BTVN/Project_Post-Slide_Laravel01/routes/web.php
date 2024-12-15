<?php
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\PostController;
 use App\Http\Controllers\HomeController;
 Route::get('/', [PostController::class, "index"])->name('index');
//  Route::get("/posts", [PostController::class, "index"]);
 Route::get("/create", [PostController::class, "create"]);
 Route::post("/post/store", [PostController::class, "store"])->name('post.store');
 Route::delete("/post/destroy/{id}", [PostController::class, "destroy"])->name('post.destroy');
 Route::get("/post/edit/{id}", [PostController::class, "edit"])->name('posts.edit');
 Route::put("/post/update/{id}", [PostController::class, "update"])->name('posts.update');


 
?>