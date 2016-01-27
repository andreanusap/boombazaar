<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Socialite;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
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
//         	'userName' => 'required|max:255',
//         	'firstName' => 'required|max:255',
//         	'lastName' => 'required|max:255',
//         	'birthDate' => 'required|max:255',
//         	'address' => 'required|max:255',
//         	'postalCode' => 'required|max:255',
//         	'phoneHome' => 'required|max:255',
//         	'phoneCell' => 'required|max:255',
//         	'postalCode' => 'required|max:255',
//             'email' => 'required|email|max:255|unique:users',
//             'password' => 'required|confirmed|min:6'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
        	'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
    	return Socialite::driver($provider)->redirect();
    }
    
    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
    	
    	try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return redirect('auth/'+$provider);
        }
    	
        $authUser = $this->findOrCreateUser($user,$provider);
        Auth::login($authUser, true);
        return redirect('home');
  
    	// $user->token;
    }
    
    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $facebookUser
     * @return User
     */
    private function findOrCreateUser($user,$provider)
    {
    	if($provider =="facebook")
    		$providerId = "facebook_id";
    	else 
    		$providerId = "twitter_id";
    	
    		$authUser = User::where($providerId, $user->id)->first();
    		
    	if ($authUser == NULL)
    	{
    		$authUser = User::where('email', $user->email)->first();
    		User::where('email', $user->email)
    		->update([$providerId => $user->id]);
    		return $authUser;
    	}
    	
    	if ($authUser){
    		return $authUser;
    	}
    
    	return User::create([
    			'name' => $user->name,
    			'email' => $user->email,
    			$providerId => $user->id,
    	]);
    }
    
    private function alala()
    {
    	dd(Socialite::driver('facebook')->user());
    		
    }
}
