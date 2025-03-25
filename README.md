# Razorpay PHP Integration (Client-Side with Server-Side Order Creation)

This repository demonstrates a secure way to integrate Razorpay payments into a web application using PHP, HTML, and JavaScript. It emphasizes server-side order creation to protect your API keys and ensure data integrity.

**Key Improvements Over Direct Client-Side Integration:**

* **Secure API Key Handling:** Razorpay API keys are stored and used exclusively on the server, preventing client-side exposure.
* **Server-Side Order Creation:** Razorpay orders are generated on the server, ensuring data integrity and security.
* **Amount Validation:** The payment amount is validated on the server, preventing manipulation by users.
* **Improved Security:** By moving key logic to the server side, this approach significantly reduces security risks.

**Prerequisites:**

* A Razorpay account with API keys (Key ID and Key Secret).
* A PHP-enabled web server.
* Razorpay PHP SDK installed via composer.
* Basic knowledge of HTML, CSS, JavaScript, and PHP.

**Setup:**

1.  **Clone the Repository:**

    ```bash
    git clone [https://github.com/parmarkalpesh/razorpay-web-checkout.git](https://github.com/parmarkalpesh/razorpay-web-checkout.git)
    cd your-repository-name
    ```

2.  **Install Razorpay PHP SDK:**

    ```bash
    composer require razorpay/razorpay
    ```

3.  **Configure API Keys:**

    * In your server-side PHP files (where you handle order creation), replace `YOUR_RAZORPAY_KEY_ID` and `YOUR_RAZORPAY_KEY_SECRET` with your actual Razorpay API keys. **Never** expose your Key Secret in client-side code. Consider using enviroment variables.

4.  **Backend Order Creation:**

    * The provided php backend script, will create the order, and pass the order id, and amount to the html.
    * Ensure that the amount is validated and sanitized on the server before creating the Razorpay order.
    * The prefill data is also prepared by the php script, and passed to the html.

5.  **Client-Side Integration:**

    * The `index.php` contains the html form, and the javascript to initiate the razorpay payment.
    * The php script will pass the order id, and amount to the javascript.

6.  **Payment Verification (`done.php`):**

    * The `done.php` script handles the payment verification after the Razorpay callback.
    * It uses the Razorpay PHP SDK to verify the payment signature.
    * It checks the payment status and updates your database accordingly.
    * It displays a success or failure message to the user.

**Usage:**

1.  Open `index.php` in your web browser.
2.  Fill in the payment details.
3.  Click the "Pay with Razorpay" button.
4.  The Razorpay checkout form will appear.
5.  Enter your payment details and complete the transaction.
6.  The `done.php` script will handle the payment verification and display the result.

**Important Notes:**

* This example provides a secure foundation for Razorpay integration.
* Always handle payment verification on your backend server.
* Never expose your secret key.
* Refer to the official Razorpay documentation for advanced features and customization.
* Use enviroment variables for your keys.

**Contributing:**

Contributions are welcome! Please feel free to submit a pull request.

**License:**

[MIT](LICENSE) (Replace with your chosen license)
