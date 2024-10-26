<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appareldnt.co <?= $data['judul']; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/newlogo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <nav class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div class="flex items-center space-x-2">
                <span class="text-xl font-bold ml-8">Appareldnt.co</span>
            </div>

            <div class="flex items-center justify-center space-x-6 ml-12">
                <a href="<?= BASEURL; ?>" class="text-gray-700 font-semibold hover:text-yellow-500">Home</a>
                <?php if ($data['judul'] !== 'About Us') : ?>
                    <a href="#our-products" class="text-gray-700 font-semibold hover:text-yellow-500">Our Products</a>
                <?php endif; ?>
                <a href="<?= BASEURL; ?>/about" class="text-gray-700 font-semibold hover:text-yellow-500">About Us</a>
            </div>

            <div class="flex items-center space-x-6 mr-8">
                <div class="text-center">
                    <div class="text-lg font-bold">851-5686-0405</div>
                    <div class="text-sm text-gray-500">Support 24/7</div>
                </div>

                <a href="#" class="relative text-gray-700">
                    <ion-icon name="cart-outline" class="text-2xl"></ion-icon>
                </a>
            </div>
        </div>
    </nav>

    <script>
        function smoothScroll(target) {
            const element = document.getElementById(target);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        document.querySelector('a[href="#our-products"]').addEventListener('click', function (event) {
            event.preventDefault();
            smoothScroll('our-products');
        });
    </script>

</body>

</html>
