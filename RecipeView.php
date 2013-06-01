<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Recipe View Page Template</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
            <?php
                include "include/pageHeader.php";
                include "include/pageMenu.php";
            ?>
        
                <?php
                    include "include/pageCategories.php";
                ?>
                <div style="position:absolute;top:250px;left:200px; width: 700px">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <h1>Recipe 1</h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img style="float: left" src="http://panthers24.edublogs.org/files/2011/04/cereal-1jke8kj.gif" />
                                    <div style="float: right;"">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>Current Rating: X</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Rate this Recipe</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Preparation Time: N hours</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Difficulty: Easy</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Servings: N</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Follow this Author</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Ingredients</h3>
                                    <list>
                                        <li>Ingredient 1</li>
                                        <li>Ingredient 2</li>
                                        <li>Ingredient 3</li>
                                    </list>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Instructions</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Fusce rutrum commodo 
                                        augue ut mattis. Donec nunc leo, 
                                        eleifend at tempus id, eleifend ac ante.
                                        Mauris ultrices tellus et turpis 
                                        fermentum elementum. Donec ultricies 
                                        nibh vitae mi eleifend feugiat. In id 
                                        sapien quis neque sagittis sagittis. 
                                        Integer vitae eros porta erat tincidunt 
                                        semper a id augue. Maecenas eu diam ut 
                                        ante dignissim consectetur. In hac 
                                        habitasse platea dictumst. Curabitur 
                                        dapibus facilisis nibh eu pellentesque. 
                                        Suspendisse libero purus, dapibus at 
                                        venenatis pulvinar, egestas vitae augue.
                                        Fusce iaculis ultrices pretium.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Comments</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Fusce rutrum commodo 
                                        augue ut mattis. Donec nunc leo, 
                                        eleifend at tempus id, eleifend ac ante.
                                        Mauris ultrices tellus et turpis 
                                        fermentum elementum. Donec ultricies 
                                        nibh vitae mi eleifend feugiat. In id 
                                        sapien quis neque sagittis sagittis. 
                                        Integer vitae eros porta erat tincidunt 
                                        semper a id augue. Maecenas eu diam ut 
                                        ante dignissim consectetur. In hac 
                                        habitasse platea dictumst. Curabitur 
                                        dapibus facilisis nibh eu pellentesque. 
                                        Suspendisse libero purus, dapibus at 
                                        venenatis pulvinar, egestas vitae augue.
                                        Fusce iaculis ultrices pretium.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        <?php
            include "include/pageFooter.php";
        ?>
    </body>
</html>
