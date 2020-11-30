<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
	<title>how much</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>

<body>

		{{-- <div class=" flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm"
			dir="rtl">
			<div class="logo">
				<img src="{{ asset('images/img1.jpg') }}" style="width: 66px; float: right;">
			</div>

			<nav class="my-2 my-md-0 mr" style="background-color:white;box-shadow: none;">
				<div class="topnav" id="myTopnav">
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars" style="color: black;"></i>
					</a>
					@if (Route::has('login'))
					
						@auth
							<a style="color: black" href="{{ url('/dashboard') }}" class="">Dashboard</a>
						@else
							<a style="color: black" href="{{ route('login') }}" class="">Login</a>
	
							@if (Route::has('register'))
								<a style="color: black" href="{{ route('register') }}" class=" ">Register</a>
							@endif
						@endauth

				@endif
					<a class="p-2 text-dark" href="index.html">الرئسية</a>
					<a class="p-2 text-dark" href="aboutUs.html">عن الموقع</a>
					<a class="p-2 text-dark" href="contact.html">تواصل معنا</a>

				</div>
			</nav>

		</div> --}}


		<div class="page-wrapper">
			<div class="nav-wrapper">
			 <div class="grad-bar"></div>
			 <nav class="navbar">
				<img src="{{ asset('images/img1.jpg') }}"  >
			   <div class="menu-toggle" id="mobile-menu">
				 <span class="bar"></span>
				 <span class="bar"></span>
				 <span class="bar"></span>
			   </div>
			   <ul class="nav no-search">
				 <li class="nav-item"><a class="p-2 text-dark" href="index.html">الرئسية</a></li>
				 <li class="nav-item"><a class="p-2 text-dark" href="aboutUs.html">عن الموقع</a></li>
				 <li class="nav-item"><a class="p-2 text-dark" href="contact.html">تواصل معنا</a></li>

				 @if (Route::has('login'))
					
				 @auth
				 <li class="nav-item"><a class="p-2 text-dark"  href="{{ url('/dashboard') }}" class="">الصفحة الشخصية</a></li>

				 @else
				 <li class="nav-item"><a class="p-2 text-dark"  href="{{ route('login') }}" class="">تسجيل الدخول </a></li>

				 @if (Route::has('register'))
				 <li class="nav-item"><a class="p-2 text-dark"  href="{{ route('register') }}" class=" ">الاشتراك</a></li>

				 @endif
				 @endauth

		 @endif
			   </ul>
			 </nav>
			 </div>
			 
		   </div>

 



	<div id="content" class="container text-right">
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			<h1 class="display-6">أسعار اليوم</h1>
			<p>أول وأسرع موقع مصري لمتابعة أسعار السلع اليوميه و المنتجات في
				الاسواق السعودية يوميا. يتم تحديث اﻷسعار بشكل أوتوماتيكي
				وبدون أي تدخل من المستخدم لإعادة تحميل واجهة الموقع.</p>
			<p>الفكرة عندنا إن اﻷسعار بتتغير يوميا
				و ذلك يوفر وقت و مجهود للمستخدم ف سهوله العثور عن السلع و المنتجات
				ومزايا أخرى عديدة من الممكن التعرف عليه</p>
		</div>
	</div>
	<div class="w3-sidebar w3-bar-block" style="width:15%">
		<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
			aria-expanded="false" style="flex: none;">
			المنتجات
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="#">الارز</a>
			<a class="dropdown-item" href="#">المكرونه</a>
			<a class="dropdown-item" href="#">السكر</a>
			<a class="dropdown-item" href="#">الزيوت</a>
			<a class="dropdown-item" href="#">الطحين</a>
			<a class="dropdown-item" href="#">المكسرات</a>
			<a class="dropdown-item" href="#">الالبان</a>
			<a class="dropdown-item" href="#">الزبدة</a>
			<a class="dropdown-item" href="#">اللحوم</a>
			<a class="dropdown-item" href="#">الدواجن</a>


		</div>
		<!--
				<a href="#" class="w3-bar-item w3-button" style="display: block;">Link 2</a>
				<a href="#" class="w3-bar-item w3-button">Link 3</a>
		 -->
		<div class="apdate" style="min-height:60px; color: rgb(20 185 170)" dir="ltr">
			آخر محاولة تحديث
			<br>
			<p id="demo"></p>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="row">
			<div class="" style="
                                    direction: rtl;
                                    width: 50vw;
									overflow-x:auto;
                                ">
				<table class="table table-hover" id="datatable">
					<thead>
						<tr role="row">
							<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
								aria-sort="ascending" aria-label="location: activate to sort column descending">مكان
								التوزيع
								<i class="fa fa-sort" aria-hidden="true"></i>
							</th>
							<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
								aria-sort="ascending" aria-label="price: activate to sort column descending">السعر
								<i class="fa fa-sort" aria-hidden="true"></i>
							</th>
							<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
								aria-sort="ascending" aria-label="update: activate to sort column descending">اخر تحديث
								<i class="fa fa-sort" aria-hidden="true"></i>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr role="row" class="even">
							<td><a href="changes.html">سوق أ</a></td>
							<td>16</td>
							<td>منذ 30 دقيقة</td>
						</tr>
						<tr role="row" class="odd">
							<td><a href="changes.html">سوق ب</a></td>
							<td>19</td>
							<td> منذ 25 دقيقة</td>
						</tr>
						<tr role="row" class="even">
							<td><a href="changes.html"> سوق ج</a></td>
							<td>18</td>
							<td>منذ 35 دقيقة</td>
						</tr>
						<tr role="row" class="odd">
							<td><a href="changes.html">سوق د</a></td>
							<td>16</td>
							<td>منذ 22 دقيقة</td>
						</tr>
						<tr role="row" class="even">
							<td><a href="changes.html">سوق ه</a></td>
							<td>14</td>
							<td>منذ 50 دقيقة</td>
						</tr>
						<tr role="row" class="odd">
							<td><a href="changes.html">سوق و</a></td>
							<td>13</td>
							<td> منذ 28 دقيقة</td>
						</tr>
						<tr role="row" class="even">
							<td><a href="changes.html"> سوق س</a></td>
							<td>11</td>
							<td>منذ 33 دقيقة</td>
						</tr>
						<tr role="row" class="odd">
							<td><a href="changes.html"> سوق ي</a></td>
							<td>17</td>
							<td>منذ 10 دقيقة</td>
						</tr>
						<!-- <tr><th scope="row">8</th><td>سوق ك</td><td>14</td><td> منذ 48 دقيقة</td></tr><tr><tr><tr><th scope="row">9</th><td> سوق ل</td><td>15</td><td>منذ 33 دقيقة</td></tr><tr><th scope="row">10</th><td>سوق ط</td><td>19</td><td> منذ 18 دقيقة</td></tr>
-->
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="footer" style="text-align: center; padding: 30px; font-size:16px;">
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
	<script id="INLINE_PEN_JS_ID">
		$(document).ready(function () {
			$('#datatable').dataTable({
				"oLanguage": {
					"sStripClasses": "",
					"sSearch": "",
					"sSearchPlaceholder": "ابحث عن",
				},
			});
		});
	</script>
	<script>

  $('.menu-toggle').click(function(){
     $(".nav").toggleClass("mobile-nav");
     $(this).toggleClass("is-active");
  });
	</script>
	<script>
		var d = new Date();
		var n = d.toLocaleString();
		document.getElementById("demo").innerHTML = n;
	</script>

</body>

</html>