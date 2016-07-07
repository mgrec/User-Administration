<?php

namespace App\Http\Controllers;

use App\Consumer;
use Illuminate\Http\Request;

use App\Http\Requests;

class ConsumerController extends Controller
{
    public function create()
    {
        return view('consumer.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('consumer');
        $describe = $request->input('description');
        $mail = $request->input('mail');
        $array = array(
            'name' => $name,
            'mail' => $mail,
            'describe' => $describe
        );
        Consumer::create($array);

        return view('consumer.success', compact('array'));
    }

    public function contact()
    {
        return view('consumer.contact');
    }

    public function home()
    {
        return view('consumer.home');
    }

    public function listing()
    {
        return view('consumer.list');
    }
}
