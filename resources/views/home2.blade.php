@extends('layout.main2')

@section('content')
<!--
        ===================
            HOME
        ===================
        -->
        <section class="mh-home" id="mh-home">
            <div class="home-ovimg">
                <div class="container">
                    <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                        <div class="col-sm-6">
                            <div class="mh-header-info">
                                <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <span>Hello I'm</span>
                                </div>

                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->name }}</h2>
                                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">{{ $user->title }}</h4>

                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">{{ $user->email }}</a></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:">{{ $user->phone }}</a></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>{{ $user->alamat }}</address></li>
                                </ul>

                                <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <div class="img-border">
                                    <img src="{{ asset('storage/' . $user->foto) }}"  class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ==================
            ABOUT
        =================
        -->
        <section class="mh-about" id="mh-about">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <img src="assets/images/ab-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-inner">
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">About Me</h2>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->about }}</p>
                            <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <ul>
                                    @foreach ($languages as $item)
                                        <li><span>{{ $item->language }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            {{-- <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i class="fa fa-download"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           SERVICE
        ===================
        -->
        <section class="mh-service">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h2>What I do</h2>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <i class="fa fa-bullseye purple-color"></i>
                            <h3>Data Scientist & Ai</h3>
                            <p>
                                Works with data to to extract valuable insights from data and made machine learning model using cutting-edge algorithms and techniques
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <i class="fa fa-code iron-color"></i>
                            <h3>Web Development</h3>
                            <p>
                                Work mainly as a backend programmer that made website dinamic and accosianally does frontend for
                                multiple projects
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <i class="fa fa-object-ungroup sky-color"></i>
                            <h3>3D Modeling</h3>
                            <p>
                                Im dedicated to learn how to make an immersive virtual environtments, leveraging tools like Blender
                                and sketchup
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           SKILLS
        ===================
        -->
        <section class="mh-skills" id="mh-skills">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title text-center col-sm-12">
                        <!--<h2>Skills</h2>-->
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-skills-inner">
                            <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <h3>Technical Skills</h3>
                                <div class="each-skills">
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">Javascript</div>
                                                <div class="percentagem-num">60%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">Java</div>
                                                <div class="percentagem-num">46%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 46%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">Python</div>
                                                <div class="percentagem-num">88%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 88%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">PHP</div>
                                                <div class="percentagem-num">85%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 85%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">HTML</div>
                                                <div class="percentagem-num">57%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 57%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <h3>Professional Skills</h3>
                            <ul class="mh-professional-progress" >
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="69"></div>
                                    <div class="pr-skill-name">Communication</div>
                                </li>
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="90"></div>
                                    <div class="pr-skill-name">Team Work</div>
                                </li>
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="78"></div>
                                    <div class="pr-skill-name">Project Management</div>
                                </li>
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="60"></div>
                                    <div class="pr-skill-name">Creativity</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           EXPERIENCES
        ===================
        -->
        <section class="mh-experince" id="mh-experience">
            <div class="bolor-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-12">
                            <div class="mh-education">
                                <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Experiances</h3>
                                <div class="mh-education-deatils">
                                    @foreach ($experiances as $item)
                                    <!-- Education Institutes-->
                                    <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                        <h4>{{ $item->title }} <a href="#">{{ $item->place }}</a></h4>
                                        <div class="mh-eduyear">{{ $item->year }}</div>
                                        <p>{{ $item->about }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-12 col-md-6">
                            <div class="mh-work">
                                 <h3>Work Experience</h3>
                                <div class="mh-experience-deatils">
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <h4>UI/UX Designer <a href="#">IronSketch</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Validate CSS</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                        <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Validate CSS</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                        <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                        <div class="mh-eduyear">2005-2008</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Validate CSS</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <!--
        ===================
           PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <h3>My Pojects</h3>
                    </div>
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>All Categories</span></li>
                                {{-- <li data-filter=".user-interface" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Web Design</span></li>
                                <li data-filter=".branding" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><span>Branding</span></li>
                                <li data-filter=".mockup" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><span>Mockups</span></li>
                                <li data-filter=".ui" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Photography</span></li> --}}
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <div class="portfolioContainer row">
                                @foreach ($projects as $item)
                                    <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                        <figure>
                                            <img src="{{ asset('storage/' . $item->foto) }}" alt="img04">
                                            <figcaption class="fig-caption">
                                                <i class="fa fa-search"></i>
                                                <h5 class="title">{{ $item->name }}</h5>
                                                <span class="sub-title">{{ $item->category }}</span>
                                                <a href="{{ $item->link }}" target="_blank"></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                @endforeach
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>
            {{-- <div class="mh-portfolio-modal" id="mh">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Wrap - A campanion plugin</h2>
                            <p>Wrap is a clean and elegant Multipurpose Landing Page Template.
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                            All variations are organized separately so you can use / customize the template very easily.</p>

                            <p>It is a clean and elegant Multipurpose Landing Page Template.
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                            All variations are organized separately so you can use / customize the template very easily.</p>
                            <div class="mh-about-tag">
                                <ul>
                                    <li><span>php</span></li>
                                    <li><span>html</span></li>
                                    <li><span>css</span></li>
                                    <li><span>php</span></li>
                                    <li><span>wordpress</span></li>
                                    <li><span>React</span></li>
                                    <li><span>Javascript</span></li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-fill">Live Demo</a>
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="assets/images/pr-0.jif" alt="" class="img-fluid">
                                <p>All variations are organized separately so you can use / customize the template very easily.</p>
                                <img src="assets/images/pr-1.jif" alt="" class="img-fluid">
                                <p>All variations are organized separately so you can use / customize the template very easily.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>

        <!--
        ===================
           PRICING
        ===================
        -->
        {{-- <section class="mh-pricing" id="mh-pricing">
            <div class="">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Pricing Table</h3>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <i class="fa fa-calendar"></i>
                                <h4>Full-time work</h4>
                                <p>I am available for full time</p>
                                <h5>$1500</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <i class="fa fa-file"></i>
                                <h4>Fixed Price Project</h4>
                                <p>I am available for fixed roles</p>
                                <h5>$500</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <i class="fa fa-hourglass"></i>
                                <h4>Hourley work</h4>
                                <p>I am available for Hourley projets</p>
                                <h5>$50</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!--
        ===================
           BLOG
        ===================
        -->
        {{-- <section class="mh-blog" id="mh-blog">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Featured Posts</h3>
                    </div>
                    <div class="col-sm-12 col-md-4">
                         <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <img src="assets/images/b-3.png" alt="" class="img-fluid">
                            <div class="blog-inner">
                                <h2><a href="blog-single.html">A life without the daily traffic jams</a></h2>
                                <div class="mh-blog-post-info">
                                    <ul>
                                        <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                        <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                    </ul>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                <a href="blog-single.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <img src="assets/images/b-2.png" alt="" class="img-fluid">
                            <div class="blog-inner">
                                <h2><a href="blog-single.html">Proportion are what’s really needed</a></h2>
                                <div class="mh-blog-post-info">
                                    <ul>
                                        <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                        <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                    </ul>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                <a href="blog-single.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <img src="assets/images/b-1.png" alt="" class="img-fluid">
                            <div class="blog-inner">
                                <h2><a href="blog-single.html">Mounts of paper work to remember the way</a></h2>
                                <div class="mh-blog-post-info">
                                    <ul>
                                        <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                        <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                    </ul>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                <a href="blog-single.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!--
        ===================
           TESTIMONIALS
        ===================
        -->
        {{-- <section class="mh-testimonial" id="mh-testimonial">
            <div class="home-v-img">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Client Reviews</h3>
                        </div>
                        <div class="col-sm-12 wow fadeInUp" id="mh-client-review" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="assets/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="assets/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>

                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="assets/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="assets/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="assets/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>

                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="assets/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
@endsection
