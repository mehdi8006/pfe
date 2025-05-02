<style>
    

    .scroll-container {
      width: 90%;
      height: 100vh;
      overflow: hidden;
      position: relative;
      display: flex;
      justify-content: space-evenly;
      padding: 0;
    }

    .image-track,
    .image-track1 {
      display: flex;
      flex-direction: column;
      width: 31%;
    }

    .image-track {
      animation: scrollUp 50s linear infinite alternate-reverse;
    }

    .image-track1 {
      animation: scrolldown 50s linear infinite alternate-reverse;
    }

    .image-track img,
    .image-track1 img {
      width: 100%;
      margin: 5px;
      height: auto;
      border-radius: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      object-fit: cover;
    }

    @keyframes scrollUp {
      0% { transform: translateY(0); }
      100% { transform: translateY(-300%); }
    }

    @keyframes scrolldown {
      0% { transform: translateY(-300%); }
      100% { transform: translateY(0); }
    }
  </style>


  <div class="scroll-container">
    <!-- Column 1 -->
    <div class="image-track">
        <img src="{{ asset('images/a.jpg') }}" alt="Image 8" loading="lazy">
        <img src="{{ asset('images/b.jpg') }}" alt="Image 9" loading="lazy">
        <img src="{{ asset('images/c.jpg') }}" alt="Image 10" loading="lazy">
        <img src="{{ asset('images/d.jpg') }}" alt="Image 11" loading="lazy">
        <img src="{{ asset('images/k.jpg') }}" alt="Image 5" loading="lazy">
        <img src="{{ asset('images/j.jpg') }}" alt="Image 6" loading="lazy">
        <img src="{{ asset('images/l.jpg') }}" alt="Image 7" loading="lazy">
        <img src="{{ asset('images/e.jpg') }}" alt="Image 1" loading="lazy">
        <img src="{{ asset('images/f.jpg') }}" alt="Image 2" loading="lazy">
        <img src="{{ asset('images/g.jpg') }}" alt="Image 3" loading="lazy">
        <img src="{{ asset('images/i.jpg') }}" alt="Image 4" loading="lazy">
    </div>

    <!-- Column 2 -->
    <div class="image-track1">
        <img src="{{ asset('images/e.jpg') }}" alt="Image 1" loading="lazy">
        <img src="{{ asset('images/f.jpg') }}" alt="Image 2" loading="lazy">
        <img src="{{ asset('images/g.jpg') }}" alt="Image 3" loading="lazy">
        <img src="{{ asset('images/i.jpg') }}" alt="Image 4" loading="lazy">
        <img src="{{ asset('images/k.jpg') }}" alt="Image 5" loading="lazy">
        <img src="{{ asset('images/j.jpg') }}" alt="Image 6" loading="lazy">
        <img src="{{ asset('images/l.jpg') }}" alt="Image 7" loading="lazy">
        <img src="{{ asset('images/a.jpg') }}" alt="Image 8" loading="lazy">
        <img src="{{ asset('images/b.jpg') }}" alt="Image 9" loading="lazy">
        <img src="{{ asset('images/c.jpg') }}" alt="Image 10" loading="lazy">
        <img src="{{ asset('images/d.jpg') }}" alt="Image 11" loading="lazy">
    </div>

    <!-- Column 3 -->
    <div class="image-track">
        <img src="{{ asset('images/k.jpg') }}" alt="Image 5" loading="lazy">
        <img src="{{ asset('images/j.jpg') }}" alt="Image 6" loading="lazy">
        <img src="{{ asset('images/l.jpg') }}" alt="Image 7" loading="lazy">
        <img src="{{ asset('images/a.jpg') }}" alt="Image 8" loading="lazy">
        <img src="{{ asset('images/b.jpg') }}" alt="Image 9" loading="lazy">
        <img src="{{ asset('images/c.jpg') }}" alt="Image 10" loading="lazy">
        <img src="{{ asset('images/d.jpg') }}" alt="Image 11" loading="lazy">
        <img src="{{ asset('images/e.jpg') }}" alt="Image 1" loading="lazy">
        <img src="{{ asset('images/f.jpg') }}" alt="Image 2" loading="lazy">
        <img src="{{ asset('images/g.jpg') }}" alt="Image 3" loading="lazy">
        <img src="{{ asset('images/i.jpg') }}" alt="Image 4" loading="lazy">
    </div>
  </div>
