<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appareldnt.co <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="relative overflow-hidden mb-12">
        <div class="relative bg-cover bg-center h-96 transition-transform duration-500 hover:scale-105"
            style="background-image: url('<?= BASEURL; ?>/img/truekd15.jpeg');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="text-left text-white absolute left-8 top-1/2 transform -translate-y-1/2">
                <h2 class="text-5xl font-bold mb-4">Special Offer!</h2>
                <p class="text-lg mb-6">Get the best deals on our latest collection!</p>
                <a href="#specialoffer"
                    class="bg-white text-gray-900 font-bold py-2 px-4 rounded-md hover:bg-gray-300 transition-transform duration-300 transform hover:scale-105">
                    Shop Now
                </a>
            </div>
        </div>
    </div>

    <div class="relative py-12 bg-stone-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-6 relative z-10">
                <h1 class="text-8xl font-bold tracking-wide">PALERMO</h1>
                <p class="text-2xl mt-2">REWRITE THE CLASSICS</p>
                <button class="w-64 bg-black text-white py-3 hover:bg-gray-900 transition-colors">
                    REWRITE THE CLASSICS
                </button>
                <button class="w-64 bg-black text-white py-3 hover:bg-gray-900 transition-colors">
                    FOREVER PALERMO
                </button>
                <img src="<?= BASEURL; ?>/img/palermopuma.jpg" alt="Palermo Shoes Collection"
                    class="w-96 h-64 object-cover hover:scale-105 transition-transform duration-300 shadow-2xl rounded-xl">
            </div>
            <img src="<?= BASEURL; ?>/img/rosepumapalermo.jpg" alt="Model wearing Palermo"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300 shadow-2xl rounded-xl" />
        </div>
    </div>

    <div class="py-12 bg-gray-100" id="our-products">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Our Products</h1>
            <p class="text-lg text-gray-600">Discover our amazing collection just for you</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-8">
                <?php foreach ($data['items'] as $item): ?>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
                    data-aos="fade-up">
                    <img src="<?= BASEURL; ?>/img/products/<?= $item['image'] ?? 'default.jpg' ?>"
                        alt="<?= $item['nama'] ?? 'Product' ?>"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?= $item['nama'] ?? 'Product'; ?></h3>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-lg font-semibold text-gray-700"><?= $item['harga'] ?? '0'; ?></span>
                            <span class="text-sm text-gray-500">Stock: <?= $item['stock'] ?? '0'; ?></span>
                        </div>
                        <button onclick="showOverlay(['S', 'M', 'L', 'XL'])"
                            class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center space-x-2">
                            <ion-icon name="cart-outline" class="w-5 h-5"></ion-icon>
                            <span>Add to Cart</span>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-center gap-8 py-12" id="specialoffer">
            <div class="flex space-x-4" data-aos="fade-up">
                <img src="<?= BASEURL; ?>/img/curry12.jpg" alt="Kobe"
                    class="w-60 h-72 object-cover rounded-md shadow-lg">
                <img src="<?= BASEURL; ?>/img/curry.jpg" alt="Curry"
                    class="w-80 h-96 object-cover rounded-md shadow-lg">
            </div>
            <div class="text-center md:text-left">
                <p class="text-sm text-gray-500 uppercase">Special Offer</p>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Under Armour Curry 12</h2>
                <p class="text-xl font-semibold text-gray-400 line-through mb-1">Rp 2,759,000</p>
                <p class="text-2xl font-semibold text-green-600 mb-4">-20%</p>
                <p class="text-4xl font-semibold text-gray-800 mb-6">Get Only RP 2.207.200</p>
                <a href="#" class="bg-black text-white px-8 py-3 rounded-md hover:bg-gray-900 transition-colors">
                    Buy Now
                </a>
            </div>
        </div>
    </div>

    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out'
        });

        function smoothScroll(targetId) {
            document.getElementById(targetId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        document.querySelector('a[href="#specialoffer"]').addEventListener('click', function (event) {
            event.preventDefault();
            smoothScroll('specialoffer');
        });
    </script>
</body>

</html>