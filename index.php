<!DOCTYPE html>
<html>
    <head>
        <title>rows and column</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <style>
            .top-medium-spacing{
                padding-top: 50px;
                padding-left: 450px;
            }
            .bottom-medium-spacing{
                padding-bottom: 50px;
            }
            .background{
                background-color: #C4C4C4;
                padding-top: 20px;
                padding-bottom: 10px;
                padding-left: 20px;
                padding-right: 20px;

            }
            .heading-space{
                padding-top: 50px;
            }
            .submit-bg{
                background-color: white;
            }
            </style>
    </head>
    <body>
        <div class="container heading-space">
                 
                <form method = "GET" action = "formfetch.php" class="container top-medium-spacing bottom-medium-spacing" >
                    <div class="row content-space content-spacing-bottom">
                        <div class="background">
                            <div class="form-group text-center">
                                <p><input type ="text" name ="enter_your_name" placeholder ="Enter your Name">
                            </div>
                            <div class="form-group text-center">
                                <p><input type ="text" name ="enter_your_phone_no" placeholder ="Enter your Phone No">
                            </div>
                            <div class="form-group-text text-center">
                                <p><input class="btn btn-outline-success submit-bg" type ="submit" value ="submit">
                            </div>
                        </div>
                    </div>
                </form>
            
        </div>
    </body>
</html>