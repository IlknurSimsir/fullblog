<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="admin_assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <script src="admin_assets/script.js"></script>
  <div class="container" style="grid-template-columns: 1fr 5fr;">
    <aside class="left-section">
      @include('admin.layouts.sidebar')
    </aside>
    <div class="container-fluid">

      <form method="post" action="{{ route('createtextpost') }}">
        @csrf
        <br>
        <div class="mb-3">
          <label for="contents" class="form-label">Yazı</label>
          <textarea type="text" class="form-control" id="contents" name="contents"></textarea>
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Kategori</label>
          <select id="category" name="category" class="form-select" aria-label="Lütfen kategory seçiniz">
            @foreach($veri->category as $category)
            <option name="category" value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="subtitle" class="form-label">Alt Kategori</label>
         
          <select id="subtitle" name="subtitle" class="form-select" aria-label="Lütfen kategory seçiniz">
            @foreach($veri->subtitle as $subtitle)
            <option name="subtitle" value="{{$subtitle->id}}" data-category="{{$subtitle->category_id}}">{{$subtitle->title}}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#category').change(function() {
        var selectedCategory = $(this).val();
        $('#subtitle option').each(function() {
          var subtitleCategory = $(this).data('category');
          if (selectedCategory == subtitleCategory) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
        $('#subtitle').val(''); // Seçili alt kategoriyi temizle
      });
    });
  </script>
</body>

</html>