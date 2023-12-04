<x-app-layout>
    <style>
        *{
            font-size: 20px !important;
        }
    </style>
    @if(session()->exists('msg'))

   <h2> <div id="amin" style="color :red;text-algin:center;" > {{session('msg')}}</div></h2>
        <script type="text/javascript">
          window.setTimeout(function() {
             document.getElementById('amin').outerHTML = 'ثبت نام کودک';
                        }, 2000);
            </script>

    @else
    <h2> ثبت نام کودک</h2>
    @endif
    {{----------------}}
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th> عملیات</th>
                <th> انتخاب معلم</th>
                <th> انتخاب والد</th>
                <th>تاریخ تولد</th>
                <th>نام و نام خانوادگی</th>
            </tr>
            </thead>
            <tbody>
                <form action="{{URL('createchild/addchild')}}">
                <tr>

                    <td> <button style="margin-left:10px;display: inline-block;  background-color: orange; padding: 5px;color: #ffffff; text-align: center;  border-radius: 5px;" type="submit">ثبت اطلاعات</button></td>


                    <td>
                            <select name="teacher_id" >
                                <optgroup label="انتخاب معلم">
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
                                @foreach ($users as $user)
                                @if($user->role=='parent')
                              <option value="{{$user->id}}">{{$user->id}}  {{$user->name}}</option>
                              @endif
                              @endforeach
                            </optgroup>
                          </select>

                </td>



                <td>
                    <div>

                        <style>

                            .token.comment,
                            .token.prolog,
                            .token.doctype,
                            .token.cdata {
                                color: slategray;
                            }

                            .token.punctuation {
                                color: #f8f8f2;
                            }

                            .namespace {
                                opacity: .7;
                            }

                            .token.property,
                            .token.tag,
                            .token.constant,
                            .token.symbol,
                            .token.deleted {
                                color: #f92672;
                            }

                            .token.boolean,
                            .token.number {
                                color: #ae81ff;
                            }

                            .token.selector,
                            .token.attr-name,
                            .token.string,
                            .token.char,
                            .token.builtin,
                            .token.inserted {
                                color: #a6e22e;
                            }

                            .token.operator,
                            .token.entity,
                            .token.url,
                            .language-css .token.string,
                            .style .token.string,
                            .token.variable {
                                color: #f8f8f2;
                            }

                            .token.atrule,
                            .token.attr-value,
                            .token.function {
                                color: #e6db74;
                            }

                            .token.keyword {
                                color: #66d9ef;
                            }

                            .token.regex,
                            .token.important {
                                color: #fd971f;
                            }

                            .token.important,
                            .token.bold {
                                font-weight: bold;
                            }

                            .token.italic {
                                font-style: italic;
                            }

                            .token.entity {
                                cursor: help;
                            }

                            @keyframes start {
                                from {
                                    transform: scale(.5);
                                }
                                to {
                                    transform: scale(1);
                                }
                            }

                            @-webkit-keyframes start {
                                from {
                                    -webkit-transform: scale(.5);
                                }
                                to {
                                    -webkit-transform: scale(1);
                                }
                            }

                            .rtl {
                                direction: rtl
                            }

                            .pdp-default {
                                position: absolute;
                                direction: rtl;
                                color: #555;
                                box-shadow: 1px 1px 8px 1px rgba(0, 0, 0, 0.19);
                                z-index: 99999;
                            }

                            .pdp-default ::-webkit-scrollbar-track {
                                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                                background-color: #F5F5F5;
                            }

                            .pdp-default ::-webkit-scrollbar {
                                width: 15px;
                                background-color: #F5F5F5;
                            }

                            .pdp-default ::-webkit-scrollbar-thumb {
                                background-color: #444444;
                            }

                            .pdp-default ::selection {
                                color: #67cdcc;
                            }

                            .pdp-default .pdp-header {
                                background-color: #ffffff;
                                border-top: 2px solid #999;
                                border-left: 1px solid #999;
                                border-right: 1px solid #999;
                                border-bottom: none;
                                padding: 2px;
                                font-weight: bold;
                            }

                            .pdp-default .yearSelect {
                                overflow-y: auto;
                                direction: ltr;
                            }

                            .pdp-default .monthSelect li.disableMonth,
                            .pdp-default .monthSelect li.disableMonth:hover {
                                color: #bbb;
                                background: #eee;
                                cursor: not-allowed;
                            }

                            .pdp-default .yearSelect,
                            .pdp-default .monthSelect {
                                font: normal 12px Tahoma;
                                background: #f9f9f9;
                                border: 1px solid #ccc;
                                list-style: none;
                                position: absolute;
                                padding: 0;
                                width: 99.6%;
                                text-align: center;
                                z-index: 9999;
                                animation: start 0.2s;
                                -webkit-animation: start 0.2s;
                            }

                            .pdp-default .selected {
                                background: #15a6eb;
                                color: #ffffff;
                            }

                            .pdp-default .yearSelect li,
                            .pdp-default .monthSelect li {
                                padding: 1px;
                                cursor: default;
                                display: inline-table;
                                text-align: center;
                                border: 1px dotted #ddd;
                            }

                            .pdp-default .yearSelect li:hover,
                            .pdp-default .monthSelect li:hover {
                                background: #FF9933;
                                color: #ffffff;
                                border-color: #FF7700;
                            }

                            .pdp-default .nextArrow {
                                right: 0;
                            }

                            .pdp-default .prevArrow {
                                left: 0;
                            }

                            .pdp-default .monthYear {
                                width: 80%;
                                margin: 0 auto;
                                text-align: center;
                                cursor: pointer;
                            }

                            .pdp-default .nextArrow,
                            .pdp-default .prevArrow {
                                cursor: pointer;
                                position: absolute;
                                top: 1px;
                                padding: 2px;
                            }

                            .pdp-default .nextArrow:hover,
                            .pdp-default .prevArrow:hover {
                                color: #0073ea;
                            }

                            .pdp-default .cell {
                                display: inline-block;
                                cursor: default;
                                text-align: center;
                            }
                            /* Days of the week */

                            .pdp-default .dows {
                                background: #5F5D5D;
                                /*#006fe0;*/
                                color: #fff;
                            }

                            .pdp-default .dow {
                                font: bold 14px 'helvetica';
                                border: 1px solid #5F5D5D;
                            }

                            .pdp-default .days {
                                background-color: #ffffff;
                                border: 1px solid #999;
                                border-top: none;
                                font: normal 12px Tahoma;
                            }

                            .pdp-default .day {
                                border: 1px solid #f1f1f1;
                            }

                            .pdp-default .day:hover {
                                background: #f3f3f3;
                                border: 1px solid #bbb;
                                border-radius: 2px;
                            }

                            .pdp-default .selday,
                            .pdp-default .selday:hover {
                                background: #eadaa6;
                                border-color: #eb5b04;
                            }

                            .pdp-default .friday {
                                color: #f38;
                            }

                            .pdp-default .today {
                                color: #fff;
                                background: #0073ea;
                            }

                            .pdp-default .today:hover {
                                color: #fff;
                                background: #0073ea;
                            }

                            .pdp-default .disday,
                            .pdp-default .disday:hover {
                                color: #B7B5B5;
                                background: #F1F1F1;
                                cursor: not-allowed;
                            }

                            .pdp-default .nul {
                                border: 1px solid #f1f1f1;
                                background: #f1f1f1;
                            }

                            .pdp-default .pdp-footer {
                                background: #999;
                                font: normal 12px Tahoma;
                                text-align: center;
                                height: 17px;
                            }

                            .pdp-default .pdp-footer .goToday {
                                color: #f0f0f0;
                                text-decoration: none;
                            }

                            .pdp-default .pdp-footer .goToday:hover {
                                color: #ffffff;
                                text-decoration: overline;
                            }
                        </style>
                        <div class="wrapper" dir="rtl">
                            <section id="multi-element">
                                <input type="text" placeholder="تاریخ تولد" class="usage"  name="birth">
                            </section>
                        </div>
                    </div>
                    <script src="js/jquery-1.10.1.min.js"></script>
                    <script src="js/persianDatepicker.js"></script>
                    <script>
                        $(function() {
                            //usage
                            $(".usage").persianDatepicker();

                            //themes
                            $("#pdpDefault").persianDatepicker({
                                alwaysShow: true,
                            });
                            $("#pdpLatoja").persianDatepicker({
                                theme: "latoja",
                                alwaysShow: true,
                            });
                            $("#pdpLightorang").persianDatepicker({
                                theme: "lightorang",
                                alwaysShow: true,
                            });
                            $("#pdpMelon").persianDatepicker({
                                theme: "melon",
                                alwaysShow: true,
                            });
                            $("#pdpDark").persianDatepicker({
                                theme: "dark",
                                alwaysShow: true,
                            });

                            //size
                            $("#pdpSmall").persianDatepicker({
                                cellWidth: 14,
                                cellHeight: 12,
                                fontSize: 8
                            });
                            $("#pdpBig").persianDatepicker({
                                cellWidth: 78,
                                cellHeight: 60,
                                fontSize: 18
                            });

                            //formatting
                            $("#pdpF1").persianDatepicker({
                                formatDate: "YYYY/MM/DD 0h:0m:0s:ms"
                            });
                            $("#pdpF2").persianDatepicker({
                                formatDate: "YYYY-0M-0D"
                            });
                            $("#pdpF3").persianDatepicker({
                                formatDate: "YYYY-NM-DW|ND",
                                isRTL: !0
                            });

                            //startDate & endDate
                            $("#pdpStartEnd").persianDatepicker({
                                startDate: "1394/11/12",
                                endDate: "1395/5/5"
                            });
                            $("#pdpStartToday").persianDatepicker({
                                startDate: "today",
                                endDate: "1410/11/5"
                            });
                            $("#pdpEndToday").persianDatepicker({
                                startDate: "1397/11/12",
                                endDate: "today"
                            });

                            //selectedBefor & selectedDate
                            $("#pdpSelectedDate").persianDatepicker({
                                selectedDate: "1404/1/1",
                                alwaysShow: !0
                            });
                            $("#pdpSelectedBefore").persianDatepicker({
                                selectedBefore: !0
                            });
                            $("#pdpSelectedBoth").persianDatepicker({
                                selectedBefore: !0,
                                selectedDate: "1395/5/5"
                            });

                            //jdate & gdate attributes
                            $("#pdp-data-jdate").persianDatepicker({
                                onSelect: function() {
                                    alert($("#pdp-data-jdate").attr("data-gdate"));
                                }
                            });
                            $("#pdp-data-gdate").persianDatepicker({
                                showGregorianDate: true,
                                onSelect: function() {
                                    alert($("#pdp-data-gdate").attr("data-jdate"));
                                }
                            });


                            $("#pdpGregorian").persianDatepicker({
                                showGregorianDate: true
                            });

                            var p = new persianDate();
                            $("#pdpStartDateTomarrow").persianDatepicker({
                                startDate: p.now().addDay(1).toString("YYYY/MM/DD"),
                                endDate: p.now().addDay(4).toString("YYYY/MM/DD")
                            });


                        });
                    </script>
                </td>
                    <td> <input dir="rtl" style="margin: 10px 0px;" type="text" placeholder="نام و نام خانوادگی"  name="name" required> </td>

                </tr>

            </form>
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
