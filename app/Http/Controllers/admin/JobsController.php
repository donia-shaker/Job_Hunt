<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Enum\CRUDMessages;
use App\Http\Requests\JobsRequest;
use App\Models\Cities;
use App\Models\Companies;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class JobsController extends Controller
{
    public function show()
    {
        $do = isset($_GET['do']) ? $do = $_GET['do'] : 'Manage';
        $job = isset($_GET['Id']) ? $job = Jobs::with(['company','city'])->where('id', $_GET['Id'])->first()->get() : 'all';
        $jobs = Jobs::with(['company','city'])->orderBy('id', 'DESC')->where('end_date', '>', date('Y-m-d'))->where('status', 0)->get();
        $count_ended_jobs = Jobs::with(['company','city'])->orderBy('id', 'DESC')->where('end_date', '<', date('Y-m-d'))->where('status', 0)->count();
        $ended_jobs = Jobs::with(['company','city'])->orderBy('id', 'DESC')->where('end_date', '<', date('Y-m-d'))->where('status', 0)->get();
        $count_complated_jobs = Jobs::with(['company','city'])->orderBy('id', 'DESC')->where('end_date', '<', date('Y-m-d'))->where('status', 1)->count();
        $complated_jobs = Jobs::with(['company','city'])->orderBy('id', 'DESC')->where('end_date', '<', date('Y-m-d'))->where('status', 1)->get();
        $cities = Cities::where('is_active', 1)->get();
        $companies = Companies::where('is_active', 1)->get();
        $route = Route::current()->getName();

        // return $jobs;
        if ($route == 'jobs') {
            return view('admin.jobs', [
                'jobs'      => $jobs,
                'do'        => $do,
                'job'       => $job,
                'cities'    => $cities,
                'companies' => $companies
            ]);
        } elseif ($route == 'ended_jobs') {
            return view('admin.ended_jobs', [
                'jobs' => $ended_jobs,
                'count_ended_jobs'=>$count_ended_jobs
            ]);
        } elseif ($route == 'complated_jobs') {
            return view('admin.complated_jobs', [
                'jobs' => $complated_jobs,
                'count_complated_jobs'=>$count_complated_jobs
            ]);
        }
    }

    public function add(JobsRequest $request)
    {
        // return $request;
        $request->validated();

        Jobs::create([
            'name'      => [
                'ar'    => $request->nameAR,
                'en'    => $request->nameEN
            ],
            'city_id'     =>  $request->city,
            'company_id'     =>  $request->company,
            'start_date'    =>  now(),
            'end_date'    =>  $request->end_date,
            'details'      => [
                'ar'    => $request->detailsAR,
                'en'    => $request->detailsEN
            ],
            'is_active' =>  $request->is_active
        ]);

        return redirect()->route('jobs')->with([
            'success'   => CRUDMessages::MESSAGE_ADD_SUCCESS,
            'error'     => CRUDMessages::MESSAGE_ADD_ERROR
        ]);
    }

    public function update(JobsRequest $request, $id)
    {
        // return $request;
        $request->validated();

        Jobs::find($id)->update([
            'name'      => [
                'ar'    => $request->nameAR,
                'en'    => $request->nameEN
            ],
            'city_id'     =>  $request->city,
            'company_id'     =>  $request->company,
            'start_date'    =>  now(),
            'end_date'    =>  $request->end_date,
            'details'      => [
                'ar'    => $request->detailsAR,
                'en'    => $request->detailsEN
            ],
            'is_active' =>  $request->is_active
        ]);

        return redirect()->route('jobs')->with([
            'success'   => CRUDMessages::MESSAGE_UPDATE_SUCCESS,
            'error'     => CRUDMessages::MESSAGE_UPDATE_ERROR
        ]);
    }

    public function active($id)
    {
        $jobs = Jobs::find($id);
        if ($jobs->is_active)
            $jobs->is_active = 0;
        else
            $jobs->is_active = 1;
        if ($jobs->save())
            return redirect()->back()->with([
                'success'   => CRUDMessages::MESSAGE_ACTIVE_SUCCESS,
                'error'     => CRUDMessages::MESSAGE_ACTIVE_ERROR
            ]);
    }

    public function delete($id)
    {
        $jobs = Jobs::find($id);
        if ($jobs->delete())
            return redirect()->back()->with([
                'success'   => CRUDMessages::MESSAGE_DELETE_SUCCESS,
                'error'     => CRUDMessages::MESSAGE_DELETE_ERROR
            ]);
    }

    public function changeStatus($id){
        $jobs = Jobs::find($id);
            $jobs->status = 1;
        if ($jobs->save())
            return redirect()->back()->with([
                'success'   => CRUDMessages::MESSAGE_ACTIVE_SUCCESS,
                'error'     => CRUDMessages::MESSAGE_ACTIVE_ERROR
            ]);
    }
}
