
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

//use App\Http\Controllers\NotificationsController;

use App\Http\Controllers\Auth1\MyAuthController;
use App\Enums\UserRoles;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ESTB\ESTBController;
use App\Http\Controllers\Teaching\TeachingController;
use App\Http\Controllers\NonTeaching\NonTeachingController;

use App\Http\Controllers\ESTB\DepartmentController;
use App\Http\Controllers\ESTB\QualificationController;


//Dean_admin Related
use App\Http\Controllers\Dean_admin\DeanadminController;
use App\Http\Controllers\Dean_admin\StaffAssociationController;
use App\Http\Controllers\Dean_admin\staffDesignationController;

use App\Http\Controllers\ESTB\festivaladvanceController;
use App\Http\Controllers\ESTB\laptoploanController;
use App\Http\Controllers\ESTB\AnnualIncrementController;

//Principal Related
use App\Http\Controllers\PRINCIPAL\PrincipalController;
use App\Http\Controllers\PRINCIPAL\Pl_ExamSectionIssuesController;
use App\Http\Controllers\PRINCIPAL\Pl_IssueTimelineController;
use App\Http\Controllers\PRINCIPAL\PrincipalStudentIssueController;



use App\Http\Controllers\ESTB\StaffsalaryController;
use App\Http\Controllers\ESTB\ReligionController;
use App\Http\Controllers\ESTB\CastecategoryController;
use App\Http\Controllers\ESTB\DesignationController;
use App\Http\Controllers\ESTB\AssociationController;
use App\Http\Controllers\ESTB\PayscaleController;
use App\Http\Controllers\ESTB\RenumerationheadsController;
use App\Http\Controllers\ESTB\NTpayscaleController;
use App\Http\Controllers\ESTB\NtcpayscaleController;
use App\Http\Controllers\ESTB\SalaryHeadsController;
use App\Http\Controllers\ESTB\SalaryHeadController;
use App\Http\Controllers\ESTB\SalaryGroupController;
use App\Http\Controllers\ESTB\LicController;
//use App\Http\Controllers\ESTB\ShareController;
use App\Http\Controllers\ESTB\PayscaleSalaryHeadController;
use App\Http\Controllers\ESTB\TdsheadsController;
use App\Http\Controllers\ESTB\InvestmentCategoryController;
use App\Http\Controllers\ESTB\TaxSlabController;
use App\Http\Controllers\ESTB\TaxHeadsController;
use App\Http\Controllers\ESTB\StaffTaxRegimeController;
use App\Http\Controllers\ESTB\TeachingPayscaleController;
use App\Http\Controllers\ESTB\AllowancesController;
use App\Http\Controllers\ESTB\StaffController;
use App\Http\Controllers\ESTB\staff\StaffDesignationsController;
use App\Http\Controllers\ESTB\staff\StaffAssociationsController;
use App\Http\Controllers\ESTB\staff\StaffDepartmentController;
use App\Http\Controllers\ESTB\staff\QualificationStaffController;
use App\Http\Controllers\ESTB\staff\StaffLicController;
use App\Http\Controllers\ESTB\StafflicTransactionController;
use App\Http\Controllers\ESTB\staff\StaffShareController;
use App\Http\Controllers\ESTB\staff\StaffLoanController;
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


//statistic information
use App\Http\Controllers\ESTB\StatisticInformationController;



// use App\Http\Controllers\Controller;

//leave related
use App\Http\Controllers\ESTB\LeaveRulesController;
use App\Http\Controllers\ESTB\LeaveController;
use App\Http\Controllers\ESTB\LeaveStaffEntitlementController;
use App\Http\Controllers\ESTB\HolidayrhController;

//Grading related
use App\Http\Controllers\ESTB\GradeMappingController;
use App\Http\Controllers\ESTB\GradingStaffController;
use App\Http\Controllers\ESTB\AllowanceStaffController;

//generate Annual Increment list related

use App\Http\Controllers\ESTB\GenetareAnnualIncrementListController;
use App\Http\Controllers\ESTB\TeachingstaffannualincrementforboardController;
use App\Http\Controllers\ESTB\NonTeachingannualincrementforGcController;
use App\Http\Controllers\ESTB\NonteachingstaffannualincrementboardController;



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
use App\Http\Controllers\NonTeaching\NT_ExamSectionIssuesController;
use App\Http\Controllers\NonTeaching\NT_IssueTimelineController;
use App\Http\Controllers\NonTeaching\StaffStudentIssueController;

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
use App\Http\Controllers\HOD\ExamSectionIssuesController;
use App\Http\Controllers\HOD\IssueTimelineController;
use App\Http\Controllers\HOD\HodStudentIssueController;
                //internship in hod
use App\Http\Controllers\HOD\internship\hod_InternshipController;
use App\Http\Controllers\HOD\internship\hod_StudentController;
use App\Http\Controllers\HOD\internship\hod_IndustryController;
use App\Http\Controllers\HOD\internship\hod_SpocController;
use App\Http\Controllers\HOD\internship\hod_StudentinternshipController;
use App\Http\Controllers\HOD\internship\hod_StudentStudentinternshipController;
use App\Http\Controllers\HOD\internship\hod_InteractionController;


//Biometric
use App\Http\Controllers\ESTB\BiometricController;


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

//super_admin_events
use App\Http\Controllers\Admin\AdminEventController;

//super_admin notice
use App\Http\Controllers\Admin\AdminNoticeController;



//grievience

use App\Http\Controllers\grievience\ExamOfficeController;
use App\Http\Controllers\StudentIssueController;


                //internship
use App\Http\Controllers\internship\InternshipController;
use App\Http\Controllers\internship\StudentController;
use App\Http\Controllers\internship\IndustryController;
use App\Http\Controllers\internship\SpocController;
use App\Http\Controllers\internship\StudentinternshipController;
use App\Http\Controllers\internship\StudentStudentinternshipController;
use App\Http\Controllers\internship\InteractionController;



use App\Http\Controllers\MSSqlController;
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
Route::get('/biometric', function () {
    $biometric=DB::connection('mysql2')->table('devicelogs_4_2024')->get();
    dd($biometric);
});


Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);
// Route::get('', [Controller::class, 'index']);

Route::middleware(['cors','auth','role:'.(string) UserRoles::SU,'prevent-back-history'])->group(function(){
    Route::get('/Admin/dashboard',[AdminController::class,'dashboard'])->name('Admin.dashboard');
    Route::get('/Admin/users',[AdminController::class,'users'])->name('Admin.users');

    Route::get('/Admin/tickets/dashboard',[AdminTicketController::class,'dashboard'])->name('Admin.tickets.dashboard');
   

  Route::get('/Admin/tickets/adminticket',[AdminTicketController::class,'index'])->name('Admin.tickets.adminticket');
  Route::post('Admin/tickets/adminticket/create', [AdminTicketController::class, 'store'])->name('Admin.tickets.adminticket.store');
  Route::get('Admin/tickets/adminshowticket/show/{ticket}', [AdminTicketController::class, 'show'])->name('Admin.tickets.adminshowticket.show');
  // Route::patch('Admin/tickets/adminticket/update/{ticket}', [AdminTicketController::class, 'update'])->name('Admin.tickets.adminticket.update');
  // Route::delete('Admin/tickets/adminticket/destroy/{ticket}',[AdminTicketController::class, 'destroy'])->name('Admin.tickets.adminticket.destroy');
  // Route::patch('ticket/update/{postticket}', [ReplyController::class, 'update'])->name('ticket.reply.update');
  //Route::patch('Admin/tickets/adminticket/update/{ticket}', [AdminTicketController::class, 'status_update'])->name('Admin.tickets.adminticket.update');


  //super_admin events
  Route::get('/Admin/adminevents',[AdminEventController::class,'index'])->name('Admin.adminevents.index');
  Route::post('/Admin/adminevents/create',[AdminEventController::class,'store'])->name('Admin.adminevents.store');
  Route::patch('/Admin/adminevents/update/{event}',[AdminEventController::class,'update'])->name('Admin.adminevents.update');
  Route::delete('/Admin/adminevents/destory/{event}', [AdminEventController::class, 'destroy'])->name('Admin.adminevents.destroy');

  //super_admin notice board
  Route::get('/Admin/adminnotice',[AdminNoticeController::class,'index'])->name('Admin.adminnotice.index');
  Route::post('/Admin/adminnotice/create',[AdminNoticeController::class,'store'])->name('Admin.adminnotice.store');
  Route::patch('/Admin/adminnotice/update/{notice}',[AdminNoticeController::class,'update'])->name('Admin.adminnotice.update');
  Route::delete('/Admin/adminnotice/destory/{notice}', [AdminNoticeController::class, 'destroy'])->name('Admin.adminnotice.destroy');


  });



//Teaching staff related routes (teaching staff Logins)
Route::middleware(['cors','auth','role:'.(string) UserRoles::TEACHING, 'prevent-back-history'])->group(function(){



  Route::get('/Teaching/dashboard',[TeachingController::class,'dashboard'])->name('Teaching.dashboard');
  Route::get('/Teaching/departments',[TeachingController::class,'departments'])->name('Teaching.departments');
  Route::get('/Teaching/associations',[TeachingController::class,'associations'])->name('Teaching.associations');
  Route::get('/Teaching/designations',[TeachingController::class,'designations'])->name('Teaching.designations');

  //staff qualification routes
  Route::get('/Teaching/qualifications',[TeachingController::class,'qualifications'])->name('Teaching.qualifications');
  // Route::get('/Teaching/staff/{staff}/qualifications',[urlcontroller::class,'qualification'])->name('Teaching.qualifications');
   //updating qualification of the staff.
   Route::post('/Teaching/staff/qualifications/create/',[TeachingController::class,'store'])->name('Teaching.staff.qualification.store');
   Route::patch('/Teaching/staff/qualifications/update/{qualification}',[TeachingController::class,'update_qualification'])->name('Teaching.staff.qualification.update');
  //for deleting the staff qualification details when want to change the qualification with the condition being duration of the staff in that perticular department is within 1 month
   Route::delete('/Teaching/staff/qualification/destroy/{qualification}',[TeachingController::class,'destroy'])->name('Teaching.staff.qualification.destroy');



  Route::get('/Teaching/construction1',[TeachingController::class,'index'])->name('Teaching.construction1');

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



//Teaching Leave  Routes
Route::get('/Teaching/leaves',[LeaveStaffApplicationsController::class,'index'])->name('Teaching.leaves');
Route::get('/Teaching/holidayrhevents',[LeaveStaffApplicationsController::class,'hollidayrh_events']);
Route::get('/Teaching/myleaveevents',[LeaveStaffApplicationsController::class,'myleaveevents']);
Route::get('/Teaching/checkhasleaveEvent',[LeaveStaffApplicationsController::class,'checkhasleaveEvent']);
Route::get('/Teaching/checkanydeptpersononleave',[LeaveStaffApplicationsController::class,'checkanydeptpersononleave']);
Route::get('/Teaching/checkhasRH',[LeaveStaffApplicationsController::class,'checkhasRH']);


//for fetching events of specific date (clicked) using AJAX
Route::get('/Teaching/fetchholidayrhevents',[LeaveStaffApplicationsController::class,'fetchholidayrhevents']);
Route::get('/Teaching/fetchmyleaveevents',[LeaveStaffApplicationsController::class,'fetchmyleaveevents']);

Route::get('/Teaching/cancel_myleave',[LeaveStaffApplicationsController::class,'cancel_myleave']);
Route::get('/Teaching/edit_myleave',[LeaveStaffApplicationsController::class,'edit_myleave'])->name('Teaching.leaves.edit');
// Route::delete('/ESTB/leaves/leaves_rules/{leave_rules}',[LeaveRulesController::class,'destroy'])->name('ESTB.leaves.leave_rules.destroy');

//Leave Application Management routes
Route::post('/Teaching/{staff}/leave/create',[LeaveStaffApplicationsController::class,'store'])->name('Teaching.leaves.apply');
Route::patch('/Teaching/{staff}/leave/application/update',[LeaveStaffApplicationsController::class,'update'])->name('Teaching.leave_application.update');
Route::post('/Teaching/{staff}/validate_leave_appln',[LeaveStaffApplicationsController::class,'validateleave']);


 //Routes for internship tracking

 Route::get('/Teaching/internship/dashboard', [InternshipController::class, 'index'])->name('internship.dashboard');

 //Student table

Route::get('/Teaching/internship/student',[StudentController::class,'index'])->name('internship.student');


Route::post('/Teaching/internship/student',[StudentController::class, 'filter'])->name('internship.student.filter');



Route::post('/Teaching/internship/student/create', [StudentController::class, 'store'])->name('internship.student.store');
//Route::post('/Teaching/internship/student/{student}/show', [StudentController::class, 'show'])->name('internship.student.show');
Route::patch('/Teaching/internship/student/update/{student}', [StudentController::class, 'update'])->name('internship.student.update');
Route::delete('/Teaching/internship/student/destroy/{student}',[StudentController::class, 'destroy'])->name('internship.student.destroy');
Route::get('Teaching/internship/student/show/{student}', [StudentController::class, 'show'])->name('internship.student.interaction.show');



        //interaction table
Route::post('/Teaching/internship/student/{student}/interaction/create', [InteractionController::class, 'store'])->name('internship.student.interaction.store');
Route::patch('/Teaching/internship/student/{student}/interaction/update/{interaction}', [InteractionController::class, 'update'])->name('internship.student.interaction.update');
Route::get('Teaching/internship/file/download/{file}', [InteractionController::class, 'downloadFile'])->name('internship.file.download');





  //industry table
Route::get('Teaching/internship/industry',[IndustryController::class,'index'])->name('internship.industry');
Route::post('/Teaching/internship/industry/create', [IndustryController::class, 'store'])->name('internship.industry.store');
//Route::post('/Teaching/internship/industry/store', [IndustryController::class, 'show'])->name('internship.industry.show');
Route::patch('/Teaching/internship/industry/update/{industry}', [IndustryController::class, 'update'])->name('internship.industry.update');
Route::delete('/Teaching/internship/industry/destroy/{industry}',[IndustryController::class, 'destroy'])->name('internship.industry.destroy');
Route::get('/Teaching/internship/industry/show/{industry}', [IndustryController::class, 'show'])->name('internship.industry.show');

    //spoc table
Route::get('Teaching/internship/spoc',[SpocController::class,'index'])->name('internship.spoc');
Route::post('/Teaching/internship/spoc/create', [SpocController::class, 'store'])->name('internship.spoc.store');
//Route::post('/Teaching/internship/spoc/store', [SpocController::class, 'show'])->name('internship.spoc.show');
Route::patch('/Teaching/internship/spoc/update/{spoc}', [SpocController::class, 'update'])->name('internship.spoc.update');
Route::delete('/Teaching/internship/spoc/destroy/{spoc}',[SpocController::class, 'destroy'])->name('internship.spoc.destroy');
Route::get('/Teaching/internship/spoc/show/{spoc}', [SpocController::class, 'show'])->name('internship.spoc.show');

    //studentinternship table
Route::get('Teaching/internship/studentinternship',[StudentinternshipController::class,'index'])->name('internship.studentinternship');
Route::post('/Teaching/internship/studentinternship/create', [StudentinternshipController::class, 'store'])->name('internship.studentinternship.store');
//Route::post('/Teaching/internship/studentinternship/store', [StudentinternshipController::class, 'show'])->name('internship.studentinternship.show');
Route::patch('/Teaching/internship/studentinternship/update/{studentinternship}', [StudentinternshipController::class, 'update'])->name('internship.studentinternship.update');
Route::delete('/Teaching/internship/studentinternship/destroy/{studentinternship}',[StudentinternshipController::class, 'destroy'])->name('internship.studentinternship.destroy');
Route::get('/Teaching/internship/studentinternship/{studentinternship}/show', [StudentinternshipController::class, 'show'])->name('internship.showinternship.show');
//Route::get('/Teaching/internship/studentinternship/show/{studentinternship}', [StudentinternshipController::class, 'show'])->name('internship.studentinternship.show');

Route::get('/Teaching/internship/studentinternship/get-spocs/{industry_id}', [StudentinternshipController::class, 'getSpocs'])->name('get.spocs');

  //student_studentinternship table
Route::post('/Teaching/internship/{studentinternship}/student_studentinternship/create',[StudentStudentinternshipController::class,'store'])->name('internship.studentinternship.student_studentinternship.store');
Route::delete('/Teaching/internship/{studentinternship}/student_studentinternship/{student_studentinternship}/destroy',[StudentStudentinternshipController::class, 'destroy'])->name('internship.student_studentinternship.destroy');
//Route::post('/Teaching/internship/student_studentinternship/create', [StudentStudentinternshipController::class, 'store'])->name('internship.showinternship.store');
//Route::post('/Teaching/internship/studentinternship/{studentinternship}/student_studentinternship/store', [StudentStudentinternshipController::class, 'show'])->name('internship.showinternship.show');
//Route::patch('/Teaching/internship/studentinternship/update/{studentinternship}', [StudentinternshipController::class, 'update'])->name('internship.studentinternship.update');
//Route::delete('/Teaching/internship/studentinternship/destroy/{studentinternship}',[StudentinternshipController::class, 'destroy'])->name('internship.studentinternship.destroy');
//Route::get('/Teaching/internship/studentinternship/show/{studentinternship}', [StudentinternshipController::class, 'show'])->name('internship.studentinternship.show');



});


  //Non-Teaching staff related routes (Non-teaching staff Logins)
  Route::middleware(['cors','auth','role:'.(string) UserRoles::NONTEACHING, 'prevent-back-history'])->group(function(){
    Route::get('/Non-Teaching/dashboard',[NonTeachingController::class,'dashboard'])->name('Non-Teaching.dashboard');
    Route::get('/Non-Teaching/departments',[NonTeachingController::class,'departments'])->name('Non-Teaching.departments');
    Route::get('/Non-Teaching/designations',[NonTeachingController::class,'designations'])->name('Non-Teaching.designations');
    Route::get('/Non-Teaching/associations',[NonTeachingController::class,'associations'])->name('Non-Teaching.associations');

    //Route::post('/mark-all-read',[NonTeachingController::class,'markAllRead'])->name('mark-all-read');


    //staff qualification routes
    Route::get('/Non-Teaching/ntqualification',[NonTeachingController::class,'qualifications'])->name('Non-Teaching.ntqualification');
    // Route::get('/Non-Teaching/staff/{staff}/qualifications',[urlcontroller::class,'qualification'])->name('Teaching.qualifications');
    //updating qualification of the staff.
    Route::post('/Non-Teaching/staff/qualifications/create/',[NonTeachingController::class,'store'])->name('Non-Teaching.staff.qualification.store');
    Route::patch('/Non-Teaching/staff/qualifications/update/{qualification}',[NonTeachingController::class,'update_qualification'])->name('Non-Teaching.staff.qualification.update');
    Route::delete('/Non-Teaching/staff/qualification/destroy/{qualification}',[NonTeachingController::class,'destroy'])->name('Non-Teaching.staff.qualification.destroy');


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


    Route::get('/Staff/Non-Teaching/examsectionissues',[NT_ExamSectionIssuesController::class,'index'])->name('Staff.Non-Teaching.examsectionissues');
    Route::post('/Staff/Non-Teaching/examsectionissues/create',[NT_ExamSectionIssuesController::class,'store'])->name('Staff.Non-Teaching.examsectionissues.store');
    Route::patch('/Staff/Non-Teaching/examsectionissues/update/{examSectionIssues}',[NT_ExamSectionIssuesController::class,'update'])->name('Staff.Non-Teaching.examsectionissues.update');
    Route::delete('/Staff/Non-Teaching/examsectionissues/destory/{examSectionIssues}', [NT_ExamSectionIssuesController::class, 'destroy'])->name('Staff.Non-Teaching.examsectionissues.destroy');

    Route::get('/Staff/Non-Teaching/issue_timeline',[NT_IssueTimelineController::class,'index'])->name('Staff.Non-Teaching.issue_timeline.index');
    Route::post('/Staff/Non-Teaching/{staff}/viewstudentissues/{student_issue}/issue_timeline/create',[NT_IssueTimelineController::class,'store'])->name('Staff.Non-Teaching.issue_timeline.store');
    Route::get('/Staff/Non-Teaching/viewstudentissues', [StaffStudentIssueController::class, 'index'])->name('Staff.Non-Teaching.view');
    Route::get('/Staff/Non-Teaching/{staff}/viewstudentissues/{student_issue}/show',[StaffStudentIssueController::class,'show'])->name('Staff.Non-Teaching.issue_timeline.show');

   


    //Non-Teaching Leave  Routes
    Route::get('/Non-Teaching/ntleaves',[LeaveStaffApplicationsController::class,'nt_leaves_index'])->name('Non-Teaching.ntleaves');
    Route::get('/Non-Teaching/nt_leave_hollidayrh_events',[LeaveStaffApplicationsController::class,'nt_leave_hollidayrh_events']);
    Route::get('/Non-Teaching/nt_leave_myleaveevents',[LeaveStaffApplicationsController::class,'nt_leave_myleaveevents']);
    Route::get('/Non-Teaching/nt_leave_checkhasleaveEvent',[LeaveStaffApplicationsController::class,'nt_leave_checkhasleaveEvent']);
    Route::get('/Non-Teaching/nt_leave_checkanydeptpersononleave',[LeaveStaffApplicationsController::class,'nt_leave_checkanydeptpersononleave']);
    Route::get('/Non-Teaching/nt_leave_checkhasRH',[LeaveStaffApplicationsController::class,'nt_leave_checkhasRH']);
    
    
    //for fetching events of specific date (clicked) using AJAX
    Route::get('/Non-Teaching/nt_leave_fetchholidayrhevents',[LeaveStaffApplicationsController::class,'nt_leave_fetchholidayrhevents']);
    Route::get('/Non-Teaching/nt_leave_fetchmyleaveevents',[LeaveStaffApplicationsController::class,'nt_leave_fetchmyleaveevents']);
    
    Route::get('/Non-Teaching/nt_leave_cancel_myleave',[LeaveStaffApplicationsController::class,'nt_leave_cancel_myleave']);
    Route::get('/Non-Teaching/nt_leave_edit_myleave',[LeaveStaffApplicationsController::class,'nt_leave_edit_myleave'])->name('Non-Teaching.leaves.edit');
    // Route::delete('/ESTB/leaves/leaves_rules/{leave_rules}',[LeaveRulesController::class,'destroy'])->name('ESTB.leaves.leave_rules.destroy');
    
    //Leave Application Management routes
    Route::post('/Non-Teaching/{staff}/leave/create',[LeaveStaffApplicationsController::class,'nt_leave_store'])->name('Non-Teaching.leaves.apply');
    Route::patch('/Non-Teaching/{staff}/leave/application/update',[LeaveStaffApplicationsController::class,'nt_leave_update'])->name('Non-Teaching.leave_application.update');
    Route::post('/Non-Teaching/{staff}/validate_leave_appln',[LeaveStaffApplicationsController::class,'nt_leave_validateleave']);

    
    //Route::get('/Non-Teaching/notifications',[NotificationsController::class,'notification_index'])->name('Non-Teaching.notifications');
    //Route::post('/Non-Teaching/notifications/create',[NotificationsController::class,'store'])->name('Non-Teaching.notification.store');
    // Route::patch('/Non-Teaching/notifications/update/{notification}',[NotificationsController::class,'update'])->name('Non-Teaching.notification.update');
    // Route::delete('/Non-Teaching/notifications/destory/{notification}', [NotificationsController::class, 'destroy'])->name('Non-Teaching.notification.destroy');




  });

  Route::middleware(['cors','auth','role:'.(string) UserRoles::ESTB, 'prevent-back-history'])->group(function(){
      Route::resource('religion',ReligionController::class);
      Route::resource('religion.castecategory', CastecategoryController::class);
      Route::get('/ESTB/dashboard',[ESTBController::class,'dashboard'])->name('ESTB.dashboard');


      //biometric
      Route::get('/ESTB/Biometric/Biometric_data', [BiometricController::class, 'biometric_data'])->name('ESTB.Biometric.Biometric_data');
      Route::post('/ESTB/Biometric/Biometric_data', [BiometricController::class, 'biometric_data'])->name('biometric_data');
      Route::get('/ESTB/Biometric/missing_logs', [BiometricController::class, 'missingLogEntries'])->name('biometric.missing_logs');
      Route::post('/send-missing-punches-email', [BiometricController::class, 'sendMissingPunchesEmail'])->name('send.missing.punches.email');
      Route::get('/ESTB/Biometric/monthly', [BiometricController::class, 'filterEmployeeMonthlyLogs'])->name('biometric.monthly');
     

      //departments controller
      Route::get('/ESTB/departments',[DepartmentController::class,'index'])->name('ESTB.departments.index');
      Route::post('/ESTB/departments/create',[DepartmentController::class,'store'])->name('ESTB.departments.store');
      Route::patch('/ESTB/departments/update/{department}',[DepartmentController::class,'update'])->name('ESTB.departments.update');
      Route::delete('/ESTB/departments/destory/{department}', [DepartmentController::class, 'destroy'])->name('ESTB.departments.destroy');

      //annual increment controller
      //Route::get('/ESTB/FestivalAdvance',[festivaladvanceController::class,'index'])->name('ESTB.festivaladvance.index');
      Route::post('/ESTB/staff/{staff}/annualincrement/create',[AnnualIncrementController::class,'store'])->name('ESTB.staff.annualincrement.store');
      Route::patch('/ESTB/staff/{staff}/annualincrement/{annual_increment}/update',[AnnualIncrementController::class,'update'])->name('ESTB.annualincrement.update');
      Route::delete('/ESTB/staff/{staff}/annualincrement/{annual_increment}/destroy',[AnnualIncrementController::class, 'destroy'])->name('ESTB.annualincrement.destroy');



      //festival advance controller
      //Route::get('/ESTB/FestivalAdvance',[festivaladvanceController::class,'index'])->name('ESTB.festivaladvance.index');
      Route::post('/ESTB/staff/{staff}/festival_advances/create',[festivaladvanceController::class,'store'])->name('ESTB.staff.festivaladvance.store');
      Route::patch('/ESTB/staff/{staff}/festival_advances/{festival_advance}/update',[festivaladvanceController::class,'update'])->name('ESTB.festivaladvance.update');
      Route::delete('/ESTB/staff/{staff}/festival_advances/{festival_advance}/destroy',[festivaladvanceController::class, 'destroy'])->name('ESTB.festivaladvance.destroy');

      //laptoploan controller
      Route::post('/ESTB/staff/{staff}/laptoploans/create',[laptoploanController::class,'store'])->name('ESTB.staff.laptoploan.store');
      Route::patch('/ESTB/staff/{staff}/laptoploan/{laptoploan}/update',[laptoploanController::class,'update'])->name('ESTB.laptoploan.update');
      Route::delete('/ESTB/staff/{staff}/laptoploan/{laptoploan}/destroy',[laptoploanController::class, 'destroy'])->name('ESTB.laptoploan.destroy');




      //search sort and filter routes for department{{  }}
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

      // Grading routes
      Route::get('/ESTB/autonomous_allowance',[AllowanceStaffController::class,'index'])->name('ESTB.autonomous_allowance');
      Route::post('/ESTB/autonomous_allowance',[AllowanceStaffController::class,'create'])->name('ESTB.autonomous_allowance.create');
      Route::post('/ESTB/autonomous_allowance/create', [AllowanceStaffController::class, 'store'])->name('ESTB.autonomous_allowance.import');
      Route::patch('/ESTB/autonomous_allowance/{autonomous_allowance}/update',[AllowanceStaffController::class,'update'])->name('grading.staff.update');
      
      // Generate annual increment list controller for teaching staff for GC
      Route::get('/ESTB/salaries/GenerateAnnualIncrement/GC/Teaching', [GenetareAnnualIncrementListController::class, 'index'])->name('aanualincrement.staff.index');
      Route::post('/ESTB/salaries/GenerateAnnualIncrement/GC/Teaching/create',[GenetareAnnualIncrementListController::class,'create'])->name('ESTB.annualincrement.create');
      Route::post('/import-excel', [GenetareAnnualIncrementListController::class, 'importExcel'])->name('import.excel');

      // Generate annual increment list controller for teaching staff for Board
      Route::get('/ESTB/salaries/GenerateAnnualIncrement/Board/Teaching', [TeachingstaffannualincrementforboardController::class, 'index'])->name('staff.board.index');
      Route::post('/ESTB/salaries/GenerateAnnualIncrement/Board/Teaching/create',[TeachingstaffannualincrementforboardController::class,'create'])->name('ESTB.annualincrementboard.create');
     //Generate annual increment list controller for  Non Teaching staff for Gc
      Route::get('/ESTB/salaries/GenerateAnnualIncrement/GC/Nonteaching', [NonTeachingannualincrementforGcController::class, 'index'])->name('staff.nonteaching.index');

     //Generate annual increment list controller for  Non Teaching staff for Board
      
     Route::get('/ESTB/salaries/GenerateAnnualIncrement/Board/Nonteaching',[NonteachingstaffannualincrementboardController::class, 'index'])->name('staff.nonteachingboard.index');
     
    // Assocations Controllers

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
      Route::post('/ESTB/payscales/teaching/{teaching_payscale}/show',[TeachingPayscaleController::class,'show'])->name('ESTB.payscales.teaching.show');
      Route::patch('/ESTB/payscales/teaching/update/{teaching_payscale}',[TeachingPayscaleController::class,'update'])->name('ESTB.payscales.teaching.update');
      Route::delete('/ESTB/payscales/teaching/destory/{teaching_payscale}',[TeachingPayscaleController::class,'destroy'])->name('ESTB.payscales.teaching.destory');


      //Additional allowance (teaching and non teaching)
      Route::get('/ESTB/payscales/allowances',[AllowancesController::class,'index'])->name('ESTB.payscales.allowances');
      Route::post('/ESTB/payscales/allowances/create',[AllowancesController::class,'store'])->name('ESTB.payscales.allowances.store');
      Route::patch('/ESTB/payscales/allowances/update/{allowances}',[AllowancesController::class,'update'])->name('ESTB.payscales.allowances.update');
      Route::delete('/ESTB/payscales/allowances/destory/{allowances}',[AllowancesController::class,'destroy'])->name('ESTB.payscales.allowances.destroy');


      //staffpayscale
      Route::get('/ESTB/salaries/staffpayscale', [StaffsalaryController::class, 'index'])->name('ESTB.salaries.staffpayscale');

      Route::post('/ESTB/salaries/staffpayscale/create', [StaffsalaryController::class, 'store'])->name('ESTB.salaries.staffpayscale.store');



      //Staff Routes
      Route::get('/ESTB/staff',[StaffController::class,'index'])->name('ESTB.staff');

      //Route to fetch staff data using Filter
      Route::get('/ESTB/staff/staffinformation',[StaffController::class,'staff_data_filter'])->name('ESTB.staff.staffdata');


      Route::post('/ESTB/staff/create',[StaffController::class,'store'])->name('ESTB.staff.store');
      Route::get('/ESTB/staff/show/{staff}',[StaffController::class,'show'])->name('ESTB.staff.show');
      Route::patch('/ESTB/staff/update/{staff}',[StaffController::class,'update'])->name('ESTB.staff.update');

      //Route to fetch staff data using Filter
      Route::get('/ESTB/staff/staffinformation',[StaffController::class,'filterstaff_information'])->name('ESTB.staff.staffinformation');

      //route for staff searching , sorting and filtering
      Route::get('/ESTB/staff/indexfiltering', [StaffFilteringController::class,'indexFiltering'])->name('ESTB.staff.indexfiltering');

      //route to generate statistics filter

      Route::get('/ESTB/staff/generatestatistics',[StatisticInformationController::class,'statistic_information'])->name('ESTB.staff.generatestatistics');
    // Route::get('/ESTB/staff/generatestatistics', [StatisticInformationController::class, 'filter_information'])->name('ESTB.staff.generatestatistics.filter');




      /**************** */
      Route::get('/ESTB/staff/{staff}/qualifications',[urlcontroller::class,'qualifications'])->name('ESTB.staff.qualifications');

      //ESTB Staff Leave entilement
      Route::get('/ESTB/staff/{staff}/leave_entitlement',[urlcontroller::class,'leave_entitlement'])->name('ESTB.staff.staff_leave');
      //Route::get('/ESTB/staff/{staff}/fetch_leave_history',[urlcontroller::class,'fetch_leave_history'])->name('ESTB.staff.staffleave');
      
      Route::get('/ESTB/staff/{staff}/associations',[urlcontroller::class,'assocaitons'])->name('ESTB.staff.associations');
      Route::get('/ESTB/staff/{staff}/departments',[urlcontroller::class,'departments'])->name('ESTB.staff.departments');
      Route::get('/ESTB/staff/{staff}/designationpayscales',[urlcontroller::class,'designationpayscales'])->name('ESTB.staff.designationpayscales');
      Route::get('/ESTB/staff/{staff}/festivaladvance',[urlcontroller::class,'festival_advance'])->name('ESTB.staff.festival_advance');
      Route::get('/ESTB/staff/{staff}/laptoploan',[urlcontroller::class,'laptoploan'])->name('ESTB.staff.laptoploan');
      Route::get('/ESTB/staff/{staff}/annualincrement',[urlcontroller::class,'annual_increment'])->name('ESTB.staff.annualIncrement');
      Route::get('/ESTB/staff/{staff}/stafflics',[urlcontroller::class,'stafflics'])->name('ESTB.staff.stafflics');
      Route::get('/ESTB/staff/{staff}/staffshares',[urlcontroller::class,'staffshares'])->name('ESTB.staff.staffshares');
      Route::get('/ESTB/staff/{staff}/staffloans',[urlcontroller::class,'staffloans'])->name('ESTB.staff.staffloans');
      Route::get('/ESTB/staff/{staff}/stafftaxregime',[urlcontroller::class,'stafftaxregime'])->name('ESTB.staff.stafftaxregime');
    

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

      //To get full designation list
      Route::get('/ESTB/staff/getdesignations_list',[GetDesignationListController::class,'getfullDesignationsList'])->name('ESTB.staff.getdesignations_list');

      // Route::get('/ESTB/staff/getTeachingpayscale_list',[GetTeachingPayscaleController::class,'getTeachingPayscaleList'])->name('ESTB.staff.getTeachingpayscale_list');
      // Route::get('/ESTB/staff/getNonTeachingKLSpayscale_list',[GetNTPayscaleListController::class,'getNTPayscaleList'])->name('ESTB.staff.getNonTeachingKLSpayscale_list');
      // Route::get('/ESTB/staff/getNTCpayscale_list',[GetNTCPayscaleListController::class,'getNTCPayscaleList'])->name('ESTB.staff.getNTCpayscale_list');
      Route::get('/ESTB/staff/getstaffpay_list',[GetStaffPay_list::class,'getstaffpays'])->name('ESTB.staff.getstaffpay.list');

      //staff LIC Controller
      Route::post('/ESTB/staff/{staff}/stafflics/create',[StaffLicController::class,'store'])->name('ESTB.staff.stafflics.store');
      Route::get('/ESTB/staff/{staff}/stafflics/{stafflic}/show',[StaffLicController::class,'show'])->name('ESTB.stafflic_transactions.show');
      Route::patch('/ESTB/staff/{staff}/stafflics/{stafflic}/update',[StaffLicController::class,'update'])->name('ESTB.staff.stafflics.update');
      Route::delete('/ESTB/staff/{staff}/stafflics/{stafflic}/destroy',[StaffLicController::class,'destroy'])->name('ESTB.staff.stafflics.destroy');
    
      //staff LIC Controller
      //Route::get('ESTB/staff/{staff}/stafflic_transactions',[StafflicTransactionController::class,'index'])->name('ESTB.Staff.Stafflics.stafflic_transactions');
      Route::post('/ESTB/staff/stafflics/stafflic_transactions/create',[StafflicTransactionController::class,'store'])->name('ESTB.staff.stafflics.stafflic_transactions.store');
      //Route::patch('/ESTB/staff/{staff}/stafflics/{stafflic}/stafflic_transactions/update',[StafflicTransactionController::class,'update'])->name('ESTB.staff.stafflics.stafflic_transactions.update');
      //Route::delete('/ESTB/staff/{staff}/stafflics/{stafflic}/stafflic_transactions/destroy',[StafflicTransactionController::class,'destroy'])->name('ESTB.staff.stafflics.stafflic_transactions.destroy');
    
      //staff share controller
      Route::post('/ESTB/staff/{staff}/staffshares/create',[StaffShareController::class,'store'])->name('ESTB.staff.staffshares.store');
      Route::get('/ESTB/staff/{staff}/staffshares/{staffshare}/show',[StaffShareController::class,'show'])->name('ESTB.staffshares.show');
      Route::patch('/ESTB/staff/{staff}/staffshares/{staffshare}/update',[StaffShareController::class,'update'])->name('ESTB.staff.staffshares.update');
      Route::delete('/ESTB/staff/{staff}/staffshares/{staffshare}/destroy',[StaffShareController::class,'destroy'])->name('ESTB.staff.staffshares.destroy');
    
      //staff loancontroller
      Route::post('/ESTB/staff/{staff}/staffloans/create',[StaffLoanController::class,'store'])->name('ESTB.staff.staffloans.store');
      Route::get('/ESTB/staff/{staff}/staffloans/{staffloan}/show',[StaffLoanController::class,'show'])->name('ESTB.staffloans.show');
      Route::patch('/ESTB/staff/{staff}/staffloans/{staffloan}/update',[StaffLoanController::class,'update'])->name('ESTB.staff.staffloans.update');
      Route::delete('/ESTB/staff/{staff}/staffloans/{staffloan}/destroy',[StaffLoanController::class,'destroy'])->name('ESTB.staff.staffloans.destroy');
    
      
      //leave routs
      //<1!-- Leave rules routes-->
      Route::get('/ESTB/leaves',[LeaveController::class,'index'])->name('ESTB.leaves.index');
      Route::post('/ESTB/leaves/create',[LeaveController::class,'store'])->name('ESTB.leaves.store');
      Route::patch('/ESTB/leaves/{leave}',[LeaveController::class,'update'])->name('ESTB.leaves.update');
      Route::delete('/ESTB/leaves/{leave}',[LeaveController::class,'destroy'])->name('ESTB.leaves.destroy');

      
      //for fetching the alternate staff
      Route::get('/fetch-alternate-staff', [LeaveController::class, 'fetchAlternateStaff'])->name('fetch-alternate-staff');

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
      Route::get('/ESTB/leaves_management/fetchholidayrhevents',[LeaveController::class,'fetchholidayrhevents'])->name('ESTB.leaves_management.fetchholidayrhevents');

      Route::get('/ESTB/leaves_management/fetchleaveevents',[LeaveController::class,'fetchleaveevents'])->name('ESTB.leaves_management.fetchleaveevents');
      // End of leave management related routes.

      //REnumerations Controllers
      Route::get('/ESTB/renumerations',[RenumerationheadsController::class,'index'])->name('ESTB.renumerations');
      // Route::post('/ESTB/renumerations/create',[RenumerationheadsController::class,'store'])->name('ESTB.renumerations.store');
      // Route::patch('/ESTB/renumerations/update/{renumeration}',[RenumerationheadsController::class,'update'])->name('ESTB.renumerations.update');
      // Route::delete('/ESTB/renumerations/destory/{renumeration}', [RenumerationheadsController::class, 'destroy'])->name('ESTB.renumerations.destroy');
      Route::post('/import-excel', [RenumerationheadsController::class, 'importExcel'])->name('import.excel');

      //Route to fetch renumeration for perticular staff using Filter
    Route::get('/ESTB/renumerations/renumedetails',[RenumerationheadsController::class,'filterrenume_information'])->name('ESTB.renumerations.renumedetails');
    Route::get('/ESTB/renumerations/indexfiltering', [RenumerationheadsController::class,'indexFiltering'])->name('ESTB.renumerations.indexfiltering');

    //Payscales-Salarytypes Controllers
    Route::get('/ESTB/payscales',[PayscaleController::class,'index'])->name('ESTB.payscales');
    Route::post('/ESTB/payscale/create',[PayscaleController::class,'store'])->name('ESTB.payscales.store');
    Route::get('/ESTB/payscale/{payscale}/show',[PayscaleController::class,'show'])->name('ESTB.payscale.payscalesalaryheads.show');
    Route::patch('/ESTB/payscale/{payscales}/update',[PayscaleController::class,'update'])->name('ESTB.payscales.update');
    Route::delete('/ESTB/payscale/{payscales}/destroy', [PayscaleController::class, 'destroy'])->name('ESTB.payscales.destroy');
    
    //Salarygroup controller
    Route::get('/ESTB/salaries/salarygroups',[SalaryGroupController::class,'index'])->name('ESTB.salaries.salarygroups');
    Route::post('/ESTB/salaries/salarygroups/create',[SalaryGroupController::class,'store'])->name('ESTB.salaries.salarygroups.store');
    Route::patch('/ESTB/salaries/salarygroups/{salary_groups}/update',[SalaryGroupController::class,'update'])->name('ESTB.salaries.salarygroups.update');
    Route::delete('/ESTB/salaries/salarygroups/{salary_groups}/destroy', [SalaryGroupController::class, 'destroy'])->name('ESTB.salaries.salarygroups.destroy');

    
    //Salaryheads controller
    Route::get('/ESTB/salaries/salaryheads',[SalaryHeadController::class,'index'])->name('ESTB.salaries.salaryheads');
    Route::post('/ESTB/salaries/salaryheads/create',[SalaryHeadController::class,'store'])->name('ESTB.salaries.salaryheads.store');
    Route::patch('/ESTB/salaries/salaryheads/{salary_heads}/update',[SalaryHeadController::class,'update'])->name('ESTB.salaries.salaryheads.update');
    Route::delete('/ESTB/salaries/salaryheads/{salary_heads}/destroy', [SalaryHeadController::class, 'destroy'])->name('ESTB.salaries.salaryheads.destroy');
    
    //Mapping of Salaryheads controller
    Route::post('/ESTB/payscale/{payscale}/payscalesalaryheads/create',[PayscaleSalaryHeadController::class,'store'])->name('ESTB.payscale.payscalesalaryheads.store');
    Route::patch('/ESTB/payscale/{payscale}/payscalesalaryheads/update',[PayscaleSalaryHeadController::class,'update'])->name('ESTB.payscale.payscalesalaryheads.update');
    Route::delete('/ESTB/payscale/{payscale}/payscalesalaryheads/destroy',[PayscaleSalaryHeadController::class,'destroy'])->name('ESTB.payscale.payscalesalaryheads.destroy'); 

    //LIC Controller
    Route::get('/ESTB/salaries/stafflic_transactions',[StafflicTransactionController::class,'index'])->name('ESTB.salaries.stafflic_transactions.lics');
    Route::post('/ESTB/salaries/stafflic_transactions/create',[StafflicTransactionController::class,'store'])->name('ESTB.salaries.stafflic_transactions.store');
    //Route::patch('/ESTB/salaries/stafflic_transactions/{stafflic_transaction}/update',[StafflicTransactionController::class,'update'])->name('ESTB.salaries.stafflic_transactions.update');
    //Route::delete('/ESTB/salaries/stafflic_transactions/{stafflic_transaction}/destroy',[StafflicTransactionController::class,'destroy'])->name('ESTB.salaries.stafflic_transactions.destroy');
    
    //Shares Controller
    // Route::get('/ESTB/shares',[ShareController::class,'index'])->name('ESTB.shares');
    // Route::post('/ESTB/shares/create',[ShareController::class,'store'])->name('ESTB.shares.store');
    // Route::patch('/ESTB/shares/{share}/update',[ShareController::class,'update'])->name('ESTB.shares.update');
    // Route::delete('/ESTB/shares/{share}/destroy',[ShareController::class,'destroy'])->name('ESTB.shares.destroy');
    

      Route::get('/ESTB/salaryheads',[SalaryHeadsController::class,'index'])->name('ESTB.salaryheads');
      Route::post('/ESTB/salaryheads/create',[SalaryHeadsController::class,'store'])->name('ESTB.salaryheads.store');
      Route::patch('/ESTB/salaryheads/update/{salaryhead}',[SalaryHeadsController::class,'update'])->name('ESTB.salaryheads.update');
      Route::delete('/ESTB/salaryheads/destory/{salaryhead}', [SalaryHeadsController::class, 'destroy'])->name('ESTB.salaryheads.destroy');

      //under construction
      Route::get('/ESTB/construction',[TdsheadsController::class,'index'])->name('ESTB.construction');


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


      //start of tds related routes
      Route::get('ESTB/TDS/TdsHeads/index',[TdsheadsController::class,'index'])->name('ESTB.TDS.TdsHeads.index');
      Route::post('ESTB/TDS/TdsHeads/store',[TdsheadsController::class,'store'])->name('ESTB.TDS.TdsHeads.store');
      Route::get('ESTB/TDS/TdsHeads/show/{tdsheads}',[TdsheadsController::class,'show'])->name('ESTB.TDS.TdsHeads.show');
      Route::patch('ESTB/TDS/TdsHeads/update/{tdsheads}',[TdsheadsController::class,'update'])->name('ESTB.TDS.TdsHeads.update');
      Route::delete('ESTB/TDS/TdsHeads/delete',[TdsheadsController::class,'destroy'])->name('ESTB.TDS.TdsHeads.delete');

      //investmentcategory related
     Route::post('ESTB/TDS/InvestmentCategory/store',[InvestmentCategoryController::class,'store'])->name('ESTB.TDS.InvestmentCategory.store');
     Route::patch('ESTB/TDS/InvestmentCategory/update/{tdsheads}',[InvestmentCategoryController::class,'update'])->name('ESTB.TDS.InvestmentCategory.update');
     Route::delete('ESTB/TDS/InvestmentCategory/delete/{tdsheads}',[InvestmentCategoryController::class,'destroy'])->name('ESTB.TDS.InvestmentCategory.delete');

                    //taxheads realted
      Route::get('ESTB/TDS/Taxheads/index',[TaxHeadsController::class,'index'])->name('ESTB.TDS.Taxheads.index');
      Route::post('ESTB/TDS/Taxheads/store',[TaxHeadsController::class,'store'])->name('ESTB.TDS.Taxheads.store');
      Route::patch('ESTB/TDS/Taxheads/update/{taxHeads}',[TaxHeadsController::class,'update'])->name('ESTB.TDS.Taxheads.update');
      Route::delete('ESTB/TDS/Taxheads/destroy/{taxHeads}',[TaxHeadsController::class,'destroy'])->name('ESTB.TDS.Taxheads.destroy');

                  //taxslabs
      Route::get('ESTB/TDS/Taxheads{taxHeads}/show',[TaxHeadsController::class,'show'])->name('ESTB.TDS.Taxheads.show');
      Route::get('ESTB/TDS/Taxheads/taxslab/index',[TaxSlabController::class,'index'])->name('ESTB.TDS.Taxheads.Taxslabs.index');
      Route::get('ESTB/TDS/Taxheads{taxHeads}/taxslab/show',[TaxSlabController::class,'show'])->name('ESTB.TDS.Taxheads.Taxslabs.show');
      Route::post('ESTB/TDS/Taxheads{taxHeads}/taxslab/store',[TaxSlabController::class,'store'])->name('ESTB.TDS.Taxheads.Taxslabs.store');
      Route::patch('ESTB/TDS/Taxheads/{taxHeads}/taxslab/update/{taxSlab}',[TaxSlabController::class,'update'])->name('ESTB.TDS.Taxheads.Taxslabs.update');
      Route::delete('ESTB/TDS/Taxheads/{taxHeads}/taxslab/destroy/{taxSlab}',[TaxSlabController::class,'destroy'])->name('ESTB.TDS.Taxheads.Taxslabs.destroy');
        
      //stafftaxregime related
      Route::get('ESTB/TDS/StaffTaxRegime/index/{stafftaxregime}',[StaffTaxRegimeController::class,'index'])->name('ESTB.TDS.StaffTaxRegime.index');
      Route::post('ESTB/TDS/StaffTaxRegime/store{stafftaxregime}',[StaffTaxRegimeController::class,'store'])->name('ESTB.TDS.StaffTaxRegime.store');
      Route::get('ESTB/TDS/StaffTaxRegime/show/{stafftaxregime}',[StaffTaxRegimeController::class,'show'])->name('ESTB.TDS.StaffTaxRegime.show');
      Route::patch('ESTB/TDS/StaffTaxRegime/update/{stafftaxregime}',[staffTaxRegimeController::class,'update'])->name('ESTB.TDS.StaffTaxRegime.update');
      Route::delete('ESTB/TDS/StaffTaxRegime/destroy',[StaffTaxRegimeController::class,'destroy'])->name('ESTB.TDS.StaffTaxRegime.destroy');


      // end of tds related routes
      });

      //Dean rnd related all routes
      Route::middleware(['cors','auth','role:'.(string) UserRoles::DEANRND])->group(function(){

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
        Route::get('/Deanrnd/Teaching/research/reviewer_editor',[DeanrndResearchController::class,'reviewer_editor'])->name('Deanrnd.Teaching.research.reviewer_editorl');




        //Deanrndn Non-Teaching professional activity
        Route::get('/Deanrnd/NonTeaching',[DeanRndController::class,'professional_activity_attendee_nt'])->name('Deanrnd.NonTeaching');
        Route::get('/Deanrnd/NonTeaching/conducted',[DeanRndController::class,'professional_activity_conducted_nt'])->name('Deanrnd.NonTeaching.conducted');

      });

      //egov admin related all routes
      Route::middleware(['cors','auth','role:'.(string) UserRoles::EGOV_ADMIN])->group(function(){

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
  Route::middleware(['cors','auth','role:'.(string) UserRoles::HOD])->group(function(){

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
     Route::get('/HOD/Teaching/research/hodreviewereditor',[HodResearchController::class,'hod_review_editor'])->name('HOD.Teaching.research.hodreviewereditor');


     //Hod Leaves.
     Route::get('/HOD/leaves_management',[HODLeaveController::class,'index'])->name('HOD.leaves_management.index');
     Route::get('/HOD/leaves_management/hollidayrh_events',[HODLeaveController::class,'hollidayrh_events'])->name('HOD.leaves.hollidayrh_events');
     Route::get('/HOD/leaves_management/fetchDeptleaveevents',[HODLeaveController::class,'fetchDeptleaveevents'])->name('HOD.leaves.fetchDeptleaveevents');
     Route::get('/HOD/leaves_management/fetchclikdayevents',[HODLeaveController::class,'fetchclikdayevents'])->name('HOD.leaves.fetchclikdayevents');
     Route::get('/HOD/leaves_management/fetchdatewisedeptleaveevents',[HODLeaveController::class,'fetchdatewisedeptleaveevents'])->name('HOD.leaves.fetchdatewisedeptleaveevents');

     Route::get('/HOD/leaves_management/recommend_leave',[HODLeaveController::class,'recommend_leave']);




     Route::get('/HOD/leaves_management/reject_leave',[HODLeaveController::class,'reject_leave']);





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

     Route::get('/HOD/examsectionissues',[ExamSectionIssuesController::class,'index'])->name('HOD.examsectionissues.index');
     Route::post('/HOD/examsectionissues/create',[ExamSectionIssuesController::class,'store'])->name('HOD.examsectionissues.store');
     Route::patch('/HOD/examsectionissues/update/{examSectionIssues}',[ExamSectionIssuesController::class,'update'])->name('HOD.examsectionissues.update');
     Route::delete('/HOD/examsectionissues/destory/{examSectionIssues}', [ExamSectionIssuesController::class, 'destroy'])->name('HOD.examsectionissues.destroy');

     Route::get('/HOD/issue_timeline',[IssueTimelineController::class,'index'])->name('HOD.issue_timeline.index');
     Route::post('/HOD/viewstudentissues/{student_issue}/issue_timeline/create',[IssueTimelineController::class,'store'])->name('HOD.issue_timeline.store');
     Route::get('/HOD/viewstudentissues', [HodStudentIssueController::class, 'index'])->name('HOD.view');
      Route::get('/HOD/viewstudentissues/{student_issue}/show',[HodStudentIssueController::class,'show'])->name('HOD.issue_timeline.show');

                                  //Routes for internship tracking

    Route::get('/HOD/internship/dashboard', [hod_InternshipController::class, 'index'])->name('HOD.internship.dashboard');

          //Student table
    Route::get('/HOD/internship/student',[hod_StudentController::class,'index'])->name('HOD.internship.student');
    Route::post('/HOD/internship/student/create', [hod_StudentController::class, 'store'])->name('HOD.internship.student.store');
    Route::patch('/HOD/internship/student/update/{student}', [hod_StudentController::class, 'update'])->name('HOD.internship.student.update');
    Route::delete('/HOD/internship/student/destroy/{student}',[hod_StudentController::class, 'destroy'])->name('HOD.internship.student.destroy');
    Route::get('HOD/internship/student/show/{student}', [hod_StudentController::class, 'show'])->name('HOD.internship.student.interaction.show');


        //interaction table
    Route::post('/HOD/internship/student/{student}/interaction/create', [hod_InteractionController::class, 'store'])->name('HOD.internship.student.interaction.store');
    Route::patch('/HOD/internship/student/{student}/interaction/update/{interaction}', [hod_InteractionController::class, 'update'])->name('HOD.internship.student.interaction.update');
    Route::get('HOD/internship/file/download/{file}', [hod_InteractionController::class, 'downloadFile'])->name('HOD.internship.file.download');


          //industry table
    Route::get('HOD/internship/industry',[hod_IndustryController::class,'index'])->name('HOD.internship.industry');
    Route::post('/HOD/internship/industry/create', [hod_IndustryController::class, 'store'])->name('HOD.internship.industry.store');
    //Route::post('/Teaching/internship/industry/store', [IndustryController::class, 'show'])->name('internship.industry.show');
    Route::patch('/HOD/internship/industry/update/{industry}', [hod_IndustryController::class, 'update'])->name('HOD.internship.industry.update');
    Route::delete('/HOD/internship/industry/destroy/{industry}',[hod_IndustryController::class, 'destroy'])->name('HOD.internship.industry.destroy');
    Route::get('/HOD/internship/industry/show/{industry}', [hod_IndustryController::class, 'show'])->name('HOD.internship.industry.show');

          //spoc table
    Route::get('HOD/internship/spoc',[hod_SpocController::class,'index'])->name('HOD.internship.spoc');
    Route::post('/HOD/internship/spoc/create', [hod_SpocController::class, 'store'])->name('HOD.internship.spoc.store');
    //Route::post('/Teaching/internship/spoc/store', [SpocController::class, 'show'])->name('internship.spoc.show');
    Route::patch('/HOD/internship/spoc/update/{spoc}', [hod_SpocController::class, 'update'])->name('HOD.internship.spoc.update');
    Route::delete('/HOD/internship/spoc/destroy/{spoc}',[hod_SpocController::class, 'destroy'])->name('HOD.internship.spoc.destroy');
    Route::get('/HOD/internship/spoc/show/{spoc}', [hod_SpocController::class, 'show'])->name('HOD.internship.spoc.show');

          //studentinternship table
    Route::get('HOD/internship/studentinternship',[hod_StudentinternshipController::class,'index'])->name('HOD.internship.studentinternship');
    Route::post('/HOD/internship/studentinternship/create', [hod_StudentinternshipController::class, 'store'])->name('HOD.internship.studentinternship.store');
    //Route::post('/Teaching/internship/studentinternship/store', [StudentinternshipController::class, 'show'])->name('internship.studentinternship.show');
    Route::patch('/HOD/internship/studentinternship/update/{studentinternship}', [hod_StudentinternshipController::class, 'update'])->name('HOD.internship.studentinternship.update');
    Route::delete('/HOD/internship/studentinternship/destroy/{studentinternship}',[hod_StudentinternshipController::class, 'destroy'])->name('HOD.internship.studentinternship.destroy');
    Route::get('/HOD/internship/studentinternship/{studentinternship}/show', [hod_StudentinternshipController::class, 'show'])->name('HOD.internship.showinternship.show');
    //Route::get('/Teaching/internship/studentinternship/show/{studentinternship}', [StudentinternshipController::class, 'show'])->name('internship.studentinternship.show');

    Route::get('/HOD/internship/studentinternship/get-spocs/{industry_id}', [hod_StudentinternshipController::class, 'getSpocs'])->name('hod.get.spocs');

              //student_studentinternship table
    Route::post('/HOD/internship/{studentinternship}/student_studentinternship/create',[hod_StudentStudentinternshipController::class,'store'])->name('HOD.internship.studentinternship.student_studentinternship.store');
    Route::delete('/HOD/internship/{studentinternship}/student_studentinternship/{student_studentinternship}/destroy',[hod_StudentStudentinternshipController::class, 'destroy'])->name('HOD.internship.student_studentinternship.destroy');
    //end of  internship tracking

  });

  Route::middleware(['cors','auth','role:'.(string) UserRoles::PRINCIPAL_OFFICE])->group(function()
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

    //Dean_Admin All Routes Here
    Route::middleware(['cors','auth','role:'.(string) UserRoles::DEAN_ADMIN])->group(function(){
      //Dean_Admin Leave Management Routes
      Route::get('/Dean_admin/dashboard',[DeanadminController::class,'dashboard'])->name('Dean_Admin.dashboard');
      Route::get('/Dean_admin/leaves_management/daleaves',[DeanadminController::class,'leaves_lest'])->name('Dean_Admin.leaves_management.leaves');
      Route::get('/Dean_admin/leaves_management/daleaves_entitlement',[DeanadminController::class,'da_leaves_entitlement'])->name('Dean_Admin.leaves_management_entitlement');
      Route::get('/Dean_admin/leaves_management/daholiday_rh_list',[DeanadminController::class,'da_holiday_rh_list'])->name('Dean_Admin.leaves_management_holidayrh');

      //Dean_admin calender Routes
      Route::get('/Dean_admin/leaves_management/daleaves_calender',[DeanadminController::class,'da_calender_view'])->name('Dean_Admin.leaves_management_daleaves_calender');
      Route::get('/Dean_admin/leaves_management/hollidayrh_events',[DeanadminController::class,'hollidayrh_events'])->name('Dean_Admin.leaves_management.hollidayrh_events');
      Route::get('/Dean_admin/leaves_management/fetchAllleaveevents',[DeanadminController::class,'fetchAllleaveevents'])->name('Dean_Admin.leaves_management.fetchAllleaveevents');
      Route::get('/Dean_admin/leaves_management/approve_leave',[DeanadminController::class,'approve_leave'])->name('Dean_Admin.leaves_management.approve_leave');
      Route::get('/Dean_admin/leaves_management/reject_leave',[DeanadminController::class,'reject_leave'])->name('Dean_Admin.leaves_management.reject_leave');

      // //for fetching events of specific date (clicked) using AJAX
      Route::get('/Dean_admin/leaves_management/fetchholidayrhevents',[DeanadminController::class,'fetchholidayrhevents'])->name('Dean_admin.leaves_management.fetchholidayrhevents');
      Route::get('/Dean_admin/leaves_management/fetchleaveevents',[DeanadminController::class,'fetchleaveevents'])->name('Dean_admin.leaves_management.fetchmyleaveevents');





      //Dean_admin staff Routes
      Route::get('/Dean_admin/staff/staffindex',[DeanadminController::class,'staff_view'])->name('Dean_Admin.staff');
      Route::get('/Dean_admin/staff/staffview/{staff}',[DeanadminController::class,'show_staff_details'])->name('Dean_Admin.staff.staffview');
      Route::get('/Dean_admin/staff/departmentindex',[DeanadminController::class,'update'])->name('Dean_Admin.staff.departmentindex');


      Route::get('/Dean_admin/staff/{staff}/qualifications',[urlcontroller::class,'da_qualifications'])->name('Dean_admin.staff.qualifications');
      Route::get('/Dean_admin/staff/{staff}/associations',[urlcontroller::class,'da_assocaitons'])->name('Dean_admin.staff.associations');
      Route::get('/Dean_admin/staff/{staff}/departments',[urlcontroller::class,'da_departments'])->name('Dean_admin.staff.departments');
      Route::get('/Dean_admin/staff/{staff}/designationpayscales',[urlcontroller::class,'da_designationpayscales'])->name('Dean_admin.staff.designationpayscales');


      //updating qualification of the staff.
      Route::post('/Dean_admin/staff/{staff}/qualifications/create',[QualificationStaffController::class,'store'])->name('Dean_admin.staff.qualification.store');
      Route::patch('/Dean_admin/staff/{staff}/qualifications/update/{qualification}',[QualificationStaffController::class,'update'])->name('Dean_admin.staff.qualification.update');
      //for deleting the staff qualification details when want to change the qualification with the condition being duration of the staff in that perticular department is within 1 month
      Route::delete('/Dean_admin/staff/{staff}/qualification/destroy/{qualification}',[QualificationStaffController::class,'destroy'])->name('Dean_admin.staff.qualification.destroy');



      //updating department of the staff.
      Route::patch('/Dean_admin/staff/department/update/{staff}',[DeanadminController::class,'update'])->name('Dean_admin.staff.department.update');
      //Upating the correcting the department information of the staff
      Route::patch('/Dean_admin/staff/{staff}/department/corrections/{department}',[DeanadminController::class,'updatecurrent'])->name('Dean_admin.staff.department.correction');
      //for deleting the staff department details when want to change the department with the condition being duration of the staff in that perticular department is within 1 month
      Route::delete('/Dean_admin/staff/{staff}/department/destroy/{department}',[DeanadminController::class,'destroy'])->name('Dean_admin.staff.departments.destroy');


      Route::patch('Dean_admin/staff/association/update/{staff}',[StaffAssociationController::class,'update'])->name('Dean_admin.staff.association.update');
      //Upating the correcting the Association information of the staff
      Route::patch('/Dean_admin/staff/{staff}/association/corrections/{association}',[StaffAssociationController::class,'updatecurrent'])->name('Dean_admin.staff.association.correction');
      //for deleting the staff association details when want to change the association with the condition being duration of the staff with that perticular association is within 1 month
      Route::delete('/Dean_admin/staff/{staff}/association/destroy/{association}',[StaffAssociationController::class,'destroy'])->name('Dean_admin.staff.associations.destroy');

      //Routes for additional designations
      Route::post('/Dean_admin/staff/{staff}/additionaldesignation/create',[staffDesignationController::class,'createadditionaldesign'])->name('Dean_admin.staff.additional_designation.create');
      Route::patch('/Dean_admin/staff/{staff}/additionaldesignation/update/{data}',[staffDesignationController::class,'update_additional_desig'])->name('Dean_admin.staff.additional_designation.update');
      Route::delete('/Dean_admin/staff/{staff}/additionaldesignation/destroy/{data}',[staffDesignationController::class,'destroy_additional_desig'])->name('Dean_admin.staff.additionaldesignation.destroy');

      //editing the current payscale of the staff
      Route::patch('/Dean_admin/staff/{staff}/payscale/{payscale}/update',[staffDesignationController::class,'editpayscale'])->name('Dean_admin.staff.payscale.update');

      //updating designation of the staff.
      Route::patch('/Dean_admin/staff/designationpayscale/update/{staff}',[staffDesignationController::class,'update'])->name('Dean_admin.staff.designationpayscale.update');

      //editing the currect designation of the staff
      Route::patch('/Dean_admin/staff/{staff}/designation/{designation}/update',[staffDesignationController::class,'editdesignation'])->name('Dean_admin.staff.designation.currentupdate');

      //for deleting the staff payscale
      Route::delete('/Dean_admin/staff/{staff}/payscale/{payscale}/destory',[staffDesignationController::class,'destrorypayscale'])->name('Dean_admin.staff.payscale.destroy');


    });


    //Principal Login All Routes
    Route::middleware(['cors','auth','role:'.(string) UserRoles::PRINCIPAL])->group(function(){

      Route::get('/PRINCIPAL/dashboard',[PrincipalController::class,'dashboard'])->name('PRINCIPAL.dashboard');

      //All Leave Management routes
      Route::get('/PRINCIPAL/leaves_management/principal_leaves',[PrincipalController::class,'leaves_lest'])->name('PRINCIPAL.leaves_management.leaves');
      Route::get('/PRINCIPAL/leaves_management/principal_entitlement',[PrincipalController::class,'leaves_entitlement'])->name('PRINCIPAL.leaves_management.principal_entitlement');
      Route::get('/PRINCIPAL/leaves_management/principal_holiday_rh',[PrincipalController::class,'holiday_rh'])->name('PRINCIPAL.leaves_management.principal_holiday_rh');

      //Dean_admin calender Routes
      Route::get('/PRINCIPAL/leaves_management/principal_leaves_calender',[PrincipalController::class,'calender_view'])->name('PRINCIPAL.leaves_management.principal_leaves_calender');
      Route::get('/PRINCIPAL/leaves_management/hollidayrh_events',[PrincipalController::class,'hollidayrh_events'])->name('PRINCIPAL.leaves_management.hollidayrh_events');
      Route::get('/PRINCIPAL/leaves_management/fetchAllleaveevents',[PrincipalController::class,'fetchAllleaveevents'])->name('PRINCIPAL.leaves_management.fetchAllleaveevents');

      // //for fetching events of specific date (clicked) using AJAX
      Route::get('/PRINCIPAL/leaves_management/fetchholidayrhevents',[PrincipalController::class,'fetchholidayrhevents'])->name('PRINCIPAL.leaves_management.fetchholidayrhevents');
      Route::get('/PRINCIPAL/leaves_management/fetchleaveevents',[PrincipalController::class,'fetchleaveevents'])->name('PRINCIPAL.leaves_management.fetchleaveevents');

      //Approve and Reject Leaves Routes in Principal login
      Route::get('/PRINCIPAL/leaves_management/approve_leave',[PrincipalController::class,'approve_leave'])->name('PRINCIPAL.leaves_management.approve_leave');
      Route::get('/PRINCIPAL/leaves_management/reject_leave',[PrincipalController::class,'reject_leave'])->name('PRINCIPAL.leaves_management.reject_leave');






      Route::get('/PRINCIPAL/staff/index',[PrincipalController::class,'staff_view'])->name('PRINCIPAL.staff');
      Route::get('/PRINCIPAL/staff/staffview/{staff}',[PrincipalController::class,'show_staff_details'])->name('PRINCIPAL.staff.staffview');

      Route::get('/PRINCIPAL/staff/departments',[PrincipalController::class,'update'])->name('PRINCIPAL.staff.departments.update');


      Route::get('/PRINCIPAL/staff/{staff}/qualifications',[urlcontroller::class,'principal_qualifications'])->name('PRINCIPAL.staff.qualifications');
      Route::get('/PRINCIPAL/staff/{staff}/associations',[urlcontroller::class,'principal_assocaitons'])->name('PRINCIPAL.staff.associations');
      Route::get('/PRINCIPAL/staff/{staff}/departments',[urlcontroller::class,'principal_departments'])->name('PRINCIPAL.staff.departments.principal_departments');
      Route::get('/PRINCIPAL/staff/{staff}/designationpayscales',[urlcontroller::class,'principal_designationpayscales'])->name('PRINCIPAL.staff.designationpayscales');

      Route::get('/PRINCIPAL/examsectionissues',[Pl_ExamSectionIssuesController::class,'index'])->name('PRINCIPAL.examsectionissues.index');
     Route::post('/PRINCIPAL/examsectionissues/create',[Pl_ExamSectionIssuesController::class,'store'])->name('PRINCIPAL.examsectionissues.store');
     Route::patch('/PRINCIPAL/examsectionissues/update/{examSectionIssues}',[Pl_ExamSectionIssuesController::class,'update'])->name('PRINCIPAL.examsectionissues.update');
     Route::delete('/PRINCIPAL/examsectionissues/destory/{examSectionIssues}', [Pl_ExamSectionIssuesController::class, 'destroy'])->name('PRINCIPAL.examsectionissues.destroy');

     Route::get('/PRINCIPAL/issue_timeline',[Pl_IssueTimelineController::class,'index'])->name('PRINCIPAL.issue_timeline.index');
     Route::post('/PRINCIPAL/viewstudentissues/{student_issue}/issue_timeline/create',[Pl_IssueTimelineController::class,'store'])->name('PRINCIPAL.issue_timeline.store');
     Route::get('/PRINCIPAL/viewstudentissues', [PrincipalStudentIssueController::class, 'index'])->name('PRINCIPAL.view');
      Route::get('/PRINCIPAL/viewstudentissues/{student_issue}/show',[PrincipalStudentIssueController::class,'show'])->name('PRINCIPAL.issue_timeline.show');


    });





  //Examoffice
  // Route::middleware(['cors','auth','role:'.(string) UserRoles::EXAM_SECTION, 'prevent-back-history'])->group(function(){
  //   Route::get('/Examoffice/dashboard',[ExamOfficeController::class,'dashboard'])->name('Examohoffice.dashboard');
  //   Route::get('/Examoffice/grievancecategory',[GrievienceCategoryController::class,'index'])->name('Examoffice.grievancecategory.index');
  //   Route::post('/Examoffice/grievancecategory/create',[GrievienceCategoryController::class,'store'])->name('Examoffice.grievancecategory.store');
  //   Route::patch('/Examoffice/grievancecategory/update/{grievience_category}',[GrievienceCategoryController::class,'update'])->name('Examoffice.grievancecategory.update');
  //   Route::delete('/Examoffice/grievancecategory/destory/{grievience_category}', [GrievienceCategoryController::class, 'destroy'])->name('Examoffice.grievancecategory.destroy');

  //   });

Route::get('dashboard', [MyAuthController::class, 'dashboard']);
Route::get('login', [MyAuthController::class, 'index'])->name('login');
Route::get('/', [MyAuthController::class, 'index']);
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
Route::patch('ticket/update/{ticket}', [TicketController::class, 'update'])->name('ticket.update');
Route::delete('ticket/destroy/{ticket}',[TicketController::class, 'destroy'])->name('ticket.destroy');
Route::get('ticket/show/{ticket}', [TicketController::class, 'show'])->name('ticket.show');

//Routes for post_ticket
Route::post('ticket/{ticket}/reply/store', [ReplyController::class, 'store'])->name('ticket.reply.store');
Route::patch('ticket/{ticket}reply/update',[ReplyController::class,'update'])->name('ticket.reply.update');


//Routes for admin ticketiing  system
// Route::middleware(['cors','auth','role:'.(string) UserRoles::SU])->group(function()

Route::get('/student-issues', [StudentIssueController::class,'index'])->name('student-issues.index');
Route::post('/student-issues', [StudentIssueController::class,'store'])->name('student-issues.store');
Route::get('/student-issues/{student_issue}', [StudentIssueController::class, 'show'])->name('student-issues.show');



Route::get('mssql',function(){
  $db=DB::connection('sqlsrv')->table('Employees')->get();
  dd($db);
});





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
