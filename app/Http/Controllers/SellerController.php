<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function index(){
        return view('warehouse.seller.index', [
            'datas' => Seller::all()
        ]);
    }
}
