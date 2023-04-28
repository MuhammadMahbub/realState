<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ChatController extends Controller
{
    public function chat(){
        $all_users = User::all();
        $all_chats = Chat::latest()->get();
        return view('backend.chat.index', compact('all_chats','all_users'));
    }

    public function get_message(Request $request)
    {

        Chat::insert([
                'user_id'     => Auth::id(),
                'message'       => $request->reply_message,
        ]);

        return response('success');
    }

    public function getMessageRender(Request $request)
    {
        $all_chats = Chat::orderBy('id', 'ASC')->get();

        $view = view('backend.chat.get_chat_dropdown', compact('all_chats'));
        $data = $view->render();

        return response()->json(['data' => $data]);
    }

    public function get_render_message(Request $request)
    {
        $all_chats = Chat::whereIn('user_id', $request->user_id)->get();

        $view = view('backend.chat.get_chat_dropdown', compact('all_chats'));
        $data = $view->render();

        return response()->json(['data' => $data]);
    }
}
