@extends('layouts.master')

@section('styles')

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
        <script>
            var base_url = "{{URL::to('/')}}";
        </script>

@endsection

@section('content')

                <div class="content">

                    <!-- Start::main-content -->
                    <div class="main-content">

                        <!-- Page Header -->

                        <!-- Page Header Close -->
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
                                        header("refresh: 1");
                                    @endphp
                                @endif
                            </div>
                        </div>
                        <!-- Start::row-1 -->
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <table id="attended" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                    <thead class="bg-gray-50 dark:bg-black/20">
                                        <tr class="">
                                            <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Employee Type</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Email</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Dept Short Name</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Designation</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Association</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Religion</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Caste Category</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Gender</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Date of Birth</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Date of Joining</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Date Of Superannution</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Date Of Confirmation</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Date Of Increment</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Blood Group</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">PAN Card No:</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Adhar Card No:</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Contact No:</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">AICTE ID:</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">VTU ID:</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Local Address</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Permanant Address</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Emergency No</th>
                                            <th scope="col" class="dark:text-white/80 font-bold ">Emergency Name</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                         @php
                                            $i=1;
                                        @endphp
                                            @foreach ($staff as $st)
                                                <tr class="">
                                                        <td>{{ $st->fname }}</td>
                                                        <td>{{ $st->etype }}</td>
                                                        <td>{{ $st->email }}</td>
                                                        <td>{{ $st->department->dept_shortname }}</td>
                                                        <td>{{ $st->designation->desig_name }}</td>
                                                        <td>{{ $st->association->asso_name }}</td>
                                                        <td>{{ $st->religion->religion_name }}</td>
                                                        <td>{{ $st->casteCategory->category_name }}</td>
                                                        <td>{{ $st->gender }}</td>
                                                        <td>{{ $st->dob }}</td>
                                                        <td>{{ $st->doj }}</td>
                                                        <td>{{ $st->date_of_superanuation }}</td>
                                                        <td>{{ $st->confirmationdate }}</td>
                                                        <td>{{ $st->date_of_increment }}</td>
                                                        <td>{{ $st->bloodgroup }}</td>
                                                        <td>{{ $st->pan_card }}</td>
                                                        <td>{{ $st->adhar_card }}</td>
                                                        <td>{{ $st->contactno }}</td>
                                                        <td>{{ $st->aicte_id }}</td>
                                                        <td>{{ $st->vtu_id }}</td>
                                                        <td>{{ $st->local_address }}</td>
                                                        <td>{{ $st->permanent_address }}</td>
                                                        <td>{{ $st->emergency_no }}</td>
                                                        <td>{{ $st->emergency_name }}</td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- End::row-1 -->
                    </div>
                    <!-- Start::main-content -->
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

@endsection
