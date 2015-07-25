<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
    protected $fillable = [
        'username', 'password', 'first_name', 'last_name', 'email', 'last_visit',
        'ip_address','status', 'verified_code', 'csrf_token'
    ];
    public $errors;

    private $rules = [
        'username'    => 'required|email', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
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

    public function getReminderEmail()
    {
        return $this->email;
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }


    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }


    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


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

}
