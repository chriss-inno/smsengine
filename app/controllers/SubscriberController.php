<?php

class SubscriberController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$Subscribers=Subscriber::all();
		return View::make("subscribers.index",compact('Subscribers'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('subscribers.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $validator=Validator::make(Input::all(),Subscriber::$rules);

		$fname=Input::get('fname');
		$lname=Input::get('lname');
		$phone=Input::get('phone');
		$email=Input::get('email');
		$sex=Input::get('sex');
		
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);

		}
		else
		{
		$Subscribers=Subscriber::create(array(
         'fname'=>$fname,
         'sname'=>$lname,
         'phone'=>$phone,
         'email'=>$email,
         'sex'=>$sex,
         'status'=>'active'
		));
		return Redirect::to('subscribers');	
		}

		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
