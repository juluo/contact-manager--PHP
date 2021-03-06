<?php
  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="container-fluid">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6 col-md-10">


<!-- START OF EDIT CONTACT FORM -->
<div class="container panel panel-default" id="presentation">
  <div class="row panel-heading">

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />
    <h1>Edit Contact</h1>

  </div>
  <div class="form-group">
    <label for="contact_first">First Name</label>
    <input class="form-control" type="text" name="first" id="first" value="<?= $contact['first']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_last">Last Name</label>
    <input class="form-control" type="text" name="last" id="last" value="<?= $contact['last']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_title">Email</label>
    <input class="form-control" type="text" name="email" id="email" value="<?= $contact['email']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <textarea class="form-control" name="phone" id="phone"><?= $contact['phone']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="contact_address">Active</label>
    <input class="form-control" type="active" name="active" id="active" value="<?= $contact['active']; ?>" />
  </div>

  <button class="btn btn-primary">Update</button>
  &nbsp;&nbsp;
  <a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-delete" style="
    color: #B71C1C;">Delete</a>

</form>
</div>
</div>
</div>

<div id="container-floating">
  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Back" onclick="location.href='index.php';">
<p class="plus"><</p>
    <i class="fa fa-chevron-left back" aria-hidden="true"></i>
  </div>
</div>
</div>
<?php   include 'footer.php'; ?>
