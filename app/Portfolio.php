<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Portfolio extends Model
{
   protected $table = 'portfolio';
   
   protected $fillable = ['path'];

   protected $baseDir = 'mycv/portfolio';

   public function cv()
   {
   	return $this->belongsTo('App\Cv');
   }

   public static function fromForm(UploadFile $file)
   {
   	$photo = new static;

   	$filename = time() . $file->getClientOriginalName(); 

      // '/flyers/photos' . $filename . '/' ] )

   	$photo->path = $photo->baseDir . '/' . $filename;

   	 $file->move($photo->baseDir, $filename);

   	return $photo;
}
}