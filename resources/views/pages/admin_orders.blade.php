@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Orders</h1>
        
        @if ($orders->isEmpty())
            <p>No orders found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Destination</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->destination->name }}</td>
                            <td>{{ $order->date }}</td>
                            <td>
                                <form action="{{ route('admin.order.changeStatus', ['id' => $order->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" class="form-control" onchange="this.form.submit()">
                                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="confirmed" {{ $order->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                        <option value="rejected" {{ $order->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                @if ($order->payment_proof)
                                    <a href="{{ asset('storage/' . $order->payment_proof) }}" target="_blank">View Proof</a>
                                @else
                                    No proof uploaded
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
