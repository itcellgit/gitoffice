@extends('layouts.components.internship.master-internship')


@section('styles')
    <!-- CHOICES CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- FLATPICKR CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">
@endsection

@section('content')

    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            <div class="block justify-between page-header sm:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                        <span class="text-primary">

                        </span>
                    </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-sm">
                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Students Mapped to Industry Internship
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                        </a>
                    </li>

                </ol>
            </div>
            <!-- Page Header Close -->

            <div class="box">
                <div class="box-body">
                    <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                        <div class="box-header">
                            <div class="flex">
                                <h5 class="box-title my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M19.2914 5.99994H20.0002C20.5525 5.99994 21.0002 6.44766 21.0002 6.99994V13.9999C21.0002 14.5522 20.5525 14.9999 20.0002 14.9999H18.0002L13.8319 9.16427C13.3345 8.46797 12.4493 8.16522 11.6297 8.41109L9.14444 9.15668C8.43971 9.3681 7.6758 9.17551 7.15553 8.65524L6.86277 8.36247C6.41655 7.91626 6.49011 7.17336 7.01517 6.82332L12.4162 3.22262C13.0752 2.78333 13.9312 2.77422 14.5994 3.1994L18.7546 5.8436C18.915 5.94571 19.1013 5.99994 19.2914 5.99994ZM5.02708 14.2947L3.41132 15.7085C2.93991 16.1209 2.95945 16.8603 3.45201 17.2474L8.59277 21.2865C9.07284 21.6637 9.77592 21.5264 10.0788 20.9963L10.7827 19.7645C11.2127 19.012 11.1091 18.0682 10.5261 17.4269L7.82397 14.4545C7.09091 13.6481 5.84722 13.5771 5.02708 14.2947ZM7.04557 5H3C2.44772 5 2 5.44772 2 6V13.5158C2 13.9242 2.12475 14.3173 2.35019 14.6464C2.3741 14.6238 2.39856 14.6015 2.42357 14.5796L4.03933 13.1658C5.47457 11.91 7.65103 12.0343 8.93388 13.4455L11.6361 16.4179C12.6563 17.5401 12.8376 19.1918 12.0851 20.5087L11.4308 21.6538C11.9937 21.8671 12.635 21.819 13.169 21.4986L17.5782 18.8531C18.0786 18.5528 18.2166 17.8896 17.8776 17.4146L12.6109 10.0361C12.4865 9.86205 12.2652 9.78636 12.0603 9.84783L9.57505 10.5934C8.34176 10.9634 7.00492 10.6264 6.09446 9.7159L5.80169 9.42313C4.68615 8.30759 4.87005 6.45035 6.18271 5.57524L7.04557 5Z"></path></svg>

                                   
                                    Project Title : <b style="color:red;font-size:18px">{{ $studentinternship->title }}
                                    </b>
                                </h5>

                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary"
                                        data-hs-overlay="#hs-medium-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                            height="16">
                                            <path
                                                d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"
                                                fill="rgba(255,255,255,1)"></path>
                                        </svg>
                                        Select Students
                                    </button>

                                    <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                        <div
                                            class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                            <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h3 class="ti-modal-title">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            width="16" height="16">
                                                            <path
                                                                d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z">
                                                            </path>
                                                        </svg>
                                                        Select Student
                                                    </h3>
                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                        data-hs-overlay="#hs-medium-modal">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="8" height="8"
                                                            viewBox="0 0 8 8" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <form
                                                    action="{{ route('internship.studentinternship.student_studentinternship.store', $studentinternship) }}"
                                                    method="post">
                                                    @csrf
                                                    <div class="ti-modal-body">
                                                        <div class="max-w-sm space-y-3 pb-6">
                                                            <label for="" class="ti-form-label"><b
                                                                    style="color:red;font-size:18px">{{ $studentinternship->title }}
                                                                </b></label>
                                                        </div>



                                                        {{--                                                         
                                                                        @foreach ($salary_heads as $sh)
                                                                        <div class="flex items-center">
                                                                            <input type="checkbox" name="salary_head_id[]" value="{{ $sh->id }}" id="sh{{$sh->id}}" class="form-checkbox" {{ $payscale->salary_head->contains($sh) ? 'checked' : '' }}>
                                                                            <label for="sh{{$sh->id}}" class="ml-2">{{ $sh->title }}</label>
                                                                        </div>
                                                                        @endforeach
                                                                    </div> --}}

                                                        {{-- <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label class="ti-form-label font-bold">Salary Head:<span class="text-red-500">*</span></label>
                                                                                        @foreach ($salary_heads as $sh)
                                                                                            <div class="flex items-center ">
                                                                                                <input type="checkbox" name="salary_head_id[]" value="{{ $sh->id }}" id="sh{{$sh->id}}" class=" salary_head_id form-checkbox" {{ $payscale->salary_head->contains($sh) ? 'checked' : '' }}>
                                                                                                <label for="sh{{$sh->id}}" class="ml-2">{{ $sh->title }}</label>
                                                                                            </div>
                                                                                        @endforeach
                                                                                </div> --}}



                                                                                {{-- <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label">Selected Students : </label>
                                                                                    <div class="ti-form-checkbox-group">
                                                                                        @foreach ($students as $student)
                                                                                            <div class="ti-form-checkbox-item">
                                                                                                <input type="checkbox" checked disabled>
                                                                                                {{ $student->name }}
                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>

                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label">Add More Students : </label>
                                                                                    <div class="ti-form-checkbox-group">
                                                                                        @foreach ($students as $student)
                                                                                            <div class="ti-form-checkbox-item">
                                                                                                <input type="checkbox" name="student_id[]"
                                                                                                    value="{{ $student->id }}"
                                                                                                    id="student{{ $student->id }}"
                                                                                                    class="form-checkbox">
                                                                                                {{ $student->name }}
                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div> --}}







                                                      

                                                    {{-- <div class="max-w-sm space-y-3 pb-6">
                                                        <label for="" class="ti-form-label">Students : </label>
                                                        <div class="ti-form-checkbox-group">
                                                            @foreach ($students as $student)
                                                                <div class="ti-form-checkbox-item">
                                                                    <input type="checkbox" name="student_id[]"
                                                                        value="{{ $student->id }}"
                                                                        id="student{{ $student->id }}"
                                                                        class="form-checkbox"
                                                                        {{ $studentinternship->student->contains($student) ? 'checked disabled' : '' }}>
                                                                    {{ $student->name }}
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div> --}}

                                                    <div class="max-w-sm space-y-3 pb-6">
                                                        <label for="" class="ti-form-label">Students:</label>
                                                        <div class="ti-form-checkbox-group">
                                                            @foreach ($studentsWithoutInternship as $student)
                                                                <div class="ti-form-checkbox-item">
                                                                    <input type="checkbox" name="student_id[]"
                                                                        value="{{ $student->id }}"
                                                                        id="student{{ $student->id }}"
                                                                        class="form-checkbox">
                                                                    {{ $student->name }}
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>



                                                    <div class="ti-modal-footer">
                                                        <button type="button"
                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                            data-hs-overlay="#hs-medium-modal">
                                                            Close
                                                        </button>

                                                        <input type="submit"
                                                            class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10"
                                                            value="Submit" />

                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="table-bordered table-auto rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
                        <table id="student_studentinternship_table"
                            class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                            <thead class="bg-gray-50 dark:bg-black/20">
                                <tr class="">
                                    <th scope="col" class="dark:text-white/80">S.no</th>
                                    <th scope="col" class="dark:text-white/80">@sortablelink('id', 'Student name')</th>
                                    <th scope="col" class="dark:text-white/80">@sortablelink('usn', 'usn')</th>
                                    <th scope="col" class="dark:text-white/80">@sortablelink('batch', 'batch')</th>
                                    <th scope="col" class="dark:text-white/80">@sortablelink('id', 'internship name')</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @php
                                    $counter = 1;
                                @endphp
                                @if ($student_studentinternship != null)
                                    @foreach ($student_studentinternship as $sstudent)
                                        <tr class="">
                                            <td>{{ $counter++ }}</td>

                                            <td>{{ $sstudent->name }}</td>
                                            <td>{{ $sstudent->usn }}</td>
                                            <td>{{ $sstudent->batch }}</td>

                                            <td>{{ $studentinternship->title }}</td>
                                            <td>
                                                <div class="hs-tooltip ti-main-tooltip">

                                                    <form
                                                        action="{{ route('internship.student_studentinternship.destroy', [$studentinternship->id, $sstudent->pivot->id]) }}"
                                                        method="post">

                                                        <button onclick="return confirm('Are you Sure')"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                width="16" height="16">
                                                                <path
                                                                    d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z">
                                                                </path>
                                                            </svg>
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
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container mt-5">

                <a href="/Teaching/internship/studentinternship"
                    class="ti-btn bg-primary text-white hover:bg-primary focus:ring-primary dark:focus:ring-offset-white/10">Back</a>
            </div>

        </div>
    </div>
    </div>
@endsection

@section('scripts')
    <!-- FLATPICKR JS -->
    <script src="{{ asset('build/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- CHOICES JS -->
    <script src="{{ asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- FORM-LAYOUT JS -->
    @vite('resources/assets/js/profile-settings.js')

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
@endsection
