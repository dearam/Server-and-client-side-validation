<html>
    <title>Mainpage</title>
    <link rel="stylesheet" href="index.css">
    <script src="jquery-3.6.2.js"></script>
    <body>
        <?php
            $first_name_check=false;
            $last_name_check=false;
            $email_check=false;
            $phone_check=false;
            $dob_check=true;
            $address_check=false;
            $image_check=false;

            $first_name_error="";
            $last_name_error="";
            $email_error="";
            $phone_error="";
            $dob_error="";
            $phone_error="";
            $address_error="";
            $image_error="";

            if($_FILES['image']['size'] < 30720) {
                $image_error="Upload file size more then 30KB";
                $image_check=false;
            }else{
                $image_error="";
                $image_check=true;
            }

            include "Servervalidation.php";


            if($image_check==true && $phone_check==true && $email_check==true && $dob_check==true && $first_name_check==true && $last_name_check==true && $address_check==true){
                echo "<h2 style='color:green'>success</h2>";
            }
        ?>

        <div class="title"><h2>Contact us Today!</h2></div>
        <div class="form-content">
            <form class="mainform" action=<?php echo $_SERVER["PHP_SELF"]?> method="post" enctype="multipart/form-data">

                <div class="input-content">
                    <h3 class="input-title" id="firstname">First Name</h3>
                    <label  class="input-box">
                        <input id="input-firstname" class="i-box" type="text" placeholder="First Name" name="fname"/>
                        <span id="emptyfirst" class="emptyfirst"><?php echo $first_name_error ?></span>
                    </label>
                </div>

                <div class="input-content">
                    <h3 class="input-title" id="lastname">Last Name</h3>
                    <label class="input-box">
                        <input id="input-lastname" class="i-box" type="text" placeholder="Last Name" name="lname"/>
                        <span id="emptylast" class="emptylast"><?php echo $last_name_error ?></span>
                    </label>
                </div>

                <div class="input-content">
                    <h3 class="input-title" id="email">E-mail</h3>
                    <label class="input-box">
                        <input id="input-email" class="i-box" type="text" placeholder="E-mail" name="email"/>
                        <span id="emptyemail" class="emptymail"><?php echo $email_error?></span>
                    </label>
                </div >

                <div class="input-content">
                    <h3 class="input-title" id="number">Phone #</h3>
                    <label class="input-box">
                        <input class="i-box" id="input-number" type="number" placeholder="enter mobile number" name="phone"/>
                        <span id="emptynumber" class="emptynumber"><?php echo $phone_error?></span>
                    </label>
                </div>

                <div class="input-content">
                    <h3 class="input-title" id="dateofbirth">DOB</h3>
                    <label class="input-box">
                        <input id="input-dateofbirth" class="i-box" type="date" name="dob"/>
                    </label>
                </div>


                <div class="input-content">
                    <h3 class="input-title" id="address">Address</h3>
                    <label class="input-box">
                        <textarea id="input-address" placeholder="Enter Address" name="address"></textarea>
                        <span id="emptynumber" class="emptynumber"><?php echo $address_error?></span>
                    </label>
                </div>

                <div class="input-content">
                    <h3 class="input-title" id="profile">Profile Image</h3>
                    <label>
                        <input id="input-profile" type="file" accept="image/jpg,image/jpeg,image/png" name="image"/>
                        <span id="emptynumber" class="emptynumber"><?php echo $image_error?></span>
                    </label>
                </div>

                <button type="submit" id="submit">Send</button>

            </form>
        </div>
    </body>
    <script src="index.js"></script>
</html>