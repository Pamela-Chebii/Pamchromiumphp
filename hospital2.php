<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Registration Form</title>
    <link rel="stylesheet" href="CSS/hospital.css">
</head>
<body>
<h2 class="center"><b>PATIENT REGISTRATION FORM</b></h2>
<form action="hospital2.php" method="post">
    <img src="Images/tophill.png" alt="tophill hospital">
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
        <input class="dinputstyle" type="text" name="patientRelationship" placeholder="e.g spouse" required>
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
        <input class="dinputstyle" type="text" name="PatientRelationship" placeholder="e.g spouse" required>
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
        <a href="hospital.php" target="_top"><button>Previous</button></a>
    </div>
    <div>
        <button class="btnsubmit" type="submit" name="submit" value="submit">Submit</button>
    </div>
</form>

</body>
</html>
