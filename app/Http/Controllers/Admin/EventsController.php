<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\EventRequest;
use App\Event;
use DB;
use Carbon\Carbon;

class EventsController extends Controller
{
	public function index() {
		$events = Event::latest('start_date')->paginate(10);
		return view('admin.events.index', compact('events'));
	}

	public function create() {
		return view('admin.events.create');
	}

	public function store(EventRequest $request) {
		$event = new Event;
		$event->title = $request->title;
		$event->excerpt = $request->excerpt;
		$event->body = $request->body;
		$event->image = $request->image;
		$event->place = $request->place;
		$event->start_date = $request->start_date;
		$event->save();
		return redirect()->route('admin.eventos.index')->with('message', 'Se ha creado el nuevo evento.');
	}

	public function edit($id) {
		$event = Event::find($id);
		return view('admin.events.edit', compact('event'));
	}

	public function update(EventRequest $request, $id) {
		$event = Event::find($id);
		$event->title = $request->title;
		$event->excerpt = $request->excerpt;
		$event->body = $request->body;
		$event->image = $request->image;
		$event->place = $request->place;
		$event->start_date = $request->start_date;
		$event->save();
		return redirect()->route('admin.eventos.edit', $id)->with('message', 'Se ha actualizado el evento.');
	}

	public function destroy($id) {
		$event = Event::find($id);
		$event->delete();
		return redirect()->route('admin.eventos.index')->with('message', 'Se ha eliminado el evento.');
	}

	public function data() {
		$event = Event::orderBy('start_date', 'DESC')->get();

		return response()->json($event)->setStatusCode( Response::HTTP_OK, Response::$statusTexts[ Response::HTTP_OK ]);
	}

	private function convertStringToDate($text) {
		$time = strtotime($text);
		$format = date("Y-m-d H:i:s", $time);
		return $format;
	}
}
