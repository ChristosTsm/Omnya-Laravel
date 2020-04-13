<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Omnya - Business Management System</title>
      <!-- Font Awesome -->
      <script src="https://kit.fontawesome.com/0e69954788.js" crossorigin="anonymous"></script>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700&display=swap" rel="stylesheet">
      <!-- Styles -->
      <style>
          :root {
              --link-color: #eb0040;
          }

          html, body {
              background-color: #fff;
              color: #636b6f;
              font-family: 'Quicksand', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }

          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }

          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }

          .title {
              font-size: 84px;
          }

          .links > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 13px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }

          .text-center {
              text-align: center;
          }

          .login-form {
              display: flex;
              flex-direction: column;
              transform: translateY(-50%);
          }
          .form {
              display: flex;
              flex-direction: column;
              margin: 0 auto;
          }
          .heading {
              font-weight: 300;
              text-align: center;
          }
          input {
              padding: 10px 100px 10px 15px;
              margin: 10px 0;
          }
          a {
              text-decoration: none;
              font-weight: 700;
              color: var(--link-color);
          }
          .btn {
              /* display: block; */
              padding: 5px 35px;
              margin: 0 auto;
              background-color: var(--link-color);
              color: #fff;
              outline: none;
              border: none;
              cursor: pointer;
              margin: 10px 0 15px;
              transition: 250ms;
          }
          .btn:hover {
              transform: scale(1.2);
          }
          .pass-forgot {
              font-weight: 300;
              font-size: 0.8rem;
          }
          .w-100 {
              width: 100%;
          }
      </style>
  </head>
  <body>
    @yield('content')
  </body>
</html>