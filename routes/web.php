<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ConsultationsController;
use App\Http\Controllers\HistoryLabController;
use App\Http\Controllers\PrescriptionsController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\LaboratoriesController;
use App\Http\Controllers\StudiesController;
use App\Http\Controllers\AnalysisController;


Route::group(['middleware' => 'auth'], function() {
    Route::get('reception',  [PatientsController::class, 'index'])->name('reception');
    Route::post('addPatient', [PatientsController::class, 'addPatient'])->name('addPatient');
    Route::post('addPatienttoList', [PatientsController::class, 'addPatienttoList'])->name('addPatienttoList');
    Route::post('getBirthdate', [PatientsController::class, 'getBirthdate'])->name('getBirthdate');
    Route::post('addConsultation', [ConsultationsController::class, 'addConsultation'])->name('addConsultation');
    Route::get('waitingList',  [ConsultationsController::class, 'waitingList'])->name('waitingList');
    Route::get('consultation/{id}',  [ConsultationsController::class, 'consultation'])->name('consultation');
    Route::post('addPrescription', [PrescriptionsController::class, 'addPrescription'])->name('addPrescription');
    Route::post('updatepres', [PrescriptionsController::class, 'updatepres'])->name('updatepres');
    Route::post('finalizeConsultation', [ConsultationsController::class, 'finalizeConsultation'])->name('finalizeConsultation');

    //Patients
    Route::get('patients',  [PatientsController::class, 'patients'])->name('patients');
    Route::get('dataPatient/{id}',  [PatientsController::class, 'dataPatient'])->name('dataPatient');

    Route::get('patientDetail/{id}',  [PatientsController::class, 'patientDetail'])->name('patientDetail');
    Route::get('schedules',  [ConsultationsController::class, 'schedule'])->name('schedules');
    Route::get('prescriptions',  [PrescriptionsController::class, 'index'])->name('prescriptions');
    Route::post('updatePatient', [PatientsController::class, 'updatePatient'])->name('updatePatient');
    Route::post('deletePatient', [PatientsController::class, 'deletePatient'])->name('deletePatient');
    Route::post('deleteUser', [AuthController::class, 'deleteUser'])->name('deleteUser');
    Route::post('deletePrescription', [PrescriptionsController::class, 'deletePrescription'])->name('deletePrescription');

    
    //History Clinic
    Route::post('addHistory', [HistoryController::class, 'addHistory'])->name('addHistory');
    Route::get('dataHistory/{id}',  [HistoryController::class, 'dataHistory'])->name('dataHistory');

    //Laboratory
    Route::post('addLaboratory', [LaboratoriesController::class, 'addLaboratory'])->name('addLaboratory');
    Route::get('dataLaboratory/{id}',  [LaboratoriesController::class, 'dataLaboratory'])->name('dataLaboratory');
    
    Route::get('charts',  [ConsultationsController::class, 'charts'])->name('charts'); 
    Route::post('filterChart',  [ConsultationsController::class, 'filterChart'])->name('filterChart');  
    
    
    Route::post('getConsultationWL', [ConsultationsController::class, 'getConsultationWL'])->name('getConsultationWL');
    Route::post('editConsultation', [ConsultationsController::class, 'editConsultation'])->name('editConsultation');
    
    // Laboratory result 
    Route::post('saveResulLab', [HistoryLabController::class, 'saveResulLab'])->name('saveResulLab');  
    Route::get('dataResultLab/{id}', [HistoryLabController::class, 'dataResultLab'])->name('dataResultLab');  

    //Estudios
    Route::post('addEstudios', [StudiesController::class, 'addEstudios'])->name('addEstudios'); 
    Route::get('dataResulStud/{id}', [StudiesController::class, 'dataResulStud'])->name('dataResulStud');
    Route::get('users', [AnalysisController::class, 'allUsers'])->name('users');

    Route::post('signup', [AuthController::class, 'signUp'])->name('signup');


    
    
});

Route::get('savePrescription/{id}', [PrescriptionsController::class, 'savePrescription'])->name('savePrescription');

Route::get('/', function () {
    return view('website/website');
});

Route::get('/lab', function () {
    return view('laboratory');
});
Route::get('/stu', function () {
    return view('studies');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/sistema', function () {
    return view('login');
});

Route::get('/convert', [PDFController::class, 'test'])->name('convert');

//'DocumentController@convertWordToPDF')->name('document.wordtopdf');



Route::post('login', [AuthController::class, 'login'])->name('login');