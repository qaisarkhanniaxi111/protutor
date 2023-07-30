
// quiz game code start here
$(document).ready(function () {
    InitActivity();
    function InitActivity() {
        var questionctr = 0;
        var correctansctr = 0;
        var timerval = setting[0]["settime"];
        var correctans;
        var correctansval;
        var mcqcorrectarry = [];
        var mcqselectarry = [];
        var optbgcolor = setting[0]["optbgcolor"];
        var quesfontsize = setting[0]["quesfontsize"];
        var optfontsize = setting[0]["optfontsize"];
        $("#welldonebg").hide();
        $(".welldone").hide();
        $(".tryfeedback").hide();
        $("#tryagainbg").hide();
        $("#reset").bind("click", replay);
        $("#replay").bind("click", replay);

        $(".btn_play").bind("click", function () {
            $("#home").hide();
            $("#mathQuizContent").show();
            addTimer();

        })
        $(".btn_help").bind("click", function () {
            $("#helpdiv").show();
        })

        $("#submit").bind("click", function () {

            switch (JData[questionctr]["QType"]) {
                case "SSQ":
                    singleSelect();
                  break;
                case "MSQ":
                    multiSelect();
                  break;
                case "TFQ":
                    trueFalseSelect();
                  break;
              }

        })

        function singleSelect() {
          if(quizdetails.length>0)
          {
        saveme(JData[questionctr]["Questionid"],correctans)
          }
            if (correctans == "true") {
                correctansctr++;
              //  correctFeedback();
            } else {
              correctFeedback();
              //  wrongFeedback();
                $('#optiontext_0').removeClass("selectedopt");
                $('#optiontext_1').removeClass("selectedopt");
                $('#optiontext_2').removeClass("selectedopt");
                $('#optiontext_3').removeClass("selectedopt");
            }
            questionctr++;
            set_progress(questionctr);
            setTimeout(function () {
                if (questionctr == (JData.length)) {
                    clearInterval(myInterval);
                    gameComplete();
                    var scorepercentage = (correctansctr * 100) / questionctr;
                    scorepercentage = scorepercentage.toFixed(2).replace(/[.,]00$/, '');
                //    $("#gameCompleteText").html("Score : " + scorepercentage + '%');

                } else {
                    createQuizQuestions();
                }
            }, 1500)
        }
        const equalsCheck = (a, b) => {
            return JSON.stringify(a) === JSON.stringify(b);
        }
        function multiSelect() {
          if(quizdetails.length>0)
          {
           saveme(JData[questionctr]["Questionid"],correctans)
         }
            if (equalsCheck(mcqselectarry, mcqcorrectarry)) {
                correctansctr++;
              //  correctFeedback();
            } else {
              correctFeedback();
              //  wrongFeedback();
                $('#optiontext_0').removeClass("selectedopt");
                $('#optiontext_1').removeClass("selectedopt");
                $('#optiontext_2').removeClass("selectedopt");
                $('#optiontext_3').removeClass("selectedopt");
            }
            questionctr++;
            set_progress(questionctr);
            setTimeout(function () {
                if (questionctr == (JData.length)) {
                    clearInterval(myInterval);
                    gameComplete();
                    var scorepercentage = (correctansctr * 100) / questionctr;
                    scorepercentage = scorepercentage.toFixed(2).replace(/[.,]00$/, '');
                    $("#gameCompleteText").html("Score : " + scorepercentage + '%');

                } else {
                    createQuizQuestions();
                }
            }, 1500)
        }
        function trueFalseSelect() {
          if(quizdetails.length>0)
          {
          saveme(JData[questionctr]["Questionid"],correctans)
        }
            if (correctans == "true") {
                correctansctr++;
              //  correctFeedback();

            } else {
              correctFeedback();
            //    wrongFeedback();
                $('#optiontext_0').removeClass("selectedopt");
                $('#optiontext_1').removeClass("selectedopt");
                $('#optiontext_2').removeClass("selectedopt");
                $('#optiontext_3').removeClass("selectedopt");
            }
            questionctr++;
            set_progress(questionctr);
            setTimeout(function () {
                if (questionctr == (JData.length)) {
                    clearInterval(myInterval);
                    gameComplete();
                    var scorepercentage = (correctansctr * 100) / questionctr;
                    scorepercentage = scorepercentage.toFixed(2).replace(/[.,]00$/, '');
                    $("#gameCompleteText").html("Score : " + scorepercentage + '%');

                } else {
                    createQuizQuestions();
                }
            }, 1500)
        }

        function set_progress(correctansctr) {
            let _num = correctansctr * (100/JData.length).toFixed(2);
            if(_num > 98){
                _num = 100;
            }
            $('#progress').empty();
            var el_1_width = 0;


            if (_num > 100) { el_1_width = 30; } else { el_1_width = _num; }

            var new_font_clor = '';

            if (_num < 10) { new_font_clor = 'color:#78bd22'; }

            $('#progress').append('<div class="progress-text" style="' + new_font_clor + '">' + _num + ' %</div>');

            $('#progress').append('<div class="progress-el" style="background-color:#78bd22; width:' + el_1_width + '%;">&nbsp;</div>');

        }
        updateMainUi();

        function updateMainUi() {
            //  update UI for home page
            var uipath = "game2/media/assets/theme";

            $('#hometitle').css('background-image', 'url(' + uipath + '/hometitle.png)');

            //  update UI for main game page
            $('body').css('background-image', 'url(' + uipath + '/gamebg.png)');
            $('#questionbar').css('background-image', 'url(' + uipath + '/questionbar.png)');
            $('#timeup').css('background-image', 'url(' + uipath + '/timesup.png)');

        }

        function addTimer() {
            myInterval = setInterval(function () {
                timerval--;
                if (timerval == 0) {
                    clearInterval(myInterval);
                    $("#timeupbg").show();
                    $(".timeup").removeClass('animated zoomIn');
                    $(".timeup").addClass('animated zoomIn');
                    playwrongAudio();
                }
                var minutes = Math.floor(timerval / 60);
                var seconds = timerval % 60;
                var formattedTime = ("0" + minutes).slice(-2) + ":" + ("0" + seconds).slice(-2);
                $("#timer").text(formattedTime);
            }, 1000);
        }
        createQuizQuestions();
        function createQuizQuestions() {
            $("#ques_num").html((questionctr + 1) + "/" + JData.length);
            $("#questboxdiv").empty().html("");
            $("#optionbox").empty().html("");
            $("#questboxdiv").text(JData[questionctr]["Ques"]);

            for (var i = 0; i < JData[questionctr]["ArrOpt"].length; i++) {
                $("<div/>", {
                    'id': 'option_' + i,
                    'num': i,
                    'class': 'option',
                    'val':JData[questionctr]["ArrOpt"][i]["Ques"],
                    'status': JData[questionctr]["ArrOpt"][i]["Status"]
                }).appendTo('#optionbox');

                $("<div/>", {
                    'id': 'optiontext_' + i,
                    'num': i,
                    'class': 'optiontext',
                    'val':JData[questionctr]["ArrOpt"][i]["Text"],
                    'html': JData[questionctr]["ArrOpt"][i]["Text"]
                }).appendTo('#option_' + i);

                if (JData[questionctr]["QType"] == "MSQ") {
                    mcqcorrectarry[i] = JData[questionctr]["ArrOpt"][i]["Status"];
                    mcqselectarry[i] = "false";
                }

            }
            $(".optiontext").css("background-color", optbgcolor + "!important");
            $("#questboxdiv").css("font-size", quesfontsize);
            $(".optiontext").css("font-size", optfontsize);
			$(".optiontext").css("color", "white");
            $(".math-quiz-question-container").css("color", "black");

            if (JData[questionctr]["QType"] == "SSQ") {
                $('.option').bind("click", function () {
                    correctans = $(this).attr("status");
                    correctansval=$(this).attr("val");
                    $('#option_0').removeClass("selectedopt");
                    $('#option_1').removeClass("selectedopt");
                    $('#option_2').removeClass("selectedopt");
                    $('#option_3').removeClass("selectedopt");
                    $(this).addClass("selectedopt");

                });
            }

            if (JData[questionctr]["QType"] == "MSQ") {
                $('.option').on('click', function () {

                    $(this).toggleClass('selectedopt');
                    const hasClass = $(this).hasClass('selectedopt');
                    if (hasClass) {
                        mcqselectarry[$(this).attr("num")] = "true";
                    } else {
                        mcqselectarry[$(this).attr("num")] = "false";
                    }


                });

            }

            if (JData[questionctr]["QType"] == "TFQ") {
                $('.option').bind("click", function () {
                    correctans = $(this).attr("status");
                    $('#option_0').removeClass("selectedopt");
                    $('#option_1').removeClass("selectedopt");
                    $('#option_2').removeClass("selectedopt");
                    $('#option_3').removeClass("selectedopt");
                    $(this).addClass("selectedopt");

                });
            }



        }

        function correctFeedback() {
            // $("#welldonebg").show();
            // $(".welldone").show();
            playcongAudio();
            // var setTimer = setTimeout(function () {
            //     $(".welldone").hide();
            //     $("#welldonebg").hide();
            //     clearTimeout(setTimer);
            // }, 1500);
        }

        function playcongAudio() {
            var objPlayMusic = document.createElement("audio");
            objPlayMusic.src = "game/media/assets/audio/claping.mp3";
            objPlayMusic.play();
        }

        function wrongFeedback() {
            // $("#tryagainbg").show();
            // $(".tryfeedback").show();
            playwrongAudio();
            // var setTimer = setTimeout(function () {
            //     $(".tryfeedback").hide();
            //     $("#tryagainbg").hide();
            //     clearTimeout(setTimer);
            // }, 1000);
        }

        function playwrongAudio() {
            var objPlayMusic = document.createElement("audio");
            objPlayMusic.src = "game/media/assets/audio/tryagain.mp3";
            objPlayMusic.play();
        }

        function gameComplete() {
            $("#rightBoxMain").hide();
            $("#gameComplete").show();
            greatwork();
        }

        function replay() {
            $('.progress-text').html("0%");
            $('.progress-el').remove();
            $("#gameComplete").hide();
            $("#timeupbg").hide();
            questionctr = 0;
            correctansctr = 0;
            timerval = setting[0]["settime"];
            $("#questboxdiv").empty();
            $("#optionbox").empty();
            createQuizQuestions();
            addTimer();
        }

        function greatwork() {
            var objPlayMusic = document.createElement("audio");
            objPlayMusic.src = "game/media/assets/audio/greatwork.mp3";
            $(".welldone").css("display","block")
            $("#welldonebg").css("display","block")
            objPlayMusic.play();
        }

        closehelp = function () {
            $("#helpdiv").hide();
        }
    }


    $("#homeplay").click(function(){
      if(quizdetails.length>0)
      {
    startQuiz(quizdetails[0].quizid)
      }
    })


});
