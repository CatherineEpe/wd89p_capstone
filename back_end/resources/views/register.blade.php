<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../register/register.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">

    <link rel="shortcut icon" type="image/x-icon" href="../admin/assets/img/favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('css/register.css')}}">
    <script src="https://kit.fontawesome.com/d082db701b.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Caprasimo&family=Caveat:wght@700&family=Concert+One&family=Fredericka+the+Great&family=Handlee&family=Julee&family=Lobster&family=Montserrat:wght@300;400&family=Noto+Sans+KR:wght@100&family=Patrick+Hand&family=Press+Start+2P&family=Quicksand:wght@300&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Caprasimo&family=Caveat:wght@700&family=Concert+One&family=Fredericka+the+Great&family=Handlee&family=Julee&family=Lobster&family=Noto+Sans+KR:wght@100&family=Passion+One&family=Patrick+Hand&family=Press+Start+2P&family=Quicksand:wght@300&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"/>
    
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
  </head>
  <body>
    <div class="container2">
        <header class="head">VNHS Online System</header>
        <header class="header">Register</header>
        <form action="#">
            <div class="field lrn">
                <div class="input-field">
                    <input
                    type="text" id="lrn"
                    placeholder="Learner's Reference Number"
                    class="lrn"
                    />
                </div>
                <span class="error lrn-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">
                    LRN is a 12 digit number.
                    </p>
                </span>
            </div>
            <div class="field email">
                <div class="input-field">
                    <input
                    type="text" id="email"
                    placeholder="Email Address"
                    class="email"
                    />
                </div>
                <span class="error lrn-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">
                    Please enter a valid email address.
                    </p>
                </span>
            </div>
            <div class="field username">
                <div class="input-field">
                    <input
                    type="text" id="username2"
                    placeholder="Username"
                    class="username"
                    />
                </div>
                <span class="error lrn-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">
                    Usernames can only have lower case letters (a-z), numbers (0-9), at sign (@) and underscores (_).
                    </p>
                </span>
            </div>
            <div class="field create-password">
                <div class="input-field">
                    <input
                    type="password" id="pass2"
                    placeholder="Create password"
                    class="password"
                    />
                    <i class="bx bx-hide show-hide"></i>
                </div>
                <span class="error password-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">
                    Please enter atleast 8 character with number, symbol, small and
                    capital letters.
                    </p>
                </span>
            </div>
            <div class="field confirm-password">
                <div class="input-field">
                    <input type="password" placeholder="Confirm password" class="cPassword"/>
                    <i class="bx bx-hide show-hide"></i>
                </div>
                <span class="error cPassword-error">
                    <i class="bx bx-error-circle error-icon"></i>
                    <p class="error-text">Password don't match</p>
                </span>
            </div>
            <div class="input-field button">
                <input type="submit" id="register" value="Signup" />
            </div>
        </form>

        <div class="login-signup">
            <span class="text2">Already have an account?
                <a href="{{ route('index') }}">Login</a>
            </span>
        </div>

    </div>

    <!-- JavaScript -->
   <script src="{{ asset('js/register.js')}}"></script>
   
  </body>
</html>