<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the payments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payments = Payment::orderBy('id', 'DESC')
                           ->paginate(10);

        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new payment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payments.create');
    }

    /**
     * Store a newly created payment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bill_id' => 'required|integer',
            'date_bill' => 'required|date',
            'payment_method' => 'required|string',
            'total_amount' => 'required|integer',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index')
                         ->with('success', 'Payment created successfully.');
    }

    /**
     * Display the specified payment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payment = Payment::findOrFail($id);

        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified payment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);

        return view('payments.edit', compact('payment'));
    }

    /**
     * Update the specified payment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bill_id' => 'required|integer',
            'date_bill' => 'required|date',
            'payment_method' => 'required|string',
            'total_amount' => 'required|integer',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $payment = Payment::findOrFail($id);
        $payment->update($request->all());

        return redirect()->route('payments.index')
                         ->with('success', 'Payment updated successfully.');
    }

    /**
     * Remove the specified payment from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('payments.index')
                         ->with('success', 'Payment deleted successfully.');
    }

    /**
     * Search payments by bill_id.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->get('search');

        $payments = Payment::where('bill_id', 'like', '%' . $search . '%')
                           ->orderBy('id', 'DESC')
                           ->paginate(10);

        return view('payments.index', compact('payments'));
    }
}
