CREATE TABLE pedido (
cliente				VARCHAR(100) NOT NULL, 
produto 			VARCHAR(100) NOT NULL,
registro 			DATETIME DEFAULT NOW(),
quantidade 			INT NOT NULL,
confirmacao_entrega BOOLEAN NOT NULL,

	CONSTRAINT 		fk_pedido_id
    FOREIGN KEY		(id)
    REFERENCES 		produto(id),    
    
    CONSTRAINT 		fk_cliente_id
	FOREIGN KEY 	(id) 
    REFERENCES 		cliente(id)
	
)ENGINE = InnoDB;






