<?php

namespace App\Actions\Publisher;

use App\Http\Requests\Publisher\Listing\CreateRequest;
use App\Models\Bedroom;
use App\Models\Gallery;
use App\Models\Listing;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingRepository {
    public function store(Request $request)
    {
    try {
        $request->validated();

    DB::transaction(function () use ($request) {
             //kitchen images
        if($kitchen_br1 = $request->file('kitchen_br1')){
            $kitchen_br1_Name = time(). rand(10,1000). $kitchen_br1->getClientOriginalName();
            $kitchen_dir_br1 = $kitchen_br1->move(public_path('database-files/images/kitchen/'), $kitchen_br1_Name);
        }

        if($kitchen_br2 = $request->file('kitchen_br2')){
            $kitchen_br2_Name = time(). rand(10,1000). $kitchen_br2->getClientOriginalName();
            $kitchen_dir_br2 = $kitchen_br2->move(public_path('database-files/images/kitchen/'), $kitchen_br2_Name);
        }
        if($kitchen_br3 = $request->file('kitchen_br3')){
            $kitchen_br3_Name = time(). rand(10,1000). $kitchen_br3->getClientOriginalName();
            $kitchen_dir_br3 = $kitchen_br3->move(public_path('database-files/images/kitchen/'), $kitchen_br3_Name);
        }

        //bedroom images
        if($bedroom_br1 = $request->file('bedroom_br1')){
            $bedroom_br1_Name = time(). rand(10,1000). $bedroom_br1->getClientOriginalName();
            $bedroom_dir_br1 = $bedroom_br1->move(public_path('database-files/images/bedroom/'), $bedroom_br1_Name);
        }
        if($bedroom_br2 = $request->file('bedroom_br2')){
            $bedroom_br2_Name = time(). rand(10,1000). $bedroom_br2->getClientOriginalName();
            $bedroom_dir_br2 = $bedroom_br2->move(public_path('database-files/images/bedroom/'), $bedroom_br2_Name);
        }
        if($bedroom_br3 = $request->file('bedroom_br3')){
            $bedroom_br3_Name = time(). rand(10,1000). $bedroom_br3->getClientOriginalName();
            $bedroom_dir_br3 = $bedroom_br3->move(public_path('database-files/images/bedroom/'), $bedroom_br3_Name);
        }

        //bathroom images
        if($bathroom_br1 = $request->file('bathroom_br1')){
            $bathroom_br1_Name = time(). rand(10,1000). $bathroom_br1->getClientOriginalName();
            $bathroom_dir_br1 = $bathroom_br1->move(public_path('database-files/images/bathroom/'), $bathroom_br1_Name);
        }
        if($bathroom_br2 = $request->file('bathroom_br2')){
            $bathroom_br2_Name = time(). rand(10,1000). $bathroom_br2->getClientOriginalName();
            $bathroom_dir_br2 = $bathroom_br2->move(public_path('database-files/images/bathroom/'), $bathroom_br2_Name);
        }
        if($bathroom_br3 = $request->file('bathroom_br3')){
            $bathroom_br3_Name = time(). rand(10,1000). $bathroom_br3->getClientOriginalName();
            $bathroom_dir_br3 = $bathroom_br3->move(public_path('database-files/images/bathroom/'), $bathroom_br3_Name);
        }

        // Living Room Images
        if($living_room_br1 = $request->file('living_room_br1')){
            $living_room_br1_Name = time(). rand(10,1000). $living_room_br1->getClientOriginalName();
            $living_room_dir_br1 = $living_room_br1->move(public_path('database-files/images/living-room/'), $living_room_br1_Name);
        }
        if($living_room_br2 = $request->file('living_room_br2')){
            $living_room_br2_Name = time(). rand(10,1000). $living_room_br2->getClientOriginalName();
            $living_room_dir_br2 = $living_room_br2->move(public_path('database-files/images/living-room/'), $living_room_br2_Name);
        }
        if($living_room_br3 = $request->file('living_room_br3')){
            $living_room_br3_Name = time(). rand(10,1000). $living_room_br3->getClientOriginalName();
            $living_room_dir_br3 = $living_room_br3->move(public_path('database-files/images/living-room/'), $living_room_br3_Name);
        }

        //General room Images
        if($general_br1 = $request->file('general_br1')){
            $general_br1_Name = time(). rand(10,1000). $general_br1->getClientOriginalName();
            $general_dir_br1 = $general_br1->move(public_path('database-files/images/general/'), $general_br1_Name);
        }

        //Video
        if($video = $request->file('video')){
            $videoName = time(). rand(10,1000). $video->getClientOriginalName();
            $video_directory = $video->move(public_path('database-files/videos/room'), $videoName);
        }

        $listing = Listing::create([
            'cityAddress' => $request->cityAddress,
            'elevator' => $request->elevator,
            'parking' => $request->parking,
            'furniture' => $request->furniture,
            'total_bedroom' => $request->total_bedroom,
            // 'video' => "Yessssssss",
        ]);

        Bedroom::create([
            'listing_id' => $listing->id,
            'ac' => $request->ac,
            'sqm' => $request->sqm,
            'furniture' => $request->furniture,
            'furniture_details' => $request->furniture_details,
            'price' => $request->price,
        ]);

        Gallery::insert([
            ['listing_id' => $listing->id, 'type' => 'kitchen', 'file' => $kitchen_br1_Name],
            ['listing_id' => $listing->id, 'type' => 'kitchen', 'file' => $kitchen_br2_Name],
            ['listing_id' => $listing->id, 'type' => 'kitchen', 'file' => $kitchen_br3_Name],

            ['listing_id' => $listing->id, 'type' => 'bedroom', 'file' => $bedroom_br1_Name],
            ['listing_id' => $listing->id, 'type' => 'bedroom', 'file' => $bedroom_br2_Name],
            ['listing_id' => $listing->id, 'type' => 'bedroom', 'file' => $bedroom_br3_Name],

            ['listing_id' => $listing->id, 'type' => 'bathroom', 'file' => $bathroom_br1_Name],
            ['listing_id' => $listing->id, 'type' => 'bathroom', 'file' => $bathroom_br2_Name],
            ['listing_id' => $listing->id, 'type' => 'bathroom', 'file' => $bathroom_br3_Name],

            ['listing_id' => $listing->id, 'type' => 'living-room', 'file' => $living_room_br1_Name],
            ['listing_id' => $listing->id, 'type' => 'living-room', 'file' => $living_room_br2_Name],
            ['listing_id' => $listing->id, 'type' => 'living-room', 'file' => $living_room_br3_Name],

            ['listing_id' => $listing->id, 'type' => 'video', 'file' => $videoName],
        ]);
    });
            // dd($request->total_bedroom);







            return true;
        }
        catch(Exception $e){
            session()->flash('error-alert','Error while Saving Listing');
            return null;
        }
    }
}
