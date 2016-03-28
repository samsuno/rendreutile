<?php 
use Illuminate\Support\Facades\Auth;
$var = url('auth/logout');
?>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container">
    <a class="navbar-brand" href="<?php echo url('/') ?>">Rendre Utile</a>
    <?php
    if(!Auth::user()){ //if user is not authenticated
    ?>
    <div class="navbar-right">
        <a href="<?php echo url('auth/login') ?>"><button class="btn btn-success navbar-btn " ><strong>Connexion</strong></button></a>
    <a href="<?php echo url('auth/register') ?>"><button class ="btn btn-primary navbar-btn"   ><strong> Créer un compte</strong></button></a>
    </div>

    <?php
    }
    else{ //if user is authenticated
        echo '<a href="'.url('auth/logout').'"><button class="btn btn-danger navbar-btn navbar-right">Déconnexion</button></a>';
    }
    ?>
    </div>
</nav>

