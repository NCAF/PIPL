<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'id_user' => 'required|exists:users,id',
                'id_destinasi' => 'required|exists:destinasi,id',
            ]);

            // Buat pesanan baru
            $order = new Order();
            $order->id_user = $validatedData['id_user'];
            $order->id_destinasi = $validatedData['id_destinasi'];
            $order->save();

            return redirect()->back()->with('success', 'Order successfully created.');
        } catch (QueryException $e) {
            // Tangani kesalahan basis data
            return redirect()->back()->with('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Tangani kesalahan umum
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function userOrders()
    {
        $user = Auth::user();
        $orders = Order::where('id_user', $user->id)->get();

        return view('pages.order', compact('orders'));
    }

    public function uploadPaymentProof(Request $request, $id)
    {
        try {
            $request->validate([
                'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $order = Order::findOrFail($id);

            $imageName = time() . '.' . $request->payment_proof->extension();
            $request->payment_proof->storeAs('public/payment_proofs', $imageName);

            $order->payment_proof = 'payment_proofs/' . $imageName;
            $order->status = 'pending'; // Ubah status pesanan jika diperlukan

            $order->save();

            return redirect()->back()->with('success', 'Payment proof uploaded successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function adminOrders()
{
    $orders = Order::all();
    
    return view('pages.admin_orders', compact('orders'));
}

}
