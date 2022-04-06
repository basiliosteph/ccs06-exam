<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function begin()
    {
        return view('begin');
    }

    public function enterGrades(Request $request)
     {
    $student_1 = $request->name_1;
    $student_2 = $request->name_2;
    $student_3 = $request->name_3;
    $student_4 = $request->name_4;
    $student_5 = $request->name_5;

    return view('enter-grades', [
        'student_1' => $student_1,
        'student_2' => $student_2,
        'student_3' => $student_3,
        'student_4' => $student_4,
        'student_5' => $student_5,
    ]);
}

protected function computeAverageGrade($grade1, $grade2)
{
    $average = ($grade1 + $grade2) / 2;
    return round($average, 2);
}

protected function Remarks($average)
{
    $remarks = "null";
    if($average>=75){
        $remarks = "PASSED";
        return $remarks;
    }
    else{
        $remarks ="FAILED";
        return $remarks;
    }
}


public function computeGrades(Request $request)
{
    $student_1 = $request->student_1;
    $student_2 = $request->student_2;
    $student_3 = $request->student_3;
    $student_4 = $request->student_4;
    $student_5 = $request->student_5;

    $s1_agrade = $this->computeAverageGrade($request->s1_mgrade, $request->s1_fgrade);
    $s2_agrade = $this->computeAverageGrade($request->s2_mgrade, $request->s2_fgrade);
    $s3_agrade = $this->computeAverageGrade($request->s3_mgrade, $request->s3_fgrade);
    $s4_agrade = $this->computeAverageGrade($request->s4_mgrade, $request->s4_fgrade);
    $s5_agrade = $this->computeAverageGrade($request->s5_mgrade, $request->s5_fgrade);

    $s1_remarks = $this->Remarks($s1_agrade);
    $s2_remarks = $this->Remarks($s2_agrade);
    $s3_remarks = $this->Remarks($s3_agrade);
    $s4_remarks = $this->Remarks($s4_agrade);
    $s5_remarks = $this->Remarks($s5_agrade);

    return view('compute-grades', [
        'student_1' => $student_1,
        'student_2' => $student_2,
        'student_3' => $student_3,
        'student_4' => $student_4,
        'student_5' => $student_5,
        // Student 1 enter grades
        's1_mgrade' => $request->s1_mgrade,
        's1_fgrade' => $request->s1_fgrade,
        's1_agrade' => $s1_agrade,
        's1_remarks' => $s1_remarks,
        // Student 2 enter grades
        's2_mgrade' => $request->s2_mgrade,
        's2_fgrade' => $request->s2_fgrade,
        's2_agrade' => $s2_agrade,
        's2_remarks' => $s2_remarks,
        // Student 3 enter grades
        's3_mgrade' => $request->s3_mgrade,
        's3_fgrade' => $request->s3_fgrade,
        's3_agrade' => $s3_agrade,
        's3_remarks' => $s3_remarks,
        // Student 4 enter grades
        's4_mgrade' => $request->s4_mgrade,
        's4_fgrade' => $request->s4_fgrade,
        's4_agrade' => $s4_agrade,
        's4_remarks' => $s4_remarks,
        // Student 5 enter grades
        's5_mgrade' => $request->s5_mgrade,
        's5_fgrade' => $request->s5_fgrade,
        's5_agrade' => $s5_agrade,
        's5_remarks' => $s5_remarks,
        
    ]);
}

}