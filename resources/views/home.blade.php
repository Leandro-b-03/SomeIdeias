<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Some Ideias, criando e inovando.">
        <meta name="author" content="Carlos Alvarez">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <title>Some Ideias | Criando e Inovando</title>
        <!-- Bootstrap core CSS -->
        {!! Html::style("assets/css/bootstrap.min.css") !!}
        {!! Html::style("assets/css/font-awesome.min.css") !!}
        <!-- Custom styles for this template -->
        {!! Html::style("assets/css/main.css") !!}
        {!! Html::style("assets/css/main-custom.css") !!}
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
        
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="logo">
                {{-- <img src="assets/img/logo.png" width="100" alt="Some Ideias"> --}}
            </div>
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2 w">
                    <h1>Some Ideias<br/>Criando e Inovando.</h1>
                </div>
            </div>
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2 w tooltip-demo">
                    <a data-toggle="tooltip" title="Twitter" href="https://twitter.com/leandro_b_03"><i class="fa fa-twitter"></i></a>
                    <a data-toggle="tooltip" title="Blog" href="http://blogdoleos.com.br"><i class="fa fa-comment"></i></a>
                    <a data-toggle="tooltip" title="Email Me!" href=""><i class="fa fa-envelope"></i></a>
                    <a data-toggle="tooltip" title="Newsletter" href="http://eepurl.com/Eck_T"><i class="fa fa-coffee"></i></a>
                </div>
            </div>
            </div><!-- /.container -->
            
            <div class="container">
                <div class="row w centered">
                    <br>
                    <div class="col-lg-6 col-lg-offset-3">
                        <p>Se tratamos as pessoas como elas devem ser, nós as ajudamos a se tornarem o que elas são capazes de ser. (Goethe)</p>
                    </div>
                </div>
            </div>
            {{-- <div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email" class="h4">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="h4 ">Message</label>
                    <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
                <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
            </div> --}}
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script>
                $('.tooltip-demo').tooltip({
                    selector: "[data-toggle=tooltip]",
                    container: "body"
                });

                $("#contactForm").submit(function(event){
                    // cancels the form submission
                    event.preventDefault();
                    submitForm();
                });

                function submitForm(){
                    // Initiate Variables With Form Content
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var message = $("#message").val();
                 
                    $.ajax({
                        type: "POST",
                        url: "php/form-process.php",
                        data: "name=" + name + "&email=" + email + "&message=" + message,
                        success : function(text){
                            if (text == "success"){
                                formSuccess();
                            }
                        }
                    });
                }
                function formSuccess(){
                    $( "#msgSubmit" ).removeClass( "hidden" );
                }
            </script>
            <!--BACKSTRETCH-->
            <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
            <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
            <script>
                $.backstretch("assets/img/bg.jpg", {speed: 500});
            </script>
        </body>
    </html>