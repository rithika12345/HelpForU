
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BED BOOKING</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/theme.css" type="text/css" />
    <link rel="stylesheet" href="css/media.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic,400italic,800,700' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <script>
    var rangeLabel = document.getElementById("range-label");
    var experience = document.getElementById("experience");
    function change() {
    rangeLabel.innerText = experience.value + "";
    }
    </script>
  </head>
  <body>

    <form class="signup-form" action="" method="post">
      <!-- form header -->
      <div class="form-header">
        <h1><font style="color:red;">EMERGENCY</font> BED BOOKING</h1>
      </div>
      <!-- form body -->
      <div class="form-body">
        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">First name *</label>
            <input type="text" name="firstname" class="form-input" placeholder="Enter your first name" required="required" />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" name="lastname" class="form-input" placeholder="Enter your last name" />
          </div>
        </div>
        
        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="phoneno" class="label-title">Phone Number*</label>
            <input type="number" name="phoneno" class="form-input" placeholder="Enter your phone number" required="required">
          </div>
          <div class="form-group right">
            <label for="aadhar" class="label-title">Aadhar number of the Patient*</label>
            <input type="text" class="form-input" name="aadhar" placeholder="Enter your aadhar number" required="required">
          </div>
        </div>
        <!-- Email -->
        <div class="form-group">
          <label for="address" class="label-title">Address*</label>
          <input type="text" name="address" class="form-input" placeholder="Enter your address" required="required">
        </div>
        
        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender*</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
            </div>
          </div>
          <div class="form-group right">
            <label class="label-title">Done a confirm test of COVID?*</label>
            <div class="input-group">
              <label for="yes"><input type="radio" name="covid" value="yes" id="yes"> Yes</label>
              <label for="no"><input type="radio" name="covid" value="no" id="no"> No</label>
            </div>
          </div>
        </div>
        <!-- Source of Income and Income -->
        <div class="horizontal-group">
          <div class="form-group left" >
            <label class="label-title">Tell the field of your illness*</label>
            <select class="form-input" name="ill" required="required">
              <option value="Physical Injury">Physical Injury</option>
              <option value="Internal Injury">Internal Injury</option>
              <option value="Harmful diseases">Harmful diseases</option>
              <option value="Covid Positive">Covid (+)ve</option>
              
            </select>
          </div>
          <div class="form-group right">
            <label for="experience" class="label-title">How are you feeling on a degree of 10?(Only for Covid Patients)*</label>
            <input type="range" min="0" max="10" step="1"  value="0" name="degree" class="form-input" onChange="change();" style="height:28px;width:78%;padding:0;" required="required">
            <span id="range-label">0</span>
          </div>
        </div>
        <!-- Profile picture and Age -->
        <div class="horizontal-group">
          <div class="form-group left" >
            <label class="label-title">Please tell your bed preference*</label>
            <select class="form-input" name="bed" required="required">
              <option value="pward">Private ward</option>
              <option value="gward">General ward</option>
              
            </select>
          </div>
          <div class="form-group right">
            <label for="experience" class="label-title">Age*</label>
            <input type="number" min="1" max="80"  value="1" name="age" class="form-input" required="required">
          </div>
          
        </div>
        
        <!-- Bio -->
        <div class="form-group">
          <label for="choose-file" class="label-title">Describe your Illness here*</label>
          <textarea class="form-input" rows="4" cols="50" name="illness" style="height:auto" required="required"></textarea>
        </div>
      </div>
      <!-- form-footer -->
      <div class="form-footer">
        <span>* required</span>
        <button type="submit" class="btn" name="submit">Send request</button>
      </div>
    </form>
    <!-- Script for range input label -->
     <footer>
                        <div class="Cntr">                
                            <p>COPYRIGHT © COVIDHEALTHCARE GOVERNMENT OF INDIA<a rel="nofollow" href="http://www.templatemo.com" target="_parent"></a></p>
                        </div>
                    </footer>
    
  </body>
</html>


    <?php
      include 'dbcon.php';
      if(isset($_POST['submit']))
      {
        $firstname = $_POST['firstname'] ;
        $lastname = $_POST['lastname'] ;
        $phoneno = $_POST['phoneno'] ;
        $aadhar =$_POST['aadhar'] ;
        $address =$_POST['address'] ;
        $gender = $_POST['gender'] ;
        $covid = $_POST['covid'] ;
        $ill = $_POST['ill'] ;
        $degree = $_POST['degree'];
        $bed =$_POST['bed'] ;
        $age = $_POST['age'] ;
        $illness = $_POST['illness'] ;

        
        $aadharquery =  "select * from book1 where aadhar='$aadhar' ";
        $query = mysqli_query($con,$aadharquery);
        $aadharcount = mysqli_num_rows($query);
        if($aadharcount>0)
        {
          echo "aadhar already exists";
        }
        else
        {
          $insertquery = "insert into book1(firstname, lastname, phoneno, aadhar, address, gender, covid, covid2, degree, bed, age, illness) values('$firstname','$lastname', $phoneno,'$aadhar','$address', '$gender','$covid' ,'$ill' ,'$degree','$bed','$age','$illness') ";
          $iquery = mysqli_query($con, $insertquery);
          if($iquery)
          {
    ?>
    <script>
      alert("Request sent successfully");
    </script>
    <?php
    }
    else
    {
    ?>
    <script>
      alert(" Request not sent successfully");
    </script>
    <?php
    
    }
    }
    }
    ?>