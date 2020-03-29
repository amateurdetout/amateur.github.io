<div #id="randwrapper" class=u-max-full-width>
<span id="randtop" class="row"><span id="randnum" class="u-pull-left"></span> <span class="u-pull-right"><a id="linktoimg" href="">link to this page</a></span></span>
<a onclick="lightbox()" href="#" onClick=""><img class="u-full-width" id="randimg"></a>
<h6 id="randdesc"></h6>
</div>
<script>
var path = 'items/rand/';
var numf = 6;
var r = Math.floor(Math.random()*numf)

function readDescRead(file)
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                document.getElementById('randdesc').innerHTML = rawFile.responseText
            }
        }
    }
    rawFile.send(null);
}

function sncheck(param) { 
  var returnValue; 
  var url = location.href; 
  var parameters = (url.slice(url.indexOf('?') + 1, url.length)).split('&'); 
  for (var i = 0; i < parameters.length; i++) { 
    var varName = parameters[i].split('=')[0]; 
    if (varName.toUpperCase() == param.toUpperCase()) { returnValue = parameters[i].split('=')[1]; 
    return decodeURIComponent(returnValue); } 
    } 
  };

var sn = sncheck('n')
sn *= 1

if (Number.isInteger(sn) && sn >= 0 && sn <= numf) { r = sn; }

document.getElementById('randnum').innerHTML=r+"/"+numf;
document.getElementById('linktoimg').href="http://adtout.github.io/rand.html?n="+r;
document.getElementById('randimg').src=path+r+'.jpg';
readDescRead(path+r+'.t');

function lightbox() {
  document.getElementById("lightboximg").style.backgroundImage='url(items/rand/'+r+'.jpg)';
  document.getElementById("lightbox").style.display='block';
  }
  function lightboxoff() {
  document.getElementById("lightbox").style.display='none';
  }
  
</script>

