@extends('layouts.vendor')
@section('title', 'Sutra Accessories | Order List')
@section('scripts')
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        $("input[name=toggle]").change(function() {
            var mode = $(this).prop("checked");
            var id = $(this).val();
            $.ajax({
                url: "{{ route('seller-order.status') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    mode: mode,
                    id: id,
                },
                success: function(response) {
                    if (response.status) {
                        alert(response.msg);
                    } else {
                        alert('Please try again!');
                    }

                }
            });
        });
    </script> --}}
@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="col-lg-12">
            @include('vendor.section.notify')
        </div>
        {{-- BreadCrumb  --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                {{-- <nav aria-label="breadcrumb"> --}}
                <ul class="breadcrumb float-left">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="reply">Order</a></li>
                </ul>
                <p class="float-right" style="margin: 10px">Total Orders : {{ \App\Models\Order::count() }}</p>
                {{-- </nav> --}}
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="margin-top: 8px; font-weight: bold;">Orders</h3>
                        {{-- <a href="{{ route('seller-order.create') }}" class="btn btn-success float-right"
                            style="margin-bottom: 0px"><i class="fa fa-plus" style="font-size: 12px">
                                Add Order
                            </i>
                        </a> --}}
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">S.N.</th>
                                    <th>Order Number</th>
                                    <th>User</th>
                                    <th>Payment Method</th>
                                    <th>Payment Status</th>
                                    <th>Sub-total</th>
                                    <th>Total</th>
                                    <th style="width: 90px">Condition</th>
                                    <th style="width: 120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($order_data))
                                    @foreach ($order_data as $orders => $order)
                                        <tr>
                                            <td>{{ $orders + 1 }}</td>
                                            <td>{{ $order->order_number }}</td>
                                            <td>{{ \App\Models\User::where('id', $order->user_id)->value('full_name') }}
                                            </td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>
                                                @if (@$order->payment_status == 'paid')
                                                    <span class="badge bg-success">{{ ucfirst($order->payment_status) }}
                                                    </span>
                                                @elseif(@$order->payment_status == 'unpaid')
                                                    <span class="badge bg-danger">{{ ucfirst($order->payment_status) }}
                                                    </span>
                                                @elseif(@$order->payment_status == 'redeem')
                                                    <span class="badge bg-warning">{{ ucfirst($order->payment_status) }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>Rs {{ number_format($order->sub_total, 2) }}</td>
                                            <td>Rs {{ number_format($order->total_amount, 2) }}</td>
                                            <td>
                                                @if (@$order->condition == 'delivered')
                                                    <span class="badge bg-success">{{ ucfirst($order->condition) }}
                                                    </span>
                                                @elseif(@$order->condition == 'shipped')
                                                    <span class="badge bg-primary">{{ ucfirst($order->condition) }}
                                                    </span>
                                                @elseif(@$order->condition == 'out for delivery')
                                                    <span class="badge bg-info">{{ ucfirst($order->condition) }}
                                                    </span>
                                                @elseif(@$order->condition == 'processing')
                                                    <span class="badge bg-yellow">{{ ucfirst($order->condition) }}
                                                    </span>
                                                @elseif(@$order->condition == 'cancelled')
                                                    <span class="badge bg-danger">{{ ucfirst($order->condition) }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('seller-order.show', $order->id) }}"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-eye">

                                                    </i>
                                                </a>
                                                {{-- <a href="#" class="btn btn-primary" title="download">
                                                    <i class="fa fa-download">

                                                    </i>
                                                </a> --}}
                                                {{-- <a href="{{ route('seller-order.edit', $order->id) }}" class="btn btn-success">
                                                    <i class="fa fa-pen">

                                                    </i>
                                                </a> --}}
                                                <form action="{{ route('seller-order.destroy', $order->id) }}"
                                                    method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger"
                                                        onclick="return confirm('Do you want to delete this order?');"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
