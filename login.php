<html>
    <?php
        include("fonctions.php");
        start_page("salut salut");
    ?>

    <form name="Login" method="post" action="test-pass.php">
        Identifiant : <input type="text" name="identifiant"/> <br/>
        Mdp         : <input type="text" name="pwd"/> <br/>
        <input type="submit" name="action2" value="ok"/><br/>
    </form>
</html>

