<!DOCTYPE HTML>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"  />
<style>
    .container{
        display:flex;
        justify-content: center;
    }
    .login-box {
        width: 650px;
        border: 5px solid grey;
        /*padding: 10px;*/
        margin-top: 115px;
        height:400px;
    }
</style>

</head>
<body>

<div class="container mt-5">
    <div class="row">
        <h4><div style="color:red;" id="message"></div></h4>
    </div>
</div>


<div class="container">

    <div class="login-box">

        <h2 class="text-center mt-3">Login for visitor's entry</h2>

        <form method="post" id="login_form">
            @csrf
            <div class="row p-2 mt-5">
                <div class="col-sm-3">
                <label >Guard Id:</label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control w-50" type="text" maxlength="4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Enter employee code" name="emp_code" id="emp_code" />
                </div>
            </div>
            <div class="row p-2">
                <div class="col-sm-3">
                    <label >Captcha:</label>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-4">
                            {!! captcha_img() !!}
                        </div>
                        <div class="col-sm-8">
                            <i class="fa-solid fa-arrows-rotate w-25 "></i>
                        </div>
                    </div>
                    <input class="form-control w-50 mt-1" type="text" placeholder="Enter captcha code" name="captcha" id="captcha" />


                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <button type="submit" class="btn btn-primary" name="btn_submit" value="submit">Submit</button>
                </div>
{{--                <div class="col-sm-4">--}}
{{--                    <a href="">Forget Password</a>--}}
{{--                </div>--}}

            </div>


        </form>

    </div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function(){

        $('#login_form').on('submit',function(e){
            e.preventDefault();
            let empCode = $('#emp_code').val();
            // let empPass = $('#emp_password').val();

            $.ajax({
                url:"/login-submit",
                type:"POST",
                data:{
                    guard_id:empCode,
                    // guard_pass:empPass
                },
                success:function(response){
                    console.log(response);
                    if(response.error){
                        $('#message').text(response.error);
                        setTimeout(function(){
                            $('#message').empty();
                            $('#emp_code').val('');
                            $('#captcha').val('');

                        },1500);

                    }else{
                        window.location.href = response.redirect;
                    }
                },
                error:function(xhr){
                    alert('error in response');
                }
            });

        });

    });




</script>

</body>

</html>
