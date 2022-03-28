<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class note extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        Log::info("Show cars with user id: 1");
        $car = User::find(1)->cars;
        Log::info($car);
        $user = User::find(2);
        $user->name = "triNh Huynh THAI";
        $user->save();
        $user_name = $user->name;
        dump($user_name);
        dump($user);
        dd($car);
        return view("noteview");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $user = User::find(2);
        // Mail::to($user)->send(new OrderShipped($user));
        // log::info($user);
        // log::info('sending email');
        return view("noteupdate");  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        dd($request->all());
        return "hello";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view("noteupdate", ["id"=> $id]);
    }

    /**
     * Update the specified resource in storage.
     *  
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // echo $request;
        // echo $id;
        // die();
        dump($request);
        dd($id);
        return 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
