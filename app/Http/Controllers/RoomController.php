<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomImage;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms= Room::with('roomType')->orderBy('created_at','desc')->get();        
        return view('admin.room.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomTypes = RoomType::get();
        return view('admin.room.create',compact('roomTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image_url')){
            $path = Storage::put('/room',$request->image_url);
        }
        $room = Room::create([
            'home_type_id' => $request->home_type_id,
            'name' => $request->name,
            'price' => $request->price,
            'image_url' => $path,
            'description' => $request->description,
            'room_facility' => $request->room_facility,
        ]);
        foreach($request->image_urls??[] as $image_url){
            $path = Storage::put('/room',$image_url);

            RoomImage::create([
                'room_id' => $room->id,
                'image_url' =>$path,
            ]);
        }
        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomTypes = RoomType::get();        
        $room =Room::with('roomImages')->find($id);
        return view('admin.room.edit',compact('room','roomTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        if($request->hasFile('image_url')){
            Storage::delete($room->image_url);
            $path=Storage::put('/room',$request->image_url);            
        }else{
            $path =$room->image_url;
        }
        $room->update([
            'home_type_id' => $request->home_type_id,
            'name' => $request->name,
            'price' => $request->price,
            'image_url' => $path,
            'description' => $request->description,
            'room_facility' => $request->room_facility,
    ]);

        // ???????????????????????????????????????
        if ($request->hasFile('image_urls')){
            foreach ($request->image_urls as $image_url){
                $path = Storage::put('/room',$image_url);

                RoomImage::create([
                    'room_id' => $room->id,
                    'image_url' => $path
                ]);
            }
        }
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room =Room::with('roomImages')->find($id);
        Storage::delete($room->image_url);
        foreach($room->roomImages as $roomImage){
            Storage::delete($roomImage->image_url);
            $roomImage->delete();
        }
        $room->delete();
        return redirect()->route('rooms.index');
    }

    public function imageDelete(Request $request)
    {
        // ???????????????????????????
        $roomImage =RoomImage::find($request->id);
        // ?????????????????????
        Storage::delete($roomImage->image_url);
        // ???????????????????????????
        $roomImage->delete();
        return 'success';
    }
}
