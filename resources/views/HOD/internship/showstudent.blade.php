@extends('layouts.components.HOD.internship.master-internship')


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
                            Interactions
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                                        height="32">
                                        <path
                                            d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z">
                                        </path>
                                    </svg>
                                    Interaction of - <b
                                        style="color:red;font-size:18px">{{ $student->name }}({{ $student->usn }})</b>
                                </h5>

                                {{-- <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary"
                                        data-hs-overlay="#hs-medium-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                            height="16">
                                            <path
                                                d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"
                                                fill="rgba(255,255,255,1)"></path>
                                        </svg>
                                        About Interaction
                                    </button>

                                    <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                            <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h3 class="ti-modal-title">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            width="16" height="16">
                                                            <path
                                                                d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z">
                                                            </path>
                                                        </svg>
                                                        Add Interaction
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
                                                    action="{{ route('HOD.internship.student.interaction.store', $student->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="ti-modal-body">


                                                        <div class="max-w-sm space-y-3 pb-6">
                                                            <label for="" class="ti-form-label">Industry-Advisor Name : </label>
                                                            <select name="spoc_id" id="spoc_id" class="form-control"
                                                                class="ti-form-input" required>
                                                                <option value="">Select Industry-Advisor Name</option>
                                                                @foreach ($spocs as $id)
                                                                    <option value="{{ $id->id }}">
                                                                        {{ $id->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="max-w-sm space-y-3 pb-6">
                                                            <label for="" class="ti-form-label">Date Of Interaction : </label>
                                                            <input type="date" name="idate" class="ti-form-input"
                                                                required placeholder="Enter Date">
                                                        </div>

                                                        <div class="max-w-sm space-y-3 pb-6">
                                                            <label for="" class="ti-form-label">Topic : </label>
                                                            <textarea type="textarea" name="topic" class="ti-form-input" required placeholder="Enter Topic of discussion"></textarea>
                                                        </div>

                                                        <div class="max-w-sm space-y-3 pb-6">
                                                            <label for="" class="ti-form-label">Discussion :
                                                            </label>
                                                            <textarea type="textarea" name="description" class="ti-form-input" required placeholder="Enter Description"></textarea>
                                                        </div>

                                                        <div class="max-w-sm space-y-3 pb-6">
                                                            <label for="" class="ti-form-label">File : </label>
                                                            <input type="file" name="file" class="ti-form-input"
                                                                required placeholder="Attach file">
                                                        </div>



                                                        <div class="max-w-sm space-y-3 pb-6">
                                                            <label for="" class="ti-form-label">Interaction Type :
                                                            </label>
                                                            <select id="type" name="type" class="ti-form-input"
                                                                required>
                                                                <option value=" ">Select</option>
                                                                <option value="Email">Email</option>
                                                                <option value="Phone">Phone</option>
                                                                <option value="Face To Face">Face To Face</option>

                                                            </select>
                                                        </div>

                                                        <div class="max-w-sm space-y-3 pb-6">
                                                            <label for="" class="ti-form-label">Interaction With :
                                                            </label>
                                                            <select id="interaction_with" name="interaction_with"
                                                                class="ti-form-input" required>
                                                                <option value=" ">Select</option>
                                                                <option value="Student">Student</option>
                                                                <option value="Industry-Advisor">Industry-Advisor</option>


                                                            </select>
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
                                </div> --}}






                            </div>
                        </div>
                    </div>



                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header"
                                    style="display: flex; justify-content: space-between; align-items: center;">
                                    <h5 class="box-title">Timeline</h5>
                                </div>
                                <div class="box-body">
                                    <div class="relative">
                                        <div class="timeline-start"></div>
                                        <div class="timeline-line"></div>
                                        <div class="timeline">
                                        @php
                                            $counter = 1;
                                        @endphp
                                            @if ($student->interaction && $student->interaction->count() > 0)
                                                @foreach ($student->interaction as $index => $timeline)
                                                    <div class="timeline-main">
                                                        <div
                                                            class="{{ $index % 2 == 0 ? 'timeline-left' : 'timeline-right' }}">
                                                            {{-- <div class="timeline-left"> --}}
                                                            <div class="timeline-body">
                                                                <div class="box">
                                                                    <div class="box-body p-4">
                                                                        <h6 class="font-semibold text-base mb-2">
                                                                            {{ $timeline->topic ?? '' }}</h6>
                                                                        <p
                                                                            class="text-xs text-gray-500 dark:text-white/70">
                                                                            {{ $timeline->description ?? '' }}</p>
                                                                    </div>
                                                                    <div class="box-footer bg-transparent p-4">
                                                                        <div
                                                                            class="sm:space-y-0 space-y-2 sm:flex items-center justify-between">
                                                                            <div
                                                                                class="sm:flex items-center sm:space-x-3 space-x-0 sm:space-y-0 space-y-2 rtl:space-x-reverse">
                                                                                <div class="flex">
                                                                                    <img class="avatar avatar-sm ring-0 rounded-full"
                                                                                        src="{{ asset('build/assets/img/users/2.jpg') }}"
                                                                                        alt="avatar">
                                                                                </div>
                                                                                <div>
                                                                                    <p
                                                                                        class="text-slate-700 font-semibold text-sm dark:text-white">

                                                                                        @if (isset($timeline))
                                                                                            @if ($timeline->interaction_with == 'Student' && isset($timeline->student))
                                                                                                {{-- Display the student's name --}}
                                                                                                {{ $student->name ?? 'No student name available' }}
                                                                                            @elseif($timeline->interaction_with == 'Industry-Advisor' && isset($timeline->spoc))
                                                                                                {{-- Display the industry advisor's name --}}
                                                                                                {{ $timeline->spoc->name ?? 'No industry advisor name available' }}
                                                                                            @else
                                                                                                No relevant interaction data
                                                                                                available
                                                                                            @endif
                                                                                        @else
                                                                                            No interaction available
                                                                                        @endif

                                                                                    </p>
                                                                                    <p
                                                                                        class="text-xs text-gray-500 dark:text-white/70">
                                                                                        {{ $timeline->idate ?? '' }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>


                                                                    

                                                                             
                                                                            <div
                                                                                class="space-x-0 sm:space-x-2 sm:text-end flex">
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                    <button
                                                                                        class="hs-dropdown-toggle m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                                        data-hs-overlay="#interaction_edit_modal{{ $counter }}">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 24 24"
                                                                                            width="16" height="16">
                                                                                            <path
                                                                                                d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                                                                            </path>
                                                                                        </svg>
                                                                                        <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                            role="tooltip">
                                                                                            Edit
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                                <div id="interaction_edit_modal{{ $counter }}"  class="hs-overlay hidden ti-modal">
                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                        <div class="ti-modal-content">
                                                                                            <div class="ti-modal-header">
                                                                                                <h3 class="ti-modal-title">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        width="16"
                                                                                                        height="16">
                                                                                                        <path
                                                                                                            d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    Edit details
                                                                                                </h3>
                                                                                                <button type="button"
                                                                                                    class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                    data-hs-overlay="#interaction_edit_modal{{ $counter }}">
                                                                                                    <span
                                                                                                        class="sr-only">Close</span>
                                                                                                    <svg class="w-3.5 h-3.5"
                                                                                                        width="8"
                                                                                                        height="8"
                                                                                                        viewBox="0 0 8 8"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                            fill="currentColor" />
                                                                                                    </svg>
                                                                                                </button>
                                                                                            </div>

                                                                                            <form
                                                                                                action="{{ route('HOD.internship.student.interaction.update',[$student->id, $timeline->id])}}"
                                                                                                method="post"
                                                                                                enctype="multipart/form-data">
                                                                                                @csrf
                                                                                                @method('patch')
                                                                                                <div class="ti-modal-body">
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                    
                                                                                                        <label for="" class="ti-form-label">Industry-Advisor  Name : </label>
                                                                                                            <select  name="spoc_id"  id="spoc_id"  class="ti-form-input">
                                                                                                                <option value="">Select Industry-Advisor Name </option>
                                                                                                                    @foreach ($spocs as $spoc)
                                                                                                                        <option  value="{{ $spoc->id }}"
                                                                                                                            {{ $timeline->spoc_id == $spoc->id ? 'selected' : '' }}>
                                                                                                                                {{ $spoc->name }}
                                                                                                                        </option>
                                                                                                                    @endforeach
                                                                                                            </select>
                                                                                                    </div>

                                                                                                         


                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Date Of Interaction :</label>
                                                                                                        <input type="date" name="idate" id="idate" class="ti-form-input" value="{{ $timeline->idate }}">
                                                                                                    </div>

                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Topic : </label>
                                                                                                        <textarea name="topic" id="topic" class="ti-form-input">{{ $timeline->topic }}</textarea>
                                                                                                    </div>

                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Discussion: </label>
                                                                                                        <textarea name="description" id="description" class="ti-form-input">{{ $timeline->description }}</textarea>
                                                                                                    </div>

                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">File:</label>
                                                                                                        <input type="file" name="file" id="file" class="ti-form-input">
                                                                                                                @if ($timeline->file)
                                                                                                                    <a
                                                                                                                         href="{{ route('HOD.internship.file.download', $timeline->file) }}">Current
                                                                                                                        File-</a>
                                                                                                                 @endif
                                                                                                                <!-- Display the name of the currently selected file -->
                                                                                                                @if ($timeline->file)
                                                                                                                    <span>Current File:{{ $timeline->file }}</span>
                                                                                                                @endif
                                                                                                    </div>

                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Interaction Type : </label>
                                                                                                        <select id="type" name="type" class="ti-form-input" required>
                                                                                                            <option value=""> Select</option>
                                                                                                            <option value="Email" {{ $timeline->type == 'Email' ? 'selected' : '' }}>
                                                                                                                Email
                                                                                                            </option>
                                                                                                            <option value="Phone" {{ $timeline->type == 'Phone' ? 'selected' : '' }}>
                                                                                                                Phone
                                                                                                            </option>
                                                                                                            <option value="Face To Face" {{ $timeline->type == 'Face To Face' ? 'selected' : '' }}>
                                                                                                                Face To Face
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </div>

                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Interaction With : </label>
                                                                                                        <select id="interaction_with" name="interaction_with" class="ti-form-input">
                                                                                                            <option value=""> Select </option>
                                                                                                            <option value="Student" {{ $timeline->interaction_with == 'Student' ? 'selected' : '' }}>
                                                                                                                Student
                                                                                                            </option>
                                                                                                            <option value="Industry-Advisor" {{ $timeline->interaction_with == 'Industry-Advisor' ? 'selected' : '' }}>
                                                                                                                Industry-Advisor
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ti-modal-footer">
                                                                                                    <button type="button"
                                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                        data-hs-overlay="#interaction_edit_modal{{ $counter }}">
                                                                                                        Close
                                                                                                    </button>
                                                                                                    <input type="submit"
                                                                                                        class="ti-btn bg-warning text-white hover:bg-warning focus:ring-primary dark:focus:ring-offset-white/10"
                                                                                                        value="Update" />
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @php
                                                                                $counter++;
                                                                            @endphp







                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="bg-dark text-white timeline-icon">

                                                            @if (isset($timeline))
                                                                @if ($timeline->interaction_with == 'Student' && isset($timeline->student))
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24" width="16" height="16"
                                                                        fill="rgba(255,255,255,1)">
                                                                        <path
                                                                            d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z">
                                                                        </path>
                                                                    </svg>
                                                                @elseif($timeline->interaction_with == 'Industry-Advisor' && isset($timeline->spoc))
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24" width="12" height="12"
                                                                        fill="rgba(255,255,255,1)">
                                                                        <path
                                                                            d="M12 19H14V6.00003L20.3939 8.74028C20.7616 8.89786 21 9.2594 21 9.65943V19H23V21H1V19H3V5.6499C3 5.25472 3.23273 4.89659 3.59386 4.73609L11.2969 1.31251C11.5493 1.20035 11.8448 1.314 11.9569 1.56634C11.9853 1.63027 12 1.69945 12 1.76941V19Z">
                                                                        </path>
                                                                    </svg>
                                                                @else
                                                                    No relevant interaction data available
                                                                @endif
                                                            @else
                                                                No interaction available
                                                            @endif

                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                        <div class="timeline-end"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="container mt-5">

                <a href="/HOD/internship/student"
                    class="ti-btn bg-primary text-white hover:bg-primary focus:ring-primary dark:focus:ring-offset-white/10">Back</a>
            </div>

                        </div>
                    </div>

                </div>

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
