<?php include ROOT . '/views/layouts/header.php'; ?>
  <main>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">
        <span class="navbar-brand">Категории:</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nextNav"
            aria-controls="nextNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <?php foreach ($categories as $categoryItem): ?>
        <div class="collapse navbar-collapse" id="nextNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="/category/<?php echo $categoryItem['id']; ?>" class="nav-link">
              <?php echo $categoryItem['name']; ?>
              </a>
            </li>
          </ul>
          <?php endforeach; ?>
          <form class="form-inline">
            <div class="md-form my-0">
              <input type="text" class="form-control mr-sm-2" placeholder="Поиск" aria-label="Поиск"></input>
            </div>
          </form>
        </div>
      </nav>

      <section class="text-center mb-4">
      
      <div class="row wow fadeIn">
      <?php foreach ($latestProducts as $product): ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                  <div class="view overlay">
                    <img class="card-img-top" src="https://www.91-img.com/pictures/121008-v1-apple-iphone-x-mobile-phone-large-1.jpg"
                     alt="Apple phone">
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
    <nav class="d-flex justify-content-center wow fadeIn">
      <ul class="pagination pg-blue">
        <li class="page-item disabled">
          <a href="" class="page-link" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
          <li class="page-item active">
              <a href="" class="page-link" aria-label="Previous">
                <span aria-hidden="true">1</span>
              </a>
            </li>
          <li class="page-item">
              <a href="" class="page-link" aria-label="Previous">
                <span aria-hidden="true">2</span>
              </a>
            </li>
            <li class="page-item">
                <a href="" class="page-link" aria-label="Previous">
                  <span aria-hidden="true">3</span>
                </a>
              </li>
              <li class="page-item">
                  <a href="" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">4</span>
                  </a>
                </li>
                <li class="page-item">
                    <a href="" class="page-link" aria-label="Previous">
                      <span aria-hidden="true">5</span>
                    </a>
                  </li>
                  <li class="page-item">
                      <a href="" class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
      </ul>
    </nav>
    </div>
  </main>
  <?php include ROOT . '/views/layouts/footer.php'; ?>