<?php

class MessageOut extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'MessageOut';

    protected $guarded = array("id");
    
    public function subscription(){
        return $this::belongsTo("Message","id","messageid");
    }

}
