<!DOCTYPE html>
<html>
<head>
  <title>Anxiety Test</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      
    }
    .main{
        background-image: url("{{asset('img/bg/'.$bg.'.jpg')}}");		
        background-size: cover;
        background-repeat: no-repeat;
        background-color: rgba(255, 255, 255, 0.8);
        background-position:center;
        background-attachment:fixed;
        border: 1px solid #dddddd;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 40px;
background-color:white;
opacity:85%;
	
    }

    h2 {
      text-align: center;
    }

    p {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="submit"] {
      display: block;
      margin: 0 auto;
      padding: 10px 20px;
      background-color: #4caf50;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
    <div class="main">
        <div class="container">
        <h2>{{$title}}</h2>
        <?php
        $array = array();
        $genderErrArr = array();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 0; $i < 20; $i++) {
                if (empty($_POST["Q".$i])) {
                    $genderErr = "Answer is required";
                } else {
                    $array[$i] = test_input($_POST["Q".$i]);
                }
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        ?>
        <form action="" method="post">
        <p>Be Honest and Reflective: Answer the questions as honestly and accurately as possible. Reflect on your thoughts, feelings, and behaviors related to anxiety. Try not to overthink or second-guess your responses.</p>
        @foreach($results as $result)
        <label for="{{ $result->id }}">{{ $loop->index+1 }}. {{ $result->Question }}</label>
            <?php $jsonAnswers = json_decode($result->AnswerValues); ?>
            @foreach($jsonAnswers as $values)
            <label><input type="radio" name="Q{{ $result->id }}" value="{{ $loop->index }}">{{$values}}</label>
            @endforeach
           
        @endforeach
        <input type="submit" value="Submit">
        </form>
        </div>
    </div>
</body>
