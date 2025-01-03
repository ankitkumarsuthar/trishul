<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        // Validate the language
        if (in_array($lang, ['en', 'de'])) {
            App::setLocale($lang);  // Set the application's language            
            Session::put('locale', $lang);  // Optionally store it in session
        }

        return redirect()->back();  // Redirect back to the previous page
    }
}
