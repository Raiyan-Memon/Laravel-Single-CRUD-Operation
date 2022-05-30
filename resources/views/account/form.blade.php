
<div class="container">
<div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" placeholder="Enter email" name="name" value="{{$account->name ?? NULL}}">
    <span style="color: red">@error('name'){{$message}}@enderror</span>
  </div>
  <br>

  <div class="form-group">
    <label for="">Branch</label>
    <input type="text" class="form-control" placeholder="Branch" name="branch" value="{{$account->branch ?? NULL}}">
    <span style="color: red">@error('branch'){{$message}}@enderror</span>
  </div>
  <br>

  <div class="form-group">
    <label for="">Enrollment Number</label>
    <input type="number" class="form-control" placeholder="Enrollment Number" name="enrollno" value="{{$account->enrollno ?? NULL}}">
    <span style="color: red">@error('enrollno'){{$message}}@enderror</span>
  </div>
  <br>

  <input type="submit" class="btn btn-primary">

</div>