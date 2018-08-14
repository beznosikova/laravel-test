<?php

namespace App\Http\Controllers;

use App\ContactForm;
use App\Mail\FormFilled;
use Illuminate\Support\Facades\Mail;
use App\Library\Exceptions\CustomException;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    private $validateParams = [
        'name' => 'required|max:120',
        'phone' => 'regex:/\(0[0-9]{2}\)[0-9]{7}/',
        'email' => 'required|email',
        'message' => 'required',
        'g-recaptcha-response' => 'required|captcha',
    ];    
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
        return view('face.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, 
            $this->validateParams
        );

        $contact = ContactForm::create($request->all());

        if ($contact){
            Mail::to('beznosikovat@gmail.com')
                ->send(new FormFilled($contact))
                ;
            return redirect()->route('face');
        } else {
            throw new CustomException('Store error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
