<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>

<body>
    <table align="center">
        <form method="POST" action="q4action.php">
            <tr>
                <th><label for="txtusername">UserName</label></th>
                <td><input type="text" name="txtusername" id="txtusername"></td>
            </tr>
            <tr>
                <th><label for="txtpassword">Password</label></th>
                <td><input type="password" name="txtpassword" id="txtpassword"></td>
            </tr>
            <tr>
                <th><label for="txtemail">Email</label></th>
                <td><input type="text" name="txtemail" id="txtemail"></td>
            </tr>
            <tr>
                <th><label for="txtjob">Job Type</label></th>
                <td>
                    <select name="txtjob" id="txtjob">
                        <option value="manager">Manager</option>
                        <option value="Sr.Developer">Sr.Developer</option>
                        <option value="Jr.Developer">Jr.Developer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="txtsalary">Salary</label></th>
                <td><input type="text" name="txtsalary" id="txtsalary"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
</body>

</html>
