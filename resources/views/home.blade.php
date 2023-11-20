@extends('layouts.app')

@section('title')

@section('content')
        <div class="hero">
            <img src="/img/CastleGlowCompleted.png" alt="" class="img-hero">
            <div class="centered-text">
                <h1 class="hero-text">Hello, Im <span class="title">IAN REEVES.</span>
                Im a full-stack web developer.
                </h1>
                <button class="hero-btn mt-4 p-3" id="#web-portfoliob">View My Work</button>
            </div>
        </div>

        <div class="container">
            <div class="main-info-container mb-16">
                <div id="about" class="info-img-container">
                    <img src="/img/castleglowcompleted.png" alt="" class="text-image">
                    <p class="mobile-heading">About Me</p>
                    <p class="mobile-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus mollitia eum nesciunt soluta ut magni quo odit dicta rem consequatur.</p>
                </div>
                <div class="info-container">
                    <h2 class="section-headings-bg-2">About Me</h2>
                    <p class="text-centered">From 2017 to 2020, I attended Technological University of the Shannon, where I acquired valuable skills in software development. Since then, I have dedicated myself to honing my expertise in various areas, including graphic design, HTML, CSS, JavaScript, React, and Laravel. My goal is to leverage my skills to work on full-stack projects, encompassing graphic design, front-end development, and back-end development.

Currently, I am employed at an Irish-based web agency, but I am open to exploring new opportunities, including freelance projects.</p>
                    Tech Stack Here
                </div>
            </div>

            <p id="web-portfolio" class="headings">Web Portfolio</p>
            <div class="card-container">
                <div class="card">
                    <a href="#">
                        <img class="rounded-t-lg card-image" src="/img/an_dulra.png" alt="" />
                    </a>
                    <div class="card-content">
                        <h5 class="card-title">An Dulra</h5>
                        <a target="_BLANK" href="https://www.andulra.ie/" class="card-link">
                           View Site
                         <svg class="card-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path class="card-icon-path" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <a href="#">
                        <img  class="rounded-t-lg" src="/img/wimbledon.png" alt="">
                    </a>
                    <div class="card-content">
                        <h5 class="card-title">Wimbledon Wine School</h5>
                        <a target="_BLANK" href="https://www.wimbledonwineschool.co.uk/" class="card-link">
                           View Site
                         <svg class="card-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path class="card-icon-path" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <a href="#">
                        <img  class="rounded-t-lg"src="/img/nz_protein.png" alt="">
                    </a>
                    <div class="card-content">
                        <h5 class="card-title">Nz Protein</h5>
                        <a target="_BLANK" href="https://www.nzprotein.co.nz/" class="card-link">
                            View Site
                         <svg class="card-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path class="card-icon-path" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <a href="#">
                        <img  class="rounded-t-lg"src="/img/castletroy.png" alt="">
                    </a>
                    <div class="card-content">
                        <h5 class="card-title">Castletroy Hockey Club</h5>
                        <a target="_BLANK" href="https://www.castletroyhockeyclub.ie/" class="card-link">
                            View Site
                         <svg class="card-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path class="card-icon-path" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <a href="#">
                        <img  class="rounded-t-lg"src="/img/anywair.png" alt="">
                    </a>
                    <div class="card-content">
                        <h5 class="card-title">Anywair</h5>
                        <a target="_BLANK" href="http://www.anywair.ie/" class="card-link">
                            View Site
                         <svg class="card-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path class="card-icon-path" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <a href="#">
                        <img  class="rounded-t-lg"src="/img/gaming_nirvana.png" alt="">
                    </a>
                    <div class="card-content">
                        <h5 class="card-title">Gaming Nirvana</h5>
                        <a target="_BLANK" href="https://gamingnirvana.com/" class="card-link">
                            View Site
                         <svg class="card-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path class="card-icon-path" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <p id="graphic-portfolio" class="headings mt-14">Graphic Portfolio</p>
            <div class="carousel">
                <div class="carousel-container">
                        <div class="carousel-slide">
                            <img src="/img/butterflyglow.png" alt="Butterfly Image">
                            <div class="content">
                                <h2>Butterfly</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                        <div class="carousel-slide">
                            <img src="/img/castleglowcompleted.png" alt="Castle Image">
                            <div class="content">
                                <h2>Castle</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                        <div class="carousel-slide">
                            <img src="/img/graphics/boat_portal.png" alt="Boat Portal">
                            <div class="content">
                                <h2>Boat Portal</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                </div>
                <div class="button">
                    <button class="prev-btn"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="next-btn"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <button id="scrollToTopBtn" class="scroll-to-top-btn" title="Go to top">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none"/>
                    <path d="M12 2c-5.52 0-10 4.48-10 10s4.48 10 10 10 10-4.48 10-10-4.48-10-10-10zm5 13h-3v6h-4v-6H7l5-5 5 5z"/>
                </svg>
            </button>

            <div id="contact" class="contact-box">
                <p class="headings mt-4">Contact</p>
                <div class="contact-form">
                    <div class="form-info">
                        <p class="contact-header">Contact me at:</p>
                        <p class="contact-text mt-5">Contact via Email: <a href="mailto:ianreeves19981@gmail.com">ianreeves19981@gmail.com</a></p>
                        <p class="contact-text">Alternatively, complete the form below :</p>
                    </div>
                    <form action="#">
                        <input type="text" placeholder="Your Name" class="">
                        <input type="email" placeholder="Email Address" class="">
                        <textarea name="message" placeholder="Message(Optional)" cols="20" rows="6"></textarea>
                        <button type="submit" class="contact-btn ">Send Message</button>
                    </form>
                </div>
            </div>

        </div>

        <div class="background-shape">
        </div>
@endsection
