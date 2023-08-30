<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Nunyabox</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('../assets/img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/plugins/slick/slick-theme.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/plugins/swiper/css/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/plugins/aos/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
</head>

<body class="home-three">

    <div class="main-wrapper">

        <header class="header-three">
            <div class="header-fixed-three header-fixed">
                <nav class="navbar navbar-expand-lg header-nav-three scroll-sticky">
                    <div class="container">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="index.html" class="navbar-brand logo">
                                <img src="{{ asset('../assets/img/logo/Logo-Nunyabox.jpg') }}" class="img-fluid" alt="Logo">

                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="index.html" class="menu-logo">
                                    <img src="{{ asset('../assets/img/logo/Logo-Nunyabox.jpg') }}" class="img-fluid" alt="Logo">

                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <ul class="main-nav">
                                <li class="has-submenu active">
                                    <a href>ACCEUIL </a>
                                </li>
                                <li class="has-submenu">
                                    <a href>FORMATEURS</i></a>
                                </li>
                                <li class="has-submenu">
                                    <a href>COURS</a>
                                </li>
                                <li class="has-submenu">
                                    <a href>A PROPOS</a>
                                </li>
                                <li class="has-submenu">
                                    <a href>CONTACT</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav header-navbar-rht align-items-center">
                            <li class="nav-item">
                                <a class="nav-link login-three-head button" href="{{ route('login') }}"><span>CONNEXION</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link signin-three-head" href="{{ route('register') }}">S'INSCRIRE</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>


        <section class="home-three-slide d-flex align-items-center">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 col-lg-8 col-md-12 col-12" data-aos="fade-down">
                        <div class="home-three-slide-face">
                            <div class="home-three-slide-text">
                                <h1>Cours en ligne attrayants <span>&</span> accessibles pour tous</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                                    bibendum gravida maecenas augue elementum et</p>
                            </div>
                            <div class="banner-three-content">
                                <form class="form" action="../../external.html?link=https://dreamslms.dreamguystech.com/html/course-list.html">
                                    <div class="form-inner-three">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Search School, Online eductional centers, etc">
                                            <span class="drop-detail-three">
                                                <select class="form-three-select select">
                                                    <option>Select category</option>
                                                    <option>Angular</option>
                                                    <option>Node Js</option>
                                                    <option>React</option>
                                                    <option>Python</option>
                                                </select>
                                            </span>
                                            <button class="btn btn-three-primary sub-btn" type="submit"><i class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 col-12" data-aos="fade-up">
                        <div class="girl-slide-img aos">
                            <img class="img-fluid" src="assets/img.jpg" alt>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section student-course home-three-course">
            <div class="container">
                <div class="course-widget-three">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                            <div class="course-details-three">
                                <div class="align-items-center">
                                    <div class="course-count-three course-count ms-0">
                                        <div class="course-img">
                                            <img class="img-fluid" src="assets/img/icon-three/course-01.svg" alt>
                                        </div>
                                        <div class="course-content-three">
                                            <h4 class="text-blue"><span class="counterUp">10</span>K</h4>
                                            <p>Cours en ligne</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                            <div class="course-details-three">
                                <div class="align-items-center">
                                    <div class="course-count-three course-count ms-0">
                                        <div class="course-img">
                                            <img class="img-fluid" src="assets/img/icon-three/course-02.svg" alt>
                                        </div>
                                        <div class="course-content-three">
                                            <h4 class="text-yellow"><span class="counterUp">200</span>+</h4>
                                            <p>Formateurs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                            <div class="course-details-three">
                                <div class="align-items-center">
                                    <div class="course-count-three course-count ms-0">
                                        <div class="course-img">
                                            <img class="img-fluid" src="assets/img/icon-three/course-03.svg" alt>
                                        </div>
                                        <div class="course-content-three">
                                            <h4 class="text-info"><span class="counterUp">6</span>K+</h4>
                                            <p>Cours certifiés</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                            <div class="course-details-three mb-0">
                                <div class="align-items-center">
                                    <div class="course-count-three">
                                        <div class="course-img">
                                            <img class="img-fluid" src="assets/img/icon-three/course-04.svg" alt>
                                        </div>
                                        <div class="course-content-three course-count ms-0">
                                            <h4 class="text-green"><span class="counterUp">60</span>K +</h4>
                                            <p>Étudiants</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="master-skill-three">
            <div class="master-three-vector">
                <img class="ellipse-right img-fluid" src="assets/img/bg/pattern-01.png" alt>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-right">
                        <div class="master-three-images">
                            <div class="master-three-left">
                                <img class="img-fluid" src="assets/img/students/career.png" alt="image-banner" title="image-banner">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-left">
                        <div class="home-three-head" data-aos="fade-up">
                            <h2>Maîtrisez les compétences nécessaires pour mener votre carrière</h2>
                        </div>
                        <div class="home-three-content" data-aos="fade-up">
                            <p>Obtenez une certification, maîtrisez les compétences technologiques modernes et améliorez votre carrière, que vous soyez débutant ou un pro chevronné. 95 % des apprenants eLearning rapportent notre contenu pratique ont directement aidé leur carrière.</p>
                        </div>
                        <div class="skils-group">
                            <div class="row">
                                <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-down">
                                    <div class="skils-icon-item">
                                        <div class="skils-icon">
                                            <img class="img-fluid" src="assets/img/icon-three/career-01.svg" alt="certified">
                                        </div>
                                        <div class="skils-content">
                                            <p class="mb-0">Get certified with 100+ certification courses</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-up">
                                    <div class="skils-icon-item">
                                        <div class="skils-icon">
                                            <img class="img-fluid" src="assets/img/icon-three/career-02.svg" alt="Build skills">
                                        </div>
                                        <div class="skils-content">
                                            <p class="mb-0">Build skills your way, from labs to courses</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-right">
                                    <div class="skils-icon-item">
                                        <div class="skils-icon">
                                            <img class="img-fluid" src="assets/img/icon-three/career-03.svg" alt="Stay Motivated">
                                        </div>
                                        <div class="skils-content">
                                            <p class="mb-0">Stay motivated with engaging instructors</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6" data-aos="fade-left">
                                    <div class="skils-icon-item">
                                        <div class="skils-icon">
                                            <img class="img-fluid" src="assets/img/icon-three/career-04.svg" alt="latest cloud">
                                        </div>
                                        <div class="skils-content">
                                            <p class="mb-0">Keep up with the latest in cloud</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-three-courses">
            <div class="container">
                <div class="favourite-course-sec">
                    <div class="row">
                        <div class="home-three-head section-header-title" data-aos="fade-up">
                            <div class="row align-items-center d-flex justify-content-between">
                                <div class="col-lg-6 col-sm-8">
                                    <h2>Cours</h2>
                                </div>
                                <div class="col-lg-6 col-sm-4">
                                    <div class="see-all">
                                        <a href="#">Voir tout<span class="see-all-icon"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all-corses-main">
                            <div class="tab-content">
                                <div class="nav tablist-three" role="tablist">
                                    <a class="nav-tab active me-3" data-bs-toggle="tab" href="#alltab" role="tab">Tout</a>
                                    <a class="nav-tab me-3" data-bs-toggle="tab" href="#mostpopulartab" role="tab">Économie</a>
                                    <a class="nav-tab me-3" data-bs-toggle="tab" href="#businesstab" role="tab">Crypto</a>
                                    <a class="nav-tab me-3" data-bs-toggle="tab" href="#designtab" role="tab">Graphisme</a>
                                    <a class="nav-tab me-3" data-bs-toggle="tab" href="#designtab" role="tab">Programmation</a>
                                    <a class="nav-tab me-3" data-bs-toggle="tab" href="#programmingtab" role="tab">Electronique</a>
                                </div>
                                <div class="tab-content">

                                    <div class="tab-pane fade active show" id="alltab" role="tabpanel">
                                        <div class="all-course">
                                            <div class="row">

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-26.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user1.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>450 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-27.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user2.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Web Developer PHP Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>500 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-20.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user3.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Business Management Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-21.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user4.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build Creative
                                                                            Arts & media Course Completed</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>250 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$700 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-22.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user5.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-23.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user6.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Pyhton Development Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>Free </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-24.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user7.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">Build Websites
                                                                            with HTML5 CSS3 Javascript</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-25.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user8.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="mostpopulartab">
                                        <div class="all-course">
                                            <div class="row">

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-21.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user4.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build Creative
                                                                            Arts & media Course Completed</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>250 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$700 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-22.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user5.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-23.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user6.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Pyhton Development Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>Free </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-26.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user1.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>450 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-27.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user2.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Web Developer PHP Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>500 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-20.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user3.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Business Management Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-24.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user7.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">Build Websites
                                                                            with HTML5 CSS3 Javascript</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-25.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user8.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="businesstab">
                                        <div class="businesstab">
                                            <div class="row">

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-23.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user6.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Pyhton Development Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>Free </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-26.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user1.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>450 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-21.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user4.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build Creative
                                                                            Arts & media Course Completed</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>250 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$700 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-22.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user5.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-27.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user2.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Web Developer PHP Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>500 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-20.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user3.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Business Management Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-24.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user7.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">Build Websites
                                                                            with HTML5 CSS3 Javascript</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-25.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user8.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="designtab">
                                        <div class="designtab">
                                            <div class="row">

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-27.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user2.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Web Developer PHP Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>500 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-23.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user6.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Pyhton Development Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>Free </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-26.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user1.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>450 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-21.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user4.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build Creative
                                                                            Arts & media Course Completed</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>250 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$700 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-20.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user3.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Business Management Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-24.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user7.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">Build Websites
                                                                            with HTML5 CSS3 Javascript</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-22.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user5.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-25.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user8.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="musictab">
                                        <div class="music-label">
                                            <div class="row">

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-21.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user4.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build Creative
                                                                            Arts & media Course Completed</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>250 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$700 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-22.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user5.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-23.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user6.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Pyhton Development Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>Free </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-26.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user1.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>450 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-27.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user2.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Web Developer PHP Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>500 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-20.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user3.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Business Management Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-24.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user7.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">Build Websites
                                                                            with HTML5 CSS3 Javascript</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-25.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user8.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="programmingtab">
                                        <div class="programmingtab">
                                            <div class="row">

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-23.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user6.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Pyhton Development Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>Free </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-26.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user1.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>450 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-21.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user4.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build Creative
                                                                            Arts & media Course Completed</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>250 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$700 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-22.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user5.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML CSS</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-27.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user2.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Web Developer PHP Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>500 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-20.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user3.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Business Management Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-24.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user7.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">Build Websites
                                                                            with HTML5 CSS3 Javascript</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-25.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user8.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML CSS</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="databasetab">
                                        <div class="databasetab">
                                            <div class="row">

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-22.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user5.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML CSS</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-27.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user2.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Web Developer PHP Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>500 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-23.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user6.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Pyhton Development</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Pyhton Development Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>Free </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-26.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user1.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Personalized Learning</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML CSS</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>450 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-21.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user4.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build Creative
                                                                            Arts & media Course Completed</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>250 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$700 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-20.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user3.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">The Complete
                                                                            Business Management Course</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-24.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user7.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Business Management</p>
                                                                        <h3 class="title instructor-text">Build Websites
                                                                            with HTML5 CSS3 Javascript</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$650 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt src="assets/img/course/course-25.jpg">
                                                                </a>
                                                                <div class="heart-three">
                                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                    <div class="group-three-img">
                                                                        <a href="instructor-profile.html"><img src="assets/img/user/user8.jpg" alt class="img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Creative Arts & media</p>
                                                                        <h3 class="title instructor-text">Build
                                                                            Responsive Websites with HTML CSS</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="student-counts-info d-flex align-items-center">
                                                                    <div class="students-three-counts d-flex align-items-center">
                                                                        <img src="assets/img/icon-three/student.svg" alt>
                                                                        <p>400 Students</p>
                                                                    </div>
                                                                </div>
                                                                <div class="price-three-group d-flex align-items-center justify-content-between">
                                                                    <div class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3>$300 <span>$99.00</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>6hr 30min</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-three-transform">
            <div class="container" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="cta-content">
                            <h2>Transformer l’accès à l’éducation</h2>
                            <p>Créez un compte pour recevoir notre newsletter, nos recommandations de cours et nos promotions.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="transform-button-three">
                            <a href="register.html" class="btn btn-action">Commencer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-three-goals">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-3 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="acheive-goals-main">
                            <h2>Atteignez vos objectifs avec Nunyabox</h2>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="acheive-goals">
                            <div class="acheive-elips-one">
                                <img src="assets/img/icon-three/ellipse-1.svg" alt>
                            </div>
                            <div class="acheive-goals-content text-center course-count ms-0">
                                <h4><span class="counterUp">253,085</span></h4>
                                <p>Étudiants</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="acheive-goals">
                            <div class="acheive-elips-two">
                                <img src="assets/img/icon-three/ellipse-2.svg" alt>
                            </div>
                            <div class="acheive-goals-content text-center course-count ms-0">
                                <h4><span class="counterUp">1,205</span></h4>
                                <p>Nombre total de cours</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="acheive-goals">
                            <div class="acheive-elips-three">
                                <img src="assets/img/icon-three/ellipse-3.svg" alt>
                            </div>
                            <div class="acheive-goals-content text-center course-count ms-0">
                                <h4><span class="counterUp">56</span></h4>
                                <p>Pays des étudiants </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="accelerate-cloud-three">
            <div class="container">
                <div class="shapes-three-right">
                    <img class="accelerate-one" src="assets/img/bg/shape-1.png" alt>
                    <img class="accelerate-two" src="assets/img/bg/pattern-03.png" alt>
                </div>
                <div class="shapes-three-left">
                    <img class="accelerate-three" src="assets/img/bg/pattern-02.png" alt>
                    <img class="accelerate-four" src="assets/img/bg/shape-2.png" alt>
                    <img class="accelerate-five" src="assets/img/bg/pattern-04.png" alt>
                </div>


                <div class="learn-anything">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                            <div class="award-three-content-two">
                                <div class="award-list-info">
                                    <div class="award-win-icon">
                                        <img class="img-fluid" src="assets/img/icon-three/time.svg" alt="certified">
                                    </div>
                                    <div class="award-list-content">
                                        <h2>Apprenez n’importe quoi de n’importe où, n’importe quand</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum
                                            massa viverra congue proin. A volutpat eget ultrices velit nunc orci.
                                            Commodo quis integer a felis ac vel mauris a morbi. Scelerisque </p>
                                    </div>
                                </div>
                                <div class="award-list d-flex align-items-center">
                                    <span class="award-icon">
                                        <img src="assets/img/icon-three/check-round-2.svg" alt class="img-fluid">
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                                <div class="award-list d-flex align-items-center">
                                    <span class="award-icon">
                                        <img src="assets/img/icon-three/check-round-2.svg" alt class="img-fluid">
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                                <div class="award-list d-flex align-items-center">
                                    <span class="award-icon">
                                        <img src="assets/img/icon-three/check-round-2.svg" alt class="img-fluid">
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-right">
                            <div class="award-three-images-two">
                                <img class="img-fluid" src="assets/img/students/learn-anything.png" alt="image-banner" title="image-banner">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="development-carrer">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-right">
                            <div class="award-three-images-three">
                                <img class="img-fluid" src="assets/img/students/certification.png" alt="image-banner" title="image-banner">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                            <div class="award-three-content-one">
                                <div class="award-list-info">
                                    <div class="award-win-icon">
                                        <img class="img-fluid" src="assets/img/icon-three/winning.svg" alt="certified">
                                    </div>
                                    <div class="award-list-content">
                                        <h2>Certification for solid development of your Carrer</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum
                                            massa viverra congue proin. A volutpat eget ultrices velit nunc orci.
                                            Commodo quis integer a felis ac vel mauris a morbi. Scelerisque </p>
                                    </div>
                                </div>
                                <div class="award-list d-flex align-items-center">
                                    <span class="award-icon">
                                        <img src="assets/img/icon-three/check-round-3.svg" alt class="img-fluid">
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                                <div class="award-list d-flex align-items-center">
                                    <span class="award-icon">
                                        <img src="assets/img/icon-three/check-round-3.svg" alt class="img-fluid">
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="home-three-trending">
            <div class="container">
                <div class="row">
                    <div class="home-three-head section-header-title" data-aos="fade-up">
                        <div class="row align-items-center d-flex justify-content-between">
                            <div class="col-lg-12">
                                <h2>Most Trending Courses</h2>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel home-three-trending-course owl-theme" data-aos="fade-up">

                        <div class="trending-three-item">
                            <div class="trending-content-top trending-bg-one">
                                <div class="course-title-one">
                                    <a href="course-details.html">Personalized Learning</a>
                                </div>
                                <div class="trending-three-text">
                                    <a href="course-details.html">
                                        <h3 class="title instructor-text">Build Responsive Websites with HTML</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                        </p>
                                    </a>
                                </div>
                                <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                    <div class="trending-three-counts d-flex align-items-center">
                                        <img src="assets/img/icon-three/student-icon.svg" alt="student-icon">
                                        <p>400 Students</p>
                                    </div>
                                    <div class="price-three-time d-inline-flex align-items-center">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <span>6hr 30min</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-content-footer">
                                <div class="trending-price-group d-flex align-items-center justify-content-between">
                                    <div class="trending-group-view">
                                        <div class="trending-price-three">
                                            <h3>$300</h3>
                                            <span>$99.00</span>
                                        </div>
                                    </div>
                                    <div class="trending-footer-img">
                                        <a href="course-details.html"><img src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="trending-three-item">
                            <div class="trending-content-top trending-bg-two">
                                <div class="course-title-one">
                                    <a href="course-details.html">Pyhton Development</a>
                                </div>
                                <div class="trending-three-text">
                                    <a href="course-details.html">
                                        <h3 class="title instructor-text">The Complete PHP Framework Course 2.0</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                        </p>
                                    </a>
                                </div>
                                <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                    <div class="trending-three-counts d-flex align-items-center">
                                        <img src="assets/img/icon-three/student-icon.svg" alt>
                                        <p>900 Students</p>
                                    </div>
                                    <div class="price-three-time d-inline-flex align-items-center">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <span>9hr 30min</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-content-footer">
                                <div class="trending-price-group d-flex align-items-center justify-content-between">
                                    <div class="trending-group-view">
                                        <div class="trending-price-three">
                                            <h3>$800</h3>
                                            <span>$99.00</span>
                                        </div>
                                    </div>
                                    <div class="trending-footer-img">
                                        <a href="course-details.html"><img src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="trending-three-item">
                            <div class="trending-content-top trending-bg-three">
                                <div class="course-title-one">
                                    <a href="course-details.html">Business Management</a>
                                </div>
                                <div class="trending-three-text">
                                    <a href="course-details.html">
                                        <h3 class="title instructor-text">The Complete Business Management Course</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                        </p>
                                    </a>
                                </div>
                                <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                    <div class="trending-three-counts d-flex align-items-center">
                                        <img src="assets/img/icon-three/student-icon.svg" alt>
                                        <p>400 Students</p>
                                    </div>
                                    <div class="price-three-time d-inline-flex align-items-center">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <span>6hr 30min</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-content-footer">
                                <div class="trending-price-group d-flex align-items-center justify-content-between">
                                    <div class="trending-group-view">
                                        <div class="trending-price-three">
                                            <h3>$300</h3>
                                            <span>$99.00</span>
                                        </div>
                                    </div>
                                    <div class="trending-footer-img">
                                        <a href="course-details.html"><img src="assets/img/profiles/avatar-06.jpg" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="trending-three-item">
                            <div class="trending-content-top trending-bg-four">
                                <div class="course-title-one">
                                    <a href="course-details.html">Creative Arts & media</a>
                                </div>
                                <div class="trending-three-text">
                                    <a href="course-details.html">
                                        <h3 class="title instructor-text">Build Creative Arts & Course Completed</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                        </p>
                                    </a>
                                </div>
                                <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                    <div class="trending-three-counts d-flex align-items-center">
                                        <img src="assets/img/icon-three/student-icon.svg" alt>
                                        <p>900 Students</p>
                                    </div>
                                    <div class="price-three-time d-inline-flex align-items-center">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <span>4hr 30min</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-content-footer">
                                <div class="trending-price-group d-flex align-items-center justify-content-between">
                                    <div class="trending-group-view">
                                        <div class="trending-price-three">
                                            <h3>$200</h3>
                                            <span>$99.00</span>
                                        </div>
                                    </div>
                                    <div class="trending-footer-img">
                                        <a href="course-details.html"><img src="assets/img/profiles/avatar-07.jpg" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="trending-three-item">
                            <div class="trending-content-top trending-bg-one">
                                <div class="course-title-one">
                                    <a href="course-details.html">Personalized Learning</a>
                                </div>
                                <div class="trending-three-text">
                                    <a href="course-details.html">
                                        <h3 class="title instructor-text">Build Responsive Websites with HTML</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                        </p>
                                    </a>
                                </div>
                                <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                    <div class="trending-three-counts d-flex align-items-center">
                                        <img src="assets/img/icon-three/student-icon.svg" alt>
                                        <p>600 Students</p>
                                    </div>
                                    <div class="price-three-time d-inline-flex align-items-center">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <span>2hr 30min</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-content-footer">
                                <div class="trending-price-group d-flex align-items-center justify-content-between">
                                    <div class="trending-group-view">
                                        <div class="trending-price-three">
                                            <h3>$200</h3>
                                            <span>$99.00</span>
                                        </div>
                                    </div>
                                    <div class="trending-footer-img">
                                        <a href="course-details.html"><img src="assets/img/profiles/avatar-08.jpg" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="trending-three-item">
                            <div class="trending-content-top trending-bg-two">
                                <div class="course-title-one">
                                    <a href="course-details.html">Pyhton Development</a>
                                </div>
                                <div class="trending-three-text">
                                    <a href="course-details.html">
                                        <h3 class="title instructor-text">The Complete PHP Framework Course 2.0</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                        </p>
                                    </a>
                                </div>
                                <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                    <div class="trending-three-counts d-flex align-items-center">
                                        <img src="assets/img/icon-three/student-icon.svg" alt>
                                        <p>800 Students</p>
                                    </div>
                                    <div class="price-three-time d-inline-flex align-items-center">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <span>3hr 30min</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-content-footer">
                                <div class="trending-price-group d-flex align-items-center justify-content-between">
                                    <div class="trending-group-view">
                                        <div class="trending-price-three">
                                            <h3>$350</h3>
                                            <span>$99.00</span>
                                        </div>
                                    </div>
                                    <div class="trending-footer-img">
                                        <a href="course-details.html"><img src="assets/img/profiles/avatar-09.jpg" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="trending-three-item">
                            <div class="trending-content-top trending-bg-three">
                                <div class="course-title-one">
                                    <a href="course-details.html">Business Management</a>
                                </div>
                                <div class="trending-three-text">
                                    <a href="course-details.html">
                                        <h3 class="title instructor-text">The Complete Business Management Course</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                        </p>
                                    </a>
                                </div>
                                <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                    <div class="trending-three-counts d-flex align-items-center">
                                        <img src="assets/img/icon-three/student-icon.svg" alt>
                                        <p>700 Students</p>
                                    </div>
                                    <div class="price-three-time d-inline-flex align-items-center">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <span>4hr 30min</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-content-footer">
                                <div class="trending-price-group d-flex align-items-center justify-content-between">
                                    <div class="trending-group-view">
                                        <div class="trending-price-three">
                                            <h3>$400</h3>
                                            <span>$99.00</span>
                                        </div>
                                    </div>
                                    <div class="trending-footer-img">
                                        <a href="course-details.html"><img src="assets/img/profiles/avatar-10.jpg" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="trending-three-item">
                            <div class="trending-content-top trending-bg-four">
                                <div class="course-title-one">
                                    <a href="course-details.html">Creative Arts & media</a>
                                </div>
                                <div class="trending-three-text">
                                    <a href="course-details.html">
                                        <h3 class="title instructor-text">Build Creative Arts & Course Completed</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                        </p>
                                    </a>
                                </div>
                                <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                    <div class="trending-three-counts d-flex align-items-center">
                                        <img src="assets/img/icon-three/student-icon.svg" alt>
                                        <p>600 Students</p>
                                    </div>
                                    <div class="price-three-time d-inline-flex align-items-center">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <span>5hr 30min</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-content-footer">
                                <div class="trending-price-group d-flex align-items-center justify-content-between">
                                    <div class="trending-group-view">
                                        <div class="trending-price-three">
                                            <h3>$400</h3>
                                            <span>$99.00</span>
                                        </div>
                                    </div>
                                    <div class="trending-footer-img">
                                        <a href="course-details.html"><img src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>


        <section class="home-three-become">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8" data-aos="fade-up">
                        <div class="become-content-three">
                            <h2>Devenez formateur</h2>
                            <p>Top instructors from around the world teach millions of students on DreamsLMS.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" data-aos="fade-up">
                        <div class="become-button-three">
                            <a href="register.html" class="btn btn-become">Commencer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="testimonial-three">
            <div class="container">
                <div class="testimonial-pattern">
                    <img class="pattern-left img-fluid" alt src="assets/img/bg/pattern-05.svg">
                    <img class="pattern-right img-fluid" alt src="assets/img/bg/pattern-06.svg">
                </div>
                <div class="testimonial-three-content">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                            <div class="become-content">
                                <h2 class="aos-init aos-animate">They Trusted us</h2>
                                <h4 class="aos-init aos-animate">We are a very happy because we have a happy customer
                                </h4>
                            </div>

                            <a href="instructor-profile.html" class="btn btn-action aos-init aos-animate" data-aos="fade-up">View all Testimonail</a>

                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                            <div class="swiper-testimonial-three">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="testimonial-item-five">
                                            <div class="testimonial-quote">
                                                <img class="quote img-fluid" alt src="assets/img/bg/quote.svg">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas
                                                    pretium feugiat tellus eget vitae sagittis id in. In in tempor ac
                                                    dignissim at. Scelerisque sociis consequat sit dolor. Vitae donec
                                                    porttitor risus tellus eget vitae sagittis id in. In in tempor ac
                                                    dignissim at. Scelerisque sociis consequat </p>
                                            </div>
                                            <div class="testimonial-ratings">
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <p class="d-inline-block">4.5<span>ratings</span></p>
                                                </div>
                                            </div>
                                            <div class="testimonial-users">
                                                <div class="imgbx">
                                                    <img class="img-fluid" alt src="assets/img/profiles/avatar-02.jpg">
                                                </div>
                                                <div class="d-block">
                                                    <h6>Jeff J. Sparrow</h6>
                                                    <p>Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-item-five">
                                            <div class="testimonial-quote">
                                                <img class="quote img-fluid" alt src="assets/img/bg/quote.svg">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas
                                                    pretium feugiat tellus eget vitae sagittis id in. In in tempor ac
                                                    dignissim at. Scelerisque sociis consequat sit dolor. Vitae donec
                                                    porttitor risus tellus eget vitae sagittis id in. In in tempor ac
                                                    dignissim at. Scelerisque sociis consequat </p>
                                            </div>
                                            <div class="testimonial-ratings">
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <p class="d-inline-block">4.5<span>ratings</span></p>
                                                </div>
                                            </div>
                                            <div class="testimonial-users">
                                                <div class="imgbx">
                                                    <img class alt src="assets/img/profiles/avatar-01.jpg">
                                                </div>
                                                <div class="d-block">
                                                    <h6>Martin Harn</h6>
                                                    <p>Docker Development</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-item-five">
                                            <div class="testimonial-quote">
                                                <img class="quote img-fluid" alt src="assets/img/bg/quote.svg">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas
                                                    pretium feugiat tellus eget vitae sagittis id in. In in tempor ac
                                                    dignissim at. Scelerisque sociis consequat sit dolor. Vitae donec
                                                    porttitor risus tellus eget vitae sagittis id in. In in tempor ac
                                                    dignissim at. Scelerisque sociis consequat </p>
                                            </div>
                                            <div class="testimonial-ratings">
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <p class="d-inline-block">4.8<span>ratings</span></p>
                                                </div>
                                            </div>
                                            <div class="testimonial-users">
                                                <div class="imgbx">
                                                    <img class alt src="assets/img/profiles/avatar-05.jpg">
                                                </div>
                                                <div class="d-block">
                                                    <h6>Noah Aarons</h6>
                                                    <p>Business Man</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="testimonial-bottom-nav">
                                    <div class="slide-next-btn testimonial-next-pre"><i class="fas fa-arrow-left"></i>
                                    </div>
                                    <div class="slide-prev-btn testimonial-next-pre"><i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="footer footer-three">

            <div class="footer-three-top" data-aos="fade-up">
                <div class="container">
                    <div class="footer-three-top-content">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-12">

                                <div class="footer-widget-three footer-about">
                                    <div class="footer-three-logo">
                                        <img class="img-fluid" src="{{ asset('../assets/img/logo/Logo-Nunyabox.jpg') }}" alt="logo">
                                    </div>
                                    <div class="footer-three-about">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit nulla gravida ut
                                            elit arcu egestas felis. Scelerisque at in magna dolor massa ipsum arcu
                                            lacus. Lobortis posuere justo nunc diam ac massa. Maecenas tellus adipiscing
                                            ac fames ut ac posuere. Aliquam, integer proin hendrerit euismod et. </p>
                                    </div>
                                    <div class="newsletter-title">
                                        <h6>Get Updates</h6>
                                    </div>
                                    <div class="box-form-newsletter">
                                        <form class="form-newsletter">
                                            <input class="input-newsletter" type="text" placeholder="Enter your email here">
                                            <button class="btn btn-default font-heading icon-send-letter">Subscribe
                                                Now</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-3 col-12">

                                <div class="footer-widget-three footer-menu-three footer-three-right">
                                    <h6 class="footer-three-title"></h6>
                                    <ul>
                                        <li></a></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-3 col-12">

                                <div class="footer-widget-three footer-menu-three">
                                    <h6 class="footer-three-title">Lien rapide</h6>
                                    <ul>
                                        <li><a href="login.html">Connexion</a></li>
                                        <li><a href="register.html">Inscription</a></li>
                                        <li><a href="students-list.html">Student</a></li>
                                        <li><a href="deposit-student-dashboard.html"> Tableau de bord</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-three-bottom" data-aos="fade-up">
                <div class="container">

                    <div class="copyright-three">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-icon-three">
                                    <h6>Réseaux sociaux</h6>
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" class="feather-facebook-icon">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="feather-twitter-icon">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="feather-linkedin-icon">
                                                <i class="feather-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="privacy-policy-three">
                                    <ul>
                                        <li><a href="term-condition.html">Terms & Condition</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="support.html">Contactez-nous</a></li>
                                    </ul>
                                </div>
                                <div class="copyright-text-three">
                                    <p class="mb-0">&copy; 2023 Nunyabox. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>

    </div>


    <script src="{{ asset('../assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('../assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('../assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('../assets/plugins/aos/aos.js') }}"></script>

    <script src="{{ asset('../assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('../assets/js/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('../assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('../assets/plugins/slick/slick.js') }}"></script>

    <script src="{{ asset('../assets/plugins/swiper/js/swiper.min.js') }}"></script>

    <script src="{{ asset('../assets/js/script.js') }}"></script>
</body>

</html>