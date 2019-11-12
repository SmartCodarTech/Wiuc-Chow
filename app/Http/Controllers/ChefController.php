<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Chef;


class ChefController extends Controller
{
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
        $chefs= Chef::paginate(5);

        return view('chef-mgmt/index', ['chefs' => $chefs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $cities = City::all();
        // $states = State::all();
        //$countries = Country::all();
       // $departments = Department::all();
        //$divisions = Division::all();
        return view('chef-mgmt/create');
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
        // Upload image
        $path = $request->file('picture')->store('avatars');
        $keys = ['last_name', 'first_name','gender',
            'age', 'phone','address','employed_date','salary','staff_position','twiiter_account',
            'facebook_account','ig_account','gmail_account'];
        $input = $this->createQueryInput($keys, $request);
        $input['picture'] = $path;
        // Not implement yet
        // $input['company_id'] = 0;
        Chef::create($input);

        return redirect()->intended('/chef-management')->with('success','Account Created Successfully');
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
        $chefs = Chef::find($id);
        // Redirect to state list if updating state wasn't existed
        if ($chefs == null || count($chefs) == 0) {
            return redirect()->intended('/chef-management');
        }
        //$cities = City::all();
        //  $states = State::all();
        // $countries = Country::all();
        //$departments = Department::all();
       // $divisions = Division::all();
        return view('chef-mgmt/edit');
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
        $chefs = Chef::findOrFail($id);
        $this->validateInput($request);
        // Upload image
        $keys = ['last_name', 'first_name','gender',
            'age', 'phone', 'address','employed_date', 'salary', 'staff_position','twiiter_account',
            'facebook_account','ig_account','gmail_account'];
        $input = $this->createQueryInput($keys, $request);
        if ($request->file('picture')) {
            $path = $request->file('picture')->store('avatars');
            $input['picture'] = $path;
        }

        Chef::where('id', $id)
            ->update($input);

        return redirect()->intended('/chef-management');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chef::where('id', $id)->delete();
        return redirect()->intended('/chef-management');
    }

    /**
     * Search state from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'firstname' => $request['firstname'],
            'department.name' => $request['department_name']
        ];
        $chefs = $this->doSearchingQuery($constraints);
        $constraints['department_name'] = $request['department_name'];
        return view('chef-mgmt/index', ['chefs' => $chefs, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = DB::table('chef')
            ->leftJoin('department', 'employees.department_id', '=', 'department.id')
            ->leftJoin('division', 'employees.division_id', '=', 'division.id')
            ->select('employees.firstname as employee_name', 'employees.*','department.name as department_name', 'department.id as department_id', 'division.name as division_name', 'division.id as division_id');
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where($fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }

    /**
     * Load image resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function load($name) {
        $path = storage_path().'/app/avatars/'.$name;
        if (file_exists($path)) {
            return Response::download($path);
        }
    }

    private function validateInput($request) {
        $this->validate($request, [
            'last_name' => 'required|max:60',
            'first_name' => 'required|max:60',
            'gender' => 'required|max:60',
            'age' => 'required|max:60',
            'phone' => 'required',
            'address'=>'required',
            'employed_date' => 'required',
            'salary' => 'required',
            'staff_position' => 'required',
            'twiiter_account' => 'required|max:60',
            'facebook_account' => 'required|max:60',
            'ig_account' => 'required|max:60',
            'gmail_account' => 'required|max:60',
        ]);
    }

    private function createQueryInput($keys, $request) {
        $queryInput = [];
        for($i = 0; $i < sizeof($keys); $i++) {
            $key = $keys[$i];
            $queryInput[$key] = $request[$key];
        }

        return $queryInput;
    }
}
