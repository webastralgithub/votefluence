<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserDetails;
use Illuminate\Support\Facades\Route;

Route::get('/', [ItemController::class,'index'])->name('index');
Route::post('/save-influencer-details', [UserDetails::class,'saveInfluencerDetails'])->name('saveInfluencerDetails');
Route::post('/save-voter-details', [UserDetails::class,'saveVoterDetails'])->name('saveVoterDetails');
