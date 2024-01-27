@extends('layouts.master_layout')

@section('body')
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Services</h2>
            <h3>Check our <span>Services</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><img src="{{asset('img/icons/social-media.png')}}" class="img-responsive"></div>
                    <h4><a href="">Digital Marketing</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><img src="{{asset('img/icons/code.png')}}" class="img-responsive"></div>
                    <h4><a href="">Web Development</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><img src="{{asset('img/icons/layers.png')}}" class="img-responsive"></div>
                    <h4><a href="">Software Development</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><img src="{{asset('img/icons/analytics.png')}}" class="img-responsive"></div>
                    <h4><a href="">Data Analytics</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><img src="{{asset('img/icons/collaboration.png')}}" class="img-responsive"></div>
                    <h4><a href="">Collaboration Services</a></h4>
                    <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><img src="{{asset('img/icons/support.png')}}" class="img-responsive"></div>
                    <h4><a href="">Hardware Services</a></h4>
                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><img src="{{asset('img/icons/holidays-party.png')}}" class="img-responsive"></div>
                    <h4><a href="">Party Events Management</a></h4>
                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><img src="{{asset('img/icons/graphic-design.png')}}" class="img-responsive"></div>
                    <h4><a href="">Graphic Design</a></h4>
                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
            </div>

        </div>
    </div>
</section><!-- End Services Section -->
@endsection