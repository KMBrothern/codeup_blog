@extends('layouts.master')
@section('content')
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="intro-text"><span class="kbname">Welcome To The Reboot</span></p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-refresh fa-spin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Keyasha</h2>
    <!-- div id="border_page" and "border2" make two rectangular horizontal borders around this section of the image spanning full width of page -->
                <div id="border_page">
                    <div id="border2"><img id="border_pic" class="kb" src="/img/kbsmile.jpg"></div>
                </div>
            <br>
                <p class="aqua">I am a curious minded individual who aspires to dream and create in every shade <em><strong><span class="icolor">i</span><span class="mcolor">m</span><span class="acolor">a</span><span class="gcolor">g</span><span class="icolor2">i</span><span class="ncolor">n</span><span class="acolor">a</span><span class="bcolor">b</span><span class ="lcolor">l</span><span class="ecolor">e.</span></strong></em> Currently a student <strong>Web Developer</strong>, who loves talking to my rubber duck, staring at my screen blankly when my code isn't working and with jubilation when it does.
                <p class="aqua">Deathly allergic to boxes, I can be found breaking out of them frequently. When I'm not learning: you can find me watching one of my shows, fervently clicking away on my <i class="fa fa-apple fa-lg"></i> and multi-tasking like a boss.</p>
                <p class="aqua">Feel free to find me on the interwebs. In fact, I highly recommend it, as my awesomeness truly is awesome.</p>
                <a href="#contact" class="btn btn-default btn-lg">Find Me On the webs <img src="/img/waldo.jpg"></a>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Insightful Ramblings</h2>
                    <p>"I learned that courage was not the abscence of fear, but the triumph over it. The brave man is not he who does not feel afraid, but he who conquers that fear." - Nelson Mandela
                        <br>
                    <p>“There is freedom waiting for you, on the breezes of the sky, and you ask "What if I fall?" Oh but my darling, What if you fly?” -Erin Hanson
                    </p>
                        <br>
                    <p>"If you fail to plan, you are planning to fail" - Benjamin Franklin
                        <br>
                        <br>
                    <h4>To see more of what inspires me, how I think and what I like visit my blog <i class="fa fa-arrow-down"></i></h4></p>
                    <a href="{{{ action('PostsController@index') }}}" class="btn btn-default btn-lg">Visit Blog Page</a>
                    <br>
                    <p> Same framework. New beginnings. Run Level 6: Welcome To The Reboot</p>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Keyasha</h2>
                <p class="aqua">To mentor me, ask me questions, tell me how awesome I am, or to just say hello...feel free to find me on the interwebs! </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/Comp_Code_Killa" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name"></span></a>
                    </li>
                    <li>
                        <a href="https://github.com/KMBrothern" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name"></span></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/pub/keyasha-brothern/83/6bb/b45" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name"></span></a>
                    </li>

                    <li>
                        <a href="https://facebook.com/kmbrothern" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name"></span></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
@stop