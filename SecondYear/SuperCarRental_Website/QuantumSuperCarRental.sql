create table Users(
	Username Varchar(20),
	Password Varchar(20),
	FirstName Varchar(20),
	Surname Varchar(20),
	AddressLine1 Varchar(30),
	AddressLine2 Varchar(20),
	City Varchar(20),
	Telephone Numeric(7),
	Mobile Numeric(9),
	Primary Key (Username)
	);
	
Create table Car(
	RegNo Varchar(20),
	Make  Varchar(30),
	Model Varchar(30),
	RentPrice Numeric(10,2),
	TopSpeed Varchar(10),
	Engine Varchar(15),
	Reserved Char ,  -- Y/N
	CarDescription Varchar(500),
	Primary Key (RegNo)
	);
	
Create table Reservations(
	ReservationID MEDIUMINT NOT NULL AUTO_INCREMENT,
	RegNo Varchar(20),
	Username Varchar(20),
	ReservedDate Timestamp,
	Primary Key (ReservationID),
	Foreign Key (RegNo) References Car(RegNo),
	Foreign Key (Username) References Users(Username)
	);
	
Create table Help(
	HelpID MEDIUMINT NOT NULL AUTO_INCREMENT,
	Username Varchar(20),
	Problem Varchar(200),
	HelpDate Timestamp,
	Primary Key (HelpID),
	Foreign Key (Username) References Users(Username)
	);
	
Create table Card(
	CardNO Numeric(12),
	Username Varchar(20),
	FullName Varchar(30),
	ExpiryDate Date,
	VerificationNO Numeric(3),
	Primary Key (CardNO),
	Foreign Key (Username) References Users(Username)
	);
	
Insert into Users Values ('alanjmckenna', 't1234s', 'Alan', 'McKenna', '38 Cranley Road', 'Fairview', 'Dublin', 9998377, 856625567);
Insert into Users Values ('joecrotty', 'kj7899', 'Joseph', 'Crotty', 'Apt 5 Clyde Road', 'Donnybrook', 'Dublin', 8887889, 876654456);
Insert into Users Values ('tommy100', '123456', 'tom', 'behan', '14 hyde road', 'Dalkey', 'Dublin', 9983747, 876738782);

Insert into Car Values ('141-D-007','Ferrari', 'LaFerrari FXXR', 1500, '350km/h', 'V12 Hybrid', 'Y', 'They may have just outdone themselves with the 2014 DMC Ferrari LaFerrari FXXR. It is described as the fastest it has ever built.DMC has combined elements from Ferrari GTO, FXX and XX into a single package. This was done without compromising LaFerrari’s own DNA.' );
Insert into Car Values ('131-D-1337','Ferrari', 'F12berlinetta', 1000, '349km/h', 'V12 DOCH', 'N', 'The F12berlinetta N-Largo features a unique carbon fiber body that helps increase the vehicles width to 80.7 inches from 76.5 inches.Other added features include restyled bumpers, side skirts to go with new extended fenders.' );
Insert into Car Values ('131-D-12343','Ferrari', 'LaFerrari Coupe', 2000, '350km/h', 'V12 Hybrid', 'N', 'The Prancing Horse first completely in-house car, which is also known as the F70 and as the F150, is a mild hybrid sports car of which 499 units will be built.' );
Insert into Car Values ('12-D-2012','Ferrari', '458 Italia Grand Am', 750, '325km/h', '4.5L 32-valve DOHC', 'N', 'Changes in the brake system, maximum horsepower output, and aerodynamic designs are being considered in anticipation of the races. The Ferrari 458 Tires are exclusively supplied by Continental that makes sure the tire hardness conforms to the series requirements.' );
Insert into Car Values ('131-D-28368','Bugatti', 'Veyron Meo Costantini', 2500, '409km/h', 'W16 Quad Turbo', 'N', 'The engine of the Veyron Meo Costantini is nothing less than what you would expect from this race car.Its 8.0 liter W16 quad-turbo generates 1,200 horsepower and 1,106 pound-feet of torque. The Veyron Meo Costantini accelerates from 0-62 mph in just 2.6 seconds with a top speed of 253 mph!' );
Insert into Car Values ('131-D-1234','Bugatti', 'Veyron Jean Bugatti', 2500, '410km/h', 'W16 Quad Turbo DOHC', 'N', 'The technology in found in the Bugatti Veyron Legend Jean Bugatti is based on the Bugatti Veyron 16.4 Grand Sport Vitesse which has an 8 liter W16 engine.The engine generates 1188 horsepower (1200 PS) and an un-paralleled 110 lb ft.' );
Insert into Car Values ('131-D-11111','Bugatti', 'Grand Sport Vitesse WRC', 2500, '411km/h', 'W16 DOHC', 'N', 'Needless to say this car is all about the engine. Packed under the hood is a 8.0 liter, 16 cylinder engine that generates an outstanding 1188 HP. The top speed? 254.04 mph set the world record. It covers 0-60 mph in a blazing 2.7 seconds.The 4 wheel drive system sits atop a race car chassis with fast acting shock absorbers and reinforced roll bars to insure optimum handling and safety.' );
Insert into Car Values ('141-Dl-9293','Shelby', 'SSC Ultimate Aero XT', 2400, '430km/h', '6.9L V8', 'N', 'The model will be a special edition of the Ultimate Aero which means if you blink you might just miss it as there will only be a small number of examples built and of course it will be one of the fastest cars in the world!' );
Insert into Car Values ('141-K-1213','Lamborghini', 'Aventador, lp700-4', 2000, '350km/h', 'V12, 60°, MPI', 'N', 'Carbon fiber engine bonnet, movable spoiler and side air inlets; Aluminium front bonnet, front fenders and doors; SMC rear fender and rocker cover' );
Insert into Car Values ('141-C-6231','Gumpert', 'Apollo', 2100, '390km/h', '4.2 liter V8 twin-turbo ', 'N', 'The Gumpert Apollo is ‘the fast and the furious’ edition to the top 10 supercar list. It is actually made by the former Audi engineer Roland Gumpert who produces the high-dollar, high-performance, gullwinged Apollo supercar that is essentially a race car for the street! ' );
Insert into Car Values ('141-MN-2476','Koenigsegg', 'Agera', 2200, '390+km/h', '4.7 l V8', 'N', 'Koenigsegg Agera (in Swedish "Agera" means "to act") is an outstanding two-door, two seater supercar manufactured by a Swedish supercar company. This concept car was created following the original philosophy, shape and size of the prototype Koenigsegg CC.' );


Insert into Reservations (RegNo, Username)
		Values ('141-D-007', 'tommy100');
