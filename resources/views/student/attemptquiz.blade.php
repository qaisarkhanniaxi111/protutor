@include('/dashboard/common/header')
<style>
/* Style for the progress bar container */
.progress-bar {
  width: 100%;
  background-color: #f1f1f1;
}

/* Style for the progress bar */
.progress {
  height: 20px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 20px;
  color: white;
}

</style>
<script>
quizdetails=  {!! json_encode($quizdetails) !!}
</script>
<br>
<div class="site-wrap">
  <section class="wrapper">
    <div id="menu1">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
      <h2> <span id="previewQuestionNo">Quiz Instructions</span></h2>
    </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
      <div id="previewQuestionArea"><h3>{{$quizdetails[0]->instructions}}</h3></div>
    </div>
  </div>
      <div class="tab-btn-group">
        <div id="viewpart2">
        <a class="theme-btn green" id="startquiz"><span id="startquiztext">{{$text}}</span></a>
      </div>
        <a class="theme-btn grey" id="nextButton" style="display:none">Next <i class="fa-solid fa-angle-right"></i></a>
        <a class="theme-btn green" id="finishButton" style="display:none">Finish <i class="fa-solid fa-angle-right"></i></a>
      </div>
    </div>
  </section>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="./assets/js/custom.js"></script>
<script>
var questions=[]
var questions_answers=[]
var timeInterval;

$("#startquiz").click(function(){
  var startQuizText=$("#startquiztext").text()

   startQuiz(quizdetails[0].quizid)

})

function startQuiz(quizid)
{
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
  }
  });
  $.ajax({
   type:'post',
   url:'startquiz',
   data:{quizid:quizid},
   success:function(data) {
        process(data)
          }
  })

}

function process(data)
{
  if(data=="Expired")
  {
    $("#previewQuestionNo").html("<h3>Quiz has been Expired</h3>")
    $("#previewQuestionArea").html("")
    $("#startQuiz").css("display","none")
    $("#nextButton").css("display","none")
    $("#finishButton").css("display","none")
  }
  else if(data=="Completed")
  {
    $("#previewQuestionNo").html("<h3>Thank you! Quiz has been Completed</h3>")
    $("#previewQuestionArea").html("")
    $("#startQuiz").css("display","none")
    $("#nextButton").css("display","none")
    $("#finishButton").css("display","none")
  }
  else {
     questions=data[0]
     questions_answers=data[1]

     var seconds=""
     if(quizdetails[0].quiztimer=="y")
     {
       if(quizdetails[0].quiztimeinseconds!=0)
       {
         seconds=quizdetails[0].quiztimeinseconds

       }
     }

     previewQuestions(questions,questions_answers.length,seconds,quizdetails[0].quizprogressbar)
}
}

function myTimer()
{
  var time=$("#timeinsec").text()
  var t1=time.split("S")[0].trim()
  t1=parseInt(t1)-1
  if(t1==0)
  {
    if((questions_answers.length+1)>=questions.length)
    {
      $("#finishButton").click()
    }
    else {
      $("#nextButton").click()
    }
  }
  else {
    $("#timeinsec").text(t1+" S")
  }
}

function previewQuestions(allQuestions,runPreview,seconds,progressbar)
{
  var question=allQuestions[runPreview].question;
  var questionid=allQuestions[runPreview].questionid;
  var option1=allQuestions[runPreview].option1;
  var option2=allQuestions[runPreview].option2;
  var option3=allQuestions[runPreview].option3;
  var option4=allQuestions[runPreview].option4;
  var type=allQuestions[runPreview].type
  if((runPreview+1)>=allQuestions.length)
  {
   $("#finishButton").css("display","block")
   $("#finishButton").attr("onclick", "saveme("+questionid+")");
   $("#nextButton").css("display","none")
   $("#startquiz").css("display","none")
  }
  else {
    $("#finishButton").css("display","none")
    $("#nextButton").css("display","block")
    $("#nextButton").attr("onclick", "saveme("+questionid+")");
    $("#startquiz").css("display","none")
  }

  $("#previewQuestionNo").html((runPreview+1)+" of "+allQuestions.length+" Question")

  if(type=="Multiple Choice Questions")
  {
    var question2=question
    var q='<div class="questions-list">\
      <ul>\
        <li><span>?</span> '+question2+'</li>'
        var runIndex=0
        var indexes=['A','B','C','D']

          if(option1!="")
          {
          q+='<li><span>A</span> '+option1+'</li>'
          }
          if(option2!="")
          {
          q+='<li><span>B</span> '+option2+'</li>'
          }
          if(option3!="")
          {
          q+='<li><span>C</span> '+option3+'</li>'
          }
          if(option4!="")
          {
          q+='<li><span>D</span> '+option4+'</li>'
          }

        q+='</ul>\
    </div>\
    <div class="select-ans">\
      <p>Select correct answer</p>\
      <div class="opt-ans">\
          <label for="">\
            <span class="num">A</span>\
            <input type="radio" name="1" id="option1">\
            <span class="checkmark"></span>\
          </label>\
          <label for="">\
            <span class="num">B</span>\
            <input type="radio" name="1" id="option2">\
            <span class="checkmark"></span>\
          </label>\
          <label for="">\
            <span class="num">C</span>\
            <input type="radio" name="1" id="option3">\
            <span class="checkmark"></span>\
          </label>\
          <label for="">\
            <span class="num">D</span>\
            <input type="radio" name="1" id="option4">\
            <span class="checkmark"></span>\
          </label>\
      </div>\
    </div><p class="pt-2">Select one of the option form the given ones</p>'
  }
  else if(type=="True / False")
      {
        var question2=question
        var q='<div class="questions-list">\
          <ul>\
            <li><span>?</span> '+question2+'</li>'

              q+='<li><span>A</span> True</li>'
              q+='<li><span>A</span> False</li>'

            q+='</ul>\
        </div>\
        <div class="select-ans">\
          <p>Select correct answer</p>\
          <div class="opt-ans">\
              <label for="">\
                <span class="num">A</span>\
                <input type="radio" name="1" id="option1">\
                <span class="checkmark"></span>\
              </label>\
              <label for="">\
                <span class="num">B</span>\
                <input type="radio" name="1" id="option2">\
                <span class="checkmark"></span>\
              </label>\
          </div>\
        </div><p class="pt-2">Select one of the option form the given ones</p>'
      }
      else if(type=="Multiple Answers")
      {
        var question2=question
        var q='<div class="questions-list">\
          <ul>\
            <li><span>?</span> '+question2+'</li>'
            var runIndex=0
            var indexes=['A','B','C','D']
            for(i=1;i<=4;i++)
            {
              if(option1!="")
              {
              q+='<li><span>A</span> '+option1+'</li>'
              }
              if(option2!="")
              {
              q+='<li><span>B</span> '+option2+'</li>'
              }
              if(option3!="")
              {
              q+='<li><span>C</span> '+option3+'</li>'
              }
              if(option4!="")
              {
              q+='<li><span>D</span> '+option4+'</li>'
              }
            }
            q+='</ul>\
        </div>\
        <div class="select-ans">\
          <p>Select correct answer</p>\
          <div class="opt-ans">\
              <label for="">\
                <span class="num">A</span>\
                <input type="checkbox" name="1" id="option1">\
                <span class="checkmark"></span>\
              </label>\
              <label for="">\
                <span class="num">B</span>\
                <input type="checkbox" name="1" id="option2">\
                <span class="checkmark"></span>\
              </label>\
              <label for="">\
                <span class="num">C</span>\
                <input type="checkbox" name="1" id="option3">\
                <span class="checkmark"></span>\
              </label>\
              <label for="">\
                <span class="num">D</span>\
                <input type="checkbox" name="1" id="option4">\
                <span class="checkmark"></span>\
              </label>\
          </div>\
        </div><p class="pt-2">Select multiple options</p>'
      }
      else if(type=="Short Answer")
      {
        var question2=question
        var q='<div class="questions-list">\
                        <ul>\
                          <li><span>?</span> '+question2+'</li>\
                        </ul>\
                      </div>\
                      <div class="select-ans auto">\
                        <p class="pb-2">Enter Correct Answer</p>\
                        <div class="opt-ans half">\
                          <textarea class="inpTxt" name="" id="shortanswer" placeholder="Enter Correct Answer Here"></textarea>\
                        </div>\
                      </div>\
                      <p class="pt-2">Type short answer in the given space</p>\
                    </div>\
                  </div>\
                </div>\
              </div>\
            </div>'
      }
      else if(type=="Fill-in-the-Blanks")
          {
            var question2=question
            var q='<div class="questions-list">\
              <ul>\
                <li><span>?</span> '+question2+'</li>'

            q+='</ul></div>\
            <div class="select-ans">\
              <p>Enter Correct Answer</p>\
              <div class="opt-ans half">\
                  <input class="inpTxt" type="text" name="" id="blankAnswer" placeholder="Enter Correct Answer Here">\
              </div>\
            </div>\
            <p class="pt-2">Type one or two words answer in the given space</p>\
            </div>\
          </div>\
        </div>\
      </div>\
    </div>'
          }
      else if(type=="Long Answer")
      {
        var question2=question
        var q='<div class="questions-list">\
                        <ul>\
                          <li><span>?</span> '+question2+'</li>\
                        </ul>\
                      </div>\
                      <div class="select-ans auto">\
                        <p class="pb-2">Enter Correct Answer</p>\
                        <div class="opt-ans half">\
                            <textarea class="inpTxt-alt" name="" id="longAnswer" placeholder="Enter Correct Answer Here"></textarea>\
                          </div>\
                      </div>\
                      <p class="pt-2">Type elaborative answer in the given space</p>\
                    </div>\
                  </div>\
                </div>\
              </div>\
            </div>'
      }

if(seconds!="")
{
  if (timeInterval) {
    clearInterval(timeInterval);
  }
  var questionTime='<div class="questions-time"><i class="fa-solid fa-clock"></i> <span id="timeinsec">'+seconds+' S</span></div>'
  timeInterval = setInterval(myTimer, 1000);
}
else {
  var questionTime='<div class="questions-time"></div>'
}

  txt='<div class="container">\
    <div class="container-in">\
      <div class="row justify-content-center">\
        <div class="col-lg-7">\
          <div class="questions">'
  txt+=questionTime+q

if(progressbar=="y")
{
  var percentage=((runPreview+1)/allQuestions.length)*100
          txt+='<div class="progress-bar"><div class="progress" id="progress"></div></div>'

}
$("#previewQuestionArea").html(txt)

if(progressbar=="y")
{
  updateProgress(runPreview+1, allQuestions.length);
}
}


function updateProgress(attempted, total) {
  var progressPercentage = (attempted / total) * 100;
  var progressElement = document.getElementById("progress");

  progressElement.style.width = progressPercentage + "%";
  progressElement.innerText = progressPercentage.toFixed(2) + "% done";
}

// Example usage




function getAnswer(allQuestions,runPreview)
{
  var question=allQuestions[runPreview].question;
  var questionid=allQuestions[runPreview].questionid;
  var option1=allQuestions[runPreview].option1;
  var option2=allQuestions[runPreview].option2;
  var option3=allQuestions[runPreview].option3;
  var option4=allQuestions[runPreview].option4;
  var type=allQuestions[runPreview].type

  if(type=="Multiple Choice Questions")
  {
    if($("#option1").is(":checked"))
    {
      return option1
    }
    else if($("#option2").is(":checked"))
    {
      return option2
    }
    else if($("#option3").is(":checked"))
    {
      return option3
    }
    else if($("#option4").is(":checked"))
    {
      return option4
    }
    return ""
  }
  else if(type=="True / False")
      {
        if($("#option1").is(":checked"))
        {
          return option1
        }
        else if($("#option2").is(":checked"))
        {
          return option2
        }
        return ""

      }
      else if(type=="Multiple Answers")
      {
        var ans=""
        if($("#option1").is(":checked"))
        {
          ans+=option1+"**"
        }
        if($("#option2").is(":checked"))
        {
          ans+=option2+"**"
        }
        if($("#option3").is(":checked"))
        {
          ans+=option3+"**"
        }
        if($("#option4").is(":checked"))
        {
          ans+=option4+"**"
        }
        return ans
      }
      else if(type=="Short Answer")
      {
        return $("#shortanswer").val()
      }
      else if(type=="Fill-in-the-Blanks")
          {
          return $("#blankanswer").val()
          }
      else if(type=="Long Answer")
      {
        return $("#longAnswer").val()
      }
}

function saveme(id)
{
  var answer=getAnswer(questions,questions_answers.length)
  $.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
}
});
$.ajax({
 type:'post',
 url:'savequizquestionanswer',
 data:{quizid:quizdetails[0].quizid,questionid:id,answer:answer},
 success:function(data) {
      process(data)
        }
})

}

</script>

@include('/tutor/common/footer')
