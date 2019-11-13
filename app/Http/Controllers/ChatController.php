<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;
use App\Models\Message;
use DB;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($user)
    {
        $messages =  DB::table('messages')
                        ->leftJoin('users','messages.user_id','=','users.user_id')
                        ->get();
        
                        // dd($messages);
        return view('home',['user' => $user, 'messages' => $messages]);
    }

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        $user = Auth::user();
        // $message = $user->messages()->create([
        //     'message' => $request->message
        // ]);

        $message = new Message();
        $message->user_id = $request->user_id;
        $message->message = $request->message;
        $message->created_at = now();
        $message->updated_at = now();
        $message->save();

        return \redirect()->route('chatList');
        // return ['status' => 'Message Sent!'];
    }
}
