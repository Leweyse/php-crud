<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/style.css">
    <title>Student</title>
</head>
<body>
 <div class='container'>
     <h2 class='title'>create student</h2>
    <form class='form' method="post">
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