<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts.contactsOverview', ['contacts' => Contact::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.newContactForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required|max:255|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric',
        ]);

        $contact = new Contact();
        $contact->fill($request->input());
        $contact->save();

        return redirect()->route('contacts.index');


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
        $contact = Contact::find($id);
        return view('contacts.editContactForm',  [
            'contact'=> $contact,
            'id' => $id,
            'fullName' => $contact->fullName,
            'email' => $contact->email,
            'phoneNumber' => $contact->phoneNumber,

        ]);
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
        $request->validate([
            'fullName' => 'max:255|string',
            'email' => 'email',
            'phoneNumber' => 'numeric',
        ]);

        $contact = Contact::find($id);
        $contact->phoneNumber = $request->input('phoneNumber');
        $contact->fullName =$request->input('fullName');
        $contact->email = $request->input('email');
        $contact->save();

        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('contacts.index');

    }
}
