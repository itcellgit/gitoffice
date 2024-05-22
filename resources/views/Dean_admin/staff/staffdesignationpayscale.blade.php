
<div class="box border-0 shadow-none mb-0">
    <div class="box-header">
        <h5 class="box-title leading-none flex"><i class="ri ri-account-circle-line ltr:mr-2 rtl:ml-2"></i> Desination And Pay Scale</h5>
    </div>
    <div class="box-body">
        <div class="">
            <!--modal for changing the designations-->
            <button data-hs-overlay="#change_designation"
            class="hs-dropdown-toggle ti-btn ti-btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>

                Change Designation & Payscale

            </button>
            <div id="change_designation" class="hs-overlay hidden ti-modal">
                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                    <div class="ti-modal-content">
                        <div class="ti-modal-header">
                            <h3 class="ti-modal-title">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                Change Designation And Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                            </h3>
                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                data-hs-overlay="#change_designation">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                    fill="currentColor"/>
                                </svg>
                            </button>
                        </div>
                        <form action="{{route('Dean_admin.staff.designationpayscale.update',$staff->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="ti-modal-body">

                                <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                    <div class="space-y-2">
                                        <input type="hidden" id="employee_type_val" value="{{$staff->latest_employee_type[0]->employee_type}}">
                                        <label class="ti-form-label mb-0 font-bold">Designation</label>
                                        <select class="ti-form-select" name="designations_id" id="change_payscale_designation_id">

                                                @if ($staff->latest_employee_type[0]->employee_type=='Teaching')

                                                    @foreach($designations AS $designation)
                                                        @if($designation->emp_type =="Teaching")

                                                            <option value="{{$designation->id}}" {{($designation->id == $staff->designations[0]->id?'selected':'')}}>{{$designation->design_name}}</option>

                                                            @endif
                                                    @endforeach
                                                @else


                                                    @foreach($designations AS $designation)

                                                        @if($designation->emp_type =="Non-Teaching")



                                                            <option value="{{$designation->id}}" {{($designation->id == $staff->designations[0]->id?'selected':'')}}>{{$designation->design_name}}</option>
                                                        @endif

                                                    @endforeach

                                                @endif
                                        </select>
                                    </div>
                                    <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                        <div class="space-y-2 pr-4">
                                            <label class="ti-form-label mb-0 font-bold">Pay Type</label>
                                            {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                @if (count($staff->latestntcpayscale)>0)
                                                    <input type="hidden" class="" name="old_pay_type" value="Consolidated"/>
                                                @endif
                                                @if (count($staff->latestntpayscale)>0 || count($staff->latestteaching_payscale)>0 )
                                                    <input type="hidden" class="" name="old_pay_type" value="Payscale"/>
                                                @endif
                                                @if (count($staff->latestfixedntpay)>0 ||  count($staff->latest_consolidated_teaching_pay)>0)
                                                    <input type="hidden" class="" name="old_pay_type" value="Fixed"/>
                                                @endif
                                        {{-- Ends --}}
                                            {{-- Ends --}}
                                            <div class="flex gap-x-6">
                                                @if($staff->latest_employee_type[0]->employee_type == "Non-Teaching")
                                                    <div class="flex" id="Consolidated">
                                                        <input type="radio" name="pay_type" value="Consolidated"  {{count($staff->latestntcpayscale)>0?'checked':''}} class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                        <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>
                                                    </div>
                                                @endif
                                                <input type="hidden" class="" id="change_payscale_employee_type" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                <div class="flex">
                                                    <input type="radio" name="pay_type" value="Payscale"  id="Payscale" {{count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale)>0?'checked':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                </div>

                                                <div class="flex">
                                                    <input type="radio" name="pay_type" value="Fixed" id="Fixed" {{count($staff->latestfixedntpay)>0 ||  count($staff->latest_consolidated_teaching_pay)>0?'checked':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                        @if ($staff->latest_employee_type[0]->employee_type=='Teaching')

                                                @if(count($staff->latest_consolidated_teaching_pay)>0)
                                                    <div class="space-y-2" id="teahing_consolidated_pay_div"> <!--Fixed pay div-->
                                                        <label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label>
                                                        <input type="text" name="pay" class="ti-form-input" value="{{$staff->latest_consolidated_teaching_pay[0]->pay}}"/>
                                                    </div>
                                                @else
                                                @if(count($staff->latestteaching_payscale)>0)
                                                    <div class="space-y-2" id="t_payscale_div">
                                                        <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                            <select class="ti-form-select" name="payscales_id" id="teaching_payscales_id">
                                                                @foreach($payscales AS $payscale)
                                                                {{-- @if($designations[0]->emp_type =="Teaching") --}}
                                                                    <option value="{{$payscale->id}}" {{($payscale->id == $staff->latestteaching_payscale[0]->id ? 'selected':'')}} >{{$payscale->payscale_title.'-'.$payscale->basepay.'-'.$payscale->maxpay.'-'.$payscale->agp}}</option>
                                                                {{-- @endif   --}}
                                                            @endforeach
                                                            </select>
                                                    </div>
                                                    @endif
                                                @endif
                                        @else
                                            @if(count($staff->latestntpayscale) >0)
                                                <div class="space-y-2" id="nt_payscale_div">
                                                    <label class="ti-form-label mb-0 font-bold">Payscale  </label>
                                                    <select class="ti-form-select row113"  name="payscales_id">
                                                    @foreach($ntpayscales AS $design_payscales)
                                                        @foreach ($design_payscales->ntpayscales as $payscale_ntp)

                                                        <option value="{{$payscale_ntp->id}}" {{($payscale_ntp->id == $staff->latestntpayscale[0]->id && $design_payscales->id==$staff->latestDesignation[0]->id? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntp->payband}}</option>

                                                        @endforeach
                                                    @endforeach
                                                    </select>
                                                    <div class="space-y-2" id="payscalelevel">
                                                        <label class="ti-form-label mb-0 font-bold">Increment Level </label>
                                                        <select class="ti-form-select" name="payscale_level" id="payscale_level">
                                                            <option value="null">Choose the payscale level </option>
                                                            <option value="1" {{$staff->latestntpayscale[0]->pivot->level==1? "selected":""}}>Increment Level-1</option>
                                                            <option value="2" {{$staff->latestntpayscale[0]->pivot->level==2? "selected":""}}>Increment Level-2</option>
                                                            <option value="3" {{$staff->latestntpayscale[0]->pivot->level==3? "selected":""}}>Increment Level-3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(count ($staff->latestntcpayscale)  >0) <!-- For displaying th consolidated pay for non teaching staff-->
                                                <div class="space-y-2" id="nt_consolidated_pay_div">
                                                    <label for="" class="ti-form-label mb-0 font-bold">Consolidated Pay {{$staff->latestntcpayscale[0]->id}} </label>
                                                        <select class="ti-form-select" name="payscales_id" id="nt_consolidated_pay">
                                                            @foreach($ntcpayscales AS $design_payscales)
                                                                @foreach ($design_payscales->ntcpayscales as $payscale_ntc)
                                                                    {{-- {{$payscale_ntc}} --}}
                                                                    <option value="{{$payscale_ntc->id}}" {{($payscale_ntc->id == $staff->latestntcpayscale[0]->id && $design_payscales->id==$staff->latestDesignation[0]->id ? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntc->basepay.'-'.$payscale_ntc->allowance.'- Year : '.$payscale_ntc->year}}</option>
                                                                @endforeach
                                                            @endforeach
                                                        </select>
                                                </div>
                                            @endif
                                            @if(count($staff->latestfixedntpay) >0) <!-- For displaying th consolidated pay for non teaching staff-->
                                            <div class="space-y-2" id="nt_fixed_pay_div">
                                                <label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label>
                                                    @foreach ($staff->fixed_nt_pay as $fntp)
                                                        @if ($fntp->end_date == null)
                                                        <input type="text" class="ti-form-input" name="fixed_pay" value="{{$fntp->pay}}"/>

                                                        @endif
                                                    @endforeach
                                            </div>
                                            @endif
                                        @endif
                                        <div class="" id="ajax_data_populate">

                                        </div>

                                </div>
                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                    <div class="space-y-2">
                                            <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                </div>

                                                <input type="date" name="start_date"
                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                    id="date" placeholder="Choose date">
                                            </div>
                                    </div>
                                    <div class="space-y-2">
                                            <label for="" class="ti-form-label mb-0 font-bold">Reason:</label>
                                            <input type="text" name="reason" class="ti-form-input"/>
                                    </div>

                                </div>
                                <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                    <div class="space-y-2">
                                        <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                        <input type="text" name="gcr" class="ti-form-input"/>
                                    </div>
                                </div>
                            </div>
                            <div class="ti-modal-footer">
                                <button type="button"
                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                data-hs-overlay="#change_designation">
                                Close
                                </button>

                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- The tabluar representation of designation and payscale data-->
        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                <thead class="bg-gray-50 dark:bg-black/20">
                    <tr>
                        <th rowspan="2" scope="col" class="dark:text-white/80 font-bold">S.no</th>
                        <th scope="col" colspan="5" class="dark:text-white/80 font-bold">Designation Details
                        </th>
                        <th scope="col" colspan="5" class="dark:text-white/80 text-center font-bold">Pay Scale Details</th>
                    </tr>
                    <tr class="">
                        <th scope="col" class="dark:text-white/80 font-bold">Designation Name</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                        <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                        <th scope="col" class="dark:text-white/20 text-center font-bold">Payscale Title</th>
                        <th scope="col" class="dark:text-white/80 text-center font-bold">Start Date</th>
                        <th scope="col" class="dark:text-white/80 text-center font-bold">End Date</th>
                        <th scope="col" class="dark:text-white/80 text-center font-bold">Duration </th>
                        <th scope="col" class="dark:text-white/80 font-bold">Actions</th>

                    </tr>
                </thead>
                @php
                    $i=1;
                @endphp
                <tbody class="">
                    @foreach ($staff->designations as $designation)
                        @if($designation->isadditional == 0 ) <!--For working with regular designations-->
                            @php
                            $rowcount=0;

                                    if($staff->teaching_payscale !=null){
                                        foreach($staff->teaching_payscale as $tp)
                                        {
                                            if($designation->pivot->end_date==null && $tp->pivot->start_date>=$designation->pivot->start_date)
                                            {
                                                $rowcount++;

                                            }
                                            elseif($tp->pivot->start_date>=$designation->pivot->start_date && $tp->pivot->end_date<=$designation->pivot->end_date && $tp->pivot->end_date!=null)
                                            {
                                                $rowcount++;

                                            }
                                        }
                                    }
                                  //  $rowcount++;
                                    if($staff->consolidated_teaching_pay !=null){
                                        foreach($staff->consolidated_teaching_pay as $ctp){
                                            if($designation->pivot->end_date==null && $ctp->start_date>=$designation->pivot->start_date)
                                            {
                                                $rowcount++;
                                            }
                                            elseif($ctp->start_date>=$designation->pivot->start_date && $ctp->end_date<=$designation->pivot->end_date && $ctp->end_date!=null)
                                            {
                                                $rowcount++;

                                            }
                                        }
                                    }



                                    //for getting the non-teaching rowcount
                                    if($staff->ntpayscale!=null)
                                    {

                                        foreach($staff->ntpayscale as $ntp)
                                        {

                                            if($designation->pivot->end_date==null && ($ntp->pivot->end_date==null || $ntp->pivot->start_date>=$designation->pivot->start_date))
                                            {
                                                $rowcount++;
                                            }
                                            elseif($ntp->pivot->start_date>=$designation->pivot->start_date && $ntp->pivot->end_date<=$designation->pivot->end_date && $ntp->pivot->end_date!=null)
                                            {

                                                $rowcount++;

                                            }
                                        }

                                    }
                                    if($staff->ntcpayscale!=null)
                                    {
                                        foreach($staff->ntcpayscale as $ntcp)
                                        {
                                            if($designation->pivot->end_date==null && $ntcp->pivot->start_date>=$designation->pivot->start_date)
                                            {
                                                $rowcount++;
                                            }
                                            elseif($ntcp->pivot->start_date>=$designation->pivot->start_date && $ntcp->pivot->end_date<=$designation->pivot->end_date && $ntcp->pivot->end_date!=null)
                                            {
                                                $rowcount++;

                                            }
                                        }
                                    }
                                    if($staff->fixed_nt_pay!=null)
                                    {
                                        foreach($staff->fixed_nt_pay as $fntp)
                                        {
                                            if($designation->pivot->end_date==null && $fntp->start_date>=$designation->pivot->start_date)
                                            {
                                                $rowcount++;
                                            }
                                            elseif($fntp->start_date>=$designation->pivot->start_date && $fntp->end_date<=$designation->pivot->end_date && $fntp->end_date!=null)
                                            {
                                                $rowcount++;

                                            }
                                        }
                                    }
                                   $rowcount++;


                            @endphp

                            <tr class="{{$designation->pivot->status =='inactive'?'bg-gray-200':''}}">
                                <td rowspan={{$rowcount}}>{{ $i++  }}   </td>
                                <td rowspan={{$rowcount}}>
                                    <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                        <div class="block w-full my-auto">
                                        {{$designation->design_name}}
                                        </div>
                                    </div>
                                </td>
                                <td rowspan={{$rowcount}}><span>{{\Carbon\Carbon::parse($designation->pivot->start_date)->format('d-M-Y') }}</span></td>
                                <td rowspan={{$rowcount}}><span>{{$designation->pivot->end_date==null?'--NA--': \Carbon\Carbon::parse($designation->pivot->end_date)->format('d-M-Y') }}</span></td>
                                <td rowspan={{$rowcount}}><span>
                                    @php
                                        $sdate=new DateTime($designation->pivot->start_date);

                                        if ($designation->pivot->end_date!=null)
                                            $edate=new DateTime($designation->pivot->end_date);
                                        else
                                            $edate=Carbon\Carbon::now();
                                            $difference=$sdate->diff($edate);
                                        @endphp

                                            {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                 </span>
                                </td>
                                <td rowspan={{$rowcount}}>
                                    @if($designation->pivot->end_date == null)
                                         <!--Edit modal for staff designation-->
                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                            data-hs-overlay="#edit_designation{{$i}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                            <span
                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                role="tooltip">
                                                Edit
                                            </span>
                                        </button>
                                        <div id="edit_designation{{$i}}" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                <div class="ti-modal-content">
                                                    <div class="ti-modal-header">
                                                        <h3 class="ti-modal-title">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                            Edit Designation of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                        </h3>
                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                            data-hs-overlay="#edit_designation{{$i}}">
                                                            <span class="sr-only">Close</span>
                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                    fill="currentColor" />
                                                                </svg>
                                                        </button>
                                                    </div>
                                                    <form  action="{{route('Dean_admin.staff.designation.currentupdate',[$staff->id,$designation->id])}}" method="post">
                                                        @csrf
                                                        @method('patch')
                                                        <div class="ti-modal-body">
                                                            @if($designation->pivot->status == 'inactive')
                                                                <br/>
                                                                <div class="flex">
                                                                    <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                </div>
                                                            @else
                                                                <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Designations</label>
                                                                        <select class="ti-form-select" name="designations_id">
                                                                            @foreach ($designations as $design)
                                                                                <option value="{{$design->id}}" {{($design->id==$designation->id?'selected':'')}}>{{$design->design_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                    <div class="space-y-2">
                                                                        <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                        <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                            </div>

                                                                            <input type="date" name="start_date"
                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                id="date" placeholder="Choose date" value="{{$designation->pivot->start_date}}" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                        <input type="text" name="reason" class="ti-form-input" value="{{$designation->pivot->reason}}"/>
                                                                    </div>
                                                                </div>
                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                    <div class="space-y-2">
                                                                        <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                        <input type="text" name="gcr" class="ti-form-input" value="{{$designation->pivot->gcr}}"/>
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="ti-modal-footer">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                data-hs-overlay="#edit_designation{{$i}}">
                                                                Close
                                                            </button>
                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Edit modal for designation staff ends-->
                                        <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                        @if($designation->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <form action="{{ route('ESTB.staff.designation.currentdestroy',[$staff->id,$designation->id]) }}" method="post">
                                                    <button onclick="return confirm('Are you Sure')"
                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                        @method('delete')
                                                        @csrf
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Delete
                                                        </span>
                                                    </button>
                                                </form>
                                            </div>
                                            <!-- Delete the entry ends-->
                                        @endif
                                    @endif
                                </td>
                            </tr>

                            <!-- Payscale and Designation Display for Teaching-->
                            {{-- @if($staff->latest_employee_type[0]->employee_type=='Teaching') --}}

                                @if($staff->teaching_payscale != null) <!-- For checking if teaching payscale is null-->

                                    @forelse($staff->teaching_payscale as $payscale)
                                        @if($designation->pivot->end_date!=null && $designation->isadditonal==0)
                                            @if($payscale->pivot->start_date>=$designation->pivot->start_date && $payscale->pivot->end_date!=null && $payscale->pivot->end_date<=$designation->pivot->end_date)
                                                <tr class="{{$payscale->pivot->status =='inactive'?'bg-gray-200':''}}">

                                                    <td><span>{{$payscale->payscale_title.'-'.$payscale->agp}}</span></td>
                                                    <td><span>{{\Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')}}</span></td>
                                                    <td><span>{{$payscale->pivot->end_date ==null ?'--NA--': \Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y')}}</span></td>
                                                    <td><span>
                                                        @php
                                                            $sdate=new DateTime($payscale->pivot->start_date);

                                                            if ($payscale->pivot->end_date!=null)
                                                                $edate=new DateTime($payscale->pivot->end_date);
                                                            else
                                                                $edate=Carbon\Carbon::now();
                                                                $difference=$sdate->diff($edate);
                                                        @endphp

                                                        {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                    </span></td>
                                                </tr>
                                            @endif
                                        @else
                                            @if($payscale->pivot->end_date==null|| ($payscale->pivot->end_date>$designation->pivot->start_date ))
                                                <tr class="{{$payscale->pivot->status =='inactive'?'bg-gray-200':''}}">

                                                    <td><span>{{$payscale->payscale_title.'-'.$payscale->agp}}</span></td>
                                                    <td><span>{{ \Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')}}</span></td>
                                                    <td><span>{{($payscale->pivot->end_date ==null ?'--NA--':\Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y'))}}</span></td>
                                                    <td><span>
                                                        @php
                                                            $sdate=new DateTime($payscale->pivot->start_date);

                                                            if ($payscale->pivot->end_date!=null)
                                                                $edate=new DateTime($payscale->pivot->end_date);
                                                            else
                                                                            $edate=Carbon\Carbon::now();
                                                                            $difference=$sdate->diff($edate);
                                                                        @endphp

                                                                        {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                    </span></td>
                                                    <td>
                                                        @if($payscale->pivot->end_date == null)
                                                                    <!--Edit modal for staff Payscale teaching-->
                                                            <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                data-hs-overlay="#edit_teaching_payscale{{$i}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                            </button>
                                                            <div id="edit_teaching_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                    <div class="ti-modal-content">
                                                                        <div class="ti-modal-header">
                                                                            <h3 class="ti-modal-title">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                            </h3>
                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                data-hs-overlay="#edit_teaching_payscale{{$i}}">
                                                                                <span class="sr-only">Close</span>
                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <form  action="{{route('Dean_admin.staff.payscale.update',[$staff->id,$payscale->id])}}" method="post">
                                                                            @csrf
                                                                            @method('patch')
                                                                            <div class="ti-modal-body">

                                                                                    <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2 pr-4">
                                                                                            <label class="ti-form-label mb-0 font-bold">Pay Type </label>
                                                                                            {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                                {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                                @if (count($staff->latestntcpayscale)>0)
                                                                                                <input type="hidden" class="" name="old_pay_type" value="Consolidated"/>
                                                                                            @endif
                                                                                            @if (count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0)
                                                                                                <input type="hidden" class="" name="old_pay_type" value="Payscale"/>
                                                                                            @endif
                                                                                            @if (count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0)
                                                                                                <input type="hidden" class="" name="old_pay_type" value="Fixed"/>
                                                                                            @endif
                                                                                        {{-- Ends --}}
                                                                                            {{-- Ends --}}
                                                                                            <div class="flex gap-x-6">

                                                                                                <input type="hidden" class="" id="edit_payscale_employee_type" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                                                                <input type="hidden" class="" id="staff_id" value="{{$staff->id}}"/>
                                                                                                <div class="flex">
                                                                                                    <input type="radio" name="edit_teaching_pay_type" value="Payscale"  id="" {{ count($staff->latestteaching_payscale) >0?'checked="checked"':''}} class="ti-form-radio Payscale" id="hs-radio-group-2">
                                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                                                                </div>

                                                                                                <div class="flex">
                                                                                                    <input type="radio" name="edit_teaching_pay_type" value="Fixed" id="" {{ count($staff->latest_consolidated_teaching_pay)>0?'checked="checked"':''}} class="ti-form-radio Fixed" id="hs-radio-group-2">
                                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                                                                </div>


                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="space-y-2">
                                                                                            {{-- Actual content Starts Here --}}
                                                                                            @if ($staff->latest_employee_type[0]->employee_type=='Teaching')

                                                                                                @if(count($staff->latest_consolidated_teaching_pay)>0)
                                                                                                    <div class="space-y-2" id="actual_cons_pay">
                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Consolidated Pay </label>
                                                                                                        <input type="text" name="pay" class="ti-form-input" value="{{$staff->latest_consolidated_teaching_pay[0]->pay}}"/>
                                                                                                    </div>
                                                                                                @endif
                                                                                                @if($staff->latestteaching_payscale!=null)
                                                                                                    <div class="space-y-2" id="edi_teaching_payscale_div">
                                                                                                        <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                                                                        <select class="ti-form-select" name="payscales_id">
                                                                                                            @foreach($payscales AS $t_payscale)
                                                                                                            {{-- @if($designations[0]->emp_type =="Teaching") --}}
                                                                                                                <option value="{{$t_payscale->id}}" {{($t_payscale->id == $payscale->id ? 'selected':'')}}>{{$t_payscale->payscale_title.'-'.$t_payscale->basepay.'-'.$t_payscale->maxpay.'-'.$t_payscale->agp}}</option>
                                                                                                            {{-- @endif   --}}
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                @endif
                                                                                            @else
                                                                                                @if(count($staff->latestntpayscale)>0)
                                                                                                    <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                                                                    <select class="ti-form-select" name="payscales_id">
                                                                                                    @foreach($payscales AS $design_payscales)
                                                                                                        @foreach ($design_payscales->ntpayscales as $payscale_ntp)

                                                                                                        <option value="{{$payscale_ntp->id}}" {{($payscale_ntp->id == $staff->latestntpayscale[0]->pivot->ntpayscle_id && $design_payscales->id==$designation->id ? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntp->payband}}</option>

                                                                                                        @endforeach
                                                                                                    @endforeach
                                                                                                    </select>
                                                                                                @elseif(count($staff->latestntcpayscale)>0) <!-- For displaying th consolidated pay for non teaching staff-->
                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Consolidated Pay </label>
                                                                                                        <select class="ti-form-select" name="payscales_id">
                                                                                                            @foreach($payscales AS $design_payscales)

                                                                                                                    @foreach ($design_payscales->ntcpayscales as $payscale_ntc)
                                                                                                                        {{-- {{$payscale_ntc}} --}}
                                                                                                                        <option value="{{$payscale_ntc->id}}" {{($payscale_ntc->id == $staff->latestntcpayscale[0]->pivot->ntpayscale_id ? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntc->basepay.'-'.$payscale_ntc->allowance.'- Year : '.$payscale_ntc->year}}</option>
                                                                                                                    @endforeach
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                @endif
                                                                                            @endif
                                                                                        </div>
                                                                                        <div id="edit_teaching_payscale_ajax_update">
                                                                                            {{-- Content is dynamically loaded through ajax --}}

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                    </div>

                                                                                                    <input type="date" name="start_date"
                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                        id="date" placeholder="Choose date" value="{{$payscale->pivot->start_date}}" >
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class="space-y-2">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                <input type="text" name="reason" class="ti-form-input" value="{{$payscale->pivot->reason}}"/>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$payscale->pivot->gcr}}"/>
                                                                                        </div>

                                                                                    </div>
                                                                            </div>
                                                                            <div class="ti-modal-footer">
                                                                                <button type="button"
                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                    data-hs-overlay="#edit_teaching_payscale{{$i}}">
                                                                                    Close
                                                                                </button>
                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Edit modal for payscales staff ends-->
                                                            <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                            @if($payscale->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <form action="{{ route('Dean_admin.staff.payscale.destroy',[$staff->id,$payscale->id]) }}" method="post">

                                                                        <button onclick="return confirm('Are you Sure')"
                                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                            @method('delete')
                                                                            @csrf
                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                Delete
                                                                            </span>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                                <!-- Delete the entry ends-->
                                                            @endif
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                        @empty
                                    @endforelse
                                @endif
                            <!-- For displaying the consolidated payscales for teaching staff.-->
                            @if($staff->consolidated_teaching_pay != null)
                                @forelse ($staff->consolidated_teaching_pay as $cons_teaching_pay)
                                    @if($designation->pivot->end_date!=null && $designation->isadditonal==0)
                                        @if($cons_teaching_pay->start_date>=$designation->pivot->start_date && $cons_teaching_pay->end_date!=null && $cons_teaching_pay->end_date<=$designation->pivot->end_date)
                                            <tr class="{{$cons_teaching_pay->status =='inactive'?'bg-gray-200':''}}">

                                                <td><span>{{$cons_teaching_pay->pay}}</span></td>
                                                <td><span>{{\Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')}}</span></td>
                                                <td><span>{{$cons_teaching_pay->end_date ==null ?'--NA--': \Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y')}}</span></td>
                                                <td><span>
                                                        @php
                                                            $sdate=new DateTime($cons_teaching_pay->start_date);

                                                            if ($cons_teaching_pay->end_date!=null)
                                                                $edate=new DateTime($cons_teaching_pay->end_date);
                                                            else
                                                                $edate=Carbon\Carbon::now();
                                                                $difference=$sdate->diff($edate);
                                                            @endphp

                                                            {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                </span></td>
                                                <td><!--Action button not added.--></td>
                                            </tr>
                                        @endif
                                    @else
                                        @if($cons_teaching_pay->end_date==null|| ($cons_teaching_pay->end_date>$designation->pivot->start_date))
                                            <tr class="{{$cons_teaching_pay->status =='inactive'?'bg-gray-200':''}}">

                                                <td><span>{{$cons_teaching_pay->pay}}</span></td>
                                                <td><span>{{ \Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')}}</span></td>
                                                <td><span>{{($cons_teaching_pay->end_date ==null ?'--NA--':\Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y'))}}</span></td>
                                                <td><span>
                                                    @php
                                                        $sdate=new DateTime($cons_teaching_pay->start_date);

                                                        if ($cons_teaching_pay->end_date!=null)
                                                            $edate=new DateTime($cons_teaching_pay->end_date);
                                                        else
                                                            $edate=Carbon\Carbon::now();
                                                            $difference=$sdate->diff($edate);
                                                    @endphp

                                                    {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                </span></td>
                                                <td>
                                                    {{-- for displaying the edit and delete button --}}
                                                    @if ($cons_teaching_pay->status !='inactive')
                                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                            data-hs-overlay="#edit_cons_teaching_payscale{{$i}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </button>

                                                        <!--Edit modal for staff designation-->

                                                        <!-- modal for editing consolidated teaching payscale-->
                                                        <div id="edit_cons_teaching_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                        </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#edit_cons_teaching_payscale{{$i}}">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form  action="{{route('Dean_admin.staff.payscale.update',[$staff->id,$cons_teaching_pay->id])}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                            <div class="ti-modal-body">
                                                                                @if($cons_teaching_pay->status == 'inactive')
                                                                                    <br/>
                                                                                    <div class="flex">
                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                    </div>
                                                                                @else
                                                                                {{-- Pay Type Setting --}}
                                                                                <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                    <div class="space-y-2 pr-4">
                                                                                        <label class="ti-form-label mb-0 font-bold">Pay Type </label>
                                                                                        {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                            @if (count($staff->latestntcpayscale)>0)
                                                                                                <input type="hidden" class="" name="old_pay_type" value="Consolidated"/>
                                                                                            @endif
                                                                                            @if (count($staff->latestteaching_payscale) >0)
                                                                                                <input type="hidden" class="" name="old_pay_type" value="Payscale"/>
                                                                                            @endif
                                                                                            @if (count($staff->latest_consolidated_teaching_pay)>0)
                                                                                                <input type="hidden" class="" name="old_pay_type" value="Fixed"/>
                                                                                            @endif
                                                                                        {{-- Ends --}}
                                                                                        <div class="flex gap-x-6">

                                                                                            <input type="hidden" class="" id="editconspay_employee_type" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                                                            <input type="hidden" class="" id="staff_id" value="{{$staff->id}}"/>
                                                                                            <div class="flex">
                                                                                                <input type="radio" name="edit_cons_pay_type" value="Payscale"  id="" {{ count($staff->latestteaching_payscale) >0?'checked="checked"':''}} class="ti-form-radio Payscale" id="hs-radio-group-2">
                                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                                                            </div>

                                                                                            <div class="flex">
                                                                                                <input type="radio" name="edit_cons_pay_type" value="Fixed" id="" {{ count($staff->latest_consolidated_teaching_pay)>0?'checked="checked"':''}} class="ti-form-radio Fixed" id="hs-radio-group-2">
                                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                                                            </div>


                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="edit_cons_teaching_pay_ajax_update">
                                                                                    {{-- pending --}}
                                                                                </div>

                                                                                <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                    <div id="ajax_edit_consolidated_data_populate">
                                                                                        <input type="hidden" id="emp_type_cons_teaching_pay" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                                                        @if($staff->latest_employee_type[0]->employee_type == "Teaching")
                                                                                            <div class="space-y-1" id="Edit_consolidated_pay_div">
                                                                                                <label class="ti-form-label mb-0 font-bold">Consolidated Pay</label>
                                                                                                <input type="text" name="consolidated_pay" id="consolidated_pay_edit" class="ti-form-input" value="{{$cons_teaching_pay->pay}}"/>

                                                                                            </div>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                </div>

                                                                                                <input type="date" name="start_date"
                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                    id="date" placeholder="Choose date" value="{{$cons_teaching_pay->start_date}}" >
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                    <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                        <input type="text" name="reason" class="ti-form-input" value="{{$cons_teaching_pay->reason}}"/>
                                                                                    </div>
                                                                                    <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                        <input type="text" name="gcr" class="ti-form-input" value="{{$cons_teaching_pay->gcr}}"/>
                                                                                    </div>

                                                                                </div>
                                                                            @endif
                                                                            </div>
                                                                            <div class="ti-modal-footer">
                                                                                <button type="button"
                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                    data-hs-overlay="#edit_cons_teaching_payscale{{$i}}">
                                                                                    Close
                                                                                </button>

                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                            </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <!-- Delete button for deleting the consolidated teaching pay scale , within one month of adding-->
                                                        <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                    @if($cons_teaching_pay->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <form action="{{ route('Dean_admin.staff.payscale.destroy',[$staff->id,$cons_teaching_pay->id]) }}" method="post">

                                                                <button onclick="return confirm('Are you Sure')"
                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                    @method('delete')
                                                                    @csrf
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Delete
                                                                    </span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <!-- Delete the entry ends-->
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endif
                                    @empty
                                @endforelse
                            @endif
                            <!-- End of Teaching consolidated payscale -->
                            </tr>
                            <!-- Teaching section designation and payscale ends here-->
                        {{-- @else --}}
                        <!--Non teaching Section starts here-->

                                @if($staff->ntpayscale != null)
                                    @foreach ($staff->ntpayscale as $ntpays )

                                        @if($designation->pivot->end_date==null && ($ntpays->pivot->end_date==null ||$ntpays->pivot->start_date>=$designation->pivot->start_date))

                                            <tr class="{{$ntpays->pivot->status =='inactive'?'bg-gray-200':''}}">

                                                <td>
                                                    @php
                                                        $level1_payscales =  explode("-",$ntpays->payband)
                                                    @endphp
                                                    @if ($ntpays->pivot->level == 1)

                                                        {{$level1_payscales[0].'-'.$level1_payscales[1].'-'.$level1_payscales[2]}}

                                                    @elseif ($ntpays->pivot->level == 2)

                                                        {{$level1_payscales[2].'-'.$level1_payscales[3].'-'.$level1_payscales[4]}}

                                                    @else

                                                        {{$level1_payscales[4].'-'.$level1_payscales[5].'-'.$level1_payscales[6]}}

                                                    @endif
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($ntpays->pivot->start_date)->format('d-M-Y')}}</td>
                                                <td>{{($ntpays->pivot->end_date == null ? '--NA--': \Carbon\Carbon::parse($ntpays->pivot->end_date)->format('d-M-Y') )}}</td>
                                                <td>
                                                    @php
                                                        $sdate=new DateTime($ntpays->pivot->start_date);

                                                        if ($ntpays->pivot->end_date!=null)
                                                            $edate=new DateTime($ntpays->pivot->end_date);
                                                        else
                                                            $edate=Carbon\Carbon::now();
                                                            $difference=$sdate->diff($edate);
                                                    @endphp

                                                        {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                </td>
                                                <td>
                                                    @if($ntpays->pivot->end_date == null)
                                                            <!--Edit modal for staff Payscale non-teaching-->
                                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                        data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Edit
                                                        </span>
                                                        </button>
                                                        <div id="edit_nonteaching_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                        </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form  action="{{route('Dean_admin.staff.payscale.update',[$staff->id,$ntpays->id])}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="ti-modal-body">
                                                                            {{-- Pay Type Setting --}}
                                                                            <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2 pr-4">
                                                                                    <label class="ti-form-label mb-0 font-bold">Pay Type</label>
                                                                                    {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                   {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                   @if (count($staff->latestntcpayscale)>0)
                                                                                        <input type="hidden" class="" name="old_pay_type" value="Consolidated"/>
                                                                                    @endif
                                                                                    @if (count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0)
                                                                                        <input type="hidden" class="" name="old_pay_type" value="Payscale"/>
                                                                                    @endif
                                                                                    @if (count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0)
                                                                                        <input type="hidden" class="" name="old_pay_type" value="Fixed"/>
                                                                                    @endif
                                                                           {{-- Ends --}}
                                                                                {{-- Ends --}}
                                                                                <div class="flex gap-x-6">
                                                                                    @if($staff->latest_employee_type[0]->employee_type == "Non-Teaching")
                                                                                        <div class="flex" id="Consolidated">
                                                                                            <input type="radio" name="edit_pay_type" value="Consolidated"  {{count($staff->latestntcpayscale)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                                                            <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>
                                                                                        </div>
                                                                                    @endif
                                                                                    <input type="hidden" class="" id="change_payscale_employee_type" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                                                    <div class="flex">
                                                                                        <input type="radio" name="edit_pay_type" value="Payscale"  id="Payscale" {{count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                                                    </div>

                                                                                    <div class="flex">
                                                                                        <input type="radio" name="edit_pay_type" value="Fixed" id="Fixed" {{count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                                                    </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="edit_ajax_data_populate"></div>
                                                                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0" id='edit_nt_payscale_div'>
                                                                                <div class="space-y-2">
                                                                                    <label class="ti-form-label mb-0 font-bold">Payscales </label>

                                                                                    <select class="ti-form-select" name="payscales_id">

                                                                                    @if($staff->ntpayscale!=null)
                                                                                        @foreach($ntpayscales AS $design_payscales)

                                                                                                @foreach ($design_payscales->ntpayscales as $payscale_ntp)
                                                                                                    <option value="{{$payscale_ntp->id}}" {{($payscale_ntp->id == $staff->latestntpayscale[0]->pivot->ntpayscale_id && $design_payscales->id==$designation->id? 'selected="selected"':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntp->payband}}</option>
                                                                                                    @endforeach
                                                                                                @endforeach

                                                                                    @endif
                                                                                    @if($staff->payscales!=null)
                                                                                            @foreach($payscales AS $design_ntcpaysc)


                                                                                                @foreach ($design_ntcpaysc->ntcpayscales as $ntcpaysc)
                                                                                                    <option value="{{$ntcpaysc->id}}" {{($ntcpaysc->id == $staff->latestntcpayscale[0]->pivot->ntcpayscale_id && $design_ntcpaysc->designation_id==$designation->id ? 'selected="selected"':'')}}>{{design_ntcpaysc->design_name.'-'.$ntcpaysc->basepay.'-'.$ntcpaysc->allowance.' 1095='.$ntcpaysc->id == $staff->latestntcpayscale[0]->pivot->ntcpayscale_id}}</option>
                                                                                                @endforeach
                                                                                            @endforeach
                                                                                        @endif

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="space-y-2" id="edit_payscalelevel">
                                                                                <label class="ti-form-label mb-0 font-bold">Increment Level </label>
                                                                                <select class="ti-form-select" name="payscale_level" id="payscale_level">
                                                                                    <option value="null">Choose the payscale level </option>
                                                                                    <option value="1" {{$staff->latestntpayscale[0]->pivot->level==1? "selected":""}}>Increment Level-1</option>
                                                                                    <option value="2" {{$staff->latestntpayscale[0]->pivot->level==2? "selected":""}}>Increment Level-2</option>
                                                                                    <option value="3" {{$staff->latestntpayscale[0]->pivot->level==3? "selected":""}}>Increment Level-3</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                    <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                    </div>

                                                                                    <input type="date" name="start_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                        id="date" placeholder="Choose date" value="{{$ntpays->pivot->start_date}}" >
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                    <input type="text" name="reason" class="ti-form-input" value="{{$ntpays->pivot->reason}}"/>
                                                                                </div>
                                                                                <div class="space-y-2">
                                                                                    <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                    <input type="text" name="gcr" class="ti-form-input" value="{{$ntpays->pivot->gcr}}"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                                Close
                                                                            </button>
                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Edit modal for departments staff ends-->
                                                            <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                        @if($ntpays->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <form action="{{ route('Dean_admin.staff.payscale.destroy',[$staff->id,$ntpays->id]) }}" method="post">

                                                                <button onclick="return confirm('Are you Sure')"
                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                    @method('delete')
                                                                    @csrf
                                                                    <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Delete
                                                                    </span>
                                                                    </button>
                                                                </form>
                                                                </div>
                                                            <!-- Delete the entry ends-->
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                        @elseif($ntpays->pivot->start_date>=$designation->pivot->start_date && $ntpays->pivot->end_date<=$designation->pivot->end_date && $ntpays->pivot->end_date!=null)
                                            <!--Checking if designation is closed if non-teaching payscale should be between start date and end date-->
                                            <tr class="{{$ntpays->pivot->status =='inactive'?'bg-gray-200':''}}">

                                                <td>
                                                    @php
                                                        $level1_payscales =  explode("-",$ntpays->payband)
                                                    @endphp
                                                    @if ($ntpays->pivot->level == 1)

                                                        {{$level1_payscales[0].'-'.$level1_payscales[1].'-'.$level1_payscales[2]}}

                                                    @elseif ($ntpays->pivot->level == 2)

                                                        {{$level1_payscales[2].'-'.$level1_payscales[3].'-'.$level1_payscales[4]}}

                                                    @else

                                                        {{$level1_payscales[4].'-'.$level1_payscales[5].'-'.$level1_payscales[6]}}

                                                    @endif
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($ntpays->pivot->start_date)->format('d-M-Y')}}</td>
                                                <td>{{($ntpays->pivot->end_date == null ? '--NA--': \Carbon\Carbon::parse($ntpays->pivot->end_date)->format('d-M-Y') )}}</td>
                                                <td>
                                                    @php
                                                        $sdate=new DateTime($ntpays->pivot->start_date);

                                                        if ($ntpays->pivot->end_date!=null)
                                                            $edate=new DateTime($ntpays->pivot->end_date);
                                                        else
                                                            $edate=Carbon\Carbon::now();
                                                            $difference=$sdate->diff($edate);
                                                    @endphp

                                                    {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                </td>
                                                <td>
                                                    @if($ntpays->pivot->end_date == null)
                                                            <!--Edit modal for staff Payscale non-teaching-->
                                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                        data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                        <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                        </button>
                                                        <div id="edit_nonteaching_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                        </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form  action="{{route('Dean_admin.staff.payscale.update',[$staff->id,$ntpays->id])}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="ti-modal-body">

                                                                                    {{-- Pay Type Setting --}}
                                                                                    <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2 pr-4">
                                                                                            <label class="ti-form-label mb-0 font-bold">Pay Type</label>
                                                                                            {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                            {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                            @if (count($staff->latestntcpayscale)>0)
                                                                                                <input type="hidden" class="" name="old_pay_type" value="Consolidated"/>
                                                                                            @endif
                                                                                            @if (count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0)
                                                                                                <input type="hidden" class="" name="old_pay_type" value="Payscale"/>
                                                                                            @endif
                                                                                            @if (count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0)
                                                                                                <input type="hidden" class="" name="old_pay_type" value="Fixed"/>
                                                                                            @endif
                                                                                        {{-- Ends --}}
                                                                                        <div class="flex gap-x-6">
                                                                                            @if($staff->latest_employee_type[0]->employee_type == "Non-Teaching")
                                                                                                <div class="flex" id="Consolidated">
                                                                                                    <input type="radio" name="edit_pay_type" value="Consolidated"  {{count($staff->latestntcpayscale)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                                                                    <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>
                                                                                                </div>
                                                                                            @endif
                                                                                            <input type="hidden" class="" id="change_payscale_employee_type" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                                                            <div class="flex">
                                                                                                <input type="radio" name="edit_pay_type" value="Payscale"  id="Payscale" {{count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                                                            </div>

                                                                                            <div class="flex">
                                                                                                <input type="radio" name="edit_pay_type" value="Fixed" id="Fixed" {{count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                                                            </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="edit_ajax_data_populate"></div>
                                                                                    <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0" id='edit_nt_payscale_div'>
                                                                                        <div class="space-y-2">
                                                                                            <label class="ti-form-label mb-0 font-bold">Payscales</label>

                                                                                            <select class="ti-form-select" name="payscales_id">

                                                                                            @if($staff->ntpayscale!=null)
                                                                                                @foreach($ntpayscales AS $design_payscales)

                                                                                                        @foreach ($design_payscales->ntpayscales as $payscale_ntp)
                                                                                                            <option value="{{$payscale_ntp->id}}" {{($payscale_ntp->id == $staff->latestntpayscale[0]->pivot->ntpayscale_id && $design_payscales->id==$designation->id? 'selected="selected"':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntp->payband.' result 1306='.$payscale_ntp->id == $staff->latestntpayscale[0]->pivot->ntpayscale_id}}</option>
                                                                                                            @endforeach
                                                                                                        @endforeach

                                                                                            @endif
                                                                                                @if($staff->payscales!=null)
                                                                                                    @foreach($payscales AS $design_ntcpaysc)
                                                                                                        @foreach ($design_ntcpaysc->ntcpayscales as $ntcpaysc)
                                                                                                            <option value="{{$ntcpaysc->id}}" {{($ntcpaysc->id == $staff->latestntcpayscale[0]->pivot->ntcpayscale_id && $design_ntcpaysc->id==$designation->id? 'selected="selected"':'')}}>{{design_ntcpaysc->design_name.'-'.$ntcpaysc->basepay.'-'.$ntcpaysc->allowance}}</option>
                                                                                                        @endforeach
                                                                                                    @endforeach
                                                                                                @endif

                                                                                            </select>
                                                                                        </div>
                                                                                    </div>


                                                                                        <div class="space-y-2" id="edit_payscalelevel">
                                                                                            <label class="ti-form-label mb-0 font-bold">Increment Level </label>
                                                                                            <select class="ti-form-select" name="payscale_level" id="payscale_level">
                                                                                                <option value="null">Choose the payscale level </option>
                                                                                                <option value="1" {{$staff->latestntpayscale[0]->pivot->level==1? "selected":""}}>Increment Level-1</option>
                                                                                                <option value="2" {{$staff->latestntpayscale[0]->pivot->level==2? "selected":""}}>Increment Level-2</option>
                                                                                                <option value="3" {{$staff->latestntpayscale[0]->pivot->level==3? "selected":""}}>Increment Level-3</option>
                                                                                            </select>
                                                                                        </div>


                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                            </div>

                                                                                            <input type="date" name="start_date"
                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                id="date" placeholder="Choose date" value="{{$ntpays->pivot->start_date}}" >
                                                                                        </div>
                                                                                    </div>



                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                            <input type="text" name="reason" class="ti-form-input" value="{{$ntpays->pivot->reason}}"/>
                                                                                        </div>
                                                                                        <div class="space-y-2">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$ntpays->pivot->gcr}}"/>
                                                                                        </div>

                                                                                    </div>

                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                            Close
                                                                            </button>

                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Edit modal for departments staff ends-->
                                                            <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                        @if($ntpays->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <form action="{{ route('Dean_admin.staff.payscale.destroy',[$staff->id,$ntpays->id]) }}" method="post">

                                                                    <button onclick="return confirm('Are you Sure')"
                                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                        @method('delete')
                                                                        @csrf
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            <!-- Delete the entry ends-->
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                            <!--ends here-->
                                        @endif
                                    @endforeach
                                @endif
                                    <!--End of non teaching designation and payscale section-->
                                        <!--For non-teaching Consolidated payscale-->
                                    @if($staff->ntcpayscale !=null)
                                        @foreach ($staff->ntcpayscale as $ntcpays )
                                        @if($designation->pivot->end_date==null && $ntcpays->pivot->start_date>=$designation->pivot->start_date)
                                            <tr class="{{$ntcpays->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                <td>
                                                    {{$ntcpays->basepay.'-'.$ntcpays->allowance.'-'.$ntcpays->year.' Year'}}
                                                </td>
                                                <td>{{\Carbon\Carbon::parse($ntcpays->pivot->start_date)->format('d-M-Y') }}</td>
                                                <td>{{$ntcpays->pivot->end_date == null? '--NA--': \Carbon\Carbon::parse($ntcpays->pivot->end_date)->format('d-M-Y') }}</td>
                                                <td>
                                                    @php
                                                        $sdate=new DateTime($ntcpays->pivot->start_date);

                                                        if ($ntcpays->pivot->end_date!=null)
                                                            $edate=new DateTime($ntcpays->pivot->end_date);
                                                        else
                                                            $edate=Carbon\Carbon::now();
                                                            $difference=$sdate->diff($edate);
                                                    @endphp

                                                    {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                </td>
                                                <td>
                                                    @if($ntcpays->pivot->end_date == null)
                                                        <!--Edit modal for staff Payscale non-teaching-->
                                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                        data-hs-overlay="#edit_nonteachingconso_payscale{{$i}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Edit
                                                        </span>
                                                        </button>
                                                        <div id="edit_nonteachingconso_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                    </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form  action="{{route('Dean_admin.staff.payscale.update',[$staff->id,$ntcpays->id])}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="ti-modal-body">
                                                                                @if($ntcpays->pivot->status == 'inactive')
                                                                                <br/>
                                                                                    <div class="flex">
                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                    </div>
                                                                                @else
                                                                                    {{-- Pay Type Setting --}}
                                                                                    <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2 pr-4">
                                                                                            <label class="ti-form-label mb-0 font-bold">Pay Type </label>
                                                                                            {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                               {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                               @if (count($staff->latestntcpayscale)>0)
                                                                                                    <input type="hidden" class="" name="old_pay_type" value="Consolidated"/>
                                                                                                @endif
                                                                                                @if (count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0)
                                                                                                    <input type="hidden" class="" name="old_pay_type" value="Payscale"/>
                                                                                                @endif
                                                                                                @if (count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0)
                                                                                                    <input type="hidden" class="" name="old_pay_type" value="Fixed"/>
                                                                                                @endif
                                                                                            {{-- Ends --}}
                                                                                            {{-- Ends --}}
                                                                                            <div class="flex gap-x-6">
                                                                                                @if($staff->latest_employee_type[0]->employee_type == "Non-Teaching")
                                                                                                    <div class="flex" id="Consolidated">
                                                                                                        <input type="radio" name="edit_pay_type" value="Consolidated"  {{count($staff->latestntcpayscale)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                                                                        <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>
                                                                                                    </div>
                                                                                                @endif
                                                                                                <input type="hidden" class="" id="change_payscale_employee_type" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                                                                <div class="flex">
                                                                                                    <input type="radio" name="edit_pay_type" value="Payscale"  id="Payscale" {{count($staff->latestntpayscale)>0 ||  count($staff->teaching_payscale) >0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                                                                </div>

                                                                                                <div class="flex">
                                                                                                    <input type="radio" name="edit_pay_type" value="Fixed" id="Fixed" {{count($staff->latestfixedntpay) >0 ||  count($staff->consolidated_teaching_pay)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="edit_ajax_data_populate"></div>
                                                                                    <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0" id='edit_nt_consolidated_pay_div'>
                                                                                        <div class="space-y-2">
                                                                                            <label class="ti-form-label mb-0 font-bold">Payscales </label>

                                                                                            <select class="ti-form-select" name="payscales_id">
                                                                                                @if(count($staff->latestntpayscale)>0)

                                                                                                    @foreach($ntpayscales AS $ntpaysc)
                                                                                                        <option value="{{$ntpaysc->id}}" {{($ntpaysc->id == $ntpays->pivot->ntpayscale_id ? 'selected="selected"':'')}}>{{$ntpaysc->payband.'result 1521='.$ntpaysc->id == $ntpays->pivot->ntpayscale_id}}</option>

                                                                                                        @endforeach
                                                                                                @else
                                                                                                    @if(count($staff->latestntcpayscale)>0)
                                                                                                    @foreach($ntcpayscales AS $design_payscales)

                                                                                                    @foreach ($design_payscales->ntcpayscales as $payscale_ntc)

                                                                                                            <option value="{{$payscale_ntc->id}}" {{($payscale_ntc->id == $ntcpays->pivot->ntcpayscale_id && $design_payscales->id==$designation->id  ? 'selected="selected"':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntc->basepay.'-'.$payscale_ntc->allowance}}</option>
                                                                                                        @endforeach
                                                                                                    @endforeach
                                                                                                    @endif
                                                                                                @endif
                                                                                        </select>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                    </div>

                                                                                                    <input type="date" name="start_date"
                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                        id="date" placeholder="Choose date" value="{{$ntcpays->pivot->start_date}}" >
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class="space-y-2">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                <input type="text" name="reason" class="ti-form-input" value="{{$ntcpays->pivot->reason}}"/>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$ntcpays->pivot->gcr}}"/>
                                                                                        </div>

                                                                                    </div>
                                                                                    @endif
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#edit_nonteachingconso_payscale{{$i}}">
                                                                            Close
                                                                            </button>

                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Edit modal for departments staff ends-->
                                                            <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                            @if($ntcpays->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <form action="{{ route('Dean_admin.staff.payscale.destroy',[$staff->id,$ntcpays->id]) }}" method="post">

                                                                    <button onclick="return confirm('Are you Sure')"
                                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                        @method('delete')
                                                                        @csrf
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                        </button>
                                                                    </form>
                                                                    </div>
                                                                <!-- Delete the entry ends-->
                                                            @endif
                                                        @endif

                                                    </td>
                                                </tr>
                                             @elseif ($ntcpays->pivot->start_date>=$designation->pivot->start_date && $ntcpays->pivot->end_date<=$designation->pivot->end_date && $ntcpays->pivot->end_date!=null)
                                             <tr class="{{$ntcpays->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                <td>
                                                    {{$ntcpays->basepay.'-'.$ntcpays->allowance.'-'.$ntcpays->year.' Year'}}
                                                </td>
                                                <td>{{\Carbon\Carbon::parse($ntcpays->pivot->start_date)->format('d-M-Y') }}</td>
                                                <td>{{$ntcpays->pivot->end_date == null? '--NA--': \Carbon\Carbon::parse($ntcpays->pivot->end_date)->format('d-M-Y') }}</td>
                                                <td>
                                                    @php
                                                        $sdate=new DateTime($ntcpays->pivot->start_date);

                                                        if ($ntcpays->pivot->end_date!=null)
                                                            $edate=new DateTime($ntcpays->pivot->end_date);
                                                        else
                                                            $edate=Carbon\Carbon::now();
                                                            $difference=$sdate->diff($edate);
                                                    @endphp

                                                    {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                </td>
                                                <td>
                                                    @if($ntcpays->pivot->end_date == null)
                                                        <!--Edit modal for staff Payscale non-teaching-->
                                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                        data-hs-overlay="#edit_nonteachingconso_payscale{{$i}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Edit
                                                        </span>
                                                        </button>
                                                        <div id="edit_nonteachingconso_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                    </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form  action="{{route('Dean_admin.staff.payscale.update',[$staff->id,$ntcpays->id])}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="ti-modal-body">
                                                                                @if($ntcpays->pivot->status == 'inactive')
                                                                                <br/>
                                                                                    <div class="flex">
                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                    </div>
                                                                                @else
                                                                                    {{-- Pay Type Setting --}}
                                                                                    <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2 pr-4">
                                                                                            <label class="ti-form-label mb-0 font-bold">Pay Type count={{count($staff->ntcpayscale)}}</label>
                                                                                            {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                               {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                               @if (count($staff->latestntcpayscale)>0)
                                                                                                    <input type="hidden" class="" name="old_pay_type" value="Consolidated"/>
                                                                                                @endif
                                                                                                @if (count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0)
                                                                                                    <input type="hidden" class="" name="old_pay_type" value="Payscale"/>
                                                                                                @endif
                                                                                                @if (count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0)
                                                                                                    <input type="hidden" class="" name="old_pay_type" value="Fixed"/>
                                                                                                @endif
                                                                                            {{-- Ends --}}
                                                                                            {{-- Ends --}}
                                                                                            <div class="flex gap-x-6">
                                                                                                @if($staff->latest_employee_type[0]->employee_type == "Non-Teaching")
                                                                                                    <div class="flex" id="Consolidated">
                                                                                                        <input type="radio" name="edit_pay_type" value="Consolidated"  {{$staff->latestntcpayscale!=null?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                                                                        <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>
                                                                                                    </div>
                                                                                                @endif
                                                                                                <input type="hidden" class="" id="change_payscale_employee_type" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                                                                <div class="flex">
                                                                                                    <input type="radio" name="edit_pay_type" value="Payscale"  id="Payscale" {{count($staff->latestntpayscale)>0 ||  count($staff->teaching_payscale) >0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                                                                </div>

                                                                                                <div class="flex">
                                                                                                    <input type="radio" name="edit_pay_type" value="Fixed" id="Fixed" {{count($staff->latestfixedntpay) >0 ||  count($staff->consolidated_teaching_pay)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="edit_ajax_data_populate"></div>
                                                                                    <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0" id='edit_nt_consolidated_pay_div'>
                                                                                        <div class="space-y-2">
                                                                                            <label class="ti-form-label mb-0 font-bold">Payscales </label>

                                                                                            <select class="ti-form-select" name="payscales_id">
                                                                                                @if(count($staff->latestntpayscale)>0)

                                                                                                    @foreach($ntpayscales AS $ntpaysc)
                                                                                                        <option value="{{$ntpaysc->id}}" {{($ntpaysc->id == $ntpays->pivot->ntpayscale_id ? 'selected="selected"':'')}}>{{$ntpaysc->payband.' result'.$ntpaysc->id == $ntpays->pivot->ntpayscale_id}}</option>

                                                                                                        @endforeach
                                                                                                @else
                                                                                                    @if(count($staff->latestntcpayscale)>0)
                                                                                                    @foreach($ntcpayscales AS $design_payscales)

                                                                                                    @foreach ($design_payscales->ntcpayscales as $payscale_ntc)
                                                                                                            {{-- {{$payscale_ntc}} --}}
                                                                                                            <option value="{{$payscale_ntc->id}}" {{($payscale_ntc->id == $ntcpays->pivot->ntcpayscale_id && $design_payscales->id==$designation->id ? 'selected="selected"':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntc->basepay.'-'.$payscale_ntc->allowance.'1725='.$payscale_ntc->id == $ntcpays->pivot->ntpayscale_id}}</option>
                                                                                                        @endforeach
                                                                                                    @endforeach
                                                                                                    @endif
                                                                                                @endif
                                                                                        </select>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                    </div>

                                                                                                    <input type="date" name="start_date"
                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                        id="date" placeholder="Choose date" value="{{$ntcpays->pivot->start_date}}" >
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class="space-y-2">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                <input type="text" name="reason" class="ti-form-input" value="{{$ntcpays->pivot->reason}}"/>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$ntcpays->pivot->gcr}}"/>
                                                                                        </div>

                                                                                    </div>
                                                                                    @endif
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#edit_nonteachingconso_payscale{{$i}}">
                                                                            Close
                                                                            </button>

                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Edit modal for departments staff ends-->
                                                            <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                            @if($ntcpays->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <form action="{{ route('Dean_admin.staff.payscale.destroy',[$staff->id,$ntcpays->id]) }}" method="post">

                                                                    <button onclick="return confirm('Are you Sure')"
                                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                        @method('delete')
                                                                        @csrf
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                        </button>
                                                                    </form>
                                                                    </div>
                                                                <!-- Delete the entry ends-->
                                                            @endif
                                                        @endif

                                                    </td>
                                                </tr>
                                             @endif
                                        @endforeach


                                    @endif
                                    <!--Non Teaching fixed salary section-->
                                    @if ($staff->fixed_nt_pay !=null)
                                        @forelse ($staff->fixed_nt_pay as $fntp)
                                        <!--CHeck with designation and display accordingly-->
                                        @if($designation->pivot->end_date==null && $fntp->start_date>=$designation->pivot->start_date)
                                            <tr class="{{$fntp->status =='inactive'?'bg-gray-200':''}}">
                                                <td>
                                                    {{$fntp->pay}}
                                                </td>
                                                <td>{{\Carbon\Carbon::parse($fntp->start_date)->format('d-M-Y') }}</td>
                                                <td>{{$fntp->end_date == null? '--NA--': \Carbon\Carbon::parse($fntp->end_date)->format('d-M-Y') }}</td>
                                                <td>
                                                    @php
                                                        $sdate=new DateTime($fntp->start_date);

                                                        if ($fntp->end_date!=null)
                                                            $edate=new DateTime($fntp->end_date);
                                                        else
                                                            $edate=Carbon\Carbon::now();
                                                            $difference=$sdate->diff($edate);
                                                    @endphp

                                                                    {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                </td>
                                                <td>
                                                    @if($fntp->end_date == null)
                                                            <!--Edit modal for Fixed non-teaching-->
                                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                        data-hs-overlay="#edit_fixed_nonteaching{{$i}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                        <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                        </button>
                                                        <div id="edit_fixed_nonteaching{{$i}}" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                    </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#edit_fixed_nonteaching{{$i}}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                    </div>
                                                                     <form  action="{{route('Dean_admin.staff.payscale.update',[$staff->id,$fntp->id])}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="ti-modal-body">
                                                                                @if($fntp->status == 'inactive')
                                                                                <br/>
                                                                                    <div class="flex">
                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                    </div>
                                                                                @else
                                                                                    {{-- Pay Type Setting --}}
                                                                                    <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2 pr-4">
                                                                                            <label class="ti-form-label mb-0 font-bold">Pay Type</label>
                                                                                            {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                                @if (count($staff->latestntcpayscale)>0)
                                                                                                    <input type="hidden" class="" name="old_pay_type" value="Consolidated"/>
                                                                                                @endif
                                                                                                @if (count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0)
                                                                                                    <input type="hidden" class="" name="old_pay_type" value="Payscale"/>
                                                                                                @endif
                                                                                                @if (count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0)
                                                                                                    <input type="hidden" class="" name="old_pay_type" value="Fixed"/>
                                                                                                @endif
                                                                                            {{-- Ends --}}
                                                                                            <div class="flex gap-x-6">
                                                                                                @if($staff->latest_employee_type[0]->employee_type == "Non-Teaching")
                                                                                                    <div class="flex" id="Consolidated">
                                                                                                        <input type="radio" name="edit_pay_type" value="Consolidated"  {{count($staff->latestntcpayscale)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                                                                        <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>
                                                                                                    </div>
                                                                                                @endif
                                                                                                <input type="hidden" class="" id="change_payscale_employee_type" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                                                                <div class="flex">
                                                                                                    <input type="radio" name="edit_pay_type" value="Payscale"  id="Payscale" {{count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                                                                </div>

                                                                                                <div class="flex">
                                                                                                    <input type="radio" name="edit_pay_type" value="Fixed" id="Fixed" {{count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="edit_ajax_data_populate">
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2" id="edit_nt_fixed_pay_div">
                                                                                            <label class="ti-form-label mb-0 font-bold">Fixed Pay </label>
                                                                                            <input type="text" name="fixed_pay" class="ti-form-input" value="{{$fntp->pay}}"/>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                        <div class="space-y-2">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                    </div>

                                                                                                    <input type="date" name="start_date"
                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                        id="date" placeholder="Choose date" value="{{$fntp->start_date}}" >
                                                                                                </div>
                                                                                        </div>
                                                                                        <div class="space-y-2">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                            <input type="text" name="reason" class="ti-form-input" value="{{$fntp->reason}}"/>
                                                                                        </div>

                                                                                        <div class="space-y-2">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$fntp->gcr}}"/>
                                                                                        </div>



                                                                                    </div>

                                                                                    @endif
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#edit_fixed_nonteaching{{$i}}">
                                                                            Close
                                                                            </button>

                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Edit modal for departments staff ends-->
                                                            <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                            @if($fntp->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    {{-- <form action="{{ route('ESTB.staff.ntfixedpay.destroy',[$staff->id,$fntp->id]) }}" method="post"> --}}

                                                                    <button onclick="return confirm('Are you Sure')"
                                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                        @method('delete')
                                                                        @csrf
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                        </button>
                                                                    {{-- </form> --}}
                                                                    </div>
                                                                <!-- Delete the entry ends-->
                                                            @endif
                                                        @endif
                                                </td>
                                            </tr>
                                            @elseif($fntp->start_date>=$designation->pivot->start_date && $fntp->end_date<=$designation->pivot->end_date && $fntp->end_date!=null)
                                                <!--Check for designation ended matching payscale-->
                                                <tr class="{{$fntp->status =='inactive'?'bg-gray-200':''}}">
                                                    <td>
                                                        {{$fntp->pay}}
                                                    </td>
                                                    <td>{{\Carbon\Carbon::parse($fntp->start_date)->format('d-M-Y') }}</td>
                                                    <td>{{$fntp->end_date == null? '--NA--': \Carbon\Carbon::parse($fntp->end_date)->format('d-M-Y') }}</td>
                                                    <td>
                                                        @php
                                                            $sdate=new DateTime($fntp->start_date);

                                                            if ($fntp->end_date!=null)
                                                                $edate=new DateTime($fntp->end_date);
                                                            else
                                                                $edate=Carbon\Carbon::now();
                                                                $difference=$sdate->diff($edate);
                                                        @endphp

                                                                        {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                    </td>
                                                    <td>
                                                        @if($fntp->end_date == null)
                                                                <!--Edit modal for Fixed non-teaching-->
                                                            <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                            data-hs-overlay="#edit_fixed_nonteaching{{$i}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                            <span
                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                        role="tooltip">
                                                                        Edit
                                                                    </span>
                                                            </button>
                                                            <div id="edit_fixed_nonteaching{{$i}}" class="hs-overlay hidden ti-modal">
                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                    <div class="ti-modal-content">
                                                                        <div class="ti-modal-header">
                                                                            <h3 class="ti-modal-title">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                        </h3>
                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#edit_fixed_nonteaching{{$i}}">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor" />
                                                                            </svg>
                                                                            </button>
                                                                        </div>
                                                                        <form  action="{{route('Dean_admin.staff.payscale.update',[$staff->id,$fntp->id])}}" method="post">
                                                                            @csrf
                                                                            @method('patch')
                                                                            <div class="ti-modal-body">
                                                                                    @if($fntp->status == 'inactive')
                                                                                    <br/>
                                                                                        <div class="flex">
                                                                                            <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                            <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                        </div>
                                                                                    @else
                                                                                        {{-- Pay Type Setting --}}
                                                                                        <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                            <div class="space-y-2 pr-4">
                                                                                                <label class="ti-form-label mb-0 font-bold">Pay Type</label>
                                                                                                {{-- For Sending it to ajax for changing of designation and payscale based change of Pay Type. --}}
                                                                                                    @if (count($staff->latestntcpayscale)>0)
                                                                                                        <input type="hidden" class="" name="old_pay_type" value="Consolidated"/>
                                                                                                    @endif
                                                                                                    @if (count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0)
                                                                                                        <input type="hidden" class="" name="old_pay_type" value="Payscale"/>
                                                                                                    @endif
                                                                                                    @if (count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0)
                                                                                                        <input type="hidden" class="" name="old_pay_type" value="Fixed"/>
                                                                                                    @endif
                                                                                                {{-- Ends --}}
                                                                                                <div class="flex gap-x-6">
                                                                                                    @if($staff->latest_employee_type[0]->employee_type == "Non-Teaching")
                                                                                                        <div class="flex" id="Consolidated">
                                                                                                            <input type="radio" name="edit_pay_type" value="Consolidated"  {{count($staff->latestntcpayscale)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                                                                            <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    <input type="hidden" class="" id="change_payscale_employee_type" value="{{$staff->latest_employee_type[0]->employee_type}}"/>
                                                                                                    <div class="flex">
                                                                                                        <input type="radio" name="edit_pay_type" value="Payscale"  id="Payscale" {{count($staff->latestntpayscale)>0 ||  count($staff->latestteaching_payscale) >0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                                                                    </div>

                                                                                                    <div class="flex">
                                                                                                        <input type="radio" name="edit_pay_type" value="Fixed" id="Fixed" {{count($staff->latestfixedntpay) >0 ||  count($staff->latest_consolidated_teaching_pay)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="edit_ajax_data_populate">
                                                                                        </div>
                                                                                        <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                            <div class="space-y-2" id="edit_nt_fixed_pay_div">
                                                                                                <label class="ti-form-label mb-0 font-bold">Fixed Pay </label>
                                                                                                <input type="text" name="fixed_pay" class="ti-form-input" value="{{$fntp->pay}}"/>


                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                            <div class="space-y-2">
                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                    <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                        </div>

                                                                                                        <input type="date" name="start_date"
                                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                            id="date" placeholder="Choose date" value="{{$fntp->start_date}}" >
                                                                                                    </div>
                                                                                            </div>
                                                                                            <div class="space-y-2">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                <input type="text" name="reason" class="ti-form-input" value="{{$fntp->reason}}"/>
                                                                                            </div>

                                                                                            <div class="space-y-2">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                <input type="text" name="gcr" class="ti-form-input" value="{{$fntp->gcr}}"/>
                                                                                            </div>



                                                                                        </div>

                                                                                        @endif
                                                                            </div>
                                                                            <div class="ti-modal-footer">
                                                                                <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                data-hs-overlay="#edit_fixed_nonteaching{{$i}}">
                                                                                Close
                                                                                </button>

                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Edit modal for departments staff ends-->
                                                                <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                                @if($fntp->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        {{-- <form action="{{ route('ESTB.staff.ntfixedpay.destroy',[$staff->id,$fntp->id]) }}" method="post"> --}}

                                                                        <button onclick="return confirm('Are you Sure')"
                                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                            @method('delete')
                                                                            @csrf
                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                Delete
                                                                            </span>
                                                                            </button>
                                                                        {{-- </form> --}}
                                                                        </div>
                                                                    <!-- Delete the entry ends-->
                                                                @endif
                                                            @endif
                                                    </td>
                                                </tr>
                                                <!-- Checking with designation ends here-->
                                            @endif
                                        @empty

                                    @endforelse

                                @endif

                                <!--End of non-teaching fixed pay (if)-->

                            {{-- @endif   --}}
                       @endif <!--end if for addiotional designation checking-->
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- The Designation and payscale details ends here. --}}
<hr/>

{{-- The additional designation section starts here --}}




<!--Additional Designation Section-->
<div class="box border-0 shadow-none mb-0">
    <div class="box-header">
        <h5 class="box-title leading-none flex"><i class="ri ri-account-circle-line ltr:mr-2 rtl:ml-2"></i> Additional Designation</h5>
    </div>
    <div class="box-body">
        <!--modal for adding/changing the additional designations-->
        <button data-hs-overlay="#add_additional_designation"
        class="hs-dropdown-toggle ti-btn ti-btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM18 17V14H20V17H23V19H20V22H18V19H15V17H18Z" fill="rgba(255,255,255,1)"></path></svg>
            Assign Additional Designation

        </button>
        <div id="add_additional_designation" class="hs-overlay hidden ti-modal">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                <div class="ti-modal-content">
                    <div class="ti-modal-header">
                        <h3 class="ti-modal-title">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                            Assign Additional Designation for <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                        </h3>
                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                        data-hs-overlay="#add_additional_designation">
                        <span class="sr-only">Close</span>
                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                            fill="currentColor" />
                        </svg>
                        </button>
                    </div>
                    <form  action="{{route('Dean_admin.staff.additional_designation.create',$staff->id)}}" method="post">
                        @csrf
                        <div class="ti-modal-body">
                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0 font-bold">Designation</label>
                                    <select class="ti-form-select" name="designation_id" id="designation_id">
                                        <option value="0">Choose an additional designation</option>
                                                @foreach($add_designations AS $add_design)
                                                        <option value="{{$add_design->id}}">{{$add_design->design_name}}</option>
                                                @endforeach
                                    </select>
                                </div>
                                <div class="space-y-2" id="dept_div">
                                    <label class="ti-form-label mb-0 font-bold">Departments</label>
                                    <select class="ti-form-select" name="dept_id">
                                        <option value="0">Choose an department</option>
                                                @foreach($departments AS $department)
                                                        <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                                @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                <div class="space-y-2">
                                        <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                        <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                            </div>

                                            <input type="date" name="start_date"
                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                id="date" placeholder="Choose date" >
                                        </div>
                                </div>
                                <!--div class="space-y-2">
                                        <label for="" class="ti-form-label mb-0 font-bold">Reason:</label>
                                        <input type="text" name="reason" class="ti-form-input"/>
                                </div-->

                            </div>
                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                <div class="space-y-2">
                                    <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                    <input type="text" name="gcr" class="ti-form-input"/>
                                </div>
                            </div>
                        </div>
                        <div class="ti-modal-footer">
                            <button type="button"
                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                            data-hs-overlay="#add_additional_designation">
                            Close
                            </button>
                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--tabular representation of additional designation-->
        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                <thead class="bg-gray-50 dark:bg-black/20">
                    <tr>
                        <th scope="col" class="dark:text-white/80 font-bold">S.no</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Additional Designation</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Department</th>
                        <th scope="col" class="dark:text-white/80 text-center font-bold">Start Date</th>
                        <th scope="col" class="dark:text-white/80 text-center font-bold">End Date</th>
                        <th scope="col" class="dark:text-white/80 text-center font-bold">Duration</th>
                        <th scope="col" class="dark:text-white/80 text-center font-bold">GCR</th>
                        <th scope="col" class="dark:text-white/80 text-center font-bold">Status</th>
                        <th scope="col" class="dark:text-white/80 text-center font-bold">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                        $dept="";
                    @endphp
                    @foreach ($staff->designations as $add_designaions)
                        @if($add_designaions->isadditional==1)
                        @foreach($staff->departments as $department)

                            @if($department->id==$add_designaions->pivot->dept_id)
                                @php
                                    $dept=$department->dept_name;
                                    break;
                                @endphp

                            @endif
                        @endforeach
                        <tr class="{{$add_designaions->pivot->status =='inactive'?'bg-gray-200':''}}">
                            <td>{{$i++}}</td>
                            <td>{{$add_designaions->design_name}}</td>
                            <td>{{$add_designaions->pivot->dept_id==null?'---NA---':$dept}}</td>
                            <td>{{\Carbon\Carbon::parse($add_designaions->pivot->start_date)->format('d-M-Y') }}</td>
                            <td>{{$add_designaions->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($add_designaions->pivot->end_date)->format('d-M-Y') }}</td>
                            <td><span>
                                @php
                                            $sdate=new DateTime($add_designaions->pivot->start_date);

                                            if ($add_designaions->pivot->end_date!=null)
                                                $edate=new DateTime($add_designaions->pivot->end_date);
                                            else
                                                $edate=Carbon\Carbon::now();
                                                $difference=$sdate->diff($edate);
                                            @endphp

                                    {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                </span></td>


                            <td>{{$add_designaions->pivot->gcr}}</td>
                            <td>{{$add_designaions->pivot->status}}</td>
                            <td>
                                <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                data-hs-overlay="#edit_additional_designation{{$i}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip">
                                            Edit
                                        </span>
                                </button>
                                <div id="edit_additional_designation{{$i}}" class="hs-overlay hidden ti-modal">
                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                        <div class="ti-modal-content">
                                            <div class="ti-modal-header">
                                                <h3 class="ti-modal-title">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                    Edit Additional Designation for <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                </h3>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                data-hs-overlay="#edit_additional_designation{{$i}}">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor" />
                                                </svg>
                                                </button>
                                            </div>
                                            <form  action="{{route('Dean_admin.staff.additional_designation.update',[$staff->id, $add_designaions->pivot->id])}}" method="post">
                                                @csrf
                                                @method('patch')
                                                <div class="ti-modal-body">
                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                        <div class="space-y-2">
                                                            <label class="ti-form-label mb-0 font-bold">Designation</label>
                                                            <select class="ti-form-select" name="designation_id" id="designation_id">
                                                                <option value="0">Choose an additional designation</option>
                                                                        @foreach($add_designations AS $add_design)
                                                                                <option value="{{$add_design->id}}" {{$add_designaions->id == $add_design->id? 'selected':''}}>{{$add_design->design_name}}</option>
                                                                        @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="space-y-2" id="dept_div">
                                                            <label class="ti-form-label mb-0 font-bold">Departments</label>
                                                            <select class="ti-form-select" name="dept_id">
                                                                <option value="0">Choose an department</option>
                                                                        @foreach($departments AS $department)
                                                                                <option value="{{$department->id}}" {{$add_designaions->pivot->dept_id ==$department->id ?'selected':''}}>{{$department->dept_name}}</option>
                                                                        @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                        <div class="space-y-2">
                                                                <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                    </div>

                                                                    <input type="date" name="start_date"
                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                            placeholder="Choose date" value="{{$add_designaions->pivot->start_date}}" >
                                                                </div>
                                                        </div>
                                                        <div class="space-y-2">
                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$add_designaions->pivot->gcr}}"/>
                                                        </div>

                                                    </div>
                                                    <p class="text-red-400">Note : Additional designation can be closed by filling the below information</p>
                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                        <div class="space-y-2">
                                                            <label for="" class="ti-form-label mb-0 font-bold">Closing Date :</label>
                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6">

                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                </div>

                                                                <input type="date" name="end_date"
                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                            placeholder="Choose date" value="{{$add_designaions->pivot->end_date}}">
                                                            </div>
                                                        </div>
                                                            <div class="space-y-2">
                                                                <label for="" class="ti-form-label mb-0 font-bold">Closing GC Resolution:</label>
                                                                <input type="text" name="gcr_close" class="ti-form-input" value="{{$add_designaions->pivot->gcr_close}}"/>
                                                            </div>


                                                    </div>
                                                </div>
                                                <div class="ti-modal-footer">
                                                    <button type="button"
                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                    data-hs-overlay="#edit_additional_designation{{$i}}">
                                                    Close
                                                    </button>

                                                    <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="hs-tooltip ti-main-tooltip">
                                    <form action="{{ route('Dean_admin.staff.additionaldesignation.destroy',[$staff->id,$add_designaions->pivot->id]) }}" method="post">

                                    <button onclick="return confirm('Are you Sure')"
                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                        @method('delete')
                                        @csrf
                                        <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip">
                                            Delete
                                        </span>
                                        </button>
                                    </form>
                                    </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
