<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <title>Web Mail Test Page</title>
    </head>
    <body>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
                                            $(document).ready(function(){
                                                $("#share_now").click(function(){
                                                    var data = $("email").serializeArray();
                                                    var url = $(location).attr('href')
                                                    data.push({URL: url});
                                                    
                                                    $.post("email.php", data,
                                                        function() {
                                                            alert("It Worked!");
                                                        }
                                                    );
                                                });
                                                $("#share_end").click(function(){

                                                });
                                            });
                                        </script>
        <form name="email"> 
            email address to send to: <br><input type="text" name="email_address" value="" /><br>
            subject:<br><input type="text" name="subject" value="" /><br>
            Message:<br><textarea name="message" rows="4" cols="20"></textarea><br>
            <input id="share_now" type="submit" value="Submit" />
        </form>
    </body>
</html>
