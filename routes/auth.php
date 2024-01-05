<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganSessionController;



Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

Route::middleware('guest:pelanggan')->group(function () {
    Route::get('/pelanggan/register', [PelangganSessionController::class, 'showRegisterForm'])
        ->name('register.pelanggan');

    Route::post('/pelanggan/register', [PelangganSessionController::class, 'register'])
        ->name('register.pelanggan.store');

    Route::get('/pelanggan/login', [PelangganSessionController::class, 'index'])
        ->name('login.pelanggan');

    Route::post('/pelanggan/login', [PelangganSessionController::class, 'login'])
        ->name('login.pelanggan.store');

    Route::get('/pelanggan/forgot-password', [PelangganSessionController::class, 'forgotPassword'])
        ->name('password.request.pelanggan');

    Route::post('/pelanggan/forgot-password', [PelangganSessionController::class, 'sendResetLinkEmail'])
        ->name('password.email.pelanggan');

    Route::get('/pelanggan/reset-password/{token}', [PelangganSessionController::class, 'resetPassword'])
        ->name('password.reset.pelanggan');

    Route::post('/pelanggan/reset-password', [PelangganSessionController::class, 'updatePassword'])
        ->name('password.update.pelanggan');
});

Route::middleware('auth:pelanggan')->group(function () {
    Route::get('/pelanggan/verify-email', [PelangganSessionController::class, 'verifyEmail'])
        ->name('verification.notice.pelanggan');

    Route::get('/pelanggan/verify-email/{id}/{hash}', [PelangganSessionController::class, 'verifyEmailToken'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify.pelanggan');

    Route::post('/pelanggan/email/verification-notification', [PelangganSessionController::class, 'sendEmailVerificationNotification'])
        ->middleware('throttle:6,1')
        ->name('verification.send.pelanggan');

    Route::get('/pelanggan/confirm-password', [PelangganSessionController::class, 'confirmPassword'])
        ->name('password.confirm.pelanggan');

    Route::post('/pelanggan/confirm-password', [PelangganSessionController::class, 'storeConfirmedPassword'])
        ->name('password.confirm.store.pelanggan');

    Route::put('/pelanggan/password', [PelangganSessionController::class, 'updatePassword'])
        ->name('password.update.pelanggan');

    Route::post('/pelanggan/logout', [PelangganSessionController::class, 'logout'])
        ->name('logout.pelanggan');
});