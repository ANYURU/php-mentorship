<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> File Students Database </title>
</head>

<body>
    <!-- Show the form for adding student's details -->
    <h1>Add a new student</h1>
    <form action="save-student-to-file.php" method="post">
        <div>
            <input type="text" name="first_name" placeholder="First Name">
        </div>
        <div>
            <input type="text" name="last_name" placeholder="Last Name">
        </div>
        <div>
            <input type="submit" value="Save Student">
        </div> 
    </form>

    <!-- Show a table of students in the file database -->
    <h2>Students in the database</h2>
    <style>
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
    <?php 
        require_once("return-students.php");
        print_r($students)
    ?>
    <table>
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                foreach( $students as $student):
                    $student_chunk = explode(" ", $student);
            ?>
            <tr>
                <td><?= $student_chunk[0];?></td>
                <td><?= $student_chunk[1];?></td>
            </tr>
            <?php
                endforeach;  
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>First name</th>
                <th>Last name</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>