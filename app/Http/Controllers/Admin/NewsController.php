<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Services\JalaliDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::orderby('id','desc')
            ->get();
        return view('admin.news.news_all')
                    ->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.news_insert');
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
            'title'      =>'required|string|max:200|unique:news,title',
            'description'=>'required|string|max:200',
            'content'    =>'required|string|',
            'festival_id'=>'required|numeric',
            'image'      =>'required|mimes:jpg,jpeg,png,bmp|max:2048',
        ]);

        $news=news::create($request->all()+
            [
                'insert_user_id'    =>Auth::user()->id,
                'date_fa'           =>JalaliDate::get_jalaliNow(),
                'time_fa'           =>JalaliDate::get_timeNow(),
            ]);

        if($request->has('image')&&$request->file('image')->isValid())
        {
            $file=$request->file('image');
            $image="news_".time().'.'.$request->file('image')->extension();
            $path=public_path('/images/news/');
            $files=$request->file('image')->move($path, $image);
        }

        $news->image=$image;
        $news->save();

        if($news)
        {
            alert()->success('خبر با موفقیت ثبت شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ثبت خبر')->persistent('بستن');
        }

        return redirect()->route('admin.news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
