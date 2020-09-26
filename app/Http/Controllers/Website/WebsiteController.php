<?php

namespace App\Http\Controllers\Website;

use App\Models\Banner;
use App\Models\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $banners = Banner::orderBy('id', 'DESC')->get();
        $packages = Package::orderBy('id', 'DESC')->get();
        return view('welcome', compact('banners', 'packages'));
    }

    public function showPackage($id){
        $package = Package::find($id);
        return view('client.package.show', compact('package'));
    }

    public function about(){
        return view('client.about');
    }

    public function services(){
        return view('client.services');
    }

    public function contact(){
        return view('client.contact');
    }

    public function login(){
        return view('Auth.login');
    }

    public function register(){
        return view('Auth.register');
    }

    public function reset(){
        return view('Auth.reset');
    }

    public function denied(){
        return view('denied');
    }
}
