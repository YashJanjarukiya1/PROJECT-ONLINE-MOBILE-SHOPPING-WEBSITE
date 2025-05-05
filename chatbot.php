<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userMessage = strtolower(trim($_POST['message']));

    // Normalize user message
    $userMessage = preg_replace("/[^a-zA-Z0-9\s]/", "", $userMessage);

    // Predefined response patterns
    $response = "I'm sorry, I didn't quite catch that. Try asking about delivery, returns, pricing, or contact info.";

    if (preg_match('/hello|hi|hey/', $userMessage)) {
        $response = "Hi there! Welcome to Mobile World Plus. 😊 How can I assist you today?";
    } elseif (preg_match('/price|cost|rate|how much/', $userMessage)) {
        $response = "Prices vary based on the product. Could you please specify the brand or model you're interested in?";
    } elseif (preg_match('/deliver|shipping|when will i get|how long/', $userMessage)) {
        $response = "We deliver products within 3–5 business days. You'll get a tracking ID once your order is shipped!";
    } elseif (preg_match('/return|refund|exchange/', $userMessage)) {
        $response = "You can return items within 7 days of delivery as long as they’re in original condition. Would you like help with a return?";
    } elseif (preg_match('/contact|support|talk|email|phone/', $userMessage)) {
        $response = "You can reach us at 📧 mobileworld@gmail.com or ☎️ (123) 456-7890. We're happy to help!";
    } elseif (preg_match('/warranty|guarantee/', $userMessage)) {
        $response = "Most of our products come with a 1-year manufacturer warranty. Let us know the product name for exact details.";
    } elseif (preg_match('/payment|pay|upi|cod|cash/', $userMessage)) {
        $response = "We accept online payments, UPI, and Cash on Delivery (COD). Choose your preferred method during checkout!";
    }

    echo $response;
}
?>
