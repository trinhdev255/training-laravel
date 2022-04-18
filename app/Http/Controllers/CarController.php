<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;
use Illuminate\Support\Facades\Redis;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::search()->orderby('userId')->paginate(50);
        return view('carindex', compact('cars'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $request)
    {
        //
        dump($request);
        dd($request->id);
    }

    public function deleteCheckedCar(Request $request)
    {
        $arrId = $request->all();
        // dump(array_values($arrId));
        $cars = Car::find($arrId);
        // dd($cars);
        $cars->each->delete();
    }

    public function updateAllCar(Request $request)
    {
        // $arrId = $request->all();
        // $cars = Car::find(array_keys($arrId));
        // $path = Storage::putFile('photos', new File(array_values($arrId)[0]));
        // dump($path);
        // dump(array_keys($arrId));
        // dump(array_values($arrId));
        // dump($cars);
        // dd($request);
        $validated = $request->validate([
            'filesTest' => 'required',
        ]);

        if ($request->hasFile('filesTest')) {
            $file = $request->filesTest;
            dump($file);
            //Lấy Tên files
            $path = $request->file('filesTest')->store('images');
            dump('Tên Files: ' . $file->getClientOriginalName());
        }
        dump($path);
        dd($request);
    }
}
