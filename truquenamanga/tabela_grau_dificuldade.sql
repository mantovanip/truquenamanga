CREATE TABLE grau_dificuldade(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	tipo_dificuldade VARCHAR(100) NOT NULL
    
) ENGINE = InnoDB;
DROP TABLE grau_dificuldade;

ALTER TABLE grau_dificuldade
ADD CONSTRAINT fk_grau_dificuldade_ID
FOREIGN KEY (tipo_dificuldade) REFERENCES produto(tipo_dificuldade);

CREATE TABLE grau_dificuldade(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	tipo_dificuldade  INT NOT NULL,
    
    CONSTRAINT fk_grau_dificuldade_id
	FOREIGN KEY (tipo_dificuldade) 
	REFERENCES produto(id)
    
) ENGINE = InnoDB;

#tipo_dificuldade VARCHAR(100) NOT NULL