@extends('layouts.master_layout')

@section('body')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact </h2>
            <h3><span>Contact Us</span></h3>
            <p>Connect with us for inquiries and support. Your feedback is valuable. Reach out via our contact form or email</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
            <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
            </div>
            </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error){
                            <li>{{$error}}</li>
                        }
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-lg-6">
            <form action="{{route('contactform.store')}}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                    <div class="col form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{old('name')}}" required>
                    </div>
                    <div class="col form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{old('subject')}}" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required>{{old('message')}}</textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            </div>

        </div>
    </div>
</section><!-- End Contact Section -->
@endsection