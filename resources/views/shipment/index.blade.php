@extends('layout.app')

@section('title', 'Track Shipments')

@section('page-content')
    <!-- Banner -->
    <div id="heading">
        <h1>Track Shipments</h1>
    </div>

    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <header>
                    <h2>Track Your Shipments</h2>
                </header>

                <form method="post" action="#">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12">
                            <span><b>Enter Your Tracking Id:</b></span>
                            <input type="text" name="tracking-id" id="tracking-id" value=""
                                placeholder="NGW-2026-001234" />
                        </div>
                        <div class="col-12">
                            <ul class="actions fit">
                                <li>
                                    <input type="submit" class="button" name="submit" id="submit"
                                        value="Track Shipment" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>

                <blockquote>
                    <strong> Tracking ID Location:</strong> Check your shipping
                    confirmation email or receipt. Your tracking ID typically starts
                    with "NGW-" followed by the year and a unique number.
                </blockquote>
            </div>
        </div>
    </section>

    <section id="main" class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>How Our Tracking Works</h2>
                <p>Real-time updates for every step of your journey</p>
            </header>

            <div class="highlights">
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-chain"><span class="label">Icon</span></a>
                            <h3>Real-Time Location</h3>
                        </header>
                        <p>
                            Get precise GPS location updates as your shipment moves through
                            our distribution network.
                        </p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-globe"><span class="label">Icon</span></a>
                            <h3>Multiple Updates</h3>
                        </header>
                        <p>
                            Receive notifications at key milestones: pickup, transit, out
                            for delivery, and delivery confirmation.
                        </p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-phone"><span class="label">Icon</span></a>
                            <h3>Live Support</h3>
                        </header>
                        <p>
                            Contact our customer support team 24/7 for detailed information
                            about your shipment.
                        </p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <a href="#" class="icon fa-line-chart"><span class="label">Icon</span></a>
                            <h3>Proof of Delivery</h3>
                        </header>
                        <p>
                            Digital signature and photo confirmation when your package is
                            delivered.
                        </p>
                    </div>
                </section>
            </div>
            <section id="main" class="wrapper">
                <header class="special">
                    <h2><b>Tracking FAQs</b></h2>
                    <p>Common questions about shipment tracking</p>
                </header>
                <div class="content">
                    <h3><b>How often is tracking information updated? </b></h3>
                    <p>
                        Tracking information is updated in real-time as your shipment
                        progresses through our system. You'll receive notifications at
                        major milestones.
                    </p>
                </div>

                <div class="content">
                    <h3><b>What if I can't find my tracking ID?</b></h3>
                    <p>
                        Check your shipping confirmation email or order receipt. If you
                        can't locate it, contact our support team at 08107186278 or
                        bellosanda08107@gmail.com.
                    </p>
                </div>

                <div class="content">
                    <h3><b>Can I change my delivery address after tracking? </b></h3>
                    <p>
                        Changes may be possible depending on the current status. Contact
                        us immediately if you need to make changes before delivery.
                    </p>
                </div>

                <div class="content">
                    <h3><b>How long are tracking records kept? </b></h3>
                    <p>
                        All tracking records are maintained for 12 months after delivery.
                        You can access historical shipment information anytime.
                    </p>
                </div>

                <div class="content">
                    <h3><b> What does "Out for Delivery" mean?</b></h3>
                    <p>
                        This status means your package has left our distribution center
                        and is with the delivery driver. It should arrive on the same day
                        or by the next business day.
                    </p>
                </div>
            </section>
            <section id="main" class="wrapper">
                <blockquote class="content">
                    <header class="special">
                        <h2><b>Manual Tracking - Backend Integration Coming Soon</b></h2>
                    </header>

                    <p>
                        This tracking page demonstrates the user interface for shipment
                        tracking. The actual backend integration and real-time GPS
                        tracking system will be connected by our development team.
                    </p>
                    <br />
                    <p>
                        This tracking page demonstrates the user interface for shipment
                        tracking. The actual backend integration and real-time GPS
                        tracking system will be connected by our development team.
                    </p>
                </blockquote>
            </section>
        </div>
    </section>

    <section id="cta" class="wrapper">
        <header class="special">
            <h2><b>Need Help With Your Shipment?</b></h2>
        </header>

        <p>
            Our customer support team is available 24/7 to assist you with any
            tracking questions or concerns.
        </p>

        <ul class="actions special">
            <li><a href="" class="button primary">Contact Support</a></li>
            <li><a href="" class="button">Send A New Shipment</a></li>
        </ul>
    </section>
    
@endsection
