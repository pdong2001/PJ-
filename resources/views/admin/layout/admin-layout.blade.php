<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!-- Theme icon -->
        <link rel="shortcut icon" href="{{asset('assets/admin/template1/images/LoGo_Doan.png')}}">

        <link href="{{asset('assets/admin/template1/plugins/morris-chart/morris.css')}}" rel="stylesheet">
        <!-- Theme Css -->
        <link href="{{asset('assets/admin/template1/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/template1/css/slidebars.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/template1/css/icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/template1/css/menu.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/admin/template1/css/style.css')}}" rel="stylesheet">

    {{-- Không được xóa --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="/assets/angular.min.js"></script>
    <script src="/assets/admin/js/scripts.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="/assets/admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    {{-- End --}}
</head>

<body class="sticky-header">
    <section>
        <!-- sidebar left start-->
        @include('admin/layout/admin-sidebar')
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content">
            <!-- header section start-->
            @include('admin/layout/admin-navbar')
            <!-- header section end-->

            <div class="container-fluid">
                <div class="pb-3"></div>
                @yield('main-content')                          
            </div>
            <!--end container-->

            <!--footer section start-->
            @include('admin/layout/admin-footer')
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <div class="sb-slidebar sb-right sb-style-overlay">
                <div class="right-bar slimscroll">
                    <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

                    <ul class="nav nav-tabs nav-justified-">
                        <li class="">
                            <a href="#chat" class="active" data-toggle="tab">Chat</a>
                        </li>
                        <li class="">
                            <a href="#activity" data-toggle="tab">Activity</a>
                        </li>
                        <li class="">
                            <a href="#settings" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="chat">
                            <div class="online-chat">
                                <div class="online-chat-container">
                                    <div class="chat-list">
                                        <form class="search-content" action="index.html" method="post">
                                            <input type="text" class="form-control" name="keyword" placeholder="Search...">
                                            <span class="search-button"><i class="ti ti-search"></i></span>
                                        </form>
                                    </div>
                                    <div class="side-title-alt">
                                        <h2>online</h2>                                           
                                    </div>

                                    <ul class="team-list chat-list-side">
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-1.jpg')}}" alt="">
                                                    <i class="online dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Alison Jones</span>
                                                    <small class="text-muted">Start exploring</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-3.jpg')}}" alt="">
                                                    <i class="online dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Jonathan Smith</span>
                                                    <small class="text-muted">Alien Inside</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-4.jpg')}}" alt="">
                                                    <i class="away dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Anjelina Doe</span>
                                                    <small class="text-muted">Screaming...</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-5.jpg')}}" alt="">
                                                    <i class="busy dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Franklin Adam</span>
                                                    <small class="text-muted">Don't lose the hope</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ml-3">
                                                <span class="thumb-small">
                                                    <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-6.jpg')}}" alt="">
                                                    <i class="online dot"></i>
                                                </span>
                                                <div class="inline">
                                                    <span class="name">Jeff Crowford </span>
                                                    <small class="text-muted">Just flying</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="side-title-alt mb-3">
                                        <h2>Friends</h2>
                                    </div>
                                    <ul class="list-unstyled friends">
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-7.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-8.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-9.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-10.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-2.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-1.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-3.jpg')}}" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="rounded-circle" src="{{asset('assets/admin/template1/images/users/avatar-4.jpg')}}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane " id="activity">
                            
                            <div class="aside-widget">
                                <div class="side-title-alt">
                                    <h2>Recent Activity</h2>
                                </div>
                                <ul class="team-list chat-list-side info">
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Mary Brown open a new company</span>
                                            <span class="time">just now</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-user-plus"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Mary Brown send a new message </span>
                                            <span class="time">50 min ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-wrench"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Holly Cobb Uploaded 6 new photos.</span>
                                            <span class="time">3 Week Ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="thumb-small">
                                            <i class="fa fa-users"></i>
                                        </span>
                                        <div class="inline">
                                            <span class="name">Mary Brown open a new company.</span>
                                            <span class="time">1 Month Ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="aside-widget">

                                <div class="side-title-alt">
                                    <h2>Events</h2>
                                </div>
                                <ul class="team-list chat-list-side info statistics border-less-list">
                                    <li>
                                        <div class="inline">
                                            <p class="mb-1">Jamie Miller</p>
                                            <span class="name">Contrary to popular belief, Lorem Ipsum is not simply random text.</span>
                                            <span class="time text-muted">2 Week Ago</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inline">
                                            <p class="mb-1">Robert Jones</p>
                                            <span class="name">Lorem Ipsum is simply dummy text of the printing and typesetting .</span>
                                            <span class="time text-muted">1 Month Ago</span>
                                        </div>
                                    </li>                                        
                                </ul>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane " id="settings">
                            <div class="side-title-alt">
                                <h6 class="mb-0">Account Setting</h6>
                            </div>
                            <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                <li>
                                    <div class="inline">
                                        <span class="name">Auto updates</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                    </span>
                                </li>
                                <li>
                                    <div class="inline">
                                        <span class="name">Show offline Contacts</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                    </span>
                                </li>

                                <li>
                                    <div class="inline">
                                        <span class="name">Location Permission</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                    </span>
                                </li>
                            </ul>

                            <div class="side-title-alt">
                                <h6 class="mb-0">General Setting</h6>
                            </div>
                            <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                                <li>
                                    <div class="inline">
                                        <span class="name">Show me Online</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                    </span>
                                </li>
                                <li>
                                    <div class="inline">
                                        <span class="name">Status visible to all</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                    </span>
                                </li>

                                <li>
                                    <div class="inline">
                                        <span class="name">Notifications</span>
                                    </div>
                                    <span class="thumb-small">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#079c9e" data-size="small"/>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end Right Slidebar-->
        </div>
        <!--end body content-->
    </section>
    <script src="{{asset('assets/admin/template1/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/admin/template1/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/admin/template1/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/admin/template1/js/jquery-migrate.js')}}"></script>
        <script src="{{asset('assets/admin/template1/js/modernizr.min.js')}}"></script>
        <script src="{{asset('assets/admin/template1/js/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/admin/template1/js/slidebars.min.js')}}"></script>

        <!--plugins js-->
        <script src="{{asset('assets/admin/template1/plugins/counter/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/admin/template1/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/admin/template1/plugins/sparkline-chart/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/admin/template1/pages/jquery.sparkline.init.js')}}"></script>

        <script src="{{asset('assets/admin/template1/plugins/chart-js/Chart.bundle.js')}}"></script>
        <script src="{{asset('assets/admin/template1/plugins/morris-chart/raphael-min.js')}}"></script>
        <script src="{{asset('assets/admin/template1/plugins/morris-chart/morris.js')}}"></script>
        <script src="{{asset('assets/admin/template1/pages/dashboard-init.js')}}"></script>


        <!--app js-->
        <script src="{{asset('assets/admin/template1/js/jquery.app.js')}}"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                delay: 100,
                time: 1200
                });
            });
        </script>

        @yield('scripts')
</body>

</html>
