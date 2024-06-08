<?php

namespace App\Http\Controllers;

use App\Events\CallWaiter;
use App\Events\CallWaiterEvent;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    public function callWaiter(Request $request)
    {
        //écupérer les données du formulaire
        $table_name = $request->input('table_name');
        $user_id = $request->input('iduser');

        event(new CallWaiterEvent($table_name, $user_id));

        return response()->json(['success' => 'Notification sent successfully!']);
    }
}

