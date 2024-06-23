<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductDetail;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductDetailController extends Controller
{
    public function index()
    {
        $productDetails = ProductDetail::all(); // Lấy dữ liệu từ model ProductDetail
        return view('admin.productDetail.index', compact('productDetails'));
    }

    public function create()
    {
        $categories = Category::all();
        $products = Product::all();
        $colors = Color::all();

        return view('admin.productDetail.create', compact('categories', 'products', 'colors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'product_id' => 'required',
            'import_price_product_detail' => 'required',
            'price_product_detail' => 'required',
            'color_id' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'note' => 'required',
            'slug' => 'required',
            'status' => 'required'
        ],
            [
                'required' => ':attribute không được để trống'
            ],
            [
                'category_id' => 'Danh mục',
                'product_id' => 'Sản phẩm',
                'import_price_product_detail' => 'Nhập giá chi tiết sản phẩm',
                'price_product_detail' => 'Giá chi tiết sản phẩm',
                'color_id' => 'Màu sắc',
                'description' => 'Mô tả ngắn',
                'quantity' => 'Số lượng',
                'note' => 'Lưu ý',
                'slug' => 'Slug',
                'status' => 'Trạng thái'
            ]);

        ProductDetail::create([
            'category_id' => $request->input('category_id'),
            'product_id' => $request->input('product_id'),
            'import_price_product_detail' => $request->input('import_price_product_detail'),
            'price_product_detail' => $request->input('price_product_detail'),
            'color_id' => $request->input('color_id'),
            'description' => $request->input('description'),
            'quantity' => $request->input('quantity'),
            'note' => $request->input('note'),
            'create_date' => Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh')),
            'update_date' => Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh')),
            'slug' => Str::slug($request->input('slug')),
            'status' => $request->input('status')
        ]);

        return redirect()->route('productDetail.index')->with('status', 'Đã thêm bản ghi thành công');
    }

    public function edit(ProductDetail $productDetail)
    {
        $categories = Category::all();
        $products = Product::all();
        $colors = Color::all();
        return view('admin.productDetail.edit', compact('productDetail', 'categories', 'products', 'colors'));
    }
    public function show($id)
    {
        $productDetail = ProductDetail::findOrFail($id); // Lấy chi tiết sản phẩm theo $id
        return view('admin.productDetail.show', compact('productDetail'));
    }

    public function update(Request $request, ProductDetail $productDetail)
    {
        $request->validate([
            'category_id' => 'required',
            'product_id' => 'required',
            'import_price_product_detail' => 'required',
            'price_product_detail' => 'required',
            'color_id' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'note' => 'required',
            'slug' => 'required',
            'status' => 'required'
        ],
            [
                'required' => ':attribute không được để trống'
            ],
            [
                'category_id' => 'Danh mục',
                'product_id' => 'Sản phẩm',
                'import_price_product_detail' => 'Nhập giá chi tiết sản phẩm',
                'price_product_detail' => 'Giá chi tiết sản phẩm',
                'color_id' => 'Màu sắc',
                'description' => 'Mô tả ngắn',
                'quantity' => 'Số lượng',
                'note' => 'Lưu ý',
                'slug' => 'Slug',
                'status' => 'Trạng thái'
            ]);

        $productDetail->update([
            'category_id' => $request->input('category_id'),
            'product_id' => $request->input('product_id'),
            'import_price_product_detail' => $request->input('import_price_product_detail'),
            'price_product_detail' => $request->input('price_product_detail'),
            'color_id' => $request->input('color_id'),
            'description' => $request->input('description'),
            'quantity' => $request->input('quantity'),
            'note' => $request->input('note'),
            'update_date' => Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh')),
            'slug' => Str::slug($request->input('slug')),
            'status' => $request->input('status')
        ]);

        return redirect()->route('productDetail.index')->with('status', 'Đã chỉnh sửa bản ghi thành công');
    }

    public function destroy(ProductDetail $productDetail)
    {
        $productDetail->delete();
        return redirect()->route('productDetail.index')->with('status', 'Đã xóa bản ghi thành công');
    }
}
