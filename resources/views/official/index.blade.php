@extends('layouts.custom')
@section('title','KingSite')
@section('content')


<div class="binary">LIMITED MIND</div>
<section class="section1">
    <div class="front-intro">
        <div class="front-intro-wrapper">
            <div class="coding">
                <ul>
                    <li>K</li>
                    <li>I</li>
                    <li>N</li>
                    <li>G</li>
                    <li>S</li>

                </ul>
            </div>
            <div class="world">
                <ul>
                    <li>D</li>
                    <li>E</li>
                    <li>V</li>

                </ul>
            </div>
            <div class="name">
                <div class="hi"> Hi I Am</div>
                <div class="brian">Brian Orbino</div>
            </div>
        </div>
    </div>
    <div class="wrapper-section">

        <div class="wrapper-design">
            <div class="design-content-container">
                <div class="design-div">
                    <div class="a">A</div>
                    <div class="diamond diamond-big">
                        <p class="dp">DEVELOPER</p>
                    </div>
                    <div class="diamond diamond-small d1"></div>
                    <div class="diamond diamond-small d2"></div>
                    <div class="diamond-cirlce"></div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="section2">

    <div class="section2-wrapper">
        <div class="box2">

            <div class="service-wrapper">
                <div class="box1">
                    <div class="service-diamond"></div>
                    <div class="service">SERVICE</div>
                    <div class="service-circle"></div>
                </div>
            </div>
            <div class="service-content">
                <div class="ser-vice-font-end-pic-wrapper">
                    <div class="wrap-text-image">
                        <div class="service-front-end"><span>FRONT-END</span></div>
                        <div class="div-laptop-wrapper">
                            <img src="{{asset('storage/images/clipart2429949.PNG') }}" alt="laptop"
                                class="service-image laptop">
                        </div>
                    </div>
                    <p class="fp">I can design and establish user-friendly website. I understand the basics rules of
                        designing and its fundamental.
                    </p>
                    <p class="fp">What Can I Offer</p>
                    <ul class="fp" style="color: #1a1a1d;">
                        <li>Front-End Developer</li>
                        <li>Support Font-End Developer</li>
                        <li>Design Coder</li>
                    </ul>

                </div>
                <div class="service-back-end-wrapper">
                    <div class="back-end-text-image-wrapper">
                        <div class="back-end-text">
                            <span>BACK-END</span>
                        </div>
                        <div class="sevice-cload-image-wrapper">
                            <img src="{{ asset('storage/images/clipart402381.PNG') }}" alt="laptop"
                                class="service-image laptop">
                        </div>
                    </div>
                    <p class="bt">I primary use PHP and Mysql as back end language. I am familiar with other programming
                        language like java, c# javascript , veu, react , I understand the concept of OOP so learning new
                        programming language won't be a problem. </p>
                    <p class="bt">What Can I Offer</p>

                    <ul class="bt" style="color: #1a1a1d;">
                        <li>Backend Developer</li>
                        <li>Backend Support</li>
                    </ul>
                    <p class="fp">I believe when it comes to programming . everything can be learn. If we put more
                        effort time, hardwork on it we can achieve what we desire.</p>
                </div>
            </div>
        </div>
</section>
<section class="section4">
    <div class="section4-wrapper">
        <div class="section4-diamond-wrapper">
            <div class="section4-diamond"></div>
            <div class="section4-circle"></div>
            <div class="skills">SKILLS</div>
        </div>
        <div class="img-section-wrapper">
            <div class="language-images">
                <img src="https://www.mediafire.com/view/nailhru34gkab82/IMG20201229155251.JPG" alt="php">
                <img src="{{ asset('storage/images/html.png') }}" alt="php">
                <img src="{{ asset('storage/images/kisspng-web-development-php-programmer-programming-languag-vs-5ac244e306bbd7.9685117315226810590276.PNG') }}"
                    alt="php">
                <img src="{{ asset('storage/images/css.png') }}" alt="php">
                <img src="{{ asset('storage/images/kisspng-web-development-laravel-web-framework-software-fra-1-5abaf3df944935.5441551415222015676074.PNG') }}"
                    alt="php">
                <img src="{{ asset('storage/images/kisspng-microsoft-azure-sql-database-microsoft-sql-server-database-5abeaece9df699.271102961522446030647.PNG') }}"
                    alt="php">
                <img src="{{ asset('storage/images/kisspng-jquery-octos-global-javascript-library-document-ob-hit-health-co-نقطه-چین-5b663ce777cf01.0749422515334269194908.PNG') }}"
                    alt="jquery">
                <img src="{{ asset('storage/images/kisspng-java-programming-programming-language-computer-pro-5ada6652a40c24.352582881524262482672.PNG') }}"
                    alt="jquery">
            </div>
        </div>
        <div class="chart-container">
            <canvas id="myChart">
            </canvas>
        </div>
    </div>
</section>
<section class="section3">
    <div class="section3-wrapper">
        <div class="section3-diamond"></div>
        <div class="section-circle"></div>
        <div class="projecys">PROJECTS
            <div class="letter-box"></div>
        </div>
    </div>
    <div class="section3-image-wrapper">
        <img src="{{ asset('storage/images/kisspng-programmer-computer-programming-laptop-professiona-architectural-engineer-vector-material-5ad9edb20c2c80.8903493415242316020499.PNG')}}"
            alt="student programm">
    </div>
    <div class="see-all-wrapper"><a href="{{route('projects')}}">SEE ALL</a></div>
</section>


@endsection