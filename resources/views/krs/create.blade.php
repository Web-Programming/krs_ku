@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="row">
                <div class="col-sm-12">
                    <form action="/create-krsku" method="POST" enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-hover table-white" id="tableEstimate">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px">#</th>
                                                <th class="col-sm-2">Kelas</th>
                                                <th class="col-md-3">Kode/Mata Kuliah</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="R1">
                                                <td class="row-index text-center">1</td>
                                                <td>
                                                    <select class="form-control kelas" data-id="1" name="kelas[]" required id="select-kelas">
                                                        <option value="0" >--</option>
                                                        @foreach ($kelas as $item)
                                                        <option value="{{ $item->id }}">{{ $item->namaKelas }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control matakuliah" data-id="1" name="matakuliah[]" required id="select-matakuliah">
                                                        <option value="0" >--</option>
                                                        @foreach ($matakuliah as $item)
                                                        <option value="{{ $item->id }}">{{ $item->kodeMK }} {{ $item->namaMK }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn"><i class="fa fa-plus"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section mx-5">
                            <button type="submit" class="btn btn-primary submit-btn">BUAT KRS</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::to('assets/js/jquery-3.5.1.min.js') }}"></script>
<!-- Bootstrap Core JS -->
<script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
<!-- Slimscroll JS -->
<script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}"></script>
<!-- Select2 JS -->
<script src="{{ URL::to('assets/js/select2.min.js') }}"></script>
<!-- Datetimepicker JS -->
<script src="{{ URL::to('assets/js/moment.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ URL::to('assets/js/app.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>    

    $(document).ready(function() {
        let rowIdx = 1;

        // Add new row
        $("#addBtn").on("click", function() {
            rowIdx++;
            let newRow = `
            <tr id="R${rowIdx}">
                <td class="row-index text-center">${rowIdx}</td>
                <td>
                    <select class="form-control kelas" data-id="${rowIdx}" name="kelas[]" required id="select-kelas">
                        <option value="0">--</option>
                        @foreach ($kelas as $p)
                        <option value="{{ $p->id }}">{{ $p->namaKelas }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select class="form-control matakuliah" data-id="${rowIdx}" name="matakuliah[]" required id="select-matakuliah">
                        <option value="0" >--</option>
                        @foreach ($matakuliah as $item)
                        <option value="{{ $item->id }}">{{ $item->kodeMK }} {{ $item->namaMK }}</option>
                        @endforeach
                    </select>
                </td>
                <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
            </tr>`;
            
            $("#tableEstimate tbody").append(newRow);
        });

    });

    // $(document).ready(function() {
    //     $('#select-kelas').change(function() {
    //         if ($(this).val()) {
    //             $('#select-matakuliah').prop('disabled', false); // Aktifkan select ke-2
    //         } else {
    //             $('#select-matakuliah').prop('disabled', true); // Nonaktifkan select ke-2
    //         }
    //     });
    // });

    $("#tableEstimate tbody").on("click", ".remove", function ()
    {
        // Getting all the rows next to the row
        // containing the clicked button
        var child = $(this).closest("tr").nextAll();
        // Iterating across all the rows
        // obtained to change the index
        child.each(function () {
        // Getting <tr> id.
        var id = $(this).attr("id");

        // Getting the <p> inside the .row-index class.
        var idx = $(this).children(".row-index").children("p");

        // Gets the row number from <tr> id.
        var dig = parseInt(id.substring(1));

        // Modifying row index.
        idx.html(`${dig - 1}`);

        // Modifying row id.
        $(this).attr("id", `R${dig - 1}`);
    });

        // Removing the current row.
        $(this).closest("tr").remove();

        // Decreasing total number of rows by 1.
        rowIdx--;
    });

        // Event handler for form submission
    $('#myForm').submit(function(e) {
        // Check if any .produk select element has a selected value of 0
        let invalidSelection = false;
        $('.produk').each(function() {
            if ($(this).val() == 0) {
                invalidSelection = true;
                return false; // Exit the loop early
            }
        });

        // If there's an invalid selection, prevent form submission
        if (invalidSelection) {
            alert("Pilih Produk atau Bahan terlebih dahulu.");
            e.preventDefault(); // Prevent the form from submitting
        }
        // Otherwise, allow the form to submit
    });

</script>

@endsection