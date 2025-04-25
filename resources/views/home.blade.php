<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leon Template One</title>
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- Normalize CSS File -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- Font Link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Font Icons Link -->
</head>

<body>
    <!-- Start Header -->
    <div class="header">
        <div class="container">
            <a href="{{ url('/') }}">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ url('/topics') }}">Topics</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Start Landing Section -->
    <div class="landing">
        <!-- <div class="intro-text">
            <h1>Hello There</h1>
            <p>Join Us</p>
        </div> -->
    </div>
    <!-- End Landing Section -->

    <!-- Start Features -->
    <div class="features">
        <div class="container">
            <div class="feat">
                <i class="fa-solid fa-lightbulb"></i>
                <h3>Tell Us Your Idea</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laborum corrupti nihil maxime,
                    nesciunt esse, aliquid exercitationem vero velit officiis ab in explicabo. Placeat officiis
                    perferendis officia culpa aliquam obcaecati.</p>
            </div>
            <div class="feat">
                <i class="fa-solid fa-briefcase"></i>
                <h3>We Will Do All The Work</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laborum corrupti nihil maxime,
                    nesciunt esse, aliquid exercitationem vero velit officiis ab in explicabo. Placeat officiis
                    perferendis officia culpa aliquam obcaecati.</p>
            </div>
            <div class="feat">
                <i class="fa-solid fa-earth-americas"></i>
                <h3>Your Product Is Worldwide</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, laborum corrupti nihil maxime,
                    nesciunt esse, aliquid exercitationem vero velit officiis ab in explicabo. Placeat officiis
                    perferendis officia culpa aliquam obcaecati.</p>
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Start Services -->
    <div class="services">
        <div class="container">
            <h2 class="special-heading">Services</h2>
            <p>Don't Be Busy, Be Productive</p>
            <div class="services-content">
                <div class="col">
                    <!-- Start Service (one) -->
                    <div class="srv">
                        <i class="fa-regular fa-calendar-days"></i>
                        <div class="text">
                            <h3>Web Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus tempora corrupti
                                excepturi, necessitatibus quaerat quo non molestias ex nulla omnis consequatur veritatis
                                cum natus fuga in vel! Laboriosam, earum explicabo!</p>
                        </div>
                    </div>
                    <div class="srv">
                        <i class="fa-brands fa-bluesky"></i>
                        <div class="text">
                            <h3>UI & UX</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus tempora corrupti
                                excepturi, necessitatibus quaerat quo non molestias ex nulla omnis consequatur veritatis
                                cum natus fuga in vel! Laboriosam, earum explicabo!</p>
                        </div>
                    </div>
                    <!-- End Service (one) -->
                </div>
                <div class="col">
                    <!-- Start Service (two) -->
                    <div class="srv">
                        <i class="fa-regular fa-calendar-days"></i>
                        <div class="text">
                            <h3>Web Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus tempora corrupti
                                excepturi, necessitatibus quaerat quo non molestias ex nulla omnis consequatur veritatis
                                cum natus fuga in vel! Laboriosam, earum explicabo!</p>
                        </div>
                    </div>
                    <div class="srv">
                        <i class="fa-brands fa-bluesky"></i>
                        <div class="text">
                            <h3>UI & UX</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus tempora corrupti
                                excepturi, necessitatibus quaerat quo non molestias ex nulla omnis consequatur veritatis
                                cum natus fuga in vel! Laboriosam, earum explicabo!</p>
                        </div>
                    </div>
                    <!-- End Service (two) -->
                </div>
                <div class="col">
                    <div class="image image2">
                        <img src="{{ asset('images/pexels-photo-355747.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Portfolio -->
    <div class="portfolio">
        <div class="container">
            <h2 class="special-heading">Portfolio</h2>
            <p>If You Do It Right It Will Last Forever</p>
            <div class="portfolio-content">
                <!-- Start Ports -->
                <div class="port">
                    <img src="{{ asset('images/high-quality-realistic-beautiful-computer-monitor-image-free-png.png') }}" alt="">
                    <div class="text">
                        <h4>Project management</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dicta perspiciatis magni
                            provident, odio vel? Quo libero velit similique, amet ea dignissimos odio cumque iste
                            mollitia, quidem numquam possimus dicta!</p>
                    </div>
                </div>
                <div class="port">
                    <img src="{{ asset('images/laptop-computer-or-notebook-with-blank-screen-png.png') }}" alt="">
                    <div class="text">
                        <h4>Project management</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dicta perspiciatis magni
                            provident, odio vel? Quo libero velit similique, amet ea dignissimos odio cumque iste
                            mollitia, quidem numquam possimus dicta!</p>
                    </div>
                </div>
                <div class="port">
                    <img src="{{ asset('images/images.jpg') }}" alt="">
                    <div class="text">
                        <h4>Project management</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dicta perspiciatis magni
                            provident, odio vel? Quo libero velit similique, amet ea dignissimos odio cumque iste
                            mollitia, quidem numquam possimus dicta!</p>
                    </div>
                </div>
                <!-- End Ports -->
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

    <!-- Start About -->
    <div class="about">
        <div class="container">
            <div class="special-heading">About</div>
            <p>Everything That You Should Know</p>
            <div class="about-content">
                <img class="image" src="{{ asset('images/pexels-photo-355747.jpeg') }}" alt="">
                <div class="text">
                    <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur saepe dolore ipsa numquam,
                        incidunt beatae blanditiis quam fuga cumque necessitatibus modi fugit perferendis obcaecati,
                        earum ab ea maxime voluptatem ducimus!</h2>
                    <hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias odio maiores non soluta,
                        consequatur commodi iste dolor, amet porro voluptates culpa. Adipisci illo rem delectus laborum
                        quis ad molestias mollitia!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Contact -->
    <div class="contact">
        <div class="container">
            <div class="special-heading">Contact</div>
            <p>We Are Born To Create</p>
            <div class="contact-content">
                <div class="text">
                    <h3>Feel free to drop us a line at :</h3>
                    <h4>omar.boulahjour@esi.ac.ma</h4>
                    <ul>
                        <li>Find us in social networks:</li>
                        <li><a href="#facebook" class="facebook"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#twitter" class="twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#youtube" class="youtube"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <p>@2025 - <span>Omar</span>, All Rights Reserved</p>
        </div>
    </div>
    <!-- End Footer -->
</body>

</html>