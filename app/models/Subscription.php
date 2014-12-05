<?php

class Subscription extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subscription_category';

    protected $guarded = array("id");
    
    public function message(){
        return $this::hasMany("MessageSubscription","subscriptionid","id");
    }
    public function subscriber(){
        return $this::hasMany("SubscriberSubscription","subscriptionid","id");
    }
}
