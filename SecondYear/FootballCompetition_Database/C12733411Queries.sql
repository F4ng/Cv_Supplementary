/*
Title: 
DT228/2 Databases I
Continuous Assessment 
Semester I 2013/2014
Part 2 of 3 – Database Design 
    
  
Student: C12733411
Case Study: Football Compition
Date: 25/11/2013

*/





/*
Inner Equijoin
- Columns with the same name from the tables can be joined to display one column in a table (Club_ID from Club and Team) 
This Join
- Joins the tables Team and Club together to dispay what Teams belong to what Club.
*/
SELECT Club.ClubHouse, Team.Address, Team.Club_ID
FROM Club, Team
WHERE Club.Club_ID=Team.Club_ID;

/*
Left Outer Join
- Returns all the rows from the left table (Club), even if there are no matches in he right table (Team)
- If there are no matches, it will return a NULL value for each
This Join
- Joins the tables Team and Club together to display the Managers and what Club they belong to.
*/
SELECT Club.ClubManagerName, Team.Club_ID
FROM Club
LEFT JOIN Team
ON Club.Club_ID=Team.Club_ID
ORDER BY Club.ClubManagerName;
 
/*
Right Outer Join
- Similar to LOJ but rows from the right will be returned
This Join
- Joins the tables Club and Team together to display the Ages of the Players and the Club they belong to.
*/
SELECT Team.Age, Club.Club_ID
FROM Team
RIGHT JOIN Club
ON Team.Club_ID=Club.Club_ID
ORDER BY Team.Age;

/* 
Natural Join
- Occurs implicitly by comparing all the same named columns in both tables
This Join
- Joins the two tables Club and Team together to display the two tables as one with the CLUB_ID column from each table being combined as one.
*/
SELECT *FROM Club NATURAL JOIN Team;

/*
Non Equijoin
- Displaying the Age of Players (Team)that are under 12 and what ClubHouse (Match) they belong to and under what Manager (Match)
- Uses comparison operator(s) and not equals (=)
This Join
- Combins the two tables Match and Team together. This will display the Age of Players (from the Team table) that are under 12 and what ClubHouse they belong to and under what Manager (both from Match table).
*/
SELECT e.Age, j.ClubHouse, j.ClubManagerName
FROM Team e, Club j
WHERE e.Age <= 12;