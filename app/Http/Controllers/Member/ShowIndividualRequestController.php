<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Request;
use App\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ShowIndividualRequestController extends Controller
{
    public function index()
    {
        $id = Auth::id();

        $data = Request::join('priorities', 'requests.priority_id', '=', 'priorities.id')
            ->join('users as created_by', 'requests.created_by', '=', 'created_by.id')
            ->join('users as assigned_to', 'requests.assigned_to', '=', 'assigned_to.id')
            ->join('statuses', 'requests.status_id', '=', 'statuses.id')
            ->select('requests.id', 'subject', 'priorities.name as priority',
                'created_by.fullname as created_by', 'assigned_to.fullname as assigned_to', 'deadline_at', 'statuses.name as status')
            ->where('created_by.id', '=', $id)
            ->get();

        return view('database_manager.show_list_congviecyeucau.show_member')->with(['indi_data' => $data]);
    }

    public function new()
    {
        $id = Auth::id();

        $data = Request::join('priorities', 'requests.priority_id', '=', 'priorities.id')
            ->join('users as created_by', 'requests.created_by', '=', 'created_by.id')
            ->join('users as assigned_to', 'requests.assigned_to', '=', 'assigned_to.id')
            ->join('statuses', 'requests.status_id', '=', 'statuses.id')
            ->select('requests.id', 'subject', 'priorities.name as priority',
                'created_by.fullname as created_by', 'assigned_to.fullname as assigned_to', 'deadline_at', 'statuses.name as status')
            ->where('created_by.id', '=', $id)
            ->where('requests.status_id', '=', Status::NEW)
            ->get();

        return view('database_manager.show_list_congviecyeucau.show_member')->with(['indi_data' => $data]);
    }

    public function inprogress()
    {
        $id = Auth::id();

        $data = Request::join('priorities', 'requests.priority_id', '=', 'priorities.id')
            ->join('users as created_by', 'requests.created_by', '=', 'created_by.id')
            ->join('users as assigned_to', 'requests.assigned_to', '=', 'assigned_to.id')
            ->join('statuses', 'requests.status_id', '=', 'statuses.id')
            ->select('requests.id', 'subject', 'priorities.name as priority',
                'created_by.fullname as created_by', 'assigned_to.fullname as assigned_to', 'deadline_at', 'statuses.name as status')
            ->where('created_by.id', '=', $id)
            ->where('requests.status_id', '=', Status::IN_PROGRESS)
            ->get();

        return view('database_manager.show_list_congviecyeucau.show_member')->with(['indi_data' => $data]);
    }

    public function resolved()
    {
        $id = Auth::id();

        $data = Request::join('priorities', 'requests.priority_id', '=', 'priorities.id')
            ->join('users as created_by', 'requests.created_by', '=', 'created_by.id')
            ->join('users as assigned_to', 'requests.assigned_to', '=', 'assigned_to.id')
            ->join('statuses', 'requests.status_id', '=', 'statuses.id')
            ->select('requests.id', 'subject', 'priorities.name as priority',
                'created_by.fullname as created_by', 'assigned_to.fullname as assigned_to', 'deadline_at', 'statuses.name as status')
            ->where('created_by.id', '=', $id)
            ->where('requests.status_id', '=', Status::RESOLVED)
            ->get();

        return view('database_manager.show_list_congviecyeucau.show_member')->with(['indi_data' => $data]);
    }

    public function feedback()
    {
        $id = Auth::id();

        $data = Request::join('priorities', 'requests.priority_id', '=', 'priorities.id')
            ->join('users as created_by', 'requests.created_by', '=', 'created_by.id')
            ->join('users as assigned_to', 'requests.assigned_to', '=', 'assigned_to.id')
            ->join('statuses', 'requests.status_id', '=', 'statuses.id')
            ->select('requests.id', 'subject', 'priorities.name as priority',
                'created_by.fullname as created_by', 'assigned_to.fullname as assigned_to', 'deadline_at', 'statuses.name as status')
            ->where('created_by.id', '=', $id)
            ->where('requests.status_id', '=', Status::FEEDBACK)
            ->get();

        return view('database_manager.show_list_congviecyeucau.show_member')->with(['indi_data' => $data]);
    }

    public function closed()
    {
        $id = Auth::id();

        $data = Request::join('priorities', 'requests.priority_id', '=', 'priorities.id')
            ->join('users as created_by', 'requests.created_by', '=', 'created_by.id')
            ->join('users as assigned_to', 'requests.assigned_to', '=', 'assigned_to.id')
            ->join('statuses', 'requests.status_id', '=', 'statuses.id')
            ->select('requests.id', 'subject', 'priorities.name as priority',
                'created_by.fullname as created_by', 'assigned_to.fullname as assigned_to', 'deadline_at', 'statuses.name as status')
            ->where('created_by.id', '=', $id)
            ->where('requests.status_id', '=', Status::CLOSED)
            ->get();

        return view('database_manager.show_list_congviecyeucau.show_member')->with(['indi_data' => $data]);
    }

    public function outofdate()
    {
        $now = Carbon::now();

        $id = Auth::id();

        $data = Request::join('priorities', 'requests.priority_id', '=', 'priorities.id')
            ->join('users as created_by', 'requests.created_by', '=', 'created_by.id')
            ->join('users as assigned_to', 'requests.assigned_to', '=', 'assigned_to.id')
            ->join('statuses', 'requests.status_id', '=', 'statuses.id')
            ->select('requests.id', 'subject', 'priorities.name as priority',
                'created_by.fullname as created_by', 'assigned_to.fullname as assigned_to', 'deadline_at', 'statuses.name as status')
            ->where('created_by.id', '=', $id)
            ->where('requests.status_id', '<>', Status::CLOSED)
            ->where('requests.status_id', '<>', Status::CANCELLED)
            ->where('requests.deadline_at', '<', $now)
            ->get();

        return view('database_manager.show_list_congviecyeucau.show_member')->with(['indi_data' => $data]);
    }
}
