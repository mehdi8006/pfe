    
    <style>
      
        
        .container-wrapper {
            max-width: 100%;

            margin: 0 auto;
            position: relative;
            padding: 0 0px;
        }
        
        .container {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px 5px 20px 5px;
            gap: 20px;
            
            /* Hide scrollbar for all browsers */
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        
        /* Hide scrollbar for Chrome, Safari and Opera */
        .container::-webkit-scrollbar {
            display: none;
        }
        
        .card {
            flex: 0 0 auto;
            width: 280px; /* Fixed width for each card */
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            padding: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f8f8;
        }
        
        .seller {
            display: flex;
            align-items: center;
        }
        
        .seller-initial {
            width: 30px;
            height: 30px;
            background-color: #3498db;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            margin-right: 8px;
        }
        
        .seller-name {
            font-size: 14px;
            font-weight: 500;
        }
        
        .add-to-cart {
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 6px 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .add-to-cart:hover {
            background-color: orange;
            transform: translateY(-1px);
        }

        .card-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        
        .card-body {
            padding: 15px;
        }
        
        .product-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        
        .product-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            text-overflow: ellipsis;
        }
        
        .product-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 12px;
        }
        
        .price {
            display: flex;
            align-items: center;
            color: #e74c3c;
            font-weight: bold;
        }
        
        .location {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #7f8c8d;
        }
        
        .icon {
            margin-right: 5px;
        }
        
        /* Navigation arrows */
        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            color: #333;
            cursor: pointer;
            border: #333 solid 1px;
            z-index: 10;
            transition: background-color 0.3s;
        }
        
        .nav-arrow:hover {
            background-color: rgba(255, 255, 255, 1);
        }
        
        .arrow-left {
            left: 10px;
        }
        
        .arrow-right {
            right: 10px;
        }
        
        /* Section title */
        .section-title {
            margin-bottom: 20px;
            padding-left: 10px;
            color: #333;
            font-size: 22px;
            font-weight: 600;
        }
    </style>
    
    <div class="container-wrapper">
        <div class="nav-arrow arrow-left" onclick="scrollContainer('left')">
            <i class="fas fa-chevron-left"></i>
        </div>
        
        <div class="container" id="products-container">
            @props(['ads'])
           @foreach ($ads as $ad )
           <div class="card">
            <div class="card-header">
                <div class="seller">
                    <div class="seller-initial">A</div>
                    <span class="seller-name">Apple Store</span>
                </div>
                <button class="add-to-cart">
                    <i class="fas fa-shopping-cart"></i> Add
                </button>
            </div>
            <img src="{{ asset('images/a.jpg') }}" class="card-image" alt="Image 8" loading="lazy">
            <div class="card-body">
                <h3 class="product-title">{{ $ad->titre }}</h3>
                <p class="product-description">Latest iPhone with A16 Bionic chip, amazing camera and long battery life.</p>
                <div class="product-info">
                    <div class="price">
                        <i class="fas fa-tag icon"></i>
                       {{ $ad->prix}}
                    </div>
                    <div class="location">
                        <i class="fas fa-map-marker-alt icon"></i>
                      {{ $ad->localisation }}
                    </div>
                </div>
            </div>
        </div> 
           @endforeach <!-- Card 1 -->
            
            
          
          
            
            <!-- Card 4 -->
           
            
           
  </div>

        
        <div class="nav-arrow arrow-right" onclick="scrollContainer('right')">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>

    <script>
        function scrollContainer(direction) {
            const container = document.getElementById('products-container');
            const scrollAmount = 300;
            
            if (direction === 'left') {
                container.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            } else {
                container.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
        }
    </script>
