@extends('layout.app')

@section('title', 'Quotes')

@section('page-content')
    <div id="heading">
        <h1>'' Quotes</h1>
    </div>

    <div class="wrapper" id="main">
        <div class="inner">
            <div class="content">
                <h2><b>Quotes List</b></h2>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Quote Id</th>
                                <th>Customer</th>
                                <th>Item</th>
                                <th>status</th>
                                <th>date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quotes as $quote)
                                <tr>
                                    <td>{{ $quote->id }}</td>
                                    <td>{{ $quote->customer_name }}</td>
                                    <td>{{ $quote->pickup_location }}</td>
                                    <td>{{ date('D d M, Y', strtotime($quote->created_at)) }} </td>
                                    <td>{{ $quote->status }}</td>
                                    <td class="actions">
                                        <a href="{{ route('quotes.show', $quote) }}" class="button small "><i                                                class="fas fa-eye"> </i> <span>View</span></a>
                                    </td>
                                </tr>
                            @endforeach

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
    </div>
@endsection
