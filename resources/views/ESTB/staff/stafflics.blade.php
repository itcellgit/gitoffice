<div class="box">
    <div class="box-header">
        <div class="flex">
            <h5 class="box-title my-auto">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11.8611 2.39057C12.8495 1.73163 14.1336 1.71797 15.1358 2.35573L19.291 4.99994H20.9998C21.5521 4.99994 21.9998 5.44766 21.9998 5.99994V14.9999C21.9998 15.5522 21.5521 15.9999 20.9998 15.9999H19.4801C19.5396 16.9472 19.0933 17.9102 18.1955 18.4489L13.1021 21.505C12.4591 21.8907 11.6609 21.8817 11.0314 21.4974C10.3311 22.1167 9.2531 22.1849 8.47104 21.5704L3.33028 17.5312C2.56387 16.9291 2.37006 15.9003 2.76579 15.0847C2.28248 14.7057 2 14.1254 2 13.5109V6C2 5.44772 2.44772 5 3 5H7.94693L11.8611 2.39057ZM4.17264 13.6452L4.86467 13.0397C6.09488 11.9632 7.96042 12.0698 9.06001 13.2794L11.7622 16.2518C12.6317 17.2083 12.7903 18.6135 12.1579 19.739L17.1665 16.7339C17.4479 16.5651 17.5497 16.2276 17.4448 15.9433L13.0177 9.74551C12.769 9.39736 12.3264 9.24598 11.9166 9.36892L9.43135 10.1145C8.37425 10.4316 7.22838 10.1427 6.44799 9.36235L6.15522 9.06958C5.58721 8.50157 5.44032 7.69318 5.67935 7H4V13.5109L4.17264 13.6452ZM14.0621 4.04306C13.728 3.83047 13.3 3.83502 12.9705 4.05467L7.56943 7.65537L7.8622 7.94814C8.12233 8.20827 8.50429 8.30456 8.85666 8.19885L11.3419 7.45327C12.5713 7.08445 13.8992 7.53859 14.6452 8.58303L18.5144 13.9999H19.9998V6.99994H19.291C18.9106 6.99994 18.5381 6.89148 18.2172 6.68727L14.0621 4.04306ZM6.18168 14.5448L4.56593 15.9586L9.70669 19.9978L10.4106 18.7659C10.6256 18.3897 10.5738 17.9178 10.2823 17.5971L7.58013 14.6247C7.2136 14.2215 6.59175 14.186 6.18168 14.5448Z"></path></svg>
                LIc Premium Deatils
            </h5>

             <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-6">
                                     <!-- For Checking whether status is set or no-->
                                     @if(session('status'))
                                        @if (session('status') == 1)
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result: </span> Database transaction Successful
                                        </div>
                                        @elseif(session('status') == 0)
                                        <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                            <span class='font-bold'>Result : </span> Error in Database transaction
                                        </div>
                                    
                                        @endif
                                        @php 
                                            Illuminate\Support\Facades\Session::forget('status');  
                                            header("refresh: 3"); 
                                        @endphp
                                    @endif

                                </div>
                            </div>
            <div class=" block ltr:ml-auto rtl:mr-auto my-auto">

                    <button type="button" id="festivaladvance_add_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                        Add 
                    </button>

                    <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                            <div class="ti-modal-content">
                            <div class="ti-modal-header">
                                <h3 class="ti-modal-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                    Add New LIC
                                </h3>
                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                data-hs-overlay="#hs-medium-modal">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                    fill="currentColor" />
                                </svg>
                                </button>
                            </div>

                            <!--Give here Store Route-->
                            <form action="{{route('ESTB.staff.stafflics.store',$staff->id)}}" method="post">
                                @csrf
                                <div class="ti-modal-body">
                                    <div class="max-w-sm space-y-3">
                                        <label for="with-corner-hint" class="ti-form-label">Policy No:<span class="text-red-500">*</span> </label>
                                        <input type="text" name="policy_no" class="ti-form-input" required placeholder="Policy No">
                                    </div>
                                    <div class="max-w-sm space-y-3">
                                        <label for="with-corner-hint" class="ti-form-label">Premium:<span class="text-red-500">*</span> </label>
                                        <input type="text" name="premium" class="ti-form-input" required placeholder="Enter Premium Amount">
                                    </div>
                                    <div class="grid gap-2 space-y-2 lg:grid-cols-2 lg:space-y-0">
                                        <div class="space-y-2">
                                            <label for="" class="mb-0 font-bold ti-form-label">Start Date :</label>
                                            <div class="flex max-w-sm pb-6 space-y-3 shadow-sm">
                                                <div class="inline-flex items-center px-4 border border-gray-200 min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm ltr:border-r-0 rtl:border-l-0 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                </div>
                                                <input type="date" name="start_date" class="rounded-l-none ti-form-input focus:z-10 flatpickr-input date start date" placeholder="Choose date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ti-modal-footer">
                                    <button type="button"
                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-overlay="#hs-medium-modal">
                                    Close
                                    </button>
                                    
                                    <input type="submit" id="groupname_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                    
                                    </div>
                                </form>  
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="table-bordered rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
           <table id="table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
            <thead class="bg-gray-50 dark:bg-black/20">
                <tr class="">
                    <th scope="col" class="dark:text-white/80">S.No</th>
                    <th scope="col" class="dark:text-white/80">Policy No</th>
                    <th scope="col" class="dark:text-white/80">Premium</th>
                    <th scope="col" class="dark:text-white/80">Start Date</th>
                    <th scope="col" class="dark:text-white/80">End Date</th>
                    <th scope="col" class="dark:text-white/80">Status</th>
                    <th scope="col" class="dark:text-white/80">Actions</th>
            </tr>
         </thead>
         <tbody class="">
                                                      
            @php
                $i = 1;
            @endphp
            @if($staff->stafflics!=null)
            @forelse($staff->stafflics as $lic)

            <tr class="">
                 <td>{{ $i++ }}</td>
                {{--<td>
                    @foreach($staff as $s)
                    @if($lic->staff_id == $s->id)
                        {{ $s->fname.' '.$s->mname.' '.$s->lname. ' ' }}
                    @endif
                    @endforeach
                </td> --}}
                <td><span>{{$lic->policy_no}}</span></td>
                <td><span>{{$lic->premium}}</span></td>
                <td><span>{{$lic->start_date}}</span></td>
                <td><span>{{$lic->end_date}}</span></td>
                <td><span>{{$lic->status}}</span></td>

                <td class="font-medium space-x-2 rtl:space-x-reverse">
                <div class="hs-tooltip ti-main-tooltip">
                     <a href="{{route('ESTB.stafflic_transactions.show',[$staff->id,$lic->id])}}"
                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                        <span
                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm"
                                role="tooltip">
                            View
                        </span>
                    </a>
                </div>
                <div class="hs-tooltip ti-main-tooltip">
                    <button data-hs-overlay="#qual_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary qual_edit_modal_click">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                        <span
                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                            role="tooltip">
                            Edit
                        </span>
                    </button>


                        <div id="qual_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                <div class="ti-modal-content">
                                <div class="ti-modal-header">
                                    <h3 class="ti-modal-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                        Edit LIC
                                    </h3>
                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                    data-hs-overlay="#hs-medium-modal">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                        fill="currentColor" />
                                    </svg>
                                    </button>
                                   
                                </div>
                                <form  action="{{route('ESTB.staff.stafflics.update',[$staff->id,$lic->id])}}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="ti-modal-body">
                                        <input type='hidden' name='modal_no' class='modal_no' value={{old('modal_no')}}/>
                                        {{-- <div class="max-w-sm space-y-3 pb-6">
                                            <label for="with-corner-hint" class="ti-form-label font-bold"> Staff Name:</label>
                                            <label for="" class="ti-form-label font-bold">Staff Name :<span class="text-red-500">*</span></label>
                                                        <select class="ti-form-select" name="staff_id">
                                                            <option value="-1">Select Staff Name</option>
                                                            @foreach($staff as $staffMember)
                                                                <option value="{{ $staffMember->id }}"  {{$lic->staff_id == $staffMember->id ?'selected':''}}>
                                                                    {{ $staffMember->fname . ' ' . $staffMember->mname . ' ' . $staffMember->lname }}
                                                                </option>
                                                            @endforeach
                                                        </select> </div> --}}
                                        <div class="max-w-sm space-y-3 pb-6">
                                            <label for="with-corner-hint" class="ti-form-label font-bold">Policy No:</label>
                                            <input type="text" name="policy_no" class="ti-form-input" required  value="{{$lic->policy_no}}">    
                                        </div>
                                        <div class="max-w-sm space-y-3 pb-6">
                                            <label for="with-corner-hint" class="ti-form-label font-bold">Premium:</label>
                                            <input type="text" name="premium" class="ti-form-input" required value="{{$lic->premium}}">    
                                        </div>
                                        <div class="grid gap-2 space-y-2 lg:grid-cols-2 lg:space-y-0">
                                            <div class="max-w-sm space-y-2 ">
                                                <label for="" class="mb-0 font-bold ti-form-label">with Effect From:</label>
                                                <div class="flex max-w-sm pb-6 space-y-3 shadow-sm">
                                                    <div class="inline-flex items-center px-4 border border-gray-200 min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm ltr:border-r-0 rtl:border-l-0 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                            <path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path>
                                                        </svg>
                                                    </div>
                                                    <input type="date" name="end_date" class="rounded-l-none ti-form-input focus:z-10 flatpickr-input date end_date"  placeholder="Choose date">
                                                </div>
                                            </div> 
                                        </div> 
                                        <div class="max-w-sm space-y-3 pb-6">
                                            <label for="with-corner-hint" class="ti-form-label font-bold">Status: </label>
                                            <select name="edittype" class="form-control edittype">
                                                <option  value="">Select Type</option>
                                                <option value="active" {{$lic->status=='active'? 'selected':''}}>Active</option>
                                                <option value="stopped" {{$lic->status=='stopped'? 'selected':''}}>Stopped</option>  
                                                <option value="transfered"  {{$lic->status=='transfered'? 'selected':''}}>Transfered</option> 
                                            
                                            </select>
                                        </div>
                                        @if($lic->status == 'inactive')
                                        <br/>
                                            <div class="flex">
                                                <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active" required>
                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                            </div>
                                        @endif
                                
                                    </div>
                                    <div class="ti-modal-footer">
                                        <button type="button"
                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-overlay="#hs-medium-modal">
                                        Close
                                        </button>
                                        
                                        <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                        
                                        </div>
                                    </form>  
                                </div>
                            </div>
                        </div>
                </div>
                <div class="hs-tooltip ti-main-tooltip">
                <form action="{{ route('ESTB.staff.stafflics.destroy',[$staff->id,$lic->id]) }}" method="post">
                
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
            @empty
                <p class="text-dark"><b>No Salarygroup Added.</b></p>
            @endforelse
            @endif
            </tbody>
        </table>
        </div>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
    const form = document.querySelector('form');
    const startDateInput = document.querySelector('input[name="start_date"]');
    const endDateInput = document.querySelector('input[name="end_date"]');

    form.addEventListener('submit', (event) => {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);
        const today = new Date();

        if (startDate > endDate) {
            alert('End date cannot be earlier than start date.');
            event.preventDefault();
        } 
       
    });
});
    </script>