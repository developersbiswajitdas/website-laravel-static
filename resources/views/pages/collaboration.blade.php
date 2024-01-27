@extends('layouts.master_layout')

@section('body')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Collaboration Services</h2>
            <h3><span>Collaboration and Communication Services</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4">
                <img src="{{asset('img/services/collaboration.webp')}}" class="img-fluid" />

                {{-- <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Email and Messaging Systems
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Asset Tracking and Maintenance
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Remote Access Solutions
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            <div class="col-lg-8">
                <h5>Email and Messaging Systems</h5>
                <p>
                    Elevate your communication with our state-of-the-art Email and
                    Messaging Systems. Our platform seamlessly integrates robust
                    email functionalities and advanced messaging solutions to
                    streamline your communication processes. Experience efficient
                    and secure email management, ensuring prompt and reliable
                    correspondence. Our messaging systems offer versatile features,
                    facilitating real-time communication and collaboration within
                    your organization. With user-friendly interfaces and advanced
                    security measures, our Email and Messaging Systems empower
                    businesses to foster effective communication, enhance productivity,
                    and stay connected in today's dynamic digital landscape.
                    Explore the next level of communication solutions tailored
                    for your organizational needs.
                </p>
            </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4">
                <img src="{{asset('img/services/collaboration.webp')}}" class="img-fluid" />
            </div>
            <div class="col-lg-8">
                <h5>Asset Tracking and Maintenance</h5>
                <p>
                    Welcome to our comprehensive Asset Tracking and Maintenance solution,
                    where precision meets efficiency. Our advanced system ensures
                    meticulous monitoring and management of your valuable assets,
                    providing real-time insights into their status, location, and
                    maintenance needs. Seamlessly integrating cutting-edge technology,
                    our platform enhances asset visibility, streamlines maintenance
                    workflows, and prolongs asset lifespan. From preventive maintenance
                    scheduling to predictive analytics, we empower businesses to
                    optimize asset performance, reduce downtime, and make informed
                    decisions. Trust us to safeguard your investments and propel your
                    operations with the next level of Asset Tracking and Maintenance
                    excellence.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection