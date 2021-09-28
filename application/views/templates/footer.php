		</div>
		<!-- <script src="https://www.google.com/recaptcha/api.js?render=6Ldl0nobAAAAAJrOorSildIoHe00e5_XB9dNrD4G"></script> -->
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
		</script>
		<script>
			const closeAlert = document.getElementById('closeAlert');
			const flashAlert = document.querySelector('.alert');
			if (closeAlert) {
				closeAlert.addEventListener('click', function() {
					flashAlert.style.display = "none";
				})

				setTimeout(function() {
					flashAlert.style.display = "none";
				}, 3500);
			}
		</script>

		<script src="<?= base_url('assets/js/utils.js') ?>"></script>

		</body>

		</html>