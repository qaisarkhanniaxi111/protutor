<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Admin\UserdetailController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Tutor\EarningController;
use App\Http\Controllers\Tutor\TutorController;
use App\Http\Controllers\Tutor\GroupLessonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//fronend route
Route::get('/', [FrontendController::class, 'homepage']);
Route::any('/login', [FrontendController::class, 'login'])->name('login');
Route::any('/signup', [FrontendController::class, 'signup']);
Route::any('/student-signup', [FrontendController::class, 'student_signup']);
Route::any('/verify-user/{token}', [FrontendController::class, 'verifyUser']);
Route::any('/become-a-tutor', [FrontendController::class, 'become_a_tutor']);
Route::any('/find-a-tutor', [FrontendController::class, 'find_a_tutor']);
Route::any('/tutor-signup/{userid}', [FrontendController::class, 'tutor_details_page']);
Route::any('/submit_tutor_signup', [FrontendController::class, 'submit_tutor_signup']);
Route::any('/tutor-detail/{tutorid}', [FrontendController::class, 'tutor_detail_single_page']);
Route::any('/group', [FrontendController::class, 'groupclasses']);
Route::any('/group/details/{groupLesson}', [FrontendController::class, 'openGroupDetails'])->name('group.details');
Route::get('/game1', [TutorController::class, 'game']);
Route::get('/gamet', [TutorController::class, 'game2']);


Route::group(['middleware' => ['dashboardmiddleware']], function() {

Route::any('/dashboard', [DashboardController::class, 'dashboard']);
Route::any('/logout', [DashboardController::class, 'logout']);

Route::any('/profile/{id?}', [DashboardController::class, 'profileUpdate']);
Route::any('/delete_education/{id}', [DashboardController::class, 'deleteEducation']);
Route::any('/delete_certificate/{id}', [DashboardController::class, 'deleteCertificate']);
Route::any('/delete_experience/{id}', [DashboardController::class, 'deleteExperience']);
Route::any('/delete_identity/{id}', [DashboardController::class, 'deleteIdentity']);

Route::get('/studentquiz', [DashboardController::class, 'quiz']);
Route::get('/attemptquiz', [DashboardController::class, 'attemptQuiz']);
Route::post('/startquiz', [DashboardController::class, 'startquiz']);
Route::post('/startquiz2', [DashboardController::class, 'startquiz2']);
Route::post('/savequizquestionanswer', [DashboardController::class, 'savequizquestionanswer']);
Route::post('/filterDataStudentQuiz', [DashboardController::class, 'filterData']);

Route::post('/savequizquestionanswergame', [DashboardController::class, 'savequizquestionanswergame']);

Route::get('payment/', [PaymentController::class,'index'])->name('payment');
Route::post('payment/charge/{groupLesson}', [PaymentController::class,'charge'])->name('payment.charge');


});

Route::group(['middleware' => ['tutormiddleware']], function() {

Route::any('/tutordashboard', [TutorController::class, 'dashboard']);
Route::any('/tutorquiz', [TutorController::class, 'quiz']);
Route::any('/tutorlogout', [TutorController::class, 'logout']);

Route::any('/profile/{id?}', [DashboardController::class, 'profileUpdate']);
Route::any('/delete_education/{id}', [DashboardController::class, 'deleteEducation']);
Route::any('/delete_certificate/{id}', [DashboardController::class, 'deleteCertificate']);
Route::any('/delete_experience/{id}', [DashboardController::class, 'deleteExperience']);
Route::any('/delete_identity/{id}', [DashboardController::class, 'deleteIdentity']);

Route::post('/createQuiz', [TutorController::class, 'createQuiz']);
Route::post('/createQuizInstructions', [TutorController::class, 'createQuizInstructions']);
Route::post('/submitQuestion', [TutorController::class, 'submitQuestion']);
Route::post('/submitQuizSettings', [TutorController::class, 'submitQuizSettings']);
Route::post('/publishQuiz', [TutorController::class, 'publishQuiz']);
Route::post('/deleteQuiz', [TutorController::class, 'deleteQuiz']);
Route::post('/getQuizQuestions', [TutorController::class, 'getQuizQuestions']);
Route::post('/editSubmitQuestion', [TutorController::class, 'editSubmitQuestion']);
Route::post('/deleteQuestion', [TutorController::class, 'deleteQuestion']);
Route::post('/republishQuiz', [TutorController::class, 'republishQuiz']);
Route::post('/filterData', [TutorController::class, 'filterData']);
Route::get('/tutorgrouplessons', [TutorController::class, 'tutorquizgrouplessons'])->name('index.groupLesson');

// create , complete and uncomplete routes 
Route::get('/tutorgrouplessons/create', [GroupLessonController::class, 'createGroupLesson'])->name('create.groupLesson');
Route::get('/tutorgrouplessons/complete', [GroupLessonController::class, 'completeGroupLesson'])->name('complete.groupLesson');
Route::get('/tutorgrouplessons/uncomplete', [GroupLessonController::class, 'uncompleteGroupLesson'])->name('uncomplete.groupLesson');


Route::post('/tutorgrouplessons/store', [GroupLessonController::class, 'storeGroupLesson'])->name('store.groupLesson');
Route::get('deleteGroupLesson/{id}', [GroupLessonController::class,'deleteGroupLesson'])->name('delete.groupLesson');
Route::get('showGroupLesson/{id}', [GroupLessonController::class,'showGroupLesson'])->name('show.groupLesson');
Route::get('editGroupLesson/{id}', [GroupLessonController::class,'editGroupLesson'])->name('edit.groupLesson');
Route::post('updateGroupLesson/', [GroupLessonController::class,'updateGroupLesson'])->name('update.groupLesson');




Route::prefix('tutor')->as('tutor.')->group(function() {

    Route::get('chat', [TutorController::class, 'openChat'])->name('chat');

    Route::prefix('earnings')->as('earnings.')->controller(EarningController::class)->group(function() {
        Route::get('/', 'openEarningPage')->name('index');
        Route::get('clearence', 'openClearencePage')->name('clearence');
    });

});



});

//admin route
Route::group(['middleware' => ['adminmiddleware']], function() {


Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::any('/admin/logout', [AdminController::class, 'logout']);
Route::any('/admin/user_register_by_admin', [AdminController::class, 'user_register_by_admin']);

//student-testimonials
Route::any('/admin/student-testimonials', [AdminController::class, 'student_testimonials']);
Route::any('/admin/create_testimonial', [AdminController::class, 'create_testimonial']);
Route::any('/admin/testimonial_status_update', [AdminController::class, 'testimonial_status_update']);
Route::any('/admin/testimonial_delete/{id}', [AdminController::class, 'testimonial_delete']);

Route::any('/admin/edit_testimonial', [AdminController::class, 'edit_testimonial']);

Route::any('/admin/update_testimonial', [AdminController::class, 'update_testimonial']);

//pages
Route::any('admin/edit-homepage/{homepage_id}', [AdminController::class, 'edit_homepage']);
Route::any('admin/update_homepage/{homepage_id}', [AdminController::class, 'update_homepage']);


//subject
Route::any('/admin/subject', [AdminController::class, 'subject']);
Route::any('/admin/subject/create_subject', [AdminController::class, 'create_subject']);
Route::any('/admin/subject/get_subject_value', [AdminController::class, 'get_subject_value']);
Route::any('/admin/subject/update_subject', [AdminController::class, 'update_subject']);
Route::any('/admin/subject/delete_subject/{id}', [AdminController::class, 'delete_subject']);

//teaches-level
Route::any('/admin/teaches_level', [AdminController::class, 'teaches_level']);
Route::any('/admin/teaches_level/create_level', [AdminController::class, 'create_level']);
Route::any('/admin/teaches_level/get_level_value', [AdminController::class, 'get_level_value']);
Route::any('/admin/teaches_level/update_level', [AdminController::class, 'update_level']);
Route::any('/admin/teaches_level/delete_level/{id}', [AdminController::class, 'delete_level']);

//hourly-Rate
Route::any('/admin/hourly_rate', [AdminController::class, 'hourly_rate']);
Route::any('/admin/hourly_rate/create_rate', [AdminController::class, 'create_rate']);
Route::any('/admin/hourly_rate/get_rate', [AdminController::class, 'get_rate']);
Route::any('/admin/hourly_rate/update_rate', [AdminController::class, 'update_rate']);
Route::any('/admin/hourly_rate/delete_rate/{id}', [AdminController::class, 'delete_rate']);

//spoken Language
Route::any('/admin/spoken_language', [AdminController::class, 'spoken_language']);
Route::any('/admin/spoken_language/create_spoken_language', [AdminController::class, 'create_spoken_language']);
Route::any('/admin/spoken_language/get_spoken_language', [AdminController::class, 'get_spoken_language']);
Route::any('/admin/spoken_language/update_spoken_language', [AdminController::class, 'update_spoken_language']);
Route::any('/admin/spoken_language/status_update', [AdminController::class, 'language_status_update']);
Route::any('/admin/spoken_language/delete_language/{id}', [AdminController::class, 'delete_language']);

//notification
Route::any('/mark-as-read',[AdminController::class, 'markNotification'])->name('markNotification');

Route::get('/admin/userlist', [UserdetailController::class, 'index']);
Route::get('/admin/studentlist', [UserdetailController::class, 'studentlist']);
Route::get('/admin/teacherlist', [UserdetailController::class, 'teacherlist']);
Route::get('/admin/tutor-request', [UserdetailController::class, 'tutorrequest']);
Route::get('/admin/adminlist', [UserdetailController::class, 'adminlist']);
Route::get('admin/view-profile/{userid}', [UserdetailController::class, 'viewprofile']);
Route::get('admin/edit-profile/{userid}', [UserdetailController::class, 'editprofile']);

Route::get('admin/tutor-details/{userid}', [UserdetailController::class, 'tutordetails']);
Route::any('admin/update_user_profile', [UserdetailController::class, 'update_user_profile']);
Route::any('admin/change-user-status', [UserdetailController::class, 'status_update']);
Route::any('/admin/admin_apporove_profile', [UserdetailController::class, 'admin_apporove_profile']);

Route::any('admin/delete-user/{id}', [UserdetailController::class, 'delete_user']);
Route::any('admin/delete-student/{id}', [UserdetailController::class, 'delete_student']);
Route::any('admin/delete-teacher/{id}', [UserdetailController::class, 'delete_teacher']);
Route::any('admin/delete-admin/{id}', [UserdetailController::class, 'delete_admin']);

/*Ruchika Sharma*/
Route::any('/admin/add_content', [AdminController::class, 'add_content']);
Route::any('/admin/save_content', [AdminController::class, 'save_content']);


});

Route::get('/admin', [AdminController::class, 'login']);
Route::post('/check_login', [AdminController::class, 'check_login']);

Route::get('/forget-password', [AdminController::class, 'showForgetPasswordForm']);
Route::post('/reset-data', [AdminController::class, 'submitForgetPasswordForm']);
Route::get('/forget-pass-confi', [AdminController::class, 'forgetpassconfirm']);
Route::get('/forgetpassotp', [AdminController::class, 'forgetpassotp']);
Route::post('/forgetpassotpsubmit', [AdminController::class, 'forgetpassotpsubmit']);
Route::get('/new-password', [AdminController::class, 'newpassword']);
Route::post('/new-password2', [AdminController::class, 'newpassword2']);
Route::get('/reset-password-success', [AdminController::class, 'resetpasswordsuccess']);
