<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public $page = null;

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        try {
            $this->page = page(\request()->route()->getActionMethod());
            if (!$this->page->exists) abort(404);
        } catch (\Throwable $exception) {
            $this->page = new Page();
        }
        view()->share([
            'page' => $this->page
        ]);
    }

    public function __call($method, $parameters)
    {
        return view('admin.pages.index');
    }

    public function contacts(Request $request)
    {
        $contacts = Contact::firstOrNew();
        if ($request->method() === "PUT") {
            $contacts->email = $request->input('email');
            $contacts->phone = $request->input('phone');
            $contacts->address = $request->input('address');
            $schedule = $contacts->schedule;
            $social = $contacts->social;
            $coordinates = $contacts->coordinates;
            $schedule['from'] = $request->input('schedule.from');
            $schedule['to'] = $request->input('schedule.to');
            $contacts->schedule = $schedule;
            foreach ($request->input('social') as $key => $value) {
                $name = key($value);
                $social[$key][$name] = $value[$name];
            }
            $contacts->social = $social;
            if ($request->has('coordinates')) {
                $coordinates['x'] = $request->input('coordinates.x');
                $coordinates['y'] = $request->input('coordinates.y');
                $contacts->coordinates = $coordinates;
            }
            $contacts->save();
            return redirect()->route('admin.pages.contacts')
                ->with('success', __('Action completed successfully'));
        }
        return view('admin.pages.contacts', compact('contacts'));
    }

    /**
     * @param PageRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PageRequest $request, int $id)
    {
        $page = Page::findOrFail($id);
        $validated = $request->validated()['page'];
        $validated['image'] = $page->image;
        if ($request->hasFile('page.file')) {
            $path = "img/pages/$page->name";
            if (!is_dir($path)) mkdir($path);
            $page->deleteImg();
            $img = $request->file('page.file');
            $name = time() . '.' . $img->extension();
            $validated['image'] = "$path/$name";
            $img->move(public_path($path), $name);
        }
        $page->update([
            'title' => $validated['title'],
            'image' => $validated['image'],
            'body' => $validated['body']
        ]);
        return redirect()->route("admin.pages.$page->name")
            ->with('success', __('Action completed successfully'));
    }
}
