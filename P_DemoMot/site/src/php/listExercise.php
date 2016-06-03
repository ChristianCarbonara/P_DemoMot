<?php
/**
 * Auteur: Christian Carbonara
 * Date: 01.06.2016
 * Résumé: Page affichant tous les exercices publiques
 */

// Inclut des pages php
include_once("../../resources/lib/header.php");
include_once("../../resources/lib/menu.php");



?> <!-- Fin php -->
<div class="main container">
    <div class="ui container info">
    <table class="info ui selectable inverted table">
        <thead >
        <tr>
            <th>Nom de l'exercice</th>
            <th>Status</th>
            <th class="right aligned">Auteur</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Approved</td>
            <td class="right aligned">None</td>
        </tr>
        <tr>
            <td>Jamie</td>
            <td>Approved</td>
            <td class="right aligned">Requires call</td>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Denied</td>
            <td class="right aligned">None</td>
        </tr>
        </tbody>
    </table>
</div>
</div>
<?php

    include_once("../../resources/lib/footer.php")
?> <!-- Fin php -->
