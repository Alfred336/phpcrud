<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONINFORMATION</title>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=tel], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=email], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 40px;
        }
    </style>
</head>
<body>
    <div >
        <form id="myForm" action="create.php" method="post" onsubmit="return validateForm()">
           
                <label for="name">First Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
                    <span id="nameError" class="error"></span><br><br>
            
                <label for="phone">Phone Number</label>
                
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone number">
                    <span id="phoneError" class="error"></span><br><br>
        
                <label for="email" >Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    <span id="emailError" class="error"></span><br><br>

                    <input type="submit" value="Submit">
        </form>
    </div>

    <script>
        function validateForm() {
            var nameInput = document.getElementById('name');
            var phoneInput = document.getElementById('phone');
            var emailInput = document.getElementById('email');

            var nameError = document.getElementById('nameError');
            var phoneError = document.getElementById('phoneError');
            var emailError = document.getElementById('emailError');

            var isValid = true;

            // Name validation
            if (nameInput.value.trim() === '') {
                nameError.textContent = 'Name is required';
                isValid = false;
            } else {
                nameError.textContent = '';
            }

            // Phone number validation
            if (phoneInput.value.trim() === '') {
                phoneError.textContent = 'Phone number is required';
                isValid = false;
            } else {
                phoneError.textContent = '';
            }

            // Email validation
            if (emailInput.value.trim() === '') {
                emailError.textContent = 'Email is required';
                isValid = false;
            } else {
                emailError.textContent = '';
            }

            return isValid;
        }
    </script>
</body>
</html>
