<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Varela Round', sans-serif;
        }

        .modal-confirm {
            color: #636363;
            width: 325px;
            margin: 30px auto;
        }

        .modal-confirm .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
        }

        .modal-confirm .modal-header {
            border-bottom: none;
            position: relative;
            background-color: #2e2e8a; /* Sign-up color */
        }

        .modal-confirm h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -15px;
            color: #fff; /* White text for the modal title */
        }

        .modal-confirm .form-control, .modal-confirm .btn {
            min-height: 40px;
            border-radius: 3px;
        }

        .modal-confirm .close {
            position: absolute;
            top: -5px;
            right: -5px;
        }

        .modal-confirm .modal-footer {
            border: none;
            text-align: center;
            font-size: 13px;
        }

        .modal-confirm .icon-box {
            color: #fff;
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -70px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background: #2e2e8a; /* Sign-up color */
            padding: 15px;
            text-align: center;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .modal-confirm .icon-box i {
            font-size: 58px;
            position: relative;
            top: 3px;
        }

        .modal-confirm.modal-dialog {
            margin-top: 80px;
        }

        .modal-confirm .btn {
            color: #fff;
            border-radius: 4px;
            background: #2e2e8a; /* Sign-up color */
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border: none;
        }

        .modal-confirm .btn:hover, .modal-confirm .btn:focus {
            background: #232367; /* Darker shade for hover effect */
            outline: none;
        }

        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
        }

        body {
            background-color: #f0f4fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 3rem 0;
        }

        .card {
            max-width: 500px;
            width: 100%;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-header {
            background-color: #2e2e8a; /* Sign-up color */
            color: #ffffff;
            padding: 1.5rem;
            text-align: center;
            font-weight: 600;
            font-size: 1.5rem;
        }

        .card-body {
            padding: 2rem;
            background-color: #ffffff;
        }

        .btn-primary {
            background-color: #2e2e8a;
            border-color: #2e2e8a;
            padding: 0.5rem 2rem;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #232367;
            border-color: #232367;
        }
    </style>
</head>

<body>

<?php
// Check session for success or error status
if (isset($_SESSION['form_status'])) {
    $status = $_SESSION['form_status'];
    unset($_SESSION['form_status']); // Reset session variable after using it
    $modalTitle = $status == 'success' ? 'Awesome!' : 'Oops!';
    $modalMessage = $status == 'success' ? 'Your booking has been confirmed. Check your email for details.' : 'Something went wrong. Please try again.';
    $modalIcon = $status == 'success' ? 'check' : 'error';
?>

<!-- Modal HTML -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons"><?php echo $modalIcon == 'check' ? '&#xE876;' : '&#xE5CD;'; ?></i>
                </div>
                <h4 class="modal-title"><?php echo $modalTitle; ?></h4>
            </div>
            <div class="modal-body">
                <p class="text-center"><?php echo $modalMessage; ?></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#myModal').modal('show');
    });
</script>

<?php } ?>

<div class="card">
    <div class="card-header">
        Sign Up
    </div>
    <div class="card-body">
        <form action="submit.php" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" name="firstname" class="form-control" id="firstname" required>
            </div>

            <div class="mb-3">
                <label for="middlename" class="form-label">Middle Name:</label> 
                <input type="text" name="middlename" class="form-control" id="middlename">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" name="lastname" class="form-control" id="lastname" required>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" name="age" class="form-control" id="age" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" name="address" class="form-control" id="address" required>
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Course & Section:</label>
                <input type="text" name="coursec" class="form-control" id="course" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
