<?php

class MessagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$messages=Message::all();
		return View::make("messages.index",compact('messages'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	//Compose message
	public function compose()
	{
		//
		return View::make("messages.create");
	}

	//Send messages 
	public function sendmsg()
	{
		//
		//Process sending message 
		$validator=Validator::make(Input::all(),Message::$rules);
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);

		}
		else
		{


				$mtitle=Input::get('mtitle');
				$phone=Input::get('phone');
				$categoryid=Input::get('categoryid');
				$msg=Input::get('msg');
				$senttocategory=Input::get('senttocategory');
		        
		        $Message=Message::create(array(

						'title'=>$mtitle,
						'descriptions'=>$msg,
						'status'=>'sent'
						));

				//Check if category is empty
				if(isset($senttocategory))
				{
				    
		           $Subscription=Subscription::find($categoryid);
		           
		            
				}
				else
				{
					

					//send 
					$messageOut=MessageOut::create(array(
						'MessageTo'=>$phone,
						'MessageText'=>$msg,
						'messageid'=> $Message->id
						));
				}
				return Redirect::to('sent');
	   }

		
	}

	//Save schedule 
	public function saveschedule()
	{
         
         $validator=Validator::make(Input::all(),MessageSchedule::$rules);
         if($validator->fails())
         {
             return Redirect::back()->withInput()->withErrors($validator);
         }
         else
         {
              $message=Message::create(array(
              	'title'=>Input::get('mtitle'),
              	'descriptions'=>Input::get('msg'),
              	'status'=>'active'
              	));
              //Insert into schedule now 

              $MessageSchedule=MessageSchedule::create(array(
                  	'messageid'=>$message->id,
                  	'startdate'=>Input::get('startdate'),
                  	'enddate'=>Input::get('enddate'),
                  	'repeat'=>Input::get('repeat'),
                  	'mon'=>Input::get('mon'),

                  	'tue'=>Input::get('tue'),
                  	'wed'=>Input::get('wed'),
                  	'thu'=>Input::get('thu'),
                  	'fri'=>Input::get('fri'),
                  	'sat'=>Input::get('sat'),
                  	'sun'=>Input::get('sun')
                  	));
                  return Redirect::to('mschedule');
         }

	}

	//Sent messages 
	public function sent()
	{
		//
		$messages=Message::where('status','=','sent');
		return View::make('messages.sentmessages',compact('messages'));
	}

	//Pending 
	//Sent messages 
	public function pending()
	{
		//
		$messages=Message::where('status','=','pending');
		return View::make('messages.pendingmsg',compact('messages'));
		
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
    
    //Messages Schedule 
    
    public function openschedule()
	{
		//
		return View::make("messages.schedule");
	}

	//Manage schedule 
	public function openmschedule()
	{
		//
		return View::make("messages.mschedule");
	}

}
