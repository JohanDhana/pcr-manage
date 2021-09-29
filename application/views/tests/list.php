<h1 class="fw-bold py-3">Tests List </h1>
<div class="row">
  <div class="col-md-6 offset-md-3 pt-4 pb-5">
    <form action="<?= base_url('tests/list') ?>" method="get">
      <div class="input-group">
        <input type="text" class="form-control input-search-text" name="q" required="" placeholder="Search authors...">
        <div class="input-group-append">
          <button class="btn btn-secondary btn-search" type="submit">
            <i class="bi bi-search"></i> </button>
        </div>
      </div>
    </form>
  </div>
</div>


<div class="row table-responsive" id="tests-row">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Full name</th>
        <th scope="col">Country</th>
        <th scope="col">Personal number</th>
        <th scope="col">Birthday</th>
        <th scope="col">Test Result</th>
        <th scope="col" class="d-none d-md-table-cell">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($testList as $key => $test) { ?>
        <tr>
          <th scope="row">
            <span class="d-none d-md-block"><?= $key + 1 ?></span>
            <div class="d-block d-md-none">
              <div class="dropdown">
                <button class="btn dropdown-toggle btn-sm border mt-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                  </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                  <li>
                    <a class="dropdown-item text-secondary" href="<?= base_url('tests/update/ ' . $test['testId']) ?>"> <i class="bi bi-pencil-square"></i> &nbsp; Edit</a>
                  </li>
                  <li>
                    <?= anchor(base_url("tests/delete/" . $test['testId']), '<i class="bi bi-x"></i> Delete', array('onclick' => "return confirm('Do you want delete this test?!')", 'class' => 'dropdown-item text-secondary')) ?>
                  </li>
                  <li>
                    <div class="position-relative">
                      <button class="btn btn-sm btn-outline-seconadry border-0" id="copy-btn-mobile-<?= $test['testId'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy url"><i class="bi bi-clipboard-check" id="copy-btn-<?= $test['testId'] ?>"></i> Copy Url</button>
                      <input type="hidden" id="url-<?= $test['testId'] ?>" value="<?= base_url('reservations/register/' . $test['testId'])  ?>">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </th>
          <td><?= $test['name'] . ' ' . $test['surname'] ?></td>
          <td><?= $test['country'] ?></td>
          <td><?= $test['personal_nr'] ?></td>
          <td><?= $test['birthday'] ?></td>
          <td>
            <?php if ($test['test_results'] == 1) { ?>
              <i class="bi bi-check-circle text-success"></i>
            <?php } else { ?>
              <i class="bi bi-x-circle text-danger"></i>
            <?php } ?>
          </td>
          <td class="d-none d-md-table-cell">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Action
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                <li>
                  <a class="dropdown-item text-secondary" href="<?= base_url('tests/update/' . $test['testId']) ?>"> <i class="bi bi-pencil-square"></i> &nbsp; Edit</a>
                </li>
                <li>
                  <?= anchor(base_url("tests/delete/"  . $test['testId']), '<i class="bi bi-x-circle"></i> Delete', array('onclick' => "return confirm('Do you want delete this test?!')", 'class' => 'dropdown-item text-secondary')) ?>
                </li>
              </ul>
              <button class="btn btn-sm btn-outline-seconadry border-0" id="copy-btn-<?= $test['testId'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy url">
                <i class="bi bi-clipboard-check" id="copy-btn-<?= $test['testId'] ?>"></i></button>
              <input type="hidden" id="url-<?= $test['testId'] ?>" value="<?= base_url('reservations/register/' . $test['testId']) ?>">
            </div>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php if ($links) { ?>
    <p><?php echo $links; ?></p>
  <?php } ?>
</div>