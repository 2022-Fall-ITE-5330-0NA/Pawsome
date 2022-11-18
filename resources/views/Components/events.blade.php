@extends('layouts.master')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Socialite Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


</head>
<body>


<div id="wrapper">
    <!-- Main Contents -->
    <div class="main_content">
        <div class="mcontainer">

            <div class="flex justify-between relative md:mb-4 mb-3">
                <div class="flex-1">
                    <h2 class="text-2xl font-semibold"> Events </h2>
                    {{--                    <nav class="responsive-nav border-b md:m-0 -mx-4">--}}
                    {{--                        <ul>--}}
                    {{--                            <li class="active"><a href="#" class="lg:px-2">   Suggestions </a></li>--}}
                    {{--                            <li><a href="#" class="lg:px-2"> Joined </a></li>--}}
                    {{--                            <li><a href="#" class="lg:px-2"> Interested </a></li>--}}
                    {{--                            <li><a href="#" class="lg:px-2"> Past </a></li>--}}
                    {{--                            <li><a href="#" class="lg:px-2"> Coming </a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </nav>--}}
                </div>
                <a href="#"
                   class="flex items-center justify-center h-9 lg:px-5 px-2 rounded-md bg-blue-600 text-white space-x-1.5 absolute right-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="md:block hidden"> Create </span>
                </a>
            </div>

            <div class="relative" uk-slider="finite: true">

                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-2.jpg" alt="" class="">
                                    <div
                                        class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                        Happening now
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-red-500 font-semibold"> Happening now</div>
                                    <a href="timeline-event.html" class="box-title mb-1"> The global creative </a>
                                    <div class="text-sm font-medium mt-1">Ankara</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-4.jpg" alt="" class="">
                                    <div
                                        class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                        Upcomming
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                    <a href="timeline-event.html" class="box-title  mb-1"> Safety and Flight </a>
                                    <div class="text-sm font-medium mt-1">London</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-2.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-green-500 font-semibold">Conference</div>
                                    <a href="timeline-event.html" class="box-title mb-1"> Accept Who I Am</a>
                                    <div class="text-sm font-medium mt-1">Dubai</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-4.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-yellow-500 font-semibold">Upcomming</div>
                                    <a href="timeline-event.html" class="box-title mb-1"> Perspective is everything </a>
                                    <div class="text-sm font-medium mt-1">Dubai</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-2.jpg" alt="" class="">
                                    <div
                                        class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                        Happening
                                        now
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-red-500 font-semibold"> Happening now</div>
                                    <a href="timeline-event.html" class="box-title mb-1"> The global creative </a>
                                    <div class="text-sm font-medium mt-1">Ankara</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10"
                       href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10"
                       href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>
            </div>

            <br>

            {{--            <div class="my-4 flex items-center justify-between">--}}
            {{--                <div>--}}
            {{--                    <h2 class="text-xl font-semibold"> Lists You May Like </h2>--}}
            {{--                </div>--}}
            {{--                <a href="#" class="text-blue-500"> See all </a>--}}
            {{--            </div>--}}

            {{--            <div class="relative" uk-slider="finite: true">--}}

            {{--                <div class="uk-slider-container px-1 py-3">--}}

            {{--                    <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-4@s uk-child-width-1-2 uk-grid-small uk-grid">--}}

            {{--                        <li>--}}
            {{--                            <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">--}}
            {{--                                <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">--}}
            {{--                                </div>--}}
            {{--                                <img src="../../../public/assets/images/events/listing-1.jpg" class="absolute w-full h-full object-cover" alt="">--}}
            {{--                                <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">--}}
            {{--                                    <div class="text-sm"> Miami </div>--}}
            {{--                                    <div class="text-xl"> Hotels </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </li>--}}
            {{--                        <li>--}}
            {{--                            <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">--}}
            {{--                                <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">--}}
            {{--                                </div>--}}
            {{--                                <img src="../../../public/assets/images/events/listing-2.jpg" class="absolute w-full h-full object-cover" alt="">--}}
            {{--                                <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">--}}
            {{--                                    <div class="text-sm"> Florida</div>--}}
            {{--                                    <div class="text-xl"> Hotels </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </li>--}}
            {{--                        <li>--}}
            {{--                            <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">--}}
            {{--                                <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">--}}
            {{--                                </div>--}}
            {{--                                <img src="../../../public/assets/images/events/listing-3.jpg" class="absolute w-full h-full object-cover" alt="">--}}
            {{--                                <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">--}}
            {{--                                    <div class="text-sm"> London</div>--}}
            {{--                                    <div class="text-lg"> Cold Drink </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </li>--}}
            {{--                        <li>--}}
            {{--                            <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">--}}
            {{--                                <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">--}}
            {{--                                </div>--}}
            {{--                                <img src="../../../public/assets/images/events/listing-4.jpg" class="absolute w-full h-full object-cover" alt="">--}}
            {{--                                <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">--}}
            {{--                                    <div class="text-sm"> Dubai </div>--}}
            {{--                                    <div class="text-lg"> Hotels </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </li>--}}
            {{--                        <li>--}}
            {{--                            <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">--}}
            {{--                                <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">--}}
            {{--                                </div>--}}
            {{--                                <img src="../../../public/assets/images/events/listing-5.jpg" class="absolute w-full h-full object-cover" alt="">--}}
            {{--                                <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">--}}
            {{--                                    <div class="text-sm"> Florida</div>--}}
            {{--                                    <div class="text-lg"> Tom Restaurant </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </li>--}}
            {{--                        <li>--}}
            {{--                            <div class="rounded-xl overflow-hidden relative w-full h-44 cursor-pointer transform hover:scale-105 duration-300 hover:shadow-md">--}}
            {{--                                <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">--}}
            {{--                                </div>--}}
            {{--                                <img src="../../../public/assets/images/events/listing-1.jpg" class="absolute w-full h-full object-cover" alt="">--}}
            {{--                                <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold">--}}
            {{--                                    <div class="text-sm"> Miami </div>--}}
            {{--                                    <div class="text-lg"> Hotels </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </li>--}}
            {{--                    </ul>--}}
            {{--                    <a class="absolute bg-white top-20 -mt-2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10"--}}
            {{--                       href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>--}}
            {{--                    <a class="absolute bg-white top-20 -mt-2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10"--}}
            {{--                       href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <br>

            <div class="my-4 flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-semibold">Upcomming Events </h2>
                </div>
                {{--                <a href="#" class="text-blue-500"> See all </a>--}}
            </div>

            <div class="relative" uk-slider="finite: true">

                <div class="uk-slider-container px-1 py-3">
                    <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-small uk-grid">
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-2.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-red-500 font-semibold"> Happening now</div>
                                    <a href="timeline-event.html" class="box-title mb-1"> The global creative </a>
                                    <div class="text-sm font-medium mt-1">Ankara</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-4.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-blue-500 font-semibold">Uk brands</div>
                                    <a href="timeline-event.html" class="box-title  mb-1"> Safety and Flight </a>
                                    <div class="text-sm font-medium mt-1">London</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-2.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-green-500 font-semibold">Conference</div>
                                    <a href="timeline-event.html" class="box-title mb-1"> Accept Who I Am</a>
                                    <div class="text-sm font-medium mt-1">Dubai</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-4.jpg" alt="" class="">
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-yellow-500 font-semibold">Upcomming</div>
                                    <a href="timeline-event.html" class="box-title mb-1"> Perspective is everything </a>
                                    <div class="text-sm font-medium mt-1">Dubai</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="card-media h-32">
                                    <div class="card-media-overly"></div>
                                    <img src="../../../public/assets/images/events/img-2.jpg" alt="" class="">
                                    <div
                                        class="absolute bg-red-100 font-semibold px-2.5 py-1 rounded-full text-red-500 text-xs top-2.5 left-2.5">
                                        Happening
                                        now
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-xs uppercase text-red-500 font-semibold"> Happening now</div>
                                    <a href="timeline-event.html" class="box-title mb-1"> The global creative </a>
                                    <div class="text-sm font-medium mt-1">Ankara</div>

                                    <div class="flex items-center space-x-2 text-sm text-gray-500 capitalize">
                                        <div> 15 intersted</div>
                                        <div>·</div>
                                        <div> 2 going</div>
                                    </div>

                                    <div class="flex mt-2 space-x-2 text-sm">
                                        <a href="#"
                                           class="bg-blue-600 flex flex-1 h-8 items-center justify-center rounded-md text-white capitalize">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor"
                                                 class="w-5 mr-1.5">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            intersted
                                        </a>
                                        <a href="#" class="bg-gray-200 flex h-8 items-center px-3 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10"
                       href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                    <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10"
                       href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

                </div>
            </div>


        </div>
    </div>

</div>


@section('chat-box')
    <!-- open chat box -->
    <div uk-toggle="target: #offcanvas-chat" class="start-chat">
        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
        </svg>
    </div>

    <div id="offcanvas-chat" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar bg-white p-0 w-full lg:w-80 shadow-2xl">


            <div class="relative pt-5 px-4">

                <h3 class="text-2xl font-bold mb-2"> Chats </h3>

                <div class="absolute right-3 top-4 flex items-center space-x-2">

                    <button class="uk-offcanvas-close  px-2 -mt-1 relative rounded-full inset-0 lg:hidden blcok"
                            type="button" uk-close></button>

                    <a href="#" uk-toggle="target: #search;animation: uk-animation-slide-top-small">
                        <ion-icon name="search" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="settings-outline" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="ellipsis-vertical"
                                  class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <div
                        class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100"
                        uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                        <ul class="space-y-1">
                            <li>
                                <a href="#"
                                   class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md">
                                    <ion-icon name="checkbox-outline" class="pr-2 text-xl"></ion-icon>
                                    Mark all as read
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md">
                                    <ion-icon name="settings-outline" class="pr-2 text-xl"></ion-icon>
                                    Chat setting
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md">
                                    <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>
                                    Disable notifications
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md">
                                    <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon>
                                    Create a group chat
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>


            </div>

            <div
                class="absolute bg-white z-10 w-full -mt-5 lg:-mt-2 transform translate-y-1.5 py-2 border-b items-center flex"
                id="search" hidden>
                <input type="text" placeholder="Search.." class="flex-1">
                <ion-icon name="close-outline" class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-4 cursor-pointer"
                          uk-toggle="target: #search;animation: uk-animation-slide-top-small"></ion-icon>
            </div>

            <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                <ul uk-switcher="connect: #chats-tab; animation: uk-animation-fade">
                    <li class="uk-active"><a class="active" href="#0"> Friends </a></li>
                    <li><a href="#0">Groups <span> 10 </span> </a></li>
                </ul>
            </nav>

            <div class="contact-list px-2 uk-switcher" id="chats-tab">

                <div class="p-1">
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-8.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-3.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>

                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="contact-username">Adrian Mohani</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-6.jpg" alt="">
                        </div>
                        <div class="contact-username"> Jonathan Madano</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="chats-friend.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>


                </div>
                <div class="p-1">
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-8.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-3.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>

                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="contact-username">Adrian Mohani</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-6.jpg" alt="">
                        </div>
                        <div class="contact-username"> Jonathan Madano</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="chats-group.html">
                        <div class="contact-avatar">
                            <img src="../../../public/assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>


                </div>

            </div>
        </div>
    </div>

@endsection
{{--<!-- For Night mode -->--}}
{{--<script>--}}
{{--    (function (window, document, undefined) {--}}
{{--        'use strict';--}}
{{--        if (!('localStorage' in window)) return;--}}
{{--        var nightMode = localStorage.getItem('gmtNightMode');--}}
{{--        if (nightMode) {--}}
{{--            document.documentElement.className += ' night-mode';--}}
{{--        }--}}
{{--    })(window, document);--}}

{{--    (function (window, document, undefined) {--}}

{{--        'use strict';--}}

{{--        // Feature test--}}
{{--        if (!('localStorage' in window)) return;--}}

{{--        // Get our newly insert toggle--}}
{{--        var nightMode = document.querySelector('#night-mode');--}}
{{--        if (!nightMode) return;--}}

{{--        // When clicked, toggle night mode on or off--}}
{{--        nightMode.addEventListener('click', function (event) {--}}
{{--            event.preventDefault();--}}
{{--            document.documentElement.classList.toggle('dark');--}}
{{--            if (document.documentElement.classList.contains('dark')) {--}}
{{--                localStorage.setItem('gmtNightMode', true);--}}
{{--                return;--}}
{{--            }--}}
{{--            localStorage.removeItem('gmtNightMode');--}}
{{--        }, false);--}}

{{--    })(window, document);--}}
{{--</script>--}}

<!-- Javascript
================================================== -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../../../../assets/js/tippy.all.min.js"></script>
<script src="../../../../assets/js/uikit.js"></script>
<script src="{{asset('assets/js/simplebar.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>
</html>
