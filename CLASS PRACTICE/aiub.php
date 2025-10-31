<DOCTYPE html>

<head>

    <title>WebTech</title>

     <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ABE2, #5563DE);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
        }

        h1, h2 {
            text-align: center;
            margin: 5px 0;
        }

        form {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border-radius: 15px;
            padding: 30px 40px;
            margin-top: 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            width: 400px;
        }

        table {
            width: 100%;
            color: #fff;
        }

        td {
            padding: 8px;
            vertical-align: top;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 6px;
            border: none;
            border-radius: 5px;
            outline: none;
            margin-top: 3px;
        }

        input[type="file"] {
            color: #fff;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #00BFA6;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            transition: 0.3s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #008C7A;
        }

        td[colspan="2"] {
            text-align: center;
        }
    </style>
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
                <td colspan="2">
                    <input type="submit">
                    <input type="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>