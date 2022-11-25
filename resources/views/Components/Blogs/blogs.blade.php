@extends('Layouts.master')

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

    <!-- Header -->
    <header>
        <div class="header_wrap">
            <div class="header_inner mcontainer">
                <div class="left_side">

                        <span class="slide_menu" uk-toggle="target: #wrapper ; cls: is-collapse is-active">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path
                                        d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z"
                                        fill="currentColor"></path></svg>
                        </span>

                    <div id="logo">
                        <a href="feed.html">
                            <img src="assets/images/logo.png" alt="">
                            <img src="assets/images/logo-mobile.png" class="logo_mobile" alt="">
                        </a>
                    </div>
                </div>

                <!-- search icon for mobile -->
                <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"></div>
                <div class="header_search"><i class="uil-search-alt"></i>
                    <input value="" type="text" class="form-control"
                           placeholder="Search for Friends , Videos and more.." autocomplete="off">
                    <div uk-drop="mode: click" class="header_search_dropdown">

                        <h4 class="search_title"> Recently </h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                                    <div class="list-name"> Erica Jones</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
                                    <div class="list-name"> Coffee Addicts</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="" class="list-avatar">
                                    <div class="list-name"> Mountain Riders</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-4.jpg" alt="" class="list-avatar">
                                    <div class="list-name"> Property Rent And Sale</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
                                    <div class="list-name"> Erica Jones</div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="right_side">

                    <div class="header_widgets">
                        <a href="pages-upgrade.html" class="is_link"> Upgrade </a>
                        <a href="#" class="is_icon" uk-tooltip="title: Cart">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                            </svg>
                        </a>
                        <div uk-drop="mode: click" class="header_dropdown dropdown_cart">

                            <div class="drop_headline">
                                <h4> My Cart </h4>
                                <a href="#" class="btn_action hover:bg-gray-100 mr-2 px-2 py-1 rounded-md underline">
                                    Checkout </a>
                            </div>

                            <ul class="dropdown_cart_scrollbar" data-simplebar>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="assets/images/product/2.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Wireless
                                            headphones
                                        </div>
                                        <p class="text-sm">Type Accessories </p>
                                    </div>
                                    <div class="cart_price">
                                        <span> $14.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="assets/images/product/13.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Parfum
                                            Spray
                                        </div>
                                        <p class="text-sm">Type Parfums </p>
                                    </div>
                                    <div class="cart_price">
                                        <span> $16.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="assets/images/product/15.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Herbal
                                            Shampoo
                                        </div>
                                        <p class="text-sm">Type Herbel </p>
                                    </div>
                                    <div class="cart_price">
                                        <span> $12.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="assets/images/product/14.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Wood
                                            Chair
                                        </div>
                                        <p class="text-sm">Type Furniture </p>
                                    </div>
                                    <div class="cart_price">
                                        <span> $19.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="assets/images/product/9.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1">
                                            Strawberries FreshRipe
                                        </div>
                                        <p class="text-sm">Type Fruit </p>
                                    </div>
                                    <div class="cart_price">
                                        <span> $12.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="assets/images/product/2.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Wireless
                                            headphones
                                        </div>
                                        <p class="text-sm">Type Accessories </p>
                                    </div>
                                    <div class="cart_price">
                                        <span> $14.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="assets/images/product/13.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Parfum
                                            Spray
                                        </div>
                                        <p class="text-sm">Type Parfums </p>
                                    </div>
                                    <div class="cart_price">
                                        <span> $16.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                            </ul>

                            <div class="cart_footer">
                                <p> Subtotal : $ 320 </p>
                                <h1> Total : <strong> $ 320</strong></h1>
                            </div>
                        </div>

                        <a href="#" class="is_icon" uk-tooltip="title: Notifications">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                            </svg>
                            <span>3</span>
                        </a>
                        <div uk-drop="mode: click" class="header_dropdown">
                            <div class="dropdown_scrollbar" data-simplebar>
                                <div class="drop_headline">
                                    <h4>Notifications </h4>
                                    <div class="btn_action">
                                        <a href="#" data-tippy-placement="left" title="Notifications">
                                            <ion-icon name="settings-outline"></ion-icon>
                                        </a>
                                        <a href="#" data-tippy-placement="left" title="Mark as read all">
                                            <ion-icon name="checkbox-outline"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar">
                                                <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                            </div>
                                            <span class="drop_icon bg-gradient-primary">
                                                     <i class="icon-feather-thumbs-up"></i>
                                                 </span>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Adrian Mohani</strong> Like Your Comment On Video
                                                    <span class="text-link">Learn Prototype Faster </span>
                                                </p>
                                                <time> 2 hours ago</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="not-read">
                                        <a href="#">
                                            <div class="drop_avatar status-online"><img
                                                        src="assets/images/avatars/avatar-2.jpg" alt="">
                                            </div>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Stella Johnson</strong> Replay Your Comments in
                                                    <span class="text-link">Adobe XD Tutorial</span>
                                                </p>
                                                <time> 9 hours ago</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-3.jpg"
                                                                          alt="">
                                            </div>
                                            <span class="drop_icon bg-gradient-primary">
                                                    <i class="icon-feather-thumbs-up"></i>
                                                </span>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Alex Dolgove</strong> Added New Review In Video
                                                    <span class="text-link">Full Stack PHP Developer</span>
                                                </p>
                                                <time> 12 hours ago</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-1.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Jonathan Madano</strong> Shared Your Discussion On Video
                                                    <span class="text-link">Css Flex Box </span>
                                                </p>
                                                <time> Yesterday</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-1.jpg"
                                                                          alt="">
                                            </div>
                                            <span class="drop_icon bg-gradient-primary">
                                                    <i class="icon-feather-thumbs-up"></i>
                                                </span>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                    <span class="text-link">Javascript Introduction </span>
                                                </p>
                                                <time> 2 hours ago</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar status-online"><img
                                                        src="assets/images/avatars/avatar-2.jpg" alt="">
                                            </div>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Stella Johnson</strong> Replay Your Comments in
                                                    <span class="text-link">Programming for Games</span>
                                                </p>
                                                <time> 9 hours ago</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-2.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Stella Johnson</strong> Replay Your Comments in
                                                    <span class="text-link">Programming for Games</span>
                                                </p>
                                                <time> 9 hours ago</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-3.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Alex Dolgove</strong> Added New Review In Course
                                                    <span class="text-link">Full Stack PHP Developer</span>
                                                </p>
                                                <time> 12 hours ago</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-1.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                    <span class="text-link">Css Flex Box </span>
                                                </p>
                                                <time> Yesterday</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-1.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                    <span class="text-link">Javascript Introduction </span>
                                                </p>
                                                <time> 2 hours ago</time>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-2.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <p>
                                                    <strong>Stella Johnson</strong> Replay Your Comments in
                                                    <span class="text-link">Programming for Games</span>
                                                </p>
                                                <time> 9 hours ago</time>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Message -->
                        <a href="#" class="is_icon" uk-tooltip="title: Message">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span>4</span>
                        </a>
                        <div uk-drop="mode: click" class="header_dropdown is_message">
                            <div class="dropdown_scrollbar" data-simplebar>
                                <div class="drop_headline">
                                    <h4>Messages </h4>
                                    <div class="btn_action">
                                        <a href="#" data-tippy-placement="left" title="Notifications">
                                            <ion-icon name="settings-outline"
                                                      uk-tooltip="title: Message settings ; pos: left"></ion-icon>
                                        </a>
                                        <a href="#" data-tippy-placement="left" title="Mark as read all">
                                            <ion-icon name="checkbox-outline"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                                <input type="text" class="uk-input" placeholder="Search in Messages">
                                <ul>
                                    <li class="un-read">
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-7.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <strong> Stella Johnson </strong>
                                                <time>12:43 PM</time>
                                                <p> Alex will explain you how ... </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-1.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <strong> Adrian Mohani </strong>
                                                <time> 6:43 PM</time>
                                                <p> Thanks for The Answer sit amet... </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-6.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <strong>Alia Dolgove </strong>
                                                <time> Wed</time>
                                                <p> Alia just joined Messenger! </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-5.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <strong> Jonathan Madano </strong>
                                                <time> Sun</time>
                                                <p> Replay Your Comments insit amet consectetur </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="un-read">
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-2.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <strong> Stella Johnson </strong>
                                                <time>12:43 PM</time>
                                                <p> Alex will explain you how ... </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-1.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <strong> Adrian Mohani </strong>
                                                <time> 6:43 PM</time>
                                                <p> Thanks for The Answer sit amet... </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-3.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <strong>Alia Dolgove </strong>
                                                <time> Wed</time>
                                                <p> Alia just joined Messenger! </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="drop_avatar"><img src="assets/images/avatars/avatar-4.jpg"
                                                                          alt="">
                                            </div>
                                            <div class="drop_text">
                                                <strong> Jonathan Madano </strong>
                                                <time> Sun</time>
                                                <p> Replay Your Comments insit amet consectetur </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="see-all"> See all in Messages</a>
                        </div>


                        <a href="#">
                            <img src="assets/images/avatars/avatar-2.jpg" class="is_avatar" alt="">
                        </a>
                        <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">

                            <a href="timeline.html" class="user">
                                <div class="user_avatar">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="user_name">
                                    <div> Stella Johnson</div>
                                    <span> @johnson</span>
                                </div>
                            </a>
                            <hr>
                            <a href="pages-upgrade.html" class="is-link">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                Upgrade To Premium  </span>
                            </a>
                            <hr>
                            <a href="page-setting.html">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                My Account
                            </a>
                            <a href="groups.html">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Manage Pages
                            </a>
                            <a href="pages-setting.html">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                                    <path fill-rule="evenodd"
                                          d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                My Billing
                            </a>
                            <a href="#" id="night-mode" class="btn-night-mode">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                                </svg>
                                Night mode
                                <span class="btn-night-mode-switch">
                                        <span class="uk-switch-button"></span>
                                    </span>
                            </a>
                            <a href="form-login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                Log Out
                            </a>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- sidebar -->
    <div class="sidebar">

        <div class="sidebar_inner" data-simplebar>

            <ul>
                <li><a href="feed">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="text-blue-600">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        <span> Feed </span> </a>
                </li>
                {{--                <li><a href="pages.html">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500">--}}
                {{--                            <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path>--}}
                {{--                        </svg>--}}
                {{--                        <span> Pages </span> </a>--}}
                {{--                </li>--}}
                {{--                <li><a href="videos.html">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">--}}
                {{--                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H7v4h6v-4zm2 0h1V9h-1v2zm1-4V5h-1v2h1zM5 5v2H4V5h1zm0 4H4v2h1V9zm-1 4h1v2H4v-2z" clip-rule="evenodd" />--}}
                {{--                        </svg>--}}
                {{--                        <span> Video</span></a>--}}
                {{--                </li>--}}
                {{--                <li><a href="groups.html">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">--}}
                {{--                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />--}}
                {{--                        </svg><span> Groups </span></a>--}}
                {{--                </li>--}}
                {{--                <li><a href="jobs.html">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-pink-500">--}}
                {{--                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />--}}
                {{--                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />--}}
                {{--                        </svg> <span> Jobs</span> </a>--}}
                {{--                </li>--}}
                {{--                <li><a href="courses.html">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-indigo-500">--}}
                {{--                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />--}}
                {{--                        </svg>--}}
                {{--                        <span> Course</span></a>--}}
                {{--                </li>--}}
                {{--                <li><a href="games.html">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-green-500">--}}
                {{--                            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />--}}
                {{--                        </svg>  <span>  Games </span></a>--}}
                {{--                </li>--}}

                <li><a href="events">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="text-yellow-500">
                            <path fill-rule="evenodd"
                                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span>  Events </span></a>
                </li>
                {{--                <li id="more-veiw" hidden><a href="products.html">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">--}}
                {{--                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />--}}
                {{--                        </svg>--}}
                {{--                        <span> Products</span></a>--}}
                {{--                </li>--}}
                {{--                <li id="more-veiw" hidden><a href="albums.html">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-purple-500">--}}
                {{--                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />--}}
                {{--                        </svg>  <span>  Photos </span></a>--}}
                {{--                </li>--}}
                <li class="active"><a href="blogs.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="text-pink-500">
                            <path fill-rule="evenodd"
                                  d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                  clip-rule="evenodd"/>
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"/>
                        </svg>
                        <span> Blog</span></a>
                </li>
                {{--                <li id="more-veiw" hidden><a href="forums.html">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">--}}
                {{--                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />--}}
                {{--                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />--}}
                {{--                        </svg>--}}
                {{--                        <span> forum</span> </a>--}}
                {{--                </li>--}}
                {{--                <li id="more-veiw" hidden><a href="birthdays.html">--}}
                {{--                        <svg fill="currentColor" class="text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>--}}
                {{--                        <span> Birthdays </span> <span class="new">N</span></a>--}}
                {{--                </li>--}}
                {{--                <li id="more-veiw" hidden><a href="fundraiser.html">--}}
                {{--                        <svg fill="currentColor" class="text-red-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>--}}
                {{--                        <span>  Fundraiser </span> <span class="new">N</span></a>--}}
                {{--                </li>--}}
            </ul>

            {{--            <a href="#" class="see-mover h-10 flex my-1 pl-2 rounded-xl text-gray-600" uk-toggle="target: #more-veiw; animation: uk-animation-fade">--}}
            {{--                    <span class="w-full flex items-center" id="more-veiw">--}}
            {{--                        <svg class="  bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
            {{--                        See More--}}
            {{--                    </span>--}}
            {{--                <span class="w-full flex items-center" id="more-veiw" hidden>--}}
            {{--                        <svg  class="bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>--}}
            {{--                        See Less--}}
            {{--                    </span>--}}
            {{--            </a>--}}

            <h3 class="side-title"> Contacts </h3>

            <div class="contact-list my-2 ml-1">

                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-7.jpg" alt="">
                    </div>
                    <div class="contact-username">Stella Johnson</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-4.jpg" alt="">
                    </div>
                    <div class="contact-username"> Alex Dolgove</div>
                </a>

            </div>

            {{--            <ul class="side_links" data-sub-title="Pages">--}}


            {{--                <li><a href="feed.html"> <ion-icon name="settings-outline" class="side-icon"></ion-icon>  <span> Setting   </span> </a>--}}
            {{--                    <ul>--}}
            {{--                        <li><a href="pages-setting.html">layout 1</a></li>--}}
            {{--                        <li><a href="pages-setting2.html">layout 2</a></li>--}}
            {{--                    </ul>--}}
            {{--                </li>--}}
            {{--                <li><a href="#"> <ion-icon name="albums-outline" class="side-icon"></ion-icon> <span> Info Pages  </span> </a>--}}
            {{--                    <ul>--}}
            {{--                        <li><a href="pages-about.html"> About </a></li>--}}
            {{--                        <li><a href="pages-contact.html"> Contact us </a></li>--}}
            {{--                        <li><a href="pages-privacy.html"> Privacy </a></li>--}}
            {{--                    </ul>--}}
            {{--                </li>--}}
            {{--                <li><a href="#"> <ion-icon name="document-outline" class="side-icon"></ion-icon> <span> Create Content </span>  </a>--}}
            {{--                    <ul>--}}
            {{--                        <li><a href="create-group.html"> Create Group </a></li>--}}
            {{--                        <li><a href="create-page.html"> Create Page </a></li>--}}
            {{--                    </ul>--}}
            {{--                </li>--}}
            {{--                <li><a href="#"> <ion-icon name="code-slash-outline" class="side-icon"></ion-icon> <span> Development  </span> </a>--}}
            {{--                    <ul>--}}
            {{--                        <li><a href="development-components.html"> Compounents </a></li>--}}
            {{--                        <li><a href="development-plugins.html"> Plugins </a></li>--}}
            {{--                        <li><a href="development-icons.html"> Icons </a></li>--}}
            {{--                    </ul>--}}
            {{--                </li>--}}
            {{--                <li><a href="#"> <ion-icon name="log-in-outline" class="side-icon"></ion-icon> <span>  Authentication  </span>  </a>--}}
            {{--                    <ul>--}}
            {{--                        <li><a href="form-login.html">form login </a></li>--}}
            {{--                        <li><a href="form-register.html">form register</a></li>--}}
            {{--                    </ul>--}}
            {{--                </li>--}}

            {{--            </ul>--}}

            {{--            <div class="footer-links">--}}
            {{--                <a href="#">About</a>--}}
            {{--                <a href="#">Blog </a>--}}
            {{--                <a href="#">Careers</a>--}}
            {{--                <a href="#">Support</a>--}}
            {{--                <a href="#">Contact Us </a>--}}
            {{--                <a href="#">Developer</a>--}}
            {{--                <a href="#">Terms of service</a>--}}
            {{--            </div>--}}

        </div>

        <!-- sidebar overly for mobile -->
        <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

    </div>

    <!-- Main Contents -->
    <div class="main_content">
        <div class="mcontainer">


            <div class="lg:flex  lg:space-x-12">

                <div class="lg:w-3/4">

                    <div class="flex justify-between items-center relative md:mb-4 mb-3">
                        <div class="flex-1">
                            <h2 class="text-2xl font-semibold"> Blog </h2>
                            {{--                            <nav class="responsive-nav md:m-0 -mx-4 style-2">--}}
                            {{--                                <ul>--}}
                            {{--                                    <li class="active"><a href="#" class="lg:px-2">   Suggestions </a></li>--}}
                            {{--                                    <li><a href="#" class="lg:px-2"> Joined </a></li>--}}
                            {{--                                    <li><a href="#" class="lg:px-2"> Interested </a></li>--}}
                            {{--                                    <li><a href="#" class="lg:px-2"> Past </a></li>--}}
                            {{--                                    <li><a href="#" class="lg:px-2"> Coming </a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </nav>--}}
                        </div>
                        <a href="/blogs/create"
                           class="flex items-center justify-center h-10 w-10 z-10 rounded-full bg-blue-600 text-white absolute right-0"
                           data-tippy-placement="left" title="Create New Article">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>

                    <div class="card divide-y divide-gray-100 px-4">

                        <div class="lg:flex lg:space-x-6 py-5">
                            <a href="blog-read.html">
                                <div class="lg:w-60 w-full h-40 overflow-hidden rounded-lg relative shadow-sm">
                                    <img src="assets/images/blog/img-4.jpg" alt=""
                                         class="w-full h-full absolute inset-0 object-cover">
                                    <div class="absolute bg-blue-100 font-semibold px-2.5 py-1 rounded-full text-blue-500 text-xs top-2.5 left-2.5">
                                        JavaScript
                                    </div>
                                </div>
                            </a>
                            <div class="flex-1 lg:pt-0 pt-4">

                                <a href="blog-read.html" class="text-xl font-semibold line-clamp-2"> Interesting
                                    JavaScript and CSS Libraries in 2021 you should be know</a>
                                <p class="line-clamp-2 pt-3"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat </p>

                                <div class="flex items-center pt-3">
                                    <div class="flex items-center">
                                        <ion-icon name="thumbs-up-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                    </div>
                                    <div class="flex items-center mx-4">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                        <div class="-space-x-2 flex items-center ml-1">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-6.jpg"
                                                 class="border-2 border-white rounded-full w-7">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-5.jpg"
                                                 class="border-2 border-white rounded-full w-7">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg"
                                                 class="border-2 border-white rounded-full w-7">
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <ion-icon name="bookmark-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="lg:flex lg:space-x-6 py-5">
                            <a href="blog-read.html">
                                <div class="lg:w-60 w-full h-40 overflow-hidden rounded-lg relative shadow-sm">
                                    <img src="assets/images/blog/img-1.jpg" alt=""
                                         class="w-full h-full absolute inset-0 object-cover">
                                    <div class="absolute bg-yellow-100 font-semibold px-2.5 py-1 rounded-full text-yellow-500 text-xs top-2.5 left-2.5">
                                        Experiments
                                    </div>
                                </div>
                            </a>
                            <div class="flex-1 lg:pt-0 pt-4">

                                <a href="blog-read.html" class="text-xl font-semibold line-clamp-2"> Top Amazing web
                                    demos and experiments in 2021 Should Know About</a>
                                <p class="line-clamp-2 pt-3"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat </p>

                                <div class="flex items-center pt-3">
                                    <div class="flex items-center">
                                        <ion-icon name="thumbs-up-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                    </div>
                                    <div class="flex items-center mx-4">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                        <div class="-space-x-2 flex items-center ml-1">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-5.jpg"
                                                 class="border-2 border-white rounded-full w-7 h-7">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-1.jpg"
                                                 class="border-2 border-white rounded-full w-7 h-7">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg"
                                                 class="border-2 border-white rounded-full w-7 h-7">
                                            <div class="w-7 h-7 rounded-full flex justify-center items-center bg-red-100 text-red-500 font-semibold text-xs">
                                                12+
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <ion-icon name="bookmark-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="lg:flex lg:space-x-6 py-5">
                            <a href="blog-read.html">
                                <div class="lg:w-60 w-full h-40 overflow-hidden rounded-lg relative shadow-sm">
                                    <img src="assets/images/blog/img-2.jpg" alt=""
                                         class="w-full h-full absolute inset-0 object-cover">
                                    <div class="absolute bg-purple-100 font-semibold px-2.5 py-1 rounded-full text-purple-500 text-xs top-2.5 left-2.5">
                                        Tools
                                    </div>
                                </div>
                            </a>
                            <div class="flex-1 lg:pt-0 pt-4">

                                <a href="blog-read.html" class="text-xl font-semibold line-clamp-2"> Awesome Web Dev
                                    Tools and Resources For 2021 in 30 Minutes </a>
                                <p class="line-clamp-2 pt-3"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat </p>

                                <div class="flex items-center pt-3">
                                    <div class="flex items-center">
                                        <ion-icon name="thumbs-up-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                    </div>
                                    <div class="flex items-center mx-4">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                        <div class="-space-x-2 flex items-center ml-1">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-1.jpg"
                                                 class="border-2 border-white rounded-full w-7">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg"
                                                 class="border-2 border-white rounded-full w-7">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-3.jpg"
                                                 class="border-2 border-white rounded-full w-7">
                                            <div class="w-7 h-7 rounded-full flex justify-center items-center bg-red-100 text-red-500 font-semibold text-xs">
                                                13+
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <ion-icon name="bookmark-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="lg:flex lg:space-x-6 py-5">
                            <a href="blog-read.html">
                                <div class="lg:w-60 w-full h-40 overflow-hidden rounded-lg relative shadow-sm">
                                    <img src="assets/images/blog/img-3.jpg" alt=""
                                         class="w-full h-full absolute inset-0 object-cover">
                                    <div class="absolute bg-purple-100 font-semibold px-2.5 py-1 rounded-full text-purple-500 text-xs top-2.5 left-2.5">
                                        JavaScript
                                    </div>
                                </div>
                            </a>
                            <div class="flex-1 lg:pt-0 pt-4">

                                <a href="blog-read.html" class="text-xl font-semibold line-clamp-2"> Interesting
                                    JavaScript and CSS libraries for 2021 Should Know About</a>
                                <p class="line-clamp-2 pt-3"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat </p>

                                <div class="flex items-center pt-3">
                                    <div class="flex items-center">
                                        <ion-icon name="thumbs-up-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                    </div>
                                    <div class="flex items-center mx-4">
                                        <ion-icon name="chatbubble-ellipses-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                        <div class="-space-x-2 flex items-center ml-1">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-6.jpg"
                                                 class="border-2 border-white rounded-full w-7">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-5.jpg"
                                                 class="border-2 border-white rounded-full w-7">
                                            <img alt="Image placeholder" src="assets/images/avatars/avatar-2.jpg"
                                                 class="border-2 border-white rounded-full w-7">
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <ion-icon name="bookmark-outline" class="text-xl mr-2"></ion-icon>
                                        12
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="lg:w-1/4 w-full flex-shrink-0">

                    <div uk-sticky="offset:100" class="uk-sticky">

                        <h2 class="text-lg font-semibold mb-3"> Recently Posted </h2>
                        <ul>
                            <li>
                                <a href="blog-read.html" class="hover:bg-gray-100 rounded-md p-2 -mx-2 block">
                                    <h3 class="font-medium line-clamp-2"> Awesome Web Dev Tools and Resources For
                                        2021 </h3>
                                    <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div> Sep 12, 2020</div>
                                        <div class="pb-1"> .</div>
                                        <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                        <div> 23</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="blog-read.html" class="hover:bg-gray-100 rounded-md p-2 -mx-2 block">
                                    <h3 class="font-medium line-clamp-2"> Awesome Web Dev Tools and Resources For
                                        2021</h3>
                                    <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div> Sep 12, 2020</div>
                                        <div class="pb-1"> .</div>
                                        <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                        <div> 23</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="blog-read.html" class="hover:bg-gray-100 rounded-md p-2 -mx-2 block">
                                    <h3 class="font-medium line-clamp-2">Interesting JavaScript and CSS Libraries in
                                        2021 </h3>
                                    <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div> Sep 12, 2020</div>
                                        <div class="pb-1"> .</div>
                                        <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                        <div> 23</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="blog-read.html" class="hover:bg-gray-100 rounded-md p-2 -mx-2 block">
                                    <h3 class="font-medium line-clamp-2">Awesome Web Dev Tools and Resources For
                                        2021 </h3>
                                    <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div> Sep 12, 2020</div>
                                        <div class="pb-1"> .</div>
                                        <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                        <div> 23</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <br>

                        <h4 class="text-lg font-semibold mb-3"> Tags </h4>

                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Computers</a>
                            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Business</a>
                            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> News</a>
                            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Architecher</a>
                            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Technolgy</a>
                            <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Music</a>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

</div>


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
                    <ion-icon name="ellipsis-vertical" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                </a>
                <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                     uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                    <ul class="space-y-1">
                        <li>
                            <a href="#"
                               class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="checkbox-outline" class="pr-2 text-xl"></ion-icon>
                                Mark all as read
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="settings-outline" class="pr-2 text-xl"></ion-icon>
                                Chat setting
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>
                                Disable notifications
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon>
                                Create a group chat
                            </a>
                        </li>
                    </ul>
                </div>


            </div>


        </div>

        <div class="absolute bg-white z-10 w-full -mt-5 lg:-mt-2 transform translate-y-1.5 py-2 border-b items-center flex"
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
                        <img src="assets/images/avatars/avatar-7.jpg" alt="">
                    </div>
                    <div class="contact-username"> Alex Dolgove</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-8.jpg" alt="">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="">
                    </div>
                    <div class="contact-username">Stella Johnson</div>
                </a>

                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                    </div>
                    <div class="contact-username">Adrian Mohani</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-6.jpg" alt="">
                    </div>
                    <div class="contact-username"> Jonathan Madano</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-friend.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>


            </div>
            <div class="p-1">
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-7.jpg" alt="">
                    </div>
                    <div class="contact-username"> Alex Dolgove</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-8.jpg" alt="">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-3.jpg" alt="">
                    </div>
                    <div class="contact-username">Stella Johnson</div>
                </a>

                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                    </div>
                    <div class="contact-username">Adrian Mohani</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-6.jpg" alt="">
                    </div>
                    <div class="contact-username"> Jonathan Madano</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                        <span class="user_status"></span>
                    </div>
                    <div class="contact-username"> Erica Jones</div>
                </a>
                <a href="chats-group.html">
                    <div class="contact-avatar">
                        <img src="assets/images/avatars/avatar-1.jpg" alt="">
                        <span class="user_status status_online"></span>
                    </div>
                    <div class="contact-username"> Dennis Han</div>
                </a>


            </div>

        </div>
    </div>
</div>


<!-- For Night mode -->
<script>
    (function (window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' night-mode';
        }
    })(window, document);

    (function (window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function (event) {
            event.preventDefault();
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
</script>

<!-- Javascript
================================================== -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>
</html>
