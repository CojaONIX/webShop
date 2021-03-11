<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link href="sb-admin.css" rel="stylesheet" />

</head>
<body  class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="Password" name="Password" class="password form-control" data-val="true" data-val-length="The field Password must be a string with a maximum length of 30." data-val-length-max="30" data-val-required="Please enter password." placeholder="Password" autofocus />
                            
                            <label for="Password">Password</label>
                        </div>
                    </div>
                    <input type="submit" value="Login" class="btn btn-primary form-control" />
                    <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
