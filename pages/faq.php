<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | HyperMart</title>
    <link rel="shortcut icon" href="../public/images/icon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            yellow: '#FDB913',
                            orange: '#ff9900',
                            dark: '#1A1A1A',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="../index.php" class="flex items-center">
                    <img src="../public/images/logo.png" alt="HyperMart" class="h-10">
                </a>
                <a href="../index.php" class="text-gray-600 hover:text-brand-orange transition-colors">
                    Back to Home
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4 py-12">
        <div class="bg-white rounded-lg shadow-lg p-8 md:p-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-2 font-display">Frequently Asked Questions</h1>
            <p class="text-gray-500 mb-8">Last updated: February 2, 2026</p>

            <div class="space-y-6">
                <div class="border border-gray-200 rounded-lg p-5">
                    <h2 class="text-xl font-semibold text-gray-900">How do I place an order?</h2>
                    <p class="text-gray-700 mt-2">Browse products, add items to your cart, and proceed to checkout. You can check out as a guest or sign in for faster ordering.</p>
                </div>
                <div class="border border-gray-200 rounded-lg p-5">
                    <h2 class="text-xl font-semibold text-gray-900">What payment methods do you accept?</h2>
                    <p class="text-gray-700 mt-2">We accept major credit/debit cards, mobile wallets, and selected local payment options depending on your region.</p>
                </div>
                <div class="border border-gray-200 rounded-lg p-5">
                    <h2 class="text-xl font-semibold text-gray-900">How can I track my order?</h2>
                    <p class="text-gray-700 mt-2">Once shipped, you’ll receive a tracking link via email. You can also check your order status in your account.</p>
                </div>
                <div class="border border-gray-200 rounded-lg p-5">
                    <h2 class="text-xl font-semibold text-gray-900">What is your return policy?</h2>
                    <p class="text-gray-700 mt-2">Most items are eligible for return within 7–14 days, depending on the product category. See our Refund Policy for details.</p>
                </div>
                <div class="border border-gray-200 rounded-lg p-5">
                    <h2 class="text-xl font-semibold text-gray-900">How do I contact customer support?</h2>
                    <p class="text-gray-700 mt-2">Email support@hypermart.com or visit our Support page for live help and ticketing.</p>
                </div>
                <div class="border border-gray-200 rounded-lg p-5">
                    <h2 class="text-xl font-semibold text-gray-900">Can I change or cancel my order?</h2>
                    <p class="text-gray-700 mt-2">Orders can be changed or canceled within a short window after placing. Contact support as soon as possible.</p>
                </div>
            </div>

            <div class="mt-12 p-6 bg-orange-50 border-l-4 border-brand-orange rounded">
                <p class="text-sm text-gray-700">Need more help? Email us at <strong>support@hypermart.com</strong></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-8 mt-12">
        <p class="mb-2 text-gray-700">&copy; 2026 <strong>HyperMart</strong>. All rights reserved.</p>
        <div class="flex justify-center gap-4 text-sm text-gray-600">
            <a href="privacy-policy.php" class="text-brand-orange hover:underline">Privacy Policy</a>
            <span>|</span>
            <a href="terms-of-service.php" class="text-brand-orange hover:underline">Terms of Service</a>
            <span>|</span>
            <a href="refund-policy.php" class="text-brand-orange hover:underline">Refund Policy</a>
            <span>|</span>
            <a href="faq.php" class="text-brand-orange hover:underline">FAQ</a>
        </div>
    </footer>

</body>
</html>
