<?php include("navbar.php") ?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">FAQ</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">FAQ</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section> 
        <?php 
        include("connection.php");
        $query = mysqli_query($conn,"select * from faq");
        while($row = mysqli_fetch_array($query))
        {
          $title1 = $row['Title'];
          $detail = $row['Details'];

          ?>

        
    <section class="position-inherit">
      <div class="container">
        <div class="row">
          <div class="col-md-3 scrolltofixed-container">
            <div class="list-group scrolltofixed z-index-0">
              <a href="#section-one" class="list-group-item smooth-scroll-to-target"><?php echo $title1; ?></a>

              <a href="#section-two" class="list-group-item smooth-scroll-to-target">What are some examples of permitted end products?</a>

              <a href="#section-three" class="list-group-item smooth-scroll-to-target">Am I allowed to modify the item that I purchased?</a>

              <a href="#section-four" class="list-group-item smooth-scroll-to-target">What does non-exclusive mean?</a>

              <a href="#section-five" class="list-group-item smooth-scroll-to-target">What is a single application?</a>
            </div>
          </div>
          <div class="col-md-9">
            <div id="section-one" class="mb-50">
              <h3><?php echo $title1; ?></h3>
              <hr>
              <p class="mb-20"><?php echo $detail; ?></p>
            </div>
          <?php } ?>
            <div id="section-two" class="mb-50">
              <h3>What are some examples of permitted end products?</h3>
              <hr>
              <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi inventore laborum libero officiis, accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque, dolor praesentium a!</p>
              <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit at lacus blandit, commodo iaculis justo viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor, commodo ac dui quis, bibendum viverra erat. Maecenas mattis lectus enim, quis tincidunt dui molestie euismod. Curabitur et diam tristique, accumsan nunc eu, hendrerit tellus.</p>
            </div>
            <div id="section-three" class="mb-50">
              <h3>Am I allowed to modify the item that I purchased?</h3>
              <hr>
              <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi inventore laborum libero officiis, accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque, dolor praesentium a!</p>
              <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit at lacus blandit, commodo iaculis justo viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor, commodo ac dui quis, bibendum viverra erat. Maecenas mattis lectus enim, quis tincidunt dui molestie euismod. Curabitur et diam tristique, accumsan nunc eu, hendrerit tellus.</p>
            </div>
            <div id="section-four" class="mb-50">
              <h3>What does non-exclusive mean?</h3>
              <hr>
              <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi inventore laborum libero officiis, accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque, dolor praesentium a!</p>
              <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit at lacus blandit, commodo iaculis justo viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor, commodo ac dui quis, bibendum viverra erat. Maecenas mattis lectus enim, quis tincidunt dui molestie euismod. Curabitur et diam tristique, accumsan nunc eu, hendrerit tellus.</p>
            </div>
            <div id="section-five" class="mb-50">
              <h3>What is a single application?</h3>
              <hr>
              <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi inventore laborum libero officiis, accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque, dolor praesentium a!</p>
              <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit at lacus blandit, commodo iaculis justo viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget mi mi. Fusce quam tortor, commodo ac dui quis, bibendum viverra erat. Maecenas mattis lectus enim, quis tincidunt dui molestie euismod. Curabitur et diam tristique, accumsan nunc eu, hendrerit tellus.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->

  <!-- Footer -->
<?php include("footer.php") ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>