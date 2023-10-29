<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\contents;
use App\Models\services;
use App\Models\favorites;


class ContentController extends Controller
{

    /**
     *
     * Content Form
     */
    public function contentForm(){
        if(session('LoggedAdmin')){
            return view('Content.add-form');
        }
    }


    /**
     * Add Content
     */
    public function addContent(Request $request){

        $requestData = $request->all();


        // dd($request->image1);

        if($request->image1){
            $img1 = str_replace(' ', '',$request->file('image1')->getClientOriginalName());
            $path = $request->file('image1')->storeAs('public', $img1);
            $requestData['image1'] = "/storage/".$img1;
        }

        if($request->image2){
            $img2 = str_replace(' ', '',$request->file('image2')->getClientOriginalName());
            $path = $request->file('image2')->storeAs('public', $img2);
            $requestData['image2'] = "/storage/".$img2;
        }

        if($request->image3){
            $img3 = str_replace(' ', '',$request->file('image3')->getClientOriginalName());
            $path = $request->file('image3')->storeAs('public', $img3);
            $requestData['image3'] = "/storage/".$img3;
        }

        if($request->image4){
            $img4 = str_replace(' ', '',$request->file('image4')->getClientOriginalName());
            $path = $request->file('image4')->storeAs('public', $img4);
            $requestData['image4'] = "/storage/".$img4;
        }

        // if ($request->hasFile('image1')) {$imagePath1 = $request->file('image1')->store('images', 'public');}
        // if ($request->hasFile('image2')) {$imagePath2 = $request->file('image2')->store('images', 'public');}
        // if ($request->hasFile('image3')) {$imagePath3 = $request->file('image3')->store('images', 'public');}
        // if ($request->hasFile('image4')) {$imagePath4 = $request->file('image4')->store('images', 'public');}

            // Store the image path in the database
            $new = contents::create($requestData);
            // $new->image1 = $imagePath1;
            // $new->image2 = $imagePath2;
            $new->save();

            return redirect()->back()->with('success', 'Data Updated Successfully');

    }



    /**
     * Update Form
     */
    public function updateForm($id){
        if(session('LoggedAdmin')){
            $content = contents::find($id);
            return view('Content.update-form',['content'=>$content]);
        }
    }


    /**
     * Update Content
     */
    public function updateContent(Request $request, $id){
        if(session('LoggedAdmin')){

            $data = contents::find($id);


            $requestData = $request->all();


            // dd($request->image1);

            if($request->image1){
                $img1 = str_replace(' ', '',$request->file('image1')->getClientOriginalName());
                $path = $request->file('image1')->storeAs('public', $img1);
                $requestData['image1'] = "/storage/".$img1;
            }

            if($request->image2){
                $img2 = str_replace(' ', '',$request->file('image2')->getClientOriginalName());
                $path = $request->file('image2')->storeAs('public', $img2);
                $requestData['image2'] = "/storage/".$img2;
            }

            if($request->image3){
                $img3 = str_replace(' ', '',$request->file('image3')->getClientOriginalName());
                $path = $request->file('image3')->storeAs('public', $img3);
                $requestData['image3'] = "/storage/".$img3;
            }

            if($request->image4){
                $img4 = str_replace(' ', '',$request->file('image4')->getClientOriginalName());
                $path = $request->file('image4')->storeAs('public', $img4);
                $requestData['image4'] = "/storage/".$img4;
            }

            // if ($request->hasFile('image1')) {$imagePath1 = $request->file('image1')->store('images', 'public');}
            // if ($request->hasFile('image2')) {$imagePath2 = $request->file('image2')->store('images', 'public');}
            // if ($request->hasFile('image3')) {$imagePath3 = $request->file('image3')->store('images', 'public');}
            // if ($request->hasFile('image4')) {$imagePath4 = $request->file('image4')->store('images', 'public');}

                // Store the image path in the database
                $new = contents::create($requestData);
                // $new->image1 = $imagePath1;
                // $new->image2 = $imagePath2;
                $new->save();



                /**
                 *
                 * ADD CODE TO UPDATE EVERY SINGLE FIELD
                 *
                 */

                return redirect()->back()->with('success', 'Data Updated Successfully');

        }
    }



    /**
     * Delete Page
     */
    public function deletePage($id){
        if(session('LoggedAdmin')){
            $data = contents::find($id);
            return view('Content.delete',["data"=>$data]);
        }
    }


    /**
     * Delete Content
     */
    public function deleteContent($id){
        if(session('LoggedAdmin')){
            $data = contents::find($id);
            $data->delete();
            return view('Admin.dashboard');
        }
    }


    /**
     * Add Favorite
     */

    public function favorite($id){
        $data = favorite::where('content_id',$id)
                ->where('user_id',session('LoggedUser'))->first();

        if($data){
            $data->delete();
            return redirect()->back()->with("Success","Removed From Favorites");
        } else{
            $new = favorite::new([
                "content_id" => $id,
                "user_id" => session('LoggedUser'),
            ]);
            $new->save();
            return redirect()->back()->with("Success","Added To Favourites");
        }
    }



    /**
     * Portfolio
     */

    public function portfolio(){
        $content = contents::all();
        return view('portfolio', ['content'=>$content]);
    }


}

