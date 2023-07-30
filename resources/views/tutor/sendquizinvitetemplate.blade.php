Dear <b>{{$studentname}}</b>
<br><br>

You are invited for following Quiz.<br><br>

<table>
  <tr>
    <td>Tutor Name</td>
    <td>{{$tutorname}}</td>
  </tr>
  <tr>
    <td>Quiz Title</td>
    <td>{{$quiztitle}}</td>
  </tr>
  <tr>
    <td>Start Datetime</td>
    <td>{{$startdate}}</td>
  </tr>
  <tr>
    <td>End Datetime</td>
    <td>{{$enddate}}</td>
  </tr>
</table>

<br><br>
Please use this link to join the quiz <a href="/attemptquiz?quizid={{$quizid}}">/attemptquiz?quizid={{$quizid}}</a>
