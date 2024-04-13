<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BasicuiController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\Auth1\MyAuthController;
use App\Enums\UserRoles;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ESTB\ESTBController;
use App\Http\Controllers\Teaching\TeachingController;
use App\Http\Controllers\NonTeaching\NonTeachingController;

use App\Http\Controllers\ESTB\DepartmentController;
use App\Http\Controllers\ESTB\QualificationController;


use App\Http\Controllers\ESTB\ReligionController;
use App\Http\Controllers\ESTB\CastecategoryController;
use App\Http\Controllers\ESTB\DesignationController;
use App\Http\Controllers\ESTB\AssociationController;
use App\Http\Controllers\ESTB\PayscaleController;
use App\Http\Controllers\ESTB\RenumerationheadsController;
use App\Http\Controllers\ESTB\NTpayscaleController;
use App\Http\Controllers\ESTB\NtcpayscaleController;
use App\Http\Controllers\ESTB\SalaryHeadsController;
use App\Http\Controllers\ESTB\TdsheadsController;
use App\Http\Controllers\ESTB\TeachingPayscaleController;
use App\Http\Controllers\ESTB\AllowancesController;
use App\Http\Controllers\ESTB\StaffController;
use App\Http\Controllers\ESTB\staff\StaffDesignationsController;
use App\Http\Controllers\ESTB\staff\StaffAssociationsController;
use App\Http\Controllers\ESTB\staff\StaffDepartmentController;
use App\Http\Controllers\ESTB\staff\QualificationStaffController;
use App\Http\Controllers\ESTB\staff\urlcontroller;
//filtering (searching controllers)
use App\Http\Controllers\ESTB\DesignationFilteringController;
use App\Http\Controllers\ESTB\DepartmentFilteringController;
use App\Http\Controllers\ESTB\QualificationFilteringController;
use App\Http\Controllers\ESTB\CasteCategoryFilteringController;
use App\Http\Controllers\ESTB\StaffFilteringController;
//Ajax Controllers
use App\Http\Controllers\ESTB\ajax\GetDesignationListController;
use App\Http\Controllers\ESTB\ajax\GetCasteCategoryListController; //for retrieving the specific caste category based on religion
use App\Http\Controllers\ESTB\ajax\CheckStaffEmailController;
use App\Http\Controllers\ESTB\ajax\GetTeachingPayscaleController;
use App\Http\Controllers\ESTB\ajax\GetNTPayscaleListController;
use App\Http\Controllers\ESTB\ajax\GetNTCPayscaleListController;
use App\Http\Controllers\ESTB\ajax\GetStaffPay_list;

// use App\Http\Controllers\Controller;

//leave related
use App\Http\Controllers\ESTB\LeaveRulesController;
use App\Http\Controllers\ESTB\LeaveController;
use App\Http\Controllers\ESTB\LeaveStaffEntitlementController;
use App\Http\Controllers\ESTB\HolidayrhController;

//teaching related leave
use App\Http\Controllers\Teaching\TeachingLeaveController;
use App\Http\Contollers\Teaching\TeachingHolidayRHController;

//professionalactivities related
use App\Http\Controllers\Teaching\ProfessionalActivityAttendeeController;
use App\Http\Controllers\Teaching\ProfessionalActivityConductedController;

//Reserach Activities related
use App\Http\Controllers\Teaching\ConferencesAttendeeController;
use App\Http\Controllers\Teaching\ResearchController;
use App\Http\Controllers\Teaching\ConferencesConductedController;

//publications related
use App\Http\Controllers\Teaching\PublicationController;

//books publication related
use App\Http\Controllers\Teaching\BookPublicationController;

//funds&consultancy
use App\Http\Controllers\Teaching\FundedProjectController;
use App\Http\Controllers\Teaching\ConsultancyController;

//general achivements
use App\Http\Controllers\Teaching\GeneralAchievementsController;

//patents
use App\Http\Controllers\Teaching\PatentController;

//copyright
use App\Http\Controllers\Teaching\CopyrightController;

//reviewer-editor
use App\Http\Controllers\Teaching\ReviewerEditorController;


//Non-teaching professional activity
use App\Http\Controllers\NonTeaching\NT_ProfessionalActivityAttendeeController;
use App\Http\Controllers\NonTeaching\NT_ProfessionalActivityConductedController;

//Deanrnd
use App\Http\Controllers\Deanrnd\DeanRndController;
use App\Http\Controllers\Deanrnd\DeanrndResearchController;

//Egovadmin
use App\Http\Controllers\egov\EgovAdminController;
use App\Http\Controllers\egov\EgovResearchController;
use App\Http\Controllers\egov\EgovUpdateValidationStatusController;

//HOD
use App\Http\Controllers\HOD\HodController;
use App\Http\Controllers\HOD\HodResearchController;
use App\Http\Controllers\HOD\HodEventController;
use App\Http\Controllers\HOD\HodNoticeboardController;
use App\Http\Controllers\HOD\GrievienceCategoryController;
use App\Http\Controllers\HOD\HODLeaveController;

//Ticketing
use App\Http\Controllers\Ticketing\TicketController;
use App\Http\Controllers\Ticketing\ReplyController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Admin\AdminTicketController;

//principal_office
use App\Http\Controllers\Principaloffice\PrincipalOfficeController;
//events
use App\Http\Controllers\EventController;
//notice board
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\LeaveStaffApplicationsController;

//grievience

use App\Http\Controllers\grievience\ExamOfficeController;



/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);
// Route::get('', [Controller::class, 'index']);
Route::middleware(['cors','auth','role:'.UserRoles::SU->value,'middleware' => 'prevent-back-history'])->group(function(){
    Route::get('/Admin/dashboard',[AdminController::class,'dashboard'])->name('Admin.dashboard');
    Route::get('/Admin/users',[AdminController::class,'users'])->name('Admin.users');

    Route::get('/Admin/tickets/dashboard',[AdminTicketController::class,'dashboard'])->name('Admin.tickets.dashboard');
  });
//Teaching staff related routes (teaching staff Logins)
Route::middleware(['cors','auth','role:'.UserRoles::TEACHING->value, 'prevent-back-history'])->group(function(){



  Route::get('/Teaching/dashboard',[TeachingController::class,'dashboard'])->name('Teaching.dashboard');
  Route::get('/Teaching/departments',[TeachingController::class,'departments'])->name('Teaching.departments');
  Route::get('/Teaching/associations',[TeachingController::class,'associations'])->name('Teaching.associations');
  Route::get('/Teaching/designations',[TeachingController::class,'designations'])->name('Teaching.designations');

  Route::get('/Teaching/construction',[TeachingController::class,'index'])->name('construction');

  //Route for Update the staff personal information
    Route::get('/Staff/Teaching/updateprofile/{staff}',[TeachingController::class,'update_staff_information'])->name('Staff.Teaching.updateprofile');
    Route::patch('/Staff/Teaching/updateprofile/{staff}',[TeachingController::class,'update'])->name('Staff.Teaching.update');


    //professional Activity  attended ssm
  Route::get('/Teaching/professionalactivities',[ProfessionalActivityAttendeeController::class,'index'])->name('Teaching.professionalactivities');
  Route::post('/Teaching/professionalactivities/attended/create',[ProfessionalActivityAttendeeController::class,'store'])->name('Teaching.professionalactivities.attended.store');
  Route::patch('/Teaching/professionalactivities/attended/update/{professional_activity_attendee}',[ProfessionalActivityAttendeeController::class,'update'])->name('Teaching.professionalactivities.attended.update');
  Route::delete('/Teaching/professionalactivities/attended/destory/{professional_activity_attendee}', [ProfessionalActivityAttendeeController::class, 'destroy'])->name('Teaching.professionalactivities.attended.destroy');




  //professional activity conducted ssm
  //Route::get('/Teaching/professionalactivities/conducted',[ProfessionalActivityConductedController::class,'index'])->name('Teaching.professionalactivities.conducted');
  Route::post('/Teaching/professionalactivities/conducted/create',[ProfessionalActivityConductedController::class,'store'])->name('Teaching.professionalactivities.conducted.store');
  Route::patch('/Teaching/professionalactivities/conducted/update/{professional_activity_conducted}',[ProfessionalActivityConductedController::class,'update'])->name('Teaching.professionalactivities.conducted.update');
  Route::delete('/Teaching/professionalactivities/conducted/destory/{professional_activity_conducted}', [ProfessionalActivityConductedController::class, 'destroy'])->name('Teaching.professionalactivities.conducted.destroy');



  //conferences attended related NEW
  Route::get('/Teaching/research/conferenceactivities',[ResearchController::class,'conferenceactivity'])->name('Teaching.research.conferenceactivities');
  Route::post('/Teaching/research/conferenceactivities/attended/create',[ConferencesAttendeeController::class,'store'])->name('Teaching.research.conferenceactivities.attended.store');
  Route::patch('/Teaching/research/conferenceactivities/attended/update/{conferences_attendee}',[ConferencesAttendeeController::class,'update'])->name('Teaching.research.conferenceactivities.attended.update');
  Route::delete('/Teaching/research/conferenceactivities/attended/destory/{conferences_attendee}', [ConferencesAttendeeController::class, 'destroy'])->name('Teaching.research.conferenceactivities.attended.destroy');

//conferences conducted NEW
Route::post('/Teaching/research/conferenceactivities/conducted/create',[ConferencesConductedController::class,'store'])->name('Teaching.research.conferenceactivities.conducted.store');
Route::patch('/Teaching/research/conferenceactivities/conducted/update/{conferences_conducted}',[ConferencesConductedController::class,'update'])->name('Teaching.research.conferenceactivities.conducted.update');
Route::delete('/Teaching/research/conferenceactivities/conducted/destory/{conferences_conducted}', [ConferencesConductedController::class, 'destroy'])->name('Teaching.research.conferenceactivities.conducted.destroy');



//publications related New
Route::get('/Teaching/research/publications',[ResearchController::class,'pub'])->name('Teaching.research.publications');
Route::post('/Teaching/research/publications/create',[PublicationController::class,'store'])->name('Teaching.research.publications.store');
Route::patch('/Teaching/research/publications/update/{publication}',[PublicationController::class,'update'])->name('Teaching.research.publications.update');
Route::delete('/Teaching/research/publications/destory/{publication}', [PublicationController::class, 'destroy'])->name('Teaching.research.publications.destroy');


//book publication New
Route::get('/Teaching/research/bookchapaters',[ResearchController::class,'bookchap'])->name('Teaching.research.bookchapaters');
Route::post('/Teaching/research/bookchapaters/create',[BookPublicationController::class,'store'])->name('Teaching.research.bookchapaters.store');
Route::patch('/Teaching/research/bookchapaters/update/{book_publication}',[BookPublicationController::class,'update'])->name('Teaching.research.bookchapaters.update');
Route::delete('/Teaching/research/bookchapaters/destory/{book_publication}', [BookPublicationController::class, 'destroy'])->name('Teaching.research.bookchapaters.destroy');



//funded project NEW
Route::get('/Teaching/research/fundingconsultancy',[ResearchController::class,'fund_consultancy'])->name('Teaching.research.fundingconsultancy');
Route::post('/Teaching/research/funding/create',[FundedProjectController::class,'store'])->name('Teaching.research.funding.store');
Route::patch('/Teaching/research/funding/update/{funded_project}',[FundedProjectController::class,'update'])->name('Teaching.research.funding.fund.update');
Route::delete('/Teaching/research/funding/destory/{funded_project}', [FundedProjectController::class, 'destroy'])->name('Teaching.research.funding.fund.destroy');



//consultancy new
Route::post('/Teaching/research/fundingconsultancy/consultancy/create',[ConsultancyController::class,'store'])->name('Teaching.research.consultancy.store');
Route::patch('/Teaching/research/fundingconsultancy/consultancy/update/{consultancy}',[ConsultancyController::class,'update'])->name('Teaching.research.consultancy.update');
Route::delete('/Teaching/research/fundingconsultancy/consultancy/destory/{consultancy}', [ConsultancyController::class, 'destroy'])->name('Teaching.research.consultancy.destroy');



//general achievement new
Route::get('/Teaching/research/achievement',[ResearchController::class,'general_achievement'])->name('Teaching.research.achievement');
Route::post('/Teaching/research/achievement/create',[GeneralAchievementsController::class,'store'])->name('Teaching.research.achievement.store');
Route::patch('/Teaching/research/achievement/update/{general_achievements}',[GeneralAchievementsController::class,'update'])->name('Teaching.research.achievement.update');
Route::delete('/Teaching/research/achievement/destory/{general_achievements}', [GeneralAchievementsController::class, 'destroy'])->name('Teaching.research.achievement.destroy');



//patents NEW
Route::get('/Teaching/research/patentcopyrights',[ResearchController::class,'patent_copyright'])->name('Teaching.research.patentcopyrights');
Route::post('/Teaching/research/patent/create',[PatentController::class,'store'])->name('Teaching.research.patent.store');
Route::patch('/Teaching/research/patent/update/{patent}',[PatentController::class,'update'])->name('Teaching.research.patent.update');
Route::delete('/Teaching/research/patent/destory/{patent}', [PatentController::class, 'destroy'])->name('Teaching.research.patent.destroy');



//copyright NEW
Route::post('/Teaching/research/copyright/create',[CopyrightController::class,'store'])->name('Teaching.research.copyright.store');
Route::patch('/Teaching/research/copyright/update/{copyright}',[CopyrightController::class,'update'])->name('Teaching.research.copyright.update');
Route::delete('/Teaching/research/copyright/destory/{copyright}', [CopyrightController::class, 'destroy'])->name('Teaching.research.copyright.destroy');



//review_editor new
Route::get('/Teaching/research/revieweditor',[ResearchController::class,'review_editor'])->name('Teaching.research.revieweditor');
Route::post('/Teaching/research/revieweditor/create',[ReviewerEditorController::class,'store'])->name('Teaching.research.revieweditor.store');
Route::patch('/Teaching/research/revieweditor/update/{reviewer_editor}',[ReviewerEditorController::class,'update'])->name('Teaching.research.revieweditor.update');
Route::delete('/Teaching/research/revieweditor/destory/{reviewer_editor}', [ReviewerEditorController::class, 'destroy'])->name('Teaching.research.revieweditor.destroy');



//Teaching Leave Rules Routes
Route::get('/Teaching/leaves',[LeaveStaffApplicationsController::class,'index'])->name('Teaching.leaves');
Route::get('/holidayrhevents',[LeaveStaffApplicationsController::class,'hollidayrh_events'])->name('hollidayrh_events');
Route::get('/myleaveevents',[LeaveStaffApplicationsController::class,'myleaveevents'])->name('myleaveevents');
Route::get('/checkhasleaveEvent',[LeaveStaffApplicationsController::class,'checkhasleaveEvent'])->name('checkhasleaveEvent');

//for fetching events of specific date (clicked) using AJAX
Route::get('/fetchholidayrhevents',[LeaveStaffApplicationsController::class,'fetchholidayrhevents'])->name('fetchholidayrhevents');
Route::get('/fetchmyleaveevents',[LeaveStaffApplicationsController::class,'fetchmyleaveevents'])->name('fetchmyleaveevents');
//Route::get('/Teaching/leavesentitlements',[TeachingLeaveController::class,'holidayrh'])->name('Teaching.leavesentitlements');
// Route::patch('/ESTB/leaves/leaves_rules/{leave_rules}',[LeaveRulesController::class,'update'])->name('ESTB.leaves.leave_rules.update');
// Route::delete('/ESTB/leaves/leaves_rules/{leave_rules}',[LeaveRulesController::class,'destroy'])->name('ESTB.leaves.leave_rules.destroy');

//Leave Application Management routes
Route::post('/Teaching/{staff}/leave/create',[LeaveStaffApplicationsController::class,'store'])->name('Teaching.leaves.apply');
Route::patch('/Teaching/{staff}/leave/{leave}/application/{leave_staff_applications}/update',[LeaveStaffApplicationsController::class,'update'])->name('Teaching.leave.leave_application.update');
Route::post('/Teaching/{staff}/validate_leave_appln',[LeaveStaffApplicationsController::class,'validateleave']);
});


//Non-Teaching staff related routes (Non-teaching staff Logins)
Route::middleware(['cors','auth','role:'.UserRoles::NONTEACHING->value, 'prevent-back-history'])->group(function(){
  Route::get('/Non-Teaching/dashboard',[NonTeachingController::class,'dashboard'])->name('Non-Teaching.dashboard');
  Route::get('/Non-Teaching/departments',[NonTeachingController::class,'departments'])->name('Non-Teaching.departments');
  Route::get('/Non-Teaching/designations',[NonTeachingController::class,'designations'])->name('Non-Teaching.designations');
  Route::get('/Non-Teaching/associations',[NonTeachingController::class,'associations'])->name('Non-Teaching.associations');


  //Route for Update the staff personal information
  Route::get('/Staff/Non-Teaching/ntupdateprofile/{staff}',[NonTeachingController::class,'update_staff_information'])->name('Staff.Non-Teaching.ntupdateprofile');
  Route::patch('/Staff/Non-Teaching/ntupdateprofile/{staff}',[NonTeachingController::class,'update'])->name('Staff.Non-Teaching.update');




  //change password
 // Route::get('/change_password', [NonTeachingController::class, 'changePassword'])->name('change_password');
  // Route::post('/change_password', [NonTeachingController::class, 'updatepassword'])->name('password.change');
  // Route::get('/checkcurrentpassword', [NonTeachingController::class, 'checkcurrentpassword'])->name('checkcurrentpassword');

  //professional activities attended and conducted
  Route::get('/Non-Teaching/professionalactivities',[NonTeachingController::class,'professional_activity_attendee'])->name('Non-Teaching.professionalactivities');
  Route::post('/Non-Teaching/professionalactivities/attended/create',[NT_ProfessionalActivityAttendeeController::class,'store'])->name('Non-Teaching.professionalactivities.attended.create');
  Route::patch('/Non-Teaching/professionalactivities/attended/update/{professional_activity_attendee}',[NT_ProfessionalActivityAttendeeController::class,'update'])->name('Non-Teaching.professionalactivities.attended.update');
  Route::delete('/Non-Teaching/professionalactivities/attended/destory/{professional_activity_attendee}', [NT_ProfessionalActivityAttendeeController::class, 'destroy'])->name('Non-Teaching.professionalactivities.attended.destroy');

  Route::post('/Non-Teaching/professionalactivities/conducted/create',[NT_ProfessionalActivityConductedController::class,'store'])->name('Non-Teaching.professionalactivities.conducted.store');
  Route::patch('/Non-Teaching/professionalactivities/conducted/update/{professional_activity_conducted}',[NT_ProfessionalActivityConductedController::class,'update'])->name('Non-Teaching.professionalactivities.conducted.update');
  Route::delete('/Non-Teaching/professionalactivities/conducted/destory/{professional_activity_conducted}', [NT_ProfessionalActivityConductedController::class, 'destroy'])->name('Non-Teaching.professionalactivities.conducted.destroy');

  Route::get('/Non-Teaching/construction',[NonTeachingController::class,'index'])->name('construction');
});

Route::middleware(['cors','auth','role:'.UserRoles::ESTB->value, 'prevent-back-history'])->group(function(){
    Route::resource('religion',ReligionController::class);
    Route::resource('religion.castecategory', CastecategoryController::class);
    Route::get('/ESTB/dashboard',[ESTBController::class,'dashboard'])->name('ESTB.dashboard');

    //departments controller
    Route::get('/ESTB/departments',[DepartmentController::class,'index'])->name('ESTB.departments.index');
    Route::post('/ESTB/departments/create',[DepartmentController::class,'store'])->name('ESTB.departments.store');
    Route::patch('/ESTB/departments/update/{department}',[DepartmentController::class,'update'])->name('ESTB.departments.update');
    Route::delete('/ESTB/departments/destory/{department}', [DepartmentController::class, 'destroy'])->name('ESTB.departments.destroy');

    //search sort and filter routes for department
    Route::get('/ESTB/departments/indexfiltering', [DepartmentFilteringController::class,'indexFiltering'])->name('ESTB.departments.indexfiltering');

    //Religion Controllers
    Route::get('/ESTB/religion',[ReligionController::class,'index'])->name('ESTB.religion');
    Route::post('/ESTB/religion/create',[ReligionController::class,'store'])->name('ESTB.religion.store');
    Route::patch('/ESTB/religion/update/{religion}',[ReligionController::class,'update'])->name('ESTB.religion.update');
    Route::delete('/ESTB/religion/destory/{religion}', [ReligionController::class, 'destroy'])->name('ESTB.religion.destroy');

    //CasteCategory Controllers
    Route::get('/ESTB/religion/{religion}/castecategory',[ReligionController::class,'show'])->name('ESTB.religion.castecategory');
    Route::post('/ESTB/religion/{religion}/castecategory/create',[CastecategoryController::class,'store'])->name('ESTB.religion.castecategory.store');
    Route::patch('/ESTB/religion/{religion}/castecategory/update/{castecategory}',[CastecategoryController::class,'update'])->name('ESTB.religion.castecategory.update');
    Route::delete('/ESTB/religion/{religion}/castecategory/destory/{castecategory}', [CastecategoryController::class, 'destroy'])->name('ESTB.religion.castecategory.destroy');

    //search route for caste categories.
    Route::get('/ESTB/castecategories/indexfiltering', [CasteCategoryFilteringController::class,'indexFiltering'])->name('ESTB.castecategories.indexfiltering');

    //Designations Controllers
    Route::get('/ESTB/designations',[DesignationController::class,'index'])->name('ESTB.designations');
    Route::post('/ESTB/designations/create',[DesignationController::class,'store'])->name('ESTB.designations.store');
    Route::patch('/ESTB/designations/update/{designation}',[DesignationController::class,'update'])->name('ESTB.designations.update');
    Route::delete('/ESTB/designations/destory/{designation}', [DesignationController::class, 'destroy'])->name('ESTB.designations.destroy');

    Route::get('/ESTB/designations/indexfiltering', [DesignationFilteringController::class,'indexFiltering'])->name('ESTB.designations.indexfiltering');
    //Route::get('/ESTB/designation-filtering',[DesignationController::class,'designationsDataSource']);



    //Assocations Controllers

    Route::get('/ESTB/associations',[AssociationController::class,'index'])->name('ESTB.associations');
    Route::post('/ESTB/associations/create',[AssociationController::class,'store'])->name('ESTB.associations.store');

    Route::patch('/ESTB/associations/update/{association}',[AssociationController::class,'update'])->name('ESTB.associations.update');
    Route::delete('/ESTB/associations/destory/{association}', [AssociationController::class, 'destroy'])->name('ESTB.associations.destroy');

    //Pay Scale Controllers (Non Teaching - KLS PAY Scale)
    Route::get('/ESTB/payscales/non_teaching',[NTpayscaleController::class,'index'])->name('ESTB.payscales.non_teaching');
    Route::post('/ESTB/payscales/non_teaching/create',[NTpayscaleController::class,'store'])->name('ESTB.payscales.non_teaching.store');
    Route::patch('/ESTB/payscales/non_teaching/update/{ntpayscale}',[NTpayscaleController::class,'update'])->name('ESTB.payscales.non_teaching.update');
    Route::delete('/ESTB/payscales/non_teaching/destory/{ntpayscale}', [NTpayscaleController::class, 'destroy'])->name('ESTB.payscales.non_teaching.destroy');
    Route::get('/ESTB/payscales/non_teaching/edit/{ntpayscale}',[NTpayscaleController::class,'edit'])->name('ESTB.payscales.non_teaching.edit');

    //Pay Scale Controllers (Non Teaching - Consolidated)
    //ESTB/payscales/non_teaching/update/8
    //Route::get('/ESTB/payscales/non_teaching_consolidated',[NTConsolidatedPayscaleController::class,'index'])->name('ESTB.payscales.non_teaching_consolidated');
    Route::post('/ESTB/payscales/non_teaching_consolidated/create',[NtcpayscaleController::class,'store'])->name('ESTB.payscales.non_teaching_consolidated.store');
    Route::patch('/ESTB/payscales/non_teaching_consolidated/update/{ntcpayscale}',[NtcpayscaleController::class,'update'])->name('ESTB.payscales.non_teaching_consolidated.update');
    Route::delete('/ESTB/payscales/non_teaching_consolidated/destory/{ntcpayscale}', [NtcpayscaleController::class, 'destroy'])->name('ESTB.payscales.non_teaching_consolidated.destroy');


    //Pay Scale Controllers (Teaching)
    Route::get('/ESTB/payscales/teaching',[TeachingPayscaleController::class,'index'])->name('ESTB.payscales.teaching');
    Route::post('/ESTB/payscales/teaching/create',[TeachingPayscaleController::class,'store'])->name('ESTB.payscales.teaching.store');
    Route::patch('/ESTB/payscales/teaching/update/{teaching_payscale}',[TeachingPayscaleController::class,'update'])->name('ESTB.payscales.teaching.update');
    Route::delete('/ESTB/payscales/teaching/destory/{teaching_payscale}',[TeachingPayscaleController::class,'destroy'])->name('ESTB.payscales.teaching.destory');


    //Additional allowance (teaching and non teaching)
    Route::get('/ESTB/payscales/allowances',[AllowancesController::class,'index'])->name('ESTB.payscales.allowances');
    Route::post('/ESTB/payscales/allowances/create',[AllowancesController::class,'store'])->name('ESTB.payscales.allowances.store');
    Route::patch('/ESTB/payscales/allowances/update/{allowances}',[AllowancesController::class,'update'])->name('ESTB.payscales.allowances.update');
    Route::delete('/ESTB/payscales/allowances/destory/{allowances}',[AllowancesController::class,'destroy'])->name('ESTB.payscales.allowances.destory');

    //Staff Routes
    Route::get('/ESTB/staff',[StaffController::class,'index'])->name('ESTB.staff');
    Route::post('/ESTB/staff/create',[StaffController::class,'store'])->name('ESTB.staff.store');
    Route::get('/ESTB/staff/show/{staff}',[StaffController::class,'show'])->name('ESTB.staff.show');
    Route::patch('/ESTB/staff/update/{staff}',[StaffController::class,'update'])->name('ESTB.staff.update');

    //Route to fetch staff data using Filter
    //Route::get('/ESTB/staff/staffinformation',[StaffController::class,'filterstaff_information'])->name('ESTB.staff.staffinformation');
    Route::get('/ESTB/staff/staffinformation',[StaffController::class,'filterstaff_information'])->name('staff.staffinformation');





    //route for staff searching , sorting and filtering
    Route::get('/ESTB/staff/indexfiltering', [StaffFilteringController::class,'indexFiltering'])->name('ESTB.staff.indexfiltering');

    /**************** */
    Route::get('/ESTB/staff/{staff}/qualifications',[urlcontroller::class,'qualifications'])->name('ESTB.staff.qualifications');
    Route::get('/ESTB/staff/{staff}/associations',[urlcontroller::class,'assocaitons'])->name('ESTB.staff.associations');
    Route::get('/ESTB/staff/{staff}/departments',[urlcontroller::class,'departments'])->name('ESTB.staff.departments');
    Route::get('/ESTB/staff/{staff}/designationpayscales',[urlcontroller::class,'designationpayscales'])->name('ESTB.staff.designationpayscales');
    /****************** */


    //updating designation of the staff.
    Route::patch('/ESTB/staff/designationpayscale/update/{staff}',[StaffDesignationsController::class,'update'])->name('ESTB.staff.designationpayscale.update');
    //updating association of the staff.
    Route::patch('ESTB/staff/association/update/{staff}',[StaffAssociationsController::class,'update'])->name('ESTB.staff.association.update');

    //Routes for additional designations
    Route::post('/ESTB/staff/{staff}/additionaldesignation/create',[StaffDesignationsController::class,'createadditionaldesign'])->name('ESTB.staff.additional_designation.create');
    Route::patch('/ESTB/staff/{staff}/additionaldesignation/update/{data}',[StaffDesignationsController::class,'update_additional_desig'])->name('ESTB.staff.additional_designation.update');
    Route::delete('/ESTB/staff/{staff}/additionaldesignation/destroy/{data}',[StaffDesignationsController::class,'destroy_additional_desig'])->name('ESTB.staff.additionaldesignation.destroy');

    //updating department of the staff.
    Route::patch('/ESTB/staff/department/update/{staff}',[StaffDepartmentController::class,'update'])->name('ESTB.staff.department.update');
    //Upating the correcting the department information of the staff
    Route::patch('/ESTB/staff/{staff}/department/corrections/{department}',[StaffDepartmentController::class,'updatecurrent'])->name('ESTB.staff.department.correction');
   //for deleting the staff department details when want to change the department with the condition being duration of the staff in that perticular department is within 1 month
    Route::delete('/ESTB/staff/{staff}/department/destroy/{department}',[StaffDepartmentController::class,'destroy'])->name('ESTB.staff.departments.destroy');

    //Upating the correcting the Association information of the staff
    Route::patch('/ESTB/staff/{staff}/association/corrections/{association}',[StaffAssociationsController::class,'updatecurrent'])->name('ESTB.staff.association.correction');
   //for deleting the staff association details when want to change the association with the condition being duration of the staff with that perticular association is within 1 month
   Route::delete('/ESTB/staff/{staff}/association/destroy/{association}',[StaffAssociationsController::class,'destroy'])->name('ESTB.staff.associations.destroy');


   //editing the currect designation of the staff
   Route::patch('/ESTB/staff/{staff}/designation/{designation}/update',[StaffDesignationsController::class,'editdesignation'])->name('ESTB.staff.designation.currentupdate');
   //for deleting the staff designation details
   Route::delete('ESTB/staff/{staff}/designation/{designation}/destroy',[StaffDesignationsController::class,'destorydesignation'])->name('ESTB.staff.designation.currentdestroy');
   //editing the current payscale of the staff
   Route::patch('/ESTB/staff/{staff}/payscale/{payscale}/update',[StaffDesignationsController::class,'editpayscale'])->name('ESTB.staff.payscale.update');
   //for deleting the staff payscale
   Route::delete('/ESTB/staff/{staff}/payscale/{payscale}/destory',[StaffDesignationsController::class,'destrorypayscale'])->name('ESTB.staff.payscale.destroy');
    // consolidated teaching pay staff
    Route::patch('/ESTB/staff/{staff}/consolidated_teaching_pay/{consolidated_teaching_pay}',[StaffDesignationsController::class,'update_teaching_consolidate_pay'])->name('ESTB.staff.consolidated_teaching_pay.update');
    Route::patch('/ESTB/staff/{staff}/fixed_nt_pay/{fixed_nt_pay}/update',[StaffDesignationsController::class,'fixed_nt_pay_edit'])->name('ESTB.staff.fixed_nt_pay.update');
    //ajax controlllers
    //for getting the caste category list according to the type of religion
    Route::get('/ESTB/staff/getcastecategory_list',[GetCasteCategoryListController::class,'getCasteCategoryList'])->name('ESTB.staff.getcastecategory_list');
    Route::get('/ESTB/staff/checkemailid',[CheckStaffEmailController::class,'checkEmailId'])->name('ESTB.staff.checkemailid');
    Route::get('/ESTB/staff/getdesignations_list',[GetDesignationListController::class,'getDesignationsList'])->name('ESTB.staff.getdesignations_list');
    // Route::get('/ESTB/staff/getTeachingpayscale_list',[GetTeachingPayscaleController::class,'getTeachingPayscaleList'])->name('ESTB.staff.getTeachingpayscale_list');
    // Route::get('/ESTB/staff/getNonTeachingKLSpayscale_list',[GetNTPayscaleListController::class,'getNTPayscaleList'])->name('ESTB.staff.getNonTeachingKLSpayscale_list');
    // Route::get('/ESTB/staff/getNTCpayscale_list',[GetNTCPayscaleListController::class,'getNTCPayscaleList'])->name('ESTB.staff.getNTCpayscale_list');
    Route::get('/ESTB/staff/getstaffpay_list',[GetStaffPay_list::class,'getstaffpays'])->name('ESTB.staff.getstaffpay.list');

    //leave routs
    //<1!-- Leave rules routes-->
    Route::get('/ESTB/leaves',[LeaveController::class,'index'])->name('ESTB.leaves.index');
    Route::post('/ESTB/leaves/create',[LeaveController::class,'store'])->name('ESTB.leaves.store');
    Route::patch('/ESTB/leaves/{leave}',[LeaveController::class,'update'])->name('ESTB.leaves.update');
    Route::delete('/ESTB/leaves/{leave}',[LeaveController::class,'destroy'])->name('ESTB.leaves.destroy');
    //Rules for each
    Route::get('/ESTB/leave/{leave}/leave_rules',[LeaveController::class,'show'])->name('ESTB.leave.leave_rules');
    Route::post('/ESTB/leave/{leave}/leave_rules/create',[LeaveRulesController::class,'store'])->name('ESTB.leave.leave_rules.store');
    Route::patch('/ESTB/leave/{leave}/leave_rules/{leave_rules}/update',[LeaveRulesController::class,'update'])->name('ESTB.leave.leave_rules.update');
    Route::delete('/ESTB/leave/{leave}/leave_rules/{leave_rules}/destory',[LeaveRulesController::class,'destroy'])->name('ESTB.leave.leave_rules.destroy');
    //leave entitlement
    Route::get('/ESTB/leaves/leave_entitlement',[LeaveStaffEntitlementController::class,'index'])->name('ESTB.leaves.leave_entitlement.index');
    Route::get('/ESTB/leaves/leave_entitlement/create',[LeaveStaffEntitlementController::class,'store'])->name('ESTB.leaves.leave_entitlement.store');
    //holiday and RH
    Route::get('/ESTB/leaves/holiday_rhlist',[HolidayrhController::class,'index'])->name('ESTB.leaves.holiday_rhlist.index');
    Route::post('/ESTB/leaves/holiday_rhlist/create',[HolidayrhController::class,'store'])->name('ESTB.leaves.holiday_rhlist.store');
    Route::patch('/ESTB/leaves/holiday_rhlist/{holidayrh}',[HolidayrhController::class,'update'])->name('ESTB.leaves.holiday_rhlist.update');
    Route::delete('/ESTB/leaves/holiday_rhlist/{holidayrh}',[HolidayrhController::class,'destroy'])->name('ESTB.leaves.holiday_rhlist.destroy');

  //leave calender
    Route::get('/ESTB/leaves_calender/',[LeaveController::class,'calender_view'])->name('ESTB.leaves.calender_view');
    Route::get('/ESTB/leaves_calender/hollidayrh_events',[LeaveController::class,'hollidayrh_events'])->name('ESTB.leaves.hollidayrh_events');
    Route::get('/ESTB/leaves_calender/fetchAllleaveevents',[LeaveController::class,'fetchAllleaveevents'])->name('ESTB.leaves.fetchAllleaveevents');

    // End of leave management related routes.

    //REnumerations Controllers
     Route::get('/ESTB/renumerations',[RenumerationheadsController::class,'index'])->name('ESTB.renumerations');
     Route::post('/ESTB/renumerations/create',[RenumerationheadsController::class,'store'])->name('ESTB.renumerations.store');
     Route::patch('/ESTB/renumerations/update/{renumeration}',[RenumerationheadsController::class,'update'])->name('ESTB.renumerations.update');
     Route::delete('/ESTB/renumerations/destory/{renumeration}', [RenumerationheadsController::class, 'destroy'])->name('ESTB.renumerations.destroy');

    //REnumerations Controllers
    Route::get('/ESTB/salaryheads',[SalaryHeadsController::class,'index'])->name('ESTB.salaryheads');
    Route::post('/ESTB/salaryheads/create',[SalaryHeadsController::class,'store'])->name('ESTB.salaryheads.store');
    Route::patch('/ESTB/salaryheads/update/{salaryhead}',[SalaryHeadsController::class,'update'])->name('ESTB.salaryheads.update');
    Route::delete('/ESTB/salaryheads/destory/{salaryhead}', [SalaryHeadsController::class, 'destroy'])->name('ESTB.salaryheads.destroy');

    //under construction
    Route::get('/ESTB/construction',[TdsheadsController::class,'index'])->name('construction');


     //qualifications controllers
    Route::get('/ESTB/qualifications',[QualificationController::class,'index'])->name('ESTB.qualification.index');
    Route::post('/ESTB/qualifications/create',[QualificationController::class,'store'])->name('ESTB.qualification.store');
    Route::patch('/ESTB/qualifications/update/{qualification}',[QualificationController::class,'update'])->name('ESTB.qualification.update');
    Route::delete('/ESTB/qualifications/destory/{qualification}', [QualificationController::class, 'destroy'])->name('ESTB.qualification.destroy');
    Route::get('/ESTB/qualifications/indexfiltering', [QualificationController::class,'indexFiltering'])->name('ESTB.qualification.indexfiltering');


    //updating qualification of the staff.
    Route::post('/ESTB/staff/{staff}/qualifications/create',[QualificationStaffController::class,'store'])->name('ESTB.staff.qualification.store');
    Route::patch('/ESTB/staff/{staff}/qualifications/update/{qualification}',[QualificationStaffController::class,'update'])->name('ESTB.staff.qualification.update');
   //for deleting the staff qualification details when want to change the qualification with the condition being duration of the staff in that perticular department is within 1 month
    Route::delete('/ESTB/staff/{staff}/qualification/destroy/{qualification}',[QualificationStaffController::class,'destroy'])->name('ESTB.staff.qualification.destroy');



    });

     //Dean rnd related all routes
     Route::middleware(['cors','auth','role:'.UserRoles::DEANRND->value])->group(function(){

      Route::get('/Deanrnd/dashboard',[DeanRndController::class,'dashboard'])->name('Deanrnd.dashboard');

     //Deanrnd Teaching professional activity
      Route::get('/Deanrnd/Teaching/activityattended',[DeanRndController::class,'professional_activity_attended_teaching'])->name('Deanrnd.Teaching.activityattended');
      Route::get('/Deanrnd/Teaching/activityconducted',[DeanRndController::class,'professional_activity_conducted_teaching'])->name('Deanrnd.Teaching.activityconducted');

     //Deanrndn Teaching Research Conference activity
      Route::get('/Deanrnd/Teaching/research/conferenceattended',[DeanrndResearchController::class,'conferences_attendee'])->name('Deanrnd.Teaching.research.conferenceattended');
      Route::get('/Deanrnd/Teaching/research/conferenceconducted',[DeanrndResearchController::class,'conferences_conducted'])->name('Deanrnd.Teaching.research.conferenceconducted');
      Route::get('/Deanrnd/Teaching/research/publication',[DeanrndResearchController::class,'publication'])->name('Deanrnd.Teaching.research.publication');
      Route::get('/Deanrnd/Teaching/research/fundedproject',[DeanrndResearchController::class,'funded_project'])->name('Deanrnd.Teaching.research.fundedproject');
      Route::get('/Deanrnd/Teaching/research/patents',[DeanrndResearchController::class,'patents'])->name('Deanrnd.Teaching.research.patents');
      Route::get('/Deanrnd/Teaching/research/copyrights',[DeanrndResearchController::class,'copyrights'])->name('Deanrnd.Teaching.research.copyrights');
      Route::get('/Deanrnd/Teaching/research/achivements',[DeanrndResearchController::class,'general_achievement'])->name('Deanrnd.Teaching.research.achivements');
      Route::get('/Deanrnd/Teaching/research/book_chapter',[DeanrndResearchController::class,'book_chapter'])->name('Deanrnd.Teaching.research.book_chapter');
      Route::get('/Deanrnd/Teaching/research/dean_consultancy',[DeanrndResearchController::class,'consultancy'])->name('Deanrnd.Teaching.research.dean_consultancy');
      Route::get('/Deanrnd/Teaching/research/reviewer_editor',[DeanrndResearchController::class,'reviewer_editor'])->name('Deanrnd.Teaching.research.reviewer_editor');




      //Deanrndn Non-Teaching professional activity
      Route::get('/Deanrnd/NonTeaching',[DeanRndController::class,'professional_activity_attendee_nt'])->name('Deanrnd.NonTeaching');
      Route::get('/Deanrnd/NonTeaching/conducted',[DeanRndController::class,'professional_activity_conducted_nt'])->name('Deanrnd.NonTeaching.conducted');

    });

    //egov admin related all routes
    Route::middleware(['cors','auth','role:'.UserRoles::EGOV_ADMIN->value])->group(function(){

      Route::get('/egov/dashboard',[EgovAdminController::class,'dashboard'])->name('egov.dashboard');

      //egov admin teaching professional activity
      Route::get('/egov/Teaching/activityattended',[EgovAdminController::class,'egov_professional_activity_attended_teaching'])->name('egov.Teaching.activityattended');






      //datefiltering
      Route::post('/egov/Teaching/filter-data', [EgovAdminController::class, 'filterTeachingActivityData'])->name('egov.Teaching.filter-data');

      Route::get('/egov/Teaching/activityconducted',[EgovAdminController::class,'egov_professional_activity_conducted_teaching'])->name('egov.Teaching.activityconducted');

      //egov admin Non-Teaching professional activity
      Route::get('/egov/NonTeaching/attended',[EgovAdminController::class,'egov_professional_activity_attendee_nt'])->name('egov.NonTeaching.attended');
      Route::get('/egov/NonTeaching/conducted',[EgovAdminController::class,'egov_professional_activity_conducted_nt'])->name('egov.NonTeaching.conducted');

      //egov admin Teaching Research Conference activity
       Route::get('/egov/Teaching/research/conferenceattended',[EgovResearchController::class,'egov_conferences_attendee'])->name('egov.Teaching.research.conferenceattended');
       Route::get('/egov/Teaching/research/conferenceconducted',[EgovResearchController::class,'egov_conferences_conducted'])->name('egov.Teaching.research.conferenceconducted');
       Route::get('/egov/Teaching/research/publication',[EgovResearchController::class,'egov_publication'])->name('egov.Teaching.research.publication');
       Route::get('/egov/Teaching/research/fundedproject',[EgovResearchController::class,'egov_funded_project'])->name('egov.Teaching.research.fundedproject');
       Route::get('/egov/Teaching/research/patents',[EgovResearchController::class,'egov_patents'])->name('egov.Teaching.research.patents');
       Route::get('/egov/Teaching/research/copyrights',[EgovResearchController::class,'egov_copyrights'])->name('egov.Teaching.research.copyrights');
       Route::get('/egov/Teaching/research/achivements',[EgovResearchController::class,'egov_general_achievement'])->name('egov.Teaching.research.achivements');
       Route::get('/egov/Teaching/research/reviewer_editor',[EgovResearchController::class,'egov_review_editor'])->name('egov.Teaching.research.reviewer_editor');
       Route::get('/egov/Teaching/research/book_chapter',[EgovResearchController::class,'egov_books_chapt'])->name('egov.Teaching.research.book_chapter');
       Route::get('/egov/Teaching/research/egov_consultancy',[EgovResearchController::class,'egov_consultancy'])->name('egov.Teaching.research.egov_consultancy');

       //route for  all validation status
       Route::patch('/egov/Teaching/research/reviewer_editor/{id}',[EgovUpdateValidationStatusController::class,'reviewer_editor'])->name('egov.Teaching.research.reviewer_editor.update');
       Route::patch('/egov/Teaching/research/achivements/{id}',[EgovUpdateValidationStatusController::class,'general_achievements'])->name('egov.Teaching.research.achivements.update');
       Route::patch('/egov/Teaching/research/copyrights/{id}',[EgovUpdateValidationStatusController::class,'copyrights'])->name('egov.Teaching.research.copyrights.update');
       Route::patch('/egov/Teaching/research/patents/{id}',[EgovUpdateValidationStatusController::class,'patents'])->name('egov.Teaching.research.patents.update');
       Route::patch('/egov/Teaching/research/fundedproject/{id}',[EgovUpdateValidationStatusController::class,'funded_project'])->name('egov.Teaching.research.fundedproject.update');
       Route::patch('/egov/Teaching/research/egov_consultancy/{id}',[EgovUpdateValidationStatusController::class,'consultancy'])->name('egov.Teaching.research.consultancy.update');
       Route::patch('/egov/Teaching/research/book_chapter/{id}',[EgovUpdateValidationStatusController::class,'books_chapt'])->name('egov.Teaching.research.book_chapter.update');
       Route::patch('/egov/Teaching/research/publication/{id}',[EgovUpdateValidationStatusController::class,'publications'])->name('egov.Teaching.research.publication.update');
       Route::patch('/egov/Teaching/research/conferenceattended/{id}',[EgovUpdateValidationStatusController::class,'conferences_attendee'])->name('egov.Teaching.research.conferenceattended.update');
       Route::patch('/egov/Teaching/research/conferenceconducted/{id}',[EgovUpdateValidationStatusController::class,'conferences_conducted'])->name('egov.Teaching.research.conferenceconducted.update');
       Route::patch('/egov/Teaching/activityattended/{id}',[EgovUpdateValidationStatusController::class,'professional_activity_attendee'])->name('egov.Teaching.activityattended.update');
       Route::patch('/egov/Teaching/activityconducted/{id}',[EgovUpdateValidationStatusController::class,'professional_activity_conducted'])->name('egov.Teaching.activityconducted.update');
      //Non Teaching
       Route::patch('/egov/NonTeaching/attended/{id}',[EgovUpdateValidationStatusController::class,'professional_activity_attendee_nt'])->name('egov.NonTeaching.attended.update');
       Route::patch('/egov/NonTeaching/conducted/{id}',[EgovUpdateValidationStatusController::class,'professional_activity_conducted_nt'])->name('egov.NonTeaching.conducted.update');


});

    //Hod related
  Route::middleware(['cors','auth','role:'.UserRoles::HOD->value])->group(function(){

    Route::get('/HOD/dashboard',[HodController::class,'dashboard'])->name('HOD.dashboard');
    Route::get('/HOD/department/overview',[HodController::class,'department_overview'])->name('HOD.department.overview');
    Route::get('/HOD/staff/stafflist',[HodController::class,'staff_details'])->name('HOD.staff.stafflist');

    Route::get('/HOD/staff/{staff}/view',[HodController::class,'staff_view'])->name('HOD.staff.view');

    //HOD teaching professional activity
    Route::get('/HOD/Teaching/hodactivityattended',[HodController::class,'hod_professional_activity_attended_teaching'])->name('HOD.Teaching.hodactivityattended');
    Route::get('/HOD/Teaching/hodactivityconducted',[HodController::class,'hod_professional_activity_conducted_teaching'])->name('HOD.Teaching.hodactivityconducted');

     //HOD  Non-Teaching professional activity
     Route::get('/HOD/NonTeaching/hodattended',[HodController::class,'hod_professional_activity_attendee_nt'])->name('HOD.NonTeaching.hodattended');
     Route::get('/HOD/NonTeaching/hodconducted',[HodController::class,'hod_professional_activity_conducted_nt'])->name('HOD.NonTeaching.hodconducted');

     //HOD Teaching Research Conference activity
     Route::get('/HOD/Teaching/research/hodconferenceattended',[HodResearchController::class,'hod_conferences_attendee'])->name('HOD.Teaching.research.hodconferenceattended');
     Route::get('/HOD/Teaching/research/hodconferenceconducted',[HodResearchController::class,'hod_conferences_conducted'])->name('HOD.Teaching.research.hodconferenceconducted');
     Route::get('/HOD/Teaching/research/hodpublication',[HodResearchController::class,'hod_publication'])->name('HOD.Teaching.research.hodpublication');
     Route::get('/HOD/Teaching/research/hodfundedproject',[HodResearchController::class,'hod_funded_project'])->name('HOD.Teaching.research.hodfundedproject');
     Route::get('/HOD/Teaching/research/hodpatents',[HodResearchController::class,'hod_patents'])->name('HOD.Teaching.research.hodpatents');
     Route::get('/HOD/Teaching/research/hodcopyrights',[HodResearchController::class,'hod_copyrights'])->name('HOD.Teaching.research.hodcopyrights');
     Route::get('/HOD/Teaching/research/hodachivements',[HodResearchController::class,'hod_general_achievement'])->name('HOD.Teaching.research.hodachivements');
     Route::get('/HOD/Teaching/research/hodbookchap',[HodResearchController::class,'hod_books_chapt'])->name('HOD.Teaching.research.hodbookchap');
     Route::get('/HOD/Teaching/research/hodconsultancy',[HodResearchController::class,'hod_consultancy'])->name('HOD.Teaching.research.hodconsultancy');
     Route::get('/HOD/Teaching/research/hodrevieweditor',[HodResearchController::class,'hod_review_editor'])->name('HOD.Teaching.research.hodrevieweditor');


     //Hod Leaves.
     Route::get('/HOD/leaves_management',[HODLeaveController::class,'index'])->name('HOD.leaves_management.index');
     Route::get('/HOD/leaves_management/hollidayrh_events',[HODLeaveController::class,'hollidayrh_events'])->name('HOD.leaves.hollidayrh_events');
     Route::get('/HOD/leaves_management/fetchDeptleaveevents',[HODLeaveController::class,'fetchDeptleaveevents'])->name('ESTB.leaves.fetchDeptleaveevents');
     Route::get('/HOD/leaves_management/fetchclikdayevents',[HODLeaveController::class,'fetchclikdayevents'])->name('ESTB.leaves.fetchclikdayevents');




     //Hod events
     Route::get('/HOD/event',[HodEventController::class,'index'])->name('HOD.event.index');
     Route::post('/HOD/event/create',[HodEventController::class,'store'])->name('HOD.event.store');
     Route::patch('/HOD/event/update/{event}',[HodEventController::class,'update'])->name('HOD.event.update');
     Route::delete('/HOD/event/destory/{event}', [HodEventController::class, 'destroy'])->name('HOD.event.destroy');

     //notice
     Route::get('/HOD/notice',[HodNoticeboardController::class,'index'])->name('HOD.notice.index');
     Route::post('/HOD/notice/create',[HodNoticeboardController::class,'store'])->name('HOD.notice.store');
     Route::patch('/HOD/notice/update/{notice}',[HodNoticeboardController::class,'update'])->name('HOD.notice.update');
     Route::delete('/HOD/notice/destory/{notice}', [HodNoticeboardController::class, 'destroy'])->name('HOD.notice.destroy');

     //HOD Ggrievance
     Route::get('/HOD/grievancecategory',[GrievienceCategoryController::class,'index'])->name('HOD.grievancecategory.index');
     Route::post('/HOD/grievancecategory/create',[GrievienceCategoryController::class,'store'])->name('HOD.grievancecategory.store');
     Route::patch('/HOD/grievancecategory/update/{grievience_category}',[GrievienceCategoryController::class,'update'])->name('HOD.grievancecategory.update');
     Route::delete('/HOD/grievancecategory/destory/{grievience_category}', [GrievienceCategoryController::class, 'destroy'])->name('HOD.grievancecategory.destroy');


  });

  Route::middleware(['cors','auth','role:'.UserRoles::PRINCIPAL_OFFICE->value])->group(function()
  {
    //principle office
    Route::get('/Principaloffice/podashboard',[PrincipalOfficeController::class,'dashboard'])->name('Principaloffice.podashboard');
    //events
    Route::get('/Principaloffice/poevents',[EventController::class,'index'])->name('Principaloffice.poevents.index');
    Route::post('/Principaloffice/poevents/create',[EventController::class,'store'])->name('Principaloffice.poevents.store');
    Route::patch('/Principaloffice/poevents/update/{event}',[EventController::class,'update'])->name('Principaloffice.poevents.update');
    Route::delete('/Principaloffice/poevents/destory/{event}', [EventController::class, 'destroy'])->name('Principaloffice.poevents.destroy');

    //notice board
    Route::get('/Principaloffice/ponotice',[NoticeController::class,'index'])->name('Principaloffice.ponotice.index');
    Route::post('/Principaloffice/ponotice/create',[NoticeController::class,'store'])->name('Principaloffice.ponotice.store');
    Route::patch('/Principaloffice/ponotice/update/{notice}',[NoticeController::class,'update'])->name('Principaloffice.ponotice.update');
    Route::delete('/Principaloffice/ponotice/destory/{notice}', [NoticeController::class, 'destroy'])->name('Principaloffice.ponotice.destroy');

  });

  //Examoffice
  // Route::middleware(['cors','auth','role:'.UserRoles::EXAM_SECTION->value, 'prevent-back-history'])->group(function(){
  //   Route::get('/Examoffice/dashboard',[ExamOfficeController::class,'dashboard'])->name('Examohoffice.dashboard');
  //   Route::get('/Examoffice/grievancecategory',[GrievienceCategoryController::class,'index'])->name('Examoffice.grievancecategory.index');
  //   Route::post('/Examoffice/grievancecategory/create',[GrievienceCategoryController::class,'store'])->name('Examoffice.grievancecategory.store');
  //   Route::patch('/Examoffice/grievancecategory/update/{grievience_category}',[GrievienceCategoryController::class,'update'])->name('Examoffice.grievancecategory.update');
  //   Route::delete('/Examoffice/grievancecategory/destory/{grievience_category}', [GrievienceCategoryController::class, 'destroy'])->name('Examoffice.grievancecategory.destroy');

  //   });

Route::get('dashboard', [MyAuthController::class, 'dashboard']);
Route::get('login', [MyAuthController::class, 'index'])->name('login');
Route::get('/', [MyAuthController::class, 'index'])->name('login');
Route::post('validate', [MyAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [MyAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [MyAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('/logout',[MyAuthController::Class,'signOut'])->name('logout');
//Route::get('signout', [MyAuthController::class, 'signOut'])->name('signout');



// change password
//Route::get('/change_password', [MyAuthController::class, 'changePassword'])->name('change_password');
Route::post('/change_password', [MyAuthController::class, 'updatepassword'])->name('password.change');
Route::get('/checkcurrentpassword', [MyAuthController::class, 'checkcurrentpassword'])->name('checkcurrentpassword');

Route::get('forgot_password', [MyAuthController::class, 'forgotPassword'])->name('forgot.password');
Route::post('/forgot_password', [MyAuthController::class, 'forgotPasswordupdate'])->name('forgot.password.update');
Route::get('reset/password/{token}', [MyAuthController::class, 'resetPassword'])->name('reset.password');
Route::post('reset/password', [MyAuthController::class, 'resetPasswordupdate'])->name('reset.password.update');



//Routes for ticketing system

Route::get('ticket/dashboard', [TicketController::class, 'index'])->name('ticket.dashboard');
Route::post('ticket/store', [TicketController::class, 'store'])->name('ticket.store');
Route::post('ticket/store', [TicketController::class, 'store'])->name('ticket.store');
Route::patch('ticket/update/{ticket}', [TicketController::class, 'update'])->name('ticket.update');
Route::delete('ticket/destroy/{ticket}',[TicketController::class, 'destroy'])->name('ticket.destroy');
Route::patch('ticket/update/avatar/{ticket}', [TicketController::class, 'update'])->name('ticket.update.avatar');
Route::get('ticket/show/{ticket}', [TicketController::class, 'show'])->name('ticket.show');
Route::post('ticket/{ticket}/reply/store', [ReplyController::class, 'store'])->name('ticket.reply.store');



//open new page for modal
//Route::post('ticket/reply', [Replyontroller::class, 'replyForm'])->name('Ticketing.replyticket');



//Routes for ticketing admin system
// Route::middleware(['cors','auth','role:'.UserRoles::SU->value])->group(function(){
//
// //Route::get('Admin/show/{ticket}', [AdminTicketController::class, 'show'])->name('ticket.show');
// //for redirecting to the super admin Dashboard.
//   Route::get('/Admin/dashboard',[AdminController::class,'dashboard'])->name('Admin.dashboard');
// });




/*Route::get('/', [DashboardsController::class, 'index']);
Route::get('index', [DashboardsController::class, 'index']);
Route::get('index2', [DashboardsController::class, 'index2']);
Route::get('index3', [DashboardsController::class, 'index3']);
Route::get('index4', [DashboardsController::class, 'index4']);
Route::get('index5', [DashboardsController::class, 'index5']);
Route::get('index6', [DashboardsController::class, 'index6']);
Route::get('index7', [DashboardsController::class, 'index7']);
Route::get('index8', [DashboardsController::class, 'index8']);
Route::get('index9', [DashboardsController::class, 'index9']);
Route::get('index10', [DashboardsController::class, 'index10']);
Route::get('index11', [DashboardsController::class, 'index11']);
Route::get('index12', [DashboardsController::class, 'index12']);

Route::get('rangeslider', [AdvanceduiController::class, 'rangeslider']);
Route::get('calendar', [AdvanceduiController::class, 'calendar']);
Route::get('carousel', [AdvanceduiController::class, 'carousel']);
Route::get('gallery', [AdvanceduiController::class, 'gallery']);
Route::get('sweetalert', [AdvanceduiController::class, 'sweetalert']);
Route::get('ratings', [AdvanceduiController::class, 'ratings']);
Route::get('draggable', [AdvanceduiController::class, 'draggable']);
Route::get('notifications', [AdvanceduiController::class, 'notifications']);
Route::get('treeview', [AdvanceduiController::class, 'treeview']);
Route::get('filemanager', [AdvanceduiController::class, 'filemanager']);
Route::get('filemanager-list', [AdvanceduiController::class, 'filemanager_list']);
Route::get('file-details', [AdvanceduiController::class, 'file_details']);

Route::get('signin', [AuthenticationController::class, 'signin']);
Route::get('signin-cover', [AuthenticationController::class, 'signin_cover']);
Route::get('signin-cover2', [AuthenticationController::class, 'signin_cover2']);
Route::get('signup', [AuthenticationController::class, 'signup']);
Route::get('signup-cover', [AuthenticationController::class, 'signup_cover']);
Route::get('signup-cover2', [AuthenticationController::class, 'signup_cover2']);
Route::get('createpassword', [AuthenticationController::class, 'createpassword']);
Route::get('createpassword-cover', [AuthenticationController::class, 'createpassword_cover']);
Route::get('createpassword-cover2', [AuthenticationController::class, 'createpassword_cover2']);
Route::get('forgot', [AuthenticationController::class, 'forgot']);
Route::get('forgot-cover', [AuthenticationController::class, 'forgot_cover']);
Route::get('forgot-cover2', [AuthenticationController::class, 'forgot_cover2']);
Route::get('reset', [AuthenticationController::class, 'reset']);
Route::get('reset-cover', [AuthenticationController::class, 'reset_cover']);
Route::get('reset-cover2', [AuthenticationController::class, 'reset_cover2']);
Route::get('lockscreen', [AuthenticationController::class, 'lockscreen']);
Route::get('lockscreen-cover', [AuthenticationController::class, 'lockscreen_cover']);
Route::get('lockscreen-cover2', [AuthenticationController::class, 'lockscreen_cover2']);
Route::get('verification', [AuthenticationController::class, 'verification']);
Route::get('verification-cover', [AuthenticationController::class, 'verification_cover']);
Route::get('verification-cover2', [AuthenticationController::class, 'verification_cover2']);
Route::get('maintenance', [AuthenticationController::class, 'maintenance']);
Route::get('construction', [AuthenticationController::class, 'construction']);
Route::get('comingsoon', [AuthenticationController::class, 'comingsoon']);
Route::get('error404', [AuthenticationController::class, 'error404']);
Route::get('error500', [AuthenticationController::class, 'error500']);


Route::get('dropdown', [BasicuiController::class, 'dropdown']);
Route::get('modal', [BasicuiController::class, 'modal']);
Route::get('offcanvas', [BasicuiController::class, 'offcanvas']);
Route::get('tooltip-popovers', [BasicuiController::class, 'tooltip_popovers']);
Route::get('tables', [BasicuiController::class, 'tables']);
Route::get('datatables', [BasicuiController::class, 'datatables']);
Route::get('edittable', [BasicuiController::class, 'edittable']);

Route::get('apex-charts', [ChartsController::class, 'apex_charts']);
Route::get('chartjs', [ChartsController::class, 'chartjs']);
Route::get('echartjs', [ChartsController::class, 'echartjs']);

Route::get('accordion', [ComponentsController::class, 'accordion']);
Route::get('alerts', [ComponentsController::class, 'alerts']);
Route::get('avatars', [ComponentsController::class, 'avatars']);
Route::get('badges', [ComponentsController::class, 'badges']);
Route::get('blockquotes', [ComponentsController::class, 'blockquotes']);
Route::get('buttons', [ComponentsController::class, 'buttons']);
Route::get('cards', [ComponentsController::class, 'cards']);
Route::get('collapse', [ComponentsController::class, 'collapse']);
Route::get('list-group', [ComponentsController::class, 'list_group']);
Route::get('list-page', [ComponentsController::class, 'list_page']);
Route::get('indicators', [ComponentsController::class, 'indicators']);
Route::get('progress', [ComponentsController::class, 'progress']);
Route::get('skeleton', [ComponentsController::class, 'skeleton']);
Route::get('spinners', [ComponentsController::class, 'spinners']);
Route::get('toast', [ComponentsController::class, 'toast']);

Route::get('navbar', [ElementsController::class, 'navbar']);
Route::get('mega-menu', [ElementsController::class, 'mega_menu']);
Route::get('tabs', [ElementsController::class, 'tabs']);
Route::get('scrollspy', [ElementsController::class, 'scrollspy']);
Route::get('breadcrumb', [ElementsController::class, 'breadcrumb']);
Route::get('pagination', [ElementsController::class, 'pagination']);
Route::get('grid', [ElementsController::class, 'grid']);
Route::get('columns', [ElementsController::class, 'columns']);

Route::get('form-elements', [FormsController::class, 'form_elements']);
Route::get('advanced-forms', [FormsController::class, 'advanced_forms']);
Route::get('form-inputgroup', [FormsController::class, 'form_inputgroup']);
Route::get('file-upload', [FormsController::class, 'file_upload']);
Route::get('form-checkbox', [FormsController::class, 'form_checkbox']);
Route::get('form-radio', [FormsController::class, 'form_radio']);
Route::get('form-switch', [FormsController::class, 'form_switch']);
Route::get('form-select', [FormsController::class, 'form_select']);
Route::get('form-layouts', [FormsController::class, 'form_layouts']);
Route::get('form-validations', [FormsController::class, 'form_validations']);
Route::get('quil-editor', [FormsController::class, 'quil_editor']);

Route::get('tabler-icons', [IconsController::class, 'tabler_icons']);
Route::get('remix-icons', [IconsController::class, 'remix_icons']);

Route::get('google-maps', [MapsController::class, 'google_maps']);
Route::get('leaflet-maps', [MapsController::class, 'leaflet_maps']);
Route::get('vector-maps', [MapsController::class, 'vector_maps']);

Route::get('profile', [PagesController::class, 'profile']);
Route::get('profile-settings', [PagesController::class, 'profile_settings']);
Route::get('invoice', [PagesController::class, 'invoice']);
Route::get('invoice-list', [PagesController::class, 'invoice_list']);
Route::get('blog', [PagesController::class, 'blog']);
Route::get('blog-details', [PagesController::class, 'blog_details']);
Route::get('blog-edit', [PagesController::class, 'blog_edit']);
Route::get('mail-inbox', [PagesController::class, 'mail_inbox']);
Route::get('chat', [PagesController::class, 'chat']);
Route::get('mail-settings', [PagesController::class, 'mail_settings']);
Route::get('products', [PagesController::class, 'products']);
Route::get('product-list', [PagesController::class, 'product_list']);
Route::get('add-product', [PagesController::class, 'add_product']);
Route::get('edit-product', [PagesController::class, 'edit_product']);
Route::get('products-details', [PagesController::class, 'products_details']);
Route::get('cart', [PagesController::class, 'cart']);
Route::get('checkout', [PagesController::class, 'checkout']);
Route::get('orders', [PagesController::class, 'orders']);
Route::get('order-details', [PagesController::class, 'order_details']);
Route::get('wishlist', [PagesController::class, 'wishlist']);
Route::get('about', [PagesController::class, 'about']);
Route::get('contacts', [PagesController::class, 'contacts']);
Route::get('pricing', [PagesController::class, 'pricing']);
Route::get('timeline', [PagesController::class, 'timeline']);
Route::get('teams', [PagesController::class, 'teams']);
Route::get('landing', [PagesController::class, 'landing']);
Route::get('todo', [PagesController::class, 'todo']);
Route::get('tasks', [PagesController::class, 'tasks']);
Route::get('reviews', [PagesController::class, 'reviews']);
Route::get('faqs', [PagesController::class, 'faqs']);
Route::get('contactus', [PagesController::class, 'contactus']);
Route::get('terms', [PagesController::class, 'terms']);
Route::get('empty-page', [PagesController::class, 'empty_page']);

Route::get('widgets', [WidgetsController::class, 'widgets']);*/
