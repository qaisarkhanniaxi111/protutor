<script>
quizdetails=  {!! json_encode($quizdetails) !!}
allQuestions= {!! json_encode($questions) !!}
var JData=[]

for(i=0;i<allQuestions.length;i++)
{
var question=allQuestions[i].question;
var questionid=allQuestions[i].questionid;
var option1=allQuestions[i].option1;
var option2=allQuestions[i].option2;
var option3=allQuestions[i].option3;
var option4=allQuestions[i].option4;
var correctans=allQuestions[i].correctanswer;
var type=allQuestions[i].type
var ArrOpt=[]
if(option1!="")
{
  if(correctans.includes(option1))
  {
  var a={ID:0,Status:true,Text:option1}
}
else {
  var a={ID:0,Status:false,Text:option1}
}
  ArrOpt.push(a)
}
if(option2!="")
{
  if(correctans.includes(option2))
  {
  var a={ID:1,Status:true,Text:option2}
}
else {
  var a={ID:1,Status:false,Text:option2}
}
  ArrOpt.push(a)
}
if(option3!="")
{
  if(correctans.includes(option3))
  {
  var a={ID:2,Status:true,Text:option3}
}
else {
  var a={ID:2,Status:false,Text:option3}
}
  ArrOpt.push(a)
}
if(option4!="")
{
  if(correctans.includes(option4))
  {
  var a={ID:0,Status:true,Text:option4}
}
else {
  var a={ID:0,Status:false,Text:option4}
}
  ArrOpt.push(a)
}
if(type=="Multiple Choice Questions")
{
  type="SSQ"
}
else if(type=="True / False")
{
  type="TFQ"
}
else if(type=="Multiple Answers")
{
  type="MSQ"
}
var ata={
  QType:type,
  Ques:question,
  Questionid:questionid,
  ArrOpt:ArrOpt
}
JData.push(ata)

}
</script>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="csrf_token" content="{{csrf_token()}}">
  <meta
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui, width = device-width"
    name="viewport" />
  <link href="game2/media/css/quiz.css" rel="stylesheet" type="text/css" />
  <title>Quiz Game</title>
  <script>
    document.addEventListener(
      "touchmove",
      function (e) {
        e.preventDefault();
      },
      { passive: false }
    );

    var lastTouchEnd = 0;

    document.addEventListener(
      "touchend",
      function (event) {
        var now = new Date().getTime();
        if (now - lastTouchEnd <= 50) {
          event.preventDefault();
        }
        lastTouchEnd = now;
      },
      { passive: false }
    );
  </script>
</head>

<body>
  <!--Preloader-->
  <div class="row">
    <div id="html5Loader" class="col-sm-12">
      <div id="DvLoaderCont">
        <div id="DvLoaderProgress"></div>
      </div>
    </div>
  </div>

  <div id="wrapper">
    <div id="load_images" style="width: 0px; height: 0px; opacity: 0">

    </div>

    <div id="game_container">
      <div id="home" class="home_bg" style="display: block; background-image:url(game2/media/assets/gameplay/hoomebg.png)">
        <div id="hometitle" class="title"></div>
        <div id="homeplay" class="btn_play" style="background-image:url(game2/media/assets/gameplay/playbtn.png)"></div>
        <div id="lefthelp" class="btn_help"></div>
      </div>
      <div id="mathQuizContent" class="math-quiz-content">
        <div id="timerbox" class="timerbox" style="background-image:url(game2/media/assets/gameplay/timer.png)">
          <div id="timer" class="timer">00:00</div>
        </div>
        <div id="progress">
          <div class="progress-text" style="">0 %</div>
        </div>
        <div id="ques_num"></div>
        <div id="boxMain" class="box_main">
          <div id="questionbar"></div>
          <div id="questboxdiv" class="math-quiz-question-container"></div>
          <div id="optionbox"></div>
          <div id="submit" class="btn_submit" style="background-image:url(game2/media/assets/gameplay/btn_submit.png)"></div>
        </div>
        <div id="gameover">
          <div id="smiley_gameover" class="smiley_gameover"></div>
        </div>
        <div id="gameoverText">
          Better Luck Next Time <br />
          Game Over
        </div>
        <div id="gameComplete">
          <div id="smiley_complete" class="smiley_complete"></div>
          <div id="gameCompleteText"></div>
          <div id="replay"></div>
        </div>
        <div id="welldonebg"></div>
        <div class="welldone" ></div>
        <div id="tryagainbg"></div>
        <div id="tryfeedback" class="tryfeedback"></div>
        <div id="timeupbg">
          <div id="timeup">
            <div id="timeruptxt" class="timeruptxt"></div>
          </div>
          <div id="reset">
          </div>
        </div>
      </div>
    </div>
    <div id="helpdiv" onclick="closehelp();">
      <div id="helpbox">
        <div id="helptext">
          Read the question carefully and choose the correct option after that
          click on submit button.
        </div>
      </div>
    </div>
  </div>

  <audio id="tryagain" src="game2/media/assets/audio/tryagain.mp3" type="audio/mpeg"></audio>
  <audio id="welldone" src="game2/media/assets/audio/claping.mp3" type="audio/mpeg"></audio>
  <audio id="greatwork" src="game2/media/assets/audio/greatwork.mp3" type="audio/mpeg"></audio>

  <script src="game2/media/script/jquery/jquery.js"></script>

  <script type="text/javascript" src="game2/media/script/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="game2/media/script/jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="game2/media/script/jquery/jquery.ui.touch-punch.js"></script>

  <!-- Loader Libraries Starts -->
  <script type="text/javascript" src="game2/media/script/preloader/jquery.html5Loader.min.js"></script>
  <script type="text/javascript" src="game2/media/script/preloader/animation/jquery.big-counter.js"></script>
  <script type="text/javascript" src="game2/media/script/preloader/Main.class.js"></script>
  <script type="text/javascript" src="game2/media/script/preloader/configPreload.js"></script>
  <!--Loader Libraries Ends -->

  <script src="game2/media/data.js"></script>
  <script src="game2/media/script/quiz.js"></script>
  <script>
  function saveme(id,status)
  {
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
  }
  });
  $.ajax({
   type:'post',
   url:'savequizquestionanswergame',
   data:{quizid:quizdetails[0].quizid,questionid:id,status:status},
   success:function(data) {

          }
  })

  }

  function startQuiz(quizid)
  {
      $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $("meta[name='csrf_token']").attr('content')
    }
    });
    $.ajax({
     type:'post',
     url:'startquiz2',
     data:{quizid:quizid},
     success:function(data) {
        //  process(data)
            }
    })

  }
  </script>
</body>

</html>
