<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Faker\Factory;

class GuestbookController extends Controller
{
    public function showForm()
    {
        return view('guestbook.form');
    }

    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $guestbookData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        $guestbook = session('guestbook', []);
        $guestbook[] = $guestbookData;
        session(['guestbook' => $guestbook]);

        session(['guestbookData' => $guestbookData]);

        return redirect()->route('guestbook.result');
    }

    public function viewGuestbook()
    {
        $guestbookData = session('guestbook', []);

        $faker = Factory::create();
        $fakeGuestbookData = [];

        for ($i = 0; $i < 10; $i++) {
            $fakeGuestbookData[] = [
                'name' => $faker->name(),
                'email' => $faker->email(),
                'message' => ucwords($faker->catchPhrase .' '.$faker->bs),
            ];
        }

        $mergedGuestbookData = array_merge($guestbookData, $fakeGuestbookData);

        return view('guestbook.view', compact('mergedGuestbookData'));
    }

    public function viewGuestbookResult()
    {
        $guestbookData = session('guestbookData');

        return view('guestbook.result', compact('guestbookData'));
    }
}
