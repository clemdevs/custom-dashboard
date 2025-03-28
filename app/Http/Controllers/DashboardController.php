<?php

namespace App\Http\Controllers;

use App\Models\Button;
use Illuminate\Http\Request;
use App\Http\Requests\ButtonRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $buttons = Button::all();
        return view('dashboard', compact('buttons'));
    }

    public function edit($id)
    {
        $button = Button::findOrFail($id);
        return view('configure', compact('button'));
    }

    public function update(ButtonRequest $request, $id)
    {

        $button = Button::findOrFail($id);

        $button->update($request->validated());

        return redirect()->route('dashboard')->with('success', 'Button updated successfully.');
    }
}
