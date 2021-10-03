<?php

namespace App\Http\Controllers;

use App\Models\scholarshipRegistration;
use Illuminate\Http\Request;

class ScholarshipRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //shows the Registration form.

        return  view('e-learning_scholarship_registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //Validate and Store Data to the Database
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'guarantor_name' => '',
            'guarantor_email' => '',
            'guarantor_phone' => '',
            'course' => 'required',
            'platform' => 'required',
            'user_phone' => 'required',
            'user_whatsapp' => 'required',
            'county' => 'required',
            'ward' => 'required',
            'residence' => 'required',
            'gender' => 'required',
            'disability' => '',
            'awareness' => 'required',
            'linkedin' => '',
            'internet_Connectivity' => 'required',
            'internet_access' => 'required',
            'education_level' => 'required',
            'student_club' => 'required',
            'employment_Status' => 'required',
            'opportunities' => '',
            'why_you' => 'required',
            'faculty' => '',
            'year_Study' => '',
            'specialization_area' => '',
            'declaration' => 'required',

        ]);

        scholarshipRegistration::create($request->all());
        return redirect()->back()->with('Application successfully completed. We will get back to you soon');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\scholarshipRegistration  $scholarshipRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(scholarshipRegistration $scholarshipRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\scholarshipRegistration  $scholarshipRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(scholarshipRegistration $scholarshipRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\scholarshipRegistration  $scholarshipRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, scholarshipRegistration $scholarshipRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\scholarshipRegistration  $scholarshipRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(scholarshipRegistration $scholarshipRegistration)
    {
        //
    }
}
