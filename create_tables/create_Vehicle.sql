
DROP TABLE IF EXISTS Vehicle;
CREATE TABLE Vehicle
(
    Make VARCHAR(255) NOT NULL,
	Model VARCHAR(255) NOT NULL,
    Color VARCHAR(255) NOT NULL,
	Wear VARCHAR(255) NOT NULL,
    Year YEAR NOT NULL,
    Price UNSIGNED INT NOT NULL,
    VIN VARCHAR(255) NOT NULL PRIMARY KEY,
    Image VARCHAR(255) NOT NULL,
    Mileage INT NOT NULL 
);
        
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Ford", "Raptor", "Gray", "Fair", "2019", 62044, "4T1BK1EB6FU752527", "./images/frd_rptr.jpg", 64463);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Lexus", "RX-350", "White", "Excellent", "2020", 38054, "19UUA56642A233157", "./images/lxs_350.jpg", 98088);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Ford", "Aerostar", "Red", "Good", "1992", 2330, "3C63D3KL9CG622193", "./images/frd_aero.jpg", 144160);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Bentley", "Continental", "Purple", "Good", "2007", 98000, "4USBU33576L116903", "./images/bntly_cnt.jpg", 133610);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Toyota", "RAV4", "Black", "Fair", "2019", 45994, "WAUVFAFH9BN864684", "./images/yota_rav4.jpg", 16926);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Cadillac", "CTS", "Silver", "Fair", "2014", 7055, "4T1BK3DB0BU135535", "./images/caddy_cts.jpg", 34761);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Plymouth", "Laser", "Red", "Excellent", "1990", 54666, "1GYEK63N85R655109", "./images/plym_laser.jpg", 216117);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Volvo", "S60", "Blue", "Good", "2020", 78005, "JTHFE2C29E2056503", "./images/vlvo_v40.jpg", 252197);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Volkswagen", "GTI", "Green", "Good", "2018", 23884, "1GD312CG5EF086369", "./images/vw_gti.jpg", 31003);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("GMC", "Sierra AT4", "Black", "Fair", "2020", 65000, "WDDLJ7DB5CA308462", "./images/gmc_at4.jpg", 1502);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Chrysler", "300", "Green", "Poor", "2018", 19554, "2T1BU4EEXBC031824", "./images/chrslr_300.jpg", 77985);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Lotus", "Evora", "Chrome", "Poor", "2011", 52005, "1G6KE57Y33U544933", "./images/lotus_elise.jpg", 20020);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Audi", "S4", "Blue", "Good", "2021", 59999, "19UUA56731A099829", "./images/audi_s4.jpg", 194255);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Chevrolet", "HHR", "Orange", "Excellent", "2007", 2599, "WAUDT48H96K468796", "./images/chvy_hhr.jpg", 184455);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Chevrolet", "Cruz", "Red", "Fair", "2012", 6366, "KNADH4A36B6353074", "./images/chvy_cruz.jpg", 191387);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Land Rover", "Range Rover", "Blue", "Poor", "2019", 78999, "WA1AV94L87D107258", "./images/rng_rvr.jpg", 151157);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Mitsubishi", "Diamante", "White", "Fair", "1997", 3999, "1GTN1TEH1EZ047219", "./images/mts_diam.jpg", 285005);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Honda", "Civic", "Silver", "Fair", "1999", 2599, "YV1952AS5E1470301", "./images/honda_civic.jpg", 270630);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Scion", "tC", "Gray", "Good", "2007", 4399, "WBA3A5G57CN709795", "./images/scion_tc.jpg", 106005);
INSERT INTO Vehicle (Make, Model, Color, Condition, Year, Price, VIN, Image, Mileage) VALUES ("Lincoln", "Navigator", "Blue", "Excellent", "2010", 18936, "5NPDH4AE6FH449495", "./images/lin_nav.jpg", 165314);
