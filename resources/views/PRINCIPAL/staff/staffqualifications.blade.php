    {{-- qualification section start here --}}
    <div class="box border-0 shadow-none mb-0">
        <div class="box-header">
            <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Qualification History</h5>
        </div>
        <div class="box-body">
           

            <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap mix-blend-overlay">
                    <thead class="bg-gray-50 dark:bg-black/20">
                        <tr class="">
                            <th scope="col" class="dark:text-white/80 font-bold ">S.no</th>
                            <th scope="col" class="dark:text-white/80 font-bold ">Qualification Name</th>
                            <th scope="col" class="dark:text-white/80 font-bold">Board/University</th>
                            <th scope="col" class="dark:text-white/80 font-bold">Year of Passing</th>
                            <th scope="col" class="dark:text-white/80 font-bold">Grade</th>
                            <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                                                                                          
                        </tr>                                                             
                    </thead>
                    @php
                        $i=1;
                    @endphp
                    <tbody class="">
                        @forelse($staff->qualifications as $qualification)
                            <tr>
                                <td><span>{{$i++}}</span></td>
                                <td><span>{{$qualification->qual_name}}</span></td>
                                <td><span>{{$qualification->pivot->board_university}}</span></td>
                                <td><span>{{$qualification->pivot->yop}}</span></td>
                                <td><span>{{$qualification->pivot->grade}}</span></td>
                                <td><span>{{$qualification->pivot->status}}</span></td>
                                
                            </tr>
                            @empty
                            <tr>
                            No records
                            </tr>
                        @endforelse
                    </tbody>
                </table>  
            </div>   
        </div>
    </div>
    {{-- qualification section Ends here --}}


    <!-- qualification-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.status_type').change(function () {
                if ($(this).val() === 'Completed') {
                    $('.yop').show();
                    $('.grade').show();

                } else {
                    $('.yop').hide();
                    $('.grade').hide();

                }
            });
        });
    </script>
    <!-- qualification-->

                                                 
                                       