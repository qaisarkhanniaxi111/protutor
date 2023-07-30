<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentsModal extends Model
{
    use HasFactory;

    public function ifUserInvited($studentid,$quizid)
    {
     $result=  DB::select(DB::raw("select * from students_quiz_invites where studentid=$studentid and quizid=$quizid"));
     return $result;
    }

    public function ifUserAttempted($studentid,$quizid,$status)
    {
     $result=  DB::select(DB::raw("select * from student_quiz_attempt where studentid=$studentid and quizid=$quizid and status='$status'"));
     return $result;
    }

    public function getQuizQuestions($quizid)
    {
     $result=  DB::select(DB::raw("select quiz_questions.id as questionid,quiz_questions.type,quiz_questions.question,quiz_questions.option1,quiz_questions.option2,quiz_questions.option3,quiz_questions.option4,quiz_questions.correctanswer from quiz,quiz_questions where quiz.id=quiz_questions.quizid and quiz.id=$quizid"));
     return $result;
    }
    public function getQuizQuestionById($quizid,$questionid)
    {
      $result=  DB::select(DB::raw("select * from quiz_questions where id=$questionid and quizid=$quizid"));
      return $result;
    }

    public function getQuizQuestionsAnswersOfStudent($quizid,$studentid,$attemptid)
    {
     $result=  DB::select(DB::raw("select * from students_quiz_questions where quizid=$quizid and studentid=$studentid and quizattemptid=$attemptid"));
     return $result;
    }

    public function updateQuizAnswer($quizid,$questionid,$studentid,$answer)
    {
      $answer=addslashes($answer);
     $result=  DB::select(DB::raw("update students_quiz_questions set answer='$answer' where quizid=$quizid and studentid=$studentid and questionid=$questionid"));
     return $result;
    }

    public function addStudentAttempt($quizid,$studentid)
    {
      $currentDateTime = date('Y-m-d H:i:s');
     $result=  DB::select(DB::raw("insert into student_quiz_attempt(studentid,quizid,startdate,status) values($studentid,$quizid,'$currentDateTime','started')"));
     $result=  DB::select(DB::raw("select LAST_INSERT_ID() as last;"));
     return $result;
    }

    public function updateStudentAttempt($quizid,$studentid)
    {
     $currentDateTime = date('Y-m-d H:i:s');
     $result=  DB::select(DB::raw("update student_quiz_attempt set enddate='$currentDateTime', status='closed' where studentid=$studentid and quizid=$quizid"));
     return $result;
    }

    public function addStudentQuizQuestion($studentid,$quizid,$attemptid,$questionid)
    {
      $result=  DB::select(DB::raw("insert into students_quiz_questions(studentid,quizid,questionid,quizattemptid) values($studentid,$quizid,$questionid,$attemptid)"));
      return $result;
    }

    public function getStudentQuizesUpcoming($studentid,$filter)
    {
      $currentDateTime = date('Y-m-d H:i:s');
      $result=  DB::select(DB::raw("SELECT quiz.status, teaches_levels.teaches_level, subjects.subject, users.first_name, users.last_name, quiz.id AS quizid, quiz.startdate, quiz.enddate, quiz.quiztitle FROM students_quiz_invites, quiz, subjects, teaches_levels, users WHERE students_quiz_invites.quizid = quiz.id AND quiz.subjectid = subjects.id AND quiz.tutorid = users.id AND quiz.teaches_level = teaches_levels.id AND students_quiz_invites.studentid = $studentid AND quiz.enddate > '$currentDateTime' $filter AND quiz.id NOT IN (SELECT quizid FROM student_quiz_attempt) $filter"));
      return $result;
    }

    public function getStudentQuizesAttempt($studentid,$filter)
    {
      $result=  DB::select(DB::raw("select student_quiz_attempt.status,student_quiz_attempt.id as attemptid,subjects.subject,teaches_levels.teaches_level,quiz.quiztitle,quiz.enddate,quiz.id as quizid,users.first_name,users.last_name from student_quiz_attempt,quiz,subjects,teaches_levels,users where student_quiz_attempt.quizid=quiz.id and quiz.subjectid=subjects.id and quiz.tutorid=users.id and quiz.teaches_level=teaches_levels.id and studentid=$studentid $filter"));
      return $result;
    }

    public function attemptedQuestions($attemptid)
    {
      $result=  DB::select(DB::raw("select count(*) as total from students_quiz_questions where quizattemptid=$attemptid"));
      return $result;
    }



}
