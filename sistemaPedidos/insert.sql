-- Agregar más información a las tablas existentes

-- Tabla cliente
INSERT INTO cliente (ci, nombre, telefono, direccion, usuario_id) VALUES
(23456789, 'Carlos Gomez', 72589631, 'Zona Miraflores, Calle Los Pinos #345, La Paz, Bolivia', 2),
(34567890, 'Lucia Fernandez', 72589632, 'Zona Sopocachi, Calle 21 de Mayo #567, La Paz, Bolivia', 2),
(45678901, 'Jorge Ramirez', 72589635, 'Zona San Jorge, Avenida Arce #890, La Paz, Bolivia', 3),
(56789012, 'Elena Suarez', 72589636, 'Zona Obrajes, Calle 17 #123, La Paz, Bolivia', 3),
(67890123, 'Mario Perez', 72589637, 'Zona San Miguel, Calle 34 #456, La Paz, Bolivia', 2),
(78901234, 'Laura Castillo', 72589638, 'Zona Villa Copacabana, Avenida 6 de Marzo #789, La Paz, Bolivia', 1);

-- Tabla proveedor
INSERT INTO proveedor (proveedor, contacto, telefono, direccion, usuario_id) VALUES
('Agua y Hielo', 'Luis Salazar', 72589633, 'Zona San Pedro, Calle Colon #789, La Paz, Bolivia', 1),
('Embotelladora La Paz', 'Ana Gutierrez', 72589634, 'Zona Villa Fátima, Avenida Busch #101, La Paz, Bolivia', 2),
('Distribuidora Central', 'Carlos Mendez', 72589639, 'Zona Central, Avenida Montes #123, La Paz, Bolivia', 1),
('Hielo La Paz', 'Mariana Flores', 72589640, 'Zona Alto Obrajes, Calle 23 #456, La Paz, Bolivia', 2),
('Agua Fresca', 'Roberto Lara', 72589641, 'Zona San Antonio, Calle 13 #321, La Paz, Bolivia', 2),
('Bebidas Naturales', 'Lucia Rojas', 72589642, 'Zona Cotahuma, Avenida Buenos Aires #654, La Paz, Bolivia', 1);

-- Tabla rol
INSERT INTO rol (rol) VALUES
('Distribuidor'),
('Administrador'),
('Cliente');

-- Tabla usuario
INSERT INTO usuario (nombre, correo, usuario, clave, rol) VALUES
('Juan Carlos', 'juan.carlos@gmail.com', 'juancarlos', 'e99a18c428cb38d5f260853678922e03', 2),
('Ana Lopez', 'ana.lopez@gmail.com', 'analopez', 'c33367701511b4f6020ec61ded352059', 2),
('Maria Sanchez', 'maria.sanchez@gmail.com', 'mariasanchez', '9b74c9897bac770ffc029102a200c5de', 1),
('Carlos Perez', 'carlos.perez@gmail.com', 'carlosperez', 'ee11cbb19052e40b07aac0ca060c23ee', 1),
('Raul Torres', 'raul.torres@gmail.com', 'raultorres', '25f9e794323b453885f5181f1b624d0b', 2),
('Diana Reyes', 'diana.reyes@gmail.com', 'dianareyes', '098f6bcd4621d373cade4e832627b4f6', 2);

-- Tabla distribuidor
INSERT INTO distribuidor (nombre, telefono, direccion, placa_auto) VALUES
('Pedro Martinez', 72658930, 'Zona Calacoto, Avenida Ballivián #456, La Paz, Bolivia', 'JKL456'),
('Marta Silva', 72658931, 'Zona Achumani, Calle 15 #678, La Paz, Bolivia', 'MNO321'),
('Sergio Luna', 72658932, 'Zona Cota Cota, Calle 21 #567, La Paz, Bolivia', 'XYZ789'),
('Andrea Lopez', 72658933, 'Zona San Miguel, Calle 35 #890, La Paz, Bolivia', 'RST234'),
('Ricardo Salinas', 72658934, 'Zona Achachicala, Calle 12 #123, La Paz, Bolivia', 'OPQ567'),
('Carla Vargas', 72658935, 'Zona Tembladerani, Avenida Murillo #456, La Paz, Bolivia', 'LMN890');

-- Tabla detallefactura (ejemplo)
INSERT INTO detallefactura (nofactura, codproducto, cantidad, precio_venta, distribuidor_id) VALUES
(1, 1, 5, 20.00, 1),
(1, 2, 10, 5.00, 2),
(2, 6, 7, 8.00, 1),
(2, 7, 3, 10.00, 2),
(3, 3, 15, 17.00, 3),
(3, 4, 8, 7.50, 1),
(4, 5, 20, 11.00, 2),
(4, 6, 10, 9.50, 4),
(5, 1, 12, 20.00, 2),
(5, 2, 6, 5.00, 3),
(6, 3, 10, 17.00, 4),
(6, 4, 15, 7.50, 1);

-- Tabla factura (ejemplo)
INSERT INTO factura (usuario, codcliente, totalfactura, estado) VALUES
(1, 1, 500.00, 1),
(2, 2, 200.00, 1),
(3, 3, 450.00, 1),
(4, 4, 600.00, 1),
(5, 5, 750.00, 1),
(6, 6, 300.00, 1);

-- Tabla entradas (ejemplo)
INSERT INTO entradas (codproducto, fecha, cantidad, precio, usuario_id) VALUES
(1, '2024-01-06 12:00:00', 50, 15.00, 1),
(2, '2024-01-06 12:00:00', 100, 4.00, 2),
(6, '2024-01-06 12:00:00', 70, 6.00, 1),
(7, '2024-01-06 12:00:00', 30, 8.00, 2),
(3, '2024-02-10 09:30:00', 150, 16.00, 2),
(4, '2024-02-10 09:30:00', 90, 6.00, 1),
(5, '2024-02-10 09:30:00', 120, 10.00, 3),
(8, '2024-03-15 14:00:00', 60, 12.00, 3),
(9, '2024-03-15 14:00:00', 80, 7.00, 2),
(10, '2024-03-15 14:00:00', 100, 9.00, 1);

-- Tabla detalle_temp (ejemplo)
INSERT INTO detalle_temp (token_user, codproducto, cantidad, precio_venta) VALUES
('abc123', 1, 10, 20.00),
('def456', 2, 5, 5.00),
('ghi789', 6, 3, 8.00),
('jkl012', 7, 1, 10.00),
('mno345', 3, 20, 17.00),
('pqr678', 4, 10, 7.50),
('stu901', 5, 15, 11.00),
('vwx234', 6, 5, 9.50),
('yzx567', 8, 7, 13.00),
('abc890', 9, 4, 7.50),
('def123', 10, 6, 10.00);

-- Comando COMMIT para finalizar la transacción
COMMIT;
