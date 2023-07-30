<?php

namespace App\Http\Controllers\Tutor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\Tutors;
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Str;
use App\Services\PayUService\Exception;
use App\Jobs\SendQuizInvites;

class TutorController extends \App\Http\Controllers\Controller
{
  public function dashboard(Request $request)
  {
    $PageTitle = 'Dashboard | ProTutor';
    return view("tutor/dashboard",compact('PageTitle'));
  }
  public function logout() // This function are used for user logout
  {
    Session::flush();
    return redirect('/')->with('success_msg',__('You are successfully logout'));
  }
  public function quiz()
  {
    $tutorid=Session::get("tutorid");
    $tutor=new Tutors();
    $quizes=$tutor->getTutorAllQuizes($tutorid);
    $upcoming=$tutor->getTutorAllQuizesUpcoming($tutorid);
    $drafts=$tutor->getTutorAllQuizesDrafts($tutorid);
    $expired=$tutor->getTutorAllQuizesExpired($tutorid);

    $subj=$tutor->getSubjects($tutorid);

    $teaches_levels=$tutor->teaches_levels();
    return view("tutor/quiz",["teaches_levels"=>$teaches_levels,"subjects"=>$subj,"quizes"=>$quizes,"upcoming"=>$upcoming,"drafts"=>$drafts,"expired"=>$expired]);
  }
  public function createQuiz(Request $r)
  {
    try{
    $id=Session::get("tutorid");
    $teaches_level=$r->get("teaches_level");
    $quiztitle=$r->get("quiztitle");
    $subject=$r->get("subject");
    $startdate=$r->get("startdate");
    $enddate=$r->get("enddate");
    $quizid=$r->get("quizid");
    $tutor=new Tutors();
    $result=$tutor->getSubjectIdFromName($subject);
    $subject=$result[0]->id;
    $result=$tutor->getTeachesLevelIdFromName($teaches_level);
    $teaches_level=$result[0]->id;
    if($quizid==0)
    {
      $result=$tutor->createQuiz($id,$subject,$teaches_level,$quiztitle,$startdate,$enddate);
      return $result[0]->last;
    }
    else {
      $result=$tutor->updateQuiz($id,$subject,$teaches_level,$quiztitle,$quizid,$startdate,$enddate);
      return $quizid;
    }
  }
  catch(\Exception $e)
    {
      $message=addslashes($e->getMessage());
      return $message;
    }
  }

  public function createQuizInstructions(Request $r)
  {
    try{
    $quizid=$r->get("quizid");
    $instructions=$r->get("instructions");
    $tutor=new Tutors();
    $result=$tutor->updateQuizInstructions($quizid,$instructions);
    return "";
  }
  catch(\Exception $e)
    {
      $message=addslashes($e->getMessage());
      return $message;
    }
  }

  public function submitQuestion(Request $r)
  {
    try{
    $quizid=$r->get("quizid");
    $type=$r->get("type");
    $question=$r->get("question");
    $option1=$r->get("option1");
    $option2=$r->get("option2");
    $option3=$r->get("option3");
    $option4=$r->get("option4");
    $correct=$r->get("correct");
    $tutor=new Tutors();
    $result=$tutor->createQuizQuestion($quizid,$type,$question,$option1,$option2,$option3,$option4,$correct);
    return $result[0]->last;
  }  catch(\Exception $e)
      {
        $message=addslashes($e->getMessage());
        return $message;
      }
    }

    public function submitQuizSettings(Request $r)
    {
      try{
      $quizid=$r->get("quizid");
      $quizprogressbar=$r->get("quizprogressbar");
      $randomizequestions=$r->get("randomizequestions");
      $quiztimer=$r->get("quiztimer");
      $autoadvance=$r->get("autoadvance");
      $quiztries=$r->get("quiztries");
      $quiztimeinseconds=$r->get("quiztimeinseconds");
      $quiznooftries=$r->get("quiznooftries");
      $templateused=$r->get("templateUsed");

      $tutor=new Tutors();
      $tutor->submitQuizSettings($quizid,$quizprogressbar,$randomizequestions,$quiztimer,$quiztimeinseconds,$autoadvance,$quiztries,$quiznooftries,$templateused);
      return "";
    }
    catch(\Exception $e)
        {
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function publishQuiz(Request $r)
    {
      try{
      $tutorid=Session::get("tutorid");
      $id=$r->get("quizid");
      $tutor=new Tutors();
      $tutor->publishQuiz($id);

      SendQuizInvites::dispatch($tutorid,$id);
    }
    catch(\Exception $e)
        {
          return $e;
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function deleteQuiz(Request $r)
    {
      try{
        $quizid=$r->get("quizid");
        $tutor=new Tutors();
        $tutor->deleteQuiz($quizid);
        return "";
      }
      catch(\Exception $e)
          {
            $message=addslashes($e->getMessage());
            return $message;
          }
    }

    public function getQuizQuestions(Request $r)
    {
      try{
        $quizid=$r->get("quizid");
        $tutor=new Tutors();
        $questions=$tutor->getQuizQuestions($quizid);
        $quizes=$tutor->getQuiz($quizid);
        return [$questions,$quizes];
      }
      catch(\Exception $e)
          {
            $message=addslashes($e->getMessage());
            return $message;
          }
    }

    public function editSubmitQuestion(Request $r)
    {
      try{
      $quizid=$r->get("quizid");
      $questionid=$r->get("questionid");
      $type=$r->get("type");
      $question=$r->get("question");
      $option1=$r->get("option1");
      $option2=$r->get("option2");
      $option3=$r->get("option3");
      $option4=$r->get("option4");
      $correct=$r->get("correct");
      $tutor=new Tutors();
      $result=$tutor->updateQuizQuestion($questionid,$type,$question,$option1,$option2,$option3,$option4,$correct);
      $result=$tutor->getQuizQuestions($quizid);
      return $result;
    }catch(\Exception $e)
        {
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function deleteQuestion(Request $r)
    {
      try{
      $quizid=$r->get("quizid");
      $questionid=$r->get("questionid");

      $tutor=new Tutors();
      $tutor->deleteQuestion($questionid);
      $result=$tutor->getQuizQuestions($quizid);
      return $result;
    }catch(\Exception $e)
        {
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function republishQuiz(Request $r)
    {
      try{
      $tutorid=Session::get("tutorid");
      $startdate=$r->get("startdate");
      $enddate=$r->get("enddate");
      $quizid=$r->get("quizid");
      $tutor=new Tutors();
      $tutor->republishQuiz($quizid,$startdate,$enddate);
      SendQuizInvites::dispatch($tutorid,$quizid);
      return "";
    }
    catch(\Exception $e)
        {
          $message=addslashes($e->getMessage());
          return $message;
        }
    }

    public function filterData(Request $r)
    {
      try{
      $data= $r->input("filter");
      $filter="";
      $tutorid=Session::get("tutorid");

      if(isset($data["quiztitle"]));
      {
        $quiztitle=$data["quiztitle"];
        if($quiztitle!="")
        {
        $filter.=" and quiz.quiztitle like '%$quiztitle%' ";
      }
      }

      if(isset($data["subject"]));
      {
        $subject=$data["subject"];
        if($subject!="Select Course")
        {
        $filter.=" and subjects.subject ='$subject'";
      }
      }

      if(isset($data["teaches_level"]));
      {
        $teaches_level=$data["teaches_level"];
        if($teaches_level!="Select Class / Grade")
        {
        $filter.=" and teaches_levels.teaches_level='$teaches_level' ";
      }
      }

      if(isset($data["status"]));
      {
        $status=$data["status"];
        if($status!="Select Quiz Status")
        {
          if($status=="Upcoming")
          {
            $currentDateTime = date('Y-m-d H:i:s');
            $filter.=" and quiz.status='Upcoming' and enddate>'$currentDateTime'";
          }
          else if($status=="Expired")
          {
            $currentDateTime = date('Y-m-d H:i:s');
            $filter.=" and quiz.status='Upcoming'  and enddate<'$currentDateTime'";
          }
          else if($status=="Drafts")
          {
            $filter.=" and quiz.status ='$status' ";
          }

      }

      if(isset($data["startdate"]));
      {
        $startdate=$data["startdate"];
        if($startdate!="")
        {
        $filter.=" and DATE(startdate)>='$startdate' ";
      }
      }

      if(isset($data["enddate"]));
      {
        $enddate=$data["enddate"];
        if($enddate!="")
        {
        $filter.=" and DATE(enddate)<='$enddate' ";
      }
      }
      }

      $tutor=new Tutors();
      $result=$tutor->getTutorAllQuizes($tutorid,$filter);
      return $result;
    }    catch(\Exception $e)
            {
              $message=addslashes($e->getMessage());
              return $message;
            }
    }

    public function tutorquizgrouplessons()
    {
      $tutorid=Session::get("tutorid");
      $tutor=new Tutors();

      $subj=$tutor->getSubjects($tutorid);

      $teaches_levels=$tutor->teaches_levels();

      return view("tutor.tutorquizgrouplessons",["teaches_levels"=>$teaches_levels,"subjects"=>$subj]);
    }

    public function game()
    {
      return view("games/index");
    }
    public function game2()
    {
      return view("games/index2");
    }

}
