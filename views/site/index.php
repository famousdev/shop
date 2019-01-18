<?php include ROOT . '/views/layouts/header.php'; ?>
      <section class="text-center mb-4">
      <div class="text-center"><h2>Последние товары</h2></div>
      
      <div class="row wow fadeIn">
      <?php foreach ($latestProducts as $product): ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://www.91-img.com/pictures/121008-v1-apple-iphone-x-mobile-phone-large-1.jpg"
                     alt="phone">
                     <a href="/product/<?php echo $product['id'];?>">
                       <div class="mask rgba-white-slight"></div>
                     </a>
                  </div>
                  <div class="card-body text-center">
                    <a href="/product/<?php echo $product['id'];?>" class="grey-text">
                      <h5><?php echo $product['name'];?></h5>
                      
                    </a>
                    
                    <h4 class="font-weight-bold blue-text">
                      <strong><?php echo $product['price'];?>$</strong>
                      <?php if ($product['new']):?>
                      <strong>
                     <span class="badge badge-pill danger-color">New</span>
                      </strong>
                    <?php endif;?>
                    </h4>
                  </div>
                </div>
              </div>
              <?php endforeach;?>
           </div> 
    </section>
    </div>
  </main>
  <?php include ROOT . '/views/layouts/footer.php'; ?>