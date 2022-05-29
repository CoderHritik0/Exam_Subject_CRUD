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
    function update(Request $req)
    {
        $current_date_time = \Carbon\Carbon::now()->toDateTimeString();
        $check= DB::table('exam_subjects')
        ->where('esm_id',$req->Exam_Subject_Marks_IDEdit)
        ->update(
            [
                'exam_id'=>$req->Exam_IDEdit,
                'sds_id'=>$req->sds_IDEdit,
                'written_dateOfExam'=>$req->Date_Of_Written_ExamEdit,
                'written_totalMarks'=>$req->Total_Marks_of_Written_ExamEdit,
                'written_passingMarks'=>$req->Passing_Marks_of_Written_ExamEdit,
                'oral_dateOfExam'=>$req->Date_Of_Oral_ExamEdit,
                'oral_totalMarks'=>$req->Total_Marks_of_Oral_ExamEdit,
                'oral_passingMarks'=>$req->Passing_Marks_of_Oral_ExamEdit,
                'practical_dateOfExam'=>$req->Date_Of_Practical_ExamEdit,
                'practical_totalMarks'=>$req->Total_Marks_of_Practical_ExamEdit,
                'practical_passingMarks'=>$req->Passing_Marks_of_Practical_ExamEdit,
                'lastModifiedDate'=>$current_date_time
            ]
            );
        if($check){
            return redirect()->action([CrudController::class,'showData']);
        }
    }
    function delete($esm_id)
    {
        $current_date_time = \Carbon\Carbon::now()->toDateTimeString();
        $check= DB::table('exam_subjects')
        ->where('esm_id',$esm_id)
        ->update(
            [
                'isDelete'=>"1",
                'dateOfDeletion'=>$current_date_time
            ]
           );
        if($check){
            return redirect()->action([CrudController::class,'showData']);
        }
    }
}
