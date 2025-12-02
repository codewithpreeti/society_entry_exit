<!doctype html>
<html lang="en">
<head>
      @include('style-scripts')
    <style>
        .box{
            width:100%;
            height: auto;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-start mt-5 p-5" >
    <div class="card shadow p-4 w-100" >
        <h2 class="text-center">Visitors Form</h2>
        <form method="post" id="visitor_form">
            @csrf
       <div class="container mt-5">
           <div class="row">
               <div class="col-sm-1">
                   <label>Name:</label>
               </div>
               <div class="col-sm-3">
                   <input type="text" id="visitor_name" name="visitor_name" class="form-control">
               </div>
               <div class="col-sm-1">
                   <label for="visitor_age" class="form-label">Age:</label>
               </div>
               <div class="col-sm-2 w-25">
                   <input type="number" maxlength="2" id="visitor_age" name="visitor_age" class="form-control">
               </div>
               <div class="col-sm-1">
                   <label for="visitor_gender" class="form-label">Gender:</label>
               </div>
               <div class="col-sm-2 w-25">
                   <select class="form-control" name="visitor_gender" id="visitor_gender">
                       <option value="" selected>Select options</option>
                       <option value="m">Male</option>
                       <option value="f">Female</option>
                       <option value="o">Others</option>
                   </select>
               </div>
           </div>
       </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-1">
                        <label>Flat number:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="number" maxlength="2" id="visitor_flat" name="visitor_flat" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Building number:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <input type="number" maxlength="2" id="visitor_building" name="visitor_building" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Relation:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <select class="form-control" name="visitor_relation" id="visitor_relation">
                            <option value="" selected>Select options</option>
                            <option value="relative_friend">Relative/Friend</option>
                            <option value="company">Company</option>
                            <option value="helper">Helper</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-1">
                        <label>Travel mode:</label>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control" name="visitor_relation" id="visitor_relation">
                            <option value="" selected>Select options</option>
                            <option value="1">By walk</option>
                            <option value="2">2-wheeler vehicle</option>
                            <option value="3">4-wheeler vehicle</option>
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <label>Vehicle number:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <input type="number" maxlength="10" id="vehicle_number" name="vehicle_number" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Luggage check:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <select class="form-control" name="visitor_relation" id="visitor_relation">
                            <option value="" selected>Select options</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-1">
                        <label>Relation:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" id="visitor_relation" name="visitor_relation" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Phone number:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <input type="number" maxlength="10" id="visitors_number" name="visitors_number" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Purpose:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <input type="text" id="visitors_purpose" name="visitors_purpose" class="form-control">
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-1">
                        <label>Company:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" id="visitor_company" name="visitor_company" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Phone number:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <input type="number" maxlength="10" id="visitors_number" name="visitors_number" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Purpose:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <input type="text" id="visitors_purpose" name="visitors_purpose" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Company id:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" id="visitor_company_id" name="visitor_company_id" class="form-control">
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-1">
                        <label>Service:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" id="visitor_company" name="visitor_company" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Phone number:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <input type="number" maxlength="10" id="visitors_number" name="visitors_number" class="form-control">
                    </div>
                    <div class="col-sm-1">
                        <label>Days:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <select class="form-control" name="visitor_relation" id="visitor_relation">
                            <option value="" selected>Select options</option>
                            <option value="daily">Daily</option>
                            <option value="alternate">Alternate</option>
                            <option value="weekends">Weekends</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-1">
                        <label>Stay:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <select class="form-control" name="visitor_relation" id="visitor_relation">
                            <option value="" selected>Select options</option>
                            <option value="hour">Hourly</option>
                            <option value="day">A day</option>
                            <option value="less_than_week">less than week</option>
                            <option value="week">week</option>
                            <option value="more_than_week">More than week less than month</option>
                            <option value="month">Month</option>
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <label>Entry confirmed:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <select class="form-control" name="visitor_relation" id="visitor_relation">
                            <option value="" selected>Select options</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <label>Id proof:</label>
                    </div>
                    <div class="col-sm-2 w-25">
                        <input type="file" class="form-control" name="visitor_id" id="visitor_id" />
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="text-center">
                        <button type="submit" name="visitor_form_btn_submit" id="visitor_form_btn_submit" value="submitted" class="btn btn-primary px-4">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<script>
    $(document).ready(function(){

        // $('#visitor_form').on('submit',function(){
        //
        //
        //
        // });

    });
</script>

</body>
</html>
