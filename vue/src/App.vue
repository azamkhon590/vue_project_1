<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    <p><span>+880166 253 232</span> <span>info@domain.com</span></p>
                                </div>
                                <div class="text_wrap">
                                    <p><a href="#"> <i class="ti-user"></i> Login</a> <a href="#">Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="##">home</a></li>
                                                <li><a href="##">Courses</a></li>
                                                <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="##">blog</a></li>
                                                        <li><a href="##">single-blog</a></li>
                                                    </ul>
                                                </li>
                                                
                                                <li><a href="##">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <a data-scroll-nav='1' href="#">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <RouterView />
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">
                        <div class="col-md-7">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                About Us
                            </h3>
                            <ul>
                                <li><a href="#">Online Learning</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Press Center</a></li>
                                <li><a href="#">Become an Instructor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Campus
                            </h3>
                            <ul>
                                <li><a href="#">Our Plans</a></li>
                                <li><a href="#">Free Trial</a></li>
                                <li><a href="#">Academic Solutions</a></li>
                                <li><a href="#">Business Solutions</a></li>
                                <li><a href="#">Government Solutions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Study
                            </h3>
                            <ul>
                                <li><a href="#">Admissions Policy</a></li>
                                <li><a href="#">Getting Started</a></li>
                                <li><a href="#">Visa Information</a></li>
                                <li><a href="#">Tuition Calculator</a></li>
                                <li><a href="#">Request Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Support
                            </h3>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">System Requirements</a></li>
                                <li><a href="#">Register Activation Key</a></li>
                                <li><a href="#">Site feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped></style>
