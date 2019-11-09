<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductReviewRequest;
use Illuminate\Support\Facades\DB;

class ProductReviewController extends Controller
{
    
    function index()
    {
        $result = DB::table('product_review')->get();
        return view('pages.index', compact('result'));
    }

    function show($postSlug)
    {
        $firstPost = DB::table('product_review')->where('id', $postSlug)->first();

        if ($firstPost != null) {
            return view('pages.detail', compact('firstPost'));
        } else {
            abort(404);
        }
    }

    function create()
    {
        return view('pages.add-new-product-review');
    }

    function store(ProductReviewRequest $request){
        $request_data = $request->all();
        unset($request_data['_token']);

        $result = DB::table('product_review')->insert(
            $request_data
        );

        return redirect('/products');
    }

    function upvote($id){
        $request_data1 = DB::table('product_review')->where('id', $id)->first();
        
        if ($request_data1 != null) {
            $request_data1['votes'] += 1; 

        $result = DB::table('product_review')->insert(
            $request_data1
        );
        } else {
            abort(404);
        }
        

        return redirect('/products');
    }

}
