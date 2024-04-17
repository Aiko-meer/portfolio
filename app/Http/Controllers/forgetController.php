<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Assuming your user model is named User
use RealRashid\SweetAlert\Facades\Alert;

class forgetController extends Controller
{
    //
    public function index()
    {
        return view('login.forgot-password');
    }

   

public function auth(Request $request)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    $credentials = $request->only('email');

    // Custom authentication logic to check if a user with the provided email exists
    $user = User::where('email', $credentials['email'])->first();
    $otpcode = $this->generateOTP();
    if ($user) {
        Auth::login($user);

         // Store OTP and email in session
         session(['otp' => $otpcode]);
         session(['email' => $credentials['email']]);

        $user->update(['otp' => $otpcode]);
        $request->session()->flash('alert', ['type' => 'success', 'message' => 'Account Found Please Enter New password']);
        return redirect()->route('otp.index');
    } else {
        $request->session()->flash('alert', ['type' => 'error', 'message' => 'Account Not Found']);
        return redirect()->back();
    }
}

// Function to generate OTP
private function generateOTP() {
    // Generate a random 6-digit number
    $otp = rand(100000, 999999);
    return $otp;
}

public function otp()
{
    return view('login.send-otp');
}

public function verify()
{
    return view('login.otp-change');
}

public function verifyotp(Request $request)
{
    $request->validate([
        'code' => 'required|string',
    ]);

    $credentials = $request->only('code');
    $user = User::where('otp', $credentials['code'])->first();
    if ($user) {
        Auth::login($user);
        $request->session()->flash('alert', ['type' => 'success', 'message' => 'Account Found Please Enter New password']);
        return redirect()->route('changepass.index');
    } else {
        $request->session()->flash('alert', ['type' => 'error', 'message' => 'Account Not Found']);
        return redirect()->back();
    }
}

public function changepass()
{
    return view('login.new-password');
}

public function savepass(Request $request)
    {
        $request->validate([
            'pass1' => 'required|min:8', // Add any validation rules as needed
            'pass2' => 'required|same:pass1',
        ]);
    
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::User();
            $user->password = bcrypt($request->input('pass1'));
            $user->save();
            $request->session()->flash('alert', ['type' => 'success', 'message' => 'New password save Successful!']);
            return redirect()->route('login.index');
        } else {
            // Handle the case where the user is not authenticated
            // Redirect the user to the login page or show an error message
            $request->session()->flash('alert', ['type' => 'error', 'message' => 'Confirm Password Doesnt match.']);
            return redirect()->route('changepass.index')->with('error', 'User is not authenticated!');
        }
    }

}
