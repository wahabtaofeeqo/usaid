<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Mail;
use App\Mail\AccountCreated;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Inertia\Inertia;
use Inertia\Response;

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
            'division' => ['required','string'],
            'firstname' => ['required','string'],
            'lastname' => ['required','string'],
            'shirt' =>['required','string'],
            'email' => ['required', 'email', 'max:255'],
            'jersey' =>['required','string'],
            'allegy' =>['required','string'],
            'diet' => 'required|string',
            'location' => 'required|string'
        ]);

        try {

            // Prep
            $code = User::genCode();
            $input = $request->all();
            $input['code'] = $code;
            $input['name'] = $input['firstname'] . ' ' . $input['lastname'];

            // Create user
            $user = User::where([
                'email' => $input['email']])->first();

            if($user) {
                $user->fill($input);
            }
            else {
                $user = User::create($input);
            }

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
        catch (\Exception $e) {
            return redirect('proccessed')->with('error', true);
        }
    }

    public function home()
    {
        return view('dashboard', [
            'users' => User::latest()->paginate(10),
        ]);
    }
}
