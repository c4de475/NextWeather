<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use Illuminate\Http\Request;

class WeatherAdd extends Controller
{
    public function create() {
        return view('search.create');
    }

    public function store() {
        $location = request()->validate([
            'lat' => 'required',
            'lon' => 'required',
            'user_id' => 'required',
        ]);

        Weather::create($location);

        return redirect('/favorites');
    }

    public function destroy($id) {
        $location = Weather::find($id);
        $location->delete();
        return redirect('/favorites');
    }
}
