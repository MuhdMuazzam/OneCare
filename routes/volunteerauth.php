<?php

use App\Http\Controllers\VolunteerAuth\AuthenticatedSessionController;
use App\Http\Controllers\VolunteerAuth\ConfirmablePasswordController;
use App\Http\Controllers\VolunteerAuth\EmailVerificationNotificationController;
use App\Http\Controllers\VolunteerAuth\EmailVerificationPromptController;
use App\Http\Controllers\VolunteerAuth\NewPasswordController;
use App\Http\Controllers\VolunteerAuth\PasswordResetLinkController;
use App\Http\Controllers\VolunteerAuth\RegisteredUserController;
use App\Http\Controllers\VolunteerAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest:volunteer'],'prefix'=>'volunteer','as'=>'volunteer.'],function(){

    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.volunteers_Email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::group(['middleware' => ['auth:volunteer'],'prefix'=>'volunteer','as'=>'volunteer.'],function(){
    Route::get('verify-volunteers_Email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-volunteers_Email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('volunteers_Email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
