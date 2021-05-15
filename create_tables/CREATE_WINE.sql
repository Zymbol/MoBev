DROP TABLE IF EXISTS WINE;
CREATE TABLE WINE
(
    WINE_ID TINYINT(4) AUTO_INCREMENT PRIMARY KEY,
    BRAND VARCHAR(255) NOT NULL,
    LINE VARCHAR(255) NOT NULL,
    TYPE VARCHAR(255) NOT NULL,
    ALC_CONTENT DOUBLE(7,4) NOT NULL,
    VINTAGE INT(20) NOT NULL,
    PRICE DOUBLE(7, 2) NOT NULL,
    DESCRIPTION TEXT NOT NULL,
    IMAGE VARCHAR(255) NOT NULL,
    RATING INT(20) NOT NULL,
    STOCK INT(20) NOT NULL,
    LINK VARCHAR(255),
    OLD_PRICE DOUBLE(7, 2)
);
        
INSERT INTO WINE (WINE_ID, BRAND, LINE, TYPE, ALC_CONTENT, VINTAGE, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (1, "Jacob's Creek", "Double Barrel", "Cabernet", 14.9, 2017, 15.99, "This second release of the Double Barrel Cabernet Sauvignon really highlights the impact of our innovative use of aged Irish whiskey barrels for finishing. The palate is rich and dense, yet smooth and beautifully integrated. ", "./images/creek_cab.jpg", 4, 34, "./double_barrel.php", 29.99);
INSERT INTO WINE (WINE_ID, BRAND, LINE, TYPE, ALC_CONTENT, VINTAGE, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (2, "Jam Jar", "Sweet", "Shiraz", 7.9, 2015, 9.99, "Pure and simple; If you are looking for a red wine that is slightly sweet this is the wine for you; packed with juicy berry flavors with notes of dark chocolate; sweet to perfection.", "./images/jam_shiraz.jpg", 2, 31, "./jam_jar.php", 25.99);
INSERT INTO WINE (WINE_ID, BRAND, LINE, TYPE, ALC_CONTENT, VINTAGE, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (3, "Zynthesis", "Old Vine", "Zinfandel", 14.02, 2020, 19.15, "Lodi produces some of California's finest Zinfandels. Luscious blackberry aromas, rhubarb and strawberry with hints of vanilla and smoke. A complex and lingering finish.", "./images/zyn_zin.jpg", 4, 23, "./zyn_zin.php", 31.99);
INSERT INTO WINE (WINE_ID, BRAND, LINE, TYPE, ALC_CONTENT, VINTAGE, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (4, "Matchbook", "Reserve", "Chardonnay", 11.9, 2019, 17.49, "Not too oaky, not too fruity. Our secret is to age our Chardonnay is a combination of older barrels and brand-new oak to achieve the right balance of tropical fruit, cream and vanilla.", "./images/match_char.jpg", 5, 3, "./match_char.php", 25.99);
INSERT INTO WINE (WINE_ID, BRAND, LINE, TYPE, ALC_CONTENT, VINTAGE, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (5, "Gruet", "Cuvee 89", "Sparkling Rose", 11.6, 2020, 19.39, "Cuvee 89 Rose by Gruet boasts floral aromas, ripe strawberry flavors, and finishes with round, zesty acidity.", "./images/cuvee_89.jpg", 3, 77, "./gruet.php", 31.99);
INSERT INTO WINE (WINE_ID, BRAND, LINE, TYPE, ALC_CONTENT, VINTAGE, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (6, "Fog Head", "Sauvignon", "Blanc", 9.6, 2020, 16.99, "2020 VINTAGE ONLY; BRONZE MEDAL SF CHRONICLE WC- Layers of lemon-lime, sweet pea and honey dew melon; rich yet well balanced on the palate; fresh citrus flavors with crisp finish.", "./images/fog_blanc.jpg", 4, 19, "./fog_blanc.php", 25.99);
INSERT INTO WINE (WINE_ID, BRAND, LINE, TYPE, ALC_CONTENT, VINTAGE, PRICE, DESCRIPTION, IMAGE, RATING, STOCK, LINK, OLD_PRICE) VALUES (7, "Steven's", "Extra Dry", "Prosecco", 66.4, 1999, 95.99, "Steven's sweet peach flavor will have you thirsting for more. It's dry, but it'll make you not...", "./images/prosecco.jpg", 5, 23, "./stevens_dry.php", 19.99);
