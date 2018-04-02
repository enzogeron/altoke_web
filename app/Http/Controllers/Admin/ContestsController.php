<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\ContestRequest;
use App\Contest;
use App\Position;
use App\Department;
use DB;
use Carbon\Carbon;

class ContestsController extends Controller
{
	public function index() {
		$contests = Contest::whereNotNull('created_at')
							->latest('created_at')->paginate(10);
		return view('admin.contests.index', compact('contests'));
	}

	public function create() {
		$positions = Position::get()->pluck('name', 'id');
		$departments = Department::get()->pluck('name', 'id');
		return view('admin.contests.create', compact('positions', 'departments'));
	}

	public function store(ContestRequest $request) {
		$contest = new Contest;
		$contest->title = $request->title;
		$contest->excerpt = $request->excerpt;
		$contest->body = $request->body;
		$contest->position_id = $request->position_id;
		$contest->expiration_date = $request->expiration_date;
		$contest->save();
		$contest->departments()->sync($request->departments);
		return redirect()->route('admin.concursos.index')->with('message', 'Se ha publicado el nuevo concurso estudiantil.');
	}

	public function edit($id) {
		$contest = Contest::find($id);
		$positions = Position::pluck('name', 'id');
		$departments = Department::pluck('name', 'id');
		return view('admin.contests.edit', compact('contest', 'positions', 'departments'));
	}

	public function update(ContestRequest $request, $id) {
		$contest = Contest::find($id);
		$contest->title = $request->title;
		$contest->excerpt = $request->excerpt;
		$contest->body = $request->body;
		$contest->position_id = $request->position_id;
		$contest->expiration_date = $request->expiration_date;
		$contest->save();
		$contest->departments()->sync($request->departments);
		return redirect()->route('admin.concursos.edit', $id)->with('message', 'Se ha actualizado el concurso estudiantil.');
	}

	public function destroy($id) {
		$contest = Contest::find($id);
		$contest->departments()->sync([]); // $contest->departments()->detach();
		$contest->delete();
		return redirect()->route('admin.concursos.index')->with('message', 'Se ha eliminado el concurso estudiantil');
	}

	public function data() {
		$contest = Contest::with('position', 'departments')->where('expiration_date', '>', Carbon::now())->orderBy('created_at', 'DESC')->get();

		return response()->json($contest)->setStatusCode( Response::HTTP_OK, Response::$statusTexts[ Response::HTTP_OK ]);
	}
}
