<?php

class MessageSchedule extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public static $rules = array(
        'msg'=>'required',
        'mtitle'=>'required',
        'startdate'=>'required',
        'enddate'=>'required'
        );

    protected $table = 'messageschedule';

    protected $guarded = array("id");
    public function message(){
        return $this::belongsTo("Message","messageid","id");
    }
}
