<?php include("header.php");?>
<?php include("links.php");?>
 
<body>   
    <center>  
    <h2> Example: Beep a sound </h2>  
    <h4> Press the Button to beep a sound </h4>   
  
    <!-- Use audio tab to provide an id to sound for further using it in JavaScript code -->  
    <audio id="beepAudio" >   
    <!-- Provide a link of beep sound from internet -->  
    <source src= "https://www.soundjay.com/button/sounds/beep-01a.mp3">   
    </audio>   
    <button onclick="beepSound()"> Click to beep </button>   
  
    <script>   
           //user-defined function to play a beep sound  
    var audio = document.getElementById(' beepAudio');   
    function beepSound () {   
        audio.play()   
    }   
    </script>   
    </center>  
</body>   

<?php include("footer.php");?>
