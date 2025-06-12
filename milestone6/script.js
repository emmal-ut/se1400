let cart = [];
let total = 0;

function addToCart(product, price) {
  cart.push({ name: product, price: price });
  total += price;

  updateCart();
}


function updateCart() {
  const cartList = document.getElementById('cart-list');
  const totalDisplay = document.getElementById('total');

  // Clear the list
  cartList.innerHTML = '';

  // Add each item
  cart.forEach((item) => {
    const li = document.createElement('li');
    li.textContent = `${item.name} - $${item.price.toFixed(2)}`;
    cartList.appendChild(li);
  });

  // Update total
  totalDisplay.textContent = total.toFixed(2);
}