@extends('layouts.app')

@section('content')
    <script>
        $(document).ready(function() {
            $('#treatment').change(function () {
                console.log($(this).val());
                $.ajax({
                    type:'get',

                    url: "{{url('/admin/gettype')}}/" + $(this).val(),


                    success: function (result) {
                        $("#subtype").empty();
                        console.log(result);

                        var appenddata1 = "";
                        //alert(data1.d);
                        var json = JSON.parse(result);
                        for (var i = 0; i < json.length; i++) {
                            appenddata1 += "<option value = '" + json[i].id + " '>" + json[i].name + " </option>";
                        }
                        $("#subtype").append(appenddata1);

                    },
                    error: function (error) {
                        console.log(error);
                    }

                });

            });

        });

            </script>

    <div class="col-md-8">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="home.html" method="post">
            <div class="form-title" style="font-size: 20px; margin-top: 20px">
                <span class="form-title">Patient Registration</span>

            </div><br>

            <div class="row3">
                <div class="col-md-6">
                ID:

                <input type="text" name="BG" placeholder="" style="width: 100% ;  padding: 12px 20px; border: 2px solid #36c6d3;">
                </div>




                <div class="col-md-6">
                    Name:
                <input type="text" name="BG" placeholder="" style="width: 100% ; padding: 12px 20px; border: 2px solid #36c6d3;">
                </div>
            </div>
            <div class="row" style="padding-left: 15px; padding-right: 15px">

                <div class="col-md-6">
                    Gender:
                <select name="Gender" id="" class="select2 form-control" ;="" style="width: 100% ;height: 50px ; padding: 12px 20px; border: 2px solid #36c6d3;">
                    <option>Male</option>
                    <option>Female</option>
                </select>
                </div>

                <div class="col-md-6">
                 phone number:
                <input type="text" name="disease" placeholder="" style="width: 100% ; padding: 12px 20px; border: 2px solid #36c6d3;">
                </input>
                </div>

            </div>

            <div class="row" style="padding-left: 15px; padding-right: 15px">

                <div class="col-md-6">

                    Select Date:
                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">

                        <input type="date"  name="select date"  style="width: 205% ; margin-left: 0px ;padding: 12px 20px; border: 2px solid #36c6d3;">
                    </div>

                </div>

                <div class="col-md-6">
                    Treatment Type:
                    <select name="Gender" id="treatment" class="select2 form-control"  style="width: 100% ;height: 50px ; padding: 12px 20px; border: 2px solid #36c6d3;">
                        <option value="type" disabled selected>Select Treatment</option>

                        @foreach($treatments as $type)
                            <option value="{{$type['id']}}">{{$type['name']}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="row" style="padding-left: 15px; padding-right: 15px">

                <div class="col-md-6">
                    Subtype:
                    <select name="Gender" id="subtype" class="select2 form-control"  style="width: 100% ;height: 50px ; padding: 12px 20px; border: 2px solid #36c6d3;">
                    </select>

                </div>
                <div class="col-md-6">
                    Charges:
                    <input type="text" name="disease" placeholder="" style="width: 100% ; padding: 12px 20px; border: 2px solid #36c6d3;">
                    </input>
                </div>


            </div>




            <div>



                    </div>


            </div>

            {{--<!--<div class="create-account">--}}
            {{--<!--<p>-->--}}
            {{--<!--<a href="javascript:;" class="btn-primary btn" id="register-btn">Create an account</a>-->--}}
            {{--<!--</p>-->--}}
            {{--<!--</div>-->--}}
        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->


        <!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->
    </div>
    </div>
@endsection
