<div class="row pt-5">
  <div class="col-md-6 offset-md-3 event-form">
    <h4 class="fw-bold mb-3"><?= $title; ?></h4>

    <?php echo validation_errors(); ?>

    <?php echo form_open_multipart('tests/create', ['id' => 'requestForm']); ?>
    <div class="form-group mb-3">
      <label>Name</label>
      <input type="text" class="form-control" required name="name" placeholder="Add name">
    </div>

    <div class="form-group mb-3">
      <label>Last name</label>
      <input type="text" class="form-control" required name="surname" placeholder="Add last name">
    </div>

    <div class="form-group mb-3">
      <label>Birthday</label>
      <input type="date" class="form-control" required name="birthday" placeholder="Add birthday">
    </div>

    <div class="form-group mb-3">
      <label>Personal number</label>
      <input type="text" class="form-control" required name="personal_nr" placeholder="Add personal number">
    </div>

    <div class="form-group mb-3">
      <label>Country</label>
      <input type="text" class="form-control" required name="country" placeholder="Add country">
    </div>

    <div class="form-group mb-3">
      <label>Date the test was done </label>
      <input type="date" class="form-control" required name="test_date" placeholder="Add date">
    </div>

    <div class="form-group mb-3">
      <label>Test number</label>
      <input type="text" class="form-control" required name="test_unique_nr" placeholder="Add test  number">
    </div>


    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="test_results" id="flexCheckChecked">
      <label class="form-check-label" for="flexCheckChecked">
        Positive Test result
      </label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>