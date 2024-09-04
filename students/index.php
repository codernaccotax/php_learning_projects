<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Student Registration Form</h2>
        <form action="register.php" method="POST" class="p-4 border rounded">
            <div class="form-row d-flex flex-wrap">
                <div class="form-group col-md-6">
                    <label for="student_name">Student Name</label>
                    <input type="text" class="form-control" id="student_name" name="student_name" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="qualification">Educational Qualification</label>
                    <select class="form-control" id="qualification" name="qualification" required>
                        <option value="">Select Qualification</option>
                        <!-- PHP code will populate this list -->
                        <?php
                        // Database connection
                        require 'db_connection.php';

                        try {
                            $stmt = $pdo->query('SELECT id, qualification_name FROM qualifications');
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<option value=\"{$row['id']}\">{$row['qualification_name']}</option>";
                            }
                        } catch (PDOException $e) {
                            echo 'Database error: ' . $e->getMessage();
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <?php
        require 'coder_table.php';
        require 'db_connection.php';
        try {
            $stmt = $pdo->query('select students.id
                , student_name as Name
                , dob as `Date of Birth`
                , address as Address
                , phone as Contact
                , email as Email
                , qualification_name as Qualification from students
                inner join qualifications 
                ON qualifications.id = students.qualification_id');
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // $tableGenerator = new TableGenerator();
            // echo $tableGenerator->generateTable($records);
                
            echo '<form action="record_delete.php" method="get">';
                echo '<table class="table table-striped">';
                    echo '<thead>';
                        echo '<tr>';
                            foreach($records[0] as $key=>$value){
                                echo '<th>'.htmlspecialchars($key).'</th>';
                            }
                            echo '<th>Delete</th>';
                        echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                        $id=0;
                        foreach($records as $record){
                            echo '<tr>';
                            foreach($record as $key=>$item){
                                if($key=="id"){
                                    $id=$item;
                                }
                                echo '<td>'.$item.'</td>';
                            }
                            ?>
                            <td>
                            <a href="record_delete.php?id=<?php echo $id; ?>">Delete me</a>
                            </td>
                            <?php
                            echo '</tr>';
                            
                        }
                        echo '</tbody>';
                      echo '</table>';
                echo '</form>';
            
            
            
        } catch (PDOException $e) {
            echo 'Database error: ' . $e->getMessage();
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>