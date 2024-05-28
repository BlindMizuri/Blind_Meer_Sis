<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileSetting;

class ProfileSettingController extends Controller
{
    public function index()
    {
        $profileSettings = ProfileSetting::all();
        return view('profile_settings.index', compact('profileSettings'));
    }

    public function create()
    {
        return view('profile_settings.create', [
            'action' => 'Create',
            'formAction' => route('profile-settings.store'),
            'method' => 'POST'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Student_id' => 'required|string|max:255|unique:profile_settings,Student_id',
            'password' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone_number' => 'nullable|string|max:255',
            'second_phone_number' => 'nullable|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        ProfileSetting::create($data);

        return redirect()->route('profile-settings.index')->with('success', 'Profile setting created successfully.');
    }

    public function show($id)
    {
        $setting = ProfileSetting::findOrFail($id);
        return view('profile_settings.show', compact('setting'));
    }

    public function edit($id)
    {
        $setting = ProfileSetting::findOrFail($id);
        return view('profile_settings.edit', [
            'action' => 'Edit',
            'formAction' => route('profile-settings.update', $setting->id),
            'method' => 'PUT',
            'setting' => $setting
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone_number' => 'nullable|string|max:255',
            'second_phone_number' => 'nullable|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $setting = ProfileSetting::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $setting->update($data);

        return redirect()->route('profile-settings.index')->with('success', 'Profile setting updated successfully.');
    }

    public function destroy($id)
    {
        $setting = ProfileSetting::findOrFail($id);
        // Optionally delete the profile picture from storage
        if ($setting->profile_picture) {
            \Storage::disk('public')->delete($setting->profile_picture);
        }
        $setting->delete();

        return redirect()->route('profile-settings.index')->with('success', 'Profile setting deleted successfully.');
    }
}
