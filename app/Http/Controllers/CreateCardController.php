<?php

namespace App\Http\Controllers;

use App\Models\CreateCard;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class CreateCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    ///// index -> to show all data //////
    public function index()
    {

        $card = CreateCard::latest()->paginate();
        return view('dashboard.show-card',compact('card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //just for going to page added
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
    // for get the request database
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:1 |max:100', ///////Yazan يجب ان لا يتجاوز 10 حروف_ 1- كيف بدي استدعيها لترجمه 2- //////
            'start_date'=>'required',
            'phone' => 'required|regex:/[0-9]{10}/',
            'end_date'=>'required|in:1,2,3', /////////That is required 1,2,3
        ],
            [
                'name.required'=>'يرجى ادخال الاسم  ',
                'email.required'=>'يرجى ادخال البريد الالكتروني  ',
                'password.required'=>'يرجى ادخال كلمه المرور  ',
                'phone.required'=>'يرجى ادخال الهاتف  ',
                'phone.regex'=>'يجب ان يبدآ الرقم ب (07)  ',
                'email.unique'=>'البريد الالكتروني الذي ادخلته مسجل مسبقا',
                'phone.unique'=>'رقم الهاتف الذي ادخلته مسجل مسبقا',
                'password.min'=>'لا يقل اقل من 1 احرف ',
                'password.max'=>'لا يزيد عن 20 احرف ',

            ]);
        //to save data ---> database
        try {
            $card=new CreateCard();
            $card ->name =$request->name;
            $card ->email =$request->email;
            $card ->password =$request->password;
            $card ->phone =$request->phone;
            $card ->year =$request->end_date;
            $card ->start_date =$request->start_date;
            //dd($request ->start_date);

            //// to add  +years to date (1years , 2years same the value get request)
            $date_s = Carbon::createFromFormat('Y-m-d', $request->start_date);
            $date_new=$date_s->addYears($request->end_date);
            $card->end_date=$date_new;

//            if($request->end_date=='1'){
//                $date_new=$date_s->addYear(1);
//                $card->end_date=$date_new;
//
//            }
//            elseif ($request->end_date=='2') {
//                $date_new = $date_s->addYears(2);
//                $card->end_date=$date_new;
//            }
//            else{
//                $request->end_date=='3';
//                $date_new=$date_s->addYears(3);
//                $card->end_date=$date_new;
//            }
//        $currentDateTime=$request->start_date;
//        $newDateTime = $currentDateTime->addYears(5);
//        $card->end_date=$newDateTime;
//
            $card->save();

        }

        catch (\Exception $e){//////// Yazan Exception ?????
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
        return redirect(route('admin.create-card.show'));


    }
    //// DB transaction

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateCard  $createCard
     * @return \Illuminate\Http\Response
     */
    public function show(CreateCard $createCard)
    {
        return view('dashboard.Create-card');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateCard  $createCard
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateCard $createCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateCard  $createCard
     * @return \Illuminate\Http\Response
     */

    //// same the store function to update
    public function update(Request $request)
        ////that for insert + update
    {
        $update_cards=CreateCard::findOrfail($request->id_update);
        {

            $update_cards ->name =$request->name;
            $update_cards ->email =$request->email;
            $update_cards ->end_date =$request->end_date;
            if($request->password =! ""){
                $update_cards ->password =Hash::make($request->password);
            }
            $update_cards ->phone =$request->phone;
            $update_cards ->start_date =$request->start_date;
            //dd($request ->start_date);

            //// to add  +years to date (1years , 2years same the value get request)
            $date_s = Carbon::createFromFormat('Y-m-d', $request->start_date);
            $date_new=$date_s->addYears($request->end_date);
            $update_cards->end_date=$request->end_date;



//            if($request->end_date=='1'){
//                $date_new=$date_s->addYear(1);
//                $card->end_date=$date_new;
//
//            }
//            elseif ($request->end_date=='2') {
//                $date_new = $date_s->addYears(2);
//                $card->end_date=$date_new;
//            }
//            else{
//                $request->end_date=='3';
//                $date_new=$date_s->addYears(3);
//                $card->end_date=$date_new;
//            }
//        $currentDateTime=$request->start_date;
//        $newDateTime = $currentDateTime->addYears(5);
//        $card->end_date=$newDateTime;
//
            $update_cards->save();
        }
        return back();




    }




    /// to delete items
    public function destroy(Request $request)
    {
        CreateCard::destroy($request->id);
        return back();

    }
}
