<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Contact;
use App\Models\RoomType;
use App\Mail\ContactNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(Request $request)
    {
        $validated =$request->validate([
            'email'=>'email',
            'phone'=>'required|min:9|max:10',
            'name'=>'required|max:50',
            'content'=>'required|max:500',
            'g-recaptcha-response' => 'recaptcha',
            recaptchaFieldName() => recaptchaRuleName()
        ]);
        $contact=Contact::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'content'=>$request->content,
        ]);
        Mail::to('demostarmoon@gmail.com')->send(new ContactNotify($contact));
        return redirect()->route('carousels.index');
    }

    public function location()
    {
        return view('front.location');
    }

    public function roomList()
    {
        // dd($request->all());
        $roomTypes = RoomType::get();
        // if($request->type_id){
        //     $rooms = Room::where('home_type_id',$request->type_id)->get();
        // }else{
        //     $rooms = Room::get();
        // }
        return view('front.rooms',compact('roomTypes'));
    }
}
