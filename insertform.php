<form method="POST" action="RegistrationController.php">
    <h1>Registration Form</h1>
    <label class="" for="name">Name:</label>
    <input type="text" name="name"/>
    <br/>    <br/>
    <label for="birthday">Birthday</label>
    <input type="date" id="birthday" name="birthday"/>
    <br><br/>   
    <label for="address">Address: </label>
    <input type="text" id="address" name="address"/>
    <br><br/>   
    <label for="contact_no">Mobile No: </label>
    <input type="text" id="mobile_no" name="mobile_no"/>
    <br><br/>  
    <input type="hidden" name="task" value="register"/>
    <input type="submit" value="SUBMIT"/>
</form>