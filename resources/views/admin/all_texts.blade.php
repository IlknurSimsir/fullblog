<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_assets/style.css">
</head>

<body>
    <script src="admin_assets/script.js"></script>
    <div class="container" style="grid-template-columns: 1fr 5fr;">
        <aside class="left-section">
            @include('admin.layouts.sidebar')
        </aside>
        <main>
            <header>
                <button class="menu-btn" id="menu-open">
                    <i class='bx bx-menu'></i>
                </button>
            </header>

            <div class="separator">
                <div class="search">
                    <i class='bx bx-search'></i>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Type in a name">
                </div>
            </div>
            <table id="myTable">
                <tr class="header">
                    <th style="width:90%;">Yazı</th>
                    <th style="width:10%;">İşlem</th>
                </tr>
                @foreach($veri->all_texts as $text)
                <tr>
                    <td>{!! $text->contents !!}</td>
                    <td style="text-align:center;">
                        <button type="button" class="btn bi bi-trash3" data-toggle="modal" data-target="#deleteTextModal{{$text->id}}"></button>
                        <a href="/updatetext?eid={{$text->id}}" class="btn bi bi-pencil-square" ></a>
                    </td>

                </tr>
                <div class="modal" id="deleteTextModal{{$text->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Sil</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="{{route('textdelete',$text->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input class="form-control" type="text" name="id" value="{{$text->id}}" hidden><br>

                                    <label class="form-label" for="newcontent">Content :</label>
                                    <input class="form-control" type="text" name="newcontent" value="{{$text->contents}}" readonly><br>
                                    Seçtiklerinizi silmek istediğinizden emin misiniz?
                                    <div class="modal-footer ">
                                        <input class="col-5" type="submit" class="btnslider" value="SİL" name="btndeletetext">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </table>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).on("click", ".btndeletetext", function() {
            var id = $(this).data('id');
            var el = this;
            $.ajax({
                url: 'delete/' + id,
                type: 'get',
                success: function(response) {
                    $(el).closest("tr").remove();
                    alert(response);
                }
            });
        });
    </script>
</body>

</html>