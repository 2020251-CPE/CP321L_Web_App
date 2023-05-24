<!DOCTYPE html>
<html>
<head>
  <title>{{$result}} Result</title>
  <style>
    html,body{
        margin: 0;
    padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      height: 100vh;
  width: 100vw;
      
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
        height: 100%;
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
            <p>core: {{$total}} / 80</p> 
            <br>
            {{$result}}
            <br>
            <button href="{{ url(app/home') }}" ></button>
        </div>
    </div>
</body>
</html>