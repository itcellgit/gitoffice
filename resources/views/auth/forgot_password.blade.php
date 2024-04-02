@extends('layouts.custom-master')

@section('styles')

@endsection

@section('custom-body')
<body class="authentication-page">
@endsection

@section('content')

            <main id="content"  class="w-full max-w-md mx-auto p-6">
                <a href="{{url('index')}}" class="header-logo">
                    <img src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="mx-auto block dark:hidden">
                    <img src="{{asset('build/assets/img/brand-logos/git_logo.jpg')}}" alt="logo" class="mx-auto hidden dark:block">
                </a>
                <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot password?</h1>
                            <p class="mt-3 text-sm text-gray-600 dark:text-white/70 font-bold">
                                Remember your password?
                                <a class="text-primary decoration-2 hover:underline font-medium"
                                    href="{{url('login')}}">
                                    Sign in here
                                </a>
                            </p>
                        </div>

                        <div class="mt-5">
                            <!-- Form -->
                            @if(session('success'))
                                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                                    <p>We send a link to your email. Use that link to reset your password.</p>
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form action="{{route('forgot.password.update')}}" method="post">
                                @csrf
                                <div class="grid gap-y-4">
                                    <!-- Form Group -->
                                    <div>
                                        <label for="email" class="block text-sm mb-2 dark:text-white font-bold">Email address</label>
                                        <div class="relative">
                                            <input type="email" id="email" name="email"
                                            class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                            required>
                                            @if ($errors->has('email'))
                                                <span class="text-red">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <button type="submit"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Send Reset
                                        Link</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>

@endsection

@section('scripts')

@endsection