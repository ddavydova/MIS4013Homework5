<?php include("header.php");?>
<?php include("links.php");?>


    <script src =  
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  
    </script>  
<link rel = "stylesheet" href =  
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />  
    <style>  
    body {  
  color: #fff;  
  font-family: 'Raleway';  
  font-size: 1.6rem;  
  font-weight: 700;  
  letter-spacing: 1px;  
  height: 100vh;  
  margin: 0;  
  text-transform: uppercase;  
}  
.gradient-background {  
  background: linear-gradient(100deg,#200c32,#e74d89,#febaa6);  
  background-size: 180% 180%;  
  animation: gradient-animation 9s ease infinite;  
}  
@keyframes gradient-animation {  
  0% {  
    background-position: 0% 50%;  
  }  
  50% {  
    background-position: 100% 50%;  
  }  
  100% {  
    background-position: 0% 50%;  
  }  
}  
        .navbar {  
            position: fixed;  
            left: 0px;  
            top: 160px;  
            height: auto;  
            width: 100%;  
            background: #338773;  
        }  
  
        .navbar ul {  
            display: flex;  
            list-style-type: none;  
            margin-block-start: 1em;  
            margin-block-end: 1em;  
            margin-inline-start: 0px;  
            margin-inline-end: 0px;  
            padding-inline-start: 0px;  
            margin-bottom: 0px;  
            padding-left: 40px;  
        }  
        .navbar ul li {  
            display: inline;  
            list-style: none;  
            padding-left: 30px;  
            padding-right: 30px;  
            padding-top: 10px;  
            padding-bottom: 10px;  
            font-size: 1rem;  
            border-radius: 20px 20px 0px 0px;  
            position: relative;  
        }  
        .navbar ul li.active {  
            background: #fff;  
        }  
        .navbar ul li a {  
            text-decoration: none;  
             font-family: 'Bangers', cursive;  
            color: #22201f;  
        }  
    .navbar ul li.active a {  
            color: #22201f;  
        }  
        .navbar ul li b.left-curve {  
            position: absolute;  
            bottom: 0px;  
            left: -20px;  
            height: 100%;  
            width: 20px;  
            background: #fff;  
            display: none;  
        }  
        .navbar ul li b.left-curve::before {  
            content: " ";  
            top: 0;  
            left: 0;  
            position: absolute;  
            width: 100%;  
            height: 100%;  
            border-bottom-right-radius: 20px;  
            background: #338773;  
        }  
h3 {  
  text-align: center;  
  font-weight: bold;  
  color: #fff;  
  text-transform: uppercase;  
  font-size: 1em;  
  white-space: nowrap;  
  font-size: 1vw;  
  z-index: 1000;  
  font-family: 'Bangers', cursive;  
  text-shadow: 5px 5px 0 rgba(0, 0, 0, 0.7);  
  @include skew(0, -6.7deg, false);  
  @include transition-property(font-size);  
  @include transition-duration(0.5s);   
}  
h2 {  
  text-align: center;  
  font-weight: bold;  
  color: #fff;  
  text-transform: uppercase;  
  font-size: 1.2em;  
  white-space: nowrap;  
  font-size: 3vw;  
  z-index: 1000;  
  font-family: 'Bangers', cursive;  
  text-shadow: 5px 5px 0 rgba(0, 0, 0, 0.7);  
  @include skew(0, -6.7deg, false);  
  @include transition-property(font-size);  
  @include transition-duration(0.5s);  
}  
        .navbar ul li b.right-curve {  
            position: absolute;  
            right: -20px;  
            top: 0px;  
            height: 100%;  
            width: 20px;  
            background: #fff;  
            display: none;  
        }  
  
        .navbar ul li b.right-curve::before {  
            content: " ";  
            right: 0;  
            position: absolute;  
            width: 100%;  
            top: 0;  
            height: 100%;  
            border-bottom-left-radius: 20px;  
            background: #338773;  
        }  
        .navbar ul li.active b.left-curve {  
            display: block;  
        }  
            .navbar ul li.active b.right-curve {  
            display: block;  
        }  
    </style>  


  <h2> Example </h2>  
  <h3> How to make curved active tab in navigation menu using HTML CSS & JavaScript? </h3>      
<br />  
<br />  
    <div class = "navbar">  
        <ul>  
            <li class = "list-item">  
                <b class = "left-curve"> </b>  
                <b class = "right-curve"> </b>  
                <a>  
                    <i class = "fa fa-home"> </i>  
                    Home  
                </a>  
            </li>  
            <li class = "list-item">  
                <b class = "left-curve"> </b>  
                <b class = "right-curve"> </b>  
                <a>  
                    <i class = "fa fa-book"> </i>  
                    Courses  
                </a>  
            </li>  
            <li class = "list-item">  
                <b class = "left-curve"> </b>  
                <b class = "right-curve"> </b>  
                <a>  
                    <i class = "fa fa-image"> </i>  
            Gallery  
                </a>  
            </li>  
            <li class = "list-item">  
                <b class = "left-curve"> </b>  
                <b class = "right-curve"> </b>  
                <a>  
                    <i class = "fa fa-user"> </i>  
                Profile  
                </a>  
            </li>  
            <li class = "list-item active">  
                <b class = "left-curve"> </b>  
                <b class = "right-curve"> </b>  
                <a>  
                    <i class = "fa fa-envelope"> </i>  
                    Subscribe  
                </a>  
            </li>  
            <li class = "list-item active">  
                <b class = "left-curve"> </b>  
                <b class = "right-curve"> </b>  
                <a>  
                    <i class = "fa fa-phone"> </i>  
                    Contact  
                </a>  
            </li>  
        </ul>  
    </div>  

    <script>  
        $(function () {  
            $("li").click(function (e) {  
                e.preventDefault();  
                $("li").removeClass("active");  
                $(this).addClass("active");  
            });  
        });  
    </script>  

<?php include("footer.php");?>
