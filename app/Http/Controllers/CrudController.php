<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\exam_subject;

class CrudController extends Controller
{
    //
    function addData(Request $req)
    {
            $exam_subject= new exam_subject;
            $exam_subject->esm_id=$req->Exam_Subject_Marks_ID;
            $exam_subject->exam_id=$req->Exam_ID;
            $exam_subject->sds_id=$req->sds_ID;
            $exam_subject->written_dateOfExam=$req->Date_Of_Written_Exam;
            $exam_subject->written_totalMarks=$req->Total_Marks_of_Written_Exam;
            $exam_subject->written_passingMarks=$req->Passing_Marks_of_Written_Exam;
            $exam_subject->oral_dateOfExam=$req->Date_Of_Oral_Exam;
            $exam_subject->oral_totalMarks=$req->Total_Marks_of_Oral_Exam;
            $exam_subject->oral_passingMarks=$req->Passing_Marks_of_Oral_Exam;
            $exam_subject->practical_dateOfExam=$req->Date_Of_Practical_Exam;
            $exam_subject->practical_totalMarks=$req->Total_Marks_of_Practical_Exam;
            $exam_subject->practical_passingMarks=$req->Passing_Marks_of_Practical_Exam;
            $exam_subject->save();
            return redirect('/Table');
    }
    function showData()
    {
        $data= exam_subject::all();
        return view('data',['Exam_Subjects'=>$data]);
    }
}
