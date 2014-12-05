<?php

class Message extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'message';

    protected $guarded = array("id");

    //Validation rules 

     public static $rules = array(
        'msg'=>'required',
        'mtitle'=>'required'
        
        );

    
    public function subscription(){
        return $this::hasMany("MessageSubscription","messageid","id");
    }
    public function messageout(){
        return $this::hasMany("MessageOut","messageid","id");
    }
    public function schedule(){
        return $this::hasMany("MessageSchedule","messageid","id");
    }

}
