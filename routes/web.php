<?php
use App\Http\Controllers\Admin\CoachController as AdminCoachController;
use App\Http\Controllers\Admin\PartnerController as AdminPartnerController;
use App\Http\Controllers\Admin\CoTrainController as AdminCoTrainController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\NumberController as AdminNumberController;
use App\Http\Controllers\Admin\ProgramController as AdminProgramController;
use App\Http\Controllers\Admin\AboutUsController as AdminAboutUsController;
use App\Http\Controllers\Admin\ActivityController as AdminActivityController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\DocumentsTypeController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DepartmentController;


use App\Http\Controllers\User\CoachController as UserCoachController;
use App\Http\Controllers\User\CoTrainController as UserCoTrainController;
use App\Http\Controllers\User\PartnerController as UserPartnerController;
use App\Http\Controllers\User\DepartmentController as UserDepartmentController;
use App\Http\Controllers\User\NewsController as UserNewsController;
use App\Http\Controllers\User\CourseController as UserCourseController;
use App\Http\Controllers\User\ProgramController as UserProgramController;
use App\Http\Controllers\User\NumberController as UserNumberController;
use App\Http\Controllers\User\ActivityController as ActivityController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\UserManagement\IdentifierController;

Route::get('program_attachment/{proID}',[AdminProgramController::class,'showImage']);
Route::get('/dashboard', function ()
{
  return view('home');
})->name('dashboard');

Auth::routes();
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('Allimage',[ContactController::class,'showAllImage']);

Route::get('/login', function () {
  return view('auth.login');
})->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
////////////////////////////////////////////////////ADMIN///////////////////////////////////////////////
Route::group([
  'prefix'=>'dashboard',
 // 'middleware'=>'auth|privateAdmin',
],function()
{

  Route::resource('/roles',          \UserManagement\RoleController::class);
  Route::resource('/users',          \UserManagement\UserController::class);
  Route::resource('/teamCards',       \UserManagement\TeamCardsController::class);
  
  Route::get('/contacts',[ContactController::class,'index'])->name('contacts.index');
  Route::get('/contact/edit',[ContactController::class,'edit'])->name('contacts.edit'); 
  Route::patch('/contacts/update',[ContactController::class,'update'])->name('contacts.update');  
  
  //media
  Route::get('/media',[MediaController::class,'index'])->name('media.index');
  Route::post('/addmedia',[MediaController::class,'store'])->name('media.store');
  Route::delete('/media/{id}',[MediaController::class,'destroy'])->name('media.destroy');
  Route::get('/images/{id}',[MediaController::class,'show'])->name('show.image');
  
  //aboutus//
  Route::get('/aboutus',[AdminAboutUsController::class,'index'])->name('aboutus.index');
  Route::get('/aboutus/edit',[AdminAboutUsController::class,'edit'])->name('aboutus.edit'); 
  Route::patch('/aboutus/update',[AdminAboutUsController::class,'update'])->name('aboutus.update');       //SHOW ALL DATA BUT SHOW IN WEBSITE JUST

  //cats//
  Route::resource('/cats',          \Admin\ProgramCatController::class);
  //programs//
  Route::delete('/program/{id}',[AdminProgramController::class,'destroy'])->name('program.destroy');
  Route::resource('/programs',       \Admin\ProgramController::class); //Create/store/edit/update/destroy
  //  programs active and disabled  in view disabled actived
  //Route::post('programs/update/{id}',     [AdminProgramController::class, 'update']);
  Route::delete('/activity/{id}',[AdminActivityController::class,'destroy'])->name('activity.destroy');
  Route::get('/ShowActPro',          [AdminProgramController::class, 'ShowActPro'])->name('ShowActPro');
  Route::get('/showDisPro',          [AdminProgramController::class, 'showDisPro'])->name('showDisPro');
  Route::get('/DisPro/{program}',              [AdminProgramController::class, 'DisPro'])->name('DisPro');
  Route::get('/ActPro/{program}',              [AdminProgramController::class, 'ActPro'])->name('ActPro');
  //activities// 
  Route::resource('/activities',       \Admin\ActivityController::class); //Create/store/edit/update/destroy
//get     /programs/{program}/edit    edit      programs.create
//put     /programs/{program}         update    programs.update
/*
  Route::get('activities',[AdminActivityController::class,'index'])->name('activities.index');
  Route::get('activities/create',[AdminActivityController::class,'create'])->name('activities.create');
  Route::post('activities/store',[AdminActivityController::class,'store'])->name('activities.store');
  Route::get('activities/{activity}/edit',[AdminActivityController::class,'edit'])->name('activities.edit');
  Route::put('activities/{activity}',[AdminActivityController::class,'update'])->name('activities.update');
  Route::post('activities/delete/{activity}',[AdminActivityController::class,'destroy'])->name('activities.destroy');
  */
  //coach//
  Route::resource('/coaches',      \Admin\CoachController::class);
  Route::get('coachesOrder',      [AdminCoachController::class,'CoachesOrder'])->name('Orders.coach');
  Route::get('proposal',      [AdminCoachController::class,'proposal']);
  Route::get('AcceptCoache/{id}',[AdminCoachController::class,'AcceptRequest'])->name('coaches.accept'); //id Coach
  //Route::post('RefuseCoache/{id}',[AdminCoachController::class,'RefuseRequest'])->name('coaches.destroy'); //id Coach
  Route::get('/downCV/{id}',         [AdminCoachController::class, 'downCV'])->name('down.CV');
  Route::get('/DetailsCoach/{id}',         [AdminCoachController::class, 'DetailsCoach'])->name('DetailsCoach');
  

 
  //Course//
  Route::resource('courses',        \Admin\CourseController::class);
  //Trainers//
  Route::get('trainersOrder/{id}', [AdminCoTrainController::class,'TrainerOrder']);  //id order
  Route::post('AcceptTrainer/{id}',[AdminCoTrainController::class,'AcceptRequest']);
  Route::get('RefuseTrain',        [AdminCoTrainController::class,'RefuseRequest']);
  Route::get('allTrainers',        [AdminCoTrainController::class,'index']); //show every course with his trainers
  //Partner//
 Route::resource('partners',       \Admin\PartnerController::class);  //index destroy
 //Route::get('partners/delete/{partner}',[AdminPartnerController::class,'index'])->name('partners.index');
  //Route::post('partners/{partner}'    ,[AdminPartnerController::class,'destroy'])->name('partners.destroy');
 // Route::get('/partners/orders',        [AdminPartnerController::class,'PartnersOrder'])->name('partners.orders');//take show 
 Route::get('/partnersOrder',        [AdminPartnerController::class,'PartnersOrder'])->name('partners.orders');
  Route::get('/acceptPartner/{id}',     [AdminPartnerController::class,'AcceptRequest'])->name('partners.accept');
  Route::get('/CoursesPartnerOrders',     [AdminPartnerController::class,'CoursesPartnerOrders']);
  Route::get('/ActCoPa/{id}',              [AdminPartnerController::class, 'AcceptCourse'])->name('ActCoPa');
  Route::get('/DisCoPa/{id}',              [AdminPartnerController::class, 'RefuseCourse'])->name('DisCoPa');

  Route::get('/PaDetails/{id}',              [AdminPartnerController::class, 'DetailsPartner'])->name('PaDetails');
  
  
  
  
  //Departments//
  Route::delete('/department/{id}',[DepartmentController::class,'destroy'])->name('department.destroy');
  Route::resource('/departments',     \Admin\DepartmentController::class);  
  //Document
  Route::resource('/documents',      \Admin\DocumentController::class);
  Route::post('/updatedoc/{id}',         [DocumentController::class, 'ShowActDoc'])->name('ShowActDoc');
  Route::get('/downFile/{id}',         [DocumentController::class, 'downFile'])->name('down.file');

 
  Route::get('/ShowActDoc',         [DocumentController::class, 'ShowActDoc'])->name('ShowActDoc');
  Route::get('/showDisDoc',         [DocumentController::class, 'showDisDoc'])->name('showDisDoc');
  Route::get('/DisDoc',             [DocumentController::class, 'DisDoc'])->name('DisDoc');
  Route::get('/ActDoc',             [DocumentController::class, 'ActDoc'])->name('ActDoc');
  //DocumentTypes
  Route::resource('/documentsType',  \Admin\DocumentsTypeController::class);
  //news//
  Route::resource('/news',           \Admin\NewsController::class);
  Route::patch('/updatenew/{id}',             [AdminNewsController::class, 'update'])->name('updatenews');

  //NUMBERS//
  Route::get('/numbers',            [AdminNumberController::class,'index']);
  
//IdentifiersController
  Route::get('identifiers',[IdentifierController::class,'index']);
  Route::post('identifiers',[IdentifierController::class,'store'])->name('identifiers.store');
  
  Route::patch('identifiers/{identifier}',[IdentifierController::class,'update'])->name('identifiers.update');
  Route::delete('identifiers/{identifier}',[IdentifierController::class,'destroy'])->name('identifiers.destroy');
});
////////////////////////////////////////////////////User///////////////////////////////////////////////
Route::group([
  //Auth
 // 'namespace'=>'User',
// 'prefix'=>'User',
],function()
{
  //train Course 
  Route::post('/sendrequestTrain/{CourseID}',[UserCoTrainController::class,'sendrequest']);
  Route::get('/MyTnCources',[UserCoTrainController::class,'MyTnCources']);

});
////////////////////////////////////////////////////guest///////////////////////////////////////////////
Route::group([
 // 'namespace'=>'User',
  //'prefix'=>'User',
],function()
{
  Route::get('/aboutus',                     [AboutUsController::class,'index']);
  //activities//
  Route::get('/activities',                  [ActivityController::class,'index'])->name('activities');
  Route::get('/activities/{activity}',       [ActivityController::class,'show']); 
    //coach//
  Route::get('/coaches',                     [UserCoachController::class,'index']);
  Route::get('/coaches/{coach}',             [UserCoachController::class,'show']);
  Route::get('/CoacheDetails',             [UserCoachController::class,'CoacheDetails']);
  //propos
  Route::post('/proposal',                   [UserCoachController::class,'proposal'])->name('proposal');

  Route::get('/requestCoach',                [UserCoachController::class,'request']);  //reques Coach
  Route::post('/sendrequestCoach',           [UserCoachController::class,'sendrequest'])->name('requestCoache');
  
  //Department//
  Route::get('/departments',                 [UserDepartmentController::class,'index']);
  Route::get('/departments/{department}',    [UserDepartmentController::class,'show']);

  //news
  Route::get('/allnews',                     [UserNewsController::class,'index']);
  Route::get('/news/{new}',                  [UserNewsController::class,'show']);

  //numbers
  Route::get('/numbers',                     [UserNumberController::class,'index']);
  
  //partner
  //Route::get('/requestPartner',              [UserPartnerController::class,'request']);  
  Route::post('/sendrequestPartner',         [UserPartnerController::class,'sendrequest'])->name('requestPartner');

  Route::get('/allpartners',                 [UserPartnerController::class,'index'])->name('partners.index');
  Route::get('/PartnerDetails',                 [UserPartnerController::class,'DetailsPartner']);
  Route::post('/requestCourse',                 [UserPartnerController::class,'requestCourse'])->name('requestCourse');
 

 //Courses
 //get information course 
 Route::get('allCourses',                   [UserCourseController::class,'index'])->name('courses');

 Route::get('Course/{course}',              [UserCourseController::class,'show']);
  

//program //
Route::get('/allprograms',                 [UserProgramController::class,'index'])->name('programs');
Route::get('/programs/{program}',          [UserProgramController::class,'show']);

Route::get('identifiers',[IdentifiersController::class,'index']);

});