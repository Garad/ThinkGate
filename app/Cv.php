<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
	protected $table = 'cv';

    protected $fillable = [
     'name',
     'passport',
     'birth_place',
     'date_birth',
     'nationality',
     'gender',
     'avatar', 
     'uni_name',
     'CGPA', 
     'grad_year', 
     'skill1', 
     'skill2', 
     'skill3', 
     'skill4', 
     'skill5', 
     'skill6', 
     'skill7', 
     'skill8', 
     'skill9', 
     'skill10', 
     'company_name1', 
     'job_title1', 
     'start_date1', 
     'end_date1', 
     'job_description1', 
     'company_name2', 
     'job_title2',
     'start_date2', 
     'end_date2', 
     'job_description2', 
     'address_line', 
     'zip', 
     'city', 
     'state', 
     'email_address', 
     'telephone',
     'about_me',
     'course',
     ];

     /**
     *Find the cv at the given name
     *
     **/


     public static function locatedAt($passport, $name)
     {
       $name = str_replace('-', ' ', $name);

       return static::where(compact('passport', 'name'))->firstOrFail();

     }
/*
     public static function scopeLocatedAt($query, $passport, $name)
     {
       $name = str_replace('-', ' ', $name);

       return static::where(compact('passport', 'name'))->first();

     }
*/
     public function addPhoto(Photo $photo)
     {
          return $this->photos()->save($photo);

     } 

     public function photos(){
     	return $this->hasMany('App\Photo');
     }
     

     public function owner()
     {
          return $this->belongsTo('App\User', 'user_id');
     }



     public function ownedBy(User $user)
     {

          return $this->user_id = $user->id;

     }
}
