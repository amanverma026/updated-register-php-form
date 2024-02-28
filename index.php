<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="main-cont">
        <div class="navbar d-flex">
            <div class="outer-logo">
                <img class="img-logo"
                    src="https://media.designrush.com/inspiration_images/135187/conversions/_1511452487_364_Airbnb-mobile.jpg"
                    alt="Logo" />
            </div>

            <div class="navbar-services">
                <a href="" class="service">Home</a>
                <a href="" class="service">About</a>
                <a href="" class="service">Products</a>
                <a href="" class="service">Service</a>
                <a href="" class="service">Contacts</a>
            </div>
        </div>
        <div class="main-form">
            <h2 class="heading">Sign Up</h2>
            <form action="process.php" method="POST">
                <input type="text" id="name" name="name" class="input-f" placeholder="Full Name" required>
                <input type="email" id="email" name="email" class="input-f" placeholder="Email" required>
                <input type="password" id="password" name="password" class="input-f" placeholder="Password" required>
                <input type="number" id="phoneNo" name="phoneNo" class="input-f" placeholder="Phone no" required>
                <div class="gender-radio">
                    <input type="radio" id="male" name="gender" value="Male" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female" required>
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="Other" required>
                    <label for="other">Other</label>
                </div>
                <div class='btn-outer'>
                <button class="btn" type="submit" title="Sign Up" value="submit">Sign Up</button>
                </div>
                
            </form>
        </div>

    </div>
</body>

</html>