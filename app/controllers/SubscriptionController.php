<?php

class SubscriptionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$subscriptions=Subscription::all();
		return View::make('subscriptions.index',compact('subscriptions'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('subscriptions.create');
	}
	public function add()
	{
		//
		return View::make('subscriptions.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$category_name=Input::get('category_name');
		$category_descriptions=Input::get('category_descriptions');
		$Subscription=Subscription::create(array(
            'category_name'=>$category_name,
            'category_descriptions'=>$category_descriptions,
            'userid'=>'1'
			));
		return Redirect::to('subscriptions');

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
	public function subscribe()
	{
		//
		$fname=Input::get('fname');
		$lname=Input::get('lname');
		$phone=Input::get('phone');
		$email=Input::get('email');
		$sex=Input::get('sex');
		

		$Subscribers=Subscriber::create(array(
         'fname'=>$fname,
         'sname'=>$lname,
         'phone'=>$phone,
         'email'=>$email,
         'sex'=>$sex,
         'status'=>'active'
		));

		//Get category 
        $categoryid=Input::get('categoryid');
        $SubscriberSubscription=SubscriberSubscription::create(array(
        	'subscriberid'=>$Subscribers->id,
        	'subscriptionid'=>$categoryid,
        	'status'=>'active'
        	));
       return Redirect::to('subscriptions/add');


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
