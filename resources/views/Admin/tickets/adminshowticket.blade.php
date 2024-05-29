
@extends('layouts.components.Admin.adminmaster')

@section('styles')
    <!-- Add your styles here if needed -->
@endsection

@section('content')


<div class="content">
    
    <!-- Start::main-content -->
   
    <div class="main-content">
        <!-- Page Header -->
            <div class="justify-between block page-header sm:flex">
                <div>
                    <h3 class="text-primary hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Welcome Super Admin </h3>
                    <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="{{route('Admin.tickets.adminticket')}}">
                        Back
                   </a>

                </div>
                <ol class="flex items-center min-w-0 whitespace-nowrap">
                    <li class="text-sm">
                        <a class="flex items-center font-semibold truncate text-primary hover:text-primary dark:text-primary"
                            href="javascript:void(0);">
                            My Dashboard-tickets
                            <i class="flex-shrink-0 mx-3 overflow-visible text-gray-300 ti ti-chevrons-right dark:text-gray-300 rtl:rotate-180"></i>
                        </a>
                    </li>
                </ol>
            </div>
        <!-- Page Header Close -->
        
        <div class="box">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12">
                    <div class="box">
                        <div class="box-header flex justify-between items-center">
                            <h5 class="box-title">Ticket Status:&nbsp;&nbsp;
                                <span style="@if($ticket->status =='Open') color: red; @elseif($ticket->status =='Pending') color: Orange; @elseif($ticket->status =='Resolved') color: green; @endif">{{$ticket->status}}</span>
                             </h5>
                            <form action="{{ route('ticket.reply.update', $ticket->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="ti-modal-body flex justify-between items-center">
                                    <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label">Ticket status:</label>
                                       <select class="ti-form-select role" name="status">
                                            <option value="#">Choose One</option>
                                            <option value="Open" {{$ticket->status=='Open'? 'selected': ''}}>Open</option>
                                            <option value="Pending" {{$ticket->status=='Pending'?'selected':''}}>Pending</option>
                                            <option value="Resolved" {{$ticket->status=='Resolved'?'selected':''}}>Resolved</option>
                                        </select>
                                    </div>
                                    <div class="ti-modal-footer">
                             
                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="UpdateStatus" {{ $ticket->status == 'Resolved' ? 'disabled' : '' }}/>

                                    </div>
                                </div>
                            </form>
                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                    <path d="M11 20L1 12L11 4V9C16.5228 9 21 13.4772 21 19C21 19.2729 20.9891 19.5433 20.9676 19.8107C19.4605 16.9502 16.458 15 13 15H11V20Z"></path>
                                </svg>
                                Reply
                            </button>
                            {{-- <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#validate-status-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"></path></svg>
                                status
                            </button> --}}
                            <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                    <div class="ti-modal-content">
                                        <div class="ti-modal-header">
                                            <h3 class="ti-modal-title">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                Add New Reply
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
                                        <form action="{{ route('ticket.reply.store', $ticket->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="ti-modal-body">
                                                <div class="max-w-sm space-y-3 pb-6">
                                                    <label for="with-corner-hint" class="ti-form-label">My Issue : </label>
                                                    <input type="text" name="title" class="ti-form-input" required placeholder="title" id="myissue">
                                                    <div id="myissueError" class="error text-red-700"></div>

                                                </div>
                                                <div class="max-w-sm space-y-3 pb-6">
                                                    <label for="" class="ti-form-label">Description:</label>
                                                    <textarea name="description" class="ti-form-input" required placeholder="Please Describe the issue here..." style="width: 100%; height: 150px;" id="description"></textarea>
                                                    <div id="descriptionError" class="error text-red-700"></div>

                                                </div>
                                                {{-- <div class="max-w-sm space-y-3 pb-6">
                                                    <label for="" class="ti-form-label">Attachment :</label>
                                                    <input type="file" name="attachment" class="ti-form-input"  placeholder="attachment" id="attachment">
                                                </div> --}}
                                                <div class="max-w-sm space-y-3 pb-6">
                                                    <label for="postAttachment" class="ti-form-label">Attachment:</label>
                                                    <input type="file" name="post_attachment[]" id="post_attachment" class="ti-form-input" accept="image/*" multiple placeholder="Choose images">
                                                    <h3>Select multiple images</h3>
                                                    
                                                </div>
                                            </div>
                                            <div class="ti-modal-footer">
                                                <button type="button"
                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                    data-hs-overlay="#hs-medium-modal">
                                                        Close
                                                </button>
                                                    <input type="submit" id="reply_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Save"/>
                                            </div>
                                        </form> 
                                    </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- status button --}}
                        {{-- <div class="box-header flex justify-between items-center"> --}}
                             {{-- <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#validate-status-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"></path></svg>
                                status
                            </button> --}}
                            {{-- <div id="validate-status-modal" class="hs-overlay hidden ti-modal">
                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                    <div class="ti-modal-content">
                                        <div class="ti-modal-header">
                                            <h3 class="ti-modal-title">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                Edit Status
                                            </h3>
                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                data-hs-overlay="#validate-status-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </div>
                                        <form action="{{ route('ticket.reply.update', $ticket->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')
                                            <div class="max-w-sm space-y-3 pb-6 mt-5">
                                            {{-- <label for="" class="ti-form-label font-bold">Ticket Status:</label> --}}
                                                {{-- <select class="ti-form-select role" name="status">
                                                    <option value="#">Choose One</option>
                                                    <option value="Open" {{$ticket->status=='Open'? 'selected': ''}}>Open</option>
                                                    <option value="Pending" {{$ticket->status=='Pending'?'selected':''}}>Pending</option>
                                                    <option value="Resolved" {{$ticket->status=='Resolved'?'selected':''}}>Resolved</option>
                                                 </select>
                                            </div>
                                            <div class="ti-modal-footer">
                                                <button type="button"
                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                    data-hs-overlay="#hs-medium-modal">
                                                        Close
                                                </button>
                                                    <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                            </div>
                                        </form> 
                                    </div> --}}
                                    {{-- </div> --}}
                                {{-- </div>
                            </div> --}} 
                          
                            
                        {{-- </div>  --}}
                
                        {{-- status button code --}}
                        
                        
                        <div class="box-body">
                            <!-- Display main ticket -->
                            <div class="flex flex-row">
                                <div class="mx-auto relative">
                                    <div class="h-full w-6 flex items-center justify-center">
                                        <div class="h-full w-[3px] bg-gray-100 dark:bg-black/20 pointer-events-none">
                                        </div>
                                    </div>
                                    <div class="avatar avatar-xs absolute top-0 rounded-full bg-gray-200 shadow text-center ltr:-left-[4px] rtl:-right-[4px]">
                                        <img src="{{asset('build/assets/img/users/avtar.jpeg')}}" class="rounded-full" alt="timeline-img">
                                       

                                    </div>
                                </div>
                                <div class="flex w-full pb-8">
                                    <div class="ltr:ml-5 rtl:mr-5 rounded-sm ltr:mr-auto rtl:ml-auto my-auto w-full space-y-3">
                                        <div class="sm:flex">
                                            <h3 class="my-auto text-gray-500 dark:text-white/70">
                                                <span class="text-dark dark:text-white">My Issue: {{$ticket->title}}</span>
                                            </h3>
                                            <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                {{$ticket->created_at}}
                                            </p>
                                        </div>
                                        <div class="flex flex-col space-y-4">
                                            <span class="text-dark dark:text-white">Description: {{$ticket->description}}</span>
                                            @if(!empty($ticket->attachment))
                                                @php
                                                    $attachments = is_array(json_decode($ticket->attachment, true)) ? json_decode($ticket->attachment, true) : [$ticket->attachment];
                                                @endphp
                                    
                                                <div class="flex flex-wrap space-x-4 rtl:space-x-reverse">
                                                    @foreach($attachments as $at)
                                                        <img src="{{ asset('storage/attachment/'.$at)}}" alt="NoImage" onclick="showLargeImage('{{ asset('storage/attachment/'.$at)}}')" class="h-32 w-32 mb-4">
                                                    @endforeach
                                                </div>
                                            @else
                                                <p class="text-dark dark:text-white">No attachments available.</p>
                                            @endif
                                        </div>
                                    </div>
                                  </div>
                            </div>
                             <!-- Display additional tickets -->
                             @foreach($postticket as $pt)
                             <div class="flex flex-row">
                                 <div class="mx-auto relative">
                                     <div class="h-full w-6 flex items-center justify-center">
                                         <div class="h-full w-[3px] bg-gray-100 dark:bg-black/20 pointer-events-none"></div>
                                     </div>
                                     <div class="avatar avatar-xs absolute top-0 rounded-full bg-gray-200 shadow text-center ltr:-left-[4px] rtl:-right-[4px]">
                                         <img src="{{asset('build/assets/img/users/avtar.jpeg')}}" class="rounded-full" alt="timeline-img">
                                     </div>
                                 </div>
                                 <div class="flex w-full pb-8">
                                     <div class="ltr:ml-5 rtl:mr-5 rounded-sm ltr:mr-auto rtl:ml-auto my-auto w-full space-y-3">
                                         <div class="sm:flex">
                                             <h3 class="my-auto text-gray-500 dark:text-white/70"><span class="text-dark dark:text-white">My Issue: {{$pt->title}}</span></h3>
                                             <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                 {{$pt->created_at}}
                                             </p>
                                         </div>
                                         <div class="flex flex-col rtl:flex-row -space-y-2 rtl:space-x-reverse" style="margin-top: 10px;">
                                             <span class="text-dark dark:text-white">Description: {{$pt->description}}</span>
                                             @if(!empty($pt->post_attachment))
                                                 @php
                                                     $attachments = is_array(json_decode($pt->post_attachment, true)) ? json_decode($pt->post_attachment, true) : [$pt->post_attachment];
                                                 @endphp
                                                 <div class="flex flex-wrap space-x-4 rtl:space-x-reverse">
                                                     @foreach($attachments as $attachment)
                                                     <img src="{{ asset('storage/post_attachment/'.$attachment)}}" onclick="showLargeImage('{{ asset('storage/post_attachment/'.$attachment)}}')" class="h-32 w-32 mb-4">
                                                     @endforeach
                                                 </div>
                                             @else
                                                 <p class="text-dark dark:text-white">No attachments available.</p>
                                             @endif
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!---timeline code ends here--->
        </div>
    </div>
</div>         
@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>
        <!-- pro activity other sponsored code start-->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
           <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

              

                 // Validation for reply
                  
                  $(document).on('click', '#reply_store_add_btn', function (e) {
                    var myissue = $('#myissue').val();
                    var description = $('#description').val();
                   // var attachment = $('#attachment')[0].files[0]; // Get the selected file
                    var flag = false;

                    if (myissue.trim() === '') {
                        $('#myissueError').text('My Issue is missing');
                        flag = true;
                    } else {
                        $('#myissueError').text(''); 
                    }

                    if (description.trim() === '') {
                        $('#descriptionError').text('Description is missing');
                        flag = true;
                    } else {
                        $('#descriptionError').text(''); 
                    }

                    // if (!attachment) {
                    //     $('#attachmentError').text('Please choose a file');
                    //     flag = true;
                    // }

                    if (flag == true) {
                        e.preventDefault();
                    }
                });

               


            });   
        </script>



        <!-- JavaScript to show large image in modal -->
        <script>
            function showLargeImage(imageSrc) {
                var modal = document.createElement('div');
                modal.style.position = 'fixed';
                modal.style.top = '0';
                modal.style.left = '0';
                modal.style.width = '100%';
                modal.style.height = '100%';
                modal.style.backgroundColor = 'rgba(0,0,0,0.7)';
                modal.style.display = 'flex';
                modal.style.alignItems = 'center';
                modal.style.justifyContent = 'center';
                modal.style.zIndex = '9999';

                var largeImage = document.createElement('img');
                largeImage.src = imageSrc;
                largeImage.style.maxWidth = '80%';
                largeImage.style.maxHeight = '80%';
                largeImage.style.borderRadius = '5px';
                largeImage.style.boxShadow = '0 0 10px rgba(0,0,0,0.5)';

                modal.appendChild(largeImage);
                document.body.appendChild(modal);

                modal.onclick = function() {
                    document.body.removeChild(modal);
                };
            }
        </script>


       

@endsection
