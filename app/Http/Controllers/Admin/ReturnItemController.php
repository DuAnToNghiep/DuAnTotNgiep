<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;



use App\Models\Bills;
use App\Models\ProductDetail;
use App\Models\ReturnItem;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTimeZone;

class ReturnItemController extends Controller
{
    //

    public function index()
    {
        $returnItems = ReturnItem::all();
        return view('admin.returnItem.index', compact('returnItems'));
    }

    function add()
    {
        $bills = Bills::all();
        $product_details = ProductDetail::all();
        $users = User::all();
        return view('admin.returnItem.add', compact('bills', 'product_details', 'users'));
    }

    function store(Request $request)
    {
        if ($request->input('btn-add')) {
            $request->validate([
                'bill_id' => 'required',
                'user_id' => 'required',
                'product_detail_id' => 'required',
                'return_date' => 'required',
                'reason' => 'required',
                'status' => 'required',
            ],
                [
                    'required' => ':attribute không được để trống'
                ],
                [
                    'bill_id' => 'Hóa đơn',
                    'user_id' => 'Người trả hàng',
                    'product_detail_id' => 'Chi tiết sản phẩm',
                    'return_date' => 'Ngày trả',
                    'reason' => 'Lý do',
                    'status' => 'Trạng thái'
                ]

            );
            ReturnItem::create([
                'bill_id' => $request->input('bill_id'),
                'user_id' => $request->input('user_id'),
                'product_detail_id' => $request->input('product_detail_id'),
                'return_date' => $request->input('return_date'),
                'reason' => $request->input('reason'),
                'status' => $request->input('status'),
                'create_date' => Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh')),
                'update_date' => Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh'))
            ]);
            return redirect()->route('admin.returnItem.list')->with(['status' => 'Thêm bản ghi thành công']);
        }
    }

    function list()
    {
        $returnItems = ReturnItem::all();
        return view('admin.returnItem.list', compact('returnItems'));
    }

    function edit($id)
    {
        $bills = Bills::all();
        $product_details = ProductDetail::all();
        $users = User::all();
        $returnItem = ReturnItem::find($id);
        return view('admin.returnItem.edit', compact('returnItem', 'bills', 'product_details', 'users'));
    }

    function editStore(Request $request, $id)
    {
        if ($request->input('btn-edit')) {
            $request->validate([
                'bill_id' => 'required',
                'user_id' => 'required',
                'product_detail_id' => 'required',
                'return_date' => 'required',
                'reason' => 'required',
                'status' => 'required',
            ],
                [
                    'required' => ':attribute không được để trống'
                ],
                [
                    'bill_id' => 'Hóa đơn',
                    'user_id' => 'Người trả hàng',
                    'product_detail_id' => 'Chi tiết sản phẩm',
                    'return_date' => 'Ngày trả',
                    'reason' => 'Lý do',
                    'status' => 'Trạng thái'
                ]

            );
            ReturnItem::where('id', $id)->update([
                'bill_id' => $request->input('bill_id'),
                'user_id' => $request->input('user_id'),
                'product_detail_id' => $request->input('product_detail_id'),
                'return_date' => $request->input('return_date'),
                'reason' => $request->input('reason'),
                'status' => $request->input('status'),
                'update_date' => Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh'))
            ]);
            return redirect()->route('admin.returnItem.list')->with(['status' => 'Chỉnh sửa bản ghi thành công']);
        }
    }

    function delete($id)
    {
        $returnItem = ReturnItem::find($id);
        $returnItem->delete();
        return redirect()->route('admin.returnItem.list')->with(['status' => 'Xóa bản ghi thành công']);
    }
}

