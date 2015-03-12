<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Filipe Valentin Costa">

<title>KalanGO! - Login</title>

<!-- Bootstrap Core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="/css/loginCSS.css" rel="stylesheet">

<!-- Mensagem de erro, caso o login falhe -->
@if (isset($mensagem))
    <script>alert("{{$mensagem}}");</script>
@endif

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="account-wall center-block">
                    <div id="my-tab-content" class="tab-content">
                        
                        <div class="tab-pane active" id="login">
                            <h3 style="text-align: center;">KalanGO!</h3>
                            <hr>
                            <img class="profile-img" src="/img/KalangoVerde.png" alt="">
                            
                            <!-- LOGIN -->
                            <!-- Pode colocar #Id's nos elementosque ainda não tem um para funcionar no seu código, se já tiver um id é melhor mudar o seu para não dar erro no form aqui-->
                            <form class="form-signin" action="{{ action('RemindersController@postReset') }}" method="POST">
                                <input class="form-control" type="hidden" name="token" value="{{ $token }}">
                                <input class="form-control" placeholder="email" type="email" name="email">
                                <input class="form-control" placeholder="nova senha" type="password" name="password">
                                <input class="form-control" placeholder="confirme a senha" type="password" name="password_confirmation">
                                <input class="form-control" type="submit" value="Resetar Senha">
                            </form>

                        </div>

                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- jQuery Version 1.11.0 -->
<script src="/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$( document ).ready(function() {
    $("#check1").on('click', function(event) {
        if ($('#check1').is(':checked')) {
            $('#reg').prop('disabled', false);
    }
    else{
        $('#reg').prop('disabled', true);
    }
    });
});
</script>



</body></html>