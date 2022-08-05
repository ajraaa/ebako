<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;


class OrdersController extends Controller
{
    public static function jumlahorder()
    {
        $jumlahorder = Orders::sum('no_order');
        return $jumlahorder;
    }
}
