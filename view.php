<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type=text] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student List</h2>
        <table id="student-table">
            <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo htmlspecialchars($student->getRollNumber()); ?></td>
                    <td><?php echo htmlspecialchars($student->getName()); ?></td>
                    <td><?php echo htmlspecialchars($student->getEmail()); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <form id="add-student-form">
            <label for="name">Name :</label>
            <input type="text" id="name" name="name" required>
            <label for="roll_number">Roll Number :</label>
            <input type="text" id="roll_number" name="roll_number" required>
            <label for="roll_number">Email :</label>
            <input type="text" id="email" name="email" required>
            <button type="button" onclick="addStudent()">Add Student</button>
        </form>
    </div>

    <script>
        function addStudent() {
            var name = document.getElementById("name").value;
            var roll_number = document.getElementById("roll_number").value;
            var email = document.getElementById("email").value;

            // Create a new row in the table
            var table = document.getElementById("student-table");
            var newRow = table.insertRow();

            // Insert cells for roll number and name
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            cell1.innerHTML = roll_number;
            cell2.innerHTML = name;
            cell3.innerHTML = email;

            // Clear input fields
            document.getElementById("name").value = "";
            document.getElementById("roll_number").value = "";
            document.getElementById("email").value = "";
        }
    </script>
</body>
</html>
