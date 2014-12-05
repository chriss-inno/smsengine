<?php

class Phonebook extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'phonebook';

    protected $guarded = array("id");
    
    public function subscription(){
        return $this::hasMany("MessageSubscription","userid","id");
    }
    public function messageout(){
        return $this::hasMany("MessageOut","messageid","id");
    }

}