@extends('_layout')
@section('content')
    <!-- section home -->
    <section id="home" class="home d-flex align-items-center" style="height: 50vh; min-height: 50vh;">
        <div class="container">

            <!-- intro -->
            <div class="intro">
                <!-- info -->
                <h1 class="mb-2 mt-0">Humanoo.id</h1>
                <p class="text-light">let's talk about code!</p>

                <div class="mt-4">
                    <a href="#contact" class="btn btn-default">Belajar</a>
                    <a href="#contact" class="btn btn-default">Join Us</a>
                </div>

            </div>

            <!-- parallax layers -->
            <div class="parallax" data-relative-input="true">

                <svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z"
                        fill="#FFD15C" fill-rule="evenodd" />
                </svg>

                <svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none"
                        fill-rule="evenodd" />
                </svg>

                <svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z"
                        fill="#44D7B6" fill-rule="evenodd" />
                </svg>

                <svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C"
                        fill-rule="evenodd" />
                </svg>

                <svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5"
                        fill-rule="evenodd" />
                </svg>

                <svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#FF4C60" fill-rule="evenodd">
                        <path
                            d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z" />
                        <path
                            d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z" />
                    </g>
                </svg>

                <svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none"
                        fill-rule="evenodd" />
                </svg>

                <svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5"
                        fill-rule="evenodd" />
                </svg>

                <svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z"
                        fill="#6C6CE5" fill-rule="evenodd" />
                </svg>

                <svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#44D7B6" fill-rule="evenodd">
                        <path
                            d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z" />
                        <path
                            d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z" />
                    </g>
                </svg>

                <svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z"
                        fill="#FFD15C" fill-rule="evenodd" />
                </svg>

            </div>
        </div>

    </section>

    <!-- section blog -->
    <section id="blog" class="blog-page-section">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Latest Posts</h2>
            <p>Apa aja sih yang baru di Humanoo.id?</p>

            <div class="spacer" data-height="60"></div>

            <div class="row blog-wrapper">

                <div class="col-md-4 mb-5">
                    <!-- blog item -->
                    <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                        <div class="thumb">
                            <a href="#">
                                <span class="category">Reviews</span>
                            </a>
                            <a href="#">
                                <img src="images/blog/1.svg" alt="blog-title" />
                            </a>
                        </div>
                        <div class="details">
                            <h4 class="my-0 title"><a href="#">5 Best App Development Tool for Your Project</a>
                            </h4>
                            <ul class="list-inline meta mb-0 mt-2">
                                <li class="list-inline-item">09 February, 2020</li>
                                <li class="list-inline-item">Bolby</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <!-- blog item -->
                    <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                        <div class="thumb">
                            <a href="#">
                                <span class="category">Tutorial</span>
                            </a>
                            <a href="#">
                                <img src="images/blog/2.svg" alt="blog-title" />
                            </a>
                        </div>
                        <div class="details">
                            <h4 class="my-0 title"><a href="#">Common Misconceptions About Payment</a></h4>
                            <ul class="list-inline meta mb-0 mt-2">
                                <li class="list-inline-item">07 February, 2020</li>
                                <li class="list-inline-item">Bolby</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <!-- blog item -->
                    <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                        <div class="thumb">
                            <a href="#">
                                <span class="category">Business</span>
                            </a>
                            <a href="#">
                                <img src="images/blog/3.svg" alt="blog-title" />
                            </a>
                        </div>
                        <div class="details">
                            <h4 class="my-0 title"><a href="#">3 Things To Know About Startup Business</a></h4>
                            <ul class="list-inline meta mb-0 mt-2">
                                <li class="list-inline-item">06 February, 2020</li>
                                <li class="list-inline-item">Bolby</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <!-- blog item -->
                    <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                        <div class="thumb">
                            <a href="#">
                                <span class="category">Reviews</span>
                            </a>
                            <a href="#">
                                <img src="images/blog/1.svg" alt="blog-title" />
                            </a>
                        </div>
                        <div class="details">
                            <h4 class="my-0 title"><a href="#">5 Best App Development Tool for Your Project</a>
                            </h4>
                            <ul class="list-inline meta mb-0 mt-2">
                                <li class="list-inline-item">09 February, 2020</li>
                                <li class="list-inline-item">Bolby</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <!-- blog item -->
                    <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                        <div class="thumb">
                            <a href="#">
                                <span class="category">Tutorial</span>
                            </a>
                            <a href="#">
                                <img src="images/blog/2.svg" alt="blog-title" />
                            </a>
                        </div>
                        <div class="details">
                            <h4 class="my-0 title"><a href="#">Common Misconceptions About Payment</a></h4>
                            <ul class="list-inline meta mb-0 mt-2">
                                <li class="list-inline-item">07 February, 2020</li>
                                <li class="list-inline-item">Bolby</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <!-- blog item -->
                    <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                        <div class="thumb">
                            <a href="#">
                                <span class="category">Business</span>
                            </a>
                            <a href="#">
                                <img src="images/blog/3.svg" alt="blog-title" />
                            </a>
                        </div>
                        <div class="details">
                            <h4 class="my-0 title"><a href="#">3 Things To Know About Startup Business</a></h4>
                            <ul class="list-inline meta mb-0 mt-2">
                                <li class="list-inline-item">06 February, 2020</li>
                                <li class="list-inline-item">Bolby</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="blog-pagination text-center">
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">10</a></li>
                </ul>
            </div>


        </div>

    </section>

    <!-- section contact -->
    <section id="contact">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Get In Touch</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4">
                    <!-- contact info -->
                    <div class="contact-info">
                        <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                        <p class="wow fadeInUp">Don't like forms? Send me an <a href="mailto:name@example.com">email</a>.
                            👋</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form mt-6" method="post" action="form/contact.php">

                        <div class="messages"></div>

                        <div class="row">
                            <div class="column col-md-6">
                                <!-- Name input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="InputName" id="InputName"
                                        placeholder="Your name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-6">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                        placeholder="Email address" required="required" data-error="Email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="InputSubject" name="InputSubject"
                                        placeholder="Subject" required="required" data-error="Subject is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Message textarea -->
                                <div class="form-group">
                                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Message"
                                        required="required" data-error="Message is required."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Send
                            Message</button><!-- Send Button -->

                    </form>
                    <!-- Contact Form end -->
                </div>

            </div>

        </div>

    </section>

    <div class="spacer" data-height="96"></div>
@endsection
