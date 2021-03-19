<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Competitor;
use App\Models\Question;
use App\Models\QuestionHistory;
use App\Models\QuestionHistoryAnswer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'phone' => ['required', 'string'],

        ],
            [
                'name.required' => __('Ad boş qala bilməz.'),
                'surname.required' => __('Soyad boş qala bilməz.'),
                'phone.required' => __('Mobil nömrə boş qala bilməz.'),

            ]
        );
        $phone = str_replace('+','', $request->phone);
        $phone = str_replace('-','', $phone);
        $phone = str_replace('(','', $phone);
        $phone = str_replace(')','', $phone);
        $item = new Competitor();
        $item->phone = $phone;
        $item->name = $request->name;
        $item->surname = $request->surname;
        $item->save();
        return view('result');

    }

}
