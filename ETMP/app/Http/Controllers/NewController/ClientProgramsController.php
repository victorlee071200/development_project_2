<?php

namespace App\Http\Controllers\NewController;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\ClientProgram;
use App\Helpers\CurrencyHelper;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProgram\UserProgram;

class ClientProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs =  Program::where('status', 'approved')->get();
        return view('client.new.program.index',compact('programs'));
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
    public function show($programId)
    {
        $authUser = Auth::user();
        $program = Program::where('id', $programId)->first();
        if(is_null($program))
        {
            abort(403, 'The program has not been found!');
        }

        $userBoughtProgram = false;
        if(!is_null($authUser))
        {
            $userProgram = UserProgram::where('user_id', $authUser->id)->where('program_id', $program->id)->first();
            if(!is_null($userProgram))
            {
                $userBoughtProgram = true;
            }
        }

        $currency = CurrencyHelper::getCurrencyString();

        $feedbacks = DB::table('feedbacks')->where('program_id',$program->id)->get();

        return view('client.new.program.details', compact('program', 'userBoughtProgram', 'currency','feedbacks'));
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
        // Validate the request...

        $program = new ClientProgram;
        $program->client_email = Auth::user()->email;
        $program->company_name = request('company_name');
        $program->program_id = $id;
        $program->staff_id = 0;
        $program->option = strtolower(request('option'));

        if ($program->option == "online"){
            $program->client_venue = "online";
        } else{
            $program->client_venue = request('client_venue');
        }

        $program->no_of_employees = request('no_of_employees');
        $program->start_date = request('start_date');
        $program->end_date = request('end_date');
        $program->payment_type = request('payment_type');
        $program->payment_status = "pending";
        $program->client_notes = request('client_notes');
        $program->status= 'pending';

        $program->save();

        return redirect('client/view-all')->withToastInfo($program->name.' Updated Successfully!');

        // return $request->all();
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


    // public function index()
    // {
    //     $programs = program::orderBy('id', 'ASC',)->paginate(5);
    //     return view('programs', compact('programs'));
    // }
}
