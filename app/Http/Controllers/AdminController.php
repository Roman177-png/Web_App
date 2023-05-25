<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminHome()
    {
        $users = DB::select('select * from users where role = 0');
        return view('adminPanel.home', compact('users'));
    }
    public function showReceptionists(){
        $users = DB::select('select * from users where role = 2');
        return view('adminPanel.receptionist', compact('users'));
    }
    public function showTrainer(){
        $users = DB::select('select * from users where role = 1');
        return view('adminPanel.receptionist', compact('users'));
    }
    public function destroy($id)
    {
        if (auth()->user()->id == $id) {
            abort(401);
        };
        $user = User::find($id);
        $userDelete = $user->delete();
        if ($userDelete && $user->image!=null) {
            unlink(public_path('images/' . $user->image));
        };
        return redirect()->route('adminPanel.home')->with('message', $user->name . ' deleted successfully');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('adminPanel.edit-client', compact('user'));
    }
    public function updateClient(Request $request,$id)
    {
        $data = $request->except('_method', '_token');
        $user = User::find($id);
        $imageName = $user->image;
        $userPassword = $user->password;
        if ($request->hasFile('image')) {
            $imageName = (new User)->userAvatar($request);
            unlink(public_path('images/' . $user->image));
        }
        $data['image'] = $imageName;
        $user->update($data);
        
        return redirect()->route('adminPanel.home')->with('message', 'Trainer ' . $user->name . ' information updated successfully');
    }
}
