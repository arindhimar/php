<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table id="tb1" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile</th>
        </tr>
        
    </table>



    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script>

        function loaddata()
        {
            $.ajax({
                type: "POST",
                url: "serverdisp.php",
                success: function (response) {
                    $("#tb1").html(response);
                }
            });
        }

        $("document").ready(function()
        {
            //alert("ssdhfh");

            loaddata();

        })

    </script>
</body>
</html>