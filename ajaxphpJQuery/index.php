<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery php</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body>
    <!--  -->
    <div class="container mt-5">
        <h1 class="alert-info text-center mb-5 p-3">Example for php ajex jquery</h1>
        <div class="row">
            <form action="" class="col-sm-5" id="myform">
                <h3 class="alert-warning text-center p-2">Add/Update Student</h3>
                <div>
                    <input type="number" class="form-control" id="idid" style="display: none;"/>
                    <input type="text" class="form-control" style="display: none;" id="stuid" />
                    <label for="nameid" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameid" />
                </div>
                <div>
                    <label for="emailid" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailid" />
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordid" />
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary" id="btnadd">Save </button>
                </div>
                <div id="msg"></div>
            </form>
            <div class="col-sm-7 text-center">
                <h3 class="alert-warning p-2">Show Student Information</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>

                </table>
            </div>
        </div>
    </div>
    <!--  -->
    <script src="js/jquery.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/ajaxmy.js"></script>
</body>

</html>