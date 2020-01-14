<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\EventCollection;
use App\Event;

class EventController extends Controller
{
    public function store(Request $request)
    {
      $event = new Event([
        'title' => $request->get('title'),
        'body' => $request->get('body')
      ]);

      $event->save();

      return response()->json('successfully added');
    }

    public function index()
    {
      return new EventCollection(Event::all());
    }

    public function edit($id)
    {
      $event = Event::find($id);
      return response()->json($event);
    }

    public function update($id, Request $request)
    {
      $event = Event::find($id);

      $event->update($request->all());

      return response()->json('successfully updated');
    }

    public function delete($id)
    {
      $event = Event::find($id);

      $event->delete();

      return response()->json('successfully deleted');
    }
}
