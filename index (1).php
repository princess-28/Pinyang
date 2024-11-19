<?php 
include 'conn.php'; 
session_start(); // Start the session to access session variables
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f4fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 3rem 0; /* Increased padding for top and bottom */
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
            background-color: #2e2e8a;
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

    <!-- Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Submission Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Show the modal if there's a message in the session
        <?php if (isset($_SESSION['message'])): ?>
            var myModal = new bootstrap.Modal(document.getElementById('messageModal'));
            myModal.show();
        <?php endif; ?>
    </script>
</body>
</html>
