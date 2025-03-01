<?php

use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Route;
Route::get("/create_user",[HospitalController::class,"create_user"])->name("create_user");
Route::post("/register_user",[HospitalController::class,"register_user"])->name("register_user");
Route::get("/manage_admin",[HospitalController::class,"manage_admin"])->name("manage_admin");
Route::get("/delete_admin/{id}",[HospitalController::class,"delete_admin"])->name("delete_admin");

Route::post("/login2",[HospitalController::class,"login2"])->name("login2");
Route::get("/",[HospitalController::class,"login"])->name("login");
Route::get("/summary/{id}",[HospitalController::class,"summary"])->name("summary");
Route::get("/all_patient",[HospitalController::class,"all_patient"])->name("all_patient");
Route::get("/biodata",[HospitalController::class,"biodata"])->name("biodata");
Route::post("/send_biodata",[HospitalController::class,"send_biodata"])->name("send_biodata");
Route::post("/send_patient_dashboard",[HospitalController::class,"send_patient_dashboard"])->name("send_patient_dashboard");
Route::post("/send_consultant",[HospitalController::class,"send_consultant"])->name("send_consultant");
Route::post("/send_medical_history",[HospitalController::class,"send_medical_history"])->name("send_medical_history");
Route::post("/send_preg_biodata",[HospitalController::class,"send_preg_biodata"])->name("send_preg_biodata");
Route::post("/send_pregnancy_history",[HospitalController::class,"send_pregnancy_history"])->name("send_pregnancy_history");
Route::post("/send_scheme",[HospitalController::class,"send_scheme"])->name("send_scheme");
Route::post("/send_specialpoint",[HospitalController::class,"send_specialpoint"])->name("send_specialpoint");
Route::post("/send_test",[HospitalController::class,"send_test"])->name("send_test");
Route::post("/send_ward",[HospitalController::class,"send_ward"])->name("send_ward");

// Route::post("/update_consultant/{id}",[HospitalController::class,"update_consultant"])->name("update_consultant");
Route::get("/consultant/{id}",[HospitalController::class,"consultant"])->name("consultant");
Route::get("/medical_history/{id}",[HospitalController::class,"medical_history"])->name("medical_history");
Route::get("/preg_biodata/{id}",[HospitalController::class,"preg_biodata"])->name("preg_biodata");
Route::get("/pregnancy_history/{id}",[HospitalController::class,"pregnancy_history"])->name("pregnancy_history");
Route::get("/scheme/{id}",[HospitalController::class,"scheme"])->name("scheme");
Route::get("/specialpoint/{id}",[HospitalController::class,"specialpoint"])->name("specialpoint");
Route::get("/test/{id}",[HospitalController::class,"test"])->name("test");
Route::get("/ward/{id}",[HospitalController::class,"ward"])->name("ward");
Route::get("/patient_dashboard/{id}",[HospitalController::class,"patient_dashboard"])->name("patient_dashboard");


Route::get("/delete_biodata/{id}",[HospitalController::class,"delete_biodata"])->name("delete_biodata");
Route::get("/delete_ward/{id}",[HospitalController::class,"delete_ward"])->name("delete_ward");
Route::get("/delete_test/{id}",[HospitalController::class,"delete_test"])->name("delete_test");
Route::get("/delete_specialpoint/{id}",[HospitalController::class,"delete_specialpoint"])->name("delete_specialpoint");
Route::get("/delete_pregnancy/{id}",[HospitalController::class,"delete_pregnancy"])->name("delete_pregnancy");
Route::get("/delete_scheme/{id}",[HospitalController::class,"delete_scheme"])->name("delete_scheme");
Route::get("/delete_medical_history/{id}",[HospitalController::class,"delete_medical_history"])->name("delete_medical_history");
Route::get("/delete_consultant/{id}",[HospitalController::class,"delete_consultant"])->name("delete_consultant");
Route::get("/delete_pregnancy_history/{id}",[HospitalController::class,"delete_pregnancy_history"])->name("delete_pregnancy_history");


Route::get("/logout",[HospitalController::class,"logout"])->name("logout");
