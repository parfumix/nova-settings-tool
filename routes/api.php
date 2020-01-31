<?php

use Parfumix\NovaSettingsTool\Http\Controllers\SettingsToolController;

Route::get('/', [SettingsToolController::class, 'read']);
Route::post('/', [SettingsToolController::class, 'write']);
