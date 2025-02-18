<?php

    
  ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Enrolment Form </title>
    <style>

    </style>
  </head>
  <body>
    
    <div class="container">
        
      <form action="code.php" method="POST">
        <h3>Enrolment Form</h3>
        <div id="display"></div>
        <table>
          <tr><td>
              <div class="form-input">
                <label for="Organization" class="form-label"
                  >Organization</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="organization"
                  name="organization"
                  placeholder="Enter your Organization"
                />
              </div>
            </td>
            <td>
              <div class="form-input">
                <label for="name" class="form-label"
                  >Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  placeholder="Enter your Name"
                /> 
              </div></td></tr>
              <tr><td>
                <div class="form-input">
                  <label for="policy_no" class="form-label"
                    >Policy No</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="policy_no"
                    name="policy_no"
                    placeholder="Enter your Policy No"
                  />
                </div>
              </td>
              <td>
                <div class="form-input">
                  <label for="alternate_policy_no" class="form-label"
                    >Alternate No</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="alternate_policy_no"
                    name="alternate_policy_no"
                    placeholder="Enter Alternate_policy_no"
                  /> 
                </div></td></tr>
                <tr><td>
                    <div class="form-input">
                      <label for="phone" class="form-label"
                        >Phone No</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="phone_no"
                        name="phone_no"
                        placeholder="Enter your Phone No."
                      />
                    </div>
                  </td>
                  <td>
                    <div class="form-input">
                      <label for="plan_type" class="form-label"
                        >Plan Type</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="plan_type"
                        name="plan_type"
                        placeholder="Enter Plan Type e.g GOLD"
                      /> 
                    </div></td></tr>
                    <tr><td>
                        <div class="form-input">
                          <label for="email" class="form-label"
                            >Email Address</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Enter your Email Address"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="form-input">
                          <label for="location" class="form-label"
                            >Location</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="location"
                            name="location"
                            placeholder="Enter your Location"
                          /> 
                        </div></td></tr>
                        <tr><td>
                            <div class="form-input">
                              <label for="no_of_dependant" class="form-label"
                                >No of Dependant</label
                              >
                              <input
                                type="number"
                                class="form-control"
                                id="no_of_dependant"
                                name="no_of_dependant"
                                placeholder="Enter No. of Dependant"
                              />
                            </div>
                          </td>
                          <td>
                            <div class="form-input">
                              <label for="provider" class="form-label"
                                >Provider</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="provider"
                                name="provider"
                                placeholder="Enter your Provider"
                              /> 
                            </div></td></tr>
                            <tr><td>
                                <div class="form-input">
                                  <label for="gender" class="form-label"
                                    >Gender</label>
                                    <select>
                                        <option selected>--select Gender--</option>
                                        <option >Male</option>
                                        <option >Female</option>
                                    </select>
                                </div>
                              </td>
                              <td>
                                <div class="form-input">
                                  <label for="dob" class="form-label"
                                    >Date of Birth</label
                                  >
                                  <input
                                    type="date"
                                    class="form-control"
                                    id="dob"
                                    name="dob"
                                    
                                  /> 
                                </div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-input">
                                          <label for="dob" class="form-label"
                                            >Passport Photograph</label
                                          >
                                          <input
                                            type="file"
                                            class="form-control"
                                            id="passport"
                                            name="passport_photo"
                                            
                                          /> 
                                        </div></td>
                                        <td>
                                            <div class="form-input">
                                              <label for="reg_status" class="form-label"
                                                >Registration Status</label>
                                                <select>
                                                    <option selected>--select Gender--</option>
                                                    <option >Active</option>
                                                    <option >Inactive</option>
                                                </select>
                                            </div>
                                          </td>
                                </tr>
                            
           </div></table>

           <input type="submit" name="submit" value="Submit" class="btn btn-primary">
          
       
      </form>
    </div>
    <script src="assets/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
    <script>
      $(document).ready(function(){
        $("form").submit(function(e){
          e.preventDefault();
          var organization = $("#organization").val();
          var name = $("#name").val();
          var policy_no = $("#policy_no").val();
          var alternate_policy_no = $("#alternate_policy_no").val();
          var phone_no = $("#phone_no").val();
          var plan_type = $("#plan_type").val();
          var email = $("#email").val();
          var location = $("#location").val();
          var no_of_dependant = $("#no_of_dependant").val();
          var provider = $("#provider").val();
          var gender = $("#gender").val();
          var dob = $("#dob").val();
          var passport = $("#passport").val();
          var reg_status = $("#reg_status").val();
          $.ajax({
            url: "form3.php",
            type: "POST",
            data: {
              organization: organization,
              name: name,
              policy_no: policy_no,
              alternate_policy_no: alternate_policy_no,
              phone_no: phone_no,
              plan_type: plan_type,
              email: email,
              location: location,
              no_of_dependant: no_of_dependant,
              provider: provider,
              gender: gender,
              dob: dob,
              passport: passport,
              reg_status: reg_status,
            },
            success: function(data){
              $("#display").html(data);
            }
          })
        })})
    </script>
   
  </body>
</html>
