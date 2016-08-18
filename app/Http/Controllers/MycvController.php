<?php

namespace App\Http\Controllers;
use App\photo;
use App\Cv;
use App\User;
use Image;
//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\cvRequest;


class MycvController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);

        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cv.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cvRequest $request, Cv $cv)
    {
        // Cv::create($request->all());

        $cv = new Cv($request->all());

       // $cv->name = str_replace(' ', '-', $cv->name);

        if ($request->file('avatar')) {

        $fileName = time() . $file->getClientOriginalName();

        $cv->avatar = "/uploads/avatar/" . $fileName;

        $file->move("uploads/avatar", $fileName);

        }


         \Auth::user()->cv_tab()->save($cv);
        return redirect('/' . $cv->passport . '/' . $cv->name);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($passport, $name)
    {
       // $name = str_replace('-', ' ', $name);

        $cv = Cv::locatedAt($passport, $name);


        return view('cv.show', compact('cv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addPhoto($passport, $name, Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:jpg,jpeg,png,bmp'
            ]);

        $cv = Cv::locatedAt($passport, $name);

        if($cv->user_id != \Auth::id())
        {
            if($request->ajax())
            {
                return response(['message' => 'No Way.'], 403);
            }

            flash('no way.');

            return redirect('/');

        }

     
        $photo = Photo::fromForm($request->file('file'));

       $cv->addPhoto($photo);


    } 
}
