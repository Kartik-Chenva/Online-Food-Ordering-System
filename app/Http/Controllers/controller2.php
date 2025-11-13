<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use App\Models\Register;
use App\Models\User;
use App\Models\review;
use App\Models\contact;

class controller2 extends Controller
{

    // Login Data with Contoller **********************************************************************

    public function login_data(Request $req)
    {
        $login=new login;
        $login->email=$req->email;
        $login->password=$req->password;
        $login->save();
        return redirect('login');
    }

    public function login_tabel_data(Request $req)
    {
        // $login_data=login::all();
        // $login_data=login::select('*')->get(); 
        // $login_data=login::select('*')->where('email','')->get();    
        $login_data=login::select('*')->paginate(2);    
        return view('login_tabel',['info'=>$login_data]);
    }

    public function delete_login_data($id)
    {
        $login_data=login::find($id);
        $login_data->delete();
        return redirect("login_tabel");
    }

    public function edit_login_data($id)
    {
        $login_data=login::find($id);
        return view("edit_login",['info'=>$login_data]);
    }

    public function update_login_data(Request $req)
    {
        $login_data=login::find($req->id);
        $login_data->email=$req->email;
        $login_data->password=$req->password;
        $login_data->save();
        return redirect('login_tabel');
    }

    public function search_login_name(Request $req)
    {
        // $info=login::select()->where('email',$req->name)->get();
        $info=login::select()->where('email',$req->name)->paginate(2);
        return view('login_tabel',compact('info'));
    }


    
    //  Register Data with Contoller **********************************************************************

    public function register_data(Request $req)
    {
        $register=new Register;
        $register->name=$req->name;
        $register->email=$req->email;
        $register->password=$req->password;
        $register->save();
        return redirect('registration');
    }

    public function registration_tabel_data(Request $req)
    {
        // $registration_data=register::all();
        // $registration_data=register::select('*')->get();    
        $registration_data=Register::select('*')->paginate(2);    
        return view('registration_tabel',['info'=>$registration_data]);
    }

    public function delete_registration_data($id)
    {
        $registration_data=Register::find($id);
        $registration_data->delete();
        return redirect("registration_tabel");
    }

    public function edit_registration_data($id)
    {
        $registration_data=Register::find($id);
        return view("edit_registration",['info'=>$registration_data]);
    }

    public function update_registration_data(Request $req)
    {
        $registration_data=Register::find($req->id);
        $registration_data->name=$req->name;
        $registration_data->email=$req->email;
        $registration_data->password=$req->password;
        $registration_data->save();
        return redirect('registration_tabel');
    }


    public function search_registration_name(Request $req)
    {
        // $info=register::select()->where('name',$req->name)->get();
        // $data=demo::select('*')->where('name','Kartik Chanva')->orWhere('ph_no','8780732300')->get();        
        $info=Register::select()->where('email',$req->email)->paginate(2);
        return view('registration_tabel',compact('info'));
    }
    

    //  Review Data with Contoller ************************************************************************

    public function review_data(Request $req)
    {
        $review=new review;
        $review->rating=$req->rating;
        $review->reviewtext=$req->reviewtext;
        $review->name=$req->name;
        $review->email=$req->email;
        $review->save();
        return redirect('review');
    }

    public function review_tabel_data(Request $req)
    {
        // $review_data=review::all();
        // $review_data=review::select('*')->where('reviewtext','')->orWhere('name','')->get();    
        $review_data=review::select('*')->paginate(2);    
        return view('review_tabel',['info'=>$review_data]);
    }

    public function delete_review_data($id)
    {
        $review_data=review::find($id);
        $review_data->delete();
        return redirect("review_tabel");
    }

    public function edit_review_data($id)
    {
        $review_data=review::find($id);
        return view("edit_review",['info'=>$review_data]);
    }

    public function update_review_data(Request $req)
    {
        $review_data=review::find($req->id);
        $review_data->rating=$req->rating;
        $review_data->reviewtext=$req->reviewtext;
        $review_data->name=$req->name;
        $review_data->email=$req->email;
        $review_data->save();
        return redirect('review_tabel');
        
    }

    public function search_review_name(Request $req)
    {
        $info=review::select()->where('email',$req->email)->paginate(2);
        return view('review_tabel',compact('info'));
    }

    //  Contacts Data with Contoller ************************************************************************

 
    public function contact_data(Request $req)
    {
        $contact = new contact;
        $contact->fullname = $req->fullname;
        $contact->email = $req->email;
        $contact->yournumber = $req->yournumber;
        $contact->message = $req->message;
        $contact->save();
        // Redirect with a success message
        return redirect('contact')->with('success', 'Your message has been sent successfully!');
    }

    public function contact_tabel_data()
    {
        // $contact_data = contact::all();
        // $contact_data=contact::select('*')->where('fullname','')->orWhere('email','')->get();    
        $contact_data=contact::select('*')->paginate(2);    
        return view('contact_tabel', ['info' => $contact_data]);
    }

    public function delete_contact_data($id)
    {
        $contact_data = contact::find($id);
        $contact_data->delete();
        return redirect("contact_tabel")->with('success', 'Contact data deleted successfully.');
    }

    public function search_contact_name(Request $req)
    {
        // $info=contact::select()->where('fullname',$req->name)->get();
        $info=contact::select()->where('email',$req->email)->paginate(2);
        return view('contact_tabel',compact('info'));
    }
 
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/dashboard'); // Redirect to dashboard after login
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}

}
