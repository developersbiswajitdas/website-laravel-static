@extends('layouts.master_layout')

@section('body')
<style>
    .badge-container{
        width: 100%;
    }
    .badge-list{
        list-style: none;
    }
    .badge-list .badge-item{
        background: #f7f7f7;
        margin: 5px 5px;
        padding: 5px 20px;
        color: #106eea;
        border-radius: 20px;
        box-shadow: 0px 4px 11px 0px #dfdfdf;
        cursor: pointer;
    }
    .badge-list .badge-item:hover{
        background: #e7f1fd;
    }
</style>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Digital Marketing</h2>
            <h3><span>Digital Marketing</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12">
                <div class="badge-container text-center">
                    <ul class="badge-list d-flex justify-content-center flex-wrap">
                        <li class="badge-item" click-to-scroll="blog-post">Blog Posts</li>
                        <li class="badge-item" click-to-scroll="social-media-posts">Social Media Posts</li>
                        <li class="badge-item" click-to-scroll="seo-smm">Search Engine Optimization (SEO)</li>
                        <li class="badge-item" click-to-scroll="sem">Search Engine Marketing (SEM)</li>
                        <li class="badge-item" click-to-scroll="ppc">Pay-Per-Click (PPC) Advertising</li>
                        <li class="badge-item" click-to-scroll="seo-smm">Social Media Marketing (SMM)</li>
                        <li class="badge-item" click-to-scroll="content-marketing">Content Marketing</li>
                        <li class="badge-item" click-to-scroll="email-marketing">Email Marketing</li>
                        <li class="badge-item" click-to-scroll="social-media-management">Social Media Management</li>
                        <li class="badge-item" click-to-scroll="data-analysis">Web Analytics and Data Analysis</li>
                        <li class="badge-item" click-to-scroll="video-marketing">Video Marketing</li>
                        <li class="badge-item" click-to-scroll="local-search-optimization">Local Search Optimization</li>
                        <li class="badge-item" click-to-scroll="social-media-advertising">Social Media Advertising</li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- services --}}
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12">
                <div class="row align-items-center my-lg-5 my-md-3 my-sm-2 my-xs-2" id="blog-post">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <img src="{{asset('img/services/blog-post.png')}}" class="img-fluid" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3>Blog Posts</h3>
                        <p>
                            Elevate your online presence with our expertly crafted blog posts.
                            Our seasoned writers deliver captivating content tailored
                            to your brand's voice, ensuring a connection with your
                            audience. From SEO optimization to multimedia integration,
                            we've got your blog covered. Stay relevant, engage your readers,
                            and drive organic traffic with our regular and consistent updates.
                            Let's turn your ideas into compelling narratives. Contact us today
                            for transparent pricing, timely delivery, and a blog that stands out
                            in the digital crowd!
                        </p>
                    </div>
                </div>

                <div class="row align-items-center flex-row-reverse my-lg-5 my-md-3 my-sm-2 my-xs-2" id="social-media-posts">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <img src="{{asset('img/services/social-media.webp')}}" class="img-fluid" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3>Social Media Management | Advertising</h3>
                        <p>
                            Elevate your online presence with our strategic social media management.
                            We specialize in creating engaging content tailored to each platform,
                            sparking conversations, and building a loyal community.
                            Our data-driven approach, innovative campaigns, and real-time
                            reporting ensure your brand stands out. Choose customizable
                            packages to fit your needs. Ready to boost your social media game?
                            Contact us today!
                        </p>
                        <p>
                            Regularly updating and managing social media profiles, responding
                            to comments, and engaging with the audience.
                        </p>
                        <p>
                            Paid advertising on social media platforms to reach a targeted audience based on demographics, interests, and behaviors.
                        </p>
                    </div>
                </div>

                <div class="row align-items-center my-lg-5 my-md-3 my-sm-2 my-xs-2" id="seo-smm">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <img src="{{asset('img/services/seo.png')}}" class="img-fluid" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3>Search Engine Optimization (SEO) | Social Media Marketing (SMM)</h3>
                        <p>
                            Elevate your online visibility with our cutting-edge Search Engine
                            Optimization (SEO) services. As a premier SEO agency, we specialize
                            in optimizing your digital presence to ensure your brand stands out
                            in search engine results. Our seasoned experts employ a strategic
                            approach, incorporating keyword research, on-page optimization, and
                            content enhancement to boost your website's ranking.
                            With a focus on sustainable results, we implement white-hat SEO
                            techniques to drive organic traffic, increase conversions,
                            and enhance your overall online performance. Trust us to navigate
                            the complexities of search algorithms, delivering tangible results
                            that propel your business to the forefront of the digital landscape.
                            Let our SEO agency be the catalyst for your online success – contact
                            us today and unlock the full potential of your digital presence.
                        </p>
                        <p>
                            Developing and implementing strategies to promote products or
                            services on social media platforms such as Facebook, Instagram,
                            Twitter, LinkedIn, and others.
                        </p>
                    </div>
                </div>

                <div class="row align-items-center flex-row-reverse my-lg-5 my-md-3 my-sm-2 my-xs-2" id="ppc">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <img src="{{asset('img/services/ppc.png')}}" class="img-fluid" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3>Pay-Per-Click (PPC) Advertising</h3>
                        <p>
                            Are you looking to promote your business through pay-per-click (PPC)
                            advertising? Look no further! Our expert PPC marketing team is here
                            to help you achieve outstanding results and grow your business
                            effectively.
                        </p>
                        <p>www.digitalcomputerclasses.com</p>
                        <p>+9178498080331</p>
                    </div>
                </div>

                <div class="row align-items-center my-lg-5 my-md-3 my-sm-2 my-xs-2" id="content-marketing">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <img src="{{asset('img/services/content-marketing.png')}}" class="img-fluid" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3>Content Marketing</h3>
                        <p>
                            Creation and distribution of valuable, relevant content to attract
                            and engage a target audience, often through blog posts, articles,
                            videos, and infographics.
                        </p>
                        <p>www.digitalcomputerclasses.com</p>
                        <p>+9178498080331</p>
                    </div>
                </div>

                <div class="row align-items-center flex-row-reverse my-lg-5 my-md-3 my-sm-2 my-xs-2" id="email-marketing">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <img src="{{asset('img/services/email-marketing.png')}}" class="img-fluid" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3>Email Marketing</h3>
                        <p>
                            Designing and executing email campaigns to nurture leads, communicate
                            with customers, and promote products or services.
                        </p>
                        <p>www.digitalcomputerclasses.com</p>
                        <p>+9178498080331</p>
                    </div>
                </div>

                <div class="row align-items-center my-lg-5 my-md-3 my-sm-2 my-xs-2" id="data-analysis">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <img src="{{asset('img/services/data-analysis-2.png')}}" class="img-fluid" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3>Web Analytics and Data Analysis</h3>
                        <p>
                            Monitoring and analyzing website traffic, user behavior,
                            and other key performance indicators to make data-driven decisions.
                        </p>
                        <p>www.digitalcomputerclasses.com</p>
                        <p>+9178498080331</p>
                    </div>
                </div>

                <div class="row align-items-center flex-row-reverse my-lg-5 my-md-3 my-sm-2 my-xs-2" id="video-marketing">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <img src="{{asset('img/services/video-marketing.jpg')}}" class="img-fluid rounded" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3>Video Marketing</h3>
                        <p>
                            Creating and promoting video content on platforms like YouTube or
                            social media to convey messages and engage audiences.
                        </p>
                        <p>www.digitalcomputerclasses.com</p>
                        <p>+9178498080331</p>
                    </div>
                </div>

                <div class="row align-items-center my-lg-5 my-md-3 my-sm-2 my-xs-2" id="local-search-optimization">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <img src="{{asset('img/services/local-search-optimization.png')}}" class="img-fluid" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <h3>Local Search Optimization</h3>
                        <p>
                            Optimizing online presence to improve visibility in local search
                            results, especially for businesses targeting a local audience.
                        </p>
                        <p>www.digitalcomputerclasses.com</p>
                        <p>+9178498080331</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- End Contact Section -->
@endsection