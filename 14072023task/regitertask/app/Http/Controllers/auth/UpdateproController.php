<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;


class UpdateproController extends Controller
{
    public function profileupdates(Request $request)
    {  
        // $ids=$request->input('email');
        // $users = DB::select('select * from student where email = ?',[$ids]);
        // $request->validate(['fname' => 'required','lname' => 'required','mobileno' => 'required','email' => 'required',]);
        // // $student = Student::find($ids);
        // $student->fname = $request->input('fname');
        // $student->lname = $request->input('lname');
        // $student->mobileno = $request->input('mobileno');
        // $student->email = $request->input('email');
        // $student->update();
        $used =DB::table('users')->where('email', $request->input('email'))->update(['lname' => "Updated Title"]);

        return redirect('/shgjhehk')->with('status','Student Updated Successfully');
    } 
}
// $student = Student::find($id);
// $student->name = $request->input('name');
// $student->email = $request->input('email');
// $student->course = $request->input('course');
// $student->section = $request->input('section');
// $student->update();
// return redirect()->back()->with('status','Student Updated Successfully');
?>