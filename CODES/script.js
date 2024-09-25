document.getElementById('paymentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Simulate payment processing
    setTimeout(function() {
        document.getElementById('paymentStatus').innerText = 'Payment Successful!';
    }, 2000);
});
