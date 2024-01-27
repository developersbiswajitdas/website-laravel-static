@extends('layouts.master_layout')

@section('body')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Hardware Services</h2>
            <h3><span>Hardware Services</span></h3>
            <p>Elevating your tech experience, we seamlessly handle Peripheral Installation and Support, blending innovation with reliability to meet your diverse hardware needs. Whether it's optimizing peripheral devices or ensuring their flawless integration, our services contribute to a superior user experience. Additionally, we empower your digital infrastructure with robust computer hardware and potent server solutions, serving as the foundational backbone for seamless technology experiences. From cutting-edge peripherals to powerful servers, our commitment is to provide comprehensive support, ensuring your technology operates at its peak performance.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4">
                <img src="{{asset('img/services/collaboration.webp')}}" class="img-fluid" />
            </div>
            <div class="col-lg-8">
                <h5>Computer and Server Hardware</h5>
                <p>
                    Empowering your digital infrastructure: From robust computer hardware
                    to powerful server solutions, we provide the backbone for
                    seamless technology experiences.
                </p>
            </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4">
                <img src="{{asset('img/services/collaboration.webp')}}" class="img-fluid" />
            </div>
            <div class="col-lg-8">
                <h5>Peripheral Installation and Support</h5>
                <p>
                    Elevating your tech experience: Seamless Peripheral Installation and
                    Support – where innovation meets reliability for your hardware needs
                </p>
            </div>
        </div>
    </div>
</section>
@endsection