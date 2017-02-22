<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Apartment;
use App\Center;


class ApartmentsController extends Controller
{

    public function index()
    {
        $createapts = Apartment::all();
        foreach ($createapts as $apts) {//dd(Center::findOrFail(7)->cntr_name);
            $apts->centerName = Center::findOrFail($apts->cntr_id)->cntr_name;
        }
        return view('   CreateApt.index',compact('createapts'));
    }

    public function show($id)
    {
        $post = Apartment::find($id);
        return view('CreateApt.show', compact('post'));
    }

    public function create()
    {
        $centers = Center::lists('cntr_name', 'id');
        return view('CreateApt.create', compact('centers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {//dd($request);
        $this->validate($request, [
            'apt_floornumber' => 'required|integer',
            'apt_number' => 'required|integer',
        ]);
        $apartment = new Apartment();
        $apartment->apt_floornumber = $request->apt_floornumber;
        $apartment->apt_number = $request->apt_number;
        $apartment->apt_comments = $request->apt_comments;
        $apartment->cntr_id = $request->cntr_id;
        $apartment->save();

        return redirect('apartment');
    }

    /**
     * This func
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $centers = Center::lists('cntr_name', 'id');
        $createapts = Apartment::find($id);
        return view('CreateApt.edit',compact('centers', 'createapts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'apt_floornumber' => 'required|integer',
            'apt_number' => 'required|integer',
        ]);

        $CreateApt = Apartment::find($id);
        $CreateApt->apt_floornumber = $request->apt_floornumber;
        $CreateApt->apt_number = $request->apt_number;
        $CreateApt->apt_comments = $request->apt_comments;
        $CreateApt->cntr_id = $request->cntr_id; //commented to avoid FK from Center table
        $CreateApt->save();
        return redirect('apartment');
    }

    /**
     *
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Apartment::find($id)->delete();
        return redirect('apartment');
    }
}