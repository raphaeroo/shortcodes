<?php 
$link['whats'] = "número";
?>
<style>.bto-whats{position: fixed;top: 85%;left: 3%;color: #FFF;font-size: 1.5em;display: block;padding: 14px 20px;text-align: center;border: none;border-radius: 50%;background: #01C854;cursor: pointer;z-index: 9999;box-shadow: 0 0 0 0 rgba(1, 200, 84, 0.5);-webkit-animation: pulse 1.5s infinite;}.bto-whats:hover{-webkit-animation: none;color: #FFF;}.bto-whats a {text-decoration: none;color: #FFF;}@-webkit-keyframes pulse {0%{ -moz-transform: scale(0.9);-ms-transform: scale(0.9);-webkit-transform: scale(0.9);transform: scale(0.9);}70%{-moz-transform: scale(1);-ms-transform: scale(1);-webkit-transform: scale(1);transform: scale(1);box-shadow: 0 0 0 20px rgba(1, 200, 84, 0);}100% {-moz-transform: scale(0.9);-ms-transform: scale(0.9);-webkit-transform: scale(0.9);transform: scale(0.9);box-shadow: 0 0 0 0 rgba(1, 200, 84, 0);}}</style>
	<a target="_blank" class="bto-whats" href="https://api.whatsapp.com/send?phone=55<?php echo $link['whats'];?>&text=Gostaria%20de%20um%20orçamento!"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>