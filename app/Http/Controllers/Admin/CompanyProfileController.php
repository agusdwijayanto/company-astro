<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $profile = CompanyProfile::first();
        return view('admin.company_profile.index', compact('profile'));
    }

    public function create()
    {
        return view('admin.company_profile.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profiles'), $filename);
            $validated['logo'] = 'uploads/profiles/' . $filename;
        }

        CompanyProfile::create($validated);
        return redirect()->route('admin.company-profile.index')->with('success', 'Profil perusahaan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $profile = CompanyProfile::findOrFail($id);
        return view('admin.company_profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = CompanyProfile::findOrFail($id);

        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            if ($profile->logo && file_exists(public_path($profile->logo))) {
                unlink(public_path($profile->logo));
            }
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profiles'), $filename);
            $validated['logo'] = 'uploads/profiles/' . $filename;
        }

        $profile->update($validated);
        return redirect()->route('admin.company-profile.index')->with('success', 'Profil perusahaan berhasil diupdate!');
    }

    public function destroy($id)
    {
        $profile = CompanyProfile::findOrFail($id);
        if ($profile->logo && file_exists(public_path($profile->logo))) {
            unlink(public_path($profile->logo));
        }
        $profile->delete();
        return redirect()->route('admin.company-profile.index')->with('success', 'Profil perusahaan berhasil dihapus!');
    }
}