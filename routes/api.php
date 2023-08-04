<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiLinkController;
use App\Http\Controllers\Api\ApiAnalyticsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('api/v2')->group(function () {

    /* API shorten endpoints */
    Route::post('action/shorten', [ApiLinkController::class, 'shortenLink'])->name('api_shorten_url');
    Route::get('action/shorten', [ApiLinkController::class, 'shortenLink'])->name('api_shorten_url');
    Route::post('action/shorten_bulk', [ApiLinkController::class, 'shortenLinksBulk'])->name('api_shorten_url_bulk');

    /* API lookup endpoints */
    Route::post('action/lookup', [ApiLinkController::class, 'lookupLink'])->name('api_lookup_url');
    Route::get('action/lookup', [ApiLinkController::class, 'lookupLink'])->name('api_lookup_url');

    /* API data endpoints */
    Route::get('data/link', [ApiAnalyticsController::class, 'lookupLinkStats'])->name('api_link_analytics');
    Route::post('data/link', [ApiAnalyticsController::class, 'lookupLinkStats'])->name('api_link_analytics');

    /*API delete endpoints */
    Route::get('admin/delete_link', [ApiLinkController::class, 'deleteLink'])->name('api_delete_link');
});
