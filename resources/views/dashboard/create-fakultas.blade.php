@extends('layout.dashboard')
@section('container')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Buat Fakultas</h4>
            </div>

            <div class="card-body">
                <form action="/dashboard/fakultas" method="post">
                    @csrf
                    <div class="row">            
                        <div class="mb-3 col-10">
                            <label for="name" class="form-label">Nama</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Masukan Nama Fakultas" autofocus required>  
                        </div>
                        <div class="col-4 d-flex">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="status" id="status" value="Aktif" checked="checked">
                                <label class="custom-control-label" for="status">Aktif</label>
                            </div>
                            <div class="form-check ms-3">
                              <input class="form-check-input" type="radio" name="status" id="status" value="Tidak Aktif">
                              <label class="custom-control-label" for="status">Tidak Aktif</label>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <div class="d-flex align-items-center ">
                            <div class="ms-md-auto d-flex">
                              <Button type="submit" class="btn btn-primary align-items-center d-flex m-4 ">Submit</Button>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    let i = 0;
    $("#add").click(function(){
        ++i;
        $("#field-matakuliah").append(
            `<div class="row" id="row-matakuliah" >
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="matakuliah" class="form-control-label">Matakuliah</label>
                        <input class="form-control" type="text" name="inputs[`+i+`]['matakuliah']" placeholder="Masukan mata kuliah">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="sks" class="form-control-label">SKS</label>
                        <input class="form-control" type="text" name="inputs[0]['sks']" placeholder="Masukan jumlah sks">
                    </div>
                </div>
                <div class="col-md-2 mt-4">
                    <div class="form-group">
                        <a class="btn btn-outline-primary remove-row">
                            <div class="ni ni-fat-remove"></div>
                        </a>
                    </div>
                </div>
            </div>`
        );
    });

    $(document).on('click', '.remove-row', function(){
        $(this).parents('#row-matakuliah').remove();
    })

// let counter = 1;
// function addmatkul(){
//     const album = document.getElementById("fieldrow");
//     counter++;
//     let html = '';
//     html += `<div class="row" id="row-matakuliah${counter}">`;
//         html += '<div class="col-md-5">';
//             html += '<div class="form-group">';    
//                 html += '<label for="matakuliah" class="form-control-label">Matakuliah</label>';
//                 html += '<input class="form-control" type="text">';        
//             html += '</div>';    
//         html += '</div>';

//         html += '<div class="col-md-5">';
//             html += '<div class="form-group">';    
//                 html += '<label for="example-text-input" class="form-control-label">SKS</label>';
//                 html += '<input class="form-control" type="text">';        
//             html += '</div>';    
//         html += '</div>';

//         html += '<div class="col-md-2 mt-4">';
//             html += '<div class="form-group">';    
//                 html += `<a class="btn btn-outline-primary remove" onclick="removeRow(row-matakuliah${counter})">`;
//                     html += '<div class="ni ni-fat-remove"></div>';
//                 html += '</a>';
//             html += '</div>';    
//         html += '</div>';
//     html += '</div>';
    
//     // $(`[id^=bantuan-bencana-row${newIndex}]:last`).find("a").each(function (index, label){
//     //         var onclick = $(this).attr("onclick").replace($(this).attr("onclick"), "removeRow('bantuan-bencana-row"+ newIndex +"')");
//     //         $(this).attr("onclick", onclick).attr("disabled", false).removeAttr("style").attr("style","cursor:pointer");
//     //     });

    
//     album.insertAdjacentHTML("beforeend", html)
// }
</script>

{{-- <script>
    function removeRow(rowid){
    var row = document.getElementById(rowid);
    row.outerHTML = "";
    // if(row != null && !row.getElementsByClassName( 'remove' )[0].hasAttribute("disabled")) row.outerHTML = "";
}
</script> --}}


@endsection