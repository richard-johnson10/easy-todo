
		<style>
			body {
				background-color: black;
				margin:0px;
				color:#CCCCCC;
				font-family:arial;
			}
			
			.netplay-button{
				display:inline-block;
				color:lightblue;
				font-weight:bold;
			}
		</style>

		<div style='display: flex; '>
			<div style='width:1240px; height:560px; max-width:100%; flex: auto;'>
				<div id='game'></div>
			</div>
		</div>
		
		<div id='messages'></div>
		
		<script type='text/javascript' src='https://www.vizzed.com/jquery-1.11.3.min.js'></script>

		<script type='text/javascript'>

			EJS_player = '#game';
			
			EJS_core = 'arcade';
			
			
			EJS_biosUrl = 'https://vizzed.net/bios/arcade.7z';
			EJS_gameUrl = "https://www.vizzed.com/videogames/mame/files/sfiii3n.zip";
			EJS_pathtodata = 'data/';
			EJS_gameName = "Street Fighter III 3rd Strike: Fight for the Future (Japan 990608, NO CD)";
			
			
			
			

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			EJS_gameID = 60621;
			
			
			
					EJS_netplayUrl = 'http://vizzed.net:3007/'; 
					EJS_oldCores = true;
				
			
			
			function simulateMouseEVent(type, elem) {
			  elem.dispatchEvent(new MouseEvent(type, {
				view: window,
				bubbles: true,
				cancelable: true
			  }));
			  return elem; // make it chainable
			}
	
			$( document ).ready(function() {	
				setTimeout(
				  function() {
					simulateMouseEVent('click', document.getElementsByClassName('ejs--73f9b4e94a7a1fe74e11107d5ab2ef')[0]);
				}, 10000);
				
				

			});

			
			
		</script>

		<script src='data/loader.js'></script>
		
		
	