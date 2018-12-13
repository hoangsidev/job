<footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Giới thiệu</h6>
            <p class="text-justify">Một trang website để tìm kiếm việc làm phù hợp. Trang web việc làm được thiết kế để cho phép nhà tuyển dụng đăng yêu cầu công việc cho một vị trí cần tuyển. Cung cấp đánh giá sử dụng lao động, tư vấn nghề nghiệp và tìm kiếm việc làm, và mô tả các mô tả công việc khác nhau hoặc sử dụng lao động. Thông qua một trang web việc làm, một nhân viên tương lai có thể xác định vị trí và điền đơn xin việc.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Công ty</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">Về chúng tôi</a></li>
              <li><a href="page-typography.html">Cách làm việc</a></li>
              <li><a href="page-faq.html">Trợ giúp</a></li>
              <li><a href="page-typography.html">Chính sách bảo mật</a></li>
              <li><a href="page-contact.html">Liên hệ với chúng tôi</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Công cụ</h6>
            <ul class="footer-links">
              <li><a href="job-list.html">Front-end developer</a></li>
              <li><a href="job-list.html">Android developer</a></li>
              <li><a href="job-list.html">iOS developer</a></li>
              <li><a href="job-list.html">Full stack developer</a></li>
              <li><a href="job-list.html">Project administrator</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2018 All Rights Reserved by <a href="/">TheJobs</a>.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->
    

    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="{{url('/')}}/frontend/assets/js/app.min.js"></script>
    <script src="{{url('/')}}/frontend/assets/js/custom.js"></script>
    <?php if(!empty($resultTaxonomiesCategories)) { ?>
 <script>

 $('#btnSubmit').on('click', function(e) {
   e.preventDefault();
   var categoriesValue = [];
    <?php $i =  1; foreach($resultTaxonomiesCategories as $taxonomyItem) { ?>
    categoriesValue.push($('#cat<?php echo $i; ?>').val());
    <?php  $i++; }?>
    $('#categories').val(categoriesValue); 
    $('#formData').submit();
});


   <?php } ?>
 
</script>

  </body>

</html>
