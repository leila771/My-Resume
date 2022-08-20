<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume : {{ $user->name }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    </noscript>
    <link href="{{ asset('resume/css/font-awesome/css/all.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('resume/css/bootstrap.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('resume/css/aos.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('resume/css/main.css?ver=1.2.0') }}" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>

<body id="top">
    <header class="d-print-none">
        <div class="container text-center text-lg-left">
            <div class="py-3 clearfix">
                <h1 class="site-title mb-0">{{ $user->name }}</h1>
                <div class="site-nav">
                    <nav role="navigation">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip"
                                    title="Twitter"><i class="fab fa-twitter"></i><span
                                        class="menu-title sr-only">Twitter</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip"
                                    title="Facebook"><i class="fab fa-facebook"></i><span
                                        class="menu-title sr-only">Facebook</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip"
                                    title="Instagram"><i class="fab fa-instagram"></i><span
                                        class="menu-title sr-only">Instagram</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip"
                                    title="Github"><i class="fab fa-github"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="page-content">
        <div class="container">
            <div class="cover shadow-lg bg-white">
                <div class="cover-bg p-3 p-lg-4 text-white">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="avatar hover-effect bg-white shadow-sm p-1"><img src="{{ $user->image->url ?? '' }}"
                                    width="200" height="200" /></div>
                        </div>
                        <div class="col-lg-8 col-md-7 text-center text-md-start">
                            <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0">{{ $user->name }}</h2>
                            <p data-aos="fade-left" data-aos-delay="100">Graphic Designer & Web Developer</p>
                            <div class="d-print-none" data-aos="fade-left" data-aos-delay="200"><a
                                    class="btn btn-light text-dark shadow-sm mt-1 me-1" href="right-resume.pdf"
                                    target="_blank">Download CV</a><a class="btn btn-success shadow-sm mt-1"
                                    href="#contact">Hire Me</a></div>
                        </div>
                    </div>
                </div>
                <div class="about-section pt-4 px-3 px-lg-4 mt-1">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="h3 mb-3">About Me</h2>
                            <p>Hello! I’m Joyce Harrison. I am passionate about UI/UX design and Web Design. I am a
                                skilled Front-end Developer and master of Graphic Design tools such as Photoshop and
                                Sketch.</p>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <div class="pb-1">Age</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">28</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Email</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">{{ $user->email }}</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Phone</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">{{ $user->contact }}</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Address</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">{{ $user->address }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="d-print-none" />
                <div class="skills-section px-3 px-lg-4">
                    <h2 class="h3 mb-3">Professional Skills</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2"><span>HTML</span>
                                <div class="progress my-1">
                                    <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                        data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 90%"
                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-2"><span>CSS</span>
                                <div class="progress my-1">
                                    <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                        data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 85%"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-2"><span>JavaScript</span>
                                <div class="progress my-1">
                                    <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                        data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2"><span>Adobe Photoshop</span>
                                <div class="progress my-1">
                                    <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right"
                                        data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 80%"
                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-2"><span>Sketch</span>
                                <div class="progress my-1">
                                    <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right"
                                        data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 85%"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-2"><span>Adobe XD</span>
                                <div class="progress my-1">
                                    <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right"
                                        data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="d-print-none" />
                <div class="work-experience-section px-3 px-lg-4">
                    <h2 class="h3 mb-4">Work Experience</h2>
                    <div class="timeline">
                        <div class="timeline-card timeline-card-primary card shadow-sm">
                            <div class="card-body">
                                <div class="h5 mb-1">Frontend Developer <span class="text-muted h6">at Creative
                                        Agency</span></div>
                                <div class="text-muted text-small mb-2">May, 2015 - Present</div>
                                <div>Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                    Iterative approaches to corporate strategy foster collaborative thinking to further
                                    the overall value proposition.</div>
                            </div>
                        </div>
                        <div class="timeline-card timeline-card-primary card shadow-sm">
                            <div class="card-body">
                                <div class="h5 mb-1">Graphic Designer <span class="text-muted h6">at Design
                                        Studio</span></div>
                                <div class="text-muted text-small mb-2">June, 2013 - May, 2015</div>
                                <div>Override the digital divide with additional clickthroughs from DevOps.
                                    Nanotechnology immersion along the information highway will close the loop on
                                    focusing solely on the bottom line.</div>
                            </div>
                        </div>
                        <div class="timeline-card timeline-card-primary card shadow-sm">
                            <div class="card-body">
                                <div class="h5 mb-1">Junior Web Developer <span class="text-muted h6">at Indie
                                        Studio</span></div>
                                <div class="text-muted text-small mb-2">Jan, 2011 - May, 2013</div>
                                <div>User generated content in real-time will have multiple touchpoints for offshoring.
                                    Organically grow the holistic world view of disruptive innovation via workplace
                                    diversity and empowerment.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="d-print-none" />
                <div class="page-break"></div>
                <div class="education-section px-3 px-lg-4 pb-4">
                    <h2 class="h3 mb-4">Education</h2>
                    <div class="timeline">
                        @foreach ($user->formations as $formation)
                            <div class="timeline-card timeline-card-success card shadow-sm">
                                <div class="card-body">
                                    <div class="h5 mb-1">{{ $formation->degree }} <span
                                            class="text-muted h6">{{ $formation->establishment }}</span></div>
                                    <div class="text-muted text-small mb-2">{{ $formation->start_date }} - {{ $formation->end_date ?? "present" }}</div>
                                    <div>{{ $formation->description ?? "--" }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
        <div class="container">
            <div class="my-3">
                <div class="h4">{{ $user->name }}</div>
                <div class="footer-nav">
                    <nav role="navigation">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip"
                                    title="Twitter"><i class="fab fa-twitter"></i><span
                                        class="menu-title sr-only">Twitter</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip"
                                    title="Facebook"><i class="fab fa-facebook"></i><span
                                        class="menu-title sr-only">Facebook</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip"
                                    title="Instagram"><i class="fab fa-instagram"></i><span
                                        class="menu-title sr-only">Instagram</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip"
                                    title="Github"><i class="fab fa-github"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="text-small">
                <div class="mb-1">&copy; Right Resume. All rights reserved.</div>
                <div>Design - LH6</a></div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('resume/scripts/bootstrap.bundle.min.js?ver=1.2.0') }}"></script>
    <script src="{{ asset('resume/scripts/aos.js?ver=1.2.0') }}"></script>
    <script src="{{ asset('resume/scripts/main.js?ver=1.2.0') }}"></script>
</body>

</html>
