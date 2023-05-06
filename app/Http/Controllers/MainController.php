<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use App\Mail\AccountCreated;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MainController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function proccessed()
    {
        return view('proccessed');
    }

    public function register(Request $request)
    {
        $request->validate([
            'title' => ['required','string', 'in:mr,mrs,miss'],
            'firstname' => ['required','string'],
            'lastname' => ['required','string'],
            'phone' =>['required','string','min:0', 'unique:users,phone'],
            'email' => ['required', 'unique:users,email', 'email', 'max:255', 'confirmed'],
            'company' =>['required','string','max:255'],
            'designation' =>['required','string','max:255'],
        ]);

        try {

            // Prep
            $code = rand(100, 9999);
            $input = $request->all();
            $input['code'] = $code;
            $input['name'] = $input['firstname'] . ' ' . $input['lastname'];

            // Create user
            $user = User::firstOrCreate([
                'email' => $input['email'],
                'phone' => $input['phone']
            ], $input);

            // Generate Qr
            $path = public_path('qrcode/' . $user->email);
            if(!file_exists($path)) mkdir($path, 0777, true);

            $filename = $path . '/file.png';
            QrCode::backgroundColor(255, 255, 0)->color(255, 0, 127)
            ->format('png')->size(350)->generate(strval($code), $filename);

            // Send email
            Mail::to($user)->send(new AccountCreated($user, $filename));

            //
            return redirect('proccessed')->with('success', true);
        }
        catch (\Throwable $th) {
            return redirect('proccessed')->with('error', true);
        }
    }
}
