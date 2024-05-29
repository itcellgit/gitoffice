@extends('layouts.student_master')

@section('styles')
    
  <!-- FLATPICKR CSS -->
  <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
  <!-- CHOICES CSS -->
  <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">


@endsection

@section('content')
<div class="content">
    <div class="main-content">
      <div class="box">
        <div class="box-header">
          <div class="flex">

        <div class="grid grid-cols-12 gap-x-6"> 
          <div class="col-span-12">


            @if(session('return_data'))
                                @if (session('return_data')['status'] == "success")
                                    <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                        <span class='font-bold'>Result</span> Successful
                                    </div>
                                    @php 
                                        Illuminate\Support\Facades\Session::forget('status');  
                                        header("refresh: 3"); 
                                    @endphp
                                @else
                                    <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                        <span class='font-bold'>Result</span> {{session('return_data')['status']}} 
                                    </div>
                                    {{-- <input type="text" id="start_date" value="{{session('return_data')['staff_name']}}"/> --}}
                                    {{-- <input type="hidden" id="leave_type" value="{{session('return_data')['leave_type']}}"/>
                                    <input type="hidden" id="reason" value="{{session('return_data')['reason']}}"/>
                                    <input type="hidden" id="alternative" value="{{session('return_data')['alternative']}}"/>
                             --}}
                                    {{-- <script>
                                      $(document).ready(function(){
                                        $('#std_issues').trigger('click');//css('disply','block');
                                        $('#type').val($('#leave_type').val());
                                        $('#from_date').val($('#start_date').val());
                                        $('#leave_reason').val($('#reason').val());
                                        //alert();
                                        $('#alternate').val($('#alternative').val());
                                      });
                                        
                                       
                                    </script> --}}
                                    
                                    {{-- @php 
                                      Illuminate\Support\Facades\Session::forget('status');  
                                      header("refresh: 3"); 
                                    @endphp --}}
                                @endif
                                
                            @endif



            
            {{-- @if(session('status'))
                {{session('status')}}
                    @if (session('status') == 1)
                    <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                        <span class='font-bold'>Result</span> Issue Submitted Successful
                    </div>
                    @elseif(session('status') == 0)
                    <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                        <span class='font-bold'>Result</span> Error in Database transaction
                    </div>
                
                    @endif
                    @php 
                        Illuminate\Support\Facades\Session::forget('status');  
                        header("refresh: 3"); 
                    @endphp
            @endif --}}



            {{-- @if(session('status'))
            {{ session('status') }}
            @if (session('status') == 1)
                <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                    <span class='font-bold'>Result</span> Database transaction successful for {{ session('staff_name') }}
                </div>
            @elseif(session('status') == 0)
                <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                    <span class='font-bold'>Result</span> Error in database transaction for {{ session('staff_name') }}
                </div>
            @endif
            @php 
                Illuminate\Support\Facades\Session::forget('status');  
                header("refresh: 3"); 
            @endphp
        @endif --}}
        
          </div>    
          {{-- @if($studentIssue!=null)                    
            @forelse($studentIssues as $si) --}}

            
                    <form action="{{route('student-issues.store')}}" method="post">
                        @csrf
                        
                        <div class="ti-modal-body">
                                
                                    <div class="space-y-3 pb-6" style="width: 300px;">
                                        <label for="with-corner-hint" class="ti-form-label font-bold">USN:<span class="text-red-500">*</span></label>
                                        <input type="text" name="usn" class="ti-form-input" placeholder="Enter USN" required>
                                    </div>
                                

                                    <div class="space-y-3 pb-6" style="width: 300px;">
                                      <label for="with-corner-hint" class="ti-form-label font-bold">Issues:<span class="text-red-500">*</span></label>
                                      <select name="exam_section_issue_id" id="issue" class="ti-form-input" required onchange="toggleOtherIssue()">
                                          <option value="-1">Select Issue</option>
                                          @foreach($examSectionIssues as $issue)
                                              <option value="{{ $issue->id }}">
                                                  {{ $issue->issues . ', ' . $issue->remarks }}
                                              </option>
                                          @endforeach
                                          <option value="">Other</option>
                                      </select>
                                  </div>
                                  
                                  

                                    <div class="space-y-3 pb-6" style="width: 300px;">
                                        <div class="form-group" id="otherIssueField" style="display: none;">
                                          <label for="with-corner-hint" class="ti-form-label font-bold">Other Issue:<span class="text-red-500">*</span></label>
                                          <input type="text" name="other_issue" id="" class="ti-form-input" placeholder="Enter Your Issue" >
                                        </div>
                                    </div>
                                    
                                    <script>
                                      function toggleOtherIssue() {
                                          var selectBox = document.getElementById("issue");
                                          var otherIssueField = document.getElementById("otherIssueField");
                                  
                                          if (selectBox.value === "") {
                                              otherIssueField.style.display = "block";
                                          } else {
                                              otherIssueField.style.display = "none";
                                          }
                                      }
                                    </script>
                                
                                    <div class="space-y-3 pb-6" style="width: 300px;">
                                            <label for="with-corner-hint" class="ti-form-label font-bold">Description:<span class="text-red-500">*</span></label>
                                            <textarea name="description"  rows="4" class="ti-form-input" required></textarea>
                                    </div>
                            </div>
                        </div>
                      </div>
                        <div class="ti-modal-footer">
                            
                            {{-- <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Submit Issue"/> --}}
                            <input type="submit" id="std_issues" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="submit"/>
                            
                        </div>
                    </form>
                    {{-- @endforelse
                    @endif --}}
                  </div>
        
                </div>
              </div>
            </div>
    </div>
  </div>
  
@endsection

@section('scripts')
    <!-- FLATPICKR JS -->
    <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

    <!-- CHOICES JS -->
    <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

     <!-- TABULATOR JS -->
     <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

    <!-- FORM-LAYOUT JS -->
    @vite('resources/assets/js/profile-settings.js')


    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>


     <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
    ></script>

    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

    <script href="https://cdn.tailwindcss.com/3.3.5"></script>
    

    
@endsection
