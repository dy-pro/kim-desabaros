<div class="row margin-b80" id="search-results">
    @foreach ($products as $product)
    <div class="col-md-6 col-lg-3 margin-b50">
        <div class="portfolio-grid-container portfolio-grid-container-v2">
            <div id="product-container" class="portfolio-grid portfolio-grid-v2 portfolio-layout-masonry d-flex flex-wrap">
                <div class="width-100 {{ strtolower($product->category_title) }} flex-item">
                    @php
                        $product->price = number_format($product->price, 0, ',', '.');
                    @endphp
                        <div class="card">
                            <div class="card-header p-0">
                                <a href="/product">
                                    <img class="product-image w-100 radius10-top" src="{{ asset('products/'.$product->product_image)}}" alt="{{ $product->name }}" />
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title margin-b10">{{ $product->product_name }}</h5>
                                <div class="card-text team-position">Rp. {{ $product->price }}</div>
                                <div class="d-flex justify-content-center align-items-center mt-3 gap-3">
                                    <input type="tel" class="form-control phone" hidden data-product-id="{{ $product->id }}" value="{{ $product->whatsapp }}" style="padding: .375rem .75rem"/>
                                    
                                    <div class="quantity-container">
                                        <button class="quantity-btn minus">-</button>
                                        {{-- <div class="quantity"> --}}
                                            <input type="number" class="quantity" data-product-id="{{ $product->id }}" step="1" min="1" max="" value="1" placeholder="" readonly/>
                                        {{-- </div> --}}
                                        <button class="quantity-btn plus">+</button>
                                    </div>
                                    
                                    <a class="btn btn-primary whatsappButton buy-button" href="#" data-product-id="{{ $product->id }}" target="_blank">Beli</a>
                                </div>
                            </div>                                    
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
    	document.addEventListener('DOMContentLoaded', function() {
            var elements = document.querySelectorAll('.fade-in-up, .slide-in-left, .slide-in-right');

            function checkVisibility() {
                elements.forEach(function(element) {
                    if (element.getBoundingClientRect().top < window.innerHeight && element.getBoundingClientRect().bottom >= 0) {
                        element.classList.add('visible');
                    }
                });
            }

            window.addEventListener('scroll', checkVisibility);
            window.addEventListener('resize', checkVisibility);
            checkVisibility();
        });

		document.querySelectorAll('.quantity-container').forEach(container => {
    const input = container.querySelector('.quantity');
    const minusBtn = container.querySelector('.minus');
    const plusBtn = container.querySelector('.plus');

    minusBtn.addEventListener('click', () => {
        if (input.value > 1) {
            input.value = parseInt(input.value) - 1;
        }
    });

    plusBtn.addEventListener('click', () => {
        input.value = parseInt(input.value) + 1;
    });
});

document.querySelectorAll('.whatsappButton').forEach(function(button) {
    	button.onclick = function(e) {
        var productId = this.getAttribute('data-product-id');
        var productCard = this.closest('.card');
        var quantity = productCard.querySelector(`.quantity[data-product-id='${productId}']`).value;
        var productName = productCard.querySelector('.card-title').textContent;
        var phone = productCard.querySelector(`.phone[data-product-id='${productId}']`).value;
        var message = `Hallo, Saya ingin pesan:\n\nNama Produk     : ${productName}\nJumlah dipesan : ${quantity}\n\nTerimakasih!`;

        var whatsappURL = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
        this.href = whatsappURL;
    };
	});
</script>