<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    /**
     * Display a listing of the orders.
     */
    public function index()
    {
        // Ambil data orders dengan relasi user dan course, urutkan berdasarkan waktu pembelian terbaru
        $orders = Order::with(['user', 'course'])
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Menampilkan 10 data per halaman

        return view('admin.history.index', compact('orders'));
    }
}
