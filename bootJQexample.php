<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap and JQuery Example Page</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                width: 600px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <p><a id="clickety" class="btn btn-primary btn-large">Hello</a></p>
        
        <p id="hide_stuff" style="display: none">Hello!</p>
        
        <script>
            $(document).ready(function() {
                $("a").click(function(){
                    $("p").show();
                });
            });
        </script>
    </body>
</html>
