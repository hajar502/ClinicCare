<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

            <div class="row justify-content-center position-relative" style="background-image:url('img/initial.jpg'); background-size:cover; background-repeat: no-repeat;">
            <div class="col-lg-8">
                    <div class="bg-white rounded p-5 m-5 mb-0" style="border: 2px solid #13C5DD">
                        <h2>Create New Account</h2><br>
                        <form action="register.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <lable>First Name</label>
                                    <input type="text" name="fname" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Last Name</label>
                                    <input type="text" name="lname" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Gender</label>
                                    <select name="gender" class="form-control bg-light border-0" style="height: 35px;">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Birthdate</label>
                                    <input type="date" name="birthdate" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>State</label>
                                    <select name="state" class="form-control bg-light border-0" style="height: 35px;">
                                        <option value="Beirut">Beirut</option>
                                        <option value="South Lebanon">South Lebanon</option>
                                        <option value="North Lebanon">North Lebanon</option>
                                        <option value="Mount Lebanon">Mount Lebanon</option>
                                        <option value="Bekaa">Bekaa</option>
                                        <option value="Baalbek - Hermel">Baalbek - Hermel</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>City</label>
                                    <input type="text" name="city" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <lable>Street</label>
                                    <input type="text" name="street" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <lable>Building</label>
                                    <input type="text" name="building" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-4">
                                    <lable>House Number</label>
                                    <input type="number" name="houseNbr" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Email Address</label>
                                    <input type="email" name="email" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Phone Number</label>
                                    <input type="number" name="phone" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Type Password</label>
                                    <input type="password" name="pass1" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Re-type Password</label>
                                    <input type="password" name="pass2" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                                </div>
                                <p> Already have an account? <a href="signin.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
    <!-- Contact End -->


<?php include "footer.php"; ?>