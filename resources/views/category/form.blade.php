<div class="form-group">
	<label>Name</label>
	<input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" onchange="return nameValidation(this.value)">
	<span id="nameERR" style="color: #a94442"></span>
</div>
<div class="form-group">
	<label>Contact</label>
	<input type="text" class="form-control" name="contact" id="contact" maxlength="10" value="{{old('contact')}}" onchange="return contactValidation(this.value)">
	<span id="contactERR" style="color: #a94442"></span>
</div>
<div class="form-group">
	<label>Email</label>
	<input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" onchange="return emailValidation(this.value)">
	<span id="emailERR" style="color: #a94442"></span>
</div>
<div class="form-group">
	<label>Preferred Mode Of Contact</label>
	<select class="form-control" name="preferred_mode_of_contact" id="premodcon">
		<option value="none" >None</option>
		<option value="email">Email</option>
		<option value="phone">Phone</option>
	</select>
</div>
<div class="form-group">
  <label>Gender :</label>&nbsp;&nbsp;
  <label class="radio-inline">
    <input type="radio" name="gender" value="male" id="genmale"> Male
  </label>
  <label class="radio-inline">
    <input type="radio" name="gender" value="female" id="genfemale"> Female
  </label> 
</div>