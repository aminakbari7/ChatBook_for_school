<x-app-layout>
    <style>
        *{
            font-size: 20px !important;
        }
    </style>

    <form action="{{URL('Childerens/search')}}" style="background-color: #1ca9c9"">
        <div class="font-semibold text-xl text-gray-800 leading-tight ">
    <label >
        <input dir="rtl" style="margin: 10px 0px;margin-left:10px;margin-right:20px;width:60%" type="text" placeholder="عبارت جست و جو " value="" name="x" required>
        <button style="margin-left:20px;display: inline-block;  background-color: rgb(123, 230, 57); padding: 5px;color: #021704; text-align: center;  border-radius: 5px;" type="submit">  جست و جو</button>
    </label>
    </div>
    </form>
    @if(session()->exists('msg'))

   <h2> <div id="amin" style="color :red;text-algin:center;" > {{session('msg')}}</div></h2>
        <script type="text/javascript">
          window.setTimeout(function() {
             document.getElementById('amin').outerHTML = '';
                        }, 2000);
            </script>

    @endif
    {{----------------}}
    <div dir="rtl" class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>شماره سطر</th>
                <th>شماره کاربری</th>
                <th>نام</th>
                <th>تاریخ تولد</th>
                <th>تاریخ ثبت نام</th>
                <th>شناسه والد</th>
                <th>شناسه معلم</th>
                <th>حذف کاربر</th>
                <th>ویرایش کاربر</th>
            </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach ($Childerens as $childeren)
                @foreach ($UserChilderens as $UserChilderen)
                @if($UserChilderen->Childeren_id==$childeren->id)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td> {{ $childeren->id }}</td>
                    <td> {{ $childeren->name }}</td>
                    <td> {{ $childeren->birth }}</td>
                    <td>{{ $childeren->created_at}}</td>
                    <td style="color:rgb(36, 1, 1);"><a href="{{URL('Childerens',$UserChilderen->parent_id)}}"> <u >{{$UserChilderen->parent_id}}</u></a></td>
                    <td style="color:rgb(36, 1, 1);"><a href="{{URL('Childerens',$UserChilderen->teacher_id)}}"> <u>{{$UserChilderen->teacher_id}}</u></a></td>
                    <td style="color: red;font-size:15px;">
                        <a href="{{URL('Childerens/destroyc',[$childeren,$UserChilderen])}}"><b style="background-color:rgb(235, 220, 220) ! important">حذف </b></a>
                    </td>
                    <td style="color: rgb(58, 3, 255);font-size:14px;">
                        <a href="{{URL('Childerens/edchilderen',[$childeren,$UserChilderen])}}"><b style="background-color:rgb(235, 220, 220) ! important">ویرایش</b></a>
                    </td>
                    </tr>
                            @endif
                    @php $i++;@endphp
                    @endforeach
            @endforeach

            <tbody>
        </table>
    </div>
    {{-------------}}
    <style>
        h2{
        text-align: center;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: rgb(17, 232, 24);
        padding: 10px 0;
    }

    /* Table Styles */

    .table-wrapper{
        margin: 10px 70px 70px;
        box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
    }

    .fl-table {
        border-radius: 5px;
        font-size: 12px;
        font-weight: normal;
        border: none;
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        white-space: nowrap;
        background-color: white;
    }

    .fl-table td, .fl-table th {
        text-align: center;
        padding: 2px;
    }

    .fl-table td {
        border-right: 1px solid #f8f8f8;
        font-size: 12px;
    }

    .fl-table thead th {
        color: #ffffff;
        background: #4FC3A1;
    }


    .fl-table thead th:nth-child(odd) {
        color: #ffffff;
        background: #324960;
    }

    .fl-table tr:nth-child(even) {
        background: #F8F8F8;
    }

    /* Responsive */

    @media (max-width: 767px) {
        .fl-table {
            display: block;
            width: 100%;
        }
        .table-wrapper:before{
            content: "Scroll horizontally >";
            display: block;
            text-align: right;
            font-size: 11px;
            color: white;
            padding: 0 0 10px;
        }
        .fl-table thead, .fl-table tbody, .fl-table thead th {
            display: block;
        }
        .fl-table thead th:last-child{
            border-bottom: none;
        }
        .fl-table thead {
            float: left;
        }
        .fl-table tbody {
            width: auto;
            position: relative;
            overflow-x: auto;
        }
        .fl-table td, .fl-table th {
            padding: 20px .625em .625em .625em;
            height: 60px;
            vertical-align: middle;
            box-sizing: border-box;
            overflow-x: hidden;
            overflow-y: auto;
            width: 120px;
            font-size: 13px;
            text-overflow: ellipsis;
        }
        .fl-table thead th {
            text-align: left;
            border-bottom: 1px solid #f7f7f9;
        }
        .fl-table tbody tr {
            display: table-cell;
        }
        .fl-table tbody tr:nth-child(odd) {
            background: none;
        }
        .fl-table tr:nth-child(even) {
            background: transparent;
        }
        .fl-table tr td:nth-child(odd) {
            background: #F8F8F8;
            border-right: 1px solid #E6E4E4;
        }
        .fl-table tr td:nth-child(even) {
            border-right: 1px solid #E6E4E4;
        }
        .fl-table tbody td {
            display: block;
            text-align: center;
        }
    }
    </style>

    {{------------}}



    </x-app-layout>
