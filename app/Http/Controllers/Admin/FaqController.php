<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Faq;

class FaqController extends Controller {
    
    public function index() {

        $faqs = Faq::all();

        return view('admin.faqs.index')
            ->with('faqs', $faqs);

    }

    public function create() {

        return view('admin.faqs.create');

    }

    public function save(Request $request) {

        $faq = new Faq;

        $faq->title = $request->title;

        $faq->description = $request->description;

        $faq->save();

        return redirect()->back()->with('success', 'FAQ Saved Successfully!');

    }

    public function edit($id) {

        $faq = Faq::find($id);

        return view('admin.faqs.edit')
            ->with('faq', $faq);

    }

    public function update(Request $request) {

        $faq = Faq::find($request->faq_id);

        $faq->title = $request->title;

        $faq->description = $request->description;

        $faq->save();

        return redirect()->route('adminfaqindex')->with('success', 'FAQ Updated Successfully!');

    }

    public function destroy($id) {

        $faq = Faq::find($id);

        $faq->delete();

        return redirect()->back()->with('success', 'FAQ Deleted Successfully!');

    }

}
