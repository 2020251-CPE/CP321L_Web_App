<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url("{{asset('img/bg/signupBG.jpg')}}");
      background-size: cover;
      background-repeat: no-repeat;
      background-color: #f4f4f4;
    }

    .container {
      opacity: 85%;
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      background-color: #ffffff;
      border: 1px solid #dddddd;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #dddddd;
      border-radius: 5px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
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
  <div class="container">
    <h2>Login</h2>
    <form action="{{url('/log_in')}}" method="POST">
      @csrf   
      <label for="username">Email:</label>
      <input type="text" id="email" name="email" placeholder="Input Email here" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Input password here" required>
      @error('error')
        <p>{{$message}}</p>
      @enderror
      <input type="submit" value="Login">
    </form>
    </form>
    <br>
    <a href="{{url('/sign_up')}}">Don't have an Account yet? Sign In!</a>
 
  </div>
</body>
</html>
