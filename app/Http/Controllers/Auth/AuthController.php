<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laravel\Socialite\Contracts\Factory as SocialiteFactory;

class AuthController extends Controller {

	use AuthenticatesAndRegistersUsers;

	public function __construct(SocialiteFactory $socialite)
	{
		$this->socialite = $socialite;
	}

	function getMe()
	{
		dd(\Auth::user());
	}

	function getFacebook($action = '')
	{
		if($action == 'callback') {
			$user = $this->socialite->driver('facebook')->user();
			// /dd($user);
			return Redirect::intended('/');
		}
		return $this->socialite->driver('facebook')->redirect();
	}

}
