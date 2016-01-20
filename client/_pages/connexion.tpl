<div class="row connexion">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center">Code générale</h1>
        <div class="login-panel panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Connexion</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="">
                    <fieldset>
                        <div class="form-group">
                          <input class="form-control" placeholder="Adresse mail" name="email" type="email" value=""  required autofocus>
                            {if $errors['email']}
                                <span style="color:#a94442;">{$errors['email']}</span>
                            {/if}
                        </div>
                        <br/>
                        <div class="form-group">
                            <input class="form-control" placeholder="Mot de passe" name="password" value="mpd" type="password" value="" required>
                            {if $errors['password']}
                                <span style="color:#a94442;">{$errors['password']}</span>
                            {/if}
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="remember">Se souvenir de moi
                            </label>
                        </div>
                        {if $errors['connexion']}
                            <div class="alert alert-danger" role="alert">
                                {$errors['connexion']}
                            </div>
                        {/if}
                        <!-- Change this to a button or input when using this as a form -->
                        <input  type="submit" class="btn btn-sm btn-primary btn-block" value="Se connecter" > 
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
