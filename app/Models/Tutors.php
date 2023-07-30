<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Services\PayUService\Exception;

class Tutors extends Model
{
    use HasFactory;
    public function getUser($id)
    {
     $result=  DB::select(DB::raw("select * from users where id=$id"));
     return $result;
    }

    public function teaches_levels()
    {
     $result=  DB::select(DB::raw("select * from teaches_levels"));
     return $result;
    }
    public function getSubjects($tutorid)
    {
      $result=  DB::select(DB::raw("select * from userdetails where student_no=$tutorid"));
      if(count($result)>0)
      {
        $subjects=$result[0]->subject;
        if($subjects!=""&&$subjects!=null)
        {
          $subjects=explode(",",$subjects);
        }
        $subjectIds = $subjects;

        $subjects = DB::table('subjects')
            ->whereIn('id', $subjectIds)
            ->get();

              return $subjects;
            }

      else {
        return [];
      }
}

public function getSubj()
{
  $result=  DB::select(DB::raw("select * from subjects"));
  return $result;
}
public function getSubjectIdFromName($name)
{
  $result=  DB::select(DB::raw("select * from subjects where subject='$name'"));
  return $result;
}
public function getTeachesLevelIdFromName($name)
{
  $result=  DB::select(DB::raw("select * from teaches_levels where teaches_level='$name'"));
  return $result;
}
public function createQuiz($tutorid,$subjectid,$teaches_level,$quiztitle,$startdate,$enddate)
{
   $currentDateTime = date('Y-m-d H:i:s');

   $result=  DB::select(DB::raw("insert into quiz(tutorid,subjectid,teaches_level,status,createdat,updatedat,quiztitle,startdate,enddate) values($tutorid,$subjectid,$teaches_level,'Drafts','$currentDateTime','$currentDateTime','$quiztitle','$startdate','$enddate')"));
   $result=  DB::select(DB::raw("select LAST_INSERT_ID() as last;"));
   return $result;
}

public function updateQuiz($tutorid,$subjectid,$teaches_level,$quiztitle,$quizid,$startdate,$enddate)
{
   $currentDateTime = date('Y-m-d H:i:s');

   $result=  DB::select(DB::raw("update quiz set subjectid=$subjectid,teaches_level=$teaches_level,quiztitle='$quiztitle',updatedat='$currentDateTime',startdate='$startdate',enddate='$enddate' where id=$quizid"));
}

public function updateQuizInstructions($quizid,$instructions)
{
  $instructions=addslashes($instructions);
  $result=  DB::select(DB::raw("update quiz set instructions='$instructions' where id=$quizid"));
}


public function createQuizQuestion($quizid,$type,$question,$option1,$option2,$option3,$option4,$correct)
{
  $question=addslashes($question);
  $option1=addslashes($option1);
  $option2=addslashes($option2);
  $option3=addslashes($option3);
  $option4=addslashes($option4);
  $correct=addslashes($correct);

  $result=  DB::select(DB::raw("insert into quiz_questions(quizid,type,question,option1,option2,option3,option4,correctanswer) values($quizid,'$type','$question','$option1','$option2','$option3','$option4','$correct')"));
  $result=  DB::select(DB::raw("select LAST_INSERT_ID() as last;"));
  return $result;
}

public function updateQuizQuestion($questionid,$type,$question,$option1,$option2,$option3,$option4,$correct)
{
  $question=addslashes($question);
  $option1=addslashes($option1);
  $option2=addslashes($option2);
  $option3=addslashes($option3);
  $option4=addslashes($option4);
  $correct=addslashes($correct);

  $result=  DB::select(DB::raw("update quiz_questions set question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',correctanswer='$correct' where id=$questionid"));
  return $result;
}

public function deleteQuestion($questionid)
{
  $result=  DB::select(DB::raw("delete from quiz_questions where id=$questionid"));
  return $result;
}

public function submitQuizSettings($quizid,$quizprogressbar,$randomizequestions,$quiztimer,$quiztimeinseconds,$autoadvance,$quiztries,$quiznooftries,$templateused)
{
  $result=  DB::select(DB::raw("update quiz set quizprogressbar='$quizprogressbar',randomizequestions='$randomizequestions',quiztimer='$quiztimer',quiztimeinseconds=$quiztimeinseconds,autoadvance='$autoadvance',quiztries='$quiztries',quiznooftries=$quiznooftries,quiztemplate=$templateused where id=$quizid"));
}

public function publishQuiz($quizid)
{
  $result=  DB::select(DB::raw("update quiz set status='Upcoming' where id=$quizid"));
}

public function deleteQuiz($quizid)
{
$result=  DB::select(DB::raw("delete from quiz where id=$quizid"));
$result=  DB::select(DB::raw("delete from quiz_questions where quizid=$quizid"));
}

public function getTutorAllQuizes($tutorid,$filter="")
{
  try{
$result=  DB::select(DB::raw("select quiz.id as quizid,quiz.quiztitle, subjects.subject,teaches_levels.teaches_level,quiz.startdate,quiz.enddate,quiz.status,users.first_name,users.last_name from quiz,subjects,teaches_levels,users where quiz.tutorid=users.id and subjects.id=quiz.subjectid and teaches_levels.id=quiz.teaches_level and quiz.tutorid=$tutorid $filter"));
return $result;
}
catch(\Exception $e)
       {
         $message=addslashes($e->getMessage());
         return $message;
       }
}

public function getTutorAllQuizesUpcoming($tutorid)
{
  $currentDateTime = date('Y-m-d H:i:s');
$result=  DB::select(DB::raw("select quiz.id as quizid,quiz.quiztitle, subjects.subject,teaches_levels.teaches_level,quiz.startdate,quiz.enddate,quiz.status,users.first_name,users.last_name from quiz,subjects,teaches_levels,users where quiz.tutorid=users.id and subjects.id=quiz.subjectid and teaches_levels.id=quiz.teaches_level and quiz.tutorid=$tutorid
 and quiz.status='Upcoming' and enddate>'$currentDateTime' "));
return $result;
}

public function getTutorAllQuizesExpired($tutorid)
{
  $currentDateTime = date('Y-m-d H:i:s');
$result=  DB::select(DB::raw("select quiz.id as quizid,quiz.quiztitle, subjects.subject,teaches_levels.teaches_level,quiz.startdate,quiz.enddate,quiz.status,users.first_name,users.last_name from quiz,subjects,teaches_levels,users where quiz.tutorid=users.id and subjects.id=quiz.subjectid and teaches_levels.id=quiz.teaches_level and quiz.tutorid=$tutorid
 and quiz.status='Upcoming' and enddate<'$currentDateTime' "));
return $result;
}

public function getTutorAllQuizesDrafts($tutorid)
{
$result=  DB::select(DB::raw("select quiz.id as quizid,quiz.quiztitle, subjects.subject,teaches_levels.teaches_level,quiz.startdate,quiz.enddate,quiz.status,users.first_name,users.last_name from quiz,subjects,teaches_levels,users where quiz.tutorid=users.id and subjects.id=quiz.subjectid and teaches_levels.id=quiz.teaches_level and quiz.tutorid=$tutorid
 and quiz.status='Drafts'"));
return $result;
}

public function getQuizQuestions($quizid)
{
  $result=  DB::select(DB::raw("select * from quiz_questions where quizid=$quizid"));
  return $result;
}


public function getQuiz($quizid)
{
  $result=  DB::select(DB::raw("select quiz.id as quizid,quiz.quiztitle,quiz.instructions,quiz.quizprogressbar,quiz.randomizequestions,quiz.quiztimer,quiz.quiztimeinseconds,quiz.quiztemplate,quiz.autoadvance,quiz.quiztries,quiz.quiznooftries,subjects.subject,teaches_levels.teaches_level,quiz.startdate,quiz.enddate,quiz.status,users.first_name,users.last_name from quiz,subjects,teaches_levels,users where quiz.tutorid=users.id and subjects.id=quiz.subjectid and teaches_levels.id=quiz.teaches_level and quiz.id=$quizid"));
  return $result;
}

public function republishQuiz($quizid,$startdate,$enddate)
{
  $result=  DB::select(DB::raw("update quiz set startdate='$startdate', enddate='$enddate',status='Upcoming' where quiz.id=$quizid"));
  return $result;
}

public function getStudentsSubscribedForTutor($tutorid)
{
  $result=  DB::select(DB::raw("select users.id as userid, users.email from students_registered_courses,subjects,teaches_levels,users where students_registered_courses.subjectid=subjects.id and students_registered_courses.teaches_level=teaches_levels.id and students_registered_courses.tutorid=$tutorid and students_registered_courses.status='active' and students_registered_courses.studentid=users.id"));
  return $result;
}


public function seeIfStudentsInviteSend($studentid,$quizid)
{
  $result=  DB::select(DB::raw("select * from students_quiz_invites,users where students_quiz_invites.studentid=$studentid and students_quiz_invites.quizid=$quizid and students_quiz_invites.studentid=users.id"));
  return $result;
}

public function addQuizInviteData($studentid,$quizid)
{
  $currentDateTime = date('Y-m-d H:i:s');
  $result=  DB::select(DB::raw("insert into students_quiz_invites(studentid,quizid,status,inviteat) values($studentid,$quizid,'invited','$currentDateTime')"));
  return $result;
}
}
