<?php include('nav.php'); ?>

<style>

body{
    background-color: pink;
}

.contact-form{
    background: #fff;
    /* margin-top: 0%;
    margin-bottom: 0%; */
    width: 70%;
}

.contact-form .form-control{
    border-radius:1rem;
}

.contact-image{
    text-align: center;
}

.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}

.contact-form form{
    padding: 14%;
}

.contact-form form .row{
    margin-bottom: -7%;
}

.contact-form h3{
    margin-bottom: 6%;
    margin-top: -20%;
    text-align: center;
    color: #0062cc;
}

.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: rgb(201, 0, 154);
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin-left: 75%;
}

.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

</style>

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="contact.php">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" /><br>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" /><br>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" /><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Submit" class="btnContact" value="Submit" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>




<?php
     
     $server="localhost";
     $username="root";         
     $password="";
     $db="banking";
     
     $conn=mysqli_connect($server,$username,$password,$db);
     
     
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $message= $_POST['message'];

     $sql = "INSERT INTO `contact` ( `name`, `email`, `phone`, `message`) VALUES ( '$name', '$email', '$phone', '$message')";

     $rs = mysqli_query($conn, $sql);

if($rs)
{
   
	echo '<script>alert("Your message is sent successfully!!")</script>';
   
}

   
     mysqli_close($conn);

    
?>


<?php

 include('footer.php'); ?>