
DROP TABLE IF EXISTS CUSTOMER;
CREATE TABLE CUSTOMER
(
    C_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	F_NAME VARCHAR(255),
    L_NAME VARCHAR(255),
    EMAIL VARCHAR(255) UNIQUE,
	PASSWORD VARCHAR(255),
    BIRTHDATE DATE,
    ADDRESS VARCHAR(255),
    USERNAME VARCHAR(255) UNIQUE
);
        

INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (1, "Jaquith", "Luther", "jluther0@feedburner.com", "Big3242", '2001-12-28', "05 Weeping Birch Park", "jluther0");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (2, "Maible", "Murkin", "mmurkin1@dyndns.org", "dfafavsdai83", '1997-03-27', "4776 Vera Alley", "mmurkin1");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (3, "Ambur", "McNevin", "amcnevin2@smh.com.au", "124dfaq35", '2005-06-20', "95 Bluejay Hill", "amcnevin2");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (4, "Loren", "Spinnace", "lspinnace3@deviantart.com", "583F23!36", '2006-02-09', "6 Scofield Trail", "lspinnace3");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (5, "Melony", "Mufford", "mmufford4@hubpages.com", "54185F5y66d",'1985-09-05', "98 Bowman Alley", "mmufford4");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (6, "Nathanael", "Redmain", "nredmain5@mail.ru", "5djmreF5", '2003-10-11', "48 Bartillon Junction", "nredmain5");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (7, "Jessie", "Cawkill", "jcawkill6@webnode.com", "586992fggbmij", '1998-08-07', "1867 Summerview Lane", "jcawkill6");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (8, "Kitty", "McKelloch", "kmckelloch7@state.tx.us", "5215fdsfhmc", '2001-05-23', "500 Derek Circle", "kmckelloch7");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (9, "Woody", "Jobb", "wjobb8@artisteer.com", "58wsdfd46t39", '2002-04-04', "5 Merry Lane", "wjobb8");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (10, "Charmian", "Trevers", "ctrevers9@disqus.com", "affs6z34&&2", '2000-09-05', "6 Carioca Plaza", "ctrevers9");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (11, "Hallsy", "Comino", "hcominoa@rediff.com", "251#$1263fsg", '1989-01-23', "65474 David Place", "hcominoa");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (12, "Gweneth", "Philipeau", "gphilipeaub@dailymotion.com", "f##2232f4sjsa", '1997-01-25', "2 Menomonie Junction", "gphilipeaub");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (13, "Eli", "Rasp", "traspc@360.cn", "aadgF3546KK2", '1969-06-05', "78 Fair Oaks Center", "traspc");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (14, "Humbert", "Hartles", "hhartlesd@vimeo.com", "4hskdghjGS86", '2001-07-07', "44 Atwood Junction", "hhartlesd");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (15, "Palm", "Fawley", "pfawleye@twitter.com", "43f2ZZAdw51", '1972-03-13', "0 Westridge Drive", "pfawleye");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (16, "Leonard", "Wyant", "lwyantf@xinhuanet.com", "a65FSA%9f", '2004-11-12', "216 Rutledge Pass", "lwyantf");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (17, "Carce", "O'Sculley", "cosculleyg@sbwire.com", "Fksa!#342fd", '1987-12-03', "898 Fairview Court", "cosculleyg");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (18, "Lem", "Drought", "ldroughth@webs.com", "FFDSFDGSG65", '1995-06-12', "7019 Veith Point", "ldroughth");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (19, "Abelard", "Maddy", "amaddyi@friendfeed.com", "Yewaif42415&", '2001-02-26', "7 Fairfield Place", "amaddyi");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (20, "Pinchas", "Storr", "pstorrj@sbwire.com", "FK2345*fsf", '2000-10-04', "04629 Kropf Point", "pstorrj");
INSERT INTO CUSTOMER (C_ID, F_NAME, L_NAME, EMAIL, PASSWORD, BIRTHDATE, ADDRESS, USERNAME) VALUES (21, "Test_First", "test_last", "test@test.com", "test", '2000-11-12', "1 Test Point", "test_user");

