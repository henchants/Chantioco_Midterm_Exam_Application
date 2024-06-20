<?php

// routes/web.php

use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index']);
