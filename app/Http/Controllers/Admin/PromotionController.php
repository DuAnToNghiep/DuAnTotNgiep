<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTimeZone;

class PromotionController extends Controller
{
    //
    public function index()
    {
        $promotions = Promotion::all(); // Lấy dữ liệu từ model Promotion
        return view('admin.promotion.index', compact('promotions'));
    }

    function add()
    {
        return view('admin.promotion.add');
    }

    function store(Request $request)
    {
        if ($request->input('btn-add')) {
            $request->validate([
                'promotion_name' => 'required',
                'promotion_code' => 'required',
                'promotion_type' => 'required',
                'promotion_value' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'quantity' => 'required|numeric',
                'promotion_conditions' => 'required|numeric',
                'status' => 'required|numeric'
            ],
                [
                    'required' => ':attribute không được để trống',
                    'numeric' => ':attribute phải là một số'
                ],
                [
                    'promotion_name' => 'Tên khuyến mãi',
                    'promotion_code' => 'Mã code',
                    'promotion_type' => 'Loại',
                    'promotion_value' => 'Gía trị khuyến mãi',
                    'start_date' => 'Ngày bắt đầu',
                    'end_date' => 'Ngày kết thúc',
                    'quantity' => 'Số lượng',
                    'promotion_conditions' => 'Điều kiện khuyến mãi',
                    'status' => 'Trạng thái'
                ]
            );

            Promotion::create([
                'promotion_name' => $request->input('promotion_name'),
                'promotion_code' => $request->input('promotion_code'),
                'promotion_type' => $request->input('promotion_type'),
                'promotion_value' => $request->input('promotion_value'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'quantity' => $request->input('quantity'),
                'promotion_conditions' => $request->input('promotion_conditions'),
                'status' => $request->input('status'),
                'create_date' => Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh')),
                'update_date' => Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh'))
            ]);

            return redirect()->route('admin.promotion.list')->with(['status' => 'Đã thêm bản ghi thành công']);
        }
    }

    function list()
    {
        $promotions = Promotion::all();
        return view('admin.promotion.list', compact('promotions'));
    }

    function edit($id)
    {
        $promotions = Promotion::find($id);
        return view('admin.promotion.edit', compact('promotions'));
    }

    function editStore(Request $request, $id)
    {
        if ($request->input('btn-edit')) {
            $request->validate([
                'promotion_name' => 'required',
                'promotion_code' => 'required',
                'promotion_type' => 'required',
                'promotion_value' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'quantity' => 'required|numeric',
                'promotion_conditions' => 'required|numeric',
                'status' => 'required|numeric'
            ],
                [
                    'required' => ':attribute không được để trống',
                    'numeric' => ':attribute phải là một số'
                ],
                [
                    'promotion_name' => 'Tên khuyến mãi',
                    'promotion_code' => 'Mã code',
                    'promotion_type' => 'Loại',
                    'promotion_value' => 'Gía trị khuyến mãi',
                    'start_date' => 'Ngày bắt đầu',
                    'end_date' => 'Ngày kết thúc',
                    'quantity' => 'Số lượng',
                    'promotion_conditions' => 'Điều kiện khuyến mãi',
                    'status' => 'Trạng thái'
                ]
            );
            Promotion::where('id', $id)->update([
                'promotion_name' => $request->input('promotion_name'),
                'promotion_code' => $request->input('promotion_code'),
                'promotion_type' => $request->input('promotion_type'),
                'promotion_value' => $request->input('promotion_value'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'quantity' => $request->input('quantity'),
                'promotion_conditions' => $request->input('promotion_conditions'),
                'status' => $request->input('status'),
                'update_date' => Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh'))
            ]);
            return redirect()->route('admin.promotion.list')->with(['status' => 'Đã Chỉnh sửa bản ghi thành công']);
        }
    }

    function delete($id)
    {
        $promotions = Promotion::find($id);
        $promotions->delete();

        return redirect()->route('promotion.index')->with(['status' => 'Đã Xóa bản ghi thành công']);
    }
}

