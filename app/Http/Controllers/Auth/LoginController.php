<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    public function redirectTo(){
        
    // User role
    $role = Auth::user()->role; 
    
    // Check user role
    switch ($role) {
        case 'admin':
                return '/admin';
            break;
        case 'review':
                return '/reviewer';
            break; 
        default:
                return '/home'; 
            break;
    }
}





     //  protected function authenticated($request,$user){
     //      if($user->isRole('admin')){
     //          return redirect('/admin');
     //      }
     //      elseif($user->isRole('review')){
     //          return redirect('/reviewer');
     //      }

     //     else{
     //         return redirect('/home');
     //     }
     // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
//         protected function authenticated(Request $request, $user) {
//      if ($user->roid == 1) {
//         return redirect('/admin');
//      } else if ($user->role_id == 2) {
//         return redirect('/author');
//      } else {
//         return redirect('/blog');
//      }
// }
