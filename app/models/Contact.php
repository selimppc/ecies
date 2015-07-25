<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Contact extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contact';
    protected $fillable = [
        'name', 'email','phone','subject', 'message'
    ];
    public $errors;

    private $rules = [
        //'username'    => 'required|email', // make sure the email is an actual email
        //'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
    ];
    public function validate($data)
    {
        // make a new validator object
        $validate = Validator::make($data, $this->rules);
        // check for failure
        if ($validate->fails())
        {
            // set errors and return false
            $this->errors = $validate->errors();
            return false;
        }
        // validation pass
        return true;
    }
    public function errors()
    {
        return $this->errors;
    }



    // TODO :: boot
    public static function boot(){
        parent::boot();
        if(Auth::check()){
            static::creating(function($query){
                $query->created_by = Auth::user()->id;
            });
            static::updating(function($query){
                $query->updated_by = Auth::user()->id;
            });
        }

    }

    //TODO : Scope Area

    

}
