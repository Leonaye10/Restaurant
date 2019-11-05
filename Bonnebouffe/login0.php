<section class="LoginGauche">
    <img src="Images/images.jpg" height="200px" weight="200px">
</section>
<!--formulaire des membres-->
<section class="LoginDroite" >
        <h3> Membres </h3>
<form method="post" action="index.php?choix=login">
    <table>
    <tr><td>Login :</td><td><input name="login" value=""></td></tr>
    <tr><td>Password : </td><td><input type="password" name="password" value=""></td></tr>
    <tr><td><input type="submit" name="submitMembres" value="Entrez"></td></tr>
    <tr><td><a href="index.php?choix=nonmembre">Non membre</a></td></tr>
       
    </form>
    </table>

<!--formulaire des admins-->
<h3> Administrateurs </h3>
<form method="post" action="menuAdmin.php" >
    <table>
    <tr><td>Login : </td><td><input name="login" value=""></td></tr>
    <tr><td>Password : </td><td><input type="password" name="password" value=""></td></tr>
    <tr><td colspan="2"><input type="submit" name="submitAdmin" value="Entrez"></td></tr>
</table>
    </td>
    </tr>
</form>
</table>
</section>


