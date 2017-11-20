--*************************************
--SELECTS
--*************************************

--Home Page top 10 recipies
select U.USERNAME, r.RECIPE_NAME, r.RECIPE_COST from RECIPE r, USER U where r.USER_ID = U.USER_ID LIMIT 0,10;

--Check if user already exists
--written for my PHP files already, but this is what it looks like
select username from Users where username = '$username'

--View other recipes user has written
--this could be used on the user profile, but i have not yet implemented the page
select * from USER U, RECIPE R WHERE U.USER_ID = R.USER_ID and U.USERNAME = 'Nick'


--*************************************
--INSERT
--*************************************

--Create Acount
--PHP Insert of username, email, and password, as user ID gets created on insert
INSERT INTO USER (username, email, password) VALUES ('$username', '$email', '$password')


--Create INGREDIENT
--Milk already exists in database
INSERT INTO `INGREDIENT` (`INGREDIENT_ID`, `INGREDIENT_COST`, `INGREDIENT_NAME`) VALUES (NULL, '.1', 'Milk')


--*************************************
--UPDATE
--*************************************

--update ingredient
UPDATE `INGREDIENT` SET `INGREDIENT_COST` = '0.25' WHERE `INGREDIENT`.`INGREDIENT_ID` = 4;

--*************************************
--TRIGGERS, FUNCTIONS, OR PROCEDURES
--*************************************
--Trigger to calculate cost
--
-- Triggers `RECIPE`
--
--I need to fix these up, I had something quite similar that worked, but now I dont think these are quite calculating correctly
DELIMITER $$
CREATE TRIGGER `Update_Cost` AFTER INSERT ON `RECIPE` FOR EACH ROW update RECIPE e
set e.RECIPE_COST = 
(select SUM(cost) from (SELECT d.RECIPE_ID, b.Ingredient_amount * c.ingredient_cost as cost FROM STEP b, INGREDIENT c, RECIPE d where b.INGREDIENT_ID = c.INGREDIENT_ID and b.RECIPE_ID = d.RECIPE_ID) as a)
$$
DELIMITER ;

--update cost procedure
DELIMITER $$
CREATE DEFINER=`cs340_skinnern`@`%` PROCEDURE `Update_Recipe_Costs`()
    NO SQL
update RECIPE e
set e.RECIPE_COST = 
(select SUM(cost) from (SELECT d.RECIPE_ID, b.Ingredient_amount * c.ingredient_cost as cost FROM STEP b, INGREDIENT c, RECIPE d where b.INGREDIENT_ID = c.INGREDIENT_ID and b.RECIPE_ID = d.RECIPE_ID) as a)$$
DELIMITER ;