<?php

namespace App\Http\Controllers;

use Request;

use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\redirectTo;    
use App\Event;

class EventController extends Controller
{
    public function create()
    {
        $event = new Event;
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
        return Redirect::to('/dashboard');
    }
    public function show($id)
    {
        $item = Event::findOrFail($id);
        return view('pages.event')->withEvent($item);
    }
    public function index()
    {
        $events = DB::table('events')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.events')->withEvents($events);
    }
}
