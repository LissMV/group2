<?php

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\Event;

Route::get('/', function () {
    return view('body.welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('users.signin');
})->name('login');

Route::get('/register', function () {
    return view('users.signup');
})->name('register');

Route::get('/users/edit', function () {
    return view('users.edit',
    [
        'user' => Auth::user(),
        'stores' => Auth::user()->stores,
    ]);
})->name('usersEdit');

Route::get('/home', function () {
    return view('body.home', [
        'products' => Product::inRandomOrder()->limit(9)->get()
    ]);
})->name('home');

Route::get('/sellerHome/{store}', function (Store $store) {
    return view('stores.seller_home',[
        'store' => $store->load('products')
    ]);
})->name('sellerHome');

Route::get('/addProduct', function () {
    return view('products.add_product');
});

Route::get('/store', function () {
    return view('stores.store');
})->name('store');

Route::get('/community', function () {
    return view('community.community');
})->name('community');

Route::get('/learning', function () {
    return view('community.learning');
})->name('learning');

Route::get('/shoppingCart', function () {
    return view('body.shopping-cart', [
        'shoppingCart' => getShoppingCart()->load('cartItems', 'cartItems.product')
    ]);
})->name('shoppingCart');

Route::post('/shoppingCart/{product}', function (Request $request, Product $product) {
    $request->validate([
        'quantity' => 'required',
    ]);

    CartItem::create([
        'cart_id' => getShoppingCart()->id,
        'product_id' => $product->id,
        'price' => $product->price,
        'quantity' => $request->input('quantity')
    ]);

    return redirect()->route('shoppingCart');
})->name('shoppingCartAdd');


function getShoppingCart() {
    $shoppingCart = Cart::where('user_id', Auth::user()->id)->where('checkout', false)->first();

    if ( $shoppingCart == null ) {
        $shoppingCart = Cart::create([
            'user_id' => Auth::user()->id,
            'total' => 0.00,
            'checkout' => false,
        ]);
    }

    return $shoppingCart;
}

Route::get('/seeProducts', function () {
    return view('products.see_products', [
        'products' => Product::inRandomOrder()->get()
    ]);
})->name('seeProduct');

Route::get('/seeProducts/{category}', function (Category $category) {
    return view('products.see_products_bycat', [
        'category' => $category->load('products')
    ]);
})->name('byCategory');

Route::get('/seeDetails/{product}', function (Product $product) {
    return view('products.see_details', [
        'producto' => $product->load('reviews', 'reviews.user')
    ]);
})->name('seeDetails');

Route::get('/events', function () {
    return view('community.event', [
        'events' => Event::all()
    ]);
})->name('events');

Route::get('/about_us', function () {
    return view('body.about_us');
})->name('about_us');

Route::get('/search', function (Request $request) {
    $request->validate([
        'search' => 'string|nullable'
    ]);

    $products = Product::when($request->search, function (Builder $query, $search) {
        $query->where('name', 'like', '%' . $search . '%');
    })->when(!$request->search, fn (Builder $query) => $query->where('id', 0) )->get();

    $stores = Store::when($request->search, function (Builder $query, $search) {
        $query->where('name', 'like', '%' . $search . '%');
    })->when(!$request->search, fn (Builder $query) => $query->where('id', 0) )->get();

    return view('body.search', [
        'productsSearch' => $products,
        'storesSearch' => $stores
    ]);
})->name('search');

//Route::post('/search', function () {
//
//    return redirect()->route('search', [
//        'productsSearch' => $products,
//        'storesSearch' => $stores
//    ]);
//})->name('search');
