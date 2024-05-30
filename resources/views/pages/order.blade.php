@extends('layouts.app')

@section('main')
<div class="container">
    <h1>My Orders</h1>

    @if ($orders->isEmpty())
    <p>You have not placed any orders yet.</p>
    @else
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Status</th>
                <th>Payment Proof</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->date }}</td>
                <td>{{ $order->status }}</td>
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

    <td>
        @if ($order->status == 'waiting_confirmation')
        @if ($order->payment_proof)
        <p>Proof Uploaded</p>
        @else
        <form action="{{ route('order.uploadPaymentProof', ['id' => $order->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="payment_proof" class="form-control-file">
            <button type="submit" class="btn btn-sm btn-primary mt-1">Upload Proof</button>
            @error('payment_proof')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </form>
        @endif
        @else
        Status: {{ $order->status }}
        @endif
    </td>

</div>
@endsection