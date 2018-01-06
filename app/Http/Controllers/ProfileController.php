<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserManagementFormRequest;

class ProfileController extends Controller
{
	public function index(Request $request)
    {
    	$user = $request->user();
    	return view('profile.index', compact('user'));
    }

    public function edit(Request $request)
    {
    	$user = $request->user();
    	return view('profile.edit', compact('user'));
    }

    public function update(UserManagementFormRequest $request)
    {
    	$request->user()->update($request->all());

        return redirect('/profile')
            ->withSuccess('User info updated successfully!');
    }
}
