<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Post extends Eloquent {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'post';
    protected $fillable = [
        'type', 'title', 'description', 'image', 'status'
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

    public static function post_type(){
        $result = [
            ''=>'Select Post Type',
            'ict-support'=>'ICT Support',
            'security'=>'Security',
            'consultancy'=>'Consultancy',
            'web-design'=>'Web Design',
            'client-service'=>'Client Service',
            'client-student'=>'Client Student',
            'ecies-overview'=>'Ecies Overview',
            'ecies-partner'=>'Ecies Partner',
            'recent-work'=>'Recent Work',
        ];
        return $result;
    }

}
