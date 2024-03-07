<?php
/* 
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
*/
//var_dump($_POST);
//var_dump(empty($_POST));

    $length = strlen($_POST['sentence']);

    //echo "<div>Your sentence: {$_POST['sentence']} (Length: $length)</div>";

    $censoredSentence = str_replace($_POST['censorship'], '***', $_POST['sentence']);
    $censoredLength = strlen($censoredSentence);

    //echo "<div>Your censored sentence: $censoredSentence (Length: $censoredLength)</div>";

/* 
  str_replace(search, replace, subject);
  search: La sottostringa da cercare.
  replace: La sottostringa con cui sostituire ogni occorrenza trovata.
  subject: La stringa o l'array di stringhe in cui eseguire la sostituzione.

*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <form action="" method="post">
            <label for="sentence">Enter your sentence</label>
            <input type="text" name="sentence" id="sentence" required>            
            <label for="censorship">Word to be censored</label>
            <input type="text" name="censorship" id="censorship" required>
            <button class="btn btn-primary" type="submit">Click</button>
        </form>
        <div><?php echo "<div>Your sentence: {$_POST['sentence']} (Length: $length)</div>"?></div>
        <div><?php echo "<div>Your censored sentence: $censoredSentence (Length: $censoredLength)</div>"?></div>
    </div>
</body>
</html>