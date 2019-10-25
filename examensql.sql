CREATE TABLE IF NOT EXISTS Zombie(
	idZombie int NOT NULL auto_increment PRIMARY KEY,
    nombre varchar(60) NOT NULL
);

CREATE TABLE IF NOT EXISTS Estado(
	idEstado int NOT NULL auto_increment PRIMARY KEY,
    tipo varchar(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS Zombie_Estado(
	idZombie int NOT NULL,
    idEstado int NOT NULL,
    fechaHora TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idZombie) REFERENCES Zombie(idZombie),
    FOREIGN KEY (idEstado) REFERENCES Estado(idEstado)
);


DELIMITER //

CREATE PROCEDURE RegistrarZombie( nombre varchar(60))
BEGIN
	INSERT INTO Zombie (nombre) values (nombre);
END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE HistorialZombie( idZombi int)
BEGIN
	SELECT tipo, fechaHora 
    FROM Zombie_Estado, Estado 
    WHERE Estado.idEstado=Zombie_Estado.idEstado AND Zombie_Estado.idZombie = idZombi;
END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE ContadorEstados ()
BEGIN
	SELECT tipo, COUNT(*) AS Cuantos
    FROM Zombie_Estado, Estado 
    WHERE Estado.idEstado=Zombie_Estado.idEstado 
    GROUP BY tipo;
END //

DELIMITER ;

DROP PROCEDURE ContadorEstados


DELIMITER //

CREATE PROCEDURE CONTARENESTADO (tipoe varchar(30))
BEGIN
	SELECT tipo, COUNT(*) AS 'Cuantos'
    FROM Zombie_Estado, Estado 
    WHERE Estado.idEstado=Zombie_Estado.idEstado AND tipo = tipoe
    GROUP BY tipo;
END //

DELIMITER ;



INSERT INTO Zombie (nombre) values('CARLOS SANCHEZ'),
('ADRIANA PAOLA'),
('RICARDO ESCOBA'),
('ALBERTO CASTA'),
('RICARDO PROFE'),
('LALO PROFE');

INSERT INTO Estado (tipo) values ('infeccion'),
('desorientacion'),
('violencia'),
('desmayo'),
('hambriento');


INSERT INTO Zombie_Estado(idZombie,idEstado) VALUES (1,1),
(2,1),
(2,2),
(3,3),
(4,4),
(5,1),
(5,2),
(1,3);

CALL HistorialZombie ('4');
