<?php
include "connect.php";
if (isset($_POST["submit"])){
    $patientName = $_POST["patientName"];
    $phoneNumber = $_POST["phoneNumber"];
    $apn = $_POST["apn"];
    $tel = $_POST["tel"];
    $emailAddress = $_POST["emailAddress"];
    $postalAddress = $_POST["postalAddress"];
    $postalCode = $_POST["postalCode"];
    $county = $_POST["county"];
    $estate = $_POST["estate"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $nhif = $_POST["nhif"];
    $status = $_POST["status"];
    $patientEmployer = $_POST["patientEmployer"];
    $emp = $_POST["emp"];
    $emergencyContact = $_POST["emergencyContact"];
    $relationship = $_POST["relationship"];
    $emrAddress = $_POST["emrAddress"];
    $emrPhone = $_POST["emrPhone"];
    $primaryInsurance = $_POST["primaryInsurance"];
    $subscriber = $_POST["subscriber"];
    $secondaryInsurance = $_POST["secondaryInsurance"];
    $sins = $_POST["sins"];
    $policyHolder = $_POST["policyHolder"];
    $holderRelationship = $_POST["holderRelationship"];
    $address = $_POST["address"];
    $birthDate = $_POST["birthDate"];
    $employer = $_POST["employer"];
    $workPhone = $_POST["workPhone"];
    $fullName = $_POST["fullName"];
    $patientRelationship = $_POST["patientRelationship"];
    $signature = $_POST["signature"];
    $signDate = $_POST["signDate"];

    $sql = "INSERT INTO `hospital`(`patientName`, `phoneNumber`, `apn`, `tel`, `emailAddress`, `postalAddress`, `postalCode`, `county`, `estate`, `dob`, `age`, `sex`, `nhif`, `status`, `patientEmployer`, `emp`, `emergencyContact`, `relationship`, `emrAddress`, `emrPhone`, `primaryInsurance`, `subscriber`, `secondaryInsurance`, `sins`, `policyHolder`, `holderRelationship`, `address`, `birthDate`, `employer`, `workPhone`, `fullName`, `patientRelationship`, `signature`, `signDate`) 
                            VALUES ('$patientName','$phoneNumber','$apn','$tel','$emailAddress','$postalAddress','$postalCode','$county','$estate','$dob','$age','$sex','$nhif','$status','$patientEmployer','$emp','$emergencyContact','$relationship','$emrAddress','$emrPhone','$primaryInsurance','$subscriber','$secondaryInsurance','$sins','$policyHolder','$holderRelationship','$address','$birthDate','$employer','$workPhone','$fullName','$patientRelationship','$signature','$signDate')";

    $output = mysqli_query($link, $sql);

    if ($output){
        echo "Record Added Successfully";
        header("location:display.php");
    }else{
        echo "Error executing query $sql" .mysqli_error($link);
    }



}else{
    echo "<h3>Fill this form</h3>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Admission Form</title>
    <link rel="stylesheet" href="CSS/hospital.css">
</head>
<body>
<h2 class="center">PATIENT REGISTRATION FORM</h2>
<form action="hospital.php" method="post">
    <img src="Images/tophill.png" alt="tophill hospital">
    <div>
        <label>Patient's Name (Last, First, MI):</label>
        <input class="inputstyle" type="text" name="patientName" placeholder="Kung'u Joseph Chege" required>
    </div>
    <div>
        <label>Patient's Home Phone Number:</label>
        <input type="tel" name="phoneNumber" placeholder="+254 722 123 123" required>
        <label>Alternate Phone Number</label>
        <input  type="radio" name="apn" value="cell" required>
        <label> cell or</label>
        <input type="radio" name="apn" value="work" required>
        <label>Work</label>
        <input type="tel" name="tel" placeholder="+254 722 123 123" required>
    </div>
    <hr>
    <div>
        <label>E-mail address:</label>
        <input class="inputstyle" type="text" name="emailAddress" placeholder="johndoe@example.com" required>
    </div>
    <hr>
    <div>
        <label>Address:</label>
        <input class="inputstyle" type="text" name="postalAddress" placeholder="P.O BOX 2682" required>
        <label>Postal Code</label>
        <input class="dinputstyle" type="number" name="postalCode" placeholder="00200" required>
    </div>
    <div>
        <label>County:</label>
        <input class="dinputstyle" type="text" name="county" placeholder="Nairobi" required>
        <label>Estate:</label>
        <input class="dinputstyle" type="text" name="estate" placeholder="Umoja" required>
    </div>
    <hr>
    <div>
        <label>Date of Birth:</label>
        <input class="dinputstyle" type="date" name="dob" required>
        <label>Age</label>
        <input class="dinputstyle" type="number" name="age" placeholder="50" required>
        <label>Sex:</label>
        <input type="radio" name="sex" value="Male" required>
        <label>Male</label>
        <input type="radio" name="sex" value="Female" required>
        <label>Female</label>
    </div>
    <div>
        <label>NHIF Number</label>
        <input class="inputstyle" type="number" name="nhif" required>
    </div>
    <hr>
    <div>
        <label>Marital Status:</label>
        <input type="radio" name="status" value="married" required>
        <label>Married</label>
        <input type="radio" name="status" value="single" required>
        <label>Single</label>
        <input type="radio" name="status" value="divorced" required>
        <label>Divorced</label>
        <input type="radio" name="status" value="Widowed" required>
        <label>widowed</label>
    </div>
    <hr>
    <div>
        <label>Patient's Employer:</label>
        <input class="inputstyle" type="text" name="patientEmployer" placeholder="KRA" required>
    </div>
    <div>
        <label>Employment Status:</label>
        <input type="radio" name="emp" value="Full time" required>
        <label>Full Time</label>
        <input type="radio" name="emp" value="Part time" required>
        <label>Part time</label>
        <input type="radio" name="emp" value="unemployed" required>
        <label>Unemployed</label>
        <input type="radio" name="emp" value="student" required>
        <label>Student</label>
        <input type="radio" name="emp" value="retired" required>
        <label>Retired</label>
        <input type="radio" name="emp" value="other" required>
        <label>Other</label>
        <input type="text" name="other">
    </div>
    <hr>
    <div>
        <label>Emergency Contact:</label>
        <input class="dinputstyle" type="text" name="emergencyContact" placeholder="John Kay Doe" required>
        <label>Relationship to the Patient</label>
        <input class="dinputstyle" type="text" name="relationship" placeholder="e.g Father" required>

    </div>
    <div>
        <label>Address:</label>
        <input class="dinputstyle" type="text" name="emrAddress" placeholder="2682-00200 Nairobi" required>
        <label>Phone Number</label>
        <input class="dinputstyle" type="tel" name="emrPhone" placeholder="+254 722 123 123" required>
    </div>
    <hr>
        <h3>INSURANCE INFORMATION</h3>
        <div>
            <label>Primary Insurance:</label>
            <input class="dinputstyle" type="text" name="primaryInsurance" placeholder="e.g Madison" required>
            <label>Patient is subscriber/ Policy Holder:</label>
            <input type="radio" name="subscriber" value="Yes" required>
            <label>Yes</label>
            <input type="radio" name="subscriber" value="No" required>
            <label>No</label>
        </div>
        <div>
            <label>Secondary Insurance:</label>
            <input class="dinputstyle" type="text" name="secondaryInsurance" placeholder="e.g Jubilee" required>
            <label>Patient is subscriber/ Policy Holder</label>
            <input type="radio" name="sins" value="Yes" required>
            <label>Yes</label>
            <input type="radio" name="sins" value="No" required>
            <label>No</label>
        </div>
        <hr>
        <h3>INSURED INFORMATION (IF OTHER THAN PATIENT) - We will request to scan your ID and insurance card</h3>
        <div>
            <label>Subscriber/Policy Holder:</label>
            <input class="dinputstyle" type="text" name="policyHolder" placeholder="John Doe" required>
            <label>Relationship to Patient:</label>
            <input class="dinputstyle" type="text" name="holderRelationship" placeholder="e.g spouse" required>
        </div>
        <div>
            <label>Address:</label>
            <input class="inputstyle" type="text" name="address" placeholder="P.O BOX 2210-00200 NAIROBI" required>
        </div>
        <div>
            <label>Date of Birth:</label>
            <input class="dinputstyle" type="date" name="birthDate" value="date" required>
        </div>
        <div>
            <label>His or her employer:</label>
            <input class="dinputstyle" type="text" name="employer" placeholder="KRA" required>
            <label>Work Phone Number:</label>
            <input class="dinputstyle" type="tel" name="workPhone" placeholder="+254 716 123 123" required>
        </div>
        <HR>
        <div>
            <h3>RELEASE OF INFORMATION</h3>
            <P class="pstyle"> I hereby give permission to the person(s) listed below to receive
                information about the care of the above named patient.</P>
        </div>
        <div>
            <label>Full Name:</label>
            <input class="dinputstyle" type="text" name="fullName" placeholder="John Doe" required>
            <label>Relation to the Patient:</label>
            <input class="dinputstyle" type="text" name="patientRelationship" placeholder="e.g spouse" required>
        </div>
        <hr>
        <div>
            <p class="pstyle">
                Tophill Medical Group reserves the right to charge a fee for any scheduled visits that are:
            <ol>
                <li>Cancelled with less than 24 hours notice</li>
                <li>Are missed without calling to cancel ( no show)</li>
            </ol>
            </p>
            <p class="pstyle">Cancellation Fee schedule: New Patient ksh 1000; Established Patient: ksh: 500</p>
        </div>

        <div>
            <label>Patient/Guardian Signature:</label>
            <input class="dinputstyle" type="text" name="signature" placeholder="John Doe" required>
            <label>Date</label>
            <input class="dinputstyle" type="date" name="signDate" value="date" required>
        </div>
        <div>
            <button class="btnsubmit" type="submit" name="submit" value="submit">Submit</button>
        </div>
</form>
</body>
</html>
