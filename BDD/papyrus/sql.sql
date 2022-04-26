--------------------------------------------------------------------------------------------------------------------------
------------- Vous devez préparer le développement de l’application, et coder les requêtes correspondant aux -------------
--------------------------------- besoins d'affichage définis ci-dessous en langage SQL. ---------------------------------
--------------------------------------------------------------------------------------------------------------------------

--------------------------------------------------------------
---- 1. Quelles sont les commandes du fournisseur 09120 ? ----
--------------------------------------------------------------
select numcom from entcom
where numfou like "%9120%";

--------------------------------------------------------------
----- 2. Afficher le code des fournisseurs pour lesquels -----
--------------- des commandes ont été passées. ---------------
--------------------------------------------------------------
select numfou from entcom;

--------------------------------------------------------------
------ 3. Afficher le nombre de commandes fournisseurs -------
------- passées, et le nombre de fournisseur concernés. ------
--------------------------------------------------------------
select count(numcom), count(distinct(numfou)) from entcom;

--------------------------------------------------------------
----- 4. Editer les produits ayant un stock inférieur ou -----
---- égal au stock d'alerte, et dont la quantité annuelle ----
------------------- est inférieure à 1000. -------------------
--------------------------------------------------------------
--    Informations à fournir : n° produit, libellé produit, stock actuel, stock d'alerte, quantité annuelle)
select codart, libart, stkale, stkphy, qteann from produit
where stkphy < stkale and qteann < 1000;

--------------------------------------------------------------
------- 5. Quels sont les fournisseurs situés dans les -------
--------------- départements 75, 78, 92, 77 ? ----------------
--------------------------------------------------------------
--    L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique.
select nomfou, posfou from fournis
where posfou like "75%" or posfou like "78%" or posfou like "92%" or posfou like "77%"
order by posfou desc, nomfou asc;

--------------------------------------------------------------
---- 6. Quelles sont les commandes passées en mars et en -----
-------------------------- avril ? ---------------------------
--------------------------------------------------------------
select * from entcom
where datcom between "2018-03-01" and "2018/04/31";

--------------------------------------------------------------
----- 7. Quelles sont les commandes du jour qui ont des ------
---------------- observations particulières ? ----------------
--------------------------------------------------------------
--    Afficher numéro de commande et date de commande
select numcom, datcom, obscom from entcom
where obscom not like "";

--------------------------------------------------------------
------- 8. Lister le total de chaque commande par total ------
------------------------ décroissant. ------------------------
--------------------------------------------------------------
--    Afficher numéro de commande et total
SELECT ligcom.numcom, Sum(ligcom.qtecde * ligcom.priuni) AS Total FROM ligcom
GROUP BY ligcom.numcom
ORDER BY Total desc;

--------------------------------------------------------------
---- 9. Lister les commandes dont le total est supérieur -----
------ à 10000€ ; on exclura dans le calcul du total les -----
-- articles commandés en quantité supérieure ou égale à 1000. 
--------------------------------------------------------------
--    Afficher numéro de commande et total
select numcom, qtecde * priuni from ligcom
where qtecde * priuni > 10000
and qtecde < 1000

--------------------------------------------------------------
------ 10. Lister les commandes par nom de fournisseur. ------
--------------------------------------------------------------
--    Afficher nom du fournisseur, numéro de commande et date
select distinct nomfou, numcom, datcom from vente
join fournis
on vente.numfou = fournis.numfou
join entcom
on fournis.numfou = entcom.numfou;

--------------------------------------------------------------
----- 11. Sortir les produits des commandes ayant le mot -----
------------------ "urgent' en observation. ------------------
--------------------------------------------------------------
--    Afficher numéro de commande, nom du fournisseur, 
--          libellé du produit et sous total 
--      (= quantité commandée * prix unitaire)
select distinct numcom , nomfou, libart, obscom from entcom
join fournis
on entcom.numfou = fournis.numfou
join vente
on fournis.nomfou = vente.qte1
join produit
on vente.qte1 = produit.libart
where obscom like "%urgent%";

--------------------------------------------------------------
------- 12. Coder de 2 manières différentes la requête -------
--- suivante : Lister le nom des fournisseurs susceptibles ---
--------------- de livrer au moins un article. ---------------
--------------------------------------------------------------
select nomfou, codart, libart from fournis
join vente
on fournis.numfou = vente.numfou
join produit
on vente.codart = produit.codart
where delliv > 1;

--------------------------------------------------------------
------ 13. Coder de 2 manières différentes la requête --------
----- suivante : Lister les commandes dont le fournisseur ----
------------- est celui de la commande n°70210. --------------
--    Afficher numéro de commande et date
--------------------------------------------------------------
select numcom, datcom from entcom
where numcom like "70210";

select numcom, datcom from entcom
where numcom in 70210;
--------------------------------------------------------------
----- 14. Dans les articles susceptibles d’être vendus, ------
---- lister les articles moins chers (basés sur Prix1) que ---
------ le moins cher des rubans (article dont le premier -----
----------------- caractère commence par R). -----------------
--    Afficher libellé de l’article et prix1
select libart, prix1 from vente
join produit
on vente.codart = produit.codart
where libart like "r%"
order by prix1 asc
--------------------------------------------------------------
---- 15. Editer la liste des fournisseurs susceptibles de ----
----- livrer les produits dont le stock est inférieur ou -----
-------------- égal à 150 % du stock d'alerte. ---------------
--------------------------------------------------------------
--    La liste sera triée par produit puis fournisseur
select libart, nomfou from fournis
join vente
on fournis.numfou = vente.numfou
join produit
on vente.numfou = produit.codart
where stkale < 150%
--------------------------------------------------------------
---- 16. Éditer la liste des fournisseurs susceptibles de ----
----- livrer les produits dont le stock est inférieur ou -----
------- égal à 150 % du stock d'alerte, et un délai de -------
-------------- livraison d'au maximum 30 jours. --------------
--------------------------------------------------------------
--    La liste sera triée par fournisseur puis produit

--------------------------------------------------------------
------ 17. Avec le même type de sélection que ci-dessus, -----
------ sortir un total des stocks par fournisseur, triés -----
------------------- par total décroissant. -------------------
--------------------------------------------------------------

--------------------------------------------------------------
---- 18. En fin d'année, sortir la liste des produits dont ---
----- la quantité réellement commandée dépasse 90% de la -----
----------------- quantité annuelle prévue. ------------------
--------------------------------------------------------------

--------------------------------------------------------------
--- 19. Calculer le chiffre d'affaire par fournisseur pour ---
--- l'année 2018, sachant que les prix indiqués sont hors ----
------------ taxes et que le taux de TVA est 20%. ------------
--------------------------------------------------------------
