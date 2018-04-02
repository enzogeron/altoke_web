<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\NotificationRequest;
use App\Notification;
use DB;
use Carbon\Carbon;

class NotificationsController extends Controller
{
	public function index() {
		$notifications = Notification::latest('created_at')->paginate(10);
		return view('admin.notifications.index', compact('notifications'));
	}

	public function create() {
		return view('admin.notifications.create');
	}

	public function store(NotificationRequest $request) {
		$notification = new Notification;
		$notification->title = $request->title;
		$notification->body = $request->body;
		$notification->relevance = $request->relevance ? true : false;
		$notification->expiration_date = $request->expiration_date;
		$notification->save();
		return redirect()->route('admin.notificaciones.index')->with('message', 'Se ha publicado la nueva notificación.');
	}

	public function edit($id) {
		$notification = Notification::find($id);
		return view('admin.notifications.edit', compact('notification'));
	}

	public function update(NotificationRequest $request, $id) {
		$notification = Notification::find($id);
		$notification->title = $request->title;
		$notification->body = $request->body;
		$notification->relevance = $request->relevance ? true : false;
		$notification->expiration_date = $request->expiration_date;
		$notification->save();
		return redirect()->route('admin.notificaciones.edit', $id)->with('message', 'Se ha actualizado la notificación.');
	}

	public function destroy($id) {
		$notification = Notification::find($id);
		$notification->delete();
		return redirect()->route('admin.notificaciones.index')->with('message', 'Se ha eliminado la notificación.');
	}

	public function data() {
		$notification = Notification::orderBy('relevance', 'DESC')->where('expiration_date', '>', Carbon::now())->orderBy('created_at', 'DESC')->orderBy('relevance', 'DESC')->get();

		return response()->json($notification)->setStatusCode( Response::HTTP_OK, Response::$statusTexts[ Response::HTTP_OK ]);
	}
}
