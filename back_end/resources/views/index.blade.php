<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNHS Information System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../login/index.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon.png')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="https://kit.fontawesome.com/d082db701b.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Caprasimo&family=Caveat:wght@700&family=Concert+One&family=Fredericka+the+Great&family=Handlee&family=Julee&family=Lobster&family=Montserrat:wght@300;400&family=Noto+Sans+KR:wght@100&family=Patrick+Hand&family=Press+Start+2P&family=Quicksand:wght@300&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Caprasimo&family=Caveat:wght@700&family=Concert+One&family=Fredericka+the+Great&family=Handlee&family=Julee&family=Lobster&family=Noto+Sans+KR:wght@100&family=Passion+One&family=Patrick+Hand&family=Press+Start+2P&family=Quicksand:wght@300&family=Shadows+Into+Light&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</head>
<body>
    <div class="wrapper"  id="myForm">
        <header class="head">VNHS Online System</header>
        <header class="header">Login</header>
        <form action="#">
            <div class="field username">
                <div class="input-area">
                    <input type="text" placeholder="Username" id="username1">
                    <i class="icon fas fa-user"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Username can't be blank</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password" id="pass1">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password can't be blank</div>
            </div>
            <div class="pass-txt"><a href="#">Forgot password?</a></div>
            
            <div class="input-field button">
                <input type="submit" id="login" value="Login" />
            </div>
        </form>
        <div class="sign-txt">Don't have an account? 
            <a href="{{ route('register') }}">Signup now</a>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>