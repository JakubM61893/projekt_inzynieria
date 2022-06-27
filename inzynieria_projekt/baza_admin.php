Create table Admini (
    AdminID Int UNSIGNED NOT NULL AUTO_INCREMENT,
    login Varchar(20) NOT NULL,
    haslo Varchar(30) NOT NULL,
    email Varchar(100) NOT NULL,
 Primary Key (AdminID)) ENGINE = InnoDB;

INSERT INTO Admini (AdminID, login, haslo, email) VALUES
(1, 'admin1', 'qwerty', 'adminek@o2.pl'),
(2, 'admin2', 'qwerty', 'adminiarz@onet.pl');