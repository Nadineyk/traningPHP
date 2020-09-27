<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="home.css"/>
</head>
<body>
<nav class="nav">
    <div class="items">
        <a href="https://www.facebook.com" class="navItem"> facebook </a>
        <a href="https://www.google.com" class="navItem"> google </a>
        <a href="https://www.youtube.com" class="navItem"> youtube </a>
    </div>

</nav>
<aside class="sideBar">
    <a href="index.html" target="_blank" class="aSidebar"> Index </a>
    <a href="index.html" target="_blank" class="aSidebar"> Index </a>
    <a href="index.html" target="_blank" class="aSidebar"> Index </a>
</aside>
<div class="container">
    <div class="content">
        <table class="table">
            <thead>
            <tr>
                <th>
                    Nom
                </th>
                <th>
                    prenom
                </th>
                <th>
                    cin
                </th>
                <th>
                    salaire
                </th>
                <th>
                    supprimer
                </th>
                <th>
                    modifier
                </th>
            </tr>
            </thead>
            <tbody>
            <?php 

             
            
               for ($i =0 ; $i<1000 ; $i++){
                   if($i<=8 && $i>=4)

                echo ("
                <tr>
                 <td>
                     ABBASSI
                 </td>
                 <td>
                     Iskander
                 </td>
                 <td>
                     11392***
                 </td>
                 <td>
                ".
                     1000*$i
                . "
                 </td>
                 <td>
                     <img src='assets/icons/delete.svg' alt='delete icon' width='20'/>
                 </td>
                 <td>
                     <img src='assets/icons/transform.svg' alt='update icon' width='20'/>
                 </td>
                ");
               }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
