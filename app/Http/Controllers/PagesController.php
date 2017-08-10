<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Article;
use App\Photo;
use App\Review;
use App\House;

class PagesController extends Controller
{
	public function __construct()
	{
		// TO DO
	}

	public function home()
	{
		$photos = Photo::orderBy('created_at', 'desc')->get();
		$reviews = Review::where('active', '=', true)->orderBy('created_at', 'desc')->get();
		$houses = House::all();

		return view('pages.home', [
			'photos' => $photos,
			'reviews' => $reviews,
			'houses' => $houses
		]);
	}

	public function prices()
	{
		$houses = House::all();

		return view('pages.prices', [
			'houses' => $houses
		]);
	}

	public function news()
	{
		$articles = Article::where('type', '=', 'news')->orderBy('created_at', 'desc')->simplePaginate(10);

		return view('pages.articles', [
			'title' => 'Новости',
			'articles' => $articles
		]);
	}

	public function articles()
	{
		$articles = Article::where('type', '=', 'article')->orderBy('created_at', 'desc')->simplePaginate(10);

		return view('pages.articles', [
			'title' => 'Интересные статьи',
			'articles' => $articles
		]);
	}

	public function article($id)
	{
		$model = Article::find($id);

		if(is_null($model)) {
			abort(Response::HTTP_NOT_FOUND);
		}

		return view('pages.article', [
			'article' => $model
		]);
	}

	public function contacts()
	{
		return view('pages.contacts');
	}
}
