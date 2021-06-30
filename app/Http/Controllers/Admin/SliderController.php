<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'desc' => ['required', 'string','max:450'],
            'button.text' => ['required', 'string', 'max:70'],
            'button.link' => ['required', 'string', 'max:256'],
            'file' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $img = $request->file('file');
        $imageName = time() . '.' . $img->extension();
        $img->move(public_path(Slider::IMAGE_PATH), $imageName);
        $request->merge(['img' => $imageName]);
        Slider::create($request->only([
            'img', 'title', 'desc', 'button'
        ]));
        return redirect()->route('admin.slider.index')
            ->with('success', __('Action completed successfully'));
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'desc' => ['required', 'string','max:450'],
            'button.text' => ['required', 'string', 'max:70'],
            'button.link' => ['required', 'string', 'max:256'],
            'file' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        if ($request->hasFile('file')) {
            $slider->deleteImg();
            $img = $request->file('file');
            $slider->img = time() . '.' . $img->extension();
            $img->move(public_path(Slider::IMAGE_PATH), $slider->img);
        }
        $slider->title = $request['title'];
        $slider->desc = $request['desc'];
        $button = $slider->button;

        $button['text'] = $request->input('button.text');
        $button['link'] = $request->input('button.link');

        $slider->button = $button;

        $slider->save();
        return redirect()->route('admin.slider.index')
            ->with('success', __('Action completed successfully'));
    }


    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        try {
            $slider->deleteImg();
            $slider->delete();
        } catch (\Exception $exception) {
            return back()
                ->with('error', $exception->getMessage());
        }
        return redirect()->route('admin.slider.index')
            ->with('success', __('Action completed successfully'));
    }
}
