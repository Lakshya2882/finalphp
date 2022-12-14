
<?php require ('header.php'); ?>
  <main>
    <section class="masthead">
      <div>
        <h1>*  BLOG  *</h1>
      </div>
    </section>
    <section class="form-row row">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Lets create a blog...</h3>
        <form method="post" action="save-admin.php">
        	<p><input class="form-control" name="first_name" type="text" placeholder="First Name" required/></p>
        	<p><input class="form-control" name="last_name" type="text" placeholder="Last Name" required /></p>
        	<p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
        	<p><input class="form-control" name="email" type="email" placeholder="email" required /></p>
          <label for="validationTextarea" class="form-label">Blog Content </label>
          <textarea class="form-control" id="validationTextarea" placeholder="Bio" required></textarea>
          <input class="btn btn-light" type="submit" name="submit" value="Submit">
        </form>
      </div>
    </section>
  </main>
<!-- Let's add our footer file. -->
<?php require ('footer.php'); ?>
