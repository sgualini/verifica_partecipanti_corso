<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attendee;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\AttendeeRequest;

class AttendeesController extends Controller
{
   
    public function index(Request $request)
{
        $attendees = Attendee::latest()->get();
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($attendees);
    	}
		return view('attendees.index', compact('attendees'));
    }

   
    public function create()
    {
       return view('attendees.create');
    }


    public function store(AttendeeRequest $request)
{
        $input = $request->all();
		$attendee = Attendee::create([
				'first_name' => $input['first_name'],
				'last_name' => $input['last_name'],
				'address' => $input['address'],
				'city' => $input['city'],
				'country' => $input['country'],
				'phone_number' => $input['phone_number'],
				'email' => $input['email'],
            
       ]);
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($attendee);
    	}
		
		flash()->success('salvato con successo!');
		
		return redirect('attendees');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attendee $attendee)
{
        return view('attendees.show', compact('attendee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendee $attendee)
    {
        return view('attendees.edit', compact('attendee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Attendee $attendee, AttendeeRequest $request)
    {
        $input = $request->all();
		$attendee->update([
            'first_name' => $input['first_name'],
				'last_name' => $input['last_name'],
				'address' => $input['address'],
				'city' => $input['city'],
				'country' => $input['country'],
				'phone_number' => $input['phone_number'],
				'email' => $input['email'],
        ]);
		
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($attendee);
    	}
		
		flash()->success('aggiornato con successo!');
		
		return redirect('attendees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendeeRequest $request, Attendee $attendee)
    {
        $attendee->delete();
        if ($request->ajax() || $request->wantsJson()) {
        	return new JsonResponse($attendee);
        }
        return redirect('attendees');
    }
}
