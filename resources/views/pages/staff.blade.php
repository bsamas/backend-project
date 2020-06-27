@extends('layout.app')
@section('styles')
<body>
<div class="container">
<div style="text-align: center; font-size: 2em"
    <h1>REGISTER STAFF</h1></div>
      <form class="bsams-validation">
         <div class="form-row">
            <div class="form-group col-md-6">
               <label for="inputStaffno">StaffNumber</label>
                 <input type="text" class="form-control" id="inputStaffno" placeholder="Enter staff number" required>
               </div>
           <div class="form-group col-md-6">
         <label for="inputFirstname">First name</label>
      <input type="text" class="form-control" id="inputFirstname" placeholder="Enter first name" required>
  </div>
</div>
  <div class="form-row">
     <div class="form-group col-md-6">
        <label for="inputMiddlename">Middle name</label>
          <input type="text" class="form-control" id="inputMiddlename" placeholder="Enter middle name" required>
              </div>
            <div class="form-group col-md-6">
         <label for="inputLastname">Last name </label>
      <input type="text" class="form-control" id="inputLastname" placeholder="Enter last name" required>
   </div>
</div>
  <div class="form-row">
     <div class="form-group col-md-3">
        <label for="inputDepartment">Department</label>
           <input type="number" class="form-control " id="inputDepartment" placeholder="Enter department" required>
              </div>
                 <div class="form-group col-md-3">
                    <label for="inputGender">Gender</label>
                  <select id="inputGender" class="form-control" required>
               <option value="">Select gender</option>
           <option value="male">male</option>
        <option value="female">female</option>
      </select>
   </div>
    <div class="form-group col-md-3">
                <label for="inputType">Type </label>
             <select id="inputType" class="form-control" required>
            <option value="">Select type of staff</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Lab assistant">Lab assistant</option>
            <option value="Seminar leader">Seminar leader</option>
               </select>
           </div>
           <div class="form-group col-md-3">
       <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email" required>
             <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>
</div>
  <div class="form-row">
         <div class="form-group col-md-3">
       <label for="inputPhonenumber">Phone number</label>
     <input type="number" class="form-control" id="inputPhonenumber" placeholder="Phone number" required>
</div>
<div class="form-group col-md-3">
        <label for="inputUsername">Username</label>
          <input type="text" class="form-control" id="inputUsername" placeholder="username" required>
              </div>
            <div class="form-group col-md-3">
         <label for="inputPassword">Password </label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
   </div>
       <div class="form-group col-md-3">
         <label for="inputPassword">Confirm Password </label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password" required>
   </div>
  </div>

     <div class="form-group col-md-12">
        <div class="col-sm-9 offset-sm-10">
           <input type="submit" class="btn btn-primary" value="Submit">
              <input type="reset" class="btn btn-secondary" value="Reset">
             </div>
          </div>
       </form>
   </div>
<script>
    // Self-executing function
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('bsams-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
</body>
@endsection
@section('scripts')

