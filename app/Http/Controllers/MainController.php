<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Review;
use App\Order;

class MainController extends Controller
{
	public function __construct()
	{
		// TO DO
	}

	public function addReview(Request $request)
	{
		$m = Review::create($request->all());
		return response()->json($m, Response::HTTP_CREATED);
	}

	public function addOrder(Request $request)
	{
		$data = $request->all();
		$data['from'] = $data['from_day'] . ' ' . Order::convertMonth($data['from_month']);
		$data['to']   = $data['to_day']   . ' ' . Order::convertMonth($data['to_month']);
		$m = Order::create($data);

		return response()->json($m, Response::HTTP_CREATED);
	}
}
