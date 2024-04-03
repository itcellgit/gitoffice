@extends('layouts.master')

@section('styles')

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Progress</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Components
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Progress
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Basic Progress</h5>
                                        </div>
                                        <div class="box-body space-y-4">
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Different Colored Progress</h5>
                                        </div>
                                        <div class="box-body space-y-4">
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-secondary" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Progress With Label</h5>
                                        </div>
                                        <div class="box-body space-y-4">
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0</div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-secondary text-xs text-white text-center" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-warning text-xs text-white text-center" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-info text-xs text-white text-center" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-danger text-xs text-white text-center" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-success text-xs text-white text-center" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Progress Bar Sizes</h5>
                                        </div>
                                        <div class="box-body space-y-4">
                                            <div class="ti-main-progress  h-1 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-secondary text-xs text-white text-center" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-warning text-xs text-white text-center" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">sm</div>
                                            </div>
                                            <div class="ti-main-progress  h-3 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-info text-xs text-white text-center" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">md</div>
                                            </div>
                                            <div class="ti-main-progress  h-4 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-danger text-xs text-white text-center" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">lg</div>
                                            </div>
                                            <div class="ti-main-progress  h-6 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-success text-xs text-white text-center" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">xl</div>
                                            </div>
                                            <div class="ti-main-progress  h-8 bg-gray-200 dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">xxl</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Multiple bars Progress</h5>
                                        </div>
                                        <div class="box-body space-y-4">
                                            <div class="ti-main-progress h-1 bg-gray-200 rounded-full overflow-hidden dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-primary" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-secondary" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress h-3 bg-gray-200 rounded-full overflow-hidden dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-secondary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-pink-500" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress h-4 bg-gray-200 rounded-full overflow-hidden dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-green-500" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-red-500" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-amber-500" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress h-6 bg-gray-200 rounded-full overflow-hidden dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-yellow-500" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-lime-500" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-orange-500" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ti-main-progress h-8 bg-gray-200 rounded-full overflow-hidden dark:bg-black/20">
                                                <div class="ti-main-progress-bar bg-sky-500" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-fuchsia-500" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="ti-main-progress-bar bg-rose-500" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Vertical Progress</h5>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex space-x-8 rtl:space-x-reverse">
                                                <div class="ti-main-progress flex-col flex-nowrap justify-end w-2 h-40 bg-gray-200 dark:bg-black/20">
                                                    <div class="bg-primary ti-main-progress-bar" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ti-main-progress flex-col flex-nowrap justify-end w-3 h-40 bg-gray-200 dark:bg-black/20">
                                                    <div class="bg-secondary ti-main-progress-bar" role="progressbar" style="height: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ti-main-progress flex-col flex-nowrap justify-end w-4 h-40 bg-gray-200 dark:bg-black/20">
                                                    <div class="bg-warning ti-main-progress-bar" role="progressbar" style="height: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ti-main-progress flex-col flex-nowrap justify-end w-5 h-40 bg-gray-200 dark:bg-black/20">
                                                    <div class="bg-info ti-main-progress-bar" role="progressbar" style="height: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ti-main-progress flex-col flex-nowrap justify-end w-6 h-40 bg-gray-200 dark:bg-black/20">
                                                    <div class="bg-danger ti-main-progress-bar" role="progressbar" style="height: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

@endsection