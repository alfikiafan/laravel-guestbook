<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Faker\Factory;

class GuestbookController extends Controller
{
    /**
     * Menampilkan halaman formulir pengisian tamu.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('guestbook.form');
    }

    /**
     * Menangani pengiriman formulir pengisian tamu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitForm(Request $request)
    {
        // Validasi input pengunjung
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    
        // Jika validasi gagal, kembalikan pengunjung ke halaman formulir dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Simpan pesan dalam array
        $guestbookData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];
    
        // Tambahkan data buku tamu ke dalam session
        $guestbook = session('guestbook', []);
        $guestbook[] = $guestbookData;
        session(['guestbook' => $guestbook]);

        // Simpan data buku tamu dalam sesi
        session(['guestbookData' => $guestbookData]);

        // Redirect ke halaman guestbook-result
        return redirect()->route('guestbook.result');
    }

    /**
     * Menampilkan halaman tampilan pesan.
     *
     * @return \Illuminate\View\View
     */
    public function viewGuestbook()
    {
        // Ambil data buku tamu dari session jika ada
        $guestbookData = session('guestbook', []);

        // Generate fake guestbook data using Faker
        $faker = Factory::create();
        $fakeGuestbookData = [];

        for ($i = 0; $i < 10; $i++) {
            $fakeGuestbookData[] = [
                'name' => $faker->name(),
                'email' => $faker->email(),
                'message' => ucwords($faker->catchPhrase .' '.$faker->bs),
            ];
        }

        // Merge the fake guestbook data with the existing guestbook data
        $mergedGuestbookData = array_merge($guestbookData, $fakeGuestbookData);

        return view('guestbook.view', compact('mergedGuestbookData'));
    }

    /**
     * Menampilkan halaman hasil buku tamu.
     *
     * @return \Illuminate\View\View
     */
    public function viewGuestbookResult()
    {
        $guestbookData = session('guestbookData');

        return view('guestbook.result', compact('guestbookData'));
    }
}
