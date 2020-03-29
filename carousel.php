<?php 
$p = null;
$dir = null;
$n = null;

function loaditems($p) {
  global $dir;
  global $p;
  global $n;
  
  $dir = "./items/".$p."/";
  $fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS); 
  $n = iterator_count($fi); }

 if (isset($_GET['p'])) {
    $p = $_GET['p'];
    loaditems($p);
    } else {
    $p = 'test';
    loaditems($p);
  }
?> 

<div class="carousel" id="slider"> 
  <div class="carousel-wrapper"> 
    
    <?php for ($i = 1; $i < $n-1; $i++) { ?>
    <div class="carousel-item"> 
      <a href="#" onClick="lightbox(<?php echo $i ?>)"><img src="<?php echo $dir.$i; ?>.jpg"></a>
    </div>
    <?php } ?>
  </div>
  <div class="navi-wrapper"></div>
</div>

<div class="notes"> 
  <h3 class="title"><?php include $dir.'title.t'; ?></h3>
  <h6 class="desc"><?php include $dir.'desc.t'; ?></h6>
</div>

<script src="./carousel.min.js" type="text/javascript"></script>

<script> new Carousel(document.querySelector('#slider'), { CarouselMotion: 'default', naviPosition: 'top', naviStyle: 'dot', autoMove: false, autoMoveTime: 2000 }); </script>

<script> window.onresize = function() { 
  new Carousel(document.querySelector('#slider'), { CarouselMotion: 'default', naviPosition: 'top', naviStyle: 'dot', autoMove: false, autoMoveTime: 2000 });
  console.log('resized'); }; </script>
  
<script>
  function lightbox(img) {
  document.getElementById("lightboximg").style.backgroundImage='url(<?php echo $dir; ?>'+img+'.jpg)';
  document.getElementById("lightbox").style.display='block';
  }
  function lightboxoff() {
  document.getElementById("lightbox").style.display='none';
  }
</script>

