@extends('layouts.components.Ticketing.master-ticketing')

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
                    {{-- <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Welcome <span class="text-primary">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span></h3> --}}

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
                            @if($ticket->status != 'Resolved')
                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                        <path d="M11 20L1 12L11 4V9C16.5228 9 21 13.4772 21 19C21 19.2729 20.9891 19.5433 20.9676 19.8107C19.4605 16.9502 16.458 15 13 15H11V20Z"></path>
                                    </svg>
                                    Reply
                                </button>
                            @endif
                            {{-- <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                    <path d="M11 20L1 12L11 4V9C16.5228 9 21 13.4772 21 19C21 19.2729 20.9891 19.5433 20.9676 19.8107C19.4605 16.9502 16.458 15 13 15H11V20Z"></path>
                                </svg>
                                Reply
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
                                                    <div id="attachmentError" class="error text-red-700"></div>
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
                        
                        <div class="box-body">
                            <!-- Display main ticket -->
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
                                            <h3 class="my-auto text-gray-500 dark:text-white/70"><span class="text-dark dark:text-white">My Issue: {{$ticket->title}}</span></h3>
                                            <p class="my-auto ltr:ml-auto rtl:mr-auto text-gray-500 dark:text-white/70 text-xs">
                                                {{$ticket->created_at}}
                                            </p>
                                        </div>
                                        <div class="flex flex-col rtl:flex-row -space-y-2 rtl:space-x-reverse" style="margin-top: 10px;">
                                            <span class="text-dark dark:text-white">Description: {{$ticket->description}}</span>
                                            {{-- <img src="{{ asset('attachment/'.$ticket->attachment)}}" alt="NoImage" onclick="showLargeImage('{{ asset('attachment/'.$ticket->attachment)}}')" style="width: 50px; height: 50px;"> --}}
                                            @if(!empty($ticket->attachment))
                                                @php
                                                    $attachments = is_array(json_decode($ticket->attachment, true)) ? json_decode($ticket->attachment, true) : [$ticket->attachment];
                                                @endphp
                                                <div class="flex flex-wrap space-x-4 rtl:space-x-reverse">
                                                    @foreach($attachments as $attachment)
                                                    <img src="{{ asset('storage/attachment/'.$attachment)}}"  onclick="showLargeImage('{{ asset('storage/attachment/'.$attachment)}}')" class="h-32 w-32 mb-4">
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

<script>
    document.getElementById('updateStatusBtn').addEventListener('click', function() {
        var status = document.getElementById('ticketStatus').value;

        var formData = new FormData();
        formData.append('status', status);
        
        fetch("{{ route('ticket.reply.update', $ticket->id) }}", {
            method: 'PATCH',
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Handle response, maybe show a success message or update UI
            console.log(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>

@endsection
