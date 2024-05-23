<div class="mb-0 border-0 shadow-none box">
    <div class="box-header">
        <h5 class="flex leading-none box-title"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Department History</h5>
    </div>
    <div class="box-body">
        <div class="overflow-auto rounded-sm table-auto table-bordered ti-custom-table-head">
            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                <thead class="bg-gray-50 dark:bg-black/20">
                <tr class="">
                    <th scope="col" class="font-bold dark:text-white/80 ">S.no</th>
                    <th scope="col" class="font-bold dark:text-white/80">Department Name</th>
                    <th scope="col" class="font-bold dark:text-white/80">Start Date</th>
                    <th scope="col" class="font-bold dark:text-white/80">End Date</th>
                    <th scope="col" class="font-bold dark:text-white/80">Duration</th>
                    <th scope="col" class="font-bold dark:text-white/80">Status</th>

                </tr>
                </thead>
                @php
                    $i=1;
                @endphp
                <tbody class="">
                    @foreach ($staff->departments as $dept)

                    <tr class="{{$dept->pivot->status =='active'?'':'bg-gray-200'}}">
                        <td>{{ $i++}}</td>
                        <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                            <div class="block w-full my-auto">

                                    {{$dept->dept_name}}

                            </div>
                        </div>
                        </td>
                        <td><span>{{\Carbon\Carbon::parse($dept->pivot->start_date)->format('d-M-Y') }}</span></td>
                        <td><span>{{ $dept->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($dept->pivot->end_date)->format('d-M-Y') }}</span></td>
                        <td><span>
                            @php
                                        $sdate=new DateTime($dept->pivot->start_date);

                                        if ($dept->pivot->end_date!=null)
                                            $edate=new DateTime($dept->pivot->end_date);
                                        else
                                            $edate=Carbon\Carbon::now();
                                            $difference=$sdate->diff($edate);
                                        @endphp

                               {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                            </span></td>
                        <td><span>{{$dept->pivot->status}}</span></td>

                        

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
