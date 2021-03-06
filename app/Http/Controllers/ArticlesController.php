<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Articles;
use Auth;
use DB;

class ArticlesController extends Controller
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

    public function search(Request $request){

        $s = Request::all();
        $array = explode(' ', $s['search']);

        $result = DB::table('articles');
        $result->where('active', 1);

        if($s['type'] == 1){
            for($i = 0; $i<sizeof($array); $i++){
                $result->where('title', 'LIKE', '%'.$array[$i].'%')
                       ->orWhere('search_keys', 'LIKE', '%'.$array[$i].'%')
                       ->orWhere('some_text', 'LIKE', '%'.$array[$i].'%')
                       ->orWhere('publisher_name', 'LIKE', '%'.$array[$i].'%');
            }
        }
        else if($s['type'] == 2){
            for($i = 0; $i<sizeof($array); $i++){
                $result->where('title', 'LIKE', '%'.$array[$i].'%');
            }
        }
        else if($s['type'] == 3){
            for($i = 0; $i<sizeof($array); $i++){
                $result->where('search_keys', 'LIKE', '%'.$array[$i].'%');
            }
        }
        else if($s['type'] == 4){
            for($i = 0; $i<sizeof($array); $i++){
                $result->where('some_text', 'LIKE', '%'.$array[$i].'%');
            }
        }
        else {
            for($i = 0; $i<sizeof($array); $i++){
                $result->where('publisher_name', 'LIKE', '%'.$array[$i].'%');
            }
        }
        

        $result->get();

        return view('pages.search')->withResults($result->get())->with('array', $array);
    }

    public function viewpdf($id)
    {
        $item = Articles::findOrFail($id);

        return $item->file;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->type == 3 or Auth::user()->type == 1)
            return view('newArticles');
        else return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::all();
        $item = new Articles;

        $item->user_id = Auth::user()->id;
        $item->publisher_name = $input['publisher_name'];
        $item->sub_id = $input['sub_id'];
        $item->title = $input['title'];
        $item->some_text = $input['some_text'];
        $item->co_author = $input['co_author'];
        $item->category_id = $input['category_id'];
        $item->search_keys = $input['search_keys'];
        $item->publication_date = $input['publication_date'];
        $item->page_count = $input['page_count'];

        if(isset($input['file'])){
            $name = uniqid().$input['file']->getClientOriginalName();
            $input['file']->move('pdfs', $name);
            $item->file = $name;
        }
        $item->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = DB::table('articles')
                ->join('articles_category', 'articles.category_id', '=', 'articles_category.cat_id')
                ->join('sub_category', 'articles.sub_id', '=', 'sub_category.subcat_id')
                ->where('articles.id', $id)
                ->first();

        $item = Articles::findOrFail($id);
        $num = $item->clicked;
        $item->clicked = $num+1;
        $item->save();

        return view('pages.article')->withItem($items);
    }

    public function category($id, $s_id)
    {
        $result = DB::table('articles')
                ->where('category_id', $id)
                ->where('sub_id', $s_id)
                ->get();

        $cat = DB::table('articles_category')
                ->where('cat_id', $id)
                ->first();

        $sub = DB::table('sub_category')
                ->where('subcat_id', $s_id)
                ->first();

        return view('pages.category')->withResults($result)->withCat($cat)->withSub($sub);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Articles::find($id);

        if(Auth::user()->id == $item->user_id){
            $item->delete();
        }
        else {
            return 'cant delete';
        }
    }
    public function getArticlesRequists()
    {
        $articles = DB::table('articles')
            ->where('active', '=', 0)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.requists')->withArticle($articles);
    }
}
