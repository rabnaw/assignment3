<?php
    $pageTitle = "PHP and MySQL";
    require_once "includes/header.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Registration Form</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                   
                    <div class="form-group">
                        <label for="pnum">Phone num: </label>
                        <input type="int" name="pnum" id="pnum" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="padd">Present Address: </label>
                        <input type="text" name="padd" id="padd" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="prdd">Permanent Address: </label>
                        <input type="text" name="prdd" id="prdd" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cnic">CNIC: </label>
                        <input type="text" name="cnic" id="cnic" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth: </label>
                        <input type="date" name="dob" id="dob" class="form-control">
                    </div>

                    
                    <input type="submit" name="submit" value="Register" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
</body>
</html>