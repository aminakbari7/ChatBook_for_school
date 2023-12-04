<x-app-layout>
    <style>
        *{
            font-size: 20px !important;
        }
    </style>
    <h2> مشخصات کودک</h2>
    {{----------------}}
    <div class="table-wrapper">
        <form action="{{URL('Childerens/upchilderen',[$childeren,$UserChilderen])}}">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>تغییرات </th>
                    <th>شناسه معلم</th>
                    <th> شناسه والد</th>
                    <th> تاریخ تولد</th>
                    <th>نام</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                    <td> <button style="margin-right:10px;display: inline-block;  background-color: orange; padding: 5px;color: #ffffff; text-align: center;  border-radius: 5px;" type="submit">ثبت اطلاعات</button></td>
                    <td>
                        <select name="teacher_id" >
                            <optgroup label="انتخاب معلم">
                            <option value="{{$UserChilderen->teacher_id}}">{{$UserChilderen->teacher_id}}</option>
                            @foreach ($users as $user)
                            @if($user->role=='teacher')
                            <option value="{{$user->id}}">{{$user->id}}  {{$user->name}}</option>
                            @endif
                            @endforeach
                            </optgroup>
                          </select>

                </td>
                <td>
                    <select name="parent_id" >
                        <optgroup label="انتخاب والد">
                            <option value="{{$UserChilderen->parent_id}}">{{$UserChilderen->parent_id}}</option>
                            @foreach ($users as $user)
                            @if($user->role=='parent')
                          <option value="{{$user->id}}">{{$user->id}}  {{$user->name}}</option>
                          @endif
                          @endforeach
                        </optgroup>
                      </select>

            </td>

                    <td> <input dir="rtl" style="margin: 10px 0px;width:100%" type="text" placeholder="تاریخ تولد" value="{{$childeren->birth}}" name="birth" required> </td>
                    <td> <input dir="rtl" style="margin: 10px 0px;width:100%" type="text" placeholder="نام و نام خانوادگی" value="{{$childeren->name}}" name="name" required> </td>

                        </tr>

                <tbody>
            </table>
            </form>
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
        padding: 8px;
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
