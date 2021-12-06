<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">    
    <title>Classes</title>
</head>
<body>
<header>
        <nav class='nav'>
            <a href="student.php"><li class='shadow-pop-tr'>Students</li></a>
            <a href="teacher.php"><li class='shadow-pop-tr'>Teachers</li></a>
            <a href="class.php"><li class='shadow-pop-tr'>Classes</li></a>
        </nav>
    </header>

<div class='container'>
<h2 class='title'>Classes</h2>
<section>
<div class="tbl-header">
    <table >
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Class</th>
          <th>Teacher</th>
          <th>Actions</th>
        </tr>
      </thead>
</div>
      <tbody class='tbl-content'>
        <tr>
          <td>1</td>
          <td>Bob de Bouwer</td>
          <td>bobdebouwer@gmail.com</td>
          <td>1A</td>
          <td>Jef</td>
          <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>
        </tr>
      </tbody>
    </table>
</section>
    
 </div>
</body>
</html>