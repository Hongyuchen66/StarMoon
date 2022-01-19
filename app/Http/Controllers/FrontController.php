<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\RoomType;
use App\Models\RoomImage;
use App\Mail\ContactNotify;
use App\Models\FeatureImage;
use App\Models\Feedback;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $news = News::get();
        $feedbacks = Feedback::get();
        return view('index',compact('news','feedbacks'));
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
        return redirect()->route('index');
    }

    public function location()
    {
        return view('front.location');
    }

    public function roomList(Request $request)
    {
        $roomTypes = RoomType::get();
        if($request->type_id){
            $rooms = Room::where('home_type_id',$request->type_id)->get();
        }else{
            $rooms = Room::where('home_type_id',3)->get();
        }
        // dd($rooms);
        foreach ($rooms as $item) {
            $images = $item;
        }
        $roomImages = RoomImage::where('room_id',$images->id)->get();
        // dd($roomImages);
        return view('front.rooms',compact('roomTypes','rooms','roomImages'));
    }

    public function featureList(Request $request)
    {
        $featureTypes = Feature::get();
        if($request->type_id){
            $features = Feature::where('subtitle',$request->type_id)->get();
        }else{
            $features = Feature::where('subtitle',1)->get();
        }
        foreach ($features as $item) {
            $images = $item;
        }
        $featureImages = FeatureImage::where('feature_id',$images->id)->get();
        return view('front.features',compact('featureTypes','features','featureImages'));
    }
    
}
