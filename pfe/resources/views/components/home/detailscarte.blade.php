<style>
        
    .container4 {
        max-width: 1200px;
        margin: 0 auto;
      
    }
    a{
        text-decoration: none;
    }
    .product-detail4 {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    .product-top4 {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    @media (min-width: 768px) {
        .product-top4 {
            flex-direction: row;
        }
    }
    
    /* Gallery Section */
    .product-gallery4 {
        flex: 1;
        padding: 20px;
    }
    
    .main-image4 {
        width: 100%;
        height: 400px;
        border-radius: 8px;
        object-fit: cover;
    }
    
    .thumbnail-container4 {
        display: flex;
        gap: 10px;
        margin-top: 15px;
        overflow-x: auto;
    }
    
    .thumbnail4 {
        width: 80px;
        height: 80px;
        border-radius: 4px;
        object-fit: cover;
        cursor: pointer;
        border: 2px solid transparent;
        transition: border-color 0.2s;
    }
    
    .thumbnail4:hover {
        border-color: #3498db;
    }
    
    .thumbnail4.active {
        border-color: #3498db;
    }
    
    /* Info Section */
    .product-info4 {
        flex: 1;
        padding: 20px;
    }
    
    .product-title4 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #2c3e50;
    }
    
    .product-price4 {
        font-size: 28px;
        font-weight: bold;
        color: #e74c3c;
        margin-bottom: 15px;
    }
    
    .product-location4 {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        color: #7f8c8d;
    }
    
    .product-location4 i {
        margin-right: 8px;
    }
    
    .product-description4 {
        margin-bottom: 20px;
        line-height: 1.7;
    }
    
    .product-description4 h3 {
        margin-bottom: 10px;
        color: #2c3e50;
    }
    
    /* Seller Section */
    .seller-info4 {
        padding: 20px;
        border-top: 1px solid #eee;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .seller-avatar4 {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }
    
    .seller-details4 {
        flex: 1;
    }
    
    .seller-name4 {
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 5px;
    }
    
    .seller-rating4 {
        color: #f39c12;
        margin-bottom: 5px;
    }
    
    .seller-date4 {
        color: #7f8c8d;
        font-size: 14px;
    }
    
    .contact-button4 {
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    
    .contact-button4:hover {
        background-color: #2980b9;
    }
    
    /* Contact Options */
    .contact-options4 {
        display: none;
        margin-top: 10px;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 4px;
    }
    
    .contact-options4.active {
        display: block;
    }
    
    .contact-option4 {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 8px;
        border: none;
        border-radius: 4px;
        background-color: #3498db;
        color: white;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.2s;
    }
    
    .contact-option4:hover {
        background-color: #2980b9;
    }
    
    .save-button4 {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: white;
        color: #3498db;
        border: 1px solid #3498db;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        margin-left: 10px;
        transition: all 0.2s;
    }
    
    .save-button4:hover {
        background-color: #f0f7fc;
    }
    
    .actions4 {
        display: flex;
        margin-top: 20px;
    }
    
    /* Seller's other ads */
    .other-ads4 {
        padding: 20px;
        border-top: 1px solid #eee;
    }
    
    .other-ads4 h3 {
        margin-bottom: 15px;
        color: #2c3e50;
    }
    
    .ads-grid4 {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }
/*---------------------------------------------------------------*/
    
.product-card4 {
        width: 250px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        background-color: white;
        transition: transform 0.3s ease;
        flex: 0 0 auto;
    }
    
    .product-card4:hover {
        transform: translateY(-5px);
    }
    
    .card-header4 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px;
        background-color: #f8f8f8;
    }
    
    .seller4 {
        display: flex;
        align-items: center;
    }
    
    .seller-icon4 {
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
    .seller4 span{
        color:black;
       font-weight: 500;

    }
    .add-to-cart-icon4 {
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
    
    .add-to-cart-icon4:hover {
        background-color: blue;
    }
    
    .product-image4 {
        width: 100%;
        height: 200px;
        background-color: #f0f0f0;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    
    .product-image4 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .product-details4 {
        padding: 8px;
    }
    
    .product-title4 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }
    
    .price-location4 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }
    
    .location4 {
        display: flex;
        align-items: center;
        color: #777;
        font-size: 14px;
    }
    
    .location4 i {
        margin-right: 5px;
        color: #e74c3c;
    }
    
    .product-price4 {
        font-size: 18px;
        font-weight: bold;
        color: orange;
    }
    
    .publish-date4 {
        font-size: 12px;
        color: #777;
        text-align: right;
        padding: 5px;
        border-top: 1px solid #eee;
    }
   
    .product-price4 span {
        font-size: 13px;
        font-weight: bold;
        color: black;
    }
/*---------------------------------------------------------------*/

    .seller-avatar-letter4 {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: #3498db;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        font-weight: bold;
    }

    .add-to-cart-button4 {
        background-color: #27ae60;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        margin-left: 10px;
        transition: background-color 0.2s;
        display: flex;
        align-items: center;
    }
    
    .add-to-cart-button4:hover {
        background-color: #219653;
    }

    .add-to-cart-button4 i {
        margin-right: 8px;
    }
</style>
@props(['ads','ads1'])
    

<div class="container4">
    <div class="product-detail4">
        @foreach ($ads as $ad )
        

                    <div class="product-top4">
                        <div class="product-gallery4">
                            <img src="{{ asset($ad->images[0]->url) }}" alt="Image principale du produit" class="main-image4">
                            <div class="thumbnail-container4">
                                <img src="a.jpg" alt="Miniature 1" class="thumbnail4 active">
                                <img src="b.jpg" alt="Miniature 2" class="thumbnail4">
                                <img src="c.jpg" alt="Miniature 3" class="thumbnail4">
                                <img src="a.jpg" alt="Miniature 4" class="thumbnail4">
                            </div>
                        </div>
                        
                        <div class="product-info4">
                            <h1 class="product-title4">{{ $ad->titre }}</h1>
                            <div class="product-price4">{{ $ad->prix }}</div>
                            <div class="product-location4">
                                <i class="fas fa-map-marker-alt"></i>
                                {{ $ad->localisation }}
                            </div>
                            
                            <div class="product-description4">
                                <h3>Description</h3>
                                <p>{{ $ad->description}}</p>
                                
                            </div>
                            <div class="actions4">
                                <a href="#fff">
                                    <button class="contact-button4">
                                        <i class="fas fa-envelope"></i>
                                        Contacter le vendeur
                                    </button>
                                </a>
                                <a href="#ff">
                                    <button class="add-to-cart-button4">
                                        <i class="fas fa-shopping-cart"></i>
                                        Ajouter au panier
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="seller-info4">
                        <div class="seller-avatar-letter4">{{ strtoupper(substr($ad->utilisateur->nom, 0, 1) . substr(explode(' ', $ad->utilisateur->nom)[1] ?? '', 0, 1)) }}

                        </div>
                        <div class="seller-details4">
                            <div class="seller-name4">{{ $ad->utilisateur->nom }}</div>
                            <div class="seller-date4">Membre depuis {{ $ad->utilisateur->date_inscription }}</div>
                        </div>
                    </div>
        @endforeach
            <div class="other-ads4">
                <h3>Autres annonces de ce vendeur</h3>
                <div class="ads-grid4">
                <!-------------------->
                @foreach ($ads1 as $ad1 )
                <a href="{{  route('details', ['id' => $ad->id ])  }}" >

                                <div class="product-card4">
                                    <div class="card-header4">
                                        <div class="seller4">
                                            <div class="seller-icon4">{{ strtoupper(substr($ad1->utilisateur->nom, 0, 1) . substr(explode(' ', $ad1->utilisateur->nom)[1] ?? '', 0, 1)) }}</div>
                                            <span>{{ $ad1->utilisateur->nom }}</span>
                                        </div>
                                        <div class="add-to-cart-icon4" data-id="1">
                                            <i class="fas fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="product-image4">
                                        <img src="{{asset($ad1->images[0]->url)}}" alt="Running Shoes">
                                    </div>
                                    <div class="product-details4">
                                        <h3 class="product-title4">{{ $ad1->titre}}</h3>
                                        <div class="price-location4">
                                            <div class="location4">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>{{ $ad1->localisation}}</span>
                                            </div>
                                            <div class="product-price4">{{$ad1->prix}} <span>DH</span></div>
                                        </div>
                                    </div>
                                    <div class="publish-date4">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>{{ $ad1->date_publication }}</span>
                                    </div>
                                </div> </a>  
                @endforeach
                
               
               
                <!--------------------------->
            </div>
        </div>
    </div>
</div>

<script>
    // Correction du script pour utiliser les nouveaux noms de classes
    document.addEventListener('DOMContentLoaded', function() {
        // Script pour les options de contact (correction de l'ID)
        const contactBtn = document.querySelector('.contact-button4');
        if (contactBtn) {
            contactBtn.addEventListener('click', function() {
                const contactOptions = document.querySelector('.contact-options4');
                if (contactOptions) {
                    contactOptions.classList.toggle('active');
                }
            });
        }
        
        // Script pour changer l'image principale quand une miniature est cliquée
        const thumbnails = document.querySelectorAll('.thumbnail4');
        const mainImage = document.querySelector('.main-image4');
        
        if (thumbnails.length > 0 && mainImage) {
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    // Update main image
                    mainImage.src = this.src;
                    
                    // Update active thumbnail
                    thumbnails.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        }
    });
</script>