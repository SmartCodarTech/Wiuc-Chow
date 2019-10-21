<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::paginate(5);

        return view('system-mgmt/contact/index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateInput($request);

        Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' =>$request['subject'],
            'message' => $request['message']

        ]);
        return redirect()->intended('/wiuc/contact')->with('success','Thanks for Contacting us, we will get back to you soon');
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
        $contacts = Contact::find($id);
        // Redirect to user list if updating user wasn't existed
        if ($contacts == null || count($contacts) == 0) {
            return redirect()->intended('system-mgmt/contact/edit');
        }

        return view('contact-mgmt/edit', ['contact' => $contacts]);
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
        $contacts = Contact::findOrFail($id);
        $constraints = [
            'name' => 'required|max:20',
            'email'=> 'required|max:60',
            'subject' => 'required|max:60',
             'message' => 'required|max:60'
        ];
        $input = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        ];
        if ($request['password'] != null && strlen($request['password']) > 0) {
            $constraints['password'] = 'required|min:6|confirmed';
            $input['password'] =  bcrypt($request['password']);
        }
        $this->validate($request, $constraints);
        Contact::where('id', $id)
            ->update($input);

        return redirect()->intended('/contact-management');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::where('id', $id)->delete();
        return redirect()->intended('system-management/contact');
    }

    /**
     * Search user from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        ];

        $users = $this->doSearchingQuery($constraints);
        return view('system-mgmt/contact/index', ['contacts' => $contacts, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = Contact::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
    private function validateInput($request) {
        $this->validate($request, [
            'name' => 'required|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:1000'

        ]);


    }
}
