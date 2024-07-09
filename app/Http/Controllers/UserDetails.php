<?php

namespace App\Http\Controllers;


use App\Models\Voters;
use App\Models\Influencers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Stmt\TryCatch;
class UserDetails extends Controller
{
   public function saveInfluencerDetails(Request $request){

        $validator = $request->validate([
                'username'=> 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|numeric'
            ]);

        DB::beginTransaction();

        try{
            $influencers = new Influencers();
            $influencers->username = $request->input('username');
            $influencers->email = $request->input('email');
            $influencers->phone = $request->input('phone');
            $influencers->youtube = $request->input('phone');
            $influencers->instagram = $request->input('phone');
            $influencers->twitter = $request->input('phone');
            $influencers->save();
            
            DB::commit();
            return response()->json(
                [
                    'status'=>'success',
                    'message' => 'You details has been saved.',
                    'data' => $request->all()
                ],200);
        }catch(\Exception $e){
            DB::rollBack();
            Log::error('Error adding voter: '.$e->getMessage());

            return response()->json(
                [
                    'status'=>'error',
                    'message' => 'Failed to save your detials. Please try again!',
                    'data' => $request->all()
                ],400);
        }
   }

   public function saveVoterDetails(Request $request){

        $request->validate([
            'email'=> 'required|email',
            'phone' => 'required|numeric',
            'zip' => 'required|numeric'
        ]);

        DB::beginTransaction();

        try{
            $voters = new Voters();
            $voters->email = $request->input('email');
            $voters->phone = $request->input('phone');
            $voters->zipcode = $request->input('zip');
            $voters->save();
            
            DB::commit();
            return response()->json(
                [
                    'status'=>'success',
                    'message' => 'You details has been saved.',
                    'data' => $request->all()
                ],200);
        }catch(\Exception $e){
            DB::rollBack();
            Log::error('Error adding voter: '.$e->getMessage());
            return response()->json(
                [
                    'status'=>'error',
                    'message' => 'Failed to save your detials. Please try again!',
                    'data' => $request->all()
                ],400);
        }
    }
}
