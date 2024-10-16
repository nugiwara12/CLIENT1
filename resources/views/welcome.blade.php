<div class="container mx-auto">
    <div class="flex">
        <!-- Carousel Section -->
        <div class="relative w-2/3">
            <div id="slideshow" class="overflow-hidden">
                <div class="slide transition-opacity duration-500 ease-in-out opacity-100">
                    <div class="bg-lightblue-100 p-4">
                        <img src="assets/images/img1.png" alt="FIRST IMAGE" class="w-full object-cover h-64">
                    </div>
                </div>
                <div class="slide transition-opacity duration-500 ease-in-out opacity-0">
                    <div class="bg-lightblue-100 p-4">
                        <img src="assets/images/slide.png" alt="SECOND IMAGE" class="w-full object-cover h-64">
                    </div>
                </div>
                <div class="slide transition-opacity duration-500 ease-in-out opacity-0">
                    <div class="bg-lightblue-100 p-4">
                        <img src="assets/images/slide.png" alt="THIRD IMAGE" class="w-full object-cover h-64">
                    </div>
                </div>
            </div>

            <!-- Next and Previous Buttons -->
            <button class="absolute left-2 top-1/2 transform -translate-y-1/2 text-white bg-gray-700 rounded-full p-2" onclick="plusSlides(-1)">&#10094;</button>
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white bg-gray-700 rounded-full p-2" onclick="plusSlides(1)">&#10095;</button>

            <!-- Dots Navigation -->
            <div class="flex justify-center space-x-2 mt-2">
                <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
                <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
                <div class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
            </div>
        </div>

        <!-- Promo Images Section -->
        <div class="w-1/3 flex flex-col justify-center">
            <div class="bg-lightblue-100 mb-2">
                <img src="assets/images/img3.png" alt="FIRST PROMO" class="w-full object-cover">
            </div>
            <div class="bg-lightblue-100">
                <img src="assets/images/img4.PNG" alt="SECOND PROMO" class="w-full object-cover">
            </div>
        </div>
    </div>

    {{-- Welcome Section --}}
    <div class="text-center mt-4">
        <div class="bg-gray-100 p-4 mx-auto w-3/4 lg:w-2/3">
            <h1 class="mb-3 text-4xl font-cursive">Welcome!</h1>
            <div class="text-lg text-black mb-3">
                Explore our collection of unique, handcrafted gifts made with love. Find something special <br>
                today and make every moment unforgettable! Happy shopping!
            </div>
            <div>
                <a href="" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition">Shop Now</a>
            </div>
        </div>
    </div>
</div>

<script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');

    function showSlides(n) {
        if (n >= slides.length) { slideIndex = 0; }
        if (n < 0) { slideIndex = slides.length - 1; }

        slides.forEach((slide, index) => {
            slide.classList.toggle('opacity-100', index === slideIndex);
            slide.classList.toggle('opacity-0', index !== slideIndex);
        });

        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-blue-500', index === slideIndex);
            dot.classList.toggle('bg-gray-400', index !== slideIndex);
        });
    }

    function plusSlides(n) {
        slideIndex += n;
        showSlides(slideIndex);
    }

    function currentSlide(n) {
        slideIndex = n - 1;
        showSlides(slideIndex);
    }

    // Initial slide display
    showSlides(slideIndex);
</script>
