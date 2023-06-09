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
            <p>score: {{$total}} / 100</p> 
            <br>
            <h2> {{$result}}</h2>
           
            <br>
            <form action="{{url('/')}}" method="get">
            <input type="submit" value="Back to Home">
            </form>
            <br>
            <h3>Advices</h3>
            <p>Please note that while these suggestions may be helpful, it's important to consult with a healthcare professional for personalized advice and treatment options for anxiety-related concerns.</p>
            <ul>
            @foreach($advices as $advice)
            <li><p><strong>{{$advice->advice}}</strong>-{{$advice->details}}  </p></li>
            @endforeach
            </ul>
            <hr>
            <h3>Additional Resources</h3>
            <p>These suggestions may serve as general advice. For comprehensive support and personalized treatment, it is recommended to consult with professionals specializing in addiction and recovery.</p>
            <ul>
            @foreach($onlineResource as $resource)
            <li><p><strong><a href="{{$resource->URL}}">{{$resource->Website}}</a></strong>- {{$resource->Details}}  </p></li>
            @endforeach
            </ul>
          </div>
    </div>
</body>
</html>