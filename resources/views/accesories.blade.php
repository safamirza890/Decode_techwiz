@extends('header-footer')

<link rel="stylesheet" href="assests/css/accesories.css">
<style>
  /* ... your existing CSS rules ... */
</style>

@section('body')
<div class="card-container">
  <div class="product-card">
    <img class="product-image" src="assests/images/person_2.jpg" alt="Product Image">
    <h2 class="product-title">Product Name</h2>
    <p class="product-price">$XX.XX</p>
    <button class="add-to-cart-button" onclick="openModal()">Add to Cart</button>
    <button class="wishlist-button"><span class="heart-icon">❤️</span> Add to Wishlist</button>
  </div>
</div>

<!-- Modal -->
<div id="cartModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-product-image" src="assests/images/person_2.jpg" alt="Product Image">
    <p class="modal-product-title">Product Name</p>
    <div class="quantity-container">
      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
    </div>
    <p class="total-price">Total Price: $XX.XX</p>
    <button class="buy-now-button" onclick="buyNow()">Buy Now</button>
  </div>
</div>


<script>
  function openModal() {
    var modal = document.getElementById('cartModal');
    modal.style.display = 'block';
  }

  function closeModal() {
    var modal = document.getElementById('cartModal');
    modal.style.display = 'none';
  }

  function updateTotalPrice() {
    var quantity = parseInt(document.getElementById('quantity').value);
    var price = parseFloat("$XX.XX"); // Replace with actual price
    var total = quantity * price;
    document.querySelector('.total-price').textContent = "Total Price: $" + total.toFixed(2);
  }
  function buyNow() {
    var quantity = parseInt(document.getElementById('quantity').value);
    var price = parseFloat("$XX.XX"); // Replace with actual price
    var total = quantity * price;
    
    // Perform the actual "Buy Now" action here, such as redirecting to a checkout page or performing payment processing
    
    closeModal(); // Close the modal after performing the action
  }
</script>
@endsection
