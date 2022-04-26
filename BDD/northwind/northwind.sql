-----------------------------------------
---- 1- Liste des clients français : ----
-----------------------------------------
select CompanyName, ContactName, ContactTitle, Phone from customers
where Country like "France";

-----------------------------------------
---- 2- Liste des produits vendus par ---
--- le fournisseur "Exotic Liquids" : ---
-----------------------------------------
select ProductName as "Produit", UnitPrice as "prix" from products
join suppliers
on products.SupplierID = suppliers.SupplierID
where CompanyName like "Exotic Liquids";

-----------------------------------------
------ 3- Nombre de produits mis à ------
---- disposition par les fournisseurs ---
------ français (tri par nombre de ------
-------- produits décroissant) : --------
-----------------------------------------
select CompanyName as "Fournisseur", count(ProductID) as "Nbre produits" from products
join suppliers
on products.SupplierID = suppliers.SupplierID
where Country like "France"
group by CompanyName
order by `Nbre produits` DESC

-----------------------------------------
----- 4- Liste des clients français -----
--- ayant passé plus de 10 commandes : --
-----------------------------------------
select CompanyName as "Client", count(OrderID) as "Nbre commande" from customers
join orders
on customers.CustomerID = orders.CustomerID
where Country like "France"
group by CompanyName
having `Nbre commande` > 10

--------- a voir
SELECT CompanyName AS Client, COUNT(`order details`.OrderID) AS 'Nbre commandes' FROM products 
JOIN `order details` 
ON products.ProductID = `order details`.`ProductID`   ------ ici
JOIN orders 
ON `order details`.OrderID = orders.OrderID
JOIN customers 
on orders.CustomerID = customers.CustomerID
WHERE country LIKE 'france'
GROUP BY CompanyName
HAVING `Nbre commandes` > 10
-----------

-----------------------------------------
------ 5- Liste des clients dont le -----
----- montant cumulé de toutes les ------
--- commandes passées est supérieur à ---
--------------- 30000 € : ---------------
-----------------------------------------
-------- NB: chiffre d'affaires ---------
-------- (CA) = total des ventes --------
select CompanyName as "Client", sum(`order details`.unitPrice * `order details`.Quantity) as `CA`, ShipCountry as "Pays" from customers
join orders
on customers.CustomerID = orders.CustomerID
join `order details`
on orders.OrderID = `order details`.OrderID
group by CompanyName
having `CA` > 30000
order by CA desc;

-----------------------------------------
---- 6- Liste des pays dans lesquels ----
---- des produits fournis par "Exotic ---
------- Liquids" ont été livrés : -------
-----------------------------------------
select distinct ShipCountry as "Pays" from orders
join `order details`
on orders.OrderID = `order details`.OrderID
join products
on `order details`.ProductID = products.ProductID
join suppliers
on products.SupplierID = suppliers.SupplierID
where CompanyName like "Exotic Liquids"
order by ShipCountry asc;

-----------------------------------------
---- 7- Chiffre d'affaires global sur ---
----------- les ventes de 1997 ----------
-----------------------------------------
-- NB:chiffre d'affaires(CA) = total des ventes
select sum(`order details`.unitPrice * `order details`.Quantity) as "Montant Ventes 97" from orders
join `order details`
on orders.OrderID = `order details`.OrderID
-- where OrderDate between "1997-01-01" and "1997-12-31";
where year(OrderDate) = 1997;
-----------------------------------------
---- 8- Chiffre d'affaires détaillé -----
--- par mois, sur les ventes de 1997: ---
-----------------------------------------
select month(OrderDate) as "mois 97", sum(`order details`.unitPrice * `order details`.Quantity) as "Montant Ventes" from customers
join orders
on customers.CustomerID = orders.CustomerID
join `order details`
on orders.OrderID = `order details`.OrderID
where year(OrderDate) = 1997
group by month(OrderDate)

-----------------------------------------
----- 9-A quand remonte la dernière -----
----- commande du client nommé "Du ------
------------- monde entier" -------------
-----------------------------------------
select OrderDate as "Date de dernière commande"from `order details`
join orders
on orders.OrderID = `order details`.OrderID
join customers
on orders.CustomerID = customers.CustomerID
where CompanyName like "Du monde entier"
order by OrderDate desc
limit 1;

-----------------------------------------
---- 10- Quel est le délai moyen de -----
---------- livraison en jours ? ---------
-----------------------------------------
select floor (avg (datediff(orders.ShippedDate, orders.OrderDate))) as "Délai moyen de livraison en jours" from orders