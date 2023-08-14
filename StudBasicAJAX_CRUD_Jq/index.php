<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <script src="jquery.js"></script>
    <script src="index.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        table {
            margin: auto;
            border: 1px solid #ccc;
            border-collapse: collapse;
            padding: 20px;
            background-color: #fff;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"] {
            width: 200px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        span.error-message {
            color: #ff0000;
            font-size: 12px;
        }
    </style>

</head>

<body>
    <div id="addUserDiv">
        <table align="center">
            <form method="POST">
                <tr>
                    <th>Name</th>
                    <td><input type="text" id="txtName" name="sname"></td>
                    <td><span class="error-message"></span></td>
                </tr>
    
                <tr>
                    <th>Email</th>
                    <td><input type="text" id="txtEmail" name="semail"></td>
                    <td><span class="error-message"></span></td>
                </tr>
    
                <tr>
                    <th>Password</th>
                    <td><input type="password" id="txtPass" name="spass"></td>
                    <td><span class="error-message"></span></td>
                </tr>
    
                <tr>
                    <th>DOB</th>
                    <td><input type="date" id="txtDob" name="sdob"></td>
                    <td><span class="error-message"></span></td>
                </tr>
    
                <tr align="center">
                    <th colspan="3" ><input  type="submit" id="addUserBtn" value="Submit" style="margin-left: 40%;"></th>
                </tr>
            </form>
        </table>
    </div>
    
    <div id="updateUserDiv">
    <table align="center">
            <form method="POST">
                <tr>
                    <th>Name</th>
                    <td><input type="text" id="txtUName" name="sname"></td>
                    <td><span class="error-message"></span></td>
                </tr>
    
                <tr>
                    <th>Email</th>
                    <td><input type="text" id="txtUEmail" name="semail"></td>
                    <td><span class="error-message"></span></td>
                </tr>
    
                <tr>
                    <th>Password</th>
                    <td><input type="password" id="txtUPass" name="spass"></td>
                    <td><span class="error-message"></span></td>
                </tr>
    
                <tr>
                    <th>DOB</th>
                    <td><input type="date" id="txtUDob" name="sdob"></td>
                    <td><span class="error-message"></span></td>
                </tr>
    
                <tr align="center">
                    <th colspan="3" ><input  type="submit" id="updateUserBtn" value="Update" style="margin-left: 40%;"></th>
                </tr>
            </form>
        </table>
    </div>

    <div id="dispUserDiv"></div>
</body>

</html>