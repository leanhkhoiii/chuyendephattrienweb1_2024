<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3035">
    <div class="product">
        <div class="product-image">
            <img src="./img/7.jpg" alt="Flying Ninja">
        </div>
        <div class="product-info">
            <h1 class="product-title">Flying Ninja</h1>
            <div class="product-price">
                <span class="original-price">$15.00</span>
                <span class="discounted-price">$12.00</span>
            </div>
            <p class="product-description">
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
            </p>
            <div class="product-quantity">
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <button class="add-to-cart">ADD TO CART</button>
            </div>
        </div>
    </div>

    <div class="product-details">
        <div class="tabs">
            <button class="tab active" id="description-tab">DESCRIPTION</button>
            <button class="tab" id="reviews-tab">REVIEWS (0)</button>
        </div>
        <div class="tab-content" id="description-content">
            <h2>PRODUCT DESCRIPTION</h2>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
        <div class="tab-content" id="reviews-content" style="display: none;">
            <h2>REVIEWS</h2>
            <p>There are no reviews yet.</p>
            <h3>Be The First To Review "Flying Ninja"</h3>
            <p>Your email address will not be published. Required fields are marked *</p>

            <div class="review-form">
                <label for="rating">Your Rating</label>
                <div class="star-rating">
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star">&#9733;</label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 stars">&#9733;</label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 stars">&#9733;</label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 stars">&#9733;</label>
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 stars">&#9733;</label>
                </div>
                <label for="review">Your Review *</label>
                <textarea id="review" name="review"></textarea>

                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>

                <button class="submit-btn" type="submit">SUBMIT</button>
            </div>


        </div>
    </div>
</div>
<script>
    document.getElementById('description-tab').addEventListener('click', function() {
        document.getElementById('description-content').style.display = 'block';
        document.getElementById('reviews-content').style.display = 'none';
        this.classList.add('active');
        document.getElementById('reviews-tab').classList.remove('active');
    });

    document.getElementById('reviews-tab').addEventListener('click', function() {
        document.getElementById('description-content').style.display = 'none';
        document.getElementById('reviews-content').style.display = 'block';
        this.classList.add('active');
        document.getElementById('description-tab').classList.remove('active');
    });
</script>