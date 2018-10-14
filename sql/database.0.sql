create database if not exists safin;
use safin;

create table if not exists xll_tereceros
(
  id                    	integer AUTO_INCREMENT PRIMARY KEY,
  nombreFiscal              varchar(128),                                -- company reference name (should be same length than adherent.societe)
  nombreAlias               varchar(128) NULL,
  parent                   	integer,
  sectorEmpresa				varchar(128) NULL,
  status            	   	tinyint 		  DEFAULT 1,			    -- cessation d'activité ( 1 -- en activité, 0 -- cessation d'activité)						

  codigoFinanciera          varchar(24),                         		-- code client
  codigoCliente				varchar(24),                         		-- code founisseur
  codigoSucursal           	varchar(24),                         		-- code compta client
  direccion                 varchar(255),                        		-- company address
  codigoPostal             	varchar(25),                         		-- zipcode
  poblacion                 varchar(50),                         		-- town
  telFijo                   varchar(20),                         		-- phone number
  telCelular                varchar(20),                         		-- phone number
  url                      	varchar(255),                        		--
  email                    	varchar(128),                        		--
  rfc	                   	varchar(128),                         		-- IDProf1: siren or RCS for france, ...
  notaPrivada				text,                                		--
  notaPublica				text,                                        --
  tipoCliente              	tinyint        DEFAULT 0,            		-- client 0 Persona Fisica, 1 Persona Moral
  tipoFinanciera           	tinyint        DEFAULT 0,            		-- fournisseur 0 Bancos, 1 Cajas
  logo                     	varchar(255)   DEFAULT NULL
)ENGINE=innodb;

create table if not exists xll_estado_finanzas(

	id						integer AUTO_INCREMENT PRIMARY KEY,
    fk_tercero				integer NOT NULL,
    ventaAnual				double	NOT NULL,
    costoVentas				double	NOT NULL,
    utilidadAnual			double	NOT NULL,
    clientes				double	NOT NULL,
    inventario				double	NOT NULL,
    actCirculante			double	NOT NULL,
    pasCirculante			double	NOT NULL,
    totalActivos			double	NOT NULL,
    totalPasivo				double	NOT NULL,
    proveedores				double	NOT NULL,
    credCortoPlazo			double	NOT NULL,
    credLargoPlazo			double	NOT NULL,
    saldPM1					double	NOT NULL,
    saldPM2					double	NOT NULL,
    saldPM3					double	NOT NULL,
    saldPM4					double	NOT NULL,
    saldPM5					double	NOT NULL,
    saldPM6					double	NOT NULL,
    ingrM1					double	NOT NULL,
    ingrM2					double	NOT NULL,
    ingrM3					double	NOT NULL,
    ingrM4					double	NOT NULL,
    ingrM5					double	NOT NULL,
    ingrM6					double	NOT NULL
) ENGINE=innodb;

ALTER TABLE xll_tereceros ADD COLUMN repLegal VARCHAR(128) NULL AFTER sectorEmpresa;
ALTER TABLE xll_tereceros ADD COLUMN estCivilRepLegal VARCHAR(128) NULL AFTER repLegal;
ALTER TABLE xll_tereceros ADD COLUMN conyugeRepLegal VARCHAR(128) NULL AFTER estCivilRepLegal;
ALTER TABLE xll_tereceros ADD COLUMN fechaConst DATE NULL AFTER nombreAlias;
ALTER TABLE xll_estado_finanzas ADD INDEX fk_xll_estado_finanzas_1_idx (fk_tercero ASC);
ALTER TABLE xll_estado_finanzas ADD CONSTRAINT fk_xll_estado_finanzas_tercero FOREIGN KEY (fk_tercero)  REFERENCES xll_tereceros (id);