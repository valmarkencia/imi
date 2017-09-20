<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class PageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function sendContact(Request $request)
    {
        $captcha = $request['g-recaptcha-response'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $secretKey = '6LdkbTEUAAAAAIp7gYF12BMmsqy-8yys6NjDhE6P';
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip),true);

        if($response['success'])
            {
                $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'msg' => 'required',
                ]);

                $success = Mail::send('send', $request->toArray(), function ($message) {
                        $message->from('valmarkencia@gmail.com', 'Interior Motif Inc');
                        $message->to('interiormotifinc@yahoo.com');
                        $message->subject('Message from www.interiormotifinc.com');
                    });
                if(!$success){
                return redirect()->back()->with('success', 'Thank you for getting in touch! We\'ll get back to you shortly.');
                }else{
                    return redirect()->back()->with('error', 'Something went wrong, please try again.');
                }
            }
        else
        {
            return redirect()->back();
        }
        
    }
}
