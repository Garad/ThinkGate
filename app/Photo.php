<?php

namespace App;
use Image;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{

    protected $table = 'flyer_photos';

    protected $fillable = ['path', 'name', 'thumnail_path'];

    protected $baseDir = '/flyers/photos';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * A flyer has a photo or photo belong to Flyer
     */
    public function cv()
    {
        return $this->belongsTo('App\Cv');
    }

    public static function fromForm(UploadedFile $file)
    {
        $photo = new static;

    

        $fileName = time() . $file->getClientOriginalName();

        $photo->path = "/flyers/photos/{$fileName}";

        $file->move("flyers/photos", $fileName);
     
        return $photo;
    }
}

