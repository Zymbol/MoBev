DROP TABLE IF EXISTS SPIRIT;
CREATE TABLE SPIRIT
(
    SPIRIT_SKU TINYINT(4) AUTO_INCREMENT PRIMARY KEY,
    BRAND VARCHAR(255) NOT NULL,
    LINE VARCHAR(255) NOT NULL,
    TYPE VARCHAR(255) NOT NULL,
    PROOF TINYINT(4) NOT NULL,
    PRICE DOUBLE(7, 2) NOT NULL,
    DESCRIPTION TEXT NOT NULL,
    IMAGE VARCHAR(255) NOT NULL
);
        
INSERT INTO SPIRIT (SPIRIT_SKU, BRAND, LINE, TYPE, PROOF, PRICE, DESCRIPTION, IMAGE) VALUES (1, "Jameson", "Irish", "Wiskey", 80, 22.99, "A blend of pot still & fine grain whiskeys that is as versatile as it is smooth. It's a perfect balance of spicy, nutty & vanilla notes with hints of sweet sherry.", "./images/jameson.jpg");
INSERT INTO SPIRIT (SPIRIT_SKU, BRAND, LINE, TYPE, PROOF, PRICE, DESCRIPTION, IMAGE) VALUES (2, "Patron", "Silver", "Tequila", 80, 45.99, "One of the most popular tequilas we carry. Crisp clean flavors of citrus and oak are present in the nose followed by a full finish on the palate.", "./images/patron.jpg");
INSERT INTO SPIRIT (SPIRIT_SKU, BRAND, LINE, TYPE, PROOF, PRICE, DESCRIPTION, IMAGE) VALUES (3, "Bookers", "Limited Edition", "Rye Whiskey", 136, 325.99, "Deep and complex flavors of vanilla, nuts and oak. AROMA: Robust vanilla and caramel notes; slightly smoky.", "./images/booker.jpg");
INSERT INTO SPIRIT (SPIRIT_SKU, BRAND, LINE, TYPE, PROOF, PRICE, DESCRIPTION, IMAGE) VALUES (4, "Fireball", "Cinnamon", "Whiskey", 42, 22.49, "Strong cinnamon candy and pepper aromas follow through to an oily, slightly sweet medium body of hot spicy cinnamon drops and mineral flavor.", "./images/fireball.jpg");
INSERT INTO SPIRIT (SPIRIT_SKU, BRAND, LINE, TYPE, PROOF, PRICE, DESCRIPTION, IMAGE) VALUES (5, "Rammstein", "Schwarze Feuer und Wasser", "Vodka", 80, 69.39, "Vodka, specially produced for RAMMSTEIN and hand-filled, from Berlin, in a noble RAMMSTEIN bottle of thick glass with filigree finishing and a corresponding RAMMSTEIN metal packaging.", "./images/rammstein.jpg");
INSERT INTO SPIRIT (SPIRIT_SKU, BRAND, LINE, TYPE, PROOF, PRICE, DESCRIPTION, IMAGE) VALUES (6, "Kraken", "Black", "Spiced Rum", 100,  16.99, "Old fashioned jughandled bottle with the legend of the giant Kraken on the bottle. The exotic taste of spiced rum.", "./images/kraken.jpg");
