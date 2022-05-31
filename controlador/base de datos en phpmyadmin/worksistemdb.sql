-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2022 a las 17:05:20
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `worksistemdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(12) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `telefono_cliente` varchar(30) NOT NULL,
  `direccion_cliente` varchar(50) NOT NULL,
  `correo_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `telefono_cliente`, `direccion_cliente`, `correo_cliente`) VALUES
(546, 'sdfdf', 'dsfgdfg', 'sdfdf', 'sdfsdf'),
(10112, 'asdsdf', 'sadfsadf', 'asdasd', 'asdsdfas'),
(21321, 'sdfsf', 'sdfgsdfg', 'asdfgsdf', 'sdfgdsfg'),
(51351, 'dfsdfadsf', 'asdfdsf', 'asdfsdf', 'asdfs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesfactura`
--

CREATE TABLE `detallesfactura` (
  `id_detallefactura` int(12) NOT NULL,
  `id_factura` int(12) NOT NULL,
  `id_producto` int(12) NOT NULL,
  `catidad_df` int(50) NOT NULL,
  `precio_df` decimal(65,0) NOT NULL,
  `subtotal_df` decimal(65,0) NOT NULL,
  `Fecha` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_fac_ent`
--

CREATE TABLE `detalle_fac_ent` (
  `id_detalle_fac_ent` int(12) NOT NULL,
  `id_fac_ent` int(12) NOT NULL,
  `id_producto` int(12) NOT NULL,
  `cantidad_producto_fac_ent` int(50) NOT NULL,
  `precio_detalle_fac_ent` decimal(65,0) NOT NULL,
  `subtotal_detalle_fac_ent` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(12) NOT NULL,
  `contrasena_empleado` varchar(50) NOT NULL,
  `nombre_empleado` varchar(50) NOT NULL,
  `telefono_empleado` varchar(30) NOT NULL,
  `direccion_empleado` varchar(50) NOT NULL,
  `emai_empleado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(12) NOT NULL,
  `fecha_factura` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `id_empleado` int(12) NOT NULL,
  `id_cliente` int(12) NOT NULL,
  `iva_factura` decimal(65,0) NOT NULL,
  `total_precio_factura` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_entrada`
--

CREATE TABLE `factura_entrada` (
  `id_fac_ent` int(12) NOT NULL,
  `Id_Empleado` int(12) NOT NULL,
  `id_proveedor` int(12) NOT NULL,
  `total_fac_ent` decimal(65,0) NOT NULL,
  `iva_fac_ent` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `password`, `rol`) VALUES
('jhon pardo', '1234', 1),
('saray', '123456', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(12) NOT NULL,
  `id_proveedor` int(12) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `precio_producto` decimal(65,0) NOT NULL,
  `cantidad_producto` int(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_proveedor`, `nombre_producto`, `precio_producto`, `cantidad_producto`, `descripcion`) VALUES
(1, 1002, 'Gel Antibacterial', '12500', 1, 'gel antibacterial por 250ml'),
(2, 1002, 'alcohol', '23600', 1, 'alcohol 1 litro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(12) NOT NULL,
  `nombre_proveedor` varchar(50) NOT NULL,
  `direccion_proveedor` varchar(50) NOT NULL,
  `telefono_proveedor` varchar(30) NOT NULL,
  `email_proveedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_proveedor`, `direccion_proveedor`, `telefono_proveedor`, `email_proveedor`) VALUES
(1002, 'aseos star', 'calle star n85', '85625', 'aseosstar@gmail.com'),
(10002, 'camila', 'calle 85-52-36', '6546315', 'jlkdjsf@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'empleado ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detallesfactura`
--
ALTER TABLE `detallesfactura`
  ADD PRIMARY KEY (`id_detallefactura`),
  ADD KEY `det-fac_id-factura` (`id_factura`),
  ADD KEY `det-fac-idproducto_idproducto` (`id_producto`);

--
-- Indices de la tabla `detalle_fac_ent`
--
ALTER TABLE `detalle_fac_ent`
  ADD PRIMARY KEY (`id_detalle_fac_ent`),
  ADD KEY `det-fac-ent_idproducto` (`id_producto`),
  ADD KEY `det-fac-ent_idfactura-entrada` (`id_fac_ent`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `factura_entrada`
--
ALTER TABLE `factura_entrada`
  ADD PRIMARY KEY (`id_fac_ent`),
  ADD KEY `fac-ent_idempleado` (`Id_Empleado`),
  ADD KEY `fac-ent_idproveedor` (`id_proveedor`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `prod-idproveedor` (`id_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallesfactura`
--
ALTER TABLE `detallesfactura`
  ADD CONSTRAINT `det-fac-idproducto_idproducto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `det-fac_id-factura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`);

--
-- Filtros para la tabla `detalle_fac_ent`
--
ALTER TABLE `detalle_fac_ent`
  ADD CONSTRAINT `det-fac-ent_idfactura-entrada` FOREIGN KEY (`id_fac_ent`) REFERENCES `factura_entrada` (`id_fac_ent`),
  ADD CONSTRAINT `det-fac-ent_idproducto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fac_idcliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `fac_idempleado` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`);

--
-- Filtros para la tabla `factura_entrada`
--
ALTER TABLE `factura_entrada`
  ADD CONSTRAINT `fac-ent_idempleado` FOREIGN KEY (`Id_Empleado`) REFERENCES `empleado` (`id_empleado`),
  ADD CONSTRAINT `fac-ent_idproveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `prod-idproveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
