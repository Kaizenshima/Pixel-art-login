<!DOCTYPE html>
<html>
<head>
    <title>Test Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="login-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Register Here</h2>
                <form action="reg_conn.php" method="post">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" name="middlename" class="form-control" placeholder="Middle Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input type="text" class="form-control datepicker" name="birthday" placeholder="yyyy-mm-dd" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        <div id="message">
                            <h3>Password must contain the following:</h3>
                            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                            <p id="number" class="invalid">A <b>number</b></p>
                            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                            <p id="date" class="valid">Birthday Match <b></b></p>
                        </div>
                    </div>
                    
                   <a href="login.php">Already have account?</a> <br><br>
                <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        var myInput = document.getElementById("password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");
        var date = document.getElementById("birthday");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }

        // check if password matches birthday
        // Check if the password contains the birthday
        if (myInput.indexOf(date) !== -1) {
            // Return an error message if the password contains the birthday
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            // Return a success message if the password doesn't contain the birthday
            length.classList.remove("valid");
            length.classList.add("invalid");
        }

        }
        
        
    

    </script>
</body>
</html>
