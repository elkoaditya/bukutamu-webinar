<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function zoom(){
        // get link zoom from setting
        $setting = Setting::where('name', 'link_zoom')->first();
        if (!$setting) {
            return view('waitzoom');
        }

        return redirect($setting->value);
    }
}
