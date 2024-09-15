<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\User;
use App\Models\UsersMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversatioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::where('active',1)->get();
        return view('admin.conversation.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'message' => 'required|string',
            'reciver_id' => 'required|exists:users,id',
        ]);

        $sender_id = Auth::user()->id;
        $reciver_id = $request->reciver_id;

        // Check if the conversation exists
        $conversation = Conversation::where('sender_id', $sender_id)
                                    ->where('reciver_id', $reciver_id)
                                    ->first();

        // If no conversation exists, create one
        if (!$conversation) {
            $conversation = Conversation::create([
                'sender_id' => $sender_id,
                'reciver_id' => $reciver_id,
            ]);
        }

        // Create the message
        UsersMessage::create([
            'conversation_id' => $conversation->id,
            'message' => $request->message,
        ]);

        return redirect()->route('conversation.show',$reciver_id);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users=User::where('active',1)->get();
        $reciver=User::where('active',1)->findOrFail($id);
        return view('admin.conversation.index',compact('users','reciver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
