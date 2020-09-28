
<!-- Cabeçalho ------------------------------------------- -->
<? include_once "cabecalho.php"; ?>

<!-- Carrousel -------------------------------------------->

<section id="home">

<h2 style="text-align:center py-5">Slideshow Gallery</h2>

<div class="container py-5">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="imagens/img1g.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="imagens/img2g.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="imagens/img3g.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="imagens/img4g.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="imagens/img5g.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="imagens/img6g.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="imagens/img1p.jpg" style="width:100%" onclick="currentSlide(1)" alt="PROMOÇÕES">
    </div>
    <div class="column">
      <img class="demo cursor" src="imagens/img2p.jpg" style="width:100%" onclick="currentSlide(2)" alt="PROMOÇÕES">
    </div>
    <div class="column">
      <img class="demo cursor" src="imagens/img3p.jpg" style="width:100%" onclick="currentSlide(3)" alt="PROMOÇÕES">
    </div>
    <div class="column">
      <img class="demo cursor" src="imagens/img4p.jpg" style="width:100%" onclick="currentSlide(4)" alt="PROMOÇÕES">
    </div>
    <div class="column">
      <img class="demo cursor" src="imagens/img5p.jpg" style="width:100%" onclick="currentSlide(5)" alt="PROMOÇÕES">
    </div>    
    <div class="column">
      <img class="demo cursor" src="imagens/img6p.jpg" style="width:100%" onclick="currentSlide(6)" alt="PROMOÇÕES">
    </div>
  </div>
</div>
</section>



<script src="js/myScript.js"></script>

<!-- Rodapé ------------------------------------------- -->
<? include_once "rodape.php"; ?>

</body>

</html>