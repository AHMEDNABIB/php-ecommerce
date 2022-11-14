
<?php
shuffle($product_shuffle);
?>
<section id="new-phones">
            <div class="container">
              <h4 class="font-rubik font-size-20">New Phones</h4>
              <hr>

                    <!-- owl carousel -->
                    <div class="owl-carousel owl-theme">
                       <?php foreach ($product_shuffle as $item) {
                    
                  ?>
                  <div class="item py-2 ">
                    <div class="product font-rale">
                      <a href="#"><img src="<?php echo $item['item_image']?? "./assets/products/1.png" ?>" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6><?php echo $item['item_name']?? "Unknown"?></h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$<?php echo $item['item_price']?></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>

                  <?php 
                  }
                  ?>
                        <div class="product font-rale">
                          <div class="d-flex flex-column">
                            <a href="#"><img src="assets/products/2.png" class="img-fluid" alt="pro1"></a>
                            <div class="text-center">
                              <h6>Readme Note 7</h6>
                              <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                              </div>
                              <div class="price py-2">
                                <span>$122</span>
                              </div>
                              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- !owl ca <?php foreach ($product_shuffle as $item) {
                    
                  ?>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="<?php echo $item['item_image']?? "./assets/products/1.png" ?>" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6><?php echo $item['item_name']?? "Unknown"?></h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>$<?php echo $item['item_price']?></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>

                  <?php 
                  }
                  ?>rousel -->

            </div>
          </section>