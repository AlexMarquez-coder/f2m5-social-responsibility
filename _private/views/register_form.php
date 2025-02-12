<?php $this->layout('layouts::website');?>

<h3>Inschrijven</h3>

<p>Schrijf u snel in op de website om gebruik te maken van alle fantastische features.</p>

<form action="<?php echo url("register.handle")?>" method="POST">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email" aria-describedby="email">
        <small id="emailHelp" class="fotm-text text-muted">We delen uw e-mail adres met niemand, uw gegevens zijn veilig.</small>
        <?php if ( isset ( $errors['email'] ) ): ?>
            <?php echo $errors['email'] ?>
        <?php endif;?>
    </div>
    <div class="form-group">
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" class="form-control" id="wachtwoord">
        <?php if ( isset ( $errors['wachtwoord'] ) ): ?>
            <?php echo $errors['wachtwoord'] ?>
        <?php endif;?>
    </div>
    <button type="submit" class="btn btn-primary">Registreren</button>
</form>