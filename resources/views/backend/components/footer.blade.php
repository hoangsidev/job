
      <footer class="site-footer">
        <div class="copyright">
          <div class="float-left">
            Copyright © 2018 <a href="#" target="_blank">Job-Hunter</a>
          </div>

          <!-- <div class="float-right">
            abc <a href="#" rel="nofollow">d</a>
          </div> -->
        </div><!-- /.copyright -->
      </footer><!-- /.site-footer -->
    </div><!-- /.dashboard-contents -->
  </div><!-- /.content-wrapper -->



  <script src="{{url('/')}}/assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="{{url('/')}}/assets/js/plugins.js"></script>
  <script src="{{url('/')}}/assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="{{url('/')}}/assets/js/tables/dataTables.bootstrap4.min.js"></script>
  <script src="{{url('/')}}/assets/js/main.js"></script>
 
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


  
 
</script>


</body>
 
</html>