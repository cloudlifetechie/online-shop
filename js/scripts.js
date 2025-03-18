// Initialize cart array
let cart = [];

// Function to add product to cart
function addToCart(productId) {
    // Add product to cart array (you can extend this to add more details like quantity)
    cart.push(productId);
    
    // Save cart to localStorage to persist between page reloads
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Optional: Show confirmation message
    alert('Product added to cart!');
}

// Function to view cart
function viewCart() {
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    alert("You have " + cartItems.length + " items in your cart.");
}
