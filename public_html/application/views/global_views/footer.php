<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

<div id="container">

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

</div>



  <!-- Bootstrap core JavaScript -->
  <script src="<?php base_url() ?>assets/bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="<?php base_url() ?>assets/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php base_url() ?>assets/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?php base_url() ?>assets/bootstrap/js/dist/scrolling-nav.js"></script>

</body>
</html>


