<?php include ROOT . '/views/layouts/header.php'; ?>
  <main class="mt-5 pt-4">
      <div class="container dark-grey-text mt-5">
        <div class="row">
            <div class="col-md-6 mb-4 wow bounceInUp">
                <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/image/AppleInc/aos/published/images/m/ac/macbook/select/macbook-select-space-gray-201706?wid=892&hei=820&&.v=1539399810190" 
                    alt="macbook" class="img-fluid">
            </div>
            <div class="col-md-6 mb-4">
                <div class="p-4">
                    <div class="mb-3">

                        <a href="">
                            <span class="badge purple mr-1">Category 2</span>
                        </a>
                        <?php if ($product['new']):?>
                        <a href="">
                            <span class="badge red mr-1">New</span>
                        </a>
                        <?php endif;?>
                        <a href="">
                            <span class="badge blue mr-1">Bestseller</span>
                        </a>
                    </div>
                    <p class="lead">
                        <span class="mr-1">
                            <del>450$</del>
                            <span class="mr-1"><?php echo $product['price']; ?>$</span>
                        </span>
                        <h2><?php echo $product['name']; ?></h2>
                    </p>
                    <p><b>Производитель: <?php echo $product['brand']; ?></b></p>
                    <p class="lead font-weight-bold">
                        Описание товара
                        
                    </p>
                    <?php echo $product['description']; ?>
                        <form action="" class="d-flex justify-content-left">
                            <input type="number" value="1" aria-label="Search" style="width: 100px;" 
                            class="form-control">
                            </input>
                            <button type="submit" class="btn btn-primary btn-md my-0 p">
                                в корзину <i class="fab fa-shoping-cart ml-1"></i>
                            </button>
                        </form>   
                </div>
            </div>
        </div>
        <hr>

        <div class=" row d-flex justify-content-center wow fadeIn">
            <div class=" col-md-6 text-center">
                <h4 class="my-4 h4">
                    Допольнительная информация
                </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Porro sapiente nulla molestiae perferendis alias? 
                    Eum labore cupiditate dolor itaque tempore 
                    blanditiis possimus placeat ex deleniti praesentium?
                    Quae, culpa. Saepe, magni?</p>
            </div>
        </div>  
      </div>
  </main>
 <?php include ROOT . '/views/layouts/footer.php'; ?>