<?php

/* ---------- Start of Validation ---------- */

$nameError = '';
$emailError = '';
$genderError = '';
$websiteError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        // Name
        if (empty($_POST["name"])) {
            $nameError = "Name is required";
        } else {
            $name = getUserInput($_POST["name"]);
        }

        // Email
        if (empty($_POST["email"])) {
            $emailError = "Email is required";
        } else {
            $email = getUserInput($_POST["email"]);
        }

        // Gender
        if (empty($_POST["gender"])) {
            $genderError = "Gender is required";
        } else {
            $gender = getUserInput($_POST["gender"]);
        }

        // Website
        if (empty($_POST["website"])) {
            $websiteError = "Website is required";
        } else {
            $website = getUserInput($_POST["website"]);
        }
    }
}

function getUserInput($data)
{
    return $data;
}

/* ---------- End of Validation ---------- */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation Project</title>

    <!-- ---------- Start of Styles ---------- -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- ---------- End of Styles ---------- -->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1 style="font-size: 22px; margin-bottom: 0px;">Form Validation with PHP</h1>
                        <p class="mb-0 mt-2">* Please Fill Out the following fields.</p>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <div class="mb-3">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control">
                                <?php
                                if (isset($nameError)) {
                                    if (!empty($nameError)) {
                                        echo "<small class='text-danger'>*$nameError</small>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="mb-3">
                                <label for="email">E-mail:</label>
                                <input type="text" id="email" name="email" class="form-control">
                                <?php
                                if (isset($emailError)) {
                                    if (!empty($emailError)) {
                                        echo "<small class='text-danger'>*$emailError</small>";
                                    }
                                }
                                ?>
                            </div>
                            <fieldset class="mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male">
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                    <?php
                                    if (isset($genderError)) {
                                        if (!empty($genderError)) {
                                            echo "<small class='text-danger'>*$genderError</small>";
                                        }
                                    }
                                    ?>
                                </div>
                            </fieldset>
                            <div class="mb-3">
                                <label for="website">Website:</label>
                                <input type="text" id="website" name="website" class="form-control">
                                <?php
                                if (isset($websiteError)) {
                                    if (!empty($websiteError)) {
                                        echo "<small class='text-danger'>*$websiteError</small>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="mb-3">
                                <label for="comment">Comment:</label>
                                <textarea name="comment" id="comment" rows="5" class="form-control"></textarea>
                            </div>
                            <div>
                                <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------- Start of Scripts ---------- -->
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- ---------- End of Scripts ---------- -->

</body>

</html>
