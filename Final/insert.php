<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</head>

<body>




    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="insert.html">Insert</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="display.php">Display</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="search.php">Search</a>
                </li>

            </ul>
        </div>
    </nav>




    <div class="m-5">
        <label for="name" class="form-label">Name </label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Here">
    </div>


    <div class="m-5">
        <label for="name" class="form-label">Email </label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Here">
    </div>


    <div class="m-5">
        <label for="password" class="form-label"></label>Password </label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password Here">
    </div>

    <div class="m-5">
        <label for="mobile" class="form-label">Mobile </label>
        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Name Here">
    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="button" id="insertbtn" class="btn btn-primary">Insert</button>
    </div>

    <div id="d1"></div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="index.js"></script>
    
</body>

</html>