<?php

class Log extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'logs';

    protected $guarded = array("id");
    

}
