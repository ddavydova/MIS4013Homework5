<?php include("header.php");?>
<?php include("links.php");?>

<style>  
#myContainer {  
  width: 350px;  
  height: 350px;  
  position: center;  
  background: green;  
}  
#myAnimation {  
  width: 45px;  
  height: 45px;  
  position: absolute;  
  background-color: rgb(226, 43, 43);  
}  
</style>  

<p>  
<button onclick="myMove()">Click Here</button>   
</p>  
<div id ="myContainer">  
<div id ="myAnimation"></div>  
</div>  
<script>  
var id = null;  
function myMove() {  
  var elem = document.getElementById("myAnimation");     
  var pos = 0;  
  clearInterval(id);  
  id = setInterval(frame, 10);  
  function frame() {  
    if (pos == 300) {  
      clearInterval(id);  
    } else {  
      pos++;   
      elem.style.top = pos + 'px';   
      elem.style.left = pos + 'px';   
    }  
  }  
}  
</script>    

<?php include("footer.php");?>
