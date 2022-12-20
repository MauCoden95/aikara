<?php while ($rev = $testimonies->fetch_object()) : ?>

    <div class="slider-container active" data-aos="zoom-out">
            
            <div class="slide">
                <i class="fas fa-quote-right icon"></i>
                <div class="item">
                    <div class="item-info">
                    <h3>Lorena</h3>
                    <div class="stars">
                        <?php if($rev->stars == 1) : ?>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        <?php elseif($rev->stars == 2) : ?>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        <?php elseif($rev->stars == 3) : ?>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        <?php elseif($rev->stars == 4) : ?>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        <?php elseif($rev->stars == 5) : ?>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        <?php endif; ?>
                       
                    </div>
                    </div>
                </div>
                <p class="text"><?= $rev->review ?></p>
                
            
            </div>



        </div>
<?php endwhile; ?>


