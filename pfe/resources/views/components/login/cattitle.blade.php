<style>
.category-title {
display: flex;
justify-self: center;
width:98%;
padding: 10px 15px;
border-top: 2px solid orange;
border-left: 1px solid orange;
border-right: 1px solid orange;

border-radius: 10px;
}

.category-title h4 {
  margin: 0;
  font-size: 20px;
  font-weight: 500;
  color: #000000;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
  </style>
  @props(['title'])
  <div class="category-title">
    <h4>{{ $title }}</h4>
  </div>