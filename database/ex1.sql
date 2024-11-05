USE master
GO

IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'cadastro'
)
CREATE DATABASE cadastro


IF OBJECT_ID('SchemaName.pessoas', 'U') IS NOT NULL
DROP TABLE SchemaName.pessoas


CREATE TABLE SchemaName.pessoas
(
    pessoasId INT NOT NULL PRIMARY KEY, 
    nome NVARCHAR(50) NOT NULL,
    descricao NVARCHAR(50) NOT NULL,
    carga INT,
    totaulas INT,
    ano INT
);


INSERT INTO TableName
([pessoasId], [nome], [descricao], [carga], [totaulas], [ano])
VALUES
('1', 'HTML5', 'Curso de HTML5', '40', '37', '2024'),
('2', 'Algoritimos', 'Lógica de programação', '20', '15', '2024'),
('3', 'PHP', 'Curso de PHP', '40', '20', '2025')
GO