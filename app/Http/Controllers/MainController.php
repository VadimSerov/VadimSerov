<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }


    public function about(){
        return view('about');
    }

    public function review(){
        return view('review');
    }

    public function review_check(Request $request){
		$valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required'
		]);
		
		$review = new ContactModel();
		
		$review->email = $request->input('email');
		$review->subject = $request->input('subject');
		$review->message = $request->input('message');
		
		$review->save();
		
		return redirect()->route('review');
    }

	
	public function review_all(){
		return view('review_all',['data' => ContactModel::all()]);
	}
	
	public function review_one($id){
		return view('one_review',['el' => ContactModel::find($id)]);
	}

	public function review_update($id){
		return view('update',['el' => ContactModel::find($id)]);
	}

    public function update_check($id, Request $request){
		$valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required'
		]);
		
		$review = ContactModel::find($id);
		
		$review->email = $request->input('email');
		$review->subject = $request->input('subject');
		$review->message = $request->input('message');
		
		$review->save();
		
		return redirect()->route('review_all');
    }
	
	public function review_delete($id){
		ContactModel::find($id)->delete();
		return redirect()->route('review_all');
	}

}

?>
