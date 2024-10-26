<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - <?= $data['judul']; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="relative py-16 bg-gray-300">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?= BASEURL; ?>/img/aboutBackground2.jpg');"></div>

        <section class="relative bg-white shadow-2xl rounded-lg p-8 max-w-lg mx-auto text-center">
            <h1 class="text-3xl font-extrabold text-gray-900 mb-6">About Us</h1>
            <p class="text-gray-700 mb-4 leading-relaxed">
                Welcome to our website! We are dedicated to providing you with high-quality products and exceptional service. Our commitment to excellence is reflected in everything we do, from customer support to product selection.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Our team is here to assist you in finding exactly what you need. Thank you for choosing us, and we look forward to serving you!
            </p>
            <img src="<?= BASEURL; ?>/img/newlogo.jpg" alt="New Logo" class="block mx-auto h-44 mt-6">
        </section>
    </div>
</body>
</html>
