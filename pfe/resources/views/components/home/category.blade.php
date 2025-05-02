<style>
    .category-container3 {
        display: flex;
        overflow-x: auto;
        gap: 12px;
        max-width: 100%;
        margin: 15px auto;
        padding: 5px 0;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE and Edge */
    }
    
    .category-container3::-webkit-scrollbar {
        display: none; /* Chrome, Safari, Opera */
    }
    
    .category-card3 {
        display: flex;
        align-items: center;
        width: 150px;
        height: 40px;
        border-radius: 12px;
        text-decoration: none;
        color: #333;
        font-weight: 600;
        font-size: 16px;
        padding: 0 10px;
        transition: transform 0.2s;
        flex-shrink: 0;
    }
    
    .category-card3:hover {
        transform: translateY(-2px);
        border: solid 1px rgb(0, 0, 0);
    }
    
    .immobilier3 {
        background-color: #e8f4ff;
    }
    
    .vehicules3 {
        background-color: #ffe8e8;
    }
    
    .electronique3 {
        background-color: #e8ffea;
    }
    
    .maison3 {
        background-color: #f8e8ff;
    }
    
    .vetements3 {
        background-color: #fff8e8;
    }
    
    .animaux3 {
        background-color: #e8fff8;
    }
    
    .sport3 {
        background-color: #ffe8f8;
    }
    
    .autres3 {
        background-color: #f0f0f0;
    }
    
    .category-icon3 {
        font-size: 24px;
        margin-right: 12px;
    }
    
    .immobilier3 .category-icon3 {
        color: #1a85ff;
    }
    
    .vehicules3 .category-icon3 {
        color: #ff5252;
    }
    
    .electronique3 .category-icon3 {
        color: #4caf50;
    }
    
    .maison3 .category-icon3 {
        color: #9c27b0;
    }
    
    .vetements3 .category-icon3 {
        color: #ff9800;
    }
    
    .animaux3 .category-icon3 {
        color: #00bcd4;
    }
    
    .sport3 .category-icon3 {
        color: #e91e63;
    }
    
    .autres3 .category-icon3 {
        color: #607d8b;
    }
    
    .cat3 {
        margin: 8px;
        font-size: 20px;
        font-weight: bold;
        color: #000;
    }
</style>

<div class="cat3">Top catégories</div>
<div class="category-container3">
    <a href="{{  route('category', ['category' => 'immobilier'])  }}" class="category-card3 immobilier3">
        <i class="fas fa-home category-icon3"></i>
        <span>Immobilier</span>
    </a>
    
    <a href="{{  route('category', ['category' => 'vehicules'])  }}" class="category-card3 vehicules3">
        <i class="fas fa-car category-icon3"></i>
        <span>Véhicules</span>
    </a>
    
    <a href="{{  route('category', ['category' => 'electronique'])  }}" class="category-card3 electronique3">
        <i class="fas fa-laptop category-icon3"></i>
        <span>Électronique</span>
    </a>
    
    <a href="{{  route('category', ['category' => 'maison'])  }}" class="category-card3 maison3">
        <i class="fas fa-couch category-icon3"></i>
        <span>Maison</span>
    </a>
    
    <a href="{{  route('category', ['category' => 'vetements'])  }}" class="category-card3 vetements3">
        <i class="fas fa-tshirt category-icon3"></i>
        <span>Vêtements</span>
    </a>
    
    <a href="{{  route('category', ['category' => 'animaux'])  }}" class="category-card3 animaux3">
        <i class="fas fa-paw category-icon3"></i>
        <span>Animaux</span>
    </a>
    
    <a href="{{  route('category', ['category' => 'sport'])  }}" class="category-card3 sport3">
        <i class="fas fa-futbol category-icon3"></i>
        <span>Sport</span>
    </a>
    
    <a href="{{  route('category', ['category' => 'autres'])  }}" class="category-card3 autres3">
        <i class="fas fa-ellipsis-h category-icon3"></i>
        <span>Autres</span>
    </a>
</div>