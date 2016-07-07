<?php

namespace App\Http\Controllers;

use App\Consumer;
use Illuminate\Http\Request;

use App\Http\Requests;

class ConsumerController extends Controller
{
    public function create()
    {
        $array = array(
            'active' => 'add'
        );
        return view('consumer.create', compact('array'));
    }

    public function store(Request $request)
    {
        $name = $request->input('consumer');
        $describe = $request->input('description');
        $mail = $request->input('mail');
        $input = array(
            'name' => $name,
            'mail' => $mail,
            'describe' => $describe,
        );
        $array = array(
            'active' => 'list'
        );
        Consumer::firstOrCreate($input);

        return view('consumer.success', compact('input', 'array'));
    }

    public function listing()
    {
        $array = array(
            'active' => 'list'
        );
        $list = Consumer::orderBy('created_at', 'desc')->get();
        return view('consumer.list', compact('list', 'array'));
    }

    public function delete($id)
    {
        Consumer::find($id)->delete();
        return redirect('user/list');
    }

    public function contact()
    {
        $array = array(
            'active' => 'contact'
        );
        return view('consumer.contact', compact('array'));
    }

    public function home()
    {
        $array = array(
            'active' => 'home'
        );
        return view('consumer.home', compact('array'));
    }


}
