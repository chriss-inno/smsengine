<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$users=User::all();
		return View::make("users.index",compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	//Use edit 


//Process login 

	public function processlogin()
	{
		
        $rules = array(
	    'email'=>'required|email',
	    'password'=>'required'
	    );

         $validator = Validator::make(Input::all(),$rules);
         if ($validator->passes()) 
         {
             return Redirect::to('home');
         }
         else
         {
         	return Redirect::back()->withInput()->withErrors($validator);
         }
		
		
	}
	public function useredit($id)
	{
		//
         $user=User::find($id);

		return View::make("users.edit",compact('user'));
		
	}
	public function userview($id)
	{
		//
         $user=User::find($id);

		return View::make("users.view",compact('user'));
		
	}
	
	public function create()
	{
		//

		return View::make("users.create");
		
	}
	public function manage()
	{
		//
        
		return View::make("users.manage");
		
	}

	//Lad employee user 
	public function add()
	{
		//
        $error="";
		return View::make("users.add",compact('error'));
		
	}

//Lad employee user 
	public function addpost()
	{
		//
        $error="";
        //Check validation 
		 $validator = Validator::make(Input::all(), User::$rules);
         if ($validator->passes()) 
         {

		 $user=User::create(array(
         'fname'=>Input::get('fname'),
         'lname'=>Input::get('lname'),
         'phone'=>Input::get('phone'),
         'email'=>Input::get('email'),
         'sex'=>Input::get('sex'),
         'status'=>'active',
         'username'=>Input::get('username'),
         'role'=>Input::get('role'),
         'pass'=>Hash::make(Input::get('pass'))
		));

		   return Redirect::to('users');
	    }
	    else
	    {
	        return Redirect::back()->withInput($validator)->withErrors();
		}
        
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		//Check validation 
		 $validator = Validator::make(Input::all(), User::$rules);
		 
         if ($validator->passes()) 
         {
           
		  	   $user=User::create(array(
	         'fname'=>Input::get('fname'),
	         'lname'=>Input::get('lname'),
	         'phone'=>Input::get('phone'),
	         'email'=>Input::get('email'),
	         'sex'=>Input::get('sex'),
	         'status'=>'active',
	         'username'=>Input::get('username'),
	         'role'=>Input::get('role'),
	         'pass'=>Hash::make(Input::get('pass'))
			));

			 return Redirect::to('users');	
		  
	    }
	    else
	    {
	    	return Redirect::back()->withInput()->withErrors($validator);
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
