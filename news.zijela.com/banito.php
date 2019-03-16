

<form action="/banitoSends.php" method="post">
  Hey Banito. You can have a more elegant solution if you send me money today.
  <div class="form-group row">
    <label for="emails" class="col-sm-2 col-form-label">ENTER EMAILS SEPERATED BY A COMMA!</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="emails" name="emails" placeholder="Enter Emails here">
    </div>
  </div>

  <div class="form-group row">
    <label for="subject" class="col-sm-2 col-form-label">ENTER SUBJECT OF THE MAIL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Email">
    </div>
  </div>

  <div class="form-group row">
    <label for="emailBody" class="col-sm-2 col-form-label">ENTER THE BODY OF THE EMAIL</label>
    <div class="col-sm-10">
      <textarea rows="4" cols="50" name="emailBody"></textarea>
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">SEND BULK MAILS</button>
    </div>
  </div>
</form>