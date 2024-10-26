<div id="size-overlay" class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 sm:w-1/3">
        <h2 class="text-xl font-bold mb-4">Choose Size</h2>
        <div id="size-options" class="space-y-2">
        </div>
        <div class="flex justify-end mt-4">
            <button onclick="closeOverlay()" class="bg-red-600 text-white px-4 py-2 rounded-md">Close</button>
        </div>
    </div>
</div>

<script>
    function showOverlay(sizes) {
        const overlay = document.getElementById('size-overlay');
        const sizeOptions = document.getElementById('size-options');
        sizeOptions.innerHTML = ''; 

        sizes.forEach(size => {
            const sizeButton = document.createElement('button');
            sizeButton.innerText = size;
            sizeButton.className = 'border border-gray-300 rounded-md px-4 py-2 hover:bg-gray-200';
            sizeButton.onclick = () => {
                console.log(`Added size ${size} to cart`);
                closeOverlay(); 
            };
            sizeOptions.appendChild(sizeButton);
        });

        overlay.classList.remove('hidden');
    }

    function closeOverlay() {
        const overlay = document.getElementById('size-overlay');
        overlay.classList.add('hidden');
    }
</script>
