<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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


}
