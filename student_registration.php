<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color:goldenrod;
}
.container {
    padding: 50px;
  /*background-color:  #b06ab3;*/
  /*background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);*/
background-image: linear-gradient(to top, #0910aa, #7f0094, #ae0079, #cb005d, #d90044, #e12834, #e54221, #e65900, #e67c00, #e39c00, #deb90a, #d5d536);
}

input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  border-radius: 5px;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
  outline: none;
}
select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  border-radius: 5px;
  background: #f1f1f1;
}

 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-image: linear-gradient(to left, #c9041d, #d85600, #d78b00, #c8bc00, #a8eb12);
  color: black;
  font-size: 18px;  
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 2;
}
</style>
</head>
<body>
<form>
  <div class="container">
  <center>  <h1> Student Registeration Form</h1> </center>
  <hr>
  <label> Firstname </label> 
<input type="text" name="firstname" placeholder= "Firstname" size="15" required /> 
<label> Middlename: </label> 
<input type="text" name="middlename" placeholder="Middlename" size="15" required /> 
<label> Lastname: </label>  
<input type="text" name="lastname" placeholder="Lastname" size="15"required /> 
    <div>
        <label> Course :</label> 
        <select>
            <option value="Course">Course</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="B.Tech">B.Tech</option>
            <option value="MBA">MBA</option>
            <option value="MCA">MCA</option>
            <option value="M.Tech">M.Tech</option>
        </select>
    </div>
    <div>
        <label> Gender :</label><br>
        <input type="radio" value="Male" name="gender" checked > Male 
        <input type="radio" value="Female" name="gender"> Female 
        <input type="radio" value="Other" name="gender"> Other
    </div>
<label> Phone :</label>
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/> 
<input type="text" name="phone" placeholder="phone no." size="10" required /> 
<label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
Current Address :
<textarea cols="80" rows="5" placeholder="Current Address" value="address" required ></textarea>
<button type="submit" class="registerbtn">Register</button>
<hr>
  </div>
</form>
</body>
</html>