<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table align="center">
        <tr>
            <th>
                Name
            </th>
            <td>
                <input type="text" id="name">
            </td>
        </tr>


        <tr>
            <th>
                Email
            </th>
            <td>
                <input type="text" id="email">
            </td>
        </tr>



        <tr>
            <th>
                Password
            </th>
            <td>
                <input type="text" id="password">
            </td>
        </tr>


        <tr>
            <th>
                Mobile
            </th>
            <td>
                <input type="text" id="mobile">
            </td>
        </tr>



        <tr>

            <td colspan="2" align="center">
                <input type="button" id="submitdt" value="Submit">
            </td>
        </tr>



    </table>

    <div id="d1"></div>



    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script>
        var script = document.createElement('script');
        script.src = 'https://code.jquery.com/jquery-3.6.3.min.js'; // Check https://jquery.com/ for the current version
        document.getElementsByTagName('head')[0].appendChild(script);



        function validatename() {
            let temp = document.getElementById('name').value

            let pt = /^[a-z]{2,}$/ig

            if (pt.test(temp) == true) {
                return true
            } else {
                document.getElementById('d1').innerHTML = "Invalid Name"
                return false
            }

        }


        function validateemail() {
            let temp = document.getElementById('email').value

            let pt = /^[a-z]{1,}[a-z0-9]{0,}[@]{1}[a-z]{1,}[.]{1}[a-z]{1,}$/ig

            if (pt.test(temp) == true) {
                return true
            } else {
                document.getElementById('d1').innerHTML = "Invalid Email"
                return false

            }

        }


        function validatepassword() {
            let temp = document.getElementById('password').value

            let pt = /[a-z]{1,}[0-9]{1,}[A-Z]{1,}$/g

            if (pt.test(temp) == true) {
                return true
            } else {
                document.getElementById('d1').innerHTML = "Invalid Pass"
                return false
            }

        }


        function validatemobile() {
            let temp = document.getElementById('mobile').value

            let pt = /^[6-9]{1}[0-9]{9}$/ig

            if (pt.test(temp) == true) {
                return true
            } else {
                document.getElementById('d1').innerHTML = "Invalid Mobile"
                return false
            }

        }






        $("#submitdt").click(function() {
            //alert("asdkhas");


            //console.log(dt)

            if (validatename() == true && validateemail() == true && validatepassword() == true && validatemobile() == true) {
                var formdata = 'name=' + document.getElementById('name').value + '&email=' + document.getElementById('email').value + '&password=' + document.getElementById('password').value + '&mobile=' + document.getElementById('mobile').value;
                document.getElementById('d1').innerHTML = ""


                let name = $("#name").val();
                let email = $("#email").val();
                let password = $("#password").val();
                let mobile = $("#mobile").val();

                var dt = {
                    "name": name,
                    "email": email,
                    "password": password,
                    "mobile": mobile
                }


                $.ajax({
                    type: "POST",
                    url: "serverinsert.php",
                    data: dt,

                    success: function(response) {
                        alert(dt)
                    }
                });

            } else {
                console.log("Invalid")
            }




        })















































        // $("#submitdt").click(function()
        // {
        //     //alert("asdkhas");

        //     let name=$("#name").val();
        //     let email=$("#email").val();
        //     let password=$("#password").val();
        //     let mobile=$("#mobile").val();

        //     var dt={"name":name,"email":email,"password":password,"mobile":mobile}

        //     console.log(dt)

        //     $.ajax({
        //         type: "POST",
        //         url: "serverinsert.php",
        //         data: dt,

        //         success: function (response) {
        //             alert(dt)
        //         }
        //     });
        // })
    </script>

</body>

</html>