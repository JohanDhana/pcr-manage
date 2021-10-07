<div class="row pt-5">
  <div class="col-md-6 offset-md-3 event-form">
    <h4 class="fw-bold mb-3"><?= $title; ?></h4>

    <?php echo validation_errors(); ?>

    <?php echo form_open_multipart('tests/update/' . $test['testId'], ['id' => 'requestForm']); ?>
    <div class="form-group mb-3">
      <label>Name</label>
      <input type="text" class="form-control" required name="name" value="<?= $test['name'] ?>" placeholder="Add name">
    </div>

    <div class="form-group mb-3">
      <label>Last name</label>
      <input type="text" class="form-control" required name="surname" value="<?= $test['surname'] ?>" placeholder="Add last name">
    </div>

    <div class="form-group mb-3">
      <label>Birthday</label>
      <input type="date" class="form-control" required name="birthday" value="<?= $test['birthday'] ?>" placeholder="Add birthday">
    </div>

    <div class="form-group mb-3">
      <label>Personal number</label>
      <input type="text" class="form-control" required name="personal_nr" value="<?= $test['personal_nr'] ?>" placeholder="Add personal number">
    </div>

    <div class="form-group mb-3">
      <label>Country</label>
      <input type="text" class="form-control" required name="country" value="<?= $test['country'] ?>" placeholder="Add country">
    </div>

    <div class="form-group mb-3">
      <label>Date the test was done </label>
      <input type="datetime-local" class="form-control" required name="test_date" value="<?= $test['test_date'] ?>" placeholder="Add date">
    </div>

    <div class="form-group mb-3">
      <label>Test number</label>
      <input type="text" class="form-control" required name="test_unique_nr" value="<?= $test['test_unique_nr'] ?>" placeholder="Add test  number">
    </div>


    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="test_results" <?= $test['test_results']  ? 'checked' : '' ?> id="flexCheckChecked">
      <label class="form-check-label" for="flexCheckChecked">
        Positive Test result
      </label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>