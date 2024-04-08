@extends('frontEnd.master')
@section('title')
{{$website->name }}
@endsection
@section('content')
    <div class="section-header">
        <div class="container">
            <div class="w-layout-grid header-grid">
                <div class="header-block">
                    <h1 class="hero-heading">Where community support meets skill-building for individuals with disabilities.</h1>
                    <p class="paragraph-regular">Our centre is dedicated to empowering participants with foundational skills essential for future success.</p>
                    <div class="button-wrapper">
                        <a href="#" class="button-primary w-button">Get in touch</a>
                        <div class="button-secondary-arrow">
                            <div class="button-arrow-small w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9997 19.6391C7.78077 19.6391 4.36084 16.2192 4.36084 12.0002C4.36084 7.78126 7.78077 4.36133 11.9997 4.36133C16.2187 4.36133 19.6386 7.78126 19.6386 12.0002C19.6386 16.2192 16.2187 19.6391 11.9997 19.6391ZM11.9997 18.1113C13.6205 18.1113 15.1749 17.4675 16.3209 16.3214C17.467 15.1754 18.1108 13.621 18.1108 12.0002C18.1108 10.3795 17.467 8.82506 16.3209 7.67901C15.1749 6.53295 13.6205 5.88911 11.9997 5.88911C10.379 5.88911 8.82458 6.53295 7.67852 7.67901C6.53247 8.82506 5.88862 10.3795 5.88862 12.0002C5.88862 13.621 6.53247 15.1754 7.67852 16.3214C8.82458 17.4675 10.379 18.1113 11.9997 18.1113V18.1113ZM10.9471 9.26168L14.6741 11.7458C14.716 11.7737 14.7504 11.8116 14.7742 11.8559C14.7979 11.9003 14.8104 11.9499 14.8104 12.0002C14.8104 12.0506 14.7979 12.1001 14.7742 12.1445C14.7504 12.1889 14.716 12.2267 14.6741 12.2546L10.9463 14.7388C10.9004 14.7692 10.847 14.7867 10.7919 14.7893C10.7368 14.7919 10.6821 14.7795 10.6334 14.7535C10.5848 14.7275 10.5441 14.6889 10.5157 14.6416C10.4873 14.5944 10.4721 14.5403 10.472 14.4851V9.51529C10.4721 9.46002 10.4871 9.40582 10.5156 9.35845C10.5441 9.31108 10.5849 9.27232 10.6336 9.24629C10.6824 9.22027 10.7373 9.20795 10.7925 9.21066C10.8477 9.21337 10.9011 9.231 10.9471 9.26168V9.26168Z" fill="currentColor"></path>
                                </svg></div>
                            <div>Our Projects</div>
                        </div>
                    </div>
                </div>
                <div id="w-node-_83fd415b-90c9-e518-eaea-addd0560d549-d9cd27e8" class="header-image"><img src="{{asset('homePage')}}/images/Header-Image.svg" loading="lazy" data-w-id="8bd26876-f28c-3861-6326-e993e6fc230b" alt=""></div>
            </div>
        </div>
    </div>
    </div>

    <section data-w-id="9fc4b84c-ebff-95e8-62f9-eb356ebf0295" class="uui-section_testimonial16">
        <div class="uui-padding-vertical-xhuge">
            <div class="uui-text-align-center">
                <div class="uui-max-width-large align-center">
                    <h2 class="uui-heading-medium">Don’t just take our word for it</h2>
                    <div class="uui-space-xsmall"></div>
                    <div class="uui-text-size-large">Hear from some of our amazing customers who are building faster.</div>
                </div>
            </div>
            <div class="uui-testimonial16_component">
                <div class="uui-testimonial16_loop-trigger">
                    <div class="uui-testimonial16_content"></div>
                    <div class="uui-testimonial16_content"></div>
                    <div class="uui-testimonial16_content"></div>
                    <div class="uui-testimonial16_content"></div>
                    <div class="uui-testimonial16_content"></div>
                </div>
                <div class="uui-testimonial16_loop-trigger">
                    <div class="uui-testimonial16_content"></div>
                    <div class="uui-testimonial16_content"></div>
                    <div class="uui-testimonial16_content"></div>
                    <div class="uui-testimonial16_content"></div>
                    <div class="uui-testimonial16_content"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="tab-section">
        <div class="first-example-with-background">
            @php
                $inprogress = \App\Models\Project::whereStatus(1)->wherePosition(2)->latest()->get();
                $completed =  \App\Models\Project::whereStatus(1)->wherePosition(1)->latest()->get();
                $future =  \App\Models\Project::whereStatus(1)->wherePosition(3)->latest()->get();
            @endphp
            <div data-current="Tab 1" data-easing="ease" data-duration-in="500" data-duration-out="500" class="tabs-2 w-tabs">
                <div class="tabs-menu-wrapper w-tab-menu">
                    <a data-w-tab="Tab 1" class="tabs-nav-item _01 w-inline-block w-tab-link w--current">
                        <div class="tabs-nav-text-completed">Completed</div>
                        <div class="tabs-nav-background"></div>
                    </a>
                    <a data-w-tab="Tab 2" class="tabs-nav-item _02 w-inline-block w-tab-link">
                        <div class="tabs-nav-text-progress">In Progress</div>
                    </a>
                    <a data-w-tab="Tab 3" data-w-id="e885a41b-b445-5238-28d8-c8cc5da749a9" class="tabs-nav-item _04 w-inline-block w-tab-link">
                        <div class="tabs-nav-upcoming">Future</div>
                    </a>
                </div>
                <div class="tabs-content-wrapper w-tab-content">
                    <div data-w-tab="Tab 1" class="tab-content-item w-tab-pane w--tab-active">
                        <div class="w-layout-grid tab-card-grid">
                            @foreach($completed as $row)
                                <a href="{{route('home.project',$row->slug)}}" class="tab-card w-inline-block">
                                    <div class="tab-image"><img src="{{asset($row->image)}}" loading="lazy" alt="" class="image-cover"></div>
                                    <div class="tab-content">
                                        <div class="title-small">{{$row->small_title}}</div>
                                        <h3 class="tab-title">{{ $row->name }}</h3>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div data-w-tab="Tab 2" class="tab-content-item w-tab-pane">
                        <div class="w-layout-grid tab-card-grid">
                            @foreach($inprogress as $row)
                                <a href="{{route('home.project',$row->slug)}}" class="tab-card w-inline-block">
                                    <div class="tab-image"><img src="{{asset($row->image)}}" loading="lazy" alt="" class="image-cover"></div>
                                    <div class="tab-content">
                                        <div class="title-small">{{$row->small_title}}</div>
                                        <h3 class="tab-title">{{$row->name }}</h3>
{{--                                        <div class="star-row">--}}
{{--                                            <div class="rating">4.5</div><img src="{{asset('homePage')}}/images/Star-Yellow.svg" loading="lazy" alt="" class="star"><img src="{{asset('homePage')}}/images/Star-Yellow.svg" loading="lazy" alt="" class="star"><img src="{{asset('homePage')}}/images/Star-Yellow.svg" loading="lazy" alt="" class="star"><img src="{{asset('homePage')}}/images/Star-Yellow.svg" loading="lazy" alt="" class="star"><img src="{{asset('homePage')}}/images/Star-Grey.svg" loading="lazy" alt="" class="star">--}}
{{--                                            <div class="count-text">(75)</div>--}}
{{--                                        </div>--}}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div data-w-tab="Tab 3" class="tab-content-item w-tab-pane">
                        <div class="w-layout-grid tab-card-grid">
                            @foreach($future as $row)
                                <a href="{{route('home.project',$row->slug)}}" class="tab-card w-inline-block">
                                    <div class="tab-image"><img src="{{asset($row->image)}}" loading="lazy" alt="" class="image-cover"></div>
                                    <div class="tab-content">
                                        <div class="title-small">{{$row->small_title}}</div>
                                        <h3 class="tab-title">{{$row->name}}</h3>
{{--                                        <div class="star-row">--}}
{{--                                            <div class="rating">4.5</div><img src="{{asset('homePage')}}/images/Star-Yellow.svg" loading="lazy" alt="" class="star"><img src="{{asset('homePage')}}/images/Star-Yellow.svg" loading="lazy" alt="" class="star"><img src="{{asset('homePage')}}/images/Star-Yellow.svg" loading="lazy" alt="" class="star"><img src="{{asset('homePage')}}/images/Star-Yellow.svg" loading="lazy" alt="" class="star"><img src="{{asset('homePage')}}/images/Star-Grey.svg" loading="lazy" alt="" class="star">--}}
{{--                                            <div class="count-text">(75)</div>--}}
{{--                                        </div>--}}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="section-large-2">
        <div class="container-regular">
            <div data-w-id="2ad49f35-3bdd-5aae-3093-e451c12fb03f" style="opacity:0" class="content-grid-large">
                <div data-w-id="44ebfa33-0014-2483-2624-f3912fb5e6c8" style="opacity:0" class="content-wrapper">
                    <div class="tab-image"><img src="{{asset('homePage')}}/images/324f02dd-5401-493d-82a5-dbfffd8bf2fe.jpeg" loading="lazy" sizes="(max-width: 991px) 90vw, (max-width: 1439px) 43vw, 520px" srcset="{{asset('homePage')}}/images/324f02dd-5401-493d-82a5-dbfffd8bf2fe-p-500.jpeg 500w, {{asset('homePage')}}/images/324f02dd-5401-493d-82a5-dbfffd8bf2fe-p-800.jpeg 800w, {{asset('homePage')}}/images/324f02dd-5401-493d-82a5-dbfffd8bf2fe-p-1080.jpeg 1080w, {{asset('homePage')}}/images/324f02dd-5401-493d-82a5-dbfffd8bf2fe.jpeg 2048w" alt="" class="image-cover"></div>
                </div>
                <div data-w-id="2ad49f35-3bdd-5aae-3093-e451c12fb040" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="content-wrapper">
                    <div class="wrap-v-large">
                        <div class="content-header">
                            <div class="badge">
                                <div>The Gap Year Program</div>
                            </div>
                            <h3 class="h3-heading-4">Deliver a distinctive skill set to provide </h3>
                            <div class="max-width-small">
                                <p class="paragraph-regular-4">Embark on a transformative journey towards your goals in the Trade Industry with our personalised and group support programs. Benefit from real world experience and expertise to launch your career.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-content-small">
                        <div data-hover="false" data-delay="0" class="faq w-dropdown">
                            <div class="faq-toggle w-dropdown-toggle">
                                <div class="faq-title-wrap">
                                    <div class="faq-title">Check eligibility</div>
                                    <div class="faq-icon">
                                        <div class="plus w-embed"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.99984 2.66663V7.99996M7.99984 7.99996V13.3333M7.99984 7.99996H2.6665M7.99984 7.99996H13.3332" stroke="#FF4B0E" stroke-width="1.33333" stroke-linecap="square"></path>
                                            </svg></div>
                                        <div class="minus w-embed"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.6665 8H7.99984H13.3332" stroke="#8F8F8F" stroke-width="1.33333" stroke-linecap="square"></path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <nav class="faq-list w-dropdown-list">
                                <div class="faq-tab">
                                    <p class="paragraph-small"><strong>Are you between 17-22 years old, with approved SLES funding, and available 2 days a week?</strong> <br><br>You&#x27;re exactly who we&#x27;re looking for! Dive into opportunities tailored for your success and growth. Join us and start shaping your future today!</p>
                                </div>
                            </nav>
                        </div>
                        <div data-hover="false" data-delay="0" class="faq w-dropdown">
                            <div class="faq-toggle w-dropdown-toggle">
                                <div class="faq-title-wrap">
                                    <div class="faq-title">What you achieve</div>
                                    <div class="faq-icon">
                                        <div class="plus w-embed"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.99984 2.66663V7.99996M7.99984 7.99996V13.3333M7.99984 7.99996H2.6665M7.99984 7.99996H13.3332" stroke="#FF4B0E" stroke-width="1.33333" stroke-linecap="square"></path>
                                            </svg></div>
                                        <div class="minus w-embed"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.6665 8H7.99984H13.3332" stroke="#8F8F8F" stroke-width="1.33333" stroke-linecap="square"></path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <nav class="faq-list w-dropdown-list">
                                <div class="faq-tab">
                                    <p class="paragraph-small">Embarking on this journey not only equips you with vital skills but also culminates in tangible achievements that pave your way to a successful future. Here&#x27;s what you gain:<br><br>‍<strong>Cert II in Workplace Skills (BSB20120):</strong> A foundational qualification that arms you with the essential skills for workplace success, including communication, teamwork, problem-solving, and technology.<br>‍<strong>Project Car and Miniature House:</strong> Get hands-on experience by building a project car and a miniature house, blending creativity with practical skills in a rewarding way.<br>‍<strong>Real Trade Experience:</strong> Step into the world of trades with real-life experiences that teach you the ropes of various trades, preparing you for a seamless transition into the workforce.<br>‍<strong>Prepare to Work Safely in the Construction Industry (CPCWHS1001):</strong> Safety first! Gain the knowledge and skills to work safely on any construction site, an essential requirement for a career in the industry.<br><br>Join us and transform your potential into achievements that count!</p>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-large-2">
        <div class="container-regular">
            <div class="content-grid-large">
                <div data-w-id="3360e19d-f72f-34e2-e5e3-7dc266acd683" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="content-wrapper-copy">
                    <div class="wrap-v-large">
                        <div class="content-header">
                            <div class="button-wrapper-copy">
                                <div class="badge">
                                    <div>Fix My Car Program</div>
                                </div>
                                <div class="badge">
                                    <div>NDIS Funded</div>
                                </div>
                            </div>
                            <h3 class="h3-heading-4">Mastering Car Repairs</h3>
                            <div class="max-width-small">
                                <p class="paragraph-regular-4">Fun and inclusive hands on workshops. Learn basic maintenance skills in a safe environment. Experience mentors to guide you every step of the way. Adapted tools to suit individual needs and abilities. Build confidence and unleash your creativity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="button-secondary-arrow-copy">
                        <div>Check Availabilities</div>
                        <div class="button-arrow-small w-embed"><svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 17.125C13.4875 17.125 17.125 13.4875 17.125 9C17.125 4.5125 13.4875 0.875 9 0.874999C4.5125 0.874999 0.875001 4.5125 0.875001 9C0.875 13.4875 4.5125 17.125 9 17.125ZM12.5667 9.44167C12.6837 9.32448 12.7495 9.16563 12.7495 9C12.7495 8.83437 12.6837 8.67552 12.5667 8.55833L10.0667 6.05833C10.0094 5.99693 9.94045 5.94768 9.86378 5.91352C9.78712 5.87936 9.70436 5.86099 9.62044 5.85951C9.53652 5.85803 9.45316 5.87346 9.37534 5.9049C9.29751 5.93633 9.22682 5.98312 9.16747 6.04247C9.10812 6.10182 9.06133 6.17251 9.0299 6.25033C8.99846 6.32816 8.98303 6.41152 8.98451 6.49544C8.98599 6.57935 9.00436 6.66212 9.03852 6.73878C9.07268 6.81545 9.12193 6.88445 9.18333 6.94167L10.6167 8.375L5.875 8.375C5.70924 8.375 5.55027 8.44085 5.43306 8.55806C5.31585 8.67527 5.25 8.83424 5.25 9C5.25 9.16576 5.31585 9.32473 5.43306 9.44194C5.55027 9.55915 5.70924 9.625 5.875 9.625L10.6167 9.625L9.18333 11.0583C9.07293 11.1768 9.01283 11.3335 9.01569 11.4954C9.01854 11.6574 9.08414 11.8118 9.19865 11.9264C9.31316 12.0409 9.46765 12.1065 9.62957 12.1093C9.79148 12.1122 9.94819 12.0521 10.0667 11.9417L12.5667 9.44167Z" fill="white"></path>
                            </svg></div>
                    </div>
                </div>
                <div class="content-wrapper">
                    <div data-w-id="58527b66-620e-3875-8826-4766cefae850" style="opacity:0" class="marquee_wrapper">
                        <div class="marquee_left_container"><img src="{{asset('homePage')}}/images/81588d30-b4a0-4652-bd77-55e612453b36.jpeg" loading="eager" data-w-id="58527b66-620e-3875-8826-4766cefae852" sizes="(max-width: 479px) 90vw, (max-width: 767px) 225px, (max-width: 991px) 230px, 300px" alt="" srcset="{{asset('homePage')}}/images/81588d30-b4a0-4652-bd77-55e612453b36-p-500.jpeg 500w, {{asset('homePage')}}/images/81588d30-b4a0-4652-bd77-55e612453b36-p-800.jpeg 800w, {{asset('homePage')}}/images/81588d30-b4a0-4652-bd77-55e612453b36.jpeg 1536w" class="image-13"><img src="{{asset('homePage')}}/images/067cc972-62ea-4d37-ac21-e927d55fee88.jpeg" loading="eager" data-w-id="58527b66-620e-3875-8826-4766cefae853" sizes="(max-width: 479px) 90vw, (max-width: 767px) 395.6171875px, (max-width: 991px) 230px, 300px" alt="" srcset="{{asset('homePage')}}/images/067cc972-62ea-4d37-ac21-e927d55fee88.jpeg 500w, {{asset('homePage')}}/images/067cc972-62ea-4d37-ac21-e927d55fee88.jpeg 800w, {{asset('homePage')}}/images/067cc972-62ea-4d37-ac21-e927d55fee88.jpeg 1080w, {{asset('homePage')}}/images/067cc972-62ea-4d37-ac21-e927d55fee88.jpeg 2048w" class="image-13"></div>
                        <div class="marquee_righ_container"><img src="{{asset('homePage')}}/images/e6fc4fd9-9d2c-4e2e-9a37-5c19fca7fb54.jpeg" loading="eager" data-w-id="58527b66-620e-3875-8826-4766cefae855" sizes="(max-width: 479px) 90vw, (max-width: 767px) 225px, (max-width: 991px) 230px, 300px" alt="" srcset="{{asset('homePage')}}/images/e6fc4fd9-9d2c-4e2e-9a37-5c19fca7fb54.jpeg 500w, {{asset('homePage')}}/images/e6fc4fd9-9d2c-4e2e-9a37-5c19fca7fb54.jpeg 800w, {{asset('homePage')}}/images/e6fc4fd9-9d2c-4e2e-9a37-5c19fca7fb54.jpeg 1536w" class="image-13"></div>
                        <div class="extra-rows">
                            <div class="marquee_left_container offset"><img src="{{asset('homePage')}}/images/image-8.jpg" loading="lazy" data-w-id="58527b66-620e-3875-8826-4766cefae859" sizes="100vw" alt="" srcset="{{asset('homePage')}}/images/image-8-p-500.jpg 500w, {{asset('homePage')}}/images/image-8-p-800.jpg 800w, {{asset('homePage')}}/images/image-8.jpg 1080w" class="image-13"><img src="{{asset('homePage')}}/images/image-5.jpg" loading="lazy" data-w-id="58527b66-620e-3875-8826-4766cefae85a" sizes="100vw" alt="" srcset="{{asset('homePage')}}/images/image-5-p-500.jpg 500w, {{asset('homePage')}}/images/image-5-p-800.jpg 800w, {{asset('homePage')}}/images/image-5.jpg 1080w" class="image-13"><img src="{{asset('homePage')}}/images/image-1.jpg" loading="lazy" data-w-id="58527b66-620e-3875-8826-4766cefae85b" sizes="100vw" alt="" srcset="{{asset('homePage')}}/images/image-1-p-500.jpg 500w, {{asset('homePage')}}/images/image-1-p-800.jpg 800w, {{asset('homePage')}}/images/image-1.jpg 1080w" class="image-13"><img src="{{asset('homePage')}}/images/image-6.jpg" loading="lazy" data-w-id="58527b66-620e-3875-8826-4766cefae85c" sizes="100vw" alt="" srcset="{{asset('homePage')}}/images/image-6-p-500.jpg 500w, {{asset('homePage')}}/images/image-6-p-800.jpg 800w, {{asset('homePage')}}/images/image-6.jpg 1080w" class="image-13"><img src="{{asset('homePage')}}/images/image-2.jpg" loading="lazy" data-w-id="58527b66-620e-3875-8826-4766cefae85d" sizes="100vw" alt="" srcset="{{asset('homePage')}}/images/image-2-p-500.jpg 500w, {{asset('homePage')}}/images/image-2-p-800.jpg 800w, {{asset('homePage')}}/images/image-2.jpg 1080w" class="image-13"><img src="{{asset('homePage')}}/images/image-7.jpg" loading="lazy" data-w-id="58527b66-620e-3875-8826-4766cefae85e" sizes="100vw" alt="" srcset="{{asset('homePage')}}/images/image-7-p-500.jpg 500w, {{asset('homePage')}}/images/image-7-p-800.jpg 800w, {{asset('homePage')}}/images/image-7.jpg 1080w" class="image-13"><img src="{{asset('homePage')}}/images/image-3.jpg" loading="lazy" data-w-id="58527b66-620e-3875-8826-4766cefae85f" sizes="100vw" alt="" srcset="{{asset('homePage')}}/images/image-3-p-500.jpg 500w, {{asset('homePage')}}/images/image-3-p-800.jpg 800w, {{asset('homePage')}}/images/image-3.jpg 1080w" class="image-13"><img src="{{asset('homePage')}}/images/image-4.jpg" loading="lazy" data-w-id="58527b66-620e-3875-8826-4766cefae860" sizes="100vw" alt="" srcset="{{asset('homePage')}}/images/image-4-p-500.jpg 500w, {{asset('homePage')}}/images/image-4-p-800.jpg 800w, {{asset('homePage')}}/images/image-4.jpg 1080w" class="image-13"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="section_header1">
        <div id="w-node-_11fe5459-9c1b-e45c-fcda-3c098a92d396-d9cd27e8" class="padding-global">
            <div class="container-large-2">
                <div class="padding-section-large">
                    <div class="header1_content">
                        <div class="margin-bottom margin-small">
                            <h1 class="heading-2">Open Hours</h1>
                        </div>
                        <div class="margin-bottom margin-small">
                            <h1 class="heading-2-copy">Monday - Friday</h1>
                        </div>
                        <div class="max-width-medium"></div>
                    </div>
                </div>
            </div>
        </div>
        <section id="w-node-_29be4602-db43-c4e7-01f0-42910e72a421-d9cd27e8">
            <div id="w-node-e4e0a1ed-cab8-12ac-748c-483dfdd363f1-d9cd27e8" class="w-layout-layout wf-layout-layout">
                <div id="w-node-e4e0a1ed-cab8-12ac-748c-483dfdd363f2-d9cd27e8" class="w-layout-cell cell"><img src="{{asset('homePage')}}/images/Logo-1.svg" loading="lazy" width="236" alt=""></div>
                <div id="w-node-e4e0a1ed-cab8-12ac-748c-483dfdd363f3-d9cd27e8" class="w-layout-cell cell-2">
                    <div class="div-block"><img src="{{asset('homePage')}}/images/Frame-1.svg" loading="lazy" alt="" class="image">
                        <h5 class="heading">admin@circuparts.com.au</h5>
                    </div>
                    <div class="div-block">
                        <h5 class="heading">|</h5>
                    </div>
                    <div class="div-block"><img src="{{asset('homePage')}}/images/Frame.svg" loading="lazy" alt="" class="image">
                        <h5 class="heading"><strong>44 Charles St, Aitkenvale QLD 4814</strong><br></h5>
                    </div>
                </div>
                <div id="w-node-ababfedd-7ee5-314e-1751-ccdc6b144a33-d9cd27e8" class="w-layout-cell cell-3">
                    <div class="div-block"><img src="{{asset('homePage')}}/images/Frame-2.svg" loading="lazy" width="34" alt="" class="image"></div>
                </div>
            </div>
        </section>
    </header>

    <div>
        <div class="brix---section">
            <div class="brix---container-default w-container">
                <div data-w-id="b0c01ad9-afc9-4aea-4b0b-17fe5f2d1faf" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid brix---grid-title-and-paragraph">
                    <div>
                        <div>
                            <div class="brix---subtitle">Blog</div>
                            <div class="brix---color-neutral-801">
                                <h1 class="brix---heading-h1-size">Articles &amp; Resources</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-w-id="b0c01ad9-afc9-4aea-4b0b-17fe5f2d1fbb" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid brix---grid-blog-featured-v3">
                    <div id="w-node-b0c01ad9-afc9-4aea-4b0b-17fe5f2d1fbc-d9cd27e8">

                            <a data-w-id="b0c01ad9-afc9-4aea-4b0b-17fe5f2d1fbd" href="{{ route('home.blog', $featured->slug) }}" class="brix---blog-card-wrapper w-inline-block">
                                <div class="brix---mg-bottom-32px">
                                    <div class="brix---blog-card-image-wrapper"><img srcset="{{asset($featured->image)}} 500w, {{asset($featured->image)}} 800w, {{asset($featured->image)}} 1080w, {{asset($featured->image)}} 1758w" alt="{{$row->name}}" sizes="(max-width: 479px) 92vw, (max-width: 767px) 94vw, (max-width: 991px) 95vw, (max-width: 1439px) 56vw, 682.796875px" src="{{asset($featured->image)}}" class="brix---blog-card-image"></div>
                                </div>
                                <div>
                                    <div class="brix---flex-horizontal-space-between">
                                        <div class="brix---badge-primary-small-light">{{$featured->category->name}}</div>
                                        <div class="brix---color-neutral-600">
                                            <div class="brix---text-200">{{$row->created_at->format('Y M d')}}</div>
                                        </div>
                                    </div>
                                    <div class="brix---divider-24px"></div>
                                    <div class="brix---mg-bottom-16px">
                                        <div class="brix---color-neutral-801">
                                            <h2 class="brix---heading-h2-size">{{ $featured->name }}</h2>
                                        </div>
                                    </div>
                                    <div class="brix---color-neutral-600">
                                        <div class="brix---paragraph-default">
                                            <p class="brix---mg-bottom-0">{{\Illuminate\Support\Str::limit($row->description,135)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                    </div>

                    <div id="w-node-b0c01ad9-afc9-4aea-4b0b-17fe5f2d1fd1-d9cd27e8">
                        <div class="w-layout-grid brix---grid-1-column-gap-row-24px">
                            @foreach($otherblogs as $row)
                                <a data-w-id="b0c01ad9-afc9-4aea-4b0b-17fe5f2d1fd3" href="{{ route('home.blog', $row->slug) }}" class="brix---blog-card-wrapper-featured-sidebar w-inline-block">
                                    <div class="brix---blog-card-wrapper-width-218px"><img srcset="{{asset($row->image)}} 500w, {{asset($row->image)}} 654w" alt="{{$row->name}}" sizes="(max-width: 479px) 92vw, (max-width: 767px) 42vw, (max-width: 991px) 218px, (max-width: 1439px) 16vw, 210.328125px" src="{{asset($row->image)}}" class="brix---blog-card-image"></div>
                                    <div class="brix---mg-left-24px---mg-top-16px-mbp">
                                        <div class="brix---mg-bottom-8px">
                                            <div class="brix---color-accent-1">
                                                <div class="brix---text-100-medium">
                                                    <div>{{$row->category->name}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brix---color-neutral-801">
                                            <h3 class="brix---heading-h4-size">{{ $row->name }}</h3>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brix---section-position-relative">
        <div class="brix---container-default w-container">
            <div class="w-layout-grid brix---grid-contact-v4">
                <div data-w-id="5ba4a3c2-bd6e-c9de-c2eb-fc5d201c6f3a" style="-webkit-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 10%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0">
                    <div class="brix---card-form-v2 w-form">
                        <div class="brix---color-neutral-803">
                            <h1 class="brix---heading-h1-size">Get in touch today!</h1>
                        </div>
                        <div class="brix---mg-bottom-32px">
                            <div class="brix---color-neutral-600">
                                <p class="brix---paragraph-default">Complete the form below and one of our fantastic team members will reach out in our earliest convenience.</p>
                            </div>
                        </div>
                        <form id="BRIX-Contact-V4" name="wf-form-BRIX---Contact-V4" data-name="BRIX - Contact V4" method="get" data-wf-page-id="65d986a046f288ded9cd27e8" data-wf-element-id="5ba4a3c2-bd6e-c9de-c2eb-fc5d201c6f43">
                            <div class="w-layout-grid brix---form-grid-2-columns">
                                <div><label for="BRIX-Contact-Name-V4" class="brix---input-label">Name</label><input class="brix---input w-input" maxlength="256" name="BRIX---Contact-Name---V4" data-name="BRIX - Contact Name - V4" placeholder="John Carter" type="text" id="BRIX-Contact-Name-V4"></div>
                                <div><label for="BRIX-Contact-Email-V4" class="brix---input-label">Email</label><input class="brix---input w-input" maxlength="256" name="BRIX---Contact-Email---V4" data-name="BRIX - Contact Email - V4" placeholder="example@email.com" type="email" id="BRIX-Contact-Email-V4"></div>
                                <div><label for="BRIX-Contact-Phone-V4" class="brix---input-label">Phone</label><input class="brix---input w-input" maxlength="256" name="BRIX---Contact-Phone---V4" data-name="BRIX - Contact Phone - V4" placeholder="(123) 456 - 789" type="tel" id="BRIX-Contact-Phone-V4"></div>
                                <div><label for="BRIX-Contact-Company-V4" class="brix---input-label">Company</label><input class="brix---input w-input" maxlength="256" name="BRIX---Contact-Company---V4" data-name="BRIX - Contact Company - V4" placeholder="Facebook" type="text" id="BRIX-Contact-Company-V4"></div>
                                <div id="w-node-_5ba4a3c2-bd6e-c9de-c2eb-fc5d201c6f55-d9cd27e8"><label for="BRIX-Contact-Message-V4" class="brix---input-label">Leave us a message</label><textarea id="BRIX-Contact-Message-V4" name="BRIX---Contact-Message---V4" maxlength="5000" data-name="BRIX - Contact Message - V4" placeholder="Please type your message here..." class="brix---text-area w-input"></textarea></div><input type="submit" data-wait="Please wait..." id="w-node-_5ba4a3c2-bd6e-c9de-c2eb-fc5d201c6f59-d9cd27e8" class="brix---btn-primary w-button" value="Send Message">
                            </div>
                        </form>
                        <div class="brix---success-message w-form-done">
                            <div><img src="{{asset('homePage')}}/images/line-rounded-check-circle-white-brix-templates.svg" alt="Check - Elements Webflow Library - BRIX Templates" class="brix---icon-success-message-big">
                                <h3 class="brix---color-neutral-802">Thank you</h3>
                                <div>Thanks for reaching out. We will get back to you soon.</div>
                            </div>
                        </div>
                        <div class="brix---error-message w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-w-id="5ba4a3c2-bd6e-c9de-c2eb-fc5d201c6f64" style="opacity:0" class="brix---contact-v4-half-bg-image"><img src="{{asset('homePage')}}/images/64b9920b-8d49-4e13-be3a-0e528a026877.jpeg" alt="" sizes="(max-width: 991px) 100vw, 65vw" srcset="{{asset('homePage')}}/images/64b9920b-8d49-4e13-be3a-0e528a026877.jpeg 500w, {{asset('homePage')}}/images/64b9920b-8d49-4e13-be3a-0e528a026877.jpeg 800w, {{asset('homePage')}}/images/64b9920b-8d49-4e13-be3a-0e528a026877.jpeg 1536w" class="brix---bg-image-full-width"></div>
    </div>

@endsection
