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
            <a href="../overviewComponents/student.php"><li class='shadow-pop-tr'>Home</li></a>
            <a href="student.component.php"><li class='shadow-pop-tr'>Create Student</li></a>
            <a href="teacher.component.php"><li class='shadow-pop-tr'>Create Teacher</li></a>
            <a href="class.component.php"><li class='shadow-pop-tr'>Create Class</li></a>
        </nav>
    </header>
 <div class='container'>
     <h2 class='title'>Create Class</h2>
    <form class='form' action="">
        <input type="text" name='ClassName' placeholder='Class Name'>
        <input type="text" name='location' placeholder='Location'>
        <select name="class">
            <option value="">Teacher</option>
        </select>
        <select name="class">
            <option value="">Students</option>
        </select>
        <button>Submit</button>
    </form>
 </div>
</body>
</html>