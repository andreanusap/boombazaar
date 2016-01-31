<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller {
	/*
	 * |--------------------------------------------------------------------------
	 * | Registration & Login Controller
	 * |--------------------------------------------------------------------------
	 * |
	 * | This controller handles the registration of new users, as well as the
	 * | authentication of existing users. By default, this controller uses
	 * | a simple trait to add these behaviors. Why don't you explore it?
	 * |
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
	public function __construct() {
		// $this->middleware ( 'guest', [
		// 'except' => 'logout'
		// ] );
	}
	
	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param array $data        	
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make ( $data, [ ] )
		// 'userName' => 'required|max:255',
		// 'firstName' => 'required|max:255',
		// 'lastName' => 'required|max:255',
		// 'birthDate' => 'required|max:255',
		// 'address' => 'required|max:255',
		// 'postalCode' => 'required|max:255',
		// 'phoneHome' => 'required|max:255',
		// 'phoneCell' => 'required|max:255',
		// 'postalCode' => 'required|max:255',
		// 'email' => 'required|email|max:255|unique:users',
		// 'password' => 'required|confirmed|min:6'
		;
	}
	
	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param array $data        	
	 * @return User
	 */
	protected function create(array $data) {
		//$this-> redirectTo = '/register';
		//$this -> with ( 'status', 'Register Success, please verify your email (' . $data->email . ') at your inbox email.' );
		return User::create ( [ 
				'name' => $data ['name'],
				'email' => $data ['email'],
				'password' => bcrypt ( $data ['password'] ),
				'birthDate'=> $data ['birthDate'],
				'isVerified' => 0,
				'rowStatus' => 0,
				'token'=> $data ['_token']
		] );
	}
	
	public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        $authUser = $this->create($request->all());
        //Auth::guard($this->getGuard())->login($this->create($request->all()));

        $data = array (
				'email' => $request->email ,
        		'token' => $request->_token
		);
        
        Mail::send ( 'emails.verify', $data, function ($message) use ($request){
        	$message->from ( 'rio.purwanggono@yahoo.co.id', 'Boom Bazaar Team' );
        		
        	$message->to ( $request->email )->subject ( 'Boom Bazaar Email Verification' );
        } );

        return redirect('home')-> with ( 'status', 'Register Success, please verify your email (' . $request->email . ') at your inbox email.' );
    }

	/**
	 * Redirect the user to the facebook authentication page.
	 *
	 * @return Response
	 */
	public function redirectToProvider($provider) {
		return Socialite::driver ( $provider )->redirect ();
	}
	
	/**
	 * Obtain the user information from facebook.
	 *
	 * @return Response
	 */
	public function handleProviderCallback($provider) {
		try {
			$user = Socialite::driver ( $provider )->user ();
		} catch ( Exception $e ) {
			return redirect ( 'auth/' + $provider );
		}
		
		$authUser = $this->findOrCreateUser ( $user, $provider );
		if (! Auth::check ()) {
			Auth::login ( $authUser, true );
		}
		
		//return redirect ( 'home' );
		//return redirect ( '/register' )->with ( 'status', 'Register Success, please verify your email (' . $user->email . ') at your inbox email.' );
		return redirect ( '/profile' )->with ( 'status', 'Connect ' . $provider . ' success.' );
		// $user->token;
	}
	
	/**
	 * Return user if exists; create and return if doesn't
	 *
	 * @param
	 *        	$facebookUser
	 * @return User
	 */
	private function findOrCreateUser($user, $provider) {
		if ($provider == "facebook")
			$providerId = "facebook_id";
		else
			$providerId = "google_id";
		
		$authUser = User::where ( $providerId, $user->id )->first ();
		
		if (Auth::check ()) {
			
			if ($authUser) {
				if ($providerId == "facebook_id") {
					$authUser = User::where ( 'google_id', $user->id )->first ();
					if ($authUser != null) {
						return $authUser;
					}
				}
				if ($providerId == "google_id") {
					$authUser = User::where ( 'facebook_id', $user->id )->first ();
					if ($authUser != null) {
						return $authUser;
					}
				}
			} 

			else {
				$getIdUser = Auth::user ()->id;
				User::where ( 'id', $getIdUser )->update ( [ 
						$providerId => $user->id 
				] );
				return $authUser;
			}
		}
		
		if ($authUser == null) {
			$authUser = User::where ( 'email', $user->email )->first ();
			if ($authUser != null) {
				User::where ( 'email', $user->email )->update ( [ 
						$providerId => $user->id 
				] );
				return $authUser;
			}
		}
		
		return User::create ( [ 
				'name' => $user->name,
				'email' => $user->email,
				$providerId => $user->id,
				'isVerified' => 0,
				'rowStatus' => 0
		] );
	}
}
