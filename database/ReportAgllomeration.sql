CREATE DATABASE Report_Agllomeration;

USE Report_Agllomeration;

CREATE TABLE Reportes
(
	report_id INT NOT NULL AUTO_INCREMENT,
    report_nome_local VARCHAR(50) NOT NULL,
    report_quantidade_pessoas INT NOT NULL,
    report_mascara VARCHAR(20) NOT NULL,
    report_distanciamento BOOLEAN NOT NULL,
    report_observacoes VARCHAR(255),
	report_data_hora DATETIME NOT NULL,
    report_latitude VARCHAR(100) NOT NULL,
	report_longitude VARCHAR(100) NOT NULL,
    PRIMARY KEY(report_id)
);

