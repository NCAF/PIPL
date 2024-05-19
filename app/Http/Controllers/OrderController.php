<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_user' => 'required|exists:users,id',
                'id_destinasi' => 'required|exists:destinasi,id',
                'date' => 'required|date',
                'time' => 'required|date_format:H:i',
            ]);

            // Buat pesanan baru
            $order = new Order();
            $order->id_user = $request->id_user;
            $order->id_destinasi = $request->id_destinasi;
            $order->date = $request->date;
            $order->time = $request->time;
            $order->save();

            return redirect()->back()->with('success', 'Order successfully created.');
        } catch (QueryException $e) {
            // Tangani kesalahan basis data
            // Misalnya, Anda dapat mencetak pesan kesalahan atau mengembalikan respons dengan pesan kesalahan yang sesuai
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            // Misalnya, Anda dapat mencetak pesan kesalahan atau mengembalikan respons dengan pesan kesalahan yang sesuai
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
