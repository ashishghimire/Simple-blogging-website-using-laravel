<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use Auth;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	/*public function __construct()
	{
		$this->middleware('auth',['only'=>'create','edit']);
	}*/

	
	public function index(Request $request)
	{
        $output=Article::all();
//        $url = $request->url();
//        dd($url);
        return view('articles.index',compact('output'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tags=Tag::lists('name', 'id');
		return view('articles.create',compact('tags'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
		
		$article= Auth::user()->articles()->create($request->all());
		$article->tags()->attach($request->input('tag_list'));

		/*session()->flash ('flash_message', 'Thanks for uploading your article');
		session()->flash ('flash_message_important', false);*/
		flash()->success('Your article has been created');
		return redirect('article');/*->with([
			'flash_message'=> 'Thanks for uploading your article',
			//'flash_message_important'=> true
		]);*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$article=Article::where('slug','=',$slug)->first();
		//$article=findBySlugOrIdOrFail('slug-or-id');
		//$article=Article::findBySlugOrIdOrFail('slug-or-id');
		//return View('article')->with("allarticles", $output);
		return view ('article', compact('article'));
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$tags=Tag::lists('name', 'id');
		$article=Auth::user()->articles()->where('slug','=',$slug)->first();
		if (is_null($article)){
			flash()->message('This article does not belong to you');
			return redirect('article');
		}
		
		//return View('article')->with("allarticles", $output);
		return view ('articles.edit', compact('article','tags'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug, ArticleRequest $request)
	{
		$article=Article::where('slug','=',$slug)->first();
		$article->update($request->all());
		$article->tags()->sync($request->input('tag_list'));
		return redirect('/article');
	}
	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
