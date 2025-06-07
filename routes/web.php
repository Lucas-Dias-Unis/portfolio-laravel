<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Rota para a página inicial (home)
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Rota para a página "Sobre"
Route::get('/sobre', [PortfolioController::class, 'about'])->name('about');

// Rota para a página "Contato" (GET exibe o formulário)
Route::get('/contato', [PortfolioController::class, 'contact'])->name('contact');

// Rota para processar o envio do formulário (POST)
Route::post('/contato', [PortfolioController::class, 'sendMessage'])->name('contact.send');
