<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use function app\Helper\successMessage;
use function app\Helper\updateMessage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('manager.settings.index', compact('settings'));
    }

    public function update(SettingRequest $request, $id)
    {

        $input = $request->all();

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $input['logo'] = $request->file('logo')->store('/', 'uploads');
        } else {
            $input = Arr::except($input, array('logo'));
        }
        $new = Setting::first();
        $new->update($input);
        $new->save();
        return updateMessage();

    }
}
