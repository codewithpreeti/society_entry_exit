<!DOCTYPE HTML>
<html>
<head>
    @include('style-scripts')
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
<div class="container">
    <div class="login-box">
        <h2 class="text-center mt-3">Login For Guards Entry</h2>

        <form method="post" id="guard_login_form">
            @csrf
            <div class="row p-2 mt-5">
                <div class="col-sm-3">
                    <label >Manager Id:</label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control w-50" type="text" maxlength="4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" placeholder="Enter manager code" name="mang_code" id="mang_code" />
                </div>
            </div>
            <div class="row p-2">
                <div class="col-sm-3">
                    <label >Password:</label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control w-50" type="password" placeholder="Enter password" name="mang_password" id="mang_password" />
                </div>
            </div>

            <div class="container mt-5">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary" style="margin-left: 160px;"  name="btn_submit" value="submit">Submit</button>
                </div>
                <div class="col-sm-4">
                    <a href="">Forget Password</a>
                </div>

            </div>


        </form>

    </div>


</div>


<script>
    $(document).ready(function(){

        $('#guard_login_form').on('submit',function(e){
            e.preventDefault();
            let mangCode = $('#mang_code').val();
            let mangPass = $('#mang_password').val();

            $.ajax({
                url:"/login-submit",
                type:"POST",
                data:{
                    manager_id:empCode,
                    manager_pass:empPass
                },
                success:function(response){
                    console.log(response);
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
