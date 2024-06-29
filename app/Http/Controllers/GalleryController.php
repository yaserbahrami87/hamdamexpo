<?php

namespace App\Http\Controllers;

use App\Models\festival;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(festival $festival,Request $request)
    {

        if($request->has('category'))
        {
            $status=GalleryCategory::where('category',$request->category)
                ->first();
            if($status)
            {
                $galleries=gallery::where('festival_id','=',$festival->id)
                    ->where('gallery_category_id',$status->id)
                    ->orderby('id','desc')
                    ->paginate(20);
                $galleries->appends(['category' => $request['category']]);

            }
            else
            {
                $galleries=gallery::where('festival_id','=',$festival->id)
                    ->orderby('id','desc')
                    ->paginate(20);

                alert()->error('این دسته بندی در گالری وجود ندارد')->persistent('بستن');
            }

        }
        else
        {
            $galleries=gallery::where('festival_id','=',$festival->id)
                ->orderby('id','desc')
                ->paginate(20);
        }




        $category_categories=GalleryCategory::where('status',1)
            ->get();

        return view('gallery')
            ->with('galleries',$galleries)
            ->with('category_categories',$category_categories)
            ->with('festival',$festival);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
