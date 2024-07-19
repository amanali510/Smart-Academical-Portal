<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Academical Portal</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #78e08f;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: "Muli", sans-serif;
        }
        .container {
            background-color: white;
            padding: 5em;
            border-radius: 0.5em;
            box-sizing: border-box;
            text-align: center;
        }
        pre {
            text-align: left;
            white-space: pre-wrap; /* Maintains white space */
            word-wrap: break-word; /* Breaks long words */
        }
    </style>
</head>
<body>


  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>


    <div class="container">
        <h1>Student Parent Want to Meeting</h1>
        <pre id="received-details">No details received.</pre>
    </div>


    <script>
        window.onload = function() {
            const details = localStorage.getItem("details"); // Retrieve the message, date, and time from localStorage
            if (details) {
                document.getElementById("received-details").textContent = details; // Display the details
            }
        }
    </script>
</body>
</html>
