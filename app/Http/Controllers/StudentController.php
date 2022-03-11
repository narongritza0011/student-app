<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {



        return view('form');
    }



    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate(
            [
                'it1' => 'required',
                'it2' => 'required',
                'detail_learn_it' => 'required',
                'introduce_it' => 'required',
                'future_career' => 'required',
                'comment_covid' => 'required',


            ],
            [
                'it1.required' => "กรุณาเลือกระดับความคิดเห็น",
                'it2.required' => "กรุณาเลือกระดับความคิดเห็น",
                'detail_learn_it.required' => "กรุณากรอกข้อมูล ความคิดเห็นเกี่ยวกับการเรียน ม.ราชภัฏพิบูลสงคราม สาขาไอที",
                'introduce_it.required' => "กรุณากรอกข้อมูล ข้อเสนอเเนะเกี่ยวกับสาขาวิชา",
                'future_career.required' => "กรุณากรอกข้อมูล อาชีพในอนาคต",
                'comment_covid.required' => "กรุณากรอกข้อมูล การเรียนช่วง โควิด 19",




            ],

        );


        $data = new Student;

        $data->it1 = $request->it1;
        $data->it2 = $request->it2;
        $data->detail_learn_it = $request->detail_learn_it;
        $data->introduce_it = $request->introduce_it;
        $data->future_career = $request->future_career;
        $data->comment_covid = $request->comment_covid;




        if ($data->save()) {
            return redirect()->back()->with('success', 'บันทึกเเบบฟอร์มสำเร็จ');
        } else {
            return redirect()->back()->with('error', 'บันทึกเเบบฟอร์มไม่สำเร็จ!');
        }
    }

    public function report()
    {
        $data_learn_it = Student::get(['detail_learn_it'])->last();

        $data_introduce_it = Student::get(['introduce_it'])->last();

        $data_future_career = Student::get(['future_career'])->last();

        $data_comment_covid = Student::get(['comment_covid'])->last();





        $data_per_it1_5 = Student::where('it1', 5)->count();
        // dd(number_format($result_per_it_5));
        $data_per_it1_4 = Student::where('it1', 4)->count();
        $data_per_it1_3 = Student::where('it1', 3)->count();
        $data_per_it1_2 = Student::where('it1', 2)->count();
        $data_per_it1_1 = Student::where('it1', 1)->count();


        $data_per_it2_5 = Student::where('it2', 5)->count();
        // dd(number_format($result_per_it_5));
        $data_per_it2_4 = Student::where('it2', 4)->count();
        $data_per_it2_3 = Student::where('it2', 3)->count();
        $data_per_it2_2 = Student::where('it2', 2)->count();
        $data_per_it2_1 = Student::where('it2', 1)->count();
        //  dd(number_format($data_per_it2_3));


        return view('report', compact('data_learn_it', 'data_introduce_it', 'data_future_career', 'data_comment_covid', 'data_per_it1_5', 'data_per_it1_4', 'data_per_it1_3', 'data_per_it1_2', 'data_per_it1_1', 'data_per_it2_5', 'data_per_it2_4', 'data_per_it2_3', 'data_per_it2_2', 'data_per_it2_1'));
    }

    public function detail_learn_it()
    {
        $data = Student::orderBy('id', 'DESC')->get();


        return view('detail_learn_it', compact('data'));
    }

    public function introduce_it()
    {
        $data = Student::orderBy('id', 'DESC')->get();


        return view('introduce_it', compact('data'));
    }


    public function future_career()
    {
        $data = Student::orderBy('id', 'DESC')->get();


        return view('future_career', compact('data'));
    }

    public function comment_covid()
    {
        $data = Student::orderBy('id', 'DESC')->get();


        return view('comment_covid', compact('data'));
    }
    public function reset()
    {


        Student::truncate();
        return redirect()->back()->with('success', 'รีเซ็ทข้อมูลเเบบฟอร์มสำเร็จ');
    }
}
