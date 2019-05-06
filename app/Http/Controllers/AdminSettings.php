<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;

class AdminSettings extends Controller
{
    public function settings()
    {
        return view('settings');
    }

    public function adminSetup(AdminRequest $request)
    {
        $data = [
            "name" => $request->get('name'),
            "email" => $request->get('email'),
        ];

        if ($request->filled('new_password')) {
            $data['password'] = bcrypt($request->get('new_password'));
        }

        auth()->user()->update($data);

        return redirect("home");
    }
}
