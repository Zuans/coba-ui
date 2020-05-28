<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        
        .forum {
            min-height : 600px;
            min-width : 300px;
            max-width: 45%;
            background-color: grey;
            position : relative;
            margin: auto;
            border-radius: 12px;
            opacity: 0.9;
            padding: 2px 0px;
        }

        .form{
            display : block;
            width : 40%;
            margin: auto;
            margin-bottom : 8%;
            margin-top: 2%;
            height: 22px;
            border: 3px solid grey;
            border-radius: 8px;
            padding-bottom: -10px;
        }

        .forum label{
            display: block;
            text-align: center;
            padding-top: 10px;
        }

        .forum h1 {
            display: block;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding-top: 10px;
        }



        .form:focus {
            border: 3px solid rgb(10, 216, 78);
        }
    </style>
</head>
<body>
    <div class="forum">
        <form action=""  method="POST">
            <h1>REGISTRASI</h1>
            <label for="name">Name</label>
            <input type="text" class="form" name="name" placeholder="Enter your name" id="name">
            <label for="email">Email</label>
            <input type="email" class="form" name="email" placeholder="Enter your email" id="email">
            <label for="password">Password</label>
            <input type="password" class="form" name="password" placeholder="Enter your password" id="password">
            <label for="password2">Confirm Password</label>
            <input type="password2" class="form" name="password2" placeholder="Re-type your password" id="password2">
            <label for="gender">Select your gender</label>
            <select name="gender" class="form" id="gender">
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">perempuan</option>
            </select>
            <input type="submit" class="form" value="Submit">
        </form>
    </div>
</body>
</html>