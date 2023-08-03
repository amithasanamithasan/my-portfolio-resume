<!DOCTYPE html>
<html lang="en"> 
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Personal Portfolio</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- STYLES -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- <link href="{{asset('fornted/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all"> -->
<link rel="stylesheet" type="text/css" href="{{asset('fornted/css/plugins.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('fornted/css/style.css')}}" />


</head>

<body>


<div class="arlo_tm_wrapper_all">

    <div id="arlo_tm_popup_blog">
        <div class="container">
            <div class="inner_popup scrollable"></div>
        </div>
        <span class="close"><a href="#"></a></span>
    </div>
    

    <div class="arlo_tm_preloader">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
 
    
   
    <div class="arlo_tm_mobile_header_wrap">
        <div class="main_wrap">
            <div class="logo">
                <a href="index.html"><img src="{{URL::to('fornted/img/logo/mobile_logo.png')}}" alt="mobile_logo" /></a>
            </div>
            <div class="arlo_tm_trigger">
                <div class="hamburger hamburger--collapse-r">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arlo_tm_mobile_menu_wrap">
            <div class="mob_menu">
                <ul class="anchor_nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
   
    <div class="arlo_tm_content">
        
     
        <div class="arlo_tm_leftpart_wrap">
            <div class="leftpart_inner">
                <div class="logo_wrap">
                    <a href="#"><img src="{{URL::to('fornted/img/logo/desktop-logo.png')}}" alt="desktop-logo" /></a>
                </div>
                <div class="menu_list_wrap">
                    <ul class="anchor_nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact Me</a></li>
                    </ul>
                </div>
                <div class="leftpart_bottom">
                    <div class="social_wrap">
                        <ul>
                            <li><a href="#"><i class="xcon-facebook"style="font-size:25px;color:red"></i></a></li>
                            <li><a href="https://github.com/amithasanamithasan/Marriage_media"><i class="fa fa-github" style="font-size:25px;color:red"></i></a></li>
                            <li><a href="#"><i class="xcon-linkedin "style="font-size:25px;color:red"></i></a></li>
                            <li><a href="#"><i class="xcon-instagram"style="font-size:25px;color:red"></i></a></li>
                            <li><a href="#"><i class="xcon-behance"style="font-size:25px;color:red"></i></a></li>
                        </ul>
                    </div>
                </div>
                <a class="arlo_tm_resize" href="#"><i class="xcon-angle-left"></i></a>
            </div>
        </div>
       
        <div class="arlo_tm_rightpart">
            <div class="rightpart_inner">
                <div class="arlo_tm_section" id="home">
                    <div class="arlo_tm_hero_header_wrap">
                        <div class="arlo_tm_universal_box_wrap">
                            <div class="bg_wrap">
                                <div class="overlay_image hero jarallax" data-speed="0.1"></div>
                                <div class="overlay_color hero"></div>
                            </div>
                            <div class="content hero">
                                <div class="inner_content">
                                    <div class="image_wrap">
                                        <img src="{{URL::to('fornted/img/hero/img.jpg')}}" alt="hero" />
                                    </div>
                                    <div class="name_holder">
                                        <h3>AMIT <span>HASAN FAYSAL</span></h3>
                                    </div>
                                    <div class="text_typing">
                                        <p>I'm a <span class="arlo_tm_animation_text_word"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="arlo_tm_arrow_wrap bounce anchor">
                                <a href="#about"><i class="xcon-angle-double-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            
                <div class="arlo_tm_section relative" id="about">
                    <div class="arlo_tm_about_wrapper_all">
                        <div class="container">
                            <div class="arlo_tm_title_holder">
                                <h3 class= "text-success">About Me</h3>
                                <span class= "text-success">Main Informations About Me</span>
                            </div>
                            <div class="arlo_tm_about_wrap">
                                <div class="author_wrap">
                                    <div class="leftbox">
                                        <div class="about_image_wrap parallax" data-relative-input="true">
                                            <div class="image layer" data-depth="0.1">
                                                <img src="{{URL::to('fornted/img/about/550x640.jpg')}}" alt="550x640" />
                                                <div class="inner" data-img-url="{{URL::to('fornted/img/about/1.jpg')}}"></div>
                                            </div>
                                            <div class="border layer" data-depth="0.2">
                                                <img src="{{URL::to('fornted/img/about/550x640.jpg')}}" alt="550x640" />
                                                <div class="inner"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="rightbox">
                                        <div class="arlo_tm_mini_title_holder">
                                            <h4 class= "text-primary">I'm Amit Hasan Faysal <span class="arlo_tm_animation_text_word"></span></h4>
                                        </div>
                                        <div class= "text-primary">
                                            <p >Hi! My name is <strong>Amit Hasan Faysal</strong>. I am a Web Developer, and I'm very passionate and dedicated to my work. With 2 years experience as a professional Web developer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration to concept and execution, but I find the most satisfaction in seeing the finished product do everything for you that it was created to do.</p>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <span class= "text-danger"><label class= "text-success">Birthday:</label> 06.10.1995</span>
                                                </li>
                                                <li>
                                                    <span class= "text-danger"><label class= "text-success">Age:</label> 25</span>
                                                </li>
                                                <li>
                                                    <span class= "text-danger"><label class= "text-success">City:</label>Dhaka,BANGLADESH </span>
                                                </li>
                                                <li>
                                                    <span class= "text-danger"><label class= "text-success">Interests:</label>PROBLEM SOLVING,MULTI-TASKING,COMMUNICATION,TEAMWORK  </span>
                                                </li>
                                                <li>
                                                    <span class= "text-danger"><label class= "text-success">Study:</label>Daffodil International University(DIU)</span>
                                                </li>
                                                <li>
                                                    <span class= "text-danger"><label class= "text-success">Degree:</label>B.S.C Software Engineering</span>
                                                </li>   
                                                <li>
                                                    <span class= "text-danger"><label class= "text-success">Website:</label> <a href="#">www.Myprotfolio.com</a></span>
                                                </li>
                                                <li>
                                                    <span class= "text-danger"><label class= "text-success">Mail:</label> <a href="mailto:amit35-1773@diu.edu.bd">amit35-1773@diu.edu.bd</a></span>
                                                </li>
                                                <li>
                                                    <span class= "text-danger" ><label class= "text-success">Phone:</label> <a href="#">+880-1797522144</a></span>
                                                </li>
                                                <li>
                                                    <span class= "text-danger"><label class= "text-success">Facebookid:</label> <a href="#">&#64;amithasan255@gmail.com</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buttons_wrap">
                                            <ul>
                                                <li>
                                                    <a href="index.html"><span>Download CV</span></a>
                                                </li>
                                                <li class="anchor">
                                                    <a href="#contact"><span>Send Message</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="arlo_tm_section">
                    <div class="arlo_tm_skills_wrap">
                        <div class="container">
                            <div class="inner_wrap">
                                <div class="leftbox">
                                    <div class="arlo_tm_mini_title_holder">
                                        <h4>Some About my Abilities</h4>
                                    </div>
                                    <p class="text-dark"> I have a lot of abilities, To become a web developer, I'll need a variety of hard and soft skills to succeed. Here are some of the most common skills to have in this role:
                                     HTML/CSS skills,
                                     Analytical skills,
                                     Responsive design skills,
                                     JavaScript skills,
                                     Interpersonal skills,
                                     Testing and debugging skills,
                                     Back-end basics,
                                    Search engine optimization,
                                TECHNICAL STRENGTHS LANGUAGES:C++, PYTHON, JAVASCRIPT, SQL, PHP 
                                FRAMEWORK:  LARAVEL, VUE.JS 
                                FRONTEND:HTML5, CSS3, BOOTSTRAP, CSS 
                                OTHERS AND DATABASE:GIT, LINUX, MYSQL, MONGODB                                 </p>
                                </div>
                                <div class="rightbox">
                                    <div class="progress_bar_wrap_total">
                                        <div class="arlo_tm_progress_wrap" data-size="small" data-round="c" data-strip="off">
                                            <div class="arlo_tm_progress" data-value="70" data-color="#FF0084">
                                                <span><span class="label">Wordpress - <span class="experience">1 years of experience</span></span><span class="number">70%</span></span>
                                                <div class="arlo_tm_bar_bg"><div class="arlo_tm_bar_wrap"><div class="arlo_tm_bar"></div></div></div>
                                            </div>
                                            <div class="arlo_tm_progress" data-value="65" data-color="#140b68">
                                                <span><span class="label">CSS - <span class="experience">2 years of experience</span></span><span class="number">65%</span></span>
                                                <div class="arlo_tm_bar_bg"><div class="arlo_tm_bar_wrap"><div class="arlo_tm_bar"></div></div></div>
                                            </div>
                                            <div class="arlo_tm_progress" data-value="75" data-color="#FF6600">
                                                <span><span class="label">HTML - <span class="experience">2 years of experience</span></span><span class="number">75%</span></span>
                                                <div class="arlo_tm_bar_bg"><div class="arlo_tm_bar_wrap"><div class="arlo_tm_bar"></div></div></div>
                                            </div>
                                             <div class="arlo_tm_progress" data-value="85" data-color="#0000ff">
                                                <span><span class="label">BOOTSTRAP - <span class="experience">2 years of experience</span></span><span class="number">85%</span></span>
                                                <div class="arlo_tm_bar_bg"><div class="arlo_tm_bar_wrap"><div class="arlo_tm_bar"></div></div></div>
                                            </div>
                                            <div class="arlo_tm_progress" data-value="50" data-color="#00FFAE">
                                                <span><span class="label">Java Script - <span class="experience">1 years of experience</span></span><span class="number">50%</span></span>
                                                <div class="arlo_tm_bar_bg"><div class="arlo_tm_bar_wrap"><div class="arlo_tm_bar"></div></div></div>
                                            <div class="arlo_tm_progress" data-value="65" data-color="#FFE100">
                                                <span><span class="label">BackEnd - <span class="experience">3 years of experience</span></span><span class="number">65%</span></span>
                                                <div class="arlo_tm_bar_bg"><div class="arlo_tm_bar_wrap"><div class="arlo_tm_bar"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="arlo_tm_section" id="services">
                    <div class="arlo_tm_services_wrap">
                        <div class="container">
                            <div class="arlo_tm_title_holder portfolio" >
                                <h3 class="text-success">Amazing Services</h3>
                                <span class="text-success">Meet My Amazing Services</span>
                            </div>
                            <div class="list_wrap">
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img class="svg" src="img/svg/camera-diaphragm.svg" alt="camera-diaphragm" />
                                            </div>
                                            <div >
                                                <h3 class="text-warning">Photography</h3>
                                            </div>
                                            <div class="text">
                                                <p class="text-primary">Web design is a similar process of creation, with the intention of presenting the content on electronic pages ...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img class="svg" src="img/svg/new-tab.svg" alt="new-tab" />
                                            </div>
                                            <div >
                                                <h3 class="text-warning">Web Design</h3>
                                            </div>
                                            <div class="text">
                                                <p class="text-primary">Web design is a similar process of creation, with the intention of presenting the content on electronic pages ...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img class="svg" src="img/svg/layers.svg" alt="layers" />
                                            </div>
                                            <div >
                                                <h3 class="text-warning">Branding</h3>
                                            </div>
                                            <div class="text">
                                                <p class="text-primary">Web design is a similar process of creation, with the intention of presenting the content on electronic pages ...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img class="svg" src="img/svg/share.svg" alt="share" />
                                            </div>
                                            <div >
                                                <h3 class="text-warning">Social Media</h3>
                                            </div>
                                            <div class="text">
                                                <p class="text-primary">Web design is a similar process of creation, with the intention of presenting the content on electronic pages ...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img class="svg" src="img/svg/adobe-illustrator.svg" alt="adobe-illustrator" />
                                            </div>
                                            <div >
                                                <h3 class="text-warning">Illustrator</h3>
                                            </div>
                                            <div class="text">
                                                <p class="text-primary">Web design is a similar process of creation, with the intention of presenting the content on electronic pages ...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <img class="svg" src="img/svg/seo-performance-marketing-graphic.svg" alt="seo-performance-marketing-graphic" />
                                            </div>
                                            <div >
                                                <h3 class="text-warning">Marketing</h3>
                                            </div>
                                            <div class="text">
                                                <p class="text-primary">Web design is a similar process of creation, with the intention of presenting the content on electronic pages ...</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="arlo_tm_section relative" id="portfolio">
                    <div class="arlo_tm_portfolio_wrapper_all">

                       
                        <div class="arlo_tm_second_portfolio">
                        <div class="container">
                            <div class="arlo_tm_portfolio_wrap">
                                <div class="arlo_tm_title_holder portfolio">
                                    <h3 class="text-success">Creative Works</h3>
                                    <span class="text-success">Check Out Me Latest Creative Works</span>
                                </div>
                                <div class="arlo_tm_portfolio_titles"></div>
                                <ul>
                                    <li><a href="#" class="current" data-filter="*">All</a></li>
                                    <li><a href="#" data-filter=".design" class="text-warning">Design</a></li>
                                    <li ><a href="#" data-filter=".photography" class="text-warning">Photography</a></li>
                                    <li><a href="#" data-filter=".development" class="text-warning">Development</a></li>
                                </ul>
                                <ul class="arlo_tm_portfolio_list gallery_zoom">
                                    <li class="design">
                                        <div class="entry arlo_tm_portfolio_animation_wrap" data-title="Aoc Productions" data-category="Design">
                                            <a href="portfolio-single.html">
                                                <img src="{{URL::to('fornted/img/portfolio/600x600.jpg')}}" alt="600x600" />
                                                <div class="arlo_tm_portfolio_image_main" data-img-url="{{URL::to('fornted/img/portfolio/1.jpg')}}"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="photography">
                                        <div class="entry arlo_tm_portfolio_animation_wrap" data-title="Ind Hed" data-category="Photography">
                                            <a href="portfolio-single-2.html">
                                                <img src="{{URL::to('fornted/img/portfolio/600x600.jpg')}}" alt="600x600" />
                                                <div class="arlo_tm_portfolio_image_main" data-img-url="{{URL::to('fornted/img/portfolio/2.jpg')}}"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="development">
                                        <div class="entry arlo_tm_portfolio_animation_wrap" data-title="Paper Mockup" data-category="Development">
                                            <a href="portfolio-single-3.html">
                                                <img src="{{URL::to('fronted/img/portfolio/600x600.jpg')}}" alt="600x600" />
                                                <div class="arlo_tm_portfolio_image_main" data-img-url="{{URL::to('fornted/img/portfolio/3.jpg')}}"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="photography">
                                        <div class="entry arlo_tm_portfolio_animation_wrap" data-title="The Nordic" data-category="Photography">
                                            <a href="portfolio-single-4.html">
                                                <img src="{{URL::to('fornted/img/portfolio/600x600.jpg')}}" alt="600x600" />
                                                <div class="arlo_tm_portfolio_image_main" data-img-url="{{URL::to('fornted/img/portfolio/4.jpg')}}"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="design">
                                        <div class="entry arlo_tm_portfolio_animation_wrap" data-title="Creatives Castle" data-category="Design">
                                            <a href="portfolio-single-5.html">
                                                <img src="{{URL::to('fornted/img/portfolio/600x600.jpg')}}" alt="600x600" />
                                                <div class="arlo_tm_portfolio_image_main" data-img-url="img/portfolio/5.jpg"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="photography">
                                        <div class="entry arlo_tm_portfolio_animation_wrap" data-title="White Bag" data-category="Photography">
                                            <a href="portfolio-single-6.html">
                                                <img src="{{URL::to('fornted/img/portfolio/600x600.jpg')}}" alt="" />
                                                <div class="arlo_tm_portfolio_image_main" data-img-url="{{URL::to('fornted/img/portfolio/6.jpg')}}"></div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
              
                <div class="arlo_tm_section" id="testimonials">
                    <div class="arlo_tm_testimonials_wrapper_all">
                        <div class="arlo_tm_universal_box_wrap">
                            <div class="bg_wrap">
                                <div class="overlay_image testimonial jarallax" data-speed="0"></div>
                                <div class="overlay_color testimonial"></div>
                            </div>
                            <div class="content testimonial">
                                <div class="arlo_tm_testimonial_wrap">
                                    <div class="container">
                                        <div class="carousel_wrap">
                                            <ul class="owl-carousel">
                                                <li class="item">
                                                    <div class="inner">
                                                        <div class="quotebox_wrap">
                                                            <i class="xcon-quote-left"></i>
                                                        </div>
                                                        <div class="definitions_wrap">
                                                            <p>“Creating an impressive portfolio is not easy. One of the toughest tasks of a new developer is to make a personal web developer portfolio that helps get a potential employer’s attention in the overcrowded job marketplace. Undoubtedly, an awesome online portfolio not only showcases your design works but also highlights your accomplishments and expertise, leaving a strong impression on your visitors. Since it’s not just a collection of work samples, there are some factors worth considering when creating a web developer portfolio website.”</p>
                                                        </div>
                                                        <div class="name_holder">
                                                            <p>PORTFOLIO</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="inner">
                                                        <div class="quotebox_wrap">
                                                            <i class="xcon-quote-left"></i>
                                                        </div>
                                                        <div class="definitions_wrap">
                                                            <p>“We were looking for a logo with a touch of modernism. Arlo grasped our needs and produced a stunning design.”</p>
                                                        </div>
                                                        <div class="name_holder">
                                                            <p>Calena Gomez, AOC Designer</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="inner">
                                                        <div class="quotebox_wrap">
                                                            <i class="xcon-quote-left"></i>
                                                        </div>
                                                        <div class="definitions_wrap">
                                                            <p>“Awesome to work with Arlo. Good organized, easy to communicate with, responsive with next iterations.”</p>
                                                        </div>
                                                        <div class="name_holder">
                                                            <p>Torren Winston, Photographer.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="arlo_tm_section">
                    <div class="container">
                        <div class="arlo_tm_counter_wrap" data-col="4" data-delay="300">
                            <ul class="arlo_tm_counter_list arlo_tm_miniboxes">
                                <li>
                                    <div class="inner arlo_tm_minibox">
                                        <h3><span><span class="arlo_tm_counter" data-from="0" data-to="22" data-speed="2000">0</span></span></h3>
                                        <span >Projects Completed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner arlo_tm_minibox">
                                        <h3><span><span class="arlo_tm_counter" data-from="0" data-to="33" data-speed="3000">0</span>K</span></h3>
                                        <span>Lines of Code</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner arlo_tm_minibox">
                                        <h3><span><span class="arlo_tm_counter" data-from="0" data-to="0000" data-speed="3000">0</span></span></h3>
                                        <span>Happy Clients</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner arlo_tm_minibox">
                                        <h3><span><span class="arlo_tm_counter" data-from="0" data-to="2.00" data-speed="3000">0</span>+</span></h3>
                                        <span>My Awwwards</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              
                <div class="arlo_tm_section" id="contact">
                    <div class="container">
                        <div class="arlo_tm_title_holder contact">
                            <h3 class="text-info">Contact Me</h3>
                            <span class="text-info">Get In Touch With Me</span>
                        </div>
                    </div>
                    <div class="arlo_tm_footer_contact_wrapper_all">
                        <div class="arlo_tm_contact_wrap_all">
                            <div class="container">
                                <div class="leftbox">
                                    <div class="arlo_tm_mini_title_holder contact">
                                        <h4 class="text-warning">Get In Touch</h4>
                                    </div>
                                    <div >
                                        <ul>
                                            <li><p><label class= "text-success">Address:</label><span class="text-danger">BANGLADESH,Dhaka,shaver,boilapur</span></p></li>
                                            <li><p><label class= "text-success">Email:</label><span><a href="mailto:example@gmail.com">amit35-1773@diu.edu.bd</a></span></p></li>
                                            <li><p><label class= "text-success">Phone:</label><span class="text-danger">+01797522144</span></p></li>
                                            <li><p><label class= "text-success">Website:</label><span><a href="mailto:example@gmail.com">www.Myprotfolio.com</a></span></p></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rightbox">
                                    <div class="arlo_tm_contact_wrap">
                                        <div class="main_input_wrap">
                                            <form action="{{route('store.post')}}" method="post"class="contact_form" id="contact_form" >
                                                @csrf
                                                <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                                <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                                <div class="wrap">
                                                    <input id="name" type="text" name="name" placeholder="Your Name">
                                                </div>
                                                <div class="wrap">
                                                    <input  id="email" type="text" name="email" placeholder="Your Email">
                                                </div>
                                                <div >
                                                    <textarea  id="message" name="message"placeholder="Your Message"></textarea>
                                                </div>
                                                <div class="arlo_tm_button">
                                                    <!-- <a id="send_message" href="#"><span>Send Message</span></a>  -->
                                                  <button type="button" class="btn btn-success">SendMessage</a></button> 
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="arlo_tm_footer_wrap">
                            <div class="container">
                                
                            </div>
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
       
        
        <a class="arlo_tm_totop" href="#"></a> 
        
    </div>
</div>

<script src="{{asset('fornted/js/jquery.js')}}"></script>
   
<script src="{{asset('fornted/js/plugins.js')}}"></script>
<script src="{{asset('fornted/js/init.js')}}"></script>


</body>


</html>