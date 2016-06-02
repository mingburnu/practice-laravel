<?php

namespace App\Http\Controllers;

use Hamcrest\Type\IsInteger;
use Illuminate\Http\Request;
use App\Car;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $cars = Car::all();
//        $cars = Car::where('model', 'like',  'g3vCnuG2YM%')->take(5)->get();
//        $cars = Car::where('id', 3)->orwhere('id', 6)->get();
//        $cars = Car::where('id', '>', 0)->where('id', '<', PHP_INT_MAX)->get();
//        $cars = Car::where('id', '>', 0)->skip(100)->take(5)->get();
//        $cars = Car::skip(0)->take(PHP_INT_MAX)->get();
//        $cars = Car::simplePaginate(5);
//        $cars = Car::paginate(5);
        $cars = Car::where('id', '>', 0)->where('id', '<', PHP_INT_MAX)->paginate(5);

        return view('cars.index', array('cars' => $cars));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'price' => 'required|numeric|min:1'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('car/create')
                ->withErrors($validator)// send back all errors to the login form
                ->withInput($request->all()); // send back the input (not the password) so that we can repopulate the form
        } else {
            $input = $request->all();

//            $input['price']= 1000;
            $car = Car::create($input);

            return view('cars.show', array('car' => $car));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $car = Car::find($id);
//        $car = Car::where('id', $id)->get()[0];
        $car = Car::where('id', $id)->first();
        return view('cars.show', array('car' => $car));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        //
        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $car = Car::find($id);
        $car->update($input);

        return view('cars.show')->with('car', $car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Car::find($id)->delete();
        return view('cars.index', array('cars' => Car::all()));
    }

    public function test($id, $str)
    {
        $car = Car::find($id);
        return view('test', array('car' => $car), array('str' => $str));
    }
}
