<?php

use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\ShapefileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::middleware('auth')->group(function () {
    
    Route::get('/', [SiteController::class, 'show_home']);
    Route::get('/dashboard', [SiteController::class, 'show_dashboard']);
    Route::get('/profile', [SiteController::class, 'show_profile']);
    Route::put('/profile-password', [SiteController::class, 'change_password']);

    Route::get('/users', [SiteController::class, 'show_users']);
    Route::post('/users', [SiteController::class, 'create_user']);
    Route::get('/users/{id}', [SiteController::class, 'show_user']);    
    Route::put('/users/{id}', [SiteController::class, 'update_user']);        

    Route::get('/procedures', [ProcedureController::class, 'show_procedure_list']);
    Route::post('/procedures', [ProcedureController::class, 'create_procedure']);
    Route::get('/procedures/{procedure_id}', [ProcedureController::class, 'show_procedure_detail']);
    Route::put('/procedures/{procedure_id}', [ProcedureController::class, 'update_procedure_detail']);

    Route::get('/thresholds', [ThresholdController::class, 'show_threshold_list']);
    Route::post('/thresholds', [ThresholdController::class, 'create_threshold']);
    Route::get('/thresholds/{threshold_id}', [ThresholdController::class, 'show_threshold_detail']);
    Route::put('/thresholds/{threshold_id}', [ThresholdController::class, 'update_threshold_detail']);    

    Route::get('/weightages', [WeightageController::class, 'show_weightage_list']);
    Route::post('/weightages', [WeightageController::class, 'create_weightage']);
    Route::get('/weightages/{weightage_id}', [WeightageController::class, 'show_weightage_detail']);
    Route::put('/weightages/{weightage_id}', [WeightageController::class, 'update_weightage_detail']);   
    
    Route::get('/shapefiles', [ShapefileController::class, 'show_shapefile_list']);
    Route::post('/shapefiles', [ShapefileController::class, 'create_shapefile']);
    Route::get('/shapefiles/{shapefile_id}', [ShapefileController::class, 'show_shapefile_detail']);
    Route::put('/shapefiles/{shapefile_id}', [ShapefileController::class, 'update_shapefile_detail']);       
    
    Route::get('/integrations', [IntegrationController::class, 'show_integration_list']);

});