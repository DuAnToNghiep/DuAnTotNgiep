<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fabric;

class FabricController extends Controller
{
    public function index()
    {
        $fabrics = Fabric::all();
        return view('admin.fabrics.index', compact('fabrics'));
    }

    public function create()
    {
        return view('admin.fabrics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fabric' => 'required|string',
        ]);

        $nowVietnam = now()->setTimezone('Asia/Ho_Chi_Minh');

        Fabric::create([
            'fabric' => $request->fabric,
            'create_date' => $nowVietnam,
            'update_date' => $nowVietnam,
        ]);

        return redirect()->route('fabrics.index')
            ->with('success', 'Fabric created successfully.');
    }

    public function edit($id)
    {
        $fabric = Fabric::findOrFail($id);
        return view('admin.fabrics.edit', compact('fabric'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fabric' => 'required|string',
        ]);

        $nowVietnam = now()->setTimezone('Asia/Ho_Chi_Minh');
        $fabric = Fabric::findOrFail($id);
        $fabric->update([
            'fabric' => $request->fabric,
            'update_date' => $nowVietnam,
        ]);

        return redirect()->route('fabrics.index')
            ->with('success', 'Fabric updated successfully.');
    }

    public function destroy($id)
    {
        $fabric = Fabric::findOrFail($id);
        $fabric->delete();

        return redirect()->route('fabrics.index')
            ->with('success', 'Fabric deleted successfully.');
    }
}
