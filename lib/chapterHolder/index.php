<!DOCTYPE html>
<html lang="en">
<head>
      
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="../../assests/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assests/chapterHolder/css/chapter.css">
    <link rel="stylesheet" href="../../assests/header/css/header.css">
    <link rel="stylesheet" href="../../assests/footer/css/footer.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chapters list</title>
</head>

<body>
    <!--  here is header holder -->
    <?php require_once "../../lib/header/header.php"  ?>
    <!--  here is end of header -->







    <!--  here is back button holder -->
    <div class="backButtonHolder">
            <span class="backButton"><img src="../../assests/backButton/backButton.png" alt="backButton"></span>
    </div>
    <!--  here is back button holder end-->

    <!--  here is labels holder -->

    <div class="labelsHolder">
        <div class="labels"><span class="label">label</span></div>
        <div class="labels"><span class="label">labe2</span></div>
        <div class="labels"><span class="label">labe3</span></div>
        <div class="labels"><span class="label">labe4</span></div>
    </div>

    <!--  here is labels holder end-->

    

    <!--  here is main body list of subjects -->

    <div class="chapterListHolder">
        
    </div>


<!--  here footer -->
<?php require_once "../../lib/footer/footer.php"  ?>
<!--  here footer end -->


<script src="../../assests/jquery/Jquery.js"></script>
<script src="../../assests/chapterHolder/js/chapter.js"></script>
<script src="../../assests/footer/js/footer.js"></script>
<script src="../../assests/header/js/header.js"></script>

<script>
    for(var i =0; i<10 ; i++){
        $(".chapterListHolder").append(`

               <div class="chapterMain">
            <div class="chapterList">
            <div class="header">
                <div class="imgHolder">
                    <img src="../../assests/chapterHolder/img/thumbN3.png" alt="subject image">
                </div>
                <div class="favHolder">
                    <img src="../../assests/chapterHolder/img/fav.png" alt="" title="Add To Favourite">
                </div>
                <div class="timeHolder">
                <i class="material-icons">timer</i><span>  41 Min</span>
                </div>
            </div>
            <div class="body">
                <div class="chapterName">
                    <span>Light: Refraction and Reflection</span>
                </div>
                <div class="watchLaterAndStart">
                    <div class="watchLater">
                        <span> <i class="material-icons">timer</i> Watch later</span>
                    </div>
                    <div class="start">
                        <span><i class="material-icons">exit_to_app</i>  Start</span>
                    </div>
                </div>
            </div>
            <div class="footer">
            
            </div>
        </div>
        </div>`
)
    }
</script>
</body>
</html>