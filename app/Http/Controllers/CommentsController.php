<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
class CommentsController extends Controller
{
    //

    public function store(Request $request)
    {

            $comments = new Comments();
            $comments->comments=$request->input('comment');
 
            $comments->save();


            return back();

    }
    public function approval(Request $request)
    {

            $comments = Comments::find($request->commentId);
            $approveVal = $request->input('approved');
            if($approveVal == 'on'){
                $approveVal = 1;
            }
            else{

                    $approveVal=0;

            }
            $comments->approved=$approveVal;
 
            $comments->save();


            return back();

    }
    

}
