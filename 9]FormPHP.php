<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <style>
        .main{
            width: 50%;
            margin: 0 auto;
            background-color: #34fff9;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Form Creation and Data Handling</h1>
    <div class="main">
    <?php
        if(isset($_POST['submit'])){
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $age = htmlspecialchars($_POST['age']);
            $college = htmlspecialchars($_POST['college']);
            $phone = htmlspecialchars($_POST['phone']);
            $gender = htmlspecialchars($_POST['gender']);
            $password = htmlspecialchars($_POST['password']);

            echo "Name Entered is: $name <br><br>";
            echo "Email Entered is: $email <br><br>";
            echo "Age Entered is: $age <br><br>";
            echo "College Entered is: $college <br><br>";
            echo "Phone Number Entered is: $phone <br><br>";
            echo "Gender is: $gender <br>";
            echo "Password Entered is: $password <br><br>";
        } else {
    ?>

    </div>
  
    <form action="9]FormPHP.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
        <br><br>
        
        <label for="college">College:</label>
        <input type="text" name="college" id="college" required>
        <br><br>
        
        <label for="phone">Phone Number:</label>
        <input type="tel" name="phone" id="phone" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        }
    ?>
</body>
</html>