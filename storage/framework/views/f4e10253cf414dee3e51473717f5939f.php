<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >
    <script src="<?php echo e(asset('js/login.js')); ?>"></script>

    <title>SIS Login</title>
    <style>
        /* Global styles for the page */
        body {
            background-color: #fafafa;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #262626;
            line-height: 1.5;
        }
        /* Styles for the container holding the login form */
        .container {
            max-width: 25em;
            margin: 0 auto;
            padding: 4em;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
            display: flex;
            margin-top: 4.5em;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        /* Styles for the logo image and text */
        .logo {
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
            display: flex;

        }
        /* sets the maximum width of the img */
        .logo img {
            max-width: 200px;
            transition: transform 0.4s;
        }

        /* System title */
        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
            color: #262626;
        }

        /* Styles for the form elements */
        form {
            display: flex;
            flex-direction: column;
        }
        /* style all labels for the input */
        label {
            margin-bottom: 10px;
            color: #262626;
            font-weight: 600;
        }

        /* inputs like ID PASS and Button */
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #dbdbdb;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="text"]::placeholder,  /*placeholder is the text inside the input before clicked*/
        input[type="password"]::placeholder {
            color: #999;
            font-style: italic;
            font-size: 14px;
        }
        /* login button*/
        input[type="submit"] {
            background-color: #0095f6;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        /* when mouse over change color to dark blue */
        input[type="submit"]:hover {
            background-color: #04082c;
        }

        /* when clicked it moves the button down 2PX */
        input[type="submit"]:active {
            transform: translateY(2px);
        }

        /* Style for when user makes wrong login */
        #errorMessage {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<!-- Container for the login form -->
<div class="container">
    <!-- Logo image and text -->
    <div class="logo">
        <img src="<?php echo e(asset('img/logo.png')); ?>" alt="SIS Logo" id="logo" aria-label="SIS logo" title="Student Information System">
    </div>
    <!-- Login form -->
    <h1>Student Information System</h1>
    <form method="post" action="">
        <label for="StudentID">
            <input type="text" id="StudentID" name="StudentID" aria-label="Student ID" placeholder="Student ID" autocomplete="StudentID">
        </label>
        <label for="password">
            <input type="password" id="password" name="password" aria-label="Password" placeholder="Password" autocomplete="current-password">
        </label>
        <p id="errorMessage" aria-label="Error Message"><?php echo isset($errorMessage) ? $errorMessage : ''; ?></p>
        <input type="submit" value="Log In" id="submit" aria-label="submit" style="width: 100%;">
    </form>
</div>
</body>

</html>
<?php /**PATH E:\laragon\www\SisLaravelMain\resources\views/auth/login.blade.php ENDPATH**/ ?>