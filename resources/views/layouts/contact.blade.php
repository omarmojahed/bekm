<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="./css/test.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">
    <title>contact</title>
</head>

<body>
    <div id="content" class="container text-right">
        <div class=" flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm"
            dir="rtl">
            <div class="logo">
                <img src="./images/img1.jpg" style="width: 66px; float: right;">
                <nav class="my-2 my-md-0 mr" style="background-color:transparent; box-shadow: none;">
                    <a class="btn btn-outline-primary" href="login.html">تسجيل دخول</a>
                    <a class="p-2 text-dark" href="index.html">الرئسية</a>
                    <a class="p-2 text-dark" href="aboutUs.html">عن الموقع</a>
                    <a class="p-2 text-dark" href="contact.html">تواصل معنا</a>
                </nav>
            </div>
        </div>


        <div class="row">
            <div class="contact">
                <h4 style="margin-right: 35px; margin-top: 63px;;">تواصل معنا..</h4>
            </div>
            <div class="column" style="float: right;">
                <form>
                    <label for="fname"></label>
                    <input type="text" id="fname" name="firstname" placeholder="   الاسم الاول..">
                    <label for="lname"></label>
                    <input type="text" id="lname" name="lastname" placeholder="    الاسم الثاني..">
                    <label for="subject"></label>
                    <textarea id="subject" name="subject" placeholder="     اكتب تعليقا.."
                        style="height:170px"></textarea>
                    <input type="submit" value="ارسل">
                </form>
            </div>
        </div>
        <div class="footer" style="text-align: center; padding: 30px; font-size:16px;margin-top: 20px;">
            <div class="copy">Copyright&copy; 2020 DST</div>
            <div class="icon" style="cursor:pointer">
                <i class="fa fa-twitter" style="font-size:24px; "></i>
                <i class="fa fa-facebook-f" style="font-size:24px;"></i>
                <i class="fa fa-whatsapp" style="font-size:24px;"></i>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
</body>

</html>