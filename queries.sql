#Insertar usuario
INSERT INTO tbl_propietario (rut,contraseña,nombre,ape_pat,ape_mat,email,tel_fijo,tel_cel,n_depto)
VALUES ('18866084-3','1234','Cristopher','Gajardo','Navarrete','cris@ciisa.cl','226212521','982013338','1234');

#Insertar cuenta
INSERT INTO `tbl_cuenta`(`id_cuenta`, `monto`, `id_tipocuenta`, `rut`, `url_evidencia`)
VALUES ('','10000',1,'18866084-3','localhost/ProyectoCondominio/imagenes/evidencias/medidor-agua.jpg');
