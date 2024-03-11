<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.1
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base />
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header">
                <!--begin::Header container-->
                <div class="app-container container-fluid d-flex align-items-stretch flex-stack"
                    id="kt_app_header_container">
                    <!--begin::Navbar-->
                    <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
                        <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
                        </div>
                        <!--begin::Notifications-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu- wrapper-->
                            <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <i class="ki-outline ki-calendar fs-1"></i>
                            </div>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                data-kt-menu="true" id="kt_menu_notifications">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                    style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                                        <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Tabs-->
                                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                                data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                        </li>
                                    </ul>
                                    <!--end::Tabs-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                            Alice</a>
                                                        <div class="text-gray-500 fs-7">Phase 1 development</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">1 hr</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-outline ki-information fs-2 text-danger"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                            Confidential</a>
                                                        <div class="text-gray-500 fs-7">Confidential staff documents
                                                        </div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-outline ki-briefcase fs-2 text-warning"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                            HR</a>
                                                        <div class="text-gray-500 fs-7">Corporeate staff profiles</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">5 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-outline ki-abstract-12 fs-2 text-success"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                            Redux</a>
                                                        <div class="text-gray-500 fs-7">New frontend admin theme</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 days</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i
                                                                class="ki-outline ki-colors-square fs-2 text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                            Breafing</a>
                                                        <div class="text-gray-500 fs-7">Product launch status update
                                                        </div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">21 Jan</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-info">
                                                            <i class="ki-outline ki-picture fs-2 text-info"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                            Assets</a>
                                                        <div class="text-gray-500 fs-7">Collection of banner images
                                                        </div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">21 Jan</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i
                                                                class="ki-outline ki-color-swatch fs-2 text-warning"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                            Assets</a>
                                                        <div class="text-gray-500 fs-7">Collection of SVG icons</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">20 March</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                        <!--begin::View more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="pages/user-profile/activity.html"
                                                class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                <i class="ki-outline ki-arrow-right fs-5"></i></a>
                                        </div>
                                        <!--end::View more-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_2"
                                        role="tabpanel">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column px-9">
                                            <!--begin::Section-->
                                            <div class="pt-10 pb-0">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-900 text-center fw-bold">Get Pro Access</h3>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep
                                                    you honest. They stoping you from amazing poorly about drive</div>
                                                <!--end::Text-->
                                                <!--begin::Action-->
                                                <div class="text-center mt-5 mb-9">
                                                    <a href="#" class="btn btn-sm btn-primary px-6"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img class="mw-100 mh-200px" alt="image"
                                                    src="assets/media/illustrations/sketchy-1/1.png" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">New
                                                        order</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Just now</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">New
                                                        customer</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Payment
                                                        process</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">5 hrs</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Search
                                                        query</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 days</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">API
                                                        connection</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">1 week</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Database
                                                        restore</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Mar 5</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">System
                                                        update</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">May 15</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Server OS
                                                        update</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Apr 3</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">API
                                                        rollback</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Jun 30</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Refund
                                                        process</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Jul 10</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                                        process</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Sep 10</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Mail
                                                        tasks</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Dec 10</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                        <!--begin::View more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="pages/user-profile/activity.html"
                                                class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                <i class="ki-outline ki-arrow-right fs-5"></i></a>
                                        </div>
                                        <!--end::View more-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Notifications-->
                        <!--end::Navbar-->
                        <!--begin::Separator-->
                        <div class="app-navbar-separator separator d-none d-lg-flex"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Header container-->
                </div>
                <!--end::Header-->
                <!--begin::Wrapper-->
                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-fluid">
                                    <div class="card mb-5 mb-xl-8">
                                        <!--begin::Header-->
										@yield('header')
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-3">
                                            @yield('content')
                                        </div>
                                        <!--begin::Body-->
                                        
                                    </div>
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                        <!--begin::Footer-->
                        <div id="kt_app_footer" class="app-footer">
                            {{-- <!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container--> --}}
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->
        <!--end::Modal - Users Search-->
        <!--end::Modals-->
        <!--begin::Javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
        <script src="https://kit.fontawesome.com/9026691fb3.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="{{ asset('/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <!--end::Vendors Javascript-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="{{ asset('/js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('/js/custom/widgets.js') }}"></script>
        <script src="{{ asset('/js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
        <script src="{{ asset('/js/custom/utilities/modals/create-campaign.js') }}"></script>
        <script src="{{ asset('/js/custom/utilities/modals/users-search.js') }}"></script>

        <!--end::Custom Javascript-->
        @yield('scripts')
        <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
