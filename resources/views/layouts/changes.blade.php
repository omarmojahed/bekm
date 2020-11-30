<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="./css/test.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>products change</title>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: ""
                },
                data: [{
                    type: "line",
                    indexLabelFontSize: 15,
                    dataPoints: [

                        { y: 15 },
                        { y: 30 },
                        { y: 50, indexLabel: "\u2191 highest", markerColor: "red", markerType: "triangle" },
                        { y: 18 },
                        { y: 44 },
                        { y: 38 },
                        { y: 20 },
                        { y: 38 },
                        { y: 10 },
                        { y: 17 },
                        { y: 14 },
                        { y: 13 },
                        { y: 12 },
                        { y: 12 },
                        { y: 14 },
                        { y: 15 },
                        { y: 30 },
                        { y: 50 },
                        { y: 18 },
                        { y: 44 },
                        { y: 38 },
                        { y: 20 },
                        { y: 38 },
                        { y: 10, indexLabel: "\u2193 lowest", markerColor: "DarkSlateGrey", markerType: "cross" },
                        { y: 17 },
                        { y: 14 },
                        { y: 13 },
                        { y: 12 },
                        { y: 12 },
                        { y: 14 },

                    ]
                }]
            });
            chart.render();

        }
    </script>
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

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h5 class="display-6">المعدل الشهري للمنتجات</h5>
            <p>أول وأسرع موقع مصري لمتابعة أسعار السلع اليوميه و المنتجات في
                الاسواق السعودية يوميا. يتم تحديث اﻷسعار بشكل أوتوماتيكي
                وبدون أي تدخل من المستخدم لإعادة تحميل واجهة الموقع.</p>
            <p>الفكرة عندنا إن اﻷسعار بتتغير يوميا
                و ذلك يوفر وقت و مجهود للمستخدم ف سهوله العثور عن السلع و المنتجات
                ومزايا أخرى عديدة من الممكن التعرف عليه</p>
        </div>
    </div>
    <div id="chartContainer"  style="position: relative; height:40vh; width:80vw"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <div class="footer" style="text-align: center; padding: 30px; font-size:16px;">
        <div class="copy">Copyright&copy; 2020 DST</div>
        <div class="icon" style="cursor:pointer">
            <i class="fa fa-twitter" style="font-size:24px; "></i>
            <i class="fa fa-facebook-f" style="font-size:24px;"></i>
            <i class="fa fa-whatsapp" style="font-size:24px;"></i>
        </div>

    </div>
    </div>
</body>

</html>