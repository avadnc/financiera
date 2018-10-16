create table if not exists xll_terceros
(
  id                    	integer AUTO_INCREMENT PRIMARY KEY,
  nombreFiscal            varchar(128),                                -- company reference name (should be same length than adherent.societe)
  nombreAlias             varchar(128) NULL,
  fechaConst              DATE NULL,
  parent                  integer,
  sectorEmpresa				    varchar(128) NULL,
  repLegal                VARCHAR(128) NULL,
  status            	   	tinyint 		  DEFAULT 1,			    -- cessation d'activité ( 1 -- en activité, 0 -- cessation d'activité)			
  codigoFinanciera        varchar(24),                         		-- code client
  codigoCliente				    varchar(24),                         		-- code founisseur
  codigoSucursal          varchar(24),                         		-- code compta client
  direccion               varchar(255),                        		-- company address
  codigoPostal            varchar(25),                         		-- zipcode
  poblacion               varchar(50),                         		-- town
  telFijo                 varchar(20),                         		-- phone number
  telCelular              varchar(20),                         		-- phone number
  url                     varchar(255),                        		--
  email                   varchar(128),                        		--
  rfc	                   	varchar(128) UNIQUE,                         		-- IDProf1: siren or RCS for france, ...
  notaPrivada				      text,                                		--
  notaPublica				      text,                                        --
  tipoCliente             tinyint        DEFAULT 0,            		-- client 0 Persona Fisica, 1 Persona Moral
  tipoFinanciera          tinyint        DEFAULT 0,            		-- fournisseur 0 Bancos, 1 Cajas
  logo                    varchar(255)   DEFAULT NULL,
  fechaModificacion       timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=innodb;
