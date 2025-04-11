CREATE DATABASE kosci;

USE kosci;

CREATE TABLE gracze (
    ID_gracza INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50) DEFAULT 'Gracz',
    wiek INT NOT NULL CHECK (wiek >= 15),
    data_rejestracji TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
