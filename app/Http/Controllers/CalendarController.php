<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class CalendarController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendar = Event::all();

        $events = array(); 

        foreach ($calendar as $key => $event) {

             $e = array();
             $e['id'] = $event->id;
             $e['title'] = $event->title;
             $e['start'] = $event->start_date ;
             $e['end'] = $event->end_date  ;
             $allday = true;
             $e['allDay'] = $allday;
             array_push($events, $e);
            # code...
          }


        return view('calendar.index', compact('events'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function events()
    {
        $events = Event::all();

        return $events;

    }

     public function admin()
    {
        $events = Event::all();

        $page = 'calendar';

        return view('admin.calendar.index', compact('events', 'page'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('calendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Event::create($request->all());

        return redirect('/admin/calendar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('calendar.show', compact('event'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
       $page = 'calendar';

        return view('admin.calendar.edit', compact('event', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update($request->all());

        return redirect('/admin/calendar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect('/admin/calendar');
    }
}
