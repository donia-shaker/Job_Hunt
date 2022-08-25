<?php

namespace App\Http\Controllers\client\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\EducationRequest;
use App\Http\Resources\EducationCollection;
use App\Http\Resources\EducationResource;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = isset($_GET['userId']) ? $id = $_GET['userId'] : 'all';
        return new EducationCollection(Education::where('user_id',$id)->get());
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EducationRequest $request)
    {
        return new EducationResource(Education::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        return new EducationResource($education);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EducationRequest $request,Education $education)
    {
        $education->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
    }
}
