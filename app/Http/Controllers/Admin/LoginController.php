<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login ()
    {
        $title = 'Admin';
        return view('admin.login', compact('title'));
    }

    public function doLogin (Request $request)
    {
        $bodyData = $request->all();
        $check = User::where('phone', $bodyData['username'])
            ->exists();
        if (!$check) {
            return redirect()->route('admin.login')->with(['alert'=>'danger', 'message' => 'Số điện thoại không tồn tại']);
        }
        $dataAttemptAdmin = [
            'phone' => $bodyData['username'],
            'password' => $bodyData['password'],
        ];
        if (Auth::attempt($dataAttemptAdmin)) {
            return redirect()->route('admin.index');
        }
        return redirect()->route('admin.login')->with(['alert'=>'danger', 'message' => 'Tài khoản hoặc mật khẩu không chính xác']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()
            ->route('admin.login')
            ->with(['alert' => 'success', 'message' => 'Đăng xuất thành công']);
    }

    public function changePassword(Request $request, $id)
    {
        $user = User::find($id);
        $dataAttemptAdmin = [
            'phone' => $user['phone'],
            'password' => $request->get('current_password'),
        ];
        if (Auth::attempt($dataAttemptAdmin)) {
            if ($request->get('password') !=  $request->get('password_confirmation')) {
                return back()->with('error', 'Mật khẩu nhập lại không khớp!');
            }

            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->route('admin.login')->with('message', 'Bạn đã đổi mật khẩu thành công');
        }else{
            return back()->with('error', 'Mật khẩu cũ không đúng!');
        }

    }
}
