<?php include 'backend-search.php';?>
<html lang="th">
<head>
  <title>OAR_App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include('head.php'); ?>
  <style>
  /* Formatting search box */
   .search-box{
        position: relative;
        display: inline-table;
        font-size: 14px;
    }

    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;

    }
    .result{
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
        background: #fff;

    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        background: #fff;

    }
    .result p:hover{
        background: #f2f2f2;
    }

    @media only screen and (max-width: 320px) {
	card-moblie {
		width: 18rem;
	}
}


</style>

  <!-- Script SearchList -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
  $(document).ready(function(){
      $('.search-box input[type="text"]').on("keyup input", function(){
          /* Get input value on change */
          var inputVal = $(this).val();
          var resultDropdown = $(this).siblings(".result");
          if(inputVal.length){
              $.get("backend-search.php", {term: inputVal}).done(function(data){
                  // Display the returned data in browser
                  resultDropdown.html(data);
              });
          } else{
              resultDropdown.empty();
          }
      });

      // Set search input value on click of result item
      $(document).on("click", ".result p", ".text p" , function(){
          $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
          $(this).parent(".result").empty();
      });
  });
  </script>
  <!-- End Script SearchList -->

</head>
<body>

<?php include ('navbar.php'); ?>

<!-- Body -->
<div class="container" style="margin-top:80px">

<!-- SearchList -->


<form class="form-inline" method="post" action="waste_types.php" align="center">

    <div class="row m-0">
        <div class="search-box col-9">
                <input id="name" type="text" name="name" class="form-control shadow-sm" placeholder="พิมพ์ชื่อขยะ เช่น กระดาษ...">
                <div class="result mb-5"></div>
        </div>
      <div class="col-3">
          <button type="submit" class="btn btn-sm btn-success form-control shadow-sm">ค้นหา</button>
      </div>
    </div>


</form>

<!--End SearchList -->
<div class="container mt-4">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
</div>
<div class="carousel-inner "  style="border-radius: 10px">
  <div class="carousel-item active">
    <img src="IMG/Slide/Slide1.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="IMG/Slide/Slide2.jpg" class="d-block w-100" alt="...">
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">ก่อนหน้า</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">ถัดไป</span>
</button>
</div>
</div>

<br />
<!-- Card -->
<div class="row" align="center">
  <div class="col mb-2">
    <div class="card card-mobile shadow" style=" border-radius: 10px">
      <h3 class="card-title mt-2">ถังขยะสีแดง</h3>
      <img src="images/อันตราย.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ขยะมีพิษ ขยะติดเชื้อ</p>
        <a href="bins.php?id=1" class="btn btn-outline-success " role="button">Read More</a>
      </div>
    </div>
  </div>

  <div class="col mb-2">
    <div class="card shadow" style=" border-radius: 10px">
      <h3 class="card-title mt-2">ถังขยะสีเขียว</h3>
      <img src="images/อินทรีย์.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ขยะย่อยสลายได้</p>
        <a href="bins.php?id=2" class="btn btn-outline-success " role="button">Read More</a>
      </div>
    </div>
  </div>

</div>
<div class="row" align="center">

  <div class="col mb-2">
    <div class="card shadow" style=" border-radius: 10px">
      <h3 class="card-title mt-2">ถังขยะสีเหลือง</h3>
      <img src="images/รีไซ.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ขยะรีไซเคิล</p>
        <a href="bins.php?id=3" class="btn btn-outline-success " role="button">Read More</a>
      </div>
    </div>
  </div>

  <div class="col mb-2">
    <div class="card shadow" style=" border-radius: 10px">
      <h3 class="card-title mt-2">ถังขยะสีน้ำเงิน</h3>
      <img src="images/ทั่วไป.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">ขยะทั่วไป</p>
        <a href="bins.php?id=4" class="btn btn-outline-success " role="button">Read More</a>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Body -->
<br>

<?php include 'footer.php';?>


</body>
</html>
