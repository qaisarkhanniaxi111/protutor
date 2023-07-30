<script>
quizdetails=[]

var JData = [
    {
        "QType": "SSQ",
        "Ques": "Who is the author of the novel To Kill a Mockingbird?",
        "ArrOpt": [
            { "ID": 0, "Status": "true", "Text": "Harper Lee" },
            { "ID": 1, "Status": "false", "Text": "F. Scott Fitzgerald" },
            { "ID": 2, "Status": "false", "Text": "J.D. Salinger" },
            { "ID": 3, "Status": "false", "Text": "Mark Twain" }
        ]
    },
    {
        "QType": "MSQ",
        "Ques": "Who is credited with the discovery of penicillin penicillin penicillin penicillin penicillin penicillin penicillin?",
        "ArrOpt": [
            { "ID": 0, "Status": "true", "Text": "Louis Pasteur Louis Pasteur Louis Pasteur" },
            { "ID": 1, "Status": "true", "Text": "Marie Curie Marie Curie Marie Curie Marie Curie" },
            { "ID": 2, "Status": "true", "Text": "Robert Koch" },
            { "ID": 3, "Status": "false", "Text": "Alexander Fleming Alexander Fleming Alexander Fleming Alexander" }
        ]
    },
    {
        "QType": "TFQ",
        "Ques": "Who is credited with the discovery of penicillin penicillin penicillin penicillin penicillin penicillin penicillin?",
        "ArrOpt": [
            { "ID": 0, "Status": "true", "Text": "True" },
            { "ID": 1, "Status": "false", "Text": "False" }
        ]
    }
];
</script>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui, width = device-width"
    name="viewport" />
  <link href="game/media/css/quiz.css" rel="stylesheet" type="text/css" />
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
      <div id="home" class="home_bg" style="display: block; background-image:url(game/media/assets/gameplay/hoomebg.png)">
        <div id="hometitle" class="title"></div>
        <div id="homeplay" class="btn_play" style="background-image:url(game/media/assets/gameplay/playbtn.png)"></div>
        <div id="lefthelp" class="btn_help"></div>
      </div>
      <div id="mathQuizContent" class="math-quiz-content">
        <div id="timerbox" class="timerbox" style="background-image:url(game/media/assets/gameplay/timer.png)">
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
          <div id="submit" class="btn_submit" style="background-image:url(game/media/assets/gameplay/btn_submit.png)"></div>
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
        <div class="welldone"></div>
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

  <audio id="tryagain" src="game/media/assets/audio/tryagain.mp3" type="audio/mpeg"></audio>
  <audio id="welldone" src="game/media/assets/audio/claping.mp3" type="audio/mpeg"></audio>
  <audio id="greatwork" src="game/media/assets/audio/greatwork.mp3" type="audio/mpeg"></audio>

  <script src="game/media/script/jquery/jquery.js"></script>

  <script type="text/javascript" src="game/media/script/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="game/media/script/jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="game/media/script/jquery/jquery.ui.touch-punch.js"></script>

  <!-- Loader Libraries Starts -->
  <script type="text/javascript" src="game/media/script/preloader/jquery.html5Loader.min.js"></script>
  <script type="text/javascript" src="game/media/script/preloader/animation/jquery.big-counter.js"></script>
  <script type="text/javascript" src="game/media/script/preloader/Main.class.js"></script>
  <script type="text/javascript" src="game/media/script/preloader/configPreload.js"></script>
  <!--Loader Libraries Ends -->

  <script src="game/media/data.js"></script>
  <script src="game/media/script/quiz.js"></script>
</body>

</html>
