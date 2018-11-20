<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ro's BBM Results Tracker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
</head>
<body>

<!-- Navigation Bar -->
<div>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark" id="Header_Navigation" style="background-color: dodgerblue;">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Ro's BBM Result Tracker</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- left navigation links -->
                <ul class="navbar-nav mr-auto">

                    <!-- active navigation link -->
                    <li class="nav-item active">
                        <a class="nav-link" href="/bbm1/index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <!-- regular navigation link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <!-- Drop-down Link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            External Links
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://basketballmonster.com/dfsdailysummary.aspx">Live Results</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                </ul>

                <!-- right navigation link -->
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" id="BTN_Login" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        </div>

<!-- Table -->
    <div class="container-fluid" style="margin-top: 100px;">


        <!-- Login Modal -->
        <div id="Modal_Login" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Login</h2>
                    </div>
                    <div class="modal-body">
                        <div id="modal_login_fields">
                            <h5>Complete the Fields to Login</h5>
                            <input type="text" class="form-control" placeholder="Username" id="Login_Username"><br>
                            <input type="text" class="form-control" placeholder="Password" id="Login_Password"><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close" id="BTN_Login_Close" value="Close">
                    </div>
                </div>
            </div>
        </div>

    <!-- Options Modal -->
        <div id="Modal_Options" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Options</h2>
                    </div>
                <div class="modal-body">
                    <div id="modal_edit_Options">
                        <h5>Change Your View Here</h5>
                        <select name="View">
                            <option value="viewByName">By Name</option>
                            <option value="viewByPrice">By Price</option>
                            <option value="viewByValue">By Value</option>
                            <option value="viewByRatio">By Ratio</option>
                        </select>
                        <input  style="float: right" type="button" class="btn btn-primary" id="BTN_Options_Close"value="Close">

                    </div>
                </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="align-content: center;">
                <h2 style="color:dodgerblue; text-align: center">NBA Results Date: </h2>

                <input style="float: left" type="button" class="btn btn-primary" id="BTN_refresh" value="Refresh">
                <input style="float: right" type="button" class="btn btn-secondary" id="BTN_options" value="Options">
                <br>
                <br>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <td>Player Name</td>
                        <td>Price</td>
                        <td>Value</td>
                        <td>Ratio</td>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>

        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>


        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
        <script src="js/sweetalert2.all.min.js" type="text/javascript"></script>

        <script type="text/javascript">

            $(document).ready(function(){

                //Options modal show/hide
                $("#BTN_options").on('click', function () {
                    $("#Modal_Options").modal('show');
                });
                $("#BTN_Options_Close").on('click', function () {
                    $("#Modal_Options").modal('hide');
                });

                //Login modal show/hide
                $("#BTN_Login").on('click', function (){
                    $("#Modal_Login").modal('show');
                    });
                $("#BTN_Login_Close").on('click', function () {
                   $("#Modal_Login").modal('hide');
                });


                getPlayerData(0,50);
            });

            function getPlayerData(start, limit) {
                $.ajax({
                    url: 'Results_Ajax.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        key: 'getPlayerData',
                        start: start,
                        limit: limit
                    }, success: function (response) {
                        if (response != "reachedMax") {
                            $('tbody').append(response);
                            start += limit;
                            getPlayerData(start, limit);
                        } else
                            $(".table").DataTable();
                    }
                });
            }

    </script>
</body>
</html>


