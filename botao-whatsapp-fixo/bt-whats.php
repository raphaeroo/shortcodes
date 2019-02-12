<?php 
$link['whats'] = "número aqui";
?>
<style>.bto-whats{padding:0.5em;width:60px;height:auto;right:5%;position:fixed;z-index:99999999;border-radius:100%;text-align:center;font-size:30px;background:#09ab58eb;box-shadow:1px 2px 12px #333;bottom:10%;color:white}.bto-whats:hover{bottom:12%;height:auto;background:white; color:#09ab58eb;}</style><a target="_blank" class="bto-whats" href="https://api.whatsapp.com/send?phone=55<?php echo $link['whats'];?>"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>