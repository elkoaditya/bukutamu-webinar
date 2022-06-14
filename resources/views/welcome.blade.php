<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Buku Tamu | Afresto System Indonesia</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{ asset('ico') }}/assets/css/vendor.bundle.css?ver=200">
    <link rel="stylesheet" href="{{ asset('ico') }}/assets/css/style-azure.css?ver=200">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="{{ asset('ico') }}/assets/css/theme.css?ver=200">
    @if(Session::has('download.in.the.next.request'))
        <meta http-equiv="refresh" content="5;url={{ Session::get('download.in.the.next.request') }}">
    @endif
</head>

<body class="nk-body body-wider mode-onepage">
<div class="nk-wrap">
    {{--    <header class="nk-header page-header is-transparent is-sticky is-shrink is-dark" id="header">--}}

    {{--        <!-- Header @s -->--}}
    {{--        <div class="header-main">--}}
    {{--            <div class="header-container container">--}}
    {{--                <div class="header-wrap">--}}
    {{--                    <!-- Logo @s -->--}}
    {{--                    <div class="header-logo header-logo-ls logo animated" data-animate="fadeInDown" data-delay=".65">--}}

    {{--                    </div>--}}
    {{--                    <!-- Menu Toogle @s -->--}}
    {{--                    <div class="header-nav-toggle">--}}
    {{--                        <a href="#" class="navbar-toggle" data-menu-toggle="example-menu-04">--}}
    {{--                            <div class="toggle-line">--}}
    {{--                                <span></span>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <!-- Menu @s -->--}}
    {{--                    <div class="header-navbar header-navbar-s3">--}}
    {{--                        <nav class="header-menu justify-content-between" id="example-menu-04">--}}
    {{--                            <ul class="menu menu-s2 animated" data-animate="fadeInDown" data-delay=".75">--}}

    {{--                            </ul>--}}
    {{--                            <ul class="menu-btns animated" data-animate="fadeInDown" data-delay=".85">--}}
    {{--                                <li><a href="/login" class="btn btn-rg btn-auto btn-outline btn-grad on-bg-theme-dark-alt"><span>Log In</span></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </nav>--}}
    {{--                    </div><!-- .header-navbar @e -->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div><!-- .header-main @e -->--}}
    {{--        <!-- Banner @s -->--}}
    @if(session()->has('message'))
        <div>
            <div class="alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif
    @if(session()->has('error'))
        <div>
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        </div>
    @endif

    {{--        <div class="header-banner bg-theme-alt">--}}
    {{--            <div class="nk-banner bg-grad-special">--}}
    {{--                <div class="banner banner-fs banner-single bg-grad-special-alt tc-light">--}}
    {{--                    <div class="banner-wrap mt-auto">--}}
    {{--                        <div class="container">--}}
    {{--                            <div class="row align-items-center justify-content-center justify-content-lg-between">--}}
    {{--                                <div class="col-lg-5 order-lg-last animated" data-animate="fadeInUp" data-delay="1.25">--}}
    {{--                                    <div class="banner-gfx banner-gfx-ovfix banner-gfx-re-s5 op-30">--}}
    {{--                                        <img src="{{ asset('ico') }}/images/header/gfx-f.png" alt="header">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="abs-center w-100 index-9">--}}
    {{--                                        <div class="token-status token-status-s5 no-bd round animated" data-animate="fadeInUp" data-delay="1.35">--}}
    {{--                                            <h4 class="title title-sm">Pendaftaran akan ditutup dalam</h4>--}}
    {{--                                            <div class="countdown-s3 countdown-s4 countdown" data-date="2022/05/18"></div>--}}
    {{--                                            <div class="progress-wrap progress-wrap-point progress-wrap-point-s1">--}}
    {{--                                            </div>--}}
    {{--                                            <div class="token-action">--}}
    {{--                                                <a class="btn btn-secondary" href="#contact">REGISTER Webinar</a>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div><!-- .col -->--}}
    {{--                                <div class="col-lg-6 text-center text-lg-start">--}}
    {{--                                    <div class="banner-caption cpn tc-light">--}}
    {{--                                        <div class="cpn-head">--}}
    {{--                                            <h1 class="title title-xl-2 title-md title-semibold animated" data-animate="fadeInUp" data-delay="1.35">Webinar Digitalisasi dalam Dunia Pendidikan</h1>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="cpn-text">--}}
    {{--                                            <p class="lead-s2 animated" data-animate="fadeInUp" data-delay="1.45">Peran Digitalisasi Dalam Proses Pembelajaran Untuk Mewujudkan SDM Bali Unggul, Cerdas dan Berkarakter</p>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="cpn-action">--}}
    {{--                                            <ul class="cpn-links animated" data-animate="fadeInUp" data-delay="1.55">--}}
    {{--                                                <li><a href="#team" class="btn btn-md btn-grad">Pembicara</a></li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div><!-- .col -->--}}
    {{--                            </div><!-- .row -->--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="nk-block mt-auto pdb-r">--}}
    {{--                        <div class="container">--}}
    {{--                            <ul class="partner-list-s3 row align-items-center justify-content-center">--}}
    {{--                                <li class="col-12 col-md-2 text-center text-md-start">--}}
    {{--                                    <h6 class="title title-xs tc-primary mb-md-0 mb-4 animated" data-animate="fadeInUp" data-delay="1.65">Our <br> Partners</h6>--}}
    {{--                                </li>--}}
    {{--                                <li class="col-4 col-md-2 animated" data-animate="fadeInUp" data-delay="1.7">--}}
    {{--                                    <a href="#">--}}
    {{--                                        <img src="{{ asset('ico') }}/images/denpasar1.png" alt="partner">--}}
    {{--                                    </a>--}}
    {{--                                </li>--}}
    {{--                                <li class="col-4 col-md-2 animated" data-animate="fadeInUp" data-delay="1.75">--}}
    {{--                                    <a href="#">--}}
    {{--                                        <img src="{{ asset('ico') }}/images/portal.png" alt="partner">--}}
    {{--                                    </a>--}}
    {{--                                </li>--}}
    {{--                                <li class="col-4 col-md-2 animated" data-animate="fadeInUp" data-delay="1.8">--}}
    {{--                                    <a href="#">--}}
    {{--                                        <img src="{{ asset('ico') }}/images/gub.png" alt="partner">--}}
    {{--                                    </a>--}}
    {{--                                </li>--}}
    {{--                                <li class="col-4 col-md-2 animated" data-animate="fadeInUp" data-delay="1.8">--}}
    {{--                                    <a href="#">--}}
    {{--                                        <img src="{{ asset('ico') }}/images/afresto.png" alt="partner">--}}
    {{--                                    </a>--}}
    {{--                                </li>--}}
    {{--                                <li class="col-4 col-md-2 animated" data-animate="fadeInUp" data-delay="1.85">--}}
    {{--                                    <a href="#">--}}
    {{--                                        <img src="{{ asset('ico') }}/images/bambo.png" alt="partner">--}}
    {{--                                    </a>--}}
    {{--                                </li>--}}
    {{--                                <li class="col-4 col-md-2 animated" data-animate="fadeInUp" data-delay="1.9">--}}
    {{--                                    <a href="#">--}}
    {{--                                        <img src="{{ asset('ico') }}/images/wa.png" alt="partner">--}}
    {{--                                    </a>--}}
    {{--                                </li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div><!-- .block @e -->--}}
    {{--                    <div class="nk-ovm shape-u shape-contain shape-left-top"></div>--}}
    {{--                    <!-- Place Particle Js -->--}}
    {{--                    <div id="particles-bg" class="particles-container particles-bg" data-pt-base="#00c0fa" data-pt-base-op=".3" data-pt-line="#2b56f5" data-pt-line-op=".5" data-pt-shape="#00c0fa" data-pt-shape-op=".2"></div>--}}
    {{--                </div>--}}
    {{--            </div><!-- .nk-banner -->--}}
    {{--        </div>--}}
    {{--        <!-- .header-banner @e -->--}}
    {{--    </header>--}}
    <main class="nk-pages bg-transparent">


        <!-- // -->

        <!-- // -->
    {{--        <section class="section bg-theme-alt tc-light ov-h" id="team">--}}
    {{--            <div class="container">--}}
    {{--                <div class="section-head section-head-s3 wide-auto-sm text-center">--}}
    {{--                    <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Pembicara Kami</h6>--}}
    {{--                    <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Pembicara Webinar</h2>--}}
    {{--                    <p class="animated" data-animate="fadeInUp" data-delay=".3">Kami memilih pembicara yang berkualitas dan terdidik</p>--}}
    {{--                </div>--}}
    {{--                <!-- Section Head @s -->--}}
    {{--                <!-- Block @s -->--}}
    {{--                <div class="nk-block nk-block-team-list team-list">--}}
    {{--                    <div class="row justify-content-center">--}}
    {{--                        <div class="col-lg-3 col-mb-6">--}}
    {{--                            <div class="team team-s5 animated" data-animate="fadeInUp" data-delay=".4">--}}
    {{--                                <div class="team-photo team-photo-s1">--}}
    {{--                                    <img src="{{ asset('ico') }}/images/dr.jpg" alt="team" class="no-bdrs">--}}
    {{--                                    <a href="#" class="team-show content-popup" data-overlay="bg-grad-alt"></a>--}}
    {{--                                </div>--}}
    {{--                                <h5 class="team-name title title-md">DR. KN. BOY JAYAWIBAWA</h5>--}}
    {{--                                <span class="team-position">KEPALA DINAS PENDIDIKAN--}}
    {{--KEPEMUDAAN DAN OLAHRAGA--}}
    {{--PROVINSI BALI</span>--}}
    {{--                                <ul class="team-social team-social-vr team-social-s2">--}}
    {{--                                    --}}{{--                                    <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>--}}
    {{--                                    --}}{{--                                    <li><a href="#"><em class="fab fa-twitter"></em></a></li>--}}
    {{--                                    --}}{{--                                    <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                            <!-- Start .team-profile  -->--}}
    {{--                            <div id="team-popup-1" class="team-popup mfp-hide">--}}
    {{--                                <a title="Close" class="mfp-close">×</a>--}}
    {{--                                <div class="row align-items-start">--}}
    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="team-photo">--}}
    {{--                                            <img src="{{ asset('ico') }}/images/team/a.jpg" alt="team">--}}
    {{--                                        </div>--}}
    {{--                                    </div><!-- .col  -->--}}
    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="team-popup-info ps-md-3">--}}
    {{--                                            <h3 class="team-name title title-lg pt-4">Ferdiansyah, S.E., M.M</h3>--}}
    {{--                                            <p class="team-position mb-1">Anggota DPR-RI Komisi X</p>--}}
    {{--                                            <ul class="team-social team-social-s2 mb-4">--}}
    {{--                                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>--}}
    {{--                                                <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>--}}
    {{--                                            </ul>--}}
    {{--                                            <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>--}}
    {{--                                            <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>--}}
    {{--                                            <div class="progress-list">--}}
    {{--                                                <div class="progress-wrap">--}}
    {{--                                                    <div class="progress-title">Blockchain <span class="progress-amount">85%</span></div>--}}
    {{--                                                    <div class="progress-bar progress-bar-xs bg-black-10">--}}
    {{--                                                        <div class="progress-percent bg-grad-alt" data-percent="85"></div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="progress-wrap">--}}
    {{--                                                    <div class="progress-title">Decentralization <span class="progress-amount">68%</span></div>--}}
    {{--                                                    <div class="progress-bar progress-bar-xs bg-black-10">--}}
    {{--                                                        <div class="progress-percent bg-grad-alt" data-percent="68"></div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div><!-- .col  -->--}}
    {{--                                </div><!-- .row  -->--}}
    {{--                            </div><!-- .team-profile  -->--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-3 col-mb-6">--}}
    {{--                            <div class="team team-s5 animated" data-animate="fadeInUp" data-delay=".4">--}}
    {{--                                <div class="team-photo team-photo-s1">--}}
    {{--                                    <img src="{{ asset('ico') }}/images/dpr.jpeg" alt="team" class="no-bdrs">--}}
    {{--                                    <a href="#" class="team-show content-popup" data-overlay="bg-grad-alt"></a>--}}
    {{--                                </div>--}}
    {{--                                <h5 class="team-name title title-md">Ferdiansyah, S.E., M.M</h5>--}}
    {{--                                <span class="team-position">Anggota DPR-RI Komisi X</span>--}}
    {{--                                <ul class="team-social team-social-vr team-social-s2">--}}
    {{--                                    <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>--}}
    {{--                                    <li><a href="#"><em class="fab fa-twitter"></em></a></li>--}}
    {{--                                    <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                            <!-- Start .team-profile  -->--}}
    {{--                            <div id="team-popup-1" class="team-popup mfp-hide">--}}
    {{--                                <a title="Close" class="mfp-close">×</a>--}}
    {{--                                <div class="row align-items-start">--}}
    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="team-photo">--}}
    {{--                                            <img src="{{ asset('ico') }}/images/team/a.jpg" alt="team">--}}
    {{--                                        </div>--}}
    {{--                                    </div><!-- .col  -->--}}
    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="team-popup-info ps-md-3">--}}
    {{--                                            <h3 class="team-name title title-lg pt-4">Ferdiansyah, S.E., M.M</h3>--}}
    {{--                                            <p class="team-position mb-1">Anggota DPR-RI Komisi X</p>--}}
    {{--                                            <ul class="team-social team-social-s2 mb-4">--}}
    {{--                                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>--}}
    {{--                                                <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>--}}
    {{--                                            </ul>--}}
    {{--                                            <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>--}}
    {{--                                            <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>--}}
    {{--                                            <div class="progress-list">--}}
    {{--                                                <div class="progress-wrap">--}}
    {{--                                                    <div class="progress-title">Blockchain <span class="progress-amount">85%</span></div>--}}
    {{--                                                    <div class="progress-bar progress-bar-xs bg-black-10">--}}
    {{--                                                        <div class="progress-percent bg-grad-alt" data-percent="85"></div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="progress-wrap">--}}
    {{--                                                    <div class="progress-title">Decentralization <span class="progress-amount">68%</span></div>--}}
    {{--                                                    <div class="progress-bar progress-bar-xs bg-black-10">--}}
    {{--                                                        <div class="progress-percent bg-grad-alt" data-percent="68"></div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div><!-- .col  -->--}}
    {{--                                </div><!-- .row  -->--}}
    {{--                            </div><!-- .team-profile  -->--}}
    {{--                        </div><!-- .col -->--}}
    {{--                        <div class="col-lg-3 col-mb-6">--}}
    {{--                            <div class="team team-s5 animated" data-animate="fadeInUp" data-delay=".5">--}}
    {{--                                <div class="team-photo team-photo-s1">--}}
    {{--                                    <img src="{{ asset('ico') }}/images/dimas.jpg" alt="team" class="no-bdrs">--}}
    {{--                                    <a href="#" class="team-show content-popup" data-overlay="bg-grad-alt"></a>--}}
    {{--                                </div>--}}
    {{--                                <h5 class="team-name title title-md">T. ADIMAS--}}
    {{--                                    SULISTYADI, S.PD.</h5>--}}
    {{--                                <span class="team-position">PLATFORM SEKOLAH DIGITAL--}}
    {{--PT. AFRESTO SISTEM INDONESIA</span>--}}
    {{--                                <ul class="team-social team-social-vr team-social-s2">--}}
    {{--                                    <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>--}}
    {{--                                    <li><a href="#"><em class="fab fa-twitter"></em></a></li>--}}
    {{--                                    <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                            <!-- Start .team-popup  -->--}}
    {{--                            <div id="team-popup-2" class="team-popup mfp-hide">--}}
    {{--                                <a title="Close" class="mfp-close">×</a>--}}
    {{--                                <div class="row align-items-start">--}}
    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="team-photo">--}}
    {{--                                            <img src="{{ asset('ico') }}/images/team/b.jpg" alt="team">--}}
    {{--                                        </div>--}}
    {{--                                    </div><!-- .col  -->--}}
    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="team-popup-info ps-md-3">--}}
    {{--                                            <h3 class="team-name title title-lg pt-4">Adimas Sulistyadi, S.Pd</h3>--}}
    {{--                                            <p class="team-position mb-1">CTO &amp; Software Engineer</p>--}}
    {{--                                            <ul class="team-social team-social-s2 mb-4">--}}
    {{--                                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>--}}
    {{--                                                <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>--}}
    {{--                                            </ul>--}}
    {{--                                            <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>--}}
    {{--                                            <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>--}}
    {{--                                        </div>--}}
    {{--                                    </div><!-- .col  -->--}}
    {{--                                </div><!-- .row  -->--}}
    {{--                            </div><!-- .team-popup  -->--}}
    {{--                        </div><!-- .col -->--}}
    {{--                        <div class="col-lg-3 col-mb-6">--}}
    {{--                            <div class="team team-s5 animated" data-animate="fadeInUp" data-delay=".6">--}}
    {{--                                <div class="team-photo team-photo-s1">--}}
    {{--                                    <img src="{{ asset('ico') }}/images/putu.png" alt="team" class="no-bdrs">--}}
    {{--                                    <a href="#" class="team-show content-popup" data-overlay="bg-grad-alt"></a>--}}
    {{--                                </div>--}}
    {{--                                <h5 class="team-name title title-md">PUTU SUDIARTA S.KOM</h5>--}}
    {{--                                <span class="team-position">PT.BAMBOOMEDIA CIPTA PERSADA</span>--}}
    {{--                                <ul class="team-social team-social-vr team-social-s2">--}}
    {{--                                    <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>--}}
    {{--                                    <li><a href="#"><em class="fab fa-twitter"></em></a></li>--}}
    {{--                                    <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                            <!-- Start .team-profile  -->--}}
    {{--                            <div id="team-popup-3" class="team-popup mfp-hide">--}}
    {{--                                <a title="Close" class="mfp-close">×</a>--}}
    {{--                                <div class="row align-items-start">--}}
    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="team-photo">--}}
    {{--                                            <img src="{{ asset('ico') }}/images/team/putu.png" alt="team">--}}
    {{--                                        </div>--}}
    {{--                                    </div><!-- .col  -->--}}
    {{--                                    <div class="col-md-6">--}}
    {{--                                        <div class="team-popup-info ps-md-3">--}}
    {{--                                            <h3 class="team-name title title-lg pt-4">Putu Sidiartha</h3>--}}
    {{--                                            <p class="team-position mb-1">Anggota DPR-RI Komisi X</p>--}}
    {{--                                            <ul class="team-social team-social-s2 mb-4">--}}
    {{--                                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>--}}
    {{--                                                <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>--}}
    {{--                                            </ul>--}}
    {{--                                            <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>--}}
    {{--                                            <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>--}}
    {{--                                        </div>--}}
    {{--                                    </div><!-- .col  -->--}}
    {{--                                </div><!-- .row  -->--}}
    {{--                            </div><!-- .team-profile  -->--}}
    {{--                        </div><!-- .col -->--}}
    {{--                        <!-- .col -->--}}
    {{--                    </div><!-- .row -->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="nk-ovm shape-r"></div>--}}
    {{--        </section>--}}
    <!-- // -->

        <!-- // -->
        <section class="section section-contact bg-white ov-h" id="contact">
            <div class="container">
                <div class="section-head section-head-s3 wide-auto-sm text-center">
                    <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Buku Tamu</h6>
                    <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Daftar Hadir </h2>
                </div>
                <!-- Block @s -->
                <div class="nk-block block-contact" id="contact">
                    <div class="row justify-content-center gutter-vr-30px">
                        {{--                        <div class="col-lg-4">--}}
                        {{--                            <div class="pdt-s">--}}
                        {{--                                <div class="d-flex flex-column h-100">--}}
                        {{--                                    <p class="animated" data-animate="fadeInUp" data-delay=".3">Apa bila ada anda memiliki pertanyaan, kami akan menjawaban pertanyaan anda secepat mungkin.</p>--}}
                        {{--                                    <ul class="contact-list contact-list-s3">--}}
                        {{--                                        --}}{{--                                        <li class="animated" data-animate="fadeInUp" data-delay=".4">--}}
                        {{--                                        --}}{{--                                            <em class="contact-icon contact-icon-s3 fas fa-phone"></em>--}}
                        {{--                                        --}}{{--                                            <div class="contact-text">--}}
                        {{--                                        --}}{{--                                                <span>+44 0123 4567</span>--}}
                        {{--                                        --}}{{--                                            </div>--}}
                        {{--                                        --}}{{--                                        </li>--}}
                        {{--                                        <li class="animated" data-animate="fadeInUp" data-delay=".5">--}}
                        {{--                                            <em class="contact-icon contact-icon-s3 fas fa-envelope"></em>--}}
                        {{--                                            <div class="contact-text">--}}
                        {{--                                                <span>office@afresto.id</span>--}}
                        {{--                                            </div>--}}
                        {{--                                        </li>--}}
                        {{--                                        --}}{{--                                        <li class="animated" data-animate="fadeInUp" data-delay=".6">--}}
                        {{--                                        --}}{{--                                            <em class="contact-icon contact-icon-s3 fas fa-paper-plane"></em>--}}
                        {{--                                        --}}{{--                                            <div class="contact-text">--}}
                        {{--                                        --}}{{--                                                <span>Join us on Telegram</span>--}}
                        {{--                                        --}}{{--                                            </div>--}}
                        {{--                                        --}}{{--                                        </li>--}}
                        {{--                                    </ul>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div><!-- .col -->--}}
                        <div class="col-lg-6">
                            <div class="">
                                <form id="" class="" action="/form/register" method="post">@csrf

                                    <div class="field-item animated" data-animate="fadeInUp" data-delay=".8">
                                        <input name="namaKepalaSekolah" type="text" class="input-line required" required>
                                        <label class="field-label field-label-line">Nama Lengkap</label>
                                    </div>


                                    <div class="field-item animated" data-animate="fadeInUp" data-delay=".8">
                                        <input name="notelpKapsek" type="text" class="input-line required" required>
                                        <label class="field-label field-label-line">No Whatsapp</label>
                                    </div>


                                    {{--                                    <div class="field-item animated" data-animate="fadeInUp" data-delay=".8">--}}
                                    {{--                                        <input name="email" type="email" class="input-line required email" required>--}}
                                    {{--                                        <label class="field-label field-label-line">Email Anda</label>--}}
                                    {{--                                    </div>--}}

                                    <div class="field-item animated" data-animate="fadeInUp" data-delay=".7">
                                        <input name="namaSekolah" type="text" class="input-line required" required>
                                        <label class="field-label field-label-line">Nama sekolah / Instansi  </label>
                                    </div>
                                    {{--                                    <div class="field-item animated" data-animate="fadeInUp" data-delay=".8">--}}
                                    {{--                                        <input name="alamatSekolah" type="text" class="input-line required" required>--}}
                                    {{--                                        <label class="field-label field-label-line">Alamat sekolah</label>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="field-item animated" data-animate="fadeInUp" data-delay=".8">--}}
                                    {{--                                        <label for="task-tag" class="form-label d-block">Kabupaten / Kota</label>--}}
                                    {{--                                        <select class="form-select task-tag" id="task-tag" name="kabupaten" >--}}
                                    {{--                                            @foreach($kabupatens as $kabupaten)--}}
                                    {{--                                                <option value="{{$kabupaten->value}}">{{$kabupaten->value}}</option>--}}
                                    {{--                                            @endforeach--}}
                                    {{--                                        </select>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="field-item animated" data-animate="fadeInUp" data-delay=".8">--}}
                                    {{--                                        <label for="task-tag" class="form-label d-block">Jenjang</label>--}}
                                    {{--                                        <select class="form-select task-tag" id="task-tag" name="jenjang" >--}}
                                    {{--                                            <option value="sma">SMA ( Sekolah Menengah Atas )</option>--}}
                                    {{--                                            <option value="smk">SMK ( Sekolah Menengah Kejuruan )</option>--}}
                                    {{--                                            <option value="slb">SLB ( Sekolah Luar Biasa )</option>--}}
                                    {{--                                        </select>--}}
                                    {{--                                    </div>--}}

                                    <div class="row">
                                        <div class="col-sm-4 animated" data-animate="fadeInUp" data-delay="1">
                                            <button type="submit" class="btn btn-md btn-grad">Submit</button>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-results"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .block @e -->
            </div>
            <div class="ui-mask-right ui-mask-s6"></div>
        </section>
        <!-- // -->

    </main>
    <!-- Footer -->
</div>
<!-- Modals -->
<!-- This is used in azure, azure-woa, azure-pro, azure-pro-woa, muscari, muscari-woa, block-ath.html pages  -->
<!-- Modal @s -->
<!-- // -->
<div class="modal fade" id="login-popup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="ath-container m-0">
                <div class="ath-body">
                    <h5 class="ath-heading title">Sign in <small class="tc-default">with your ICO Account</small></h5>
                    <form action="#">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" placeholder="Password">
                            </div>
                        </div>
                        <div class="field-item d-flex justify-content-between align-items-center">
                            <div class="field-item pb-0">
                                <input class="input-checkbox" id="remember-me-100" type="checkbox">
                                <label for="remember-me-100">Remember Me</label>
                            </div>
                            <div class="forget-link fz-6">
                                <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#reset-popup">Forgot password?</a>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-md">Sign In</button>
                    </form>
                    <div class="sap-text"><span>Or Sign In With</span></div>
                    <ul class="row gutter-20px gutter-vr-20px">
                        <li class="col"><a href="#" class="btn btn-md btn-facebook btn-block"><em class="icon fab fa-facebook-f"></em><span>Facebook</span></a></li>
                        <li class="col"><a href="#" class="btn btn-md btn-google btn-block"><em class="icon fab fa-google"></em><span>Google</span></a></li>
                    </ul>
                    <div class="ath-note text-center"> Don’t have an account? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#register-popup"> <strong>Sign up here</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .modal @e -->
<!-- Modal @s -->
<div class="modal fade" id="register-popup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="ath-container m-0">
                <div class="ath-body">
                    <h5 class="ath-heading title">Sign Up <small class="tc-default">Create New TokenWiz Account</small></h5>
                    <form action="#">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" placeholder="Password">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" placeholder="Repeat Password">
                            </div>
                        </div>
                        <div class="field-item">
                            <input class="input-checkbox" id="agree-term-200" type="checkbox">
                            <label for="agree-term-200">I agree to Icos <a href="#">Privacy Policy</a> &amp; <a href="#">Terms</a>.</label>
                        </div>
                        <button class="btn btn-primary btn-block btn-md">Sign Up</button>
                    </form>
                    <div class="sap-text"><span>Or Sign Up With</span></div>
                    <ul class="btn-grp gutter-20px gutter-vr-20px">
                        <li class="col"><a href="#" class="btn btn-md btn-facebook btn-block"><em class="icon fab fa-facebook-f"></em><span>Facebook</span></a></li>
                        <li class="col"><a href="#" class="btn btn-md btn-google btn-block"><em class="icon fab fa-google"></em><span>Google</span></a></li>
                    </ul>
                    <div class="ath-note text-center"> Already have an account? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#login-popup"> <strong>Sign in here</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .modal @e -->
<!-- Modal @s -->
<div class="modal fade" id="reset-popup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="ath-container m-0">
                <div class="ath-body">
                    <h5 class="ath-heading title">Reset <small class="tc-default">with your Email</small></h5>
                    <form action="#">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Email">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-md">Reset Password</button>
                        <div class="ath-note text-center"> Remembered? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#login-popup"> <strong>Sign in here</strong></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- .modal @e -->
<!-- Preloader -->
<div class="preloader"><span class="spinner spinner-round"></span></div>
<!-- JavaScript -->
<script src="{{ asset('ico') }}/assets/js/jquery.bundle.js?ver=200"></script>
<script src="{{ asset('ico') }}/assets/js/scripts.js?ver=200"></script>
<script src="{{ asset('ico') }}/assets/js/charts.js?ver=200"></script>
<script src="{{ asset('ico') }}/assets/js/charts.js?ver=200"></script>
</body>

</html>
