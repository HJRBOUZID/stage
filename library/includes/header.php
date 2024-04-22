<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">
                <img src="assets/img/logo.png" />
            </a>
        </div>
        <?php if($_SESSION['login']) { ?>
        <div class="right-div">
            <a href="logout.php" class="btn btn-danger pull-right" style="background-color: red;" onmouseover="this.style.backgroundColor='lightred';" onmouseout="this.style.backgroundColor='red';">LOG ME OUT</a>
        </div>
        <?php } ?>
    </div>
</div>
<!-- LOGO HEADER END-->
<?php if($_SESSION['login']) { ?>
<section class="menu-section">
    <div class="container">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="dashboard.php" class="menu-top-active"><i class="fas fa-tachometer-alt"> TABLEAU DE BORD</i></a></li>
                        <li><a href="issued-books.php"><i class="fas fa-book"> Livre emprunté</i></a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> <i class="fas fa-users"> COMPTE </i> <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">MON Profile</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Changer Mot De Passe</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="chart.php"><i class="fas fa-shopping-cart"></i> Voir Panier</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } else { ?>
<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                        <li><a href="index.php"><i class="fas fa-home"> Accueil</i></a></li>
                        <li><a href="index.php#ulogin">   <i class="fas fa-user user-icon"> Connexion utilisateur</i></a></li>
                        <li><a href="signup.php"><i class="fas fa-user-plus signup-icon"> Inscription utilisateur</i></a></li>
                        <li><a href="adminlogin.php"><i class="fas fa-user-cog admin-icon">  Connexion administrateur</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
