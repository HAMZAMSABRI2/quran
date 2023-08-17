<?php



if ($demarcheId == 1) {
    if ($je_suis == 'particulier') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="cession"> Certificat de cession d’un véhicule d’occasion ou facture d’achat : </label>';
        echo '<input type="file" name="cession" id="file_upload">';

        echo '<br/><label for="controle_technique">Procès-verbal du contrôle technique de moins de 6 mois : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';
    }
    if ($je_suis == 'professionnel') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="cession"> Certificat de cession d’un véhicule d’occasion ou facture d’achat : </label>';
        echo '<input type="file" name="cession" id="file_upload">';

        echo '<br/><label for="controle_technique">Procès-verbal du contrôle technique de moins de 6 mois : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }
    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }
    if ($heberge == 'oui') {

        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}


if ($demarcheId == 2) {
    if ($je_suis == 'particulier') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';


        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="controle_technique">Procès verbal de contrôle technique en cours de validité : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="controle_technique">Procès verbal de contrôle technique en cours de validité : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';
    }

    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    if ($heberge == 'oui') {
        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}

if ($demarcheId == 3) {

    if ($je_suis == 'particulier') {

        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="document">Document attestant de la correction à effectuer : </label>';
        echo '<input type="file" name="document" id="file_upload">';

        echo '<br/><label for="controle_technique">Procès verbal de contrôle technique en cours de validité : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {
        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    if ($heberge == 'oui') {
        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}


if ($demarcheId == 4) {

    if ($je_suis == 'particulier') {
        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="declaration">Déclaration de perte (cerfa 13753)  : </label>';
        echo '<input type="file" name="declaration" id="file_upload">';

        echo '<br/><label for="controle_technique">Procès verbal de contrôle technique en cours de validité : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {
        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="declaration">Déclaration de perte (cerfa 13753)  : </label>';
        echo '<input type="file" name="declaration" id="file_upload">';
    }

    echo '<br/><label for="declaration">Copie de la carte grise détériorée : </label>';
    echo '<input type="file" name="declaration" id="file_upload">';



    echo '<br/><label for="declaration">Procès verbal de dépôt de plainte </label>';
    echo '<input type="file" name="declaration" id="file_upload">';

    if ($heberge == 'oui') {
        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}


if ($demarcheId == 5) {

    if ($je_suis == 'particulier') {

        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';


        echo '<br/><label for="declaration">Déclaration de perte (cerfa 13753)  : </label>';
        echo '<input type="file" name="declaration" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {
        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    echo '<br/><label for="declaration">Procès verbal de dépôt de plainte </label>';
    echo '<input type="file" name="declaration" id="file_upload">';

    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    if ($heberge == 'oui') {
        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';


        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }
}


if ($demarcheId == 6) {

    if ($je_suis == 'particulier') {
        echo '<br/><label for="controle_technique">Procès-verbal du contrôle technique de moins de 6 mois : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="cartegriset"> Carte grise étrangères  : </label>';
        echo '<input type="file" name="cartegriset" id="file_upload">';

        echo '<br/><label for="fiscale">  Quitus fiscal  : </label>';
        echo '<input type="file" name="fiscale" id="file_upload">';

        echo '<br/><label for="dedoune"> Dédouanement 846a si véhicule importé d’un pays hors union européenne  : </label>';
        echo '<input type="file" name="dedoune" id="file_upload">';

        echo '<br/><label for="conformite">  Certificat de conformité (coc)  : </label>';
        echo '<input type="file" name="conformite" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {

        echo '<br/><label for="cession"> Certificat de cession d’un véhicule d’occasion ou facture d’achat : </label>';
        echo '<input type="file" name="cession" id="file_upload">';

        echo '<br/><label for="controle_technique">Procès-verbal du contrôle technique de moins de 6 mois : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';


        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="cartegriset"> Carte grise étrangères  : </label>';
        echo '<input type="file" name="cartegriset" id="file_upload">';

        echo '<br/><label for="fiscale">  Quitus fiscal  : </label>';
        echo '<input type="file" name="fiscale" id="file_upload">';

        echo '<br/><label for="dedoune"> Dédouanement 846a si véhicule importé d’un pays hors union européenne  : </label>';
        echo '<input type="file" name="dedoune" id="file_upload">';
    }

    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    if ($heberge == 'oui') {

        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}


if ($demarcheId == 8) {

    if ($je_suis == 'particulier') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';


        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="facture">Facture d’achat si vendeur professionnel  : </label>';
        echo '<input type="file" name="facture" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="facture">Facture d’achat si vendeur professionnel  : </label>';
        echo '<input type="file" name="facture" id="file_upload">';
    }

    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }
    if ($heberge == 'oui') {

        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}
if ($demarcheId == 9) {

    if ($je_suis == 'particulier') {
        echo '<br/><label for="cession"> Certificat de cession d’un véhicule d’occasion ou facture d’achat : </label>';
        echo '<input type="file" name="cession" id="file_upload">';

        echo '<br/><label for="controle_technique">Procès-verbal du contrôle technique de moins de 6 mois : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';


        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="cartegriset"> Carte grise étrangères  : </label>';
        echo '<input type="file" name="cartegriset" id="file_upload">';

        echo '<br/><label for="fiscale">  Quitus fiscal  : </label>';
        echo '<input type="file" name="fiscale" id="file_upload">';

        echo '<br/><label for="dedoune"> Dédouanement 846a si véhicule importé d’un pays hors union européenne  : </label>';
        echo '<input type="file" name="dedoune" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {

        echo '<br/><label for="controle_technique">Procès-verbal du contrôle technique de moins de 6 mois : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';


        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="cartegriset"> Carte grise étrangères  : </label>';
        echo '<input type="file" name="cartegriset" id="file_upload">';

        echo '<br/><label for="fiscale">  Quitus fiscal  : </label>';
        echo '<input type="file" name="fiscale" id="file_upload">';

        echo '<br/><label for="dedoune"> Dédouanement 846a si véhicule importé d’un pays hors union européenne  : </label>';
        echo '<input type="file" name="dedoune" id="file_upload">';

        echo '<br/><label for="conformite">  Certificat de conformité (coc)  : </label>';
        echo '<input type="file" name="conformite" id="file_upload">';
    }


    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }
    if ($heberge == 'oui') {

        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}


if ($demarcheId == 10) {
    if ($je_suis == 'particulier') {
        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="facture">Facture d’achat si vendeur professionnel  : </label>';
        echo '<input type="file" name="facture" id="file_upload">';

        echo '<br/><label for="cerfa">Cerfa 13749 (formulaire 3 en 1)  : </label>';
        echo '<input type="file" name="cerfa" id="file_upload">';
    }


    if ($je_suis == 'professionnel') {
        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';


        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="cerfa">Cerfa 13749 (formulaire 3 en 1)  : </label>';
        echo '<input type="file" name="cerfa" id="file_upload">';
    }

    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    if ($heberge == 'oui') {

        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="attestationheb">Attestation d’hébergement  : </label>';
        echo '<input type="file" name="attestationheb" id="file_upload">';
    }
}

if ($demarcheId == 12) {



    if ($je_suis == 'professionnel') {
        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';


        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';



        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }
}

if ($demarcheId == 13) {
    if ($je_suis == 'particulier') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';
    }
}


if ($demarcheId == 14) {
    if ($je_suis == 'particulier') {
        echo '<br/><label for="cession"> Certificat de cession d’un véhicule d’occasion ou facture d’achat : </label>';
        echo '<input type="file" name="cession" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {
        echo '<br/><label for="cession"> Certificat de cession d’un véhicule d’occasion ou facture d’achat : </label>';
        echo '<input type="file" name="cession" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';
    }
}


if ($demarcheId == 15) {
    if ($je_suis == 'particulier') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="conformitech"> Certificat de conformité qui atteste du changement apporté : </label>';
        echo '<input type="file" name="conformitech" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';


        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }
    if ($heberge == 'oui') {

        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}


if ($demarcheId == 16) {
    if ($je_suis == 'particulier') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';


        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="domicile">Justificatif de domicile : </label>';
        echo '<input type="file" name="domicile" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="attestationff">Attestation FFVE : </label>';
        echo '<input type="file" name="attestationff" id="file_upload">';
    }

    if ($je_suis == 'professionnel') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';


        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="attestationff">Attestation FFVE : </label>';
        echo '<input type="file" name="attestationff" id="file_upload">';
    }

    if ($co_titulaire == 'oui') {
        echo '<br/><label for="identite">Justificatif d’identité du co-titulaire : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    echo '<br/><label for="cession"> Certificat de cession d’un véhicule d’occasion ou facture d’achat : </label>';
    echo '<input type="file" name="cession" id="file_upload">';

    echo '<br/><label for="accuse">  Accusé de déclaration d’achat du véhicule : </label>';
    echo '<input type="file" name="accuse" id="file_upload">';

    if ($heberge == 'oui') {

        echo '<br/><label for="attestation">Attestation d’hébergement signée par l’hébergeant : </label>';
        echo '<input type="file" name="attestation" id="file_upload">';

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}


if ($demarcheId == 21) {
    if ($je_suis == 'particulier') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="assurance">Assurance : </label>';
        echo '<input type="file" name="assurance" id="file_upload">';


        echo '<br/><label for="identite">Justificatif d’identité : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="permis">Permis de conduire : </label>';
        echo '<input type="file" name="permis" id="file_upload">';

        echo '<br/><label for="certificat">Demande de cerificat d’immatriculation d’un véhicule : </label>';
        echo '<input type="file" name="certificat" id="file_upload">';


        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';


        echo '<br/><label for="lettre">Lettre de désistements sur leur droit au véhicule des cohéritiers : </label>';
        echo '<input type="file" name="lettre" id="file_upload">';

        echo '<br/><label for="controle_technique">Procès verbal de contrôle technique en cours de validité : </label>';
        echo '<input type="file" name="controle_technique" id="file_upload">';

        echo '<br/><label for="documentnot">Document de succession du notaire : </label>';
        echo '<input type="file" name="documentnot" id="file_upload">';
    }

    if ($heberge == 'oui') {

        echo '<br/><label for="justificatif">Justificatif d’identité de l’hébergeant : </label>';
        echo '<input type="file" name="justificatif" id="file_upload">';

        echo '<br/><label for="attestationheb">Attestation d’hébergement  : </label>';
        echo '<input type="file" name="attestationheb" id="file_upload">';

        echo '<br/><label for="certificat"> justificatif de domicile de moins de 6 mois au nom de l’hébergeant.: </label>';
        echo '<input type="file" name="certificat" id="file_upload">';
    }
}


if ($demarcheId == 31) {
    if ($je_suis == 'particulier') {
        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="cession"> Certificat de cession d’un véhicule d’occasion ou facture d’achat : </label>';
        echo '<input type="file" name="cession" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';


        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';
    }

    echo '<br/><label for="accuse">  Accusé de déclaration d’achat du véhicule : </label>';
    echo '<input type="file" name="accuse" id="file_upload">';
}

if ($demarcheId == 24) {
    if ($je_suis == 'professionnel') {

        echo '<br/><label for="cartegrise">Carte grise : </label>';
        echo '<input type="file" name="cartegrise" id="file_upload">';

        echo '<br/><label for="mandat">Mandat : </label>';
        echo '<input type="file" name="mandat" id="file_upload">';

        echo '<br/><label for="kbis">Kbis : </label>';
        echo '<input type="file" name="kbis" id="file_upload">';

        echo '<br/><label for="identite">Justificatif d’identité du gérant : </label>';
        echo '<input type="file" name="identite" id="file_upload">';

        echo '<br/><label for="garage"> Demande de w garage  </label>';
        echo '<input type="file" name="garage" id="file_upload">';

        echo '<br/><label for="regularite">  Attestation de régularité fiscale  </label>';
        echo '<input type="file" name="regularite" id="file_upload">';
    }

    echo '<br/><label for="accuse">  Accusé de déclaration d’achat du véhicule : </label>';
    echo '<input type="file" name="accuse" id="file_upload">';
}


if ($demarcheId == 25) {
    echo '<br/><label for="accuse">  Accusé de déclaration d’achat du véhicule : </label>';
    echo '<input type="file" name="accuse" id="file_upload">';
}