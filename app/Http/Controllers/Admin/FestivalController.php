<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\festival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $festivals=festival::orderby('id','desc')
            ->get();

        return view('admin.festival.festival_all')
            ->with('festivals',$festivals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.festival.festival_insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'festival'       =>'required|string|unique:festivals,festival',
            'description'           =>'required|string',
        ]);

        $festival=festival::create($request->all()+
            [
                'insert_user_id'    =>Auth::user()->id,
            ]);

        if($festival)
        {
            alert()->success('جشنواره با موفقیت ایجاد شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ایجاد جشنواره')->persistent('بستن');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function show(festival $festival)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function edit(festival $festival)
    {
        return view('admin.festival.festival_edit')
                            ->with('festival',$festival);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, festival $festival)
    {

        $this->validate($request,[
            'festival'       =>'required|string|unique:festivals,festival,'.$festival->id,
            'description'    =>'required|string',
        ]);
        $status=$festival->update($request->all());
        if($status)
        {
            alert()->success('جشنواره با موفقیت بروزرسانی شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در بروزرسانی')->persistent('بستن');
        }

        return redirect('/admin/festival');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function destroy(festival $festival)
    {
        //
    }
}
