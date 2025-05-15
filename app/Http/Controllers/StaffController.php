<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::query()->latest('id')->paginate(10);
        return view('staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'staff_name' => 'required|string|max:255',
            'staff_phone' => 'required|digits_between:9,11|unique:staff,staff_phone',
            'email' => 'required|email|unique:staff,email',
            'role_name' => 'required|string|max:255',
        ]);
        Staff::create($validated);

        return redirect()->route('staffs.index')->with('success', 'Thêm nhân viên thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staff = Staff::findOrFail($id);
    return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $staff = Staff::findOrFail($id);

    $validated = $request->validate([
        'staff_name'   => 'required|string|max:255',
        'staff_phone'  => 'required|digits_between:9,11|unique:staff,staff_phone,' . $staff->id,
        'email'        => 'required|email|unique:staff,email,' . $staff->id,
        'role_name'    => 'required|string|max:255',
    ]);

    $staff->update($validated);

    return redirect()->route('staffs.index')->with('success', 'Cập nhật nhân viên thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return redirect()->route('staffs.index')->with('success', 'Xóa nhân viên thành công.');
    }
}
