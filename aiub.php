<DOCTYPE html>

<head>

    <title>WebTech</title>
</head>
<body>
    <center>
        <h1>AIUB Management System</h1>
        <h2>We Create Future</h2>
    </center>

    <h1>Registration Form</h1>

    <form>
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Designation:</td>
                <td>
                    <input type="radio" name="designation"> Junior Position
                    <input type="radio" name="designation"> Senior Position
                    <input type="radio" name="designation"> Project Lead
                </td>
            </tr>
            <tr>
                <td>Preferred Language:</td>
                <td>
                    <input type="checkbox" name="language"> JAVA
                    <input type="checkbox" name="language"> C++
                    <input type="checkbox" name="language"> PHP
                </td>
            </tr>
            <tr>
                <td>Preferred Course:</td>
                <td>
                    <select>
                        <option>Web Technology</option>
                        <option>Database Management System</option>
                        <option>Data Science</option>
                        <option>Artificial Intelligence</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password"></td>
            </tr>
            <tr>
                <td>Please choose a file:</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit">
                    <input type="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>