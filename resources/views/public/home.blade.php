@extends('layout.app')

@section('title', 'Home')


@section('page-content')
    <!-- Banner -->
    <section id="banner">
        {{-- <div class="inner">
            <h1>Nagwammawa Express</h1>
            <h2>Reliable Transport & Logistics Solutions</h2>
            <p>
                Providing safe, efficient, and customer-focused transport and
                logistics services across Nigeria and the West African sub-region.
            </p>
        </div> --}}
        {{-- <video autoplay loop muted playsinline src="images/banner.mp4"></video> --}}
    </section>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Industries We Serve</h2>
                <!-- <p>
                    In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim
                    aliquet. Accumsan ac integer lobortis commodo ornare aliquet
                    accumsan erat tempus amet porttitor.
                  </p> -->
            </header>
            <div class="highlights">
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
                            <h3>Agriculture</h3>
                        </header>
                        <p>
                            Supporting farm-to-market logistics and produce distribution.
                        </p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
                            <h3>Manufacturing</h3>
                        </header>
                        <p>Inbound and outbound logistics for manufacturers.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-floppy-o"><span class="label">Icon</span></a>
                            <h3>Retail & E‑commerce</h3>
                        </header>
                        <p>Distribution and last-mile delivery solutions.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-line-chart"><span class="label">Icon</span></a>
                            <h3>Construction</h3>
                        </header>
                        <p>Transport of materials and heavy goods.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
                            <h3>Oil & Gas</h3>
                        </header>
                        <p>Specialized logistics support for energy operations.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-qrcode"><span class="label">Icon</span></a>
                            <h3>Accumsan viverra</h3>
                        </header>
                        <p>
                            Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing
                            gravida odio porttitor sem non mi integer non faucibus.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper">
        <div class="inner">
            <h2>Our Mission</h2>
            <p>
                {{ $company->mission }}
            </p>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>What Our Clients Say</h2>
                <p>
                    Trusted by businesses across multiple industries
                </p>
            </header>
            <div class="testimonials">
                <section>
                    <div class="content">
                        <blockquote>
                            <p>
                                Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing
                                gravida odio porttitor sem non mi integer non faucibus.
                            </p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/pic01.jpg" alt="" />
                            </div>
                            <p class="credit">
                                - <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span>
                            </p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p>
                                Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing
                                gravida odio porttitor sem non mi integer non faucibus.
                            </p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/pic03.jpg" alt="" />
                            </div>
                            <p class="credit">
                                - <strong>John Doe</strong> <span>CEO - ABC Inc.</span>
                            </p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p>
                                Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing
                                gravida odio porttitor sem non mi integer non faucibus.
                            </p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/pic02.jpg" alt="" />
                            </div>
                            <p class="credit">
                                - <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
