<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Uğur Arslan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


  <div id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row">
        <div class="col-lg-8">
        <button class="back-button">&#8249;</button>
          @if(isset($sub))
          @foreach($veri->subtitle as $subtitle)
          @if($subtitle->id == $sub)
          <h2>
            @foreach($veri->category as $category)
            @if($subtitle->category_id == $category->id)
            {{ $category->category }}
            @endif
            @endforeach
          </h2>
          <p>{{ $subtitle->title }}</p>
          @endif
          @endforeach
          @endif
        </div>
        <div class="alltext row">

          
          

          @if(isset($sub))
          @foreach($veri->all_texts as $text)
          @if($text->suptitle == $sub)
          @foreach($veri->subtitle as $subtitle)
          @if($text->category_id == $subtitle->category_id && $subtitle->id == $sub)
          <div class="content-container">
            <div class="limited-text">
              {!! substr($text->contents, 0, 300) !!} <!-- İlk 300 karakteri göster -->
              <span class="show-more">...</span>
            </div>
            <div class="full-text" style="display: none;">
              {!! $text->contents !!}
            </div>
          </div>
          @endif
          @endforeach
          @endif
          @endforeach
          @endif
        </div>
      </div>
      
    </div>
  </div>

  
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
            let backBtn = document.querySelector(".back-button");
            backBtn.addEventListener('click', function() {
              window.history.back();
            });
          </script>
</body>

</html>