<?php
  function ifactive($active) {
    if ($_GET['p'] == $active) {
    echo ' class=active-item'; }
  }
?>

<div class="logo">
<a href="index.html"><img class="u-max-full-width" src="logo.jpg" alt="amateur de tout 모든 것의 애호가"></a>
</div>

<div class="menu">
<ul>
  <li>
	projects by chances
    <ul>
      <li<?php ifactive('sin') ?>><a href="sin.html">a rapid sin</a></li>
      <li<?php ifactive('junk') ?>><a href="junk.html">pieces of junk</a></li>
      <li<?php ifactive('habitue') ?>><a href="habitue.html">habitué</a></li>
    </ul>
  </li>

  <li>
	documenting some unusual days
    <ul>
      <li<?php ifactive('190411') ?>><a href="190411.html">2019.04.11.</a></li>
    </ul>
  </li>
  <li>
        miscellaneous
    <ul>
      <li<?php if ($_GET['p'] == 'rand') { echo ' class=active-item'; } ?>><a href="rand.html">random</a></li>
      <li<?php if ($_GET['p'] == 'caglaz') { echo ' class=active-item'; } ?>><a href="https://www.instagram.com/caglaz.one/">caglaz.one(ig)</a></li>
    </ul>
  </li>
</ul>
</div>
