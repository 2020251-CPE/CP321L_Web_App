<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .main{
        background-image: url("{{asset('img/bg/signupBG.jpg')}}");		
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
      max-width: 150vh;
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
    input[type=text]{
        min-width: 60%;
    }
  </style>
</head>

<body>
    <?php 
        $h4Titles = ["General Anxiety Test","Alcohol Addiction Test","Gambling Addiction Test","Shopping Addiction Test","Drug Addiction Test"];
        $forLabel = ["newGA","newAA","newGMA","newSAR","newDAR"];
        $QuestionsArray = [$generalAnxiety,$alcoholAddiction,$gamblingAddiction,$shoppingAddiction,$drugAddiction];
    ?>
    <div class="main">
        <div class="container">
        <h2>Admin Page</h2>

        @for ($i = 0; $i < 5; $i++)
            <h4>{{$h4Titles[$i]}}</h4>
            @csrf
            <label for="{{$forLabel[$i]}}">
            <input type="text" name="{{$forLabel[$i]}}" > 
            <select>    
                @foreach($answersValues as $answers)
                <option Value="{{$answers->AnswerType}}">{{$answers->AnswerType}}</option>
                @endforeach
            </select>
            <button >Add</button>
            </label>
            @foreach($QuestionsArray[$i] as $result)
                <label for="{{$result->id}}">
                <input type="text" name="Q{{$result->id}}" value="{{$result->Question}}"> 
                <select>    
                    @foreach($answersValues as $answers)
                    <option Value="{{$answers->AnswerType}}" <?php if ($answers->AnswerValues == $result->AnswerValues) echo 'selected'; ?>>{{$answers->AnswerType}}</option>
                    @endforeach
                </select>                
                <button>Update</button> 
                <button>Delete</button>
                </label> 
            @endforeach
        @endfor



            
    <script>
    </script>
        </div>
    </div>
</body>
