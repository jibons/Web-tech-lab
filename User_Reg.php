<!DOCTYPE html>
<html>
<head>

    <title>Online Voting System</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">

   
</head>
<body>
  
        
    <h1>Online Voting System</h1>
    <fieldset>
        <legend>User Account Information</legend>
        <form action="register.php" method="post">
            <table>
                <tr>
                    <td><label for="name">Full Name:</label></td>
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <td><label for="Date_of_Birth">Date of Birth:</label></td>
                    <td><input type="date" id="Date_of_Birth" name="Date_of_Birth" required></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="national">National ID:</label></td>
                    <td><input type="text" id="national" name="national" required></td>
                </tr>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><input type="text" id="address" name="address" required></td>
                </tr>
                <tr>
                    <td><label for="mobile">Mobile Number:</label></td>
                    <td><input type="tel" id="mobile" name="mobile" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td><label for="confirmPassword">Confirm Password:</label></td>
                    <td><input type="password" id="confirmPassword" name="confirmPassword" required></td>
                </tr>
                <tr>
                    <td><button type="submit">Register</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>