LOT 1

1 - Afficher la liste des hôtels. Le résultat doit faire apparaître le nom de l’hôtel et la ville
SELECT hot_nom, hot_ville from hotel.hotel

2 - Afficher la ville de résidence de Mr White Le résultat doit faire apparaître le nom, le prénom, 
et l adresse du client

select "white", cli_ville from client

3 - Afficher la liste des stations dont l’altitude < 1000 Le résultat doit faire apparaître le nom de la station et l altitude

select sta_nom, sta_altitude from station
where sta_altitude < 1000

4 - Afficher la liste des chambres ayant une capacité > 1 Le résultat doit faire apparaître le numéro de la chambre ainsi que la capacité

select cha_hot_id, cha_capacite from chambre
where cha_capacite > 1

5 - Afficher les clients n’habitant pas à Londre Le résultat doit faire apparaître le nom du client et la ville

select cli_nom, cli_ville from client
where cli_ville not like "londre"

6 - Afficher la liste des hôtels située sur la ville de Bretou et possédant une catégorie>3 Le résultat doit faire apparaître le nom de l hôtel, ville et la catégorie

select hot_nom, hot_categorie, hot_ville from hotel
where hot_ville like "bretou" and hot_categorie > 3



LOT 2

7 - Afficher la liste des hôtels avec leur station Le résultat doit faire apparaître le nom de la station, le nom de l’hôtel, la catégorie, la ville

select hot_nom, hot_categorie, hot_ville, sta_nom from hotel
join station
on hotel.hot_sta_id = station.sta_id;


8 - Afficher la liste des chambres et leur hôtel Le résultat doit faire apparaître le nom de l’hôtel, la catégorie, la ville, le numéro de la chambre
select hot_nom, hot_categorie, hot_ville, cha_numero from hotel
join chambre
on chambre.cha_numero = hotel.hot_id

9 - Afficher la liste des chambres de plus d une place dans des hôtels situés sur la ville de Bretou Le résultat doit faire apparaître 
le nom de l’hôtel, la catégorie, la ville, le numéro de la chambre et sa capacité

select hot_nom, hot_categorie, hot_ville, cha_numero, cha_capacite from hotel
join chambre
on chambre.cha_hot_id = hotel.hot_id
where hotel.hot_ville like "bretou" and cha_capacite > 1


10 - Afficher la liste des réservations avec le nom des clients Le résultat doit faire apparaître le nom du client, le nom de l’hôtel, la date de réservation

select cli_nom, hot_nom, res_date from client
join reservation
on client.cli_id = reservation.res_id
join hotel
on reservation.res_id = hotel.hot_id


11 - Afficher la liste des chambres avec le nom de l’hôtel et le nom de la station Le résultat doit faire apparaître 
le nom de la station, le nom de l’hôtel, le numéro de la chambre et sa capacité

select sta_nom, hot_nom, cha_numero, cha_capacite from chambre
join hotel
on chambre.cha_hot_id = hotel.hot_id
join station
on hotel.hot_sta_id = station.sta_id

12 - Afficher les réservations avec le nom du client et le nom de l’hôtel AVEC datediff Le résultat doit faire apparaître 
le nom du client, le nom de l’hôtel, la date de début du séjour et la durée du séjour

select cli_nom, hot_nom, res_date_debut, datediff (res_date_debut , res_date_fin) from client
join reservation
on client.cli_id = reservation.res_cli_id
join hotel
on reservarion.res_cha_id = hotel.hot_id



LOT 3

13 - Compter le nombre d’hôtel par station

select sta_nom, count(hot_sta_id) from hotel
join station
on hotel.hot_sta_id = station.sta_id
group by sta_id

14 - Compter le nombre de chambre par station

select sta_nom, count(cha_id) from chambre
join hotel
on chambre.cha_hot_id = hotel.hot_id
join station
on hotel.hot_sta_id = station.sta_id
group by sta_id

15 - Compter le nombre de chambre par station ayant une capacité > 1

select sta_nom, count(cha_id) from chambre
join hotel
on chambre.cha_hot_id = hotel.hot_id
join station
on hotel.hot_sta_id = station.sta_id
where cha_capacite > 1
group by sta_id

16 - Afficher la liste des hôtels pour lesquels Mr Squire a effectué une réservation

select hot_nom, cli_nom from client
join reservation
on client.cli_id = reservation.res_cli_id
join chambre
on reservation.res_cha_id = chambre.cha_id
join hotel
on chambre.cha_hot_id = hotel.hot_id
where cli_nom like "Squire"
group by hot_nom



17 - Afficher la durée moyenne des réservations par station

select sta_nom, avg(datediff(res_date_debut, res_date_fin)) from reservation
join station
group by sta_nom