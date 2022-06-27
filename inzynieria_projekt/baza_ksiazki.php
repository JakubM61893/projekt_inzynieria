Create table Ksiazki (
    KsiazkaID Int UNSIGNED NOT NULL AUTO_INCREMENT,
    tytul Varchar(80) NOT NULL,
    autor Varchar(30) NOT NULL,
    wydawnictwo Varchar(30) NOT NULL,
 Primary Key (KsiazkaID)) ENGINE = InnoDB;

INSERT INTO Ksiazki (KsiazkaID, tytul, autor, wydawnictwo) VALUES
(1, 'Zły król. Okrutny książę. Tom 2', 'Holly Black', 'Jaguar'),
(2, 'Przysługa dla Czarnoksiężnika. Wilcza Jagoda. Tom 2', 'Magdalena Kubasiewicz', 'Sine Qua Non'),
(3, 'Hobbit czyli tam i z powrotem', 'J.R.R. Tolkien', 'Iskry');