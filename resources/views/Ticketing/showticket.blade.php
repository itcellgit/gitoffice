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
                <h3 class="text-2xl font-medium text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white">
                    <span class="text-primary"></span>
                </h3>
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

        <!-- Start::row-1 -->
        <div class="box">
            <div class="box-body">
                <div class="flex">
                    <!--modal Start Here-->
                    <div class="hs-tooltip ti-main-tooltip">
                        <!-- Your modal code here -->

                         <!--modal Start Here-->
                         {{-- <div class="hs-tooltip ti-main-tooltip">
                            <button data-hs-overlay="#validate_edit_modal"
                                class="relative w-8 h-8 p-0 m-0 transition-none rounded-full hs-dropdown-toggle hs-tooltip-toggle ti-btn focus:outline-none ti-btn-soft-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 20L1 12L11 4V9C16.5228 9 21 13.4772 21 19C21 19.2729 20.9891 19.5433 20.9676 19.8107C19.4605 16.9502 16.458 15 13 15H11V20Z"></path></svg>
                                <span
                                    class="px-2 py-1 text-xs font-medium text-white bg-gray-900 shadow-sm hs-tooltip-content ti-main-tooltip-content dark:bg-slate-700"
                                    role="tooltip">
                                   Reply
                                </span>
                            </button>
                            <div id="validate_edit_modal" class="hidden hs-overlay ti-modal">
                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                    <div class="ti-modal-content">
                                        <div class="ti-modal-header">
                                            <h3 class="ti-modal-title">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                Reply
                                            </h3>
                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                data-hs-overlay="#validate_edit_modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <form action="{{ route('ticket.reply.store', $ticket->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="ti-modal-body">
                                                <div class="max-w-sm space-y-3 pb-6">
                                                    <label for="with-corner-hint" class="ti-form-label">title: </label>
                                                    <input type="text" name="title" class="ti-form-input" required placeholder="title">
                                            
                                                </div>
                                                <div class="max-w-sm space-y-3 pb-6">
                                                    <label for="" class="ti-form-label">Description:</label>
                                                    <textarea name="description" class="ti-form-input" required placeholder="Description" style="width: 100%; height: 150px;"></textarea>
                                                </div>
                                                
                                                    <div class="max-w-sm space-y-3 pb-6">
                                                        <label for="" class="ti-form-label">attachment :</label>
                                                        <input type="file" name="attachment" class="ti-form-input"  placeholder="attachment">
                                                    </div>
                                            </div>
                                            <div class="ti-modal-footer">
                                                <button type="button"
                                                    class="font-medium text-gray-700 align-middle bg-white shadow-sm hs-dropdown-toggle ti-btn ti-border hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                    data-hs-overlay="#validate_edit_modal">
                                                    Close
                                                </button>
                                                <input type="submit" class="text-white ti-btn bg-primary hover:bg-primary focus:ring-primary dark:focus:ring-offset-white/10" value="Save"/>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                        <!--Modal Ends Here-->
                    </div>
                    <!--Modal Ends Here-->
                   
                </div>
                <div class="flex">
                    <h5 class="my-auto box-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-church"
                            width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <!-- SVG Path -->
                        </svg>
                            
                            Ticket Status:&nbsp;&nbsp;

                            <span style="@if($ticket->status =='Open') color: red; @elseif($ticket->status =='Pending') color: Orange; @elseif($ticket->status =='Resolved') color: green; @endif">{{$ticket->status}}</span>

                    </h5>
                     <!---button code--->
                    <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 20L1 12L11 4V9C16.5228 9 21 13.4772 21 19C21 19.2729 20.9891 19.5433 20.9676 19.8107C19.4605 16.9502 16.458 15 13 15H11V20Z"></path></svg>
                            Reply
                        </button>
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
                                                        <label for="with-corner-hint" class="ti-form-label">title: </label>
                                                        <input type="text" name="title" class="ti-form-input" required placeholder="title">
                                                    </div>
                                                        <div class="max-w-sm space-y-3 pb-6">
                                                            <label for="" class="ti-form-label">Description:</label>
                                                            <textarea name="description" class="ti-form-input" required placeholder="Description" style="width: 100%; height: 150px;"></textarea>
                                                        </div>
                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                <label for="" class="ti-form-label">attachment :</label>
                                                                <input type="file" name="attachment" class="ti-form-input"  placeholder="attachment">
                                                            </div>
                                                </div>
                                                    <div class="ti-modal-footer">
                                                        <button type="button"
                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                            data-hs-overlay="#hs-medium-modal">
                                                                Close
                                                        </button>
                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Save"/>
                                                    </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                <!---button code ends here-->
                   
                </div>
                
                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                    <table id="ticketing_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                        <thead class="bg-gray-50 dark:bg-black/20">
                            <tr class="">
                                <th scope="col" class="dark:text-white/80 font-bold">SL.NO</th>
                                <th scope="col" class="dark:text-white/80 font-bold">Title</th>
                                <th scope="col" class="dark:text-white/80 font-bold">Description</th>
                                <th scope="col" class="dark:text-white/80 font-bold">status</th>
                                <th scope="col" class="dark:text-white/80 font-bold">Image</th>
                                
                            </tr>
                        </thead>
                        @php
                            $i=1;
                        @endphp
                        <tbody class="">
                            <td><span>{{$i++}}</span></td>
                            <td><span>{{$ticket->title}}</span></td>
                            <td><span>{{$ticket->description}}</span></td>
                            <td><span>{{$ticket->status}}</span></td>
                            <td>
                                <span>
                                    <img src="{{ asset('attachment/'.$ticket->attachment)}}" alt="Thumbnail" style="max-width: 100px; max-height: 100px; cursor: pointer;" onclick="showLargeImage('{{ asset('attachment/'.$ticket->attachment)}}')" >
                                </span>
                            </td>
                            
                        </tbody>
                    </table>
                </div>
                <div class="flex">
                    <h5 class="box-title my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-church"
                            width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <!-- SVG Path -->
                        </svg>
                        Reply
                    </h5>
                </div>
                {{-- postticket table --}}
                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                    <table id="postticket_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                        <thead class="bg-gray-50 dark:bg-black/20">
                            <tr class="">
                                <th scope="col" class="dark:text-white/80 font-bold">SL.NO</th>
                                <th scope="col" class="dark:text-white/80 font-bold">Title</th>
                                <th scope="col" class="dark:text-white/80 font-bold">Description</th>
                                <th scope="col" class="dark:text-white/80 font-bold">Attachment</th>
                                <th scope="col" class="dark:text-white/80 font-bold">User</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @php $i=1; @endphp
                            @foreach($postticket as $pt)
                            <tr>
                                <td><span>{{$i++}}</span></td>
                                <td><span>{{$pt->title}}</span></td>
                                <td><span>{{$pt->description}}</span></td>
                                <td>
                                    <span>
                                        <img src="{{ asset('attachment/'.$pt->attachment)}}" style="max-width: 100px; max-height: 100px; cursor: pointer;" onclick="showLargeImage('{{ asset('attachment/'.$pt->attachment)}}')" >
                                    </span>
                                </td>
                                <td><span>{{$pt->user->email}}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>         
@endsection

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
