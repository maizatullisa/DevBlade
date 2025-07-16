<?php 

namespace App\Controllers;

class Pages extends BaseController 
{
    public function chat()
    {
        return view('pages/chat/chat');
    }

    public function chatBox(){
        return view('Pages/chat/chatBox');
    }

    public function quiz(){
        return view ('pages/quiz/earn-reward');
    }
    
    public function home(){
        return view ('pages/home');
    }

    //bisa di tambahin sesuai dgn kebutuhan
}