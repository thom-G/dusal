<?php

namespace App\Http\Controllers;

use Request;

use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\redirectTo;    

class EventController extends Controller
{
    public function create()
    {
        $event = DB::table('events')->get();
        $input = Request::all();

        $event->title = $input['title'];
        $event->body = $input['body'];
        $event->author = $input['author'];
        $event->lector = $input['lector'];
        $event->where_is = $input['where_is'];
        $event->when_year = $input['when_year'];
        $event->when_month = $input['when_month'];
        $event->when_day = $input['when_day'];
        $event->when_time = $input['when_time'];

        $event->save();
        // $event = DB::table('events')->insert(
        //     array(
        //         'id'=> $group_id ,
        //         'name' => $input['name'],
        //         // 'member' => $input['member'],
        //         'super_admin_id' => $user,
        //         'privacy' => $input['privacy']
        //         )
        //     );

        return Redirect::to('/dashboard');
    }
}
