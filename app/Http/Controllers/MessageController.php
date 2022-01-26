<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessageRequest;
use App\Notifications\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class MessageController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SendMessageRequest $request)
    {
        try {
            $message = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'message' => $request->input('message')
            ];

            Notification::route('mail', [
                'comercial@camir-express.com' => 'Daniel Isunza',
            ])->notify(new MessageSent($message));

            new MessageSent($message);

            $request->session()->flash('flash', ['banner' => 'Mensaje enviado con exito.']);
        } catch (\Exception $e) {
            logger($e);
            return false;
        }
        return redirect()->back();
    }
}
