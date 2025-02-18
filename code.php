<?php
    if(isset($_POST['submit'])){
        $organization = $_POST['organization'];
        $name = $_POST['name'];
        $policy_no = $_POST['policy_no'];
        $alternate_policy_no = $_POST['alternate_policy_no'];
        $phone_no = $_POST['phone_no'];
        $plan_type = $_POST['plan_type'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $no_of_dependant = $_POST['no_of_dependant'];
        $provider = $_POST['provider'];
        // echo "Organization: $organization <br>";
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        
        $reg_status = $_POST['reg_status'];
        echo "$name <br>";

        if(isset($_FILES['submit'])){
            // $file = $_FILES['passport'];
            $file_name = $_FILES['passport']['name'];
            $file_tmp_name = $_FILES['passport']['tmp_name'];
           


           

        }

    };
    ?>