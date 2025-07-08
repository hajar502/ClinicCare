<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

            <div class="row justify-content-center position-relative" style="background-image:url('img/ph.webp'); background-size:cover; background-repeat: no-repeat;">
                <div class="col-lg-8">
                    <div class="bg-white rounded p-5 m-5 mb-0" style="border: 2px solid #13C5DD">
                        <h2>Are you a Pharmacy? Please enter your info to join us</h2><br>
                        <form action="send-application.php" method="POST">
                            <div class="row g-3">
                            <h4>Personal Info</h4>
                                <div class="col-12 col-sm-6">
                                    <lable>Pharmacy Name</label>
                                    <input type="text" name="name" class="form-control bg-light border-0" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Pharmacist Name</label>
                                    <input type="text" name="phname" class="form-control bg-light border-0" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Email Address</label>
                                    <input type="email" name="email" class="form-control bg-light border-0" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Phone Number</label>
                                    <input type="number" name="phone" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-3">
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
                                <div class="col-12 col-sm-3">
                                    <label>City</label>
                                    <input name="city" type="text" class="form-control bg-light border-0">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>street</label>
                                    <input name="street" type="text" class="form-control bg-light border-0">
                                </div>
                                <div class="col-12 col-sm-3">
                                    <label>Building</label>
                                    <input name="building" type="text" class="form-control bg-light border-0">
                                </div>
                                <div class="row g-3">
                                    <h4>Create Password</h4>
                                <div class="col-12 col-sm-6">
                                    <lable>Type Password</label>
                                    <input type="password" name="pass1" class="form-control bg-light border-0" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Re-type Password</label>
                                    <input type="password" name="pass2" class="form-control bg-light border-0" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Send Application</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
    <!-- Contact End -->


<?php include "footer.php"; ?>