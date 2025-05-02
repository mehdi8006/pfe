<style>
   .container2 {
    max-width: 1200px;
    margin: 0 auto;
}

.product-grid2 {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.product-card2 {
    width: calc(25% - 15px); /* Set to 25% for 4 cards per row */
    min-width: 280px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    background-color: white;
    transition: transform 0.3s ease;
    flex: 0 0 auto;
}

.product-card2:hover {
    transform: translateY(-5px);
}

.card-header2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px;
    background-color: white;
}

.seller2 {
    display: flex;
    align-items: center;
}
.seller2 span{
        color:black;
       
        font-weight: 500;
    }
.seller-icon2 {
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

.add-to-cart-icon2 {
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

.add-to-cart-icon2:hover {
    background-color: blue;
}

.product-image2 {
    width: 100%;
    height: 200px;
    background-color: #f0f0f0;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.product-image2 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-details2 {
    padding: 8px;
}

.product-title2 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 8px;
    color: #333;
}

.price-location2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.location2 {
    display: flex;
    align-items: center;
    color: #777;
    font-size: 14px;
}

.location2 i {
    margin-right: 5px;
    color: #e74c3c;
}

.product-price2 {
    font-size: 18px;
    font-weight: bold;
    color: orange;
}

.product-price2 span {
    font-size: 13px;
    font-weight: bold;
    color: black;
}

.publish-date2 {
    font-size: 12px;
    color: #777;
    text-align: right;
    padding: 5px;
    border-top: 1px solid #eee;
}

/* Filter Styles */
.filter-container {
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 25px;
}

.filter-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #333;
    display: flex;
    align-items: center;
}

.filter-title i {
    margin-right: 8px;
    color: #2563eb;
}

.filter-row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 15px;
}

.filter-group {
    flex: 1;
    min-width: 200px;
}

.filter-label {
    display: block;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 6px;
    color: #555;
}

.filter-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.filter-input:focus {
    outline: none;
    border-color: #3498db;
}

.price-range {
    display: flex;
    gap: 10px;
}

.price-range .filter-group {
    flex: 1;
}

.filter-select {
    width: 100%;
    padding: 10px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 14px;
    transition: border-color 0.3s;
    background-color: white;
}

.filter-select:focus {
    outline: none;
    border-color: #3498db;
}

.filter-button {
    background-color: #2563eb;
    color: white;
    border: none;
    border-radius: 8px;
    padding: 12px 20px;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    display: flex;
    align-items: center;
    gap: 8px;
}

.filter-button:hover {
    background-color: #1d4ed8;
    transform: translateY(-2px);
}

.filter-button i {
    font-size: 16px;
}

.reset-button {
    background-color: #e5e7eb;
    color: #4b5563;
}

.reset-button:hover {
    background-color: #d1d5db;
}

.actions-row {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 10px;
}

/* Responsive styles - modified to have max 4 cards per row */
@media (min-width: 992px) {
    /* 4 cards per row on large screens */
    .product-card2 {
        width: calc(25% - 15px);
    }
}

@media (max-width: 991px) and (min-width: 768px) {
    /* 3 cards per row on medium screens */
    .product-card2 {
        width: calc(33.33% - 14px);
    }
}

@media (max-width: 767px) and (min-width: 576px) {
    /* 2 cards per row on small screens */
    .product-card2 {
        width: calc(50% - 10px);
    }
}

@media (max-width: 575px) {
    /* 1 card per row on very small screens */
    .product-card2 {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 768px) {
    .filter-row {
        flex-direction: column;
        gap: 10px;
    }
    
    .price-range {
        flex-direction: column;
        gap: 10px;
    }
}
</style>
@props(['ads'])
<div class="container2">
    <!-- Filter Section -->
    <form action="{{ request()->url() }}" method="GET" class="filter-container">
        <div class="filter-title">
            <i class="fas fa-filter"></i> Filtrer les annonces
        </div>
        
        <div class="filter-row">
            <div class="filter-group">
                <label class="filter-label">Trier par</label>
                <select name="sort" class="filter-select">
                    <option value="recent" {{ request('sort') == 'recent' ? 'selected' : '' }}>Plus récent</option>
                    <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Prix: plus élevé</option>
                    <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Prix: moins élevé</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label class="filter-label">Localisation</label>
                <select name="location" class="filter-select">
                    <option value="">Toutes les localisations</option>
                    @foreach(Annonce::select('localisation')->distinct()->pluck('localisation') as $location)
                        <option value="{{ $location }}" {{ request('location') == $location ? 'selected' : '' }}>
                            {{ $location }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="filter-row">
            <div class="filter-group">
                <label class="filter-label">Prix</label>
                <div class="price-range">
                    <div class="filter-group">
                        <input type="number" name="min_price" placeholder="Min" class="filter-input" value="{{ request('min_price') }}">
                    </div>
                    <div class="filter-group">
                        <input type="number" name="max_price" placeholder="Max" class="filter-input" value="{{ request('max_price') }}">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="actions-row">
            <a href="{{ request()->url() }}" class="filter-button reset-button">
                <i class="fas fa-undo"></i>
                Réinitialiser
            </a>
            <button type="submit" class="filter-button">
                <i class="fas fa-search"></i>
                Appliquer
            </button>
        </div>
    </form>

    <div class="product-grid2">
        <!-- Product Card 1 -->
        @foreach ($ads as $ad)
            
           <a href="{{  route('details', ['id' => $ad->id ])  }}" >

        <div class="product-card2">
            <div class="card-header2">
                <div class="seller2">
                    <div class="seller-icon2">{{ strtoupper(substr($ad->utilisateur->nom, 0, 1) . substr(explode(' ', $ad->utilisateur->nom)[1] ?? '', 0, 1)) }}</div>
                    <span>{{ $ad->utilisateur->nom }}</span>
                </div>
                <div class="add-to-cart-icon2" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
            <div class="product-image2">
                
                <img src="{{  asset($ad->images[0]->url) }}" alt="Running Shoes">
    
             
            </div>
            <div class="product-details2">
                <h3 class="product-title2">{{ $ad->titre }}</h3>
                <div class="price-location2">
                    <div class="location2">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{ $ad->localisation }}</span>
                    </div>
                    <div class="product-price2">{{ $ad->prix }}<span>DH</span></div>
                </div>
            </div>
            <div class="publish-date2">
                <i class="far fa-calendar-alt"></i>
                <span>{{ $ad->date_publication}}</span>
            </div>
        </div></a>
        @endforeach
        <!-------------------------------------------------------------->
        
    </div>
</div>