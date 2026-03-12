@extends('layout.app')

@section('title', 'Quotes')

@section('page-content')
    <div id="heading">
        <h1><i class="fas fa-invoice"></i>Quote QT-2024-001</h1>
    </div>

    <div class="wrapper" id="main">
        <div class="inner">
            <header class="special">
                Created on: {{ date('D d M, Y', strtotime($quote->created_at)) }}
            </header>
            <div class="row">
                <section class="col-8 col-12-medium">
                    <div class="row-column">
                        <div class="content">
                            <header>
                                <h3 class="non-special"><i class="fas fa-info-circle"></i> Quote Information</h3>
                            </header>
                            <div class="summary-ctn summary-content-underline">
                                <p><span>Quote ID</span> <strong>{{ $quote->id }}</strong></p>
                                <p><span>Quote Date</span><span>{{ date('D d M, Y', strtotime($quote->created_at)) }}</span>
                                </p>
                                <p><span>Valid Until</span><span>---------</span></p>
                                <p><span>Status</span><span class="pending">{{ $quote->status }}</span></p>
                            </div>

                        </div>

                        <div class="content">
                            <header>
                                <h3 class="non-special"><i class="fas fa-user"></i> Customer Information</h3>
                            </header>
                            <div class="summary-ctn summary-content-underline">
                                <p><span>Name</span> <strong>{{ $quote->customer_name }}</strong></p>
                                <p><span>Email</span><span>{{ $quote->email }}</span>
                                </p>
                                <p><span>Phone</span><span>{{ $quote->phone }}</span></p>
                                <p><span>Company Name</span><span>{{ $quote->company_name }}</span></p>
                            </div>

                        </div>

                        <div class="content">
                            <header>
                                <h3 class="non-special"><i class="fas fa-box"></i> Shipment Details</h3>
                            </header>
                            <div class="summary-ctn summary-content-underline">
                                <p><span>Origin</span> <strong>{{ $quote->pickup_location }}</strong></p>
                                <p><span>Destination</span><span>{{ $quote->destination }}</span>
                                </p>
                                <p><span>Pickup Date</span><span>{{ $quote->pickup_date }}</span></p>
                                <p><span>Expected Delivery</span><span>{{ $quote->delivery_date }}</span></p>
                                <p><span>Service Type</span><span>{{ $quote->company_name }}</span></p>
                                <p><span>Special Requirements</span><span>{{ $quote->special_instructions }}</span></p>
                            </div>

                        </div>
                        <div class="content">
                            <header>
                                <h3 class="non-special"><i class="fas fa-list"></i> Items</h3>
                            </header>

                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>Weight</th>
                                            <th>Dimensions</th>
                                            <th>Price/Unit</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($quotes as $quote) --}}
                                        <tr>
                                            <td>{{ $quote->id }}</td>
                                            <td>{{ $quote->customer_name }}</td>
                                            <td>{{ $quote->pickup_location }}</td>
                                            <td>{{ date('D d M, Y', strtotime($quote->created_at)) }} </td>
                                            <td>{{ $quote->status }}</td>
                                            <td></td>

                                        </tr>
                                        {{-- @endforeach --}}

                                    </tbody>
                                    {{-- <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td>360.00</td>
                            </tr>
                        </tfoot> --}}
                                </table>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="col-4 col-12-medium">
                    <div class="row-column">
                        <div class="content">
                            <header>
                                <h3><i class="fas fa-price"></i> Price Summary</h3>
                            </header>
                            <blockquote>
                                <div class="summary-ctn">
                                    <p><span>Subtotal</span> <span>₦120,000</span></p>
                                    <p><span>Handling Fee</span> <span>₦5,000</span></p>
                                    <p><span>Insurance</span> <span>₦2,500</span></p>
                                    <p><span>VAT (7.5%)</span> <span>₦9,656</span></p>
                                    <hr>
                                    <p><strong>Total Amount </strong> <strong>₦137,156</strong></p>
                                </div>
                            </blockquote>
                        </div>
                        <div class="content">
                            <header>
                                <h3><i class="fas fa-price"></i> Payment Method</h3>
                            </header>
                            <div class="summary-ctn">
                                <p><span>Method</span> <span>Bank Transfer</span></p>
                                <p><span>Status</span> <span class="approved">paid</span></p>
                                <p><span>Paid On</span> <span>March 16, 2024</span></p>

                                <p><span>Transaction ID </span> <span>TXN-20240316-001</span></p>
                            </div>
                        </div>

                        <div class="content">
                            <header>
                                <h3><i class="fas fa-price"></i> Note</h3>
                            </header>
                            <p>
                                Thank you for choosing Nagwammawa Express. We have prepared this quote based on your
                                requirements. Please review all details carefully before proceeding with payment. If you
                                have any questions, feel free to contact our sales team.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
@endsection
