<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ListItems;
use App\UsersItems;
use Auth;

class DemoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	return view('demo.index');
    }

    public function get(){
    	$output = array();
    	$output['list_items'] = ListItems::select('id', 'name')
    									->whereNotIn('id', function($query){
    										$query->select('item_id')
    										->from(with(new UsersItems)->getTable())
    										->where('user_id', Auth::user()->id);
    									})->get();

    	$output['list_user_items'] = UsersItems::select('users_items.id', 'listitems.name')
    											->where('user_id', Auth::user()->id)
    											->join('listitems', 'users_items.item_id', '=', 'listitems.id')
    											->get();


    	return response()->json($output);
    }

    public function store(Request $request){
        if($request->has('list')){
            $listItemsID = json_decode($request->list, true);
        	foreach($listItemsID as $id){
                UsersItems::firstOrCreate(['user_id'=>Auth::user()->id, 'item_id'=>$id]);
            }
            return $this->get();
        }
    }

    public function delete(Request $request){
        if($request->has('id')){
            UsersItems::destroy($request->id);
            return $this->get();
        }
    }
}
