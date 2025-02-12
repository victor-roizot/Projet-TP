<!-- L'utilisateur créera son compte  par ce formulaire -->
<section>
    <h1>Inscription</h1>
    <?php if (isset($success)) { ?>
        <p class="success"><?= $success ?></p>
    <?php } ?>
    <div class="formContainer">
        <form class="form" action="/inscription" method="post">

            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" placeholder="Dupont">
            <?php if (isset($errors['lastname'])) { ?>
                <p class="errors"><?= $errors['lastname'] ?></p>
            <?php } ?>

            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" id="firstname" placeholder="Jean">
            <?php if (isset($errors['firstname'])) { ?>
                <p class="errors"><?= $errors['firstname'] ?></p>
            <?php } ?>

            <label for="address">Adresse :</label>
            <input type="text" name="address" id="address" placeholder="5 rue de la republique">
            <?php if (isset($errors['address'])) { ?>
                <p class="errors"><?= $errors['address'] ?></p>
            <?php } ?>

            <label for="zipCode">Code postal :</label>
            <input type="text" name="zipCode" id="zipCode" placeholder="75000">
            <?php if (isset($errors['zipCode'])) { ?>
                <p class="errors"><?= $errors['zipCode'] ?></p>
            <?php } ?>

            <label for="city">Ville :</label>
            <input type="text" name="city" id="city" placeholder="PARIS">
            <?php if (isset($errors['city'])) { ?>
                <p class="errors"><?= $errors['city'] ?></p>
            <?php } ?>

            <label for="phoneNumber">Numéro de téléphone :</label>
            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="06 00 00 00 00">
            <?php if (isset($errors['phoneNumber'])) { ?>
                <p class="errors"><?= $errors['phoneNumber'] ?></p>
            <?php } ?>

            <label for="email">Adresse mail :</label>
            <input type="email" name="email" id="email" placeholder="jean.dupont@gmail.com">
            <?php if (isset($errors['email'])) { ?>
                <p class="errors"><?= $errors['email'] ?></p>
            <?php } ?>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" placeholder="Azerty123!">
            <?php if (isset($errors['password'])) { ?>
                <p class="errors"><?= $errors['password'] ?></p>
            <?php } ?>

            <label for="password_confirm">Confirmation du mot de passe :</label>
            <input class="upsubmitbtn" type="password" name="password_confirm" id="password_confirm" placeholder="Azerty123!">
            <?php if (isset($errors['password_confirm'])) { ?>
                <p class="errors"><?= $errors['password_confirm'] ?></p>
            <?php } ?>

            <input class="submit" type="submit" value="S'inscrire">
        </form>
    </div>
</section>