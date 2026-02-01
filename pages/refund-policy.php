<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund Policy | HyperMart</title>
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
            <h1 class="text-4xl font-bold text-gray-900 mb-2 font-display">Refund Policy</h1>
            <p class="text-gray-500 mb-8">Last updated: February 2, 2026</p>

            <div class="prose prose-lg max-w-none text-gray-700 space-y-6">
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Overview</h2>
                    <p>We want you to love your purchase. If you’re not satisfied, you can request a return or refund within the timeframe stated below.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Return Window</h2>
                    <p>Most items are eligible for return within <strong>7–14 days</strong> of delivery, depending on the product category. Some items, such as perishables or personal care products, may be non-returnable for hygiene or safety reasons.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Eligibility</h2>
                    <p>To be eligible for a return, items must be unused, in original packaging, and include all tags/accessories. Proof of purchase is required.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Refund Processing</h2>
                    <p>Once your return is approved and received, refunds are processed to the original payment method within 5–10 business days. Shipping fees are non-refundable unless the return is due to an error on our part.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Exchanges</h2>
                    <p>We replace items only if they are defective or damaged. If you need an exchange for the same item, contact our support team.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">6. How to Start a Return</h2>
                    <p>Contact our support team at <strong>support@hypermart.com</strong> with your order number and reason for return. We will provide instructions and a return address if eligible.</p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Late or Missing Refunds</h2>
                    <p>If you haven’t received a refund after 10 business days, check your bank account again, then contact your card issuer. If you still need help, reach out to us.</p>
                </section>
            </div>

            <div class="mt-12 p-6 bg-orange-50 border-l-4 border-brand-orange rounded">
                <p class="text-sm text-gray-700">Questions about refunds? Email us at <strong>support@hypermart.com</strong></p>
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
