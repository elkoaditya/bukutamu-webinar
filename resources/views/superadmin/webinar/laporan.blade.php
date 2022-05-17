@extends('assets/body')
{{------------------------------------------- CSS ---------------------------------------}}
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
@endsection

{{------------------------------------------- JS ---------------------------------------}}
@section('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
@endsection
{{------------------------------------------- Content ---------------------------------------}}
@section('content')
    <div class="container">
        <table id="example" class="" style="width:100%">
            <thead>
            <tr>
                <th>Nama Sekolah</th>
                <th>Jenjang</th>
                <th>Alamat Sekolah</th>
                <th>Kabupaten</th>
                <th>Nama Kepala Sekolah</th>
                <th>No Telp Kepala Sekolah</th>
                <th>Email</th>
                <th>Daftar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($webinars as $webinar)
                <tr>
                    <td>{{$webinar->namaSekolah}}</td>
                    <td>{{$webinar->jenjang}}</td>
                    <td>{{$webinar->alamatSekolah}}</td>
                    <td>{{$webinar->kabupaten}}</td>
                    <td>{{$webinar->namaKepalaSekolah}}</td>
                    <td>{{$webinar->notelpKapsek}}</td>
                    <td>{{$webinar->email}}</td>
                    <td>{{\Carbon\Carbon::parse($webinar->created_at)->toFormattedDateString()}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
