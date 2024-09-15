<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index(){
        $read=Message::where('read',1)->get();
        $unread=Message::where('read',0)->get();
        // dd($unread);
        return view('admin.message.index',compact('read','unread'));
    }
    public function read(string $id){
        $data=Message::findOrFail($id);
        if($data->read==0){
            $data->update([
                'read'=>1,
            ]);
        }
        return view('admin.message.show',compact('data'));
    }
    public function destroy(string $id){
        $message=Message::findOrFail($id);
        $message->delete();
        return redirect()->route('message.index');
    }

}
