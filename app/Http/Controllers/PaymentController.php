<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Hiển thị danh sách các tài nguyên.
     */
    public function index()
    {
        $payments = Payment::all();
        return response()->json($payments);
    }

    /**
     * Hiển thị form tạo mới tài nguyên.
     */
    public function create()
    {
        // Không cần thiết cho API. Dùng cho việc trả về view để tạo mới (nếu là ứng dụng web).
    }

    /**
     * Lưu trữ tài nguyên mới vào kho.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bill_id' => 'required|integer',
            'date_bill' => 'required|date',
            'payment_method' => 'required|string',
            'cash' => 'required|integer',
            'transfer' => 'required|integer',
            'transfer_vnp' => 'required|integer',
            'total_amount' => 'required|integer',
            'description' => 'required|string',
            'status' => 'required|string'
        ]);

        $payment = Payment::create($request->all());
        return response()->json($payment, 201);
    }

    /**
     * Hiển thị tài nguyên cụ thể.
     */
    public function show($id)
    {
        $payment = Payment::findOrFail($id);
        return response()->json($payment);
    }

    /**
     * Hiển thị form chỉnh sửa tài nguyên cụ thể.
     */
    public function edit($id)
    {
        // Không cần thiết cho API. Dùng cho việc trả về view để chỉnh sửa (nếu là ứng dụng web).
    }

    

    /**
     * Cập nhật tài nguyên cụ thể trong kho.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bill_id' => 'integer',
            'date_bill' => 'date',
            'payment_method' => 'string',
            'cash' => 'integer',
            'transfer' => 'integer',
            'transfer_vnp' => 'integer',
            'total_amount' => 'integer',
            'description' => 'string',
            'status' => 'string'
        ]);

        $payment = Payment::findOrFail($id);
        $payment->update($request->all());
        return response()->json($payment, 200);
    }

    /**
     * Xóa tài nguyên cụ thể khỏi kho.
     */
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return response()->json(null, 204);
    }
}
