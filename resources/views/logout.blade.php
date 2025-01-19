@extends('layouts.app')

@section('content')

                <section class="pt-44 pb-32 flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                                <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                                    <div class="grid flex-col grid-cols-12">
                                        <div class="col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                                            <div class="p-10">
                                                <a href="index.html">
                                                    <img src="{{asset('images/logo-light.png')}}" alt="" class="hidden mx-auto dark:block">
                                                    <img src="{{asset('images/logo-dark.png')}}" alt="" class="block mx-auto dark:hidden">
                                                </a>
                                                <div class="mt-5">
                                                    <img src="{{asset('images/auth/sign-in.png')}}" alt="">
                                                     
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                                            <div class="flex flex-col items-center justify-center h-full p-12">
                                                <div class="mb-6 text-center">
                                                    <h5 class="mb-2 text-lg text-white">You are Logged Out</h5>
                                                    <p class="text-white/80">Thank you for using Jobcy</p> 
                                                </div>
                                                <a href="sign-in.html" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease">Sign In</a>
                                                <div class="mt-5 text-center">
                                                    <p class="text-white">Don't have an account ? <a href="sign-up.html" class="text-white underline fw-medium"> Sign Up </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
@endsection