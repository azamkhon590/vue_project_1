<script setup>
    import CounterComponent from '@/components/CounterComponent.vue';
</script>

<template>
    <CounterComponent :startValue="0" :endValue="1000" :duration="3000" text_value="Counter" backgraund="red" text_color="black"/>
    
    <div class="main_block d-flex gray_bg">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-lg-6 m-5">
                    <h3>University</h3>
                    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, quod nisi. Assumenda
                        cupiditate nesciunt, animi minus nobis error aut qui illum molestiae mollitia eaque nulla?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <img class="image" style="width: 100%;" src="./../assets/program/university.jpg" alt="">
        </div>



    </div>
    <div class="service_area section__padding">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="popular_program_area section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Popular Program</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="##" role="tab"
                                aria-controls="nav-home" aria-selected="true">Graduate </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="##" role="tab"
                                aria-controls="nav-profile" aria-selected="false">Postgraduate </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="##" role="tab"
                                aria-controls="nav-contact" aria-selected="false">PHD Scholarships</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="##" role="tab"
                                aria-controls="nav-contact" aria-selected="false">Training</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="./../assets/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Chemical engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="./../assets/program/2.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Mechanical engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="./../assets/program/3.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span>Agriculture</span>
                                    <h4>Bio engneering</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="##" class="boxed-btn4">View All course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="latest_coures_area">
        <div class="latest_coures_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="coures_info">
                            <div class="section_title white_text">
                                <h3>Latest Courses</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis
                                    nostrud exercitation.</p>
                            </div>
                            <div class="coures_wrap d-flex">
                                <div class="single_wrap">

                                    <h4>Bachelor of <br>
                                        Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor
                                        incididunt ut piscing vcs.</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                                <div class="single_wrap">

                                    <h4>Bachelor of <br>
                                        Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor
                                        incididunt ut piscing vcs.</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Recent Event</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>02</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i
                                        class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i
                                        class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>03</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i
                                        class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i
                                        class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>10</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i
                                        class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i
                                        class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="recent_news_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Recent News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="./../assets/program/1.png" alt="">
                            </a>

                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <h4>Those Other College Expenses You
                                    Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10,
                                    2020</span>


                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="./../assets/program/2.png" alt="">
                            </a>

                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <h4>Those Other College Expenses You
                                    Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10,
                                    2020</span>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>