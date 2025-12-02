<!doctype html>
<html lang="en">
<head>
    @include('style-scripts')
    <style>
        .box{
            width:90px;
            height: 70px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div style="background-color: yellow" class="p-2 container-fluid">
    <div class="row g-0" style="background-color: red;padding:2px;">
        <div class="col-12" style="background-color: floralwhite;">
            hellow me
        </div>
    </div>
    <h2> Visitor Form </h2>
</div>
<div class="container p-5   " style="background-color: grey">
    <div class="col-12 box" style="background-color: #0d6efd"> JDILAO </div>
    <div class="row d-flex box" style="background-color: cornflowerblue"> dsds

        <div class="col-sm-3 box" style="background-color: dodgerblue"> dsds </div>
    </div>

</div>

<div class="container">
    <div class="row p-2" style="background-color: indianred">
        <div class="col-4 m-2 box" style="background-color: cornflowerblue" >A</div>
        <div class="col-4 m-0 box" style="background-color: dodgerblue">B</div>
        <div class="col-4 m-2 box" style="background-color: cornflowerblue" >C</div>
    </div>
    <div class="row flex-column p-2" style="background-color: cornsilk">
        <div class="col-1 m-2 box" style="background-color: cornflowerblue" >A</div>
        <div class="col m-2 box" style="background-color: dodgerblue">B</div>
        <div class="col m-2 box" style="background-color: cornflowerblue" >C</div>
    </div>
</div>
<div class="row p-2" style="background-color: lightgreen">
    <div class="col-6 m-2 box" style="background-color: cornflowerblue" >A</div>
    <div class="col-6 m-2 box" style="background-color: dodgerblue">B</div>
</div>


<div class="d-flex flex-column" style="background-color: rosybrown">
    <div>A</div>
    <div>B</div>
    <div>C</div>
</div>

<div class="d-flex flex-column mt-2 p-1" style="background-color: sandybrown">
    <div class="col-1 box mt-1 " style="background-color: mediumvioletred">A</div>
    <div class="row justify-content-center" style="background-color: white;">
        <div class="col-3 box mt-1 m-1" style="background-color: mediumpurple">B</div>
        <div class="col-3 m-1  box mt-1 " style="background-color: mediumpurple">E</div>
        <div class="col-3 box m-1 mt-1 " style="background-color: mediumpurple">F</div>
    </div>
    <div class="col-1 box mt-1 " style="background-color: greenyellow">C</div>
</div>


<div class="container d-flex align-items-start mt-5">
    <h2> Visitor Form </h2>
</div>


{{--<div class="container d-flex align-items-start mt-5">--}}
{{--    <div class="w-75">--}}

{{--        <form method="post" action="" >--}}
{{--            <div class="row m-3">--}}
{{--                    <label>Name:</label>--}}
{{--                    <input class="form-control w-25" type="text" name="visitor_name" id="visitor_name" />--}}
{{--            </div>--}}

{{--        </form>--}}
{{--    </div>--}}

{{--</div>--}}

{{--<div class="container d-flex justify-content-center align-items-start mt-5">--}}

{{--    <div class="card shadow p-4 w-100">--}}
{{--        <h3 class="text-center mb-4">Visitor Form</h3>--}}
{{--        <form method="post" action="">--}}
{{--            @csrf--}}
{{--            <div class="row mt-5">--}}
{{--                <div class="col-sm-1">--}}
{{--                    <label for="visitor_name" class="form-label">Name:</label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 w-25">--}}
{{--                    <input type="text" id="visitor_name" name="visitor_name" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="col-sm-1">--}}
{{--                    <label for="visitor_age" class="form-label">Age:</label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 w-25">--}}
{{--                    <input type="number" maxlength="2" id="visitor_age" name="visitor_age" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="col-sm-1">--}}
{{--                    <label for="visitor_gender" class="form-label">Gender:</label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 w-25">--}}
{{--                    <select class="form-control" name="visitor_gender" id="visitor_gender">--}}
{{--                        <option value="" selected>Select options</option>--}}
{{--                        <option value="m">Male</option>--}}
{{--                        <option value="f">Female</option>--}}
{{--                        <option value="o">Others</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row mt-2">--}}
{{--                <div class="col-sm-1">--}}
{{--                    <label for="visitor_flat" class="form-label">Flat number:</label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 w-25">--}}
{{--                    <input type="number" maxlength="2" id="visitor_flat" name="visitor_flat" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="col-sm-1">--}}
{{--                    <label for="visitor_building" class="form-label">Building number:</label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 w-25">--}}
{{--                    <input type="number" maxlength="2" id="visitor_building" name="visitor_building" class="form-control">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row mt-2">--}}
{{--                <div class="col-sm-1">--}}
{{--                    <label for="visitor_relation" class="form-label">Relation:</label>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 w-25">--}}
{{--                    <select class="form-control" name="visitor_relation" id="visitor_relation">--}}
{{--                        <option value="" selected>Select options</option>--}}
{{--                        <option value="1">Relative/Friend</option>--}}
{{--                        <option value="2">Company</option>--}}
{{--                        <option value="3">Helper</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="text-center">--}}
{{--                <button class="btn btn-primary px-4">Submit</button>--}}
{{--            </div>--}}

{{--        </form>--}}
{{--    </div>--}}

{{--</div>--}}


</body>
</html>
