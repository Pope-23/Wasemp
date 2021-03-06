<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <h1 class="text-center" style="color: var(--bs-light);background: var(--bs-dark);">WASEMP</h1>
    <div class="container profile profile-view" id="profile">
        <form method = "post">
          <!-- personal information start -->
            <div class="row profile-row">
                <div class="col-md-8" style="padding-right: 16px;padding-left: 0px;margin-right: 0px;margin-left: 234px;">
                    <h1>Personal Information</h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                          <!-- left side sa personal information -->
                            <div class="form-group mb-3"><label class="form-label">First Name </label><input class="form-control" type="text" name="fname"></div>
                            <div class="form-group mb-3"><label class="form-label">Last Name</label><input class="form-control" type="text" name="lname"></div>
                            <div class="form-group mb-3"><label class="form-label">Current Address</label><input class="form-control" type="text" name="caddress"></div>
                            
                            <!--Container for Sex form-->
                            <div class="row text-start" style="margin-left: -34px;margin-right: 166px;">
                                <div class="col-md-8 offset-md-1">
                                  <label class="col-form-label">Sex</label></div>
                                  <!-- gender -->
                                <div class="col-md-10 offset-md-1"><select class="form-select" style="font-family:Roboto, sans-serif;" name="gender">
                                       
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        
                                    </select></div>
                            </div>


                        </div>
                        <!-- left side ng personal information -->
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Middle Name</label><input class="form-control" type="text" name="mname"></div>
                            <div class="form-group mb-3"><label class="form-label">Age</label><input class="form-control" type="text" name="age"></div>
                            <div class="form-group mb-3"><label class="form-label">Permanent Address</label><input class="form-control" type="text" name="paddress"></div>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- contact number Start -->
                <div class="col-md-8" style="padding-right: 16px;padding-left: 0px;margin-right: 0px;margin-left: 234px;">
                    <h1>Contact Number</h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Contact Number</label><input class="form-control" type="text" name="cnum"></div>
                            <div class="form-group mb-3"><label class="form-label">Email Address</label><input class="form-control" type="text" name="eaddress"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <div class="form-group mb-3" style="margin-top: -10px;"><div class="row text-start" style="margin-left: -34px;margin-right: 166px;">
  <div class="col-md-8 offset-md-1"><label class="col-form-label">Barangay</label></div>
  <div class="col-md-10 offset-md-1"><select class="form-select" style="font-family:Roboto, sans-serif;" name="brgy">
              <option value ="12">12</option>
              <option value= "14">14</option>
              <option value = "Longos">Longos</option>
              <option value= "others">Others</option>
      </select></div>
</div></div>
                      </div>
                  </div>
                  <hr>
              </div>
                <!-- Health Declaration start -->
                <div class="col-md-8" style="padding-right: 16px;padding-left: 0px;margin-right: 0px;margin-left: 234px;">
                    <h1>Health Declaration</h1>
                    <hr>  <li class="form-line" data-type="control_matrix" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> In the past 14 days, I have experienced... </label>
        <div id="cid_10" class="form-input-wide">
          <table summary="" aria-labelledby="label_10" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
            <tr class="form-matrix-tr form-matrix-header-tr">
              <th class="form-matrix-th" style="border:none">
                <!-- ??radio -->
              </th>
              <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0">
                <label id="label_10_col_0"> Yes </label>
              </th>
              <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1">
                <label id="label_10_col_1"> No </label>
              </th>
            </tr>
            <!-- mga tanung -->
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_0">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_0"> Lagnat/Fever </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_0_0" class="form-radio" name="lagnat" value="Yes" aria-labelledby="label_10_col_0 label_10_row_0" />
                <label for="input_10_0_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_0_1" class="form-radio" name="lagnat" value="No" aria-labelledby="label_10_col_1 label_10_row_0" />
                <label for="input_10_0_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_1">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_1"> Unexplained body aches or pain </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_1_0" class="form-radio" name="bpain" value="Yes" aria-labelledby="label_10_col_0 label_10_row_1" />
                <label for="input_10_1_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_1_1" class="form-radio" name="bpain" value="No" aria-labelledby="label_10_col_1 label_10_row_1" />
                <label for="input_10_1_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_2">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_2"> Coughing </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_2_0" class="form-radio" name="cough" value="Yes" aria-labelledby="label_10_col_0 label_10_row_2" />
                <label for="input_10_2_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_2_1" class="form-radio" name="cough" value="No" aria-labelledby="label_10_col_1 label_10_row_2" />
                <label for="input_10_2_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_3">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_3"> Sore throat </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_3_0" class="form-radio" name="sthroat" value="Yes" aria-labelledby="label_10_col_0 label_10_row_3" />
                <label for="input_10_3_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_3_1" class="form-radio" name="sthroat" value="No" aria-labelledby="label_10_col_1 label_10_row_3" />
                <label for="input_10_3_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_4">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_4"> Shortness of breath </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_4_0" class="form-radio" name="breath" value="Yes" aria-labelledby="label_10_col_0 label_10_row_4" />
                <label for="input_10_4_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_4_1" class="form-radio" name="breath" value="No" aria-labelledby="label_10_col_1 label_10_row_4" />
                <label for="input_10_4_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_5">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_5"> Chills with or without body aches </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_5_0" class="form-radio" name="chills" value="Yes" aria-labelledby="label_10_col_0 label_10_row_5" />
                <label for="input_10_5_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_5_1" class="form-radio" name="chills" value="No" aria-labelledby="label_10_col_1 label_10_row_5" />
                <label for="input_10_5_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_6">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_6"> Recent loss of sense of smell or taste </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_6_0" class="form-radio" name="smell" value="Yes" aria-labelledby="label_10_col_0 label_10_row_6" />
                <label for="input_10_6_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_6_1" class="form-radio" name="smell" value="No" aria-labelledby="label_10_col_1 label_10_row_6" />
                <label for="input_10_6_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_7">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_7"> Unexplained sores on soles of feet </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_7_0" class="form-radio" name="sores" value="Yes" aria-labelledby="label_10_col_0 label_10_row_7" />
                <label for="input_10_7_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_7_1" class="form-radio" name="sores" value="No" aria-labelledby="label_10_col_1 label_10_row_7" />
                <label for="input_10_7_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_8">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_8"> Unusual fatigue </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_8_0" class="form-radio" name="fatigue" value="Yes" aria-labelledby="label_10_col_0 label_10_row_8" />
                <label for="input_10_8_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_8_1" class="form-radio" name="fatigue" value="No" aria-labelledby="label_10_col_1 label_10_row_8" />
                <label for="input_10_8_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
            <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_10 label_10_row_9">
              <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                <label id="label_10_row_9"> Non-allergy related runny nose </label>
              </th>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_9_0" class="form-radio" name="allergy" value="Yes" aria-labelledby="label_10_col_0 label_10_row_9" />
                <label for="input_10_9_0" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
              <td class="form-matrix-values">
                <input type="radio" id="input_10_9_1" class="form-radio" name="allergy" value="No" aria-labelledby="label_10_col_1 label_10_row_9" />
                <label for="input_10_9_1" class="matrix-choice-label matrix-radio-label">  </label>
              </td>
            </tr>
          </table>
        </div>
      </li>
                    <hr>
                </div>
                  <!-- eto yung last na tanung -->
                  <div class="col-md-8" style="padding-right: 16px;padding-left: 0px;margin-right: 0px;margin-left: 234px;">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" style="width: 457.7px;">
                            <div class="form-group mb-3">
                              <label class="form-label" style="width: 611.4px;">Have you traveled outside the current city/municipality where you reside<br>if yes, specific which city/municipality you went to&nbsp;<br>if not type N/A<br><br>(ikaw ba ay nagbiyahe sa labas ng inyong lungsod/munisipyo?<br>sabihen kung saan<br>kung wala ilagay ang N/A)</label>
                              <input class="form-control" name="travel" type="text"></div>
                        </div>
                    </div>
                    <hr>
                <!-- password Start -->
                <div class="col-md-8" style="padding-right: 16px;padding-left: 0px;margin-right: 0px;margin-left: 0px;">
                    <h1>Password</h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" autocomplete="off" required /></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmpass" autocomplete="off" required /></div>
                        </div>
                    </div>
                    <hr>
                </div>
                    <!-- Button -->
                    <div class="row">
                      <div class="col-md-12 text-end content-right" style="width: 1103px;">
                      <button class="btn btn-primary form-btn" name= "submit" type="submit">SAVE </button>
                      <button class="btn btn-danger form-btn" onclick="history.back()" type="reset">CANCEL </button></div>
                    </div>
                </div>
            </div>
        </form> <br> <br>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>

<?php
include ('Conn/datacon.php');
if(isset($_POST['submit'])){

  $eskuel = "SELECT * FROM visitor_tb";
  $res = $con->query($eskuel);
         
  $unik =  $res->num_rows;
    $random =  date("Ymd").$unik;

    $Fname=$_POST['fname'];
    $Sname=$_POST['lname'];
    $Mname=$_POST['mname'];
    $Paddress=$_POST['paddress'];
    $Caddress=$_POST['caddress'];
    $age=$_POST['age'];
    $Gender=$_POST['gender'];
    $mobile=$_POST['cnum'];
    $barangay=$_POST['brgy'];
    $email=$_POST['eaddress'];
    $Password=$_POST['password'];
    $cpass=$_POST['confirmpass'];

    $lagnat=$_POST['lagnat'];
    $bpain=$_POST['bpain'];
    $cough=$_POST['cough'];
    $sthroat=$_POST['sthroat'];
    $breath=$_POST['breath'];
    $chills=$_POST['chills'];
    $smell=$_POST['smell'];
    $sores=$_POST['sores'];
    $fatigue=$_POST['fatigue'];
    $allergy=$_POST['allergy'];
    $travel=$_POST['travel'];
    
    if($Password == $cpass){

    $sql="INSERT INTO `visitor_tb`(`fname`, `sname`, `mname`, `caddress`, `paddress`, `age`,  `Gender`, `mobile`, `barangay`, `email`, `password` , `qrid`)
    VALUES ('$Fname','$Sname','$Mname','$Paddress','$Caddress','$age', '$Gender', '$mobile','$barangay','$email','$Password', '$random')";

    $result=mysqli_query($con,$sql);
   
    if($result){

      $sqll="INSERT INTO `healthdec_tb`(`userid`, `lagnat`, `bpain`, `cough`, `sthroat`, `breath`, `chills`, `smell`, `sores`, `fatigue`, `allergy`, `travel`)
      VALUES ('$random','$lagnat','$bpain','$cough','$sthroat','$breath','$chills', '$smell', '$sores','$fatigue','$allergy','$travel')";
   
       $results=mysqli_query($con,$sqll);
       if($results){
         echo "<script> alert('Registered Sucessfully!'); </script>";
         echo "<script> window.location.href='index.php';</script>";
         }  else{ 
          echo "<script> alert('Server Error!'); </script>";
      }
      }
    else{
      echo "<script> alert('Mobile Number or Email address is taken!'); </script>";
    }
  
} else {
  echo "Password does not match!";

}
}
?>