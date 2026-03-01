@extends('layout.app')

@section('title', 'About Us')


@section('page-content')
    <!-- Banner -->
    <div id="heading">
        <h1>About Nagwammawa Express</h1>
    </div>

    <section id="main" class="wrapper">
        <header class="special">
            <p>Delivering excellence in logistics since 2026</p>
        </header>
        <div class="content">
            <div class="inner">
                <div class="row highlights">
                    <div class="col-6 col-12-medium">
                        <h3><b>Our Story</b></h3>
                        <p>
                            Nagwammawa & Sons Nigeria Limited was founded in
                            2026 with a simple mission: to provide reliable,
                            efficient, and professional logistics solutions
                            to businesses across Nigeria and West Africa.
                        </p>

                        <p>
                            What started as a small transportation company
                            has grown into a comprehensive logistics
                            provider serving hundreds of businesses, from
                            small enterprises to large corporations. Our
                            success is built on a foundation of trust,
                            reliability, and customer-centric service.
                        </p>

                        <p>
                            Today, Nagwammawa Express operates an extensive
                            network of distribution centers, warehousing
                            facilities, and partnerships across Nigeria and
                            the wider West African region, enabling us to
                            deliver on our promise of excellence every
                            single day.
                        </p>
                    </div>
                    <div class="col-6 col-12-medium">
                        <blockquote>
                            <header>
                                <h2><b>Company Details</b></h2>
                                <p>
                                    <strong>Company Name:</strong>
                                    {{ $company->name }}
                                </p>
                                <p>
                                    <strong>Brand: </strong>{{ $company->trading_name }}
                                </p>
                                <p><strong>Founded: </strong> {{ $company->year_established }}</p>
                                <p>
                                    <strong>Headquarters: </strong> {{ $company->head_office }}
                                </p>
                                <p>
                                    <strong>Region: </strong> Nigeria & West
                                    Africa
                                </p>
                                <p>
                                    <strong>Service Coverage: </strong> 36+
                                    States, 5+ Countries
                                </p>
                            </header>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="main" class="">
        <div class="inner">
            <div class="row highlights">
                <section class="inner col-6 col-12-medium">
                    <div class="content">
                        <header>
                            <i class="icon fa-rocket"></i>
                            <h2><b>Our mission</b></h2>
                        </header>
                        <p>
                            {{ $company->vision }}
                        </p>

                    </div>
                </section>

                <section class="inner col-6 col-12-medium">
                    <div class="content">
                        <header>
                            <i class="icon fa-eye"></i>
                            <h2><b>Our Vision</b></h2>
                        </header>
                        <p>
                            {{ $company->vision }}
                        </p>

                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2><b>Our Core Values</b></h2>
                <p>Principles that guide everything we do</p>
            </header>
            <div class="highlights">
                <section>
                    <div class="content">
                        <header>
                            <h3><b>Reliability</b></h3>
                        </header>
                        <p>
                            We honor our commitments. On-time delivery,
                            transparent communication, and dependable
                            service are at the heart of what we do.
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>Reliability</b></h3>
                        </header>
                        <p>
                            We honor our commitments. On-time delivery,
                            transparent communication, and dependable
                            service are at the heart of what we do.
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>Reliability</b></h3>
                        </header>
                        <p>
                            We honor our commitments. On-time delivery,
                            transparent communication, and dependable
                            service are at the heart of what we do.
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>Reliability</b></h3>
                        </header>
                        <p>
                            We honor our commitments. On-time delivery,
                            transparent communication, and dependable
                            service are at the heart of what we do.
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>Reliability</b></h3>
                        </header>
                        <p>
                            We honor our commitments. On-time delivery,
                            transparent communication, and dependable
                            service are at the heart of what we do.
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>Reliability</b></h3>
                        </header>
                        <p>
                            We honor our commitments. On-time delivery,
                            transparent communication, and dependable
                            service are at the heart of what we do.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2><b>Compliance & Certifications</b></h2>
                <p>
                    We maintain the highest standards of compliance and
                    professionalism
                </p>
            </header>
            <div class="highlights">
                <section>
                    <div class="content">
                        <header>
                            <h3><b>✓ Corporate Registration</b></h3>
                        </header>
                        <p>
                            Registered with the Corporate Affairs Commission
                            (CAC) of Nigeria
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>✓ Transport License</b></h3>
                        </header>
                        <p>
                            Licensed by the Federal Road Safety Corps (FRSC)
                            and relevant state authorities
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>✓ Cargo Insurance</b></h3>
                        </header>
                        <p>
                            Full insurance coverage for all shipments
                            through licensed insurance providers
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>✓ Tax Compliance </b></h3>
                        </header>
                        <p>
                            Full tax compliance with Federal Inland Revenue
                            Service (FIRS)
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>✓ Safety Standards</b></h3>
                        </header>
                        <p>
                            Adherence to international safety and quality
                            standards for logistics operations
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>✓ Customs Registration</b></h3>
                        </header>
                        <p>
                            Registered with Nigerian Customs Service for
                            cross-border operations
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2><b>Our Team & Expertise</b></h2>
                <p>Experienced professionals dedicated to your success</p>
            </header>
            <div class="highlights">
                <section>
                    <div class="content">
                        <header>
                            <h3><b>Leadership Team </b></h3>
                        </header>
                        <p>
                            Our management team brings over 80 years of
                            combined experience in logistics,
                            transportation, and supply chain management.
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>Drivers & Staff</b></h3>
                        </header>
                        <p>
                            Well-trained and certified professionals who
                            undergo regular training on safety, customer
                            service, and operational excellence.
                        </p>
                    </div>
                </section>

                <section>
                    <div class="content">
                        <header>
                            <h3><b>Customer Support</b></h3>
                        </header>
                        <p>
                            24/7 dedicated customer support team ready to
                            assist with tracking, inquiries, and service
                            requests.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section id="cta" class="wrapper">
        <header class="special">
            <h2><b>Partner With Nagwammawa Express</b></h2>
            <p>
                Discover how our logistics solutions can transform your
                business operations.
            </p>
        </header>
        <ul class="actions special">
            <li><a href="" class="button primary">Get Quote</a></li>
            <li><a href="" class="button">Contact Us</a></li>
        </ul>
    </section>
@endsection
