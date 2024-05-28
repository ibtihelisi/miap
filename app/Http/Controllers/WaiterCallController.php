<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\WaiterCalled;

class WaiterCallController extends Controller
{
    public function callWaiter(Request $request)  {
        $table_name = $request->input('table_name');
        event(new WaiterCalled($table_name));
        return response()->json(['status' => 'Call sent']);
    }
}
