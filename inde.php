<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/style.css">
    

    <title>Prueba</title>
</head>
<body>
    <div class="container">
        <div class="row text-center login-page">
            <div class="col-md-12 login-form">
               <form id="login"> 			
                    <div class="row">
                        <div class="col-md-12 login-form-header">
                        <p class="login-form-font-header">Login<span><p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 login-from-row">
                            <input name="user" id="user" type="text" placeholder="User"  autofocus/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 login-from-row">
                            <input name="password" id="pass" type="password" placeholder="Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 login-from-row">
                            <button class="btn btn-info" id="log" type="button">Login</button>
                        </div>
                    </div>
             </form>
            </div>
        </div>
    </div>
</body>
    <script src="resources/src/jquery.min.js"></script>
    <script src="resources/src/js/sweetalert2.all.min.js"></script>
    <script src="resources/js/login.js"></script>
</html>