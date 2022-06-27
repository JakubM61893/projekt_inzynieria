Create table Users (
    UserID Int UNSIGNED NOT NULL AUTO_INCREMENT,
    imie Varchar(20) NOT NULL,
    nazwisko Varchar(20) NOT NULL,
    nr Int(9) NOT NULL,
    adres Varchar(50) NOT NULL,
    login Varchar(20) NOT NULL,
    haslo Varchar(30) NOT NULL,
    email Varchar(100) NOT NULL,
 Primary Key (UserID)) ENGINE = InnoDB;

INSERT INTO Users (UserID, imie, nazwisko, nr, adres, login, haslo, email) VALUES
(1, 'Jakub', 'Nowak', '887322909', 'Kochanowskiego 9/23, Warszawa 00-010', 'kubaa', 'qwerty', 'kubaa@o2.pl'),
(2, 'Barbara', 'Kowal', '589111075', 'Strażacka 12, Gdańsk 80-021', 'basienka', 'xdert', 'basienka@onet.pl');