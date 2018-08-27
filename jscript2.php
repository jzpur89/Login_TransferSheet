<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Transfer</title>
    <link rel="stylesheet" href="cssjs2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="wrapper">

      <!-- Pharmacists On Duty -->

      <section class="pharmacists">
        <div class="header-wrap">
            <p><i class="fas fa-user" id="icons"></i><span>ALISAL PHARMACIST ON DUTY</span><i class="fas fa-user" id="icons"></i></p>
        </div>
        <div class="pharmacist-box">
          <div class="pharmacist-grid">
            <div class="content-wrap">
              <select id="pharmacist" name="pharmacist">
                <option>TUNG</option>
                <option>AKIRA</option>
                <option>JESSE</option>
                <option>OTHER</option>
              </select>
              <p id="pharmacist-input1">PHARMACIST NAME:</p>
              <input id="pharmacist-input2" type="text" name="ohterpharmacist-input" value="">
            </div>
          </div>
        </div>
      </section>

<hr>

      <!-- Patient Information -->
      <div class="header-wrap">
        <p><i class="fas fa-address-card" id="icons"></i><span>PATIENT INFORMATION</span><i class="fas fa-address-card" id="icons"></i></p>
      </div>
      <div class="patient-form">
        <div class="form-group">
          <label for="">FIRST NAME</label>
          <input id="fName" type="text" name="First Name" placeholder="First Name" onkeydown="return alphaOnly(event)">
        </div>
        <div class="form-group">
          <label for="">LAST NAME</label>
          <input id="lName" type="text" name="Last Name" placeholder="Last Name" onkeydown="return alphaOnly(event)">
        </div>
        <div class="form-group">
          <label>DATE OF BIRTH</label>
          <input id="dateOB" type="date" name="Date Of Birth">
        </div>
      </div>

<hr>

      <!-- Pharmacy Transfering From -->

    <section class="pharmacylist">
      <div class="header-wrap">
          <p><i class="fas fa-building" id="icons"></i><span>TRANSFERRING PHARMACY</span><i class="fas fa-building" id="icons"></i></p>
      </div>


      <ul>
        <li>
          <input type="radio" id="ANOP" name="pharmacies" class="required" value="ANOP">
          <label for="ANOP">A&O</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" class="required" value="ACP">
          <label for="ACP">ALLCARE</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="CVS1">
          <label for="CVS1">CVS (EAST LAUREL)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="CVS2">
          <label for="cvs1">CVS (SOUTH MAIN)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="CVS3">
          <label for="CVS2">CVS (EAST ALISAL)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="CVS4">
          <label for="CVS3">CVS (EAST BORONDA)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="CVS5">
          <label for="CVS4">CVS-TARGET (NORTH MAIN)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="NHP">
          <label for="NHP">NOB HILL</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="RITEAID">
          <label for="RITEAID">RITE AID</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="RLP">
          <label for="RLP">ROMIE LANE</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="SAFEWAY1">
          <label for="SAFEWAY1">SAFEWAY (CONSTITUTION)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="SAFEWAY2">
          <label for="SAFEWAY2">SAFEWAY (NORTH MAIN)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="SHERMANP">
          <label for="SHERMANp">SHERMAN'S</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="STARP">
          <label for="STARP">STAR</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="WAG1">
          <label for="WAG1">WALGREENS (NORTH MAIN)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="WAG2">
          <label for="WAG2">WALGREENS (NORTH SANBORN)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="WAL1">
          <label for="WAL1">WALMART (NORTH DAVIS)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="WAL2">
          <label for="WAL2">WALMART (NORTH MAIN)</label>
        </li>
        <li>
          <input type="radio" name="pharmacies" value="OTHERP">
          <label for="OTHERP">OTHER</label>
        </li>
        <li id="otherpharmacy-input">
          <p>Pharmacy Name</p>
          <input id="opharmacyName" type="text" name="" value="" placeholder="Required">
          <p>Pharmacy Address</p>
          <input id="opharmacyAddress" type="text" name="" value="" placeholder="Optional">
          <p>Pharmacy PHONE</p>
          <input id="opharmacyPhone" type="number" name="" value="" placeholder="Optional Ex: 8314247321">
          <p>Pharmacy Fax</p>
          <input id="opharmacyFax" type="number" name="" value="" placeholder="Required Ex: 8314240197">
        </li>
      </ul>
    </section>

<hr>

      <!-- Medications Requested -->

      <div class="header-wrap">
        <p><i class="fas fa-prescription-bottle" id="icons"></i><span>MEDICATIONS REQUESTED</span><i class="fas fa-prescription-bottle" id="icons"></i></p>
      </div>

      <div class="medication-grid">
        <div class="">
          <input type="radio" name="medications" value="" checked>
          <label>ALL ACTIVE PRESCRIPTION(S) DURING LAST 3 MONTHS</label>
        </div>

        <div class="">
          <span class="meditem2">
            <input id="medOther" type="radio" name="medications">
            <label>OTHER</label>
          </span>
          <span>
            <textarea id="medTextBox" name="name" placeholder="Type in specific medications here"></textarea>
          </span>
        </div>
      </div>

<hr>

      <!-- Additional Notes -->

      <div class="header-wrap">
        <p><i class="far fa-sticky-note" id="icons"></i><span>NOTES</span><i class="far fa-sticky-note" id="icons"></i></p>
      </div>

      <div class="notes-grid">
        <div class="">
          <textarea id="notesTextBox" name="name" placeholder="Add any additional notes here"></textarea>
        </div>
      </div>
      <!-- Submit Button -->
      <br>
      <div class="button-container">
        <a href="jscript1.html" id="button" target="_blank" onclick="grabData()">Create Transfer Sheet</a>
      </div>

      <button id="button" onclick="validateForm()">Submit</button>

      <!-- Javascripts/CODES -->

    <script>

        $('#pharmacist').change(function(){
          if($('#pharmacist').val() == 'OTHER'){
            $('#pharmacist-input1').show();
            $('#pharmacist-input2').show();
          } else {
            $('#pharmacist-input1').hide();
            $('#pharmacist-input2').hide();
          }
        })

        $('input[name="pharmacies"]').change(function(){
          if($('input[name="pharmacies"]:checked').val() == "OTHERP"){
            $('#otherpharmacy-input').show();
          } else {
            $('#otherpharmacy-input').hide();
          }
        })


        function validateForm(){
          var rFields = "";
          if($('#pharmacist').val() == 'OTHER'){
            var otherPharmacist = $('#pharmacist-input2').val().trim();
            if(otherPharmacist == null || otherPharmacist == ""){
              rFields += "\nPharmacist Name";
            }
          }
          var fName = $('input#fName').val().toUpperCase().trim();
          if(fName == null || fName == ""){
            rFields += "\nFirst Name";
          }
          var lName = $('input#lName').val().toUpperCase().trim();
          if(lName == null || lName == ""){
            rFields += "\nLast Name";
          }
          var dateOB = $('input#dateOB').val();
          if(!dateOB){
            rFields += "\nDate of Birth";
          }
          if($('input[name=pharmacies]:checked').length <= 0){
            rFields += "\nTransfering Pharmacy";
          }
          var pharmTransfer = $('input[name="pharmacies"]:checked').val();
          if(pharmTransfer == "OTHERP"){
            var opharmacyName = $('#opharmacyName').val().trim();
            if(opharmacyName == null || opharmacyName == ""){
              rFields += "\nPharmacy Name";
            }
            var opharmacyPhone = $('#opharmacyPhone').val().trim();
            if(opharmacyPhone.trim().length >= 1){
              if(opharmacyPhone.trim().length != 10){
                rFields += "\nValid Pharmacy Phone";
              }
              if(opharmacyPhone.trim().length == 10){
                var phone = formatPhone(opharmacyPhone);
                //collect and store phone here
              }
            }
            var opharmacyFax = $('#opharmacyFax').val().trim();
            if(opharmacyFax.trim().length == 0){
              rFields += "\nPharmacy Fax Number";
            }
            if(opharmacyFax.trim().length >= 1){
              if(opharmacyFax.trim().length != 10){
                rFields += "\nValid Pharmacy Fax";
              }
              if(opharmacyFax.trim().length == 10){
                var fax = formatPhone(opharmacyFax);
                //collect and store fax here
              }
            }
          }
          if($('#medOther').is(':checked') == true){
            var medOther1 = $('#medTextBox').val().trim();
            if(medOther1 == null || medOther1 == ""){
              rFields += "\nSpecify Prescriptions For Transfer";
            }
          }
          if(rFields == null || rFields == ""){
            alert("Everything Looks Good!");
          } else if(rFields != null || rFields != ""){
            alert("Missing Required Fields:" + rFields);
          }
        }

        function validOtherPharmacy(){
          var pharmTransfer = $('input[name="pharmacies"]:checked').val();
          if(pharmTransfer == "OTHERP"){
            var opharmacyName = $('#opharmacyName').val();
            if(opharmacyName == null || opharmacyName == ""){
              //add pharmacy name warning here
            }
            var opharmacyPhone = $('#opharmacyPhone').val();
            if(opharmacyPhone.trim().length >= 1){
              if(opharmacyPhone.trim().length != 10){
                alert("Not 10 digits");
              }
              if(opharmacyPhone.trim().length == 10){
                var phone = formatPhone(opharmacyPhone);
                alert(phone);
              }
            }
            var opharmacyFax = $('#opharmacyFax').val();
            if(opharmacyFax.trim().length == 0){
              alert("YOU NEED FAX NUMBER!!!");
            }
            if(opharmacyFax.trim().length >= 1){
              if(opharmacyFax.trim().length != 10){
                alert("YOU NEED 10 DIGITS");
              }
              if(opharmacyFax.trim().length == 10){
                var fax = formatPhone(opharmacyFax);
                alert(fax);
              }
            }
          }
        }






        function formatPhone(x){
          var areaCode = x.slice(0, 3);
          var first3 = x.slice(3, 6);
          var last4 = x.slice(6, 11);
          var phone = "(" + areaCode + ") " + first3 + "-" + last4;
          return phone;
        }

        //Check Radio Button Selected For Pharmacies//
        function pharmacyCheck(){
          if($('input[name="pharmacies"]').is(':checked') == true){
            var pharmTransfer = $('input[name="pharmacies"]:checked').val();
            localStorage.setItem("pharmTransfer", pharmTransfer);
            if(pharmTransfer == "OTHERP"){
              var opharmacyName = $('#opharmacyName').val().toUpperCase();
              var opharmacyAddress = $('#opharmacyAddress').val();
              var opharmacyPhone = $('#opharmacyPhone').val();
              var opharmacyFax = $('#opharmacyFax').val();
              alert(opharmacyPhone);
              localStorage.setItem("opharmacyName", opharmacyName);
              localStorage.setItem("opharmacyAddress", opharmacyAddress);
              localStorage.setItem("opharmacyPhone", opharmacyPhone);
              localStorage.setItem("opharmacyFax", opharmacyFax);
            }
          }
        }

        //Check Radio Button Selected For Medications//
        function medicationCheck(){
          if($('#medOther').is(':checked') == true){
            var medOther = $("#medTextBox").val();
            localStorage.setItem("medOther", medOther);
          } else {
            var medOther = "ALL ACTIVE PRESCRIPTION(S) DURING THE LAST 3 MONTHS";
            localStorage.setItem("medOther", medOther);
          }
        }

        //Check Pharmacist Selected//
        function pharmacistCheck(){
          var pharmacist = $('#pharmacist option:selected').text();
          if(pharmacist == "OTHER"){
            var pharmacist = $('#pharmacist-input2').val().toUpperCase();
          }
          localStorage.setItem("pharmacist", pharmacist);
        }

        // function doClick(){
        //   var pharmacyPicked = $('input[name=pharmacies]:checked').val();
        //   alert(pharmacyPicked);
        // }


        function alphaOnly(event){
          var key = event.keyCode;
          return ((key >= 65 && key <= 90) || key == 8 || key == 9 || key == 32 || key == 46);
        }

        // function validateFields(){
        //   // var rFields = [];
        //   var fName = $('input#fName').val().toUpperCase();
        //   if(fName == null || fName == ""){
        //     rFields.push("First Name");
        //   else{
        //     alert("Not empty");
        //   }
        //   }
        //   // if (rFields != null || rFields != []){
        //   //   alert("The following field(s) are required: " + rFields);
        //   // }
        // }

        function grabData(){
          var fName = $('input#fName').val().toUpperCase();
          var lName = $('input#lName').val().toUpperCase();
          var dateOB = $('input#dateOB').val();
          var splitDOB = dateOB.split('-');
          var dateOB2 = splitDOB[1] + '-' + splitDOB[2] + '-' + splitDOB[0];
          var fullName = (lName + ', ' + fName);
          var notes1 = $("#notesTextBox").val();
          medicationCheck();
          pharmacyCheck();
          pharmacistCheck();
          localStorage.setItem("fName", fName);
          localStorage.setItem("lName", lName);
          localStorage.setItem("fullName", fullName);
          localStorage.setItem("dateOB2", dateOB2);
          localStorage.setItem("notes1", notes1);
          alert("Creating Transfer Sheet For "  + fullName);
        }

        function hideOtherFields(){
          $('#pharmacist-input1').hide();
          $('#pharmacist-input2').hide();
          $('#otherpharmacy-input').hide();
        }

        window.onload = hideOtherFields();

    </script>

    <!-- Code Ends -->

  </div>

    <!-- Wrapper Ends -->

  </body>

</html>
