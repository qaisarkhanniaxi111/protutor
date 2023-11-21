<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Tutors;
use Mail;

class SendQuizInvites implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $quizid;
    protected $tutorid;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($tutorid,$quizid)
    {
        $this->tutorid=$tutorid;
        $this->quizid=$quizid;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tutors=new Tutors();
        $quizdata=$tutors->getQuiz($this->quizid);
        $tutorsdata=$tutors->getStudentsSubscribedForTutor($this->tutorid);
        // print_r($tutorsdata);
        // return dd($quizdata);
        foreach($tutorsdata as $t)
        {
          $result=$tutors->seeIfStudentsInviteSend($t->userid,$this->quizid);

          if(count($result)==0)
          {
            $email=$t->email;
            $result2=$tutors->getUser($t->userid);
            $data=array("quizid"=>$this->quizid,"quiztitle"=>$quizdata[0]->quiztitle,"startdate"=>$quizdata[0]->startdate,"enddate"=>$quizdata[0]->enddate,"tutorname"=>$quizdata[0]->first_name.' '.$quizdata[0]->last_name,"studentname"=>$result2[0]->first_name.' '.$result2[0]->last_name);

            Mail::send("tutor.sendquizinvitetemplate",$data,function($messages) use ($email){
            $messages->to($email);
            $messages->subject("You are Invited for a new Quiz");
          });

          $tutors->addQuizInviteData($t->userid,$this->quizid);
          }

        }
    }
}
