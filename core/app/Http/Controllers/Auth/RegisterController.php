<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Tier;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ref_code' => ['nullable', 'exists:users,ref_id' ]
                ],['ref_code.exists' => 'invalid Invite code, No user with this Invitation_ID.']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    { 
        if($data['ref_code'] != null){
            $parent = User::where('ref_id', $data['ref_code'])->first();
            $parent = $parent->id ;
        }else{
            $parent = null ;
        }
        
        // dd($data, $parent);
        
        $tier = Tier::where('name', 'Normal')->get()->first();
        $uniqueCode = Str::random(6);

        // Make sure the generated code is unique
        while (User::where('withdrawal_pass', $uniqueCode)->exists()) {
            $uniqueCode = Str::random(6);
        }
        // dd($tier);
            
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['name'],
            'asset' => 10,
            'user_id' => $parent,
            'ref_id' => $uniqueCode,
            'tier_id' => $tier->id,
            'pass' => $data['password'],
            'gender' => $data['gender'],
            'withdrawal_pass' => $data['withdrawal_password'],
            'password' => Hash::make($data['password']),
        ]);
        $user->addRole('user');
        // $user = $user->update([
        //     'ref_id' => 'ref_'. 0 .$user->id
        // ]);
        return $user;
    }
}
