<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="../images/cusrrs.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entity NGRBC Policy Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="sec_C/sec_C.css">
    <style>
        .hidden {
            display: none;
        }

        @media screen and (max-width: 800px) {
            #cinDiv {
                display: none;
            }
        }
    </style>
</head>

<?php
    session_start();
    if (isset($_SESSION['cin']))
        $cin = $_SESSION['cin'];
?>

<body>
    <div class="container">
        <h1>THANK YOU!</h1>
        <div class="policy">
            <h3>Your <?php if (isset($_SESSION['cin'])) echo("(CIN: $cin)"); else echo("")?> response for forms A, B and C have been successfully recorded.</h3>
        </div>
    </div>
</body>
</html>