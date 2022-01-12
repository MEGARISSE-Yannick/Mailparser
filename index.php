<!DOCTYPE html>
<html lang="en">

<head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mailparser</title>
</head>

<body>
      <div class="column is-infos">
            <div class="column is-info">
            </div>
            <div class="column is-info">
            </div>
            <div class="column is-info">
            </div>
      </div>
      <div class="column is-infos">
            <div class="column is-info">
            </div>
            <div class="column is-info">
                  <section class="hero is-primary">
                        <div class="hero-body">
                              <p class="title">
                                    Mail Parser
                              </p>
                              <p class="subtitle">
                                    Ajoute un fichier EML pour voir ces informations
                              </p>
                        </div>
                  </section>
                  <section class="hero is-primary">
                        <div class="hero-body">
                              <p class="title">
                              <form action="viewEML.php" method="post" enctype="multipart/form-data">

                                    <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->

                                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                                    <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
                                    Envoyez ce fichier :
                                    <input class="button is-info" name="filename" id="path" type="file">

                                    
                                    <button class="button is-info " type="submit"
                                                value="Envoyer le fichier">Envoyer le fichier</button></p>
                              </form>
                        </div>
                  </section>
            </div>
            <div class="column is-info">
            </div>
      </div>
      <div class="column is-infos">
            <div class="column is-info">
            </div>
            <div class="column is-info">
            </div>
            <div class="column is-info">
            </div>
      </div>



</body>

</html>