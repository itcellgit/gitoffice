<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;
use App\Models\employee_type;
use App\Models\annual_increment;
use App\Models\HOD\exam_section_isuues;
use App\Models\student_issue;


class staff extends Model
{
    use HasFactory;
    protected $fillable = ['fname', 'mname','lname','local_address','permanent_address','dob','doj','religion_id','castecategory_id','gender','date_of_increment','date_of_superanuation','date_of_confirmation','bloodgroup','pan_card','adhar_card'];
 //  public $sortable=['fname', 'mname','lname','employee_type'];
    public function latest_employee_type():HasMany
    {
        return $this->hasMany(employee_type::class)->where('status','active')->take(1);
    }
    //fetch all teaching employees
    public function teaching_employee():HasMany
    {
        return $this->hasMany(employee_type::class)->where('status','active')->where('employee_type','Teaching')->take(1);

    }
    //fetch all staff departments
    public function departments():BelongsToMany
    {
        return $this->belongsToMany(department::class)->withPivot('id','start_date','end_date','status','reason','gcr')->orderByPivot('start_date','desc');
    }

    //fetch active departments
    public function activedepartments():BelongsToMany
    {
        return $this->belongsToMany(department::class)->wherePivot('status','active')->withPivot('id','start_date','end_date','reason','status','gcr')->orderByPivot('start_date','desc');
    }
    public function department_list():BelongsToMany
    {
        return $this->belongsToMany(department::class)->pluck('name')->implode(',');
    }

    //fetch staff designations
    public function designations(): BelongsToMany
    {
        return $this->belongsToMany(designation::class)->withPivot('id','start_date','end_date','dept_id','allowance_status','reason','gcr','status')->orderByPivot('start_date','desc');
    }

    //fetch only currently active designation
    public function latestDesignation():BelongsToMany
    {
        return $this->belongsToMany(designation::class)->wherePivot('status','active')->withPivot('id','start_date','end_date','allowance_status','dept_id','reason','gcr','status');
    }

    //fetch currently assigned additional designation
    public function latest_additional_designation():BelongsToMany
    {
        return $this->belongsToMany(designation::class)->where('isadditional','1')->wherePivot('status','active')->withPivot('id','start_date','end_date','dept_id','allowance_status','reason','gcr','status');
    }

    //getch staff associations
    public function associations():BelongsToMany
    {
        return $this->belongsToMany(association::class)->withPivot('id','start_date','closing_date','end_date','reason','gcr','status')->orderByPivot('start_date','desc');
    }

    //fetch only the currently active association
    public function latestassociation():BelongsToMany
    {
        return $this->belongsToMany(association::class)->wherePivot('status','active')->withPivot('id','start_date','end_date','reason','gcr','closing_date','status')->latest()->take(1);
    }

    //fetch the details of the staff confirmation details
    public function confirmationAssociation():BelongsToMany
    {
        return $this->belongsToMany(association::class)->wherePivot('association_id','6')->withPivot('id','start_date','end_date','reason','gcr','status')->latest()->take(1);
    }

    //fetch the teaching staff payscale details
    public function teaching_payscale():BelongsToMany
    {
        return $this->belongsToMany(teaching_payscale::class)->withPivot('id','start_date','end_date','status','reason','gcr')->orderByPivot('start_date','desc');
    }

    //fetch the staff current payscale
    public function latestteaching_payscale():BelongsToMany
    {
        return $this->belongsToMany(teaching_payscale::class)->wherePivot('status','active')->withPivot('id','start_date','end_date','status','reason','gcr')->orderByPivot('start_date','desc')->take(1);
    }

    //fetch the teaching staff consolidated or fixed pay
    public function consolidated_teaching_pay():HasMany
    {
      return $this->hasMany(consolidated_teaching_pay::class)->orderBy('start_date','desc');
    }

    //fetch the staff's current fixed pay
    public function latest_consolidated_teaching_pay():hasMany
    {
        return $this->hasMany(consolidated_teaching_pay::class)->where('status','active')->take(1);
    }

    //fetch non-teaching kls payscales
    public function ntpayscale():BelongsToMany
    {
        return $this->belongsToMany(ntpayscale::class)->withPivot('id','start_date','level','end_date','reason','status','gcr')->orderByPivot('start_date','desc');
    }

    //fetch the non-teaching currently kls payscale
    public function latestntpayscale():BelongsToMany
    {
        return $this->belongsToMany(ntpayscale::class)->wherePivot('status','active')->withPivot('id','start_date','level','end_date','reason','status','gcr')->take(1);
    }

    //fetch the non-teaching consolidated payscale (this is for non-teaching(temprory))
    public function ntcpayscale():BelongsToMany
    {
        return $this->belongsToMany(ntcpayscale::class)->withPivot('id','start_date','end_date','status','reason','gcr')->orderByPivot('start_date','desc');
    }

    //fetch the non-teaching currently active consolidated payscale
    public function latestntcpayscale():BelongsToMany
    {
        return $this->belongsToMany(ntcpayscale::class)->wherePivot('status','active')->withPivot('id','start_date','end_date','status','reason','gcr')->take(1);
    }

    //fetch the non-teaching fixed pay
    public function fixed_nt_pay():HasMany
    {
        return $this->hasMany(fixed_nt_pay::class)->orderBy('start_date','desc');
    }

    //fetch the non-teaching currently active fixed pay
    public function latestfixedntpay():HasMany
    {
        return $this->hasMany(fixed_nt_pay::class)->where('status','active')->take(1);
    }

    //fetch the staff religion
    public function religion():BelongsTo
    {
        return $this->belongsTo(religion::class);
    }

    //fetch the staff castecateory details
    public function castecateory():BelongsTo
    {
        return $this->belongsTo(castecategory::class);
    }

    //fetch the staff user details
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

        /**Staff Qualification **/
    public function qualifications():BelongsToMany
    {
        return $this->belongsToMany(qualification::class)->withPivot('id','qualification_id','board_university','grade','yop','status')->orderByPivot('yop','desc');
    }





    /* professional activity attended*/
    public function professional_activity_attendee():BelongsToMany
    {
      return $this->belongsToMany(professional_activity_attendee::class);
    }

    /*professional activity conducted      */
    public function professional_activity_conducted():BelongsToMany
    {
        return $this->belongsToMany(professional_activity_conducted :: class);
    }

    /*conferences attended */
    public function conferences_attendee():BelongsToMany
    {
        return $this->belongsToMany(conferences_attendee:: class);
    }

    /*conferences conducted */
    public function conferences_conducted():BelongsToMany
    {
        return $this->belongsToMany(conferences_conducted:: class);
    }

    /*publications */
    public function publications():HasMany
    {
        return $this->hasMany(publication::class);
    }

    /* book publications*/
    public function book_publications():HasMany
    {
        return $this->hasMany(book_publication::class);
    }
    /*funds&consultancy */
    public function funded_project():HasMany
    {
        return $this->hasMany(funded_project::class);
    }
    public function consultancy():HasMany
    {
        return $this->hasMany(consultancy::class);
    }
    /*achivements */
    public function general_achievements():HasMany
    {
        return $this->hasMany(general_achievements::class);
    }
    /*patent */
    public function patent():HasMany
    {
        return $this->hasMany(patent::class);
    }
     /*copyright */
     public function copyright():HasMany
     {
         return $this->hasMany(copyright::class);
     }

     //reviewer/editor

    public function reviewer_editor():HasMany
    {
        return $this->hasMany(reviewer_editor::class);
    }

     //fetch the staff leave entitlements
     public function leave_staff_entitlements():BelongsToMany
     {
         return $this->belongsToMany(leave::class,'leave_staff_entitlements')->withPivot('id','year','entitled_curr_year','accumulated','consumed_curr_year','encashed_curr_year','total_encashed','wef');
     }
     //active leave staff entitlement

     public function leave_staff_applications():BelongsToMany
    {
        return $this->belongsToMany(leave::class,'leave_staff_applications')->withPivot('id','leave_id','cl_type','start','end','no_of_days');
    }
    //function to compute the sum of no_of_days of leave for each leave type foreach staff with year filter
    public function leave_staff_applications_sum()
    {
        return $this->belongsToMany(Leave::class, 'leave_staff_applications')
                    ->select('staff_id', 'leave_id', \DB::raw('SUM(no_of_days) as total_days'))
                    ->groupBy('year','staff_id', 'leave_id')->get(); 
    }
     public function leaves():BelongsToMany
     {
         return $this->belongsToMany(leave::class,'leave_staff_application');
     }

     public function event(): BelongsToMany
     {
         return $this->belongsToMany(event::class)->withPivot('department_id');
     }

     //active leave staff entitlement
     public function active_leave_staff_entitlements():BelongsToMany
     {
         return $this->belongsToMany(leave::class,'leave_staff_entitlements')->where('leave_staff_entitlements.status','active')->withPivot('id','year','entitled_curr_year','accumulated','consumed_curr_year','encashed_curr_year','total_encashed');
     }

     //annualincrement
      public function annualIncrement():HasMany
      {
         return $this->hasMany(annual_increment::class);
      }

     //festivaladvance
     public function FestivalAdvance():HasMany
     {
        return $this->hasMany(festival_advance::class);
     }

     //laptoploan
     public function laptoploan():HasMany
     {
        return $this->hasMany(laptoploan::class);
     }

     public function taxHeads()
     {
         return $this->belongsToMany(TaxHead::class, 'staff_taxregime');
     }

     public function gradingStaffs()
     {
         return $this->hasMany(GradingStaff::class,'staff_id');
     }

     public function renumerationheads()
    {
        return $this->hasMany(Renumerationheads::class,'staff_id');
    }

    public function allowance():BelongsToMany
    {
        return $this->belongsToMany(allowance::class,'allowance_staff')->withPivot('id','staff_id','allowance_id','year','month','status');
    }

    public function staffTeachingPayscale()
    {
        return $this->hasMany(StaffTeachingPayscale::class);

    }

    public function exam_section_isuues():HasMany
    {
        return $this->hasMany(exam_section_isuues::class);
    }

    public function issue_timeline(): BelongsTo
    {
        return $this->belongsTo(issue_timeline::class);
    }

    public function ntissue_timeline(): BelongsTo
    {
        return $this->belongsTo(ntissue_timeline::class);
    }

    public function stafflics():HasMany
     {
        return $this->hasMany(stafflic::class);
     }

     public function lic():HasMany
     {
        return $this->hasMany(lic::class);
     }
}
