@extends('layout.app')

@section('title', 'Get Quote')

@section('page-content')

    <div id="heading">
        <h1> '' Get a Quote</h1>
    </div>



    <div id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <header>
                    <h2><b><i class="fas fa-shipping-fast" style="margin-right:7px;"></i> Shipment Quote Request</b></h2>
                </header>
                <br>
                <form action="{{ route('quotes.store') }}" method="POST" enctype="multipart/form-data" class="form">
                    @csrf
                    <div class="form-group">
                        <header>
                            <h3><b><i class="fas fa-user" style="margin-right:5px;"></i> Your Contact Information</b>
                            </h3>
                        </header>
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <label for="customer_name" class="label">Name *</label>
                                <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name') }}"
                                    @error('customer_name')  class="error-boder-color" @enderror
                                    placeholder="Name Surname Lastname" />
                                @error('customer_name')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for="email" class="label">Email *</label>
                                <input type="email" name="email" id="" value="{{ old('email') }}"
                                    @error('email')  class="error-boder-color" @enderror placeholder="eaxmple@email.com" />
                                @error('email')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for="phone" class="label">Phone *</label>
                                <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                                    @error('phone')  class="error-boder-color" @enderror
                                    placeholder="+123 123456789" />
                                @error('phone')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label for="company_name" class="label">Company Name</label>
                                <input type="text" name="company_name" id="company_name"
                                    value="{{ old('company_name') }}"
                                    @error('company_name')  class="error-boder-color" @enderror
                                    placeholder="you company name" />
                                @error('company_name')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="form-group">
                        <header>
                            <h4><b><i class="fas fa-box" style="margin-right:5px;"></i> Shipment Details</b>
                            </h4>
                        </header>
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <label for="pickup_location" class="label">Pickup Location *</label>
                                <input type="text" name="pickup_location" id="pickup_location"
                                    value="{{ old('pickup_location') }}"
                                    @error('pickup_location')  class="error-boder-color" @enderror
                                    placeholder="e.g., Sokoto" />
                                @error('pickup_location')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for="destination" class="label">Delivery Location *</label>
                                <input type="text" name="destination" id=""
                                    value="{{ old('destination') }}"
                                    @error('destination')  class="error-boder-color" @enderror
                                    placeholder="e.g., Lagos" />
                                @error('destination')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for="service_type" class="label">Service Type *</label>
                                <select name="service_type" id="service_type"
                                    @error('service_type') class="error-boder-color" @enderror>
                                    <option value="">Select service type</option>
                                    <option value="Passenger Transport"
                                        {{ old('service_type') == 'Passenger Transport' ? 'selected' : '' }}>Passenger
                                        Transport</option>
                                    <option value="Freight & Cargo"
                                        {{ old('service_type') == 'Freight & Cargo' ? 'selected' : '' }}>Freight & Cargo
                                    </option>
                                    <option value="Express Delivery"
                                        {{ old('service_type') == 'Express Delivery' ? 'selected' : '' }}>Express Delivery
                                    </option>
                                    <option value="Warehousing & Storage"
                                        {{ old('service_type') == 'Warehousing & Storage' ? 'selected' : '' }}>Warehousing
                                        & Storage</option>
                                    <option value="Cross-Border Logistics"
                                        {{ old('service_type') == 'Cross-Border Logistics' ? 'selected' : '' }}>
                                        Cross-Border Logistics</option>
                                </select>
                                @error('service_type')
                                    <small class="error-text-color error-text-size">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="col-6 col-12-xsmall">
                                <label for="cargo_type" class="label">Cargo Type *</label>
                                <select name="cargo_type" id="cargo_type"
                                    @error('cargo_type') class="error-boder-color" @enderror>
                                    <option value="">Select cargo type</option>
                                    <option value="General Goods"
                                        {{ old('cargo_type') == 'General Goods' ? 'selected' : '' }}>General Goods</option>
                                    <option value="Fragile Items"
                                        {{ old('cargo_type') == 'Fragile Items' ? 'selected' : '' }}>Fragile Items</option>
                                    <option value="Perishable Goods"
                                        {{ old('cargo_type') == 'Perishable Goods' ? 'selected' : '' }}>Perishable Goods
                                    </option>
                                    <option value="Electronics" {{ old('cargo_type') == 'Electronics' ? 'selected' : '' }}>
                                        Electronics</option>
                                    <option value="Heavy Machinery"
                                        {{ old('cargo_type') == 'Heavy Machinery' ? 'selected' : '' }}>Heavy Machinery
                                    </option>
                                </select>
                                @error('cargo_type')
                                    <small class="error-text-color error-text-size">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="col-6 col-12-xsmall">
                                <label for="weight" class="label">Weight (kg) *</label>
                                <input type="number" name="weight" id="weight" value="{{ old('weight') }}"
                                    @error('weight')  class="error-boder-color" @enderror placeholder="0.00" />
                                @error('weight')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label for="dimension" class="label">Dimention (cm)</label>
                                <input type="text" name="dimension" id="dimension" value="{{ old('dimension') }}"
                                    @error('dimension')  class="error-boder-color" @enderror
                                    placeholder="Lenght x Width x Hieght" />
                                @error('dimension')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="form-group">
                        <header>
                            <h3><b><i class="fas fa-calendar" style="margin-right:5px;"></i> Timeline</b>
                            </h3>
                        </header>
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <label for="pickup_date" class="label">Preferred Pickup Date *</label>
                                <input type="date" name="pickup_date" id="pickup_date"
                                    value="{{ old('pickup_date') }}"
                                    @error('pickup_date')  class="error-boder-color" @enderror />
                                @error('pickup_date')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for="delivery_date" class="label">Required Delivery Date </label>
                                <input type="date" name="delivery_date" id=""
                                    value="{{ old('delivery_date') }}"
                                    @error('delivery_date')  class="error-boder-color" @enderror />
                                @error('delivery_date')
                                    <small class="error-text-color error-text-size"> {{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="form-group">
                        <header>
                            <h3><b><i class="fas fa-sticky-note" style="margin-right:5px;"></i> Addition Additional
                                    Information</b>
                            </h3>
                        </header>
                        <div class="col-6 col-12-xsmall">
                            <label for="special_document" class="label">Special Requirements Document</label>
                            <input type="file" name="special_document" id="special_document"
                                value="{{ old('special_document') }}"
                                @error('special_document')  class="error-boder-color" @enderror />
                            @error('special_document')
                                <small class="error-text-color error-text-size"> {{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="col-6 col-12-xsmall">
                            <label for="special_instructions" class="label">Special Requirements or Notes</label>

                            <textarea name="special_instructions" id="special_instructions" value="{{ old('special_instructions') }}"
                                @error('special_instructions')  class="error-boder-color" @enderror id="" cols="30" rows="10"
                                placeholder="Any special handling requirements, packaging needs, or other details..."></textarea>
                            @error('special_instructions')
                                <small class="error-text-color error-text-size"> {{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-6 col-12-medium">
                        <ul class="actions fit">
                            <li><button class="button primary fit"><i class="fa fa-send" style="padding-right: 7px"></i>
                                    Request Quote</button></li>
                        </ul>
                    </div>
            </div>

            </form>
        </div>
    </div>
    </div>

@endsection
