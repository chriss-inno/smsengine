<?php

class SubscriberSubscription extends Eloquent  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subscriber_subscription';

    protected $guarded = array("id");

    public function category(){
        return $this::belongsTo("Subscription","subscriptionid","id");
    }
    public function subscriber(){
        return $this::belongsTo("Subscriber","id","subscriberid");
    }
    

}
