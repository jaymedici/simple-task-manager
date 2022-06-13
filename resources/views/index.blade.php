<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</head>
<body>
    <h4 class="text-center mt-2" style="color: white;">Task Managing App</h4>
    <div class="d-flex justify-content-center align-items-center container">
        <div class="panel bg-light">
        
            <div class="row">
                <div class="col-md-8">
                    <div class="row mb-2">
                        <div class="col-md-6">

                        </div>

                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary pull-right">
                            <i class="fa fa-plus"></i> Create Task</a>
                        </div>
                    </div>

                    <div class="card border-secondary mb-2">
                        <div class="card-body text-secondary">
                            <div class="row">
                                <div class="col-md-1 py-1"><i class="fa fa-arrows"></i></div>
                                <div class="col-md-9">
                                    <h5>Wash the dishes</h5>
                                </div>
                                <div class="col-md-2"><span class="float-right"><strong>#1</strong></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-secondary mb-2">
                        <div class="card-body text-secondary">
                            <div class="row">
                                <div class="col-md-1 py-1"><i class="fa fa-arrows"></i></div>
                                <div class="col-md-9">
                                    <h5>Mow the lawn</h5>
                                </div>
                                <div class="col-md-2"><span class="float-right"><strong>#2</strong></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>

</body>
</html>