@extends('layout.app')
@section('styles')

<body>
    <div class="container">
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputRegno">RegNumber</label>
      <input type="text" class="form-control" id="inputRegno" placeholder="Enter registration number">
    </div>
    <div class="form-group col-md-6">
      <label for="inputFirstname">First name</label>
      <input type="text" class="form-control" id="inputFirstname" placeholder="Enter first name">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputMiddlename">Middle name</label>
    <input type="text" class="form-control" id="inputMiddlename" placeholder="Enter middle name">
  </div>
  <div class="form-group col-md-6">
    <label for="inputLastname">Last name </label>
    <input type="text" class="form-control" id="inputLastname" placeholder="Enter last name">
  </div>
</div>

   <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputDatefBbirth">Date of birth</label>
    <input type="date" class="form-control datepicker" id="inputDateOfBirth" placeholder="Enter your birth date">

  </div>
  <div class="form-group col-md-6">
    <label for="inputYearOfStudy">Year of study </label>
    <input type="text" class="form-control" id="datepicker" placeholder="Enter your year of study">

  </div>
  </>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
    </div>
    <div class="form-group col-md-4">
      <label for="inputGender">Gender</label>
      <select id="inputGender" class="form-control">
        <option selected>Choose your gender</option>
        <option>ME</option>
        <option>FE</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputPhonenumber">Phone number</label>
      <input type="tel" class="form-control" id="inputPhonenumber" placeholder="Enter your phone number">
    </div>
  </div>
  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form> -->

  </div>
</body>



@endsection
@section('scripts')
