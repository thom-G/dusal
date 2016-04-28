<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Events;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $last = DB::table('articles')
                ->join('articles_category', 'category_id', '=', 'articles_category.cat_id')
                ->where('articles.active', '=', 1)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();

        $most = DB::table('articles')
                ->join('articles_category', 'category_id', '=', 'articles_category.cat_id')
                ->where('articles.active', '=', 1)
                ->orderBy('clicked', 'desc')
                ->take(3)
                ->get();

        $event = DB::table('events')
                ->orderBy('created_at', 'desc')
                ->get();

        return view('welcome')->withLast($last)->withMost($most)->withEvent($event);


        $event = DB::table('events')
                ->orderBy('created_at', 'desc')
                ->get();
        return view('welcome')->with('event', $event)->withMost($most)->withLast($last);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
