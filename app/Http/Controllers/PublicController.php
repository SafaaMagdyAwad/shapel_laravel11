<?php

namespace App\Http\Controllers;

use App\Jobs\ConfirmMailJob;
use App\Jobs\ContactMailJob;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Service;
use App\Models\Supscripe;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $blogs=Blog::where('isPublished',1)->latest()->take(2)->get();
        $galleryItems=Gallery::where('isPublished',1)->latest()->take(6)->get();
        $services=Service::where('isPublished',1)->latest()->take(3)->get();
        $testimonials=Testimonial::where('isPublished',1)->latest()->get();

        return view('public.index',compact('blogs','galleryItems','services','testimonials'));
    }
    public function about(){
        return view('public.about');
    }
    public function blog(){
        $blogs=Blog::where('isPublished',1)->latest()->take(2)->get();
        return view('public.blog',compact('blogs'));
    }
    public function blogDetails(string $id){
        $blog=Blog::where('isPublished',1)->findOrFail($id);
        return view('public.blogDetails',compact('blog'));
    }
    public function serviceDetails(string $id){
        $service=Service::where('isPublished',1)->findOrFail($id);
        return view('public.serviceDetails',compact('service'));
    }
    public function gallery(){
        $galleryItems=Gallery::where('isPublished',1)->get();
        return view('public.gallery',compact('galleryItems'));
    }
    public function service(){
        $services=Service::where('isPublished',1)->latest()->get();
        return view('public.service',compact('services'));
    }
    public function contact(){
        return view('public.contact');
    }
    public function contactpost(Request $request){
        $data=$request->validate([
            'name'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|email',
            'message'=>'required|string',
        ]);
        $data['read']=0;
        ContactMailJob::dispatch($data);
        Message::create($data);
        ConfirmMailJob::dispatch($data);

        return redirect()->route('index');
    }
    public function newsletter(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
        ]);
        $data['active']=1;
        Supscripe::create($data);
        ConfirmMailJob::dispatch($data);
        return redirect()->route('index');
    }

}
