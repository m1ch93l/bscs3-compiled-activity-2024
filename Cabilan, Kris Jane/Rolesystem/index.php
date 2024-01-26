<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mb-5 pb-5 my-2 py-5"></div>
    <div class="container-md my-5 py-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <div class="card text-center shadow">
                    <div class="card-title my-3">
                        <h1>LOGIN<h1>
                    </div>
                    <div class="card-body">
                        
                    <form action="checkUser.php" method="post">
                        <label class="float-start" for="username">Username</label>
                        <input class="form-control" type="text" name="username" id="username">
                        <label class="float-start" for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                        <button class="btn btn-primary btn-lg float-end mt-3" type="submit">LOGIN</button>
                    </form>

                    </div>
                </div>
                
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    
</body>
</html>