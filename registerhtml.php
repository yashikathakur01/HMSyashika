<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">HOTEL MANAGEMENT SYSTEM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li> -->
        </ul>
        </div>
    </div>
    </nav>
<div class="row">
    <div class="col-2">

        </div>
        <div class="col-4">
        <br><br>
        <h5>REGISTRATION FORM</h5>
        <hr>
        <form action="register.php" method="POST">
        <div class="group">
            <label for="name">Full Name:</label>
            <input type="text" name="name" onkeyup="textonly(this)" required class="form-control">
        </div><br>
        <div class="group">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" required class="form-control">
        </div><br>
        <div class="group">
            <label for="phone">Phone Number:</label>
            <input type="text"  name="phone" onkeyup="numberonly(this)" required class="form-control">
        </div><br>
        <div class="group">
            <label for="email">EMAIL :</label>
            <input type="text" name="email" required class="form-control">
        </div><br>
        <div class="group">
        <label for="aadhaar">Aadhaar Number:</label>
        <input type="text" id="aadhaar1" name="aadhaar" required class="form-control"  onkeyup="validateForm1(event)" >
        <label for="mess" id="message1"></label>
        </div>
        </div>
        <div class="col-4"> <br><br><br><hr>
        <div class="group">
        <label for="password">Password:</label>
        <input type="password"id="pass" name="password" required class="form-control">
        </div><br>
        <div class="group">
        <label for="cpassword">Confirm Password:</label>
        <input type="password" id="cpass" name="cpassword" required class="form-control" onkeyup="validateForm2(this)">
        </div><br>
        <label for="ptr" id="mess1"></label>
        <div class="group">
            <input type="submit" value="Register" name="submit" class="btn btn-success">
            <br><br>
                    Already have account ?   <a href="userhtml.php"> Sign in</a>
                
        </div>
        </form>
        </div>

    <div class="col-2">

    </div>
    
</div>
    
<br><br> 
<script>
    function textonly(input){
    var let=/[^A-Z][^a-z]/gi;
    input.value = input.value.replace(let," ").slice(0, 30).replace(/^(.)/, function(_, firstChar) {
    return firstChar.toUpperCase();
    });
    }

    function numberonly(input){
    var num =/[^0-9]/gi;
    input.value = input.value.replace(num,"").slice(0, 10);
    }
    
    function validateAadhaar(input) {
    var re = /^(\d{4})[- ]?(\d{4})[- ]?(\d{4})$/

    return re.test(input)
    }
    

function validateForm1(event) {
    var aadhaar = document.getElementById('aadhaar1').value;
    if (!validateAadhaar(aadhaar)) {
        // alert('Please enter a valid number')
        const ele = document.getElementById('message1');
        ele.innerHTML = 'Please Enter Valid aadhaar Number ';
        ele.style.color = 'red';
    }
    else {
        const ele = document.getElementById('message1');
        ele.innerHTML = 'Ok';
        ele.style.color = 'green';
    }
    event.preventDefault();
}

function validateForm2(event) {
            var p = document.getElementById('pass').value;
            var p1 = document.getElementById('cpass').value;
                if (p!=p1){
                
                const ele = document.getElementById('mess1');
                ele.innerHTML = 'Entered password not matched ';
                ele.style.color = 'red';
            } 
            else {
                const ele = document.getElementById('mess1');
                ele.innerHTML = 'Password Matched';
                ele.style.color = 'green';
            }
            event.preventDefault();
}



</script>       