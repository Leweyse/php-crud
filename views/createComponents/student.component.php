<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Student</title>
</head>
<body>
<header>
        <nav class='nav'>
            <a href="student.component.php"><li class='shadow-pop-tr'>Create Student</li></a>
            <a href="teacher.component.php"><li class='shadow-pop-tr'>Create Teacher</li></a>
            <a href="class.component.php"><li class='shadow-pop-tr'>Create Class</li></a>
        </nav>
    </header>
 <div class='container'>
     <h2 class='title'>create student</h2>
    <form class='form' action="">
        <input type="text" name='studentName' placeholder='Name'>
        <input type="email" name='email' placeholder='Email'>
        <select name="class">
            <option value="">Select teacher</option>
        </select>
        <select name="teacher">
            <option value="">Select class</option>
        </select>
        <button>Submit</button>
    </form>
 </div>
</body>
</html>