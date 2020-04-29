<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This is a practice website to test my knowdledge and skills of what I have learned so far.">
        
       
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
         <!-- Normalize.css makes browsers render all elements more consistently and in line with modern standards. It precisely targets only the styles that need normalizing. https://necolas.github.io/normalize.css/ -->
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css"> <!-- ICONS -->
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css"> <!-- https://daneden.github.io/animate.css/ -->
        
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet"> <!-- FONTS -->
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
       
        
        <title>David's Website</title>
    
    </head>
    
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/logo.png" alt="Website Logo" class="logo">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#works">How it works</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="row hero-text-box">
                <div class="hero-text-box-text">
                <h1>Lawn mowing and more from <br> reliable pros in Irving, TX.<br>Order online in minutes.</h1></div>
                <a class="btn btn-plans js--scroll-to-plans" href="#">Plans</a>
                <a class="btn btn-sign-up js--scroll-to-start" href="#">Show me more</a>
            </div>
        </header>
        
        <section class="section-features js--section-features" id="works">
            <div class="row">
                <h2>Why choose us?</h2>
                <p class="long-copy">
                    As America’s #1 lawn care company, we know that you’ll be satisfied with your new lawn, but we also offer guarantees that ensure your yard meets or exceeds expectations.
                </p>
            </div>
            
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-stopwatch-outline icon-big"></i>
                    <h3>5 Minute Setup</h3>
                    <p>View pricing, choose your options, and schedule service in 5 minutes or less.</p>  
                </div>
                 <div class="col span-1-of-4 box">
                    <i class="ion-ios-star-outline icon-big"></i>
                    <h3>Quality Guaranteed</h3>
                    <p>If you are not happy, we won't charge you. It's as simple as that.</p>  
                </div>
                 <div class="col span-1-of-4 box">
                    <i class="ion-ios-monitor-outline icon-big"></i>
                    <h3>Online Management</h3>
                    <p>Payment, scheduling, feedback... all done through a convenient app.</p>  
                </div>
                 <div class="col span-1-of-4 box">
                    <i class="ion-ios-flower-outline icon-big"></i>
                    <h3>All Services Covered</h3>
                    <p>Lawn mowing, fertilization, bush trimming. We can do it all.</p>  
                </div>    
            </div>
        </section>
        
        <section class="section-lawns">
            <ul class="lawn-showcase">
                <li>
                    <figure class="lawn-photo clearfix">
                        <img src="resources/img/family-house.jpg" alt="House with nice lawn">
                    </figure>
                </li>
                <li>
                    <figure class="lawn-photo">
                        <img src="resources/img/gardener.jpg" alt="Gardener Working">
                    </figure>
                </li>
                <li>
                    <figure class="lawn-photo">
                        <img src="resources/img/house.jpg" alt="House with nice lawn">
                    </figure>
                </li>
                <li>
                    <figure class="lawn-photo">
                        <img src="resources/img/architecture.jpg" alt="House with nice lawn">
                    </figure>
                </li>
            </ul>
              <ul class="lawn-showcase clearfix">
                <li>
                    <figure class="lawn-photo">
                        <img src="resources/img/lawn-care.jpg" alt="House with nice lawn">
                    </figure>
                </li>
                <li>
                    <figure class="lawn-photo">
                        <img src="resources/img/tree.jpg" alt="House with nice lawn">
                    </figure>
                </li>
                <li>
                    <figure class="lawn-photo">
                        <img src="resources/img/racecourse.jpg" alt="Track with nice lawn">
                    </figure>
                </li>
                <li>
                    <figure class="lawn-photo">
                        <img src="resources/img/luxury-home.jpg" alt="House with nice lawn">
                    </figure>
                </li>
            </ul>
        </section>
    
        <section class="section-steps">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box js--wp-2">
                    <img src="resources/img/app-iPhone-new.png" alt="LawnLove app" class="app-screen">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step clearfix">
                        <div>1</div>
                        <p>Easy and simple online lawn care booking service. Just simply enter your address, choose your service.</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>2</div>
                        <p>You get to choose the exact date you want our lawn service providers to work on your lawn.</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>3</div>
                        <p>Let our expert lawn service providers take care of your lawn care needs. We have a rigorous vetting process to ensure quality services.</p>
                    </div>
                    
                    <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                        
                    <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="App Store Button"></a>
                
                </div>
            </div>
        </section>
        
        <section class="section-testimonials">
            <div class="row">
                <h2>What our customers are saying</h2>
            </div>
            
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                        Ronald Byrd was my technician today.He was very knowable, caring and patient.He answered all my questions and thoroughly educated me on options to further enhance my yard. I have had other yard professionals however none spent time with me like Ronald.
                        <cite><img src="resources/img/customer-1.jpg" alt="Customer 1 photo">Alberto Duncan</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        Tyler H. has been out lawn care expert for a long time and he does an awesome job. My yard had trees removed last year and now my lawn is filling in and looks great!  
                        <cite><img src="resources/img/customer-2.jpg" alt="Customer 2 photo">Joana Silva</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        You employees are very polite, knowledgeable and able to answer any questions. Today we have our aeration service and R Parra did an excellent job.    
                        <cite><img src="resources/img/customer-3.jpg" alt="Customer 3 photo">Milton Chapman</cite>
                    </blockquote>
                </div>
            </div>
        </section>
    
        <section class="section-plans js--section-plans" id="services">
            <div class="row">
                <h2>Services</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box js--wp-3">
                        <div>
                            <h3>Premium</h3>
                            <p class="plan-price">$400 <span> / year</span></p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>One year</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>8 Lawn visits</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Fertilization</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Grub Prevention and Control</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Pre-Emergent and Targeted Weed Control</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Healthy Lawn Analysis</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Expert Certified Specialists</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Aeration</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Overseeding</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Tree and Shrub Services</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-full">Sign up now</a>      
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">$300 <span> / year</span></p>
                        </div>
                        <div>
                            <ul>
                                 <li><i class="ion-ios-checkmark-empty icon-small"></i>One year</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>8 Lawn visits</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Fertilization</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Grub Prevention and Control</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Pre-Emergent and Targeted Weed Control</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Healthy Lawn Analysis</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Expert Certified Specialists</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Aeration</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Overseeding</li>
                                <li><i class="ion-ios-close-empty icon-small"></i>Tree and Shrub Services</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>      
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">$200 <span> / year</span></p>
                        </div>
                        <div>
                            <ul>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>One year</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>8 Lawn visits</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Fertilization</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Grub Prevention and Control</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Pre-Emergent and Targeted Weed Control</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Healthy Lawn Analysis</li>
                                <li><i class="ion-ios-checkmark-empty icon-small"></i>Expert Certified Specialists</li>
                                <li><i class="ion-ios-close-empty icon-small"></i>Aeration</li>
                                <li><i class="ion-ios-close-empty icon-small"></i>Overseeding</li>
                                <li><i class="ion-ios-close-empty icon-small"></i>Tree and Shrub Services</li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>      
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        
        <section class="section-form" id="form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="row">
                <form method="post" action="mailer.php" class="contact-form">
                    
                    <div class="row"> 
                        
                        <?php
                        
                        
                        if($_GET['success'] == 1){
                            echo "<div class=\"form-messages success\"> Thank you! Your message has been sent.
                            </div>";
                            } 
                            
                         if($_GET['success'] == -1){
                            echo "<div class=\"form-messages error\">Oops! Something wwent wrong. Please try again.
                            </div>";
                            }
                        ?>
                        
                        
                    </div>
                    <div class="row">              
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="tel">Telephone</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="tel" name="tel" id="tel" placeholder="&#x2055;&#x2055;&#x2055;&#8211;&#x2055;&#x2055;&#x2055;&#8211;&#x2055;&#x2055;&#x2055;&#x2055;" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Message</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message..."></textarea>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <footer>
            <div class="row" id="contact">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        
                    </ul>
                </div>
            </div>
            
            <div class="row">
                <p>
                    Copyright &copy; 2020 by LawnUSA. All rights reserved.
                </p>
            </div>
        </footer>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- Included JQuery From Google Hosted Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script> <!-- Helps website look great in older web browsers Enable new functionalities in older browsers, enables the browser to understand css media queries -->
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script> <!-- Helps website look great in older web browsers, enables us to use and style html5 elements in older browsers -->
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script> <!--Helps website look great in older web browsers, allows us to use CSS3 psuedo classes on internet explorer 6, 7, 8 -->
    <script src="vendors/JS/jquery.waypoints.min.js"></script> <!-- JQuery Plugin Waypints - Easy way to triger a function when you scroll to an element -->
    <script src="resources/JS/script.js"></script>  <!-- JS file where I included the JQuery code -->
        
    </body>
    
</html>






















