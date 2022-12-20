# Week 3, Opdracht 1 

## $_SERVER ['REQUEST METHOD']

### Wordt gebruikt om meer te weten te komen over de aanvraagmethode (bijvoorbeeld GET, POST, PUT, enz.) die wordt gebruikt om toegang te krijgen tot de pagina.

## $_POST['submit']

### Variabele die wordt gebruikt om formuliergegevens te verzamelen na het indienen van een HTML-formulier met method="post". Ook word er geen data in de URL weergegeven met POST.

## Wat is het verschil

### Het verschil is dat $_SERVER kijkt welke methode er gebruikt word en $_POST is een methode die gebruikt word om data te versturen.

## Wat doet stripslashes, addslashes, htmlspecialchars

### stripslashes() kan worden gebruikt als je deze gegevens niet invoegt bij bijvoorbeeld een database waarvoor escape nodig is. Als je bijvoorbeeld gewoon gegevens rechtstreeks uit een HTML-formulier uitvoert.

### addlashes() wordt soms verkeerd gebruikt om SQL-injectie te voorkomen. In plaats daarvan moeten database-specifieke escape-functies zoals prepared statements worden gebruikt.

### htmlspecialchars() is een ingebouwde functie in PHP die wordt gebruikt om alle vooraf gedefinieerde tekens naar HTML te converteren.