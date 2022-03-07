<?php

namespace App\Http\Controllers\Fino;

use App\Events\BroadCastFinoResponseRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;

class FinoController extends Controller
{
    public function callBack(Request $request)
    {
        broadcast(new BroadCastFinoResponseRequest($request->all()));
        return $request->all();
    }
}
