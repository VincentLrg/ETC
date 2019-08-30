<?php
    if(isset($_POST['submit'])){
        $prenom = htmlspecialchars(stripslashes(trim($_POST['prenom'])));
        $nom = htmlspecialchars(stripslashes(trim($_POST['nom'])));
        $codePostal = htmlspecialchars(stripslashes(trim($_POST['codePostal'])));
        $telephone = htmlspecialchars(stripslashes(trim($_POST['telephone'])));
        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
        $sujet = htmlspecialchars(stripslashes(trim($_POST['sujet'])));
        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
        if(!preg_match("/^[A-Za-z .'-]+$/", $prenom)){
        $prenom_error = 'Merci de rentrer un prénom valide.';
        }
        if(!preg_match("/^[A-Za-z .'-]+$/", $nom)){
        $nom_error = 'Merci de rentrer un nom valide.';
        }
        if(!preg_match('/^[0-9]*$/', $codePostal)){
        $CP_error = 'Merci de rentrer un code postal valide.';
        }
        if(!preg_match('/^[0-9]*$/', $telephone)){
        $telephone_error = 'Merci de rentrer un numéro de téléphone valide.';
        }
        if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
        $email_error = 'Le mail saisi est invalide.';
        }
        if(strlen($message) === 0){
        $message_error = 'Votre message ne doit pas être vide.';
        }
        if(!isset($_POST['consent'])){
            $consent_error = "Vous devez consentir avoir compris que les informations saisies ne seront utilisées qu'à but de relation commerciale.";
        }
    }
?>      
<!-- Consentement : Exploitation des donnees dans le cadre de la demande de contact et de la relation commerciale qui peut en decouler.       -->
<section class="contactArea">
    <div class="row justify-content-center">
        <div class="h2Contact col-10">
            <h2>Une question ? Un projet ?</h2>
        </div>
        <div class="pContact col-10">
            <p>Remplissez ce formulaire, nous vous donnerons une réponse dans les meilleurs délais.</p>
            <p><small>*champs obligatoires</small></p>
        </div>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="row justify-content-center">
            <div class="field col-xs-10 col-sm-6 col-md-5">
                <p><?php if(isset($prenom_error)) echo $prenom_error; ?></p>
                <input type="text" name="prenom" id="prenom" placeholder="" required>
                <label for="prenom">Prénom</label>
            </div>
            <div class="field col-xs-10 col-sm-6 col-md-5">
                <p><?php if(isset($nom_error)) echo $nom_error; ?></p>
                <input type="text" name="nom" id="nom" placeholder="" required>
                <label for="nom">Nom</label>
            </div>
            <div class="field col-xs-10 col-sm-6 col-md-5">
                <p><?php if(isset($CP_error)) echo $CP_error; ?></p>
                <input type="text" name="codePostal" id="codePostal" placeholder="" required>
                <label for="codePostal">Code Postal</label>
            </div>
            <div class="field col-xs-10 col-sm-6 col-md-5">
                <p><?php if(isset($telephone_error)) echo $telephone_error; ?></p>
                <input type="text" name="telephone" id="tel" placeholder="" required>
                <label for="telephone">Téléphone</label>
            </div>
            <div class="field col-xs-10 col-sm-6 col-md-5">
                <p><?php if(isset($email_error)) echo $email_error; ?></p>
                <input type="email" name="email" id="email" placeholder="" required>
                <label for="email">Email</label>
            </div>
            <div class="field col-xs-10 col-sm-6 col-md-5">
                <select name="sujet" id="sujet" required>
                    <option value="Etude thermique">Etude thermique et environnementale</option>
                    <option value="Etude rénovation">Etude rénovation</option>
                    <option value="Audit thermique">Audit</option>
                    <option value="Etude acoustique">Etude acoustique</option>
                    <option value="Mesure acoustique">Mesure acoustique</option>
                    <option value="Ingenierie">Ingénierie</option>
                    <option value="Autre sujet">Autres</option>
                </select>
                <label for="sujet">Sujet</label>
            </div>
            <div class="field col-xs-10 col-sm-12 col-md-10">
                <p><?php if(isset($message_error)) echo $message_error; ?></p>
                <textarea name="message" id="message" placeholder="" rows="1" required></textarea>
                <label for="message">Message</label>
            </div>
            <div class="field-row col-xs-10 col-sm-12 col-md-10">
                <p><?php if(isset($consent_error)) echo $consent_error; ?></p>
                <input type="checkbox" name="consent" id="consent" class="appear my-auto" placeholder="" required>
                <label for="consent">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la relation commerciale qui peut en découler.</label>
            </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" name="submit" class="validate col-5 col-sm-4 col-md-3 col-lg-2 col-xl-1">Envoyer</button>
            </div>
            <?php 
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;
                
                require 'PHPMailer/src/Exception.php';
                require 'PHPMailer/src/PHPMailer.php';
                require 'PHPMailer/src/SMTP.php';
                if(isset($_POST['submit']) && !isset($prenom_error) && !isset($nom_error) && !isset($telephone_error) && !isset($CP_error) && !isset($email_error) && !isset($message_error) && !isset($consent_error)){
                    $mail = new PHPMailer(true);
                    try {
                        //Server settings
                        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                        $mail->isSMTP();                                            // Set mailer to use SMTP
                        $mail->Host       = "smtp.office365.com";                   // Specify main and backup SMTP servers
                        $mail->Port       = 587;                                    // TCP port to connect to
                        $mail->SMTPSecure = 'tsl';                                  // Enable TLS encryption, `ssl` also accepted 
                        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                        $mail->Username   = 'm.savreux@be-etc.com';                 // SMTP username
                        $mail->Password   = 'Eaga6413';                             // SMTP password
                        
                        //Recipients
                        $mail->setFrom("m.savreux@be-etc.com", "Bureau d'études ETC");

                        $mail->addAddress('m.savreux@be-etc.com');          // Add a recipient
                    
                        // Content
                        $mail->isHTML(true);                                        // Set email format to HTML
                        $mail->CharSet = 'UTF-8';                                
                        $mail->Subject = "Demande: $sujet";
                        $mail->Body    = "Nom : $nom<br />Prenom : $prenom<br />Code postal : $codePostal<br />Telephone : $telephone<br />Email : $email<br />Sujet : $sujet<br />Message : $message<br />Consentement : Exploitation des donnees dans le cadre de la demande de contact et de la relation commerciale qui peut en decouler.";

                        $mail->AltBody = "Nom: $nom\nPrénom: $prenom\nCode Postal: $codePostal\nTéléphone: $telephone\nE-mail: $email\nSujet: $sujet\nMessage: $message\nConsentement: Exploitation des données dans le cadre de la demande de contact et de la relation commerciale qui peut en decouler.";
                    
                        $mail->send();
                        ?>
                        <div class="mailAlert d-flex justify-content-center fade show">
                            <div class="alert alert-success alert-dismissible fade show my-auto" role="alert">
                                <strong>Votre message a été envoyé avec succès.</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <?php
                    }
                    catch (Exception $e){
                        ?>
                        <div class="mailAlert d-flex justify-content-center fade show">
                            <div class="alert alert-danger alert-dismissible fade show my-auto" role="alert">
                                <strong>Le message n'a pas pu être envoyé. Merci de réessayer</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
    </form>
</section>