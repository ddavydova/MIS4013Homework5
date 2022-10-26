<?php include("header.php");?>
<?php include("links.php");?>

<audio src="https://www.soundjay.com/buttons/sounds/button-4.mp3" id="myAudio"></audio>
   <button onClick="playMyAudio()">Play Audio</button>
   <button onClick="pauseMyAudio()">Pause Audio</button>
   <p id="audioStatus">Click The Play Button</p>
   <script>
     function playMyAudio(){
       document.getElementById("myAudio").play();
      document.getElementById("audioStatus").innerHTML="Audio is Playing";	 
      
     }
     function pauseMyAudio(){
       document.getElementById("myAudio").pause();
      document.getElementById("audioStatus").innerHTML="Audio Paused";	
     }
   </script>

<?php include("footer.php");?>
