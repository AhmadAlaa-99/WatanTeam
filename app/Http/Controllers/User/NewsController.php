<?php
namespace App\Http\Controllers\User;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class NewsController extends Controller
{
    public function index()
    {
        $news=News::latest()->paginate('5');
        return view('User.News.index',compact('news'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $news=News::find($news)->get();
        return view('User.News.show')->with('news',$news);
    }

}
