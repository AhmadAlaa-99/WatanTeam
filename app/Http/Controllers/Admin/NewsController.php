<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::select('id','content','created_at','updated_at')->latest()->paginate('8');
        return view('Admin.News.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.News.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required|string'
        ]);
        $news=News::create(['content'=>$request->content]);
        return redirect()->route('news.index')->with([
            'message' => 'News Added successfully',
            'alert-type' => 'success',
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $news=News::find($news->id)->get();
        return view('Admin.News.index')->with('news',$news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $news=News::where('id',$news->id)->first();
        return view('Admin.News.edit')->with('news',$news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
       
        $news=News::findOrFail($id);
        
        
       // $news=News::find($news->id)->get();
        $news->update(['content'=>$request->content,'updated_at'=>carbon::now()]);
       
        return redirect()->route('news.index')->with([
            'message' => 'News update successfully',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
       
        $news=News::where('id',$news->id)->first();
        $news->delete();
        return redirect()->route('news.index')->with([
            'message' => 'News deletes successfully',
            'alert-type' => 'success',
        ]);
    }
}
