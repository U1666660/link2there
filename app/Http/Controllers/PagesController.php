<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Session;

class PagesController extends Controller {

    public function getRecommend() {
      return view('pages.recommend');
    }

    public function getNews(){
      return view('pages.news');
    }


    public function getVideos(){
      return view('pages.videos');

    }

    public function getContact() {
       return view('pages.contact');
   }

   public function postContact(Request $request) {
     $this->validate($request, [
       'email' => 'required|email',
       'subject' => 'required|min:3',
       'message' => 'required|min:10'
         ]);
         $data = array(
           'email' => $request->email,
           'subject' => $request->subject,
           'bodyMessage' => $request->message
         );
         Mail::send('emails.contact', $data, function($message) use ($data) {
             $message->from($data['email']);
             $message->to('smallorangedog@gmail.com');
             $message->subject($data['subject']);
         });
         Session::flash('success', 'Your Email has been sent.');
         return redirect('/');
   }


    public function getAbout(){
      return view('pages.about');

    }

    public function getListview(){
      return view('pages.listview');

    }





}
