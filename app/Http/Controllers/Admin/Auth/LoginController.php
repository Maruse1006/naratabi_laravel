<?php
namespace App\Http\Controllers\Admin\Auth; // Adminを追加

use App\Http\Controllers\Admin\Auth;   // 追加
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
protected $redirectTo = RouteServiceProvider::HOME;　　　　// ログイン後のリダイレクト先

// ログイン画面
// public function showLoginForm()
// {
//     return view('admin.auth.login'); //管理者ログインページのテンプレート
// }

// public function adminLogin(Request $request)
//     {
//         $this->validate($request, [
//             'email'   => 'required|email',
//             'password' => 'required|min:6'
//         ]);

//         if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

//             return redirect()->intended('/admin');
//         }
//         return back()->withInput($request->only('email', 'remember'));
//     }
// protected function guard()
// {
//     return \Auth::guard('admin'); //管理者認証のguardを指定
// }

/**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function logout(Request $request)
{
    $this-&gt;guard()-&gt;logout();

    $request-&gt;session()-&gt;invalidate();

    return $this-&gt;loggedOut($request) ?: redirect('/admin/');  // ログアウト後のリダイレクト先
}
public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        return $user;
    }


}