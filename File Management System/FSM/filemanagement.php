<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management System</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            text-align: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            background-color: #f9f9f9;
            position: relative;
        }
        .logout-button, .back-button {
            position: absolute;
            padding: 5px 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-button:hover, .back-button:hover {
            background-color: #0056b3;
        }
        .logout-button {
            top: 10px;
            right: 20px;
        }
        .back-button {
            top: 50px;
            right: 20px;
        }
        .main-container {
            display: flex;
            border: 1px solid #ccc;
            margin: 20px auto;
            width: 80%;
            background-color: white;
        }
        .sidebar {
            width: 200px;
            border-right: 1px solid #ccc;
            padding: 10px;
            background-color: #f9f9f9;
        }
        .content {
            flex: 1;
            padding: 10px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }
        .sidebar ul li:first-child {
            font-weight: bold;
            background-color: #e0e0e0;
        }
        .table-container {
            margin-top: 20px;
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
        .subcategory:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
        .hidden {
            display: none;
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        .button-container button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button-container button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function showContent(contentId) {
            var contents = document.querySelectorAll('.content-item');
            contents.forEach(function(content) {
                content.classList.add('hidden');
            });
            document.getElementById(contentId).classList.remove('hidden');
        }
        function logout() {
            window.location.href = 'logout.php';
        }
        function goBack() {
            window.location.href = 'login.php';
        }
        function addRow() {
            var table = document.querySelector('#content-railway-board table');
            var newRow = table.insertRow();
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            cell1.textContent = table.rows.length - 1;
            cell2.textContent = 'New Category';
            cell2.classList.add('subcategory');
        }
        function saveTable() {
            // Implement save functionality here (e.g., send table data to the server)
            alert('Table data saved!');
        }
        document.addEventListener("DOMContentLoaded", function() {
            var subcategoryCells = document.querySelectorAll('.subcategory');
            subcategoryCells.forEach(function(cell) {
                cell.addEventListener('click', function() {
                    var contentId = this.getAttribute('data-content-id');
                    if (contentId) {
                        showContent(contentId);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="header">
        <h1>FILE MANAGEMENT SYSTEM</h1>
        <button class="logout-button" onclick="logout()">Logout</button>
        <button class="back-button" onclick="goBack()">Back</button>
    </div>
    
    <div class="main-container">
        <div class="sidebar">
            <ul>
                <li onclick="showContent('content-railway-board')">Railway Board</li>
                <li onclick="showContent('content-accounts')">Accounts</li>
                <li onclick="showContent('content-personnel')">Personnel</li>
                <li onclick="showContent('content-snt')">S&T</li>
                <li onclick="showContent('content-rpf')">RPF</li>
                <li onclick="showContent('content-commercial')">Commercial</li>
                <li onclick="showContent('content-operating')">Operating</li>
                <li onclick="showContent('content-mechanical')">Mechanical</li>
            </ul>
        </div>
        <div class="content">
            <div id="content-railway-board" class="content-item">
                <div class="table-container">
                    <h2>Railway Board</h2>
                    <table>
                        <tr>
                            <th>SL NO.</th>
                            <th>Sub Category</th>
                        </tr>
                        <tr onclick="window.location.href='year.php'">
                            <td>1</td>
                            <td class="subcategory" data-content-id="content-year">Policy</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="subcategory" data-content-id="content-recruitment">Recruitment</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="subcategory" data-content-id="content-sub-category-1">Sub Category 1</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="subcategory" data-content-id="content-sub-category-2">Sub Category 2</td>
                        </tr>
                    </table>
                    <div class="button-container">
                        <button onclick="addRow()">ADD ROW</button>
                        <button onclick="saveTable()">SAVE</button>
                    </div>
                </div>
            </div>
            <div id="content-accounts" class="content-item hidden">
                <h2>Accounts</h2>
                <p>Accounts related content goes here.</p>
            </div>
            <div id="content-personnel" class="content-item hidden">
                <h2>Personnel</h2>
                <p>Personnel related content goes here.</p>
            </div>
            <div id="content-snt" class="content-item hidden">
                <h2>S&T</h2>
                <p>S&T related content goes here.</p>
            </div>
            <div id="content-rpf" class="content-item hidden">
                <h2>RPF</h2>
                <p>RPF related content goes here.</p>
            </div>
            <div id="content-commercial" class="content-item hidden">
                <h2>Commercial</h2>
                <p>Commercial related content goes here.</p>
            </div>
            <div id="content-operating" class="content-item hidden">
                <h2>Operating</h2>
                <p>Operating related content goes here.</p>
            </div>
            <div id="content-mechanical" class="content-item hidden">
                <h2>Mechanical</h2>
                <p>Mechanical related content goes here.</p>
            </div>
            <div id="content-year" class="content-item hidden">
                <h2>Year</h2>
                <p>Year related content goes here.</p>
            </div>
            <div id="content-recruitment" class="content-item hidden">
                <h2>Recruitment</h2>
                <p>Recruitment related content goes here.</p>
            </div>
            <div id="content-sub-category-1" class="content-item hidden">
                <h2>Sub Category 1</h2>
                <p>Sub Category 1 related content goes here.</p>
            </div>
            <div id="content-sub-category-2" class="content-item hidden">
                <h2>Sub Category 2</h2>
                <p>Sub Category 2 related content goes here.</p>
            </div>
        </div>
    </div>
</body>
</html>
