<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: 'Courier New', Courier, monospace;
            border-collapse: collapse;
            width: 100%;
        }
    
        #customers td,
        #customers th {
            border: 2px solid #333;
            padding: 10px;
        }
    
        #customers tr:nth-child(even) {
            background-color: #e6f7ff;
        }
    
        #customers tr:hover {
            background-color: #cce7ff;
        }
    
        #customers th {
            padding-top: 14px;
            padding-bottom: 14px;
            text-align: center;
            background-color: #0059b3;
            color: white;
        }
    
        #customers td {
            text-align: center;
        }
    </style>
    
</head>

<body>

    <h1 style="text-align: center">Table Of Users</h1>

    <table id="customers">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
  

    </table>

</body>

</html>
