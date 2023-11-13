<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Action Choice</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <form method="post" action="javascript:void(0);" onsubmit="submitForm()">
            <div class="form-group">
                <label for="id">Enter ID:</label>
                <input type="text" class="form-control" name="id" id="id" required>
            </div>

            <!-- Include the Anti-CSRF token field -->
            <input type="hidden" name="user_token" value="<?php echo $_SESSION['session_token']; ?>">

            <!-- Choose the action -->
            <div class="form-group">
                <label for="action">Choose Action:</label>
                <select class="form-control" name="action" id="action">
                    <option value="anti.php">Anti.php</option>
                    <option value="vuln.php">Vuln.php</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        function submitForm() {
            var action = document.getElementById('action').value;
            document.forms[0].action = action;
            document.forms[0].submit();
        }
    </script>
</body>

</html>
