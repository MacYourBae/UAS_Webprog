<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = Item::paginate(10);
        return view('home', ['items' => $data]);
    }

    public function show($item_id)
    {
        $data = Item::findOrFail($item_id);
        return view('detail', compact('data'));
    }

    public function buy(Request $request)
    {
        $data = $request->all();
        $data['account_id'] = Auth::user()->account_id;
        Order::create($data);
        return redirect()->route('cart');
    }
}
