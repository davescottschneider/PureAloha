<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);


        if ($name == "" OR $email == "" OR $phone == "") {
            echo "You must specify a value for name, email address, and message.";
            exit;
        }

        foreach( $_POST as $value ){
            if( stripos($value,'Content-Type:') !== FALSE ){
                echo "There was a problem with the information you entered.";    
                exit;
            }
        }

        if ($_POST["address"] != "") {
            echo "Your form submission has an error.";
            exit;
        }

        require_once("inc/phpmailer/class.phpmailer.php");
        $mail = new PHPMailer();

        if (!$mail->ValidateAddress($email)){
            echo "You must specify a valid email address.";
            exit;
        }

        $email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Email: " . $email . "<br>";
        $email_body = $email_body . "Phone Number: " . $phone;

        $mail->SetFrom($email, $name);
        $address = "umdave@gmail.com";
        $mail->AddAddress($address, "Pure Aloha");
        $mail->Subject    = "Pure Aloha Booking | " . $name;
        $mail->MsgHTML($email_body);

        if(!$mail->Send()) {
          echo "There was a problem sending the email: " . $mail->ErrorInfo;
          exit;
        }

        header("Location: booking.php?status=thanks");
        exit;
    }
?>
<?php
$pageClass="booking regpage";
$pageTitle="Pure Aloha! A Hawaiian Paradise | Booking | Whale Watching, Na Pali Coast Tours, Deep Sea Fishing Kuaia Tours";
$section="booking";
 include('inc/header.php'); ?>
     <div class="marquee">
        <h1>Book Your Kauai Excursion</h1>
     </div>
    <div class="clearfix container">
            <h2>Join Us</h2>
            <p>We can't wait for you to board our dinghy! Our trips fill up fast so make sure and book ahead of time. We require a 10% deposit on date of booking. To book your trip, simply fill out the form on the right and we will get back to you within 24 hours to arrange your Kauai excursion! If you'd rather just give us a call, our number is (xxx) xxx-xxxx.</p>
        <div class="well">
            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
            <?php } else { ?>

                <p>Give us your deets and we'll contact you to set up your Pure Aloha Kauai excursion.</p>

                <form class="form-horizontal" method="post" action="booking.php">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name here">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email here">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number here">
                        </div>
                    </div>
                    <p>Let us know when you're going to be in Kauai</p>
                        <div class="form-group">
                            <label for="date1" class="control-label col-md-2">Arrival</label>
                                <div class="col-sm-3">
                                    <div class="input-group date" id="dpd1" data-date="<?php echo date('m-d-Y')?>" data-date-format="mm-dd-yyyy">
                                        <input class="form-control" type="text" name="date1">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                            <label for="date2" class="control-label col-md-2">Departure</label>
                                <div class="col-sm-3">
                                    <div class="input-group date" id="dpd2" data-date="<?php echo date('m-d-Y')?>" data-date-format="mm-dd-yyyy">
                                        <input class="form-control" type="text" name="date2">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                        </div>
                    <p>Which tours are you interested in?</p>
                    <div class="checkbox col-md-2">
                      <label>
                        <input type="checkbox" value="">
                        Snorkeling
                      </label>
                    </div>
                    <div class="checkbox col-md-3">
                      <label>
                        <input type="checkbox" value="">
                        Whale Watching
                      </label>
                    </div>
                    <div class="checkbox col-md-2">
                      <label>
                        <input type="checkbox" value="">
                        Fishing
                      </label>
                    </div>
                    <div class="checkbox col-md-2">
                      <label>
                        <input type="checkbox" value="">
                        Na Pali Coast
                      </label>
                    </div>
                    <div class="checkbox col-md-2">
                      <label>
                        <input type="checkbox" value="">
                        Sunset Cruise
                      </label>
                    </div>


                    <div style="display: none;">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address">
                        <p>Humans (and sea turtles): please leave this field blank.</p>
                    </div>
                    <div class="col-md-12">       
                        <input type="submit" class="btn" value="Send">
                    </div>

                </form>

            <?php } ?>

        </div>

    </div>

<?php include('inc/footer.php') ?>