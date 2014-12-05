<?php

class Subscriber extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subscriber';

    protected $guarded = array("id");
    
    //Validation of subscribers
    public static $rules = array(
        'phone'=>'required|unique:subscriber',
        
        );

   public function subscription(){
        return $this::hasMany("SubscriberSubscription","subscriberid","id");
    }
}
