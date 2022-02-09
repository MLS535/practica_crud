<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    //
    public function view()
    {
        return view('post.index');
    }

    /**
     * Change language
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLanguage(Request $request)
    {
        $validated = $request->validate([
            'language' => 'required',
        ]);

        Session::put('language', $request->language);

        return redirect()->back();
    }

}
