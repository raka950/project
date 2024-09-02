<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f4f4f4;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .back-button {
            position: absolute;
            right: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        .container {
            display: flex;
            flex: 1;
        }
        .sidebar {
            width: 200px;
            background-color: #e9e9e9;
            padding: 10px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 10px;
            padding: 5px 10px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .sidebar ul li:hover {
            background-color: #dcdcdc;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .main-content h2 {
            margin-top: 0;
            font-size: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .year:hover {
            
            background-color: #f1f1f1;
            font-size: 80%;
            cursor: pointer;
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        .button-container button, .back-button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button-container button:hover, .back-button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function goBack() {
            window.location.href = 'filemanagement.php';
        }
        function addRow() {
            var table = document.querySelector('table');
            var newRow = table.insertRow();
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            cell1.textContent = table.rows.length - 1;
            cell2.innerHTML = '<input type="text" placeholder="Enter Year">';
        }
        function saveTable() {
            // Implement save functionality here (e.g., send table data to the server)
            alert('Table data saved!');
        }
    </script>
</head>
<body>
    <div class="header">
        <h1>FILE MANAGEMENT SYSTEM</h1>
        <button class="back-button" onclick="goBack()">Back</button>
    </div>
    <div class="container">
        <div class="sidebar">
            <h3>Railway Board</h3>
            <ul>
                <li>Accounts</li>
                <li>Personnel</li>
                <li>S&T</li>
                <li>RPF</li>
                <li>COMMERCIAL</li>
                <li>OPERATING</li>
                <li>MECHANICAL</li>
            </ul>
        </div>
        <div class="main-content">
            <h2>Railway Board &gt; Policy</h2>
            <table>
                <tr>
                    <th>SL NO.</th>
                    <th>Year</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="year">2021</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="year">2022</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="year">2023</td>
                </tr>
                <tr onclick="window.location.href='document.php'">
                    <td>4</td>
                    <td class="year">2024</td>
                </tr>
            </table>
            <div class="button-container">
                <button onclick="addRow()">ADD ROW</button>
                <button onclick="saveTable()">SAVE</button>
            </div>
        </div>
    </div>
</body>
</html>
