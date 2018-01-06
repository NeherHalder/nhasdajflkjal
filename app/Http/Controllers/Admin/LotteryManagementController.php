<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Application;

class LotteryManagementController extends Controller
{
	public function index($project)
	{
		$project = Project::find($project);
		$winners = Application::where('status', 1)->get();
		return view('admin.projectmgt.lottery.winner-list', compact('project','winners'));
	}
    public function create(Request $request)
    {
        $applications = Application::limit($request->limit)->get()->shuffle();
        foreach($applications as $application)
        {
        	$application->update(['status'=> '1']);
        }
        $project = Project::find($request->id);
		$project->status = 1;
		$project->save();
		return redirect()->back()
            ->withSuccess('Success!');
    }

    public function edit(Project $project)
    {
        return view('admin.projectmgt.lottery.edit', compact('project'));
    }
}
