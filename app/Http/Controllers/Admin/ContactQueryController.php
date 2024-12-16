<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\ContactQuery;

class ContactQueryController extends Controller {
    
    public function index() {

        $queries = ContactQuery::all();

        return view('admin.contact.index')
            ->with('queries', $queries);

    }

    public function destroy($id) {

        $query = ContactQuery::find($id);

        $query->delete();

        return redirect()->back()->with('success', 'Query Removed Successfully!');

    }

}
