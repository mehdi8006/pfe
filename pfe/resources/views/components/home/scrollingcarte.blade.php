<style>
       
    .section-title1 {
            margin-top:50px;
            margin-left:8px;

            font-size: 20px;
            font-weight: bold;
            color: #000;
    }
    
    .scroll-container1 {

        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        gap: 16px;
        padding: 10px 0;
        margin-bottom: 10px;
    }
    
    /* Hide scrollbar for Chrome, Safari and Opera */
    .scroll-container1::-webkit-scrollbar {
        display: none;
    }
    
    /* Hide scrollbar for IE, Edge and Firefox */
    .scroll-container1 {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
    
    /* Product Card Styles */
    .product-card1 {
        min-width: 280px;
        height: 360px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        background-color: white;
        transition: transform 0.3s ease;
        flex-shrink: 0;
        cursor: pointer;
    }
    
    .product-card1:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    
    .card-header1 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px;
        background-color: #ffffff;
    }
    
    .seller1 {
        display: flex;
        align-items: center;
    }
    .seller1 span{
        color:black;
       
        font-weight: 500;
    }
    
    .seller-icon1 {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background-color: #3498db;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 5px;
        font-weight: bold;
    }
    
    .add-to-cart-icon1 {
        background-color: orange;
        color: white;
        width: 50px;
        height: 30px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .add-to-cart-icon1:hover {
        background-color: blue;
    }
    
    .product-image1 {
        width: 100%;
        height: 200px;
        background-color: #f0f0f0;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    
    .product-image1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .product-details1 {
        padding: 8px;
    }
    
    .product-title1 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }
    
    .price-location1 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 5px;
    }
    
    .location1 {
        display: flex;
        align-items: center;
        color: #777;
        font-size: 14px;
    }
    
    .location1 i {
        margin-right: 5px;
        color: #e74c3c;
    }
    a{
        text-decoration:none;
    }
    .product-price1 {
        font-size: 18px;
        font-weight: bold;
        color: orange;
    }
    
    .publish-date1 {
        font-size: 12px;
        color: #777;
        text-align: right;
        padding: 5px;
        border-top: 1px solid #eee;
    }
   
    .product-price1 span {
        font-size: 13px;
        font-weight: bold;
        color: black;
    }
</style>
@props(['ads','titre'])
<div class="section-title1">{{ $titre }}</div>

<div class="scroll-container1" id="card-container">
    <!-- Product Card 1 -->
    @foreach ($ads as $ad )
        
    <a href="{{  route('details', ['id' => $ad->id])  }}" >

    <div class="product-card1">
        <div class="card-header1">
            <div class="seller1">
                <div class="seller-icon1">{{ strtoupper(substr($ad->utilisateur->nom, 0, 1) . substr(explode(' ', $ad->utilisateur->nom)[1] ?? '', 0, 1)) }}</div>
                <span>{{ $ad->utilisateur->nom }}</span>
            </div>
            <div class="add-to-cart-icon1">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
        
        <div class="product-image1">
           
                
            
            
            <img src="{{  asset($ad->images[0]->url) }}" alt="Running Shoes">

           
        </div>
        
        <div class="product-details1">
            <h3 class="product-title1">{{ $ad->titre }}</h3>
            
            <div class="price-location1">
                <div class="location1">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>{{ $ad->localisation }}</span>
                </div>
                <div class="product-price1">{{ $ad->prix }} <span>DH</span></div>
            </div>
        </div>
        
        <div class="publish-date1">
            <i class="far fa-calendar-alt"></i>
            <span>April 25, 2025</span>
        </div>
    </div>
    </a>
    @endforeach
    
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Scroll container navigation
        const container = document.getElementById('card-container');
       
        });
        
        // Add to cart functionality
        const addToCartButtons = document.querySelectorAll('.add-to-cart-icon1');
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent card click when clicking on cart icon
                const productTitle = this.closest('.product-card1').querySelector('.product-title1').textContent;
                alert(`${productTitle} added to cart!`);
            });
        });
        
       
        
    
</script>