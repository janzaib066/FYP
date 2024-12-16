<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Message;

use DB;

class MessageController extends Controller {
    
    public function messages() {

        $messages = Message::where('passenger_id', session('user_id'))
            ->where('transmitter', 'Passenger')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->groupBy('driver_id')
            ->get();
            
        return view('passenger.messages')
            ->with('messages', $messages);

    }

    public function messageseller($id) {

        $driver_id = $id;

        $driver = User::select('id', 'name', 'profile_picture')
            ->where('id', $driver_id)
            ->first();

        $updateStatus = Message::where('driver_id', $driver_id)
            ->where('passenger_id', session('user_id'))
            ->where('transmitter', 'Driver')
            ->update(['status' => 'Seen']);

        $messages = Message::where('passenger_id', session('user_id'))
            ->where('transmitter', 'Passenger')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->groupBy('driver_id')
            ->get();
            
        $chats = Message::where('passenger_id', session('user_id'))
            ->where('driver_id', $driver_id)
            ->select('driver_id', 'passenger_id', 'message', 'transmitter', 'status', 'created_at')
            ->get();
        
        $user = User::where('id', session('user_id'))
            ->select('id', 'name', 'profile_picture')
            ->first();

        return view('passenger.messages')
            ->with('messages', $messages)
            ->with('chats', $chats)
            ->with('user', $user)
            ->with('driver_id', $driver_id)
            ->with('driver', $driver);

    }

    public function sendcustomermessage(Request $request) {

        $message = new Message;

        $message->driver_id = $request->driver_id;

        $message->passenger_id = $request->passenger_id;

        $message->transmitter = 'Passenger';

        $message->message = $request->inputVal;

        $message->status = 'Delivered';

        if ($message->save()) {
          
            $response = ['statuscode'=> 200, 'message'=> 'Message Sent.'];
            
            echo json_encode($response);

        } else {

            $response = ['statuscode'=> 400, 'message'=> 'Something went wrong.'];
            
            echo json_encode($response);

        }

    }


    // Driver Methods

    public function drivermessages() {

        $messages = Message::where('driver_id', session('user_id'))
            ->where('transmitter', 'Driver')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->groupBy('driver_id')
            ->get();
            
        return view('driver.messages')
            ->with('messages', $messages);

    }

    public function messagepassenger($id) {

        $passenger_id = $id;

        $driver = User::select('id', 'name', 'profile_picture')
            ->where('id', $passenger_id)
            ->first();

        $updateStatus = Message::where('passenger_id', $passenger_id)
            ->where('driver_id', session('user_id'))
            ->where('transmitter', 'Passenger')
            ->update(['status' => 'Seen']);

        $messages = Message::where('driver_id', session('user_id'))
            ->where('transmitter', 'Driver')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->groupBy('driver_id')
            ->get();
            
        $chats = Message::where('driver_id', session('user_id'))
            ->where('passenger_id', $passenger_id)
            ->select('driver_id', 'passenger_id', 'message', 'transmitter', 'status', 'created_at')
            ->get();
        
        $user = User::where('id', session('user_id'))
            ->select('id', 'name', 'profile_picture')
            ->first();

        return view('driver.messages')
            ->with('messages', $messages)
            ->with('chats', $chats)
            ->with('user', $user)
            ->with('passenger_id', $passenger_id)
            ->with('driver', $driver);

    }

    public function senddrivermessage(Request $request) {

        $message = new Message;

        $message->driver_id = $request->driver_id;

        $message->passenger_id = $request->passenger_id;

        $message->transmitter = 'Driver';

        $message->message = $request->inputVal;

        $message->status = 'Delivered';

        if ($message->save()) {
          
            $response = ['statuscode'=> 200, 'message'=> 'Message Sent.'];
            
            echo json_encode($response);

        } else {

            $response = ['statuscode'=> 400, 'message'=> 'Something went wrong.'];
            
            echo json_encode($response);

        }

    }

}
