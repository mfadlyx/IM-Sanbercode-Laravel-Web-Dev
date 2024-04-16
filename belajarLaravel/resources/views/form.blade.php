<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Pendaftaran</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <!--Form-->
    <form action="/welcome" method="post">
      @csrf
      <!--nama-->
      <label id="fname">First name: </label><br /><br />
      <input type="text" name="first" placeholder="First Name" required /><br /><br />
      <label id="lname">Last name: </label><br /><br />
      <input type="text" name="last" placeholder="Last Name" /><br /><br />

      <!--Gender-->
      <label>Gender</label><br /><br />
      <input type="radio" name="gender" value="male" />Male<br />
      <input type="radio" name="gender" value="female" />Female<br />
      <input type="radio" name="gender" value="other" />Other<br /><br />

      <!--Nationality-->
      <label>Nationality</label><br /><br />
      <select>
        <option value="indonesian">Indonesian</option>
        <option value="singaporean">Singaporean</option>
        <option value="malaysian">Malaysian</option>
        <option value="australia">Australia</option>
        <option value="other">Other</option></select
      ><br /><br />

      <!--Language Spoken-->
      <label>Language Spoken:</label><br /><br />
      <input type="checkbox" name="language" value="INA" />Bahasa Indonesia<br />
      <input type="checkbox" name="language" value="EN" />English<br />
      <input type="checkbox" name="language" value="Other" />Other<br /><br />

      <!--Bio-->
      <label>Bio:</label><br /><br />
      <textarea cols="30" rows="10" required></textarea><br />

      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
