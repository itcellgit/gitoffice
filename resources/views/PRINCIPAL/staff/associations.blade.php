<div class="box border-0 shadow-none mb-0">
    <div class="box-header">
        <h5 class="box-title leading-none flex"><i class="ri ri-lock-line ltr:mr-2 rtl:ml-2"></i> Staff Association</h5>
    </div>
    <div class="box-body">

        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                <thead class="bg-gray-50 dark:bg-black/20">
                <tr class="">
                    <th scope="col" class="dark:text-white/80 font-bold">S.no</th>
                    <th scope="col" class="dark:text-white/80 font-bold">Association</th>
                    <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                    <th scope="col" class="text-red font-bold">Tenure End Date</th>
                    <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                    <th scope="col" class="dark:text-white/80 font-bold">Duartion</th>
                    <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                </tr>
                </thead>
                @php
                    $i=1;
                @endphp
                <tbody class="">
                    @foreach ($staff->associations as $association)
                    <tr class="{{$association->pivot->status=='active'?'':'bg-gray-300'}}">
                        <td>{{ $i++ }}</td>
                        <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                            <div class="block w-full my-auto">
                                    {{$association->asso_name}}
                            </div>
                        </div>
                        </td>
                        <td><span>{{\Carbon\Carbon::parse($association->pivot->start_date)->format('d-M-Y') }}</span></td>
                        <td><span class="text-red-500">{{$association->pivot->closing_date==null?'--NA--':\Carbon\Carbon::parse($association->pivot->closing_date)->format('d-M-Y') }}</span></td>
                        <td><span>{{$association->pivot->end_date==null?'--NA--': \Carbon\Carbon::parse($association->pivot->end_date)->format('d-M-Y')  }}</span></td>
                        <td><span>
                            @php
                                    $sdate=new DateTime($association->pivot->start_date);


                            if($association->pivot->end_date!=null)
                                    $edate=new DateTime($association->pivot->end_date);
                            else
                                    $edate=Carbon\Carbon::now();


                            $difference=$sdate->diff($edate);
                            @endphp

                                {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}


                        </span></td>
                        <td><span>{{$association->pivot->status}}</span></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
