create table xll_users(
id				integer AUTO_INCREMENT PRIMARY KEY,
entity          integer,
fk_terecero		integer,
username		varchar(50) UNIQUE,
password		varchar(255),
activo          INT NULL  -- 0 inactivo , 1 activo
fechaModificacion	timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=innodb;
