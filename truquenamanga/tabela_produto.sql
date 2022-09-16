CREATE TABLE produto (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_produto VARCHAR(100) NOT NULL ,
    valor_produto DOUBLE NOT NULL,
    grau_uso VARCHAR(50) NOT NULL,
    #droped code above
    tipo_dificuldade VARCHAR(100) NOT NULL,
    
    CONSTRAINT 		fk_produto_tipo_dificuldade
    FOREIGN KEY		(tipo_dificuldade)
    REFERENCES 		grau_dificuldade(id) 
    
) ENGINE = InnoDB;
ALTER TABLE produto 
DROP COLUMN grau_uso;

ALTER TABLE produto
ADD COLUMN tipo_dificuldade VARCHAR(100) NOT NULL;