<html>
    <?php
        include("fonctions.php");
        start_page("bonjour");
    ?>

    <form name="Calcul" method="post" action="gestionDatas.php">
        Identifiant : <input type="text" name="identifiant"/> <br/>
        Sexe        : <input type="text" name="sexe"/><br/>
        E-mail      : <input type="text" name="mail"/><br/>
        Mdp         : <input type="password" name="mdp"/><br/>
        Confirm mdp : <input type="password" name="mdp2"/><br/>
        Tel         : <input type="text" name="tel"/><br/>
        Pays        : <select name="pays">
            <option value="op1">La Corée du Nord</option>
            <option value="op2"/>Le pays au-dessus de la Corée du sud</option>
            <option value="op3"/>Le pays où le président est le rayonnant Kim Jong-un</option>
            <option value="op4"/>Le pays tirant des missiles nucléaires principalement dans l'océan</option>
        </select> <br/>
        Conditions générales : <input type="checkbox" name="cg"/><br/>
        Bouton de soumission  : <input type="submit" name="action" value="mailer"/><br/>
    </form>

    <?php
        end_page("kage bunshin no jutsu");
    ?>
</html>


