DROP TABLE IF EXISTS BEER;
CREATE TABLE BEER
(
    BEER_SKU TINYINT(4) AUTO_INCREMENT PRIMARY KEY,
    BRAND VARCHAR(255) NOT NULL,
    LINE VARCHAR(255) NOT NULL,
    TYPE VARCHAR(255) NOT NULL,
    SIZE VARCHAR(255) NOT NULL,
    ABV DOUBLE(7, 2) NOT NULL,
    PRICE DOUBLE(7, 2) NOT NULL,
    DESCRIPTION TEXT NOT NULL,
    IMAGE VARCHAR(255) NOT NULL,
    RATING INT(20) NOT NULL,
    STOCK INT(20) NOT NULL,
    LINK VARCHAR(255),
    OLD_PRICE DOUBLE(7, 2)
);
        
INSERT INTO BEER (BEER_SKU, BRAND, LINE, TYPE, SIZE, ABV, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (1, "Firestone Walker", "805", "Light Hybrid", "5 GAL KEG", 4.7, 91.99, "Our lightest ale is no light-weight when it comes to flavor. The addition of CA produced, Buckwheat honey leads a subtle sweet accent to this smooth, easy drinking ale. Great on a hot summer day!", "./images/FW_keg.jpg", 3, 24, "./FirstoneWalker.php", 99.99);
INSERT INTO BEER (BEER_SKU, BRAND, LINE, TYPE, SIZE, ABV, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (2, "Robinson's", "Trooper Iron Maiden", "Specialty", "500 ML BTL", 4.7, 5.78, "Trooper is a premium British beer created by Bruce Dickinson & Iron Maiden and handcrafted at Robinson's Brewery. The beer has a true depth of character with malt flavors and citric notes.", "./images/iron_maiden.jpg", 5, 17, "./ironMaiden.php", 19.17);
INSERT INTO BEER (BEER_SKU, BRAND, LINE, TYPE, SIZE, ABV, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (3, "Corona", "Extra", "Lager", "12 Pack 12 OZ",  4.6, 15.99, "The top selling Mexican beer sold in the US, Corona Extra satisfies as a balance between darker European beers and light American style lagers.", "./images/corona.jpg", 2, 45, "./coronaVirus.php", 21.00);
INSERT INTO BEER (BEER_SKU, BRAND, LINE, TYPE, SIZE, ABV, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (4, "Truly", "Hard Seltzer", "Lemonade", "12 Pack 12 OZ",  5.0, 15.49, "100 calories, 1g sugar, 3g carbs, and gluten free. This pack includes three each of the Black Cherry Lemonade, Original Lemonade, Mango Lemonade, and Strawberry Lemonade Hard Seltzers.", "./images/truly.jpg", 4, 12, "./truly.php", 15.90);
INSERT INTO BEER (BEER_SKU, BRAND, LINE, TYPE, SIZE, ABV, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (5, "Lengthwise", "Zeus", "Imperial IPA", "4 Pack 12 OZ",  10.0, 12.99, "A bold, Imperial IPA featuring two-row barley with a touch of crystal malt. Zeus hops in the kettle and intense whirlpool hop additions.", "./images/zeus.jpg", 5, 59, "./zeus.php", 14.49);
INSERT INTO BEER (BEER_SKU, BRAND, LINE, TYPE, SIZE, ABV, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (6, "Sapporo", "Premium", "Black", "6 Pack 12 OZ",  9.5,  9.99, "Sapporo is the oldest brand of beer in Japan, founded in 1876. The legend of our beer began with the adventurous spirit of Seibei Nakagawa, Japan's first German-trained brewmaster.", "./images/sapporo.png", 4, 21, "./sapporo.php", 12.99);
