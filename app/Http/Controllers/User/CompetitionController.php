<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\festival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $competition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
        if($competition->user_id==Auth::user()->id)
        {
            return view('user.competition.competition_edit')
                        ->with('competition',$competition);
        }
        else
        {
            alert()->error('شما اجازه دسترسی به این فایل را ندارید')->persistent('بستن');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition $competition)
    {
        if($competition->user_id==Auth::user()->id)
        {

            $this->validate($request,
                [
                    'name'                      =>'required|string|min:3|max:100',
                    'description'               =>'nullable|string',
                    'image'                     =>'nullable|mimes:jpeg,jpg,pdf,png,bmp|max:3072',
                ]);

                $competition->update([
                    'name'                      =>$request->name,
                    'description'               =>$request->description,
                ]);

                $festival=festival::latest()->first();

                if($request->has('image'))
                {
                    if(is_null($competition->image))
                    {
                        $image=Auth::user()->id."_".time().".".$request->file('image')->extension();
                    }
                    else
                    {
                        $image=pathinfo(public_path('/competition/'.$festival->id."/".$competition->image))['filename'].'.'.$request->file('image')->extension();
                        File::delete(public_path('competition/'.$festival->id."/".$competition->image));
                    }
                    $path=public_path('/competition/'.$festival->id);
                    $files=$request->file('image')->move($path, $image);
                    $request->image=$image;
                    $competition->image=$image;
                    $competition->save();
                    Artisan::call('cache:clear');
                    Artisan::call('view:clear');
                }

                alert()->success('بروزرسانی با موفقیت انجام شد')->persistent('بستن');
                return back();

        }
        else
        {
            alert()->warning('شما اجازه دسترسی به این فایل را ندارید')->persistent('بستن');
            return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        if($competition->user_id==Auth::user()->id)
        {
            $festival=festival::latest()->first();
            File::delete(public_path('competition/'.$festival->id."/".$competition->image));
            $status=$competition->delete();
            if($status)
            {
                alert()->success('با موفقیت حذف شد')->persistent('بستن');
            }
            else
            {
                alert()->error('خطا در حذف عکس')->persistent('بستن');
            }
            return back();
        }
        else
        {
            alert()->warning('شما دسترسی به این فایل ندارید')->persistent('بستن');
            return back();
        }
    }
}
