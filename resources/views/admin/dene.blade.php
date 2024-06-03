<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
    @include('admin.layouts.sidebar')
    <table id="myTable">
                <tr class="header">
                    <th style="width:90%;">Yazı</th>
                    <th style="width:10%;">İşlem</th>
                </tr>
                @foreach($veri->all_texts as $text)
                <tr>
                    <td>{!! $text->contents !!}</td>
                    <td style="text-align:center;">
                        <a href="/edit?eid={{$text->id}}"><i class="bi bi-pencil-square btninfosend"></i></a> 
                        <a href="/delete?did={{$text->id}}"><i class="bi bi-trash3 btninfosend"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
  
       
    </div>
</body>

</html>