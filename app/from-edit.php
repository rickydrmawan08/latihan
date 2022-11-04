<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<h2>FROM EDIT MAHASISWA</h2>
<form action="edit-data.php?id=<?php echo $_GET['id'];?>" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama</label>
      <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">NIM</label>
      <input type="password" class="form-control" id="nim" placeholder="nim" name="nim" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress"> Semester</label>
    <input type="text" class="form-control" id="semester" placeholder="Semester" name="semester" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Username</label>
      <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Password</label>
      <input type="text" class="form-control" id="password" placeholder="Password" name="password" required>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
 