<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login EAD</title>

    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body, html {
            width: 100%;
            height: 100%;
        }

        body {
            background-color: #181818;
            color: #fff;
        }

        /* LOGIN */
        .login_page {
            width: 100%;
            height: 100%;
            background-image: url('assets/img/bg_login.png');
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .teste_login h2 {
            margin-bottom: 40px;
            text-align: center;
        }

        .teste_login h2::after {

            content: '';
            display: block;
            width: 100px;
            border-top: 1px solid #70eff8;
            margin: 15px auto;
        }

        .login_area {
            width: 300px;
            height: 320px;
            background-color: #181818;
            text-align: center;
            border: 1px solid transparent;
            box-shadow: 0px 5px 8px #70eff8;
            padding-top: 40px;
            transition: 1s;
            /*position: absolute;
             top: 50%;
            left: 50%;
            margin-top: -140px;
            margin-left: -140px; */
            /* padding: 30px; */
        }

        .login_area:hover {
            border: 1px solid #70eff8;
            box-shadow: 0px 5px 8px #70eff8;
            transition: 1s;
        }

        .login_area input {
            width: 90%;
            border: 2px solid #70eff8;
            border-radius: 5px;
            padding: 5px; 
        }

        .cadastre {
            cursor: pointer;
            color: #70eff8;
        }

        .login_page .modal-header button span {
            color: #fff;
        }

        .login_page .modal-header,
        .login_page .modal-body {
            border: 1px solid #70eff8;
            background-color: #181818;
        }

        .login_page .modal-header {
            border-bottom: none;
        }

        .login_page .modal-body input {
            width: 60%;
            border: 2px solid #70eff8;
            border-radius: 5px;
            padding: 5px;
        }


        .login_page .modal-body button,
        .login_area button {
            width: 40%;
            background: transparent;
            border: 2px solid #70eff8;
            border-radius: 5px;
            color: #ffffff;
            font-weight: 500;
            padding: 5px;
        }

        .login_page .modal-body button:hover,
        .login_area button:hover {
            background-color: #70eff8;
            color: #000000;
        }




        #check {
            display: none;
        }

        #button-menu {
            cursor: pointer;
            padding: 15px;
            position: absolute;
            z-index: 1;
        }

        .bar-menu {
            background-color: #181818;
            height: 100%;
            width: 200px;
            position: absolute;
            transition: all 0.2s linear;
            border-right: 3px solid #70eff8;
            left: -197px;
        }

        .bar-menu nav {
            width: 100%;
            position: absolute;
            top: 60px;
            margin-left: -73px;
        }

        #check:checked ~ .bar-menu{
            transform: translateX(300px);
        }

        nav {
            margin-left: 30px;
        }

        #header {
            height: 70px;
            border-bottom: 2px solid #70eff8;
            margin-bottom: 40px;
        }

        /* #content {
            border-left: 2px solid #70eff8;
        } */

        #content_section1 {
            margin: 40px 0 40px 0;
        }
        
        /* #content_section1 button {
            text-center
        } */

        #content_section1 iframe {
            margin-bottom: 40px;
        }

        /* #content_section1 .opcoes {
            border: 2px solid #70eff8;
            border-left: none;
            padding: 15px;
        }

        #content_section1 .opcoes:hover {
            background-color: #3b7478;
            border: 2px solid #3b7478;
            border-left: none;
        
        } */

        #comments {
            border-top: 2px solid #70eff8;
            margin: 40px 0 40px 0;
            padding: 40px 0 40px 0;
        }

        #comments textarea {
            width: 60%;
            height: 200px;
        }

    </style>
</head>

<body>