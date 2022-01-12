
<?php
//avec ISSET
//Si la variable $_POST['filename'] existe, alors $filename = $_POST['filename']  sinon elle vaut NULL 
$filename = isset($_POST['filename']) ? $_POST['filename'] : NULL;

//ou avec !EMPTY() 
//Si la variable $_POST['filename'] existe et n'est pas vide, alors $filename = $_POST['filename']  sinon elle vaut NULL 
$filename = !empty($_POST['filename']) ? $_POST['filename'] : NULL;

define('EML_FILE_PATH','source/');

@$filename = substr($_GET['filename'],0,50);
$findme = "lang";


if ($filename == '') $filename = $_FILES['filename']['name'];
$eml_file = EML_FILE_PATH.$filename;

if (!($content = fread(fopen(EML_FILE_PATH.$filename, 'r'), filesize(EML_FILE_PATH.$filename))))
    die('Introuvable ('.EML_FILE_PATH.$filename.')');

if (strpos($content,'_-') !== false) $separator = '--';
else $separator = '==';
$aContent = explode($separator,$content);

foreach($aContent as $thisContent) {

    $pos = strpos($thisContent,$findme);

    if ($findme !== false) {
        $compte = strlen($thisContent);
        // echo "La chaine '$findme' débute à la position $pos ";
        $reste = $pos+$compte;
        $rest = substr($thisContent,0,$pos);    
        //echo $rest;
    } 
    else {
       echo  "rien n'a été trouvé";
    }
}
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '';
echo '<head>';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Mailparser</title>';
echo '</head>';
echo '';
echo '<body>';
echo '<div class="column is-infos">';
echo '<div class="column is-info">';
echo '</div>';
echo '<div class="column is-info">';
echo '</div>';
echo '<div class="column is-info">';
echo '</div>';
echo '</div>';
echo '<div class="column is-infos">';
echo '<div class="column is-info">';
echo '</div>';
echo '<div class="column is-info">';
echo '<section class="hero is-primary">';
echo '<div class="hero-body">';
echo '<p class="title">';
echo 'Mail Parser';
echo '</p>';
echo '<p class="subtitle">';
echo 'Information concernant le fichier EML<br>';
echo 'Nom du fichier EML selectionné :'.$filename;
echo '</p>';
echo '</div>';
echo '</section>';
echo '<section class="hero is-primary">';
echo '<div class="hero-body">';
echo '<p class="title">';
echo ''.$rest;
echo '</section>';
echo '</div>';
echo '<div class="column is-info">';
echo '</div>';
echo '</div>';
echo '<div class="column is-infos">';
echo '<div class="column is-info">';
echo '</div>';
echo '<div class="column is-info">';
echo '</div>';
echo '<div class="column is-info">';
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>
        
    