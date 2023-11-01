
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `antecedentes_familiares` (
  `id_antecedente_familiar` int(11) NOT NULL,
  `enfermedades_hereditarias` varchar(100) DEFAULT NULL,
  `cancer_familia` varchar(100) DEFAULT NULL,
  `trastorno_genetico` varchar(100) DEFAULT NULL,
  `otra_enfermedad` varchar(100) DEFAULT NULL,
  `acv_previo` varchar(100) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `antecedentes_personales` (
  `id_antecedente_personal` int(11) NOT NULL,
  `historial_enfermedades` varchar(400) DEFAULT NULL,
  `alergias` varchar(100) DEFAULT NULL,
  `trastorno_mental` varchar(200) DEFAULT NULL,
  `enfermedad_infecciosa` varchar(200) DEFAULT NULL,
  `consumo_estupefacientes` varchar(200) DEFAULT NULL,
  `cirugia_previa` varchar(200) DEFAULT NULL,
  `hospitalizacion_previa` varchar(200) DEFAULT NULL,
  `acv_previo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nombre_genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `nombre_genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `numero_cedula` varchar(9) NOT NULL,
  `id_genero` int(2) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(2) NOT NULL,
  `numero_celular` varchar(11) NOT NULL,
  `numero_emergencia` varchar(11) NOT NULL,
  `direccion` varchar(400) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `id_antecedente_personal` int(11) NOT NULL,
  `id_antecedente_familiar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `antecedentes_familiares`
  ADD PRIMARY KEY (`id_antecedente_familiar`),
  ADD KEY `id_paciente` (`id_paciente`);


ALTER TABLE `antecedentes_personales`
  ADD PRIMARY KEY (`id_antecedente_personal`);

ALTER TABLE `estados_civiles`
  ADD PRIMARY KEY (`id_estado_civil`);


ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_antecedente_personal` (`id_antecedente_personal`),
  ADD KEY `id_antecedente_familiar` (`id_antecedente_familiar`);


ALTER TABLE `antecedentes_familiares`
  MODIFY `id_antecedente_familiar` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `antecedentes_personales`
  MODIFY `id_antecedente_personal` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `estados_civiles`
  MODIFY `id_estado_civil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `antecedentes_familiares`
  ADD CONSTRAINT `id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);


ALTER TABLE `pacientes`
  ADD CONSTRAINT `id_antecedente_familiar` FOREIGN KEY (`id_antecedente_familiar`) REFERENCES `antecedentes_familiares` (`id_antecedente_familiar`),
  ADD CONSTRAINT `id_antecedente_personal` FOREIGN KEY (`id_antecedente_personal`) REFERENCES `antecedentes_personales` (`id_antecedente_personal`),
  ADD CONSTRAINT `id_genero` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`);
COMMIT;

CREATE TABLE IF NOT EXISTS medico (
  IdMedico INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (IdMedico));

CREATE TABLE IF NOT EXISTS consulta (
  IdConsulta INT NOT NULL AUTO_INCREMENT,
  IdPaciente INT NOT NULL,
  IdMedico INT NOT NULL,
  FechaConsulta DATE NOT NULL,
  HoraConsulta TIME NOT NULL,
  MotivoConsulta VARCHAR(450) NOT NULL,
  PRIMARY KEY (IdConsulta));

CREATE TABLE enfermedades (
    id_enfemedad INT AUTO_INCREMENT PRIMARY KEY,
    nombre_enfermedad VARCHAR(255) NOT NULL);  

CREATE TABLE IF NOT EXISTS diagnostico (
  IdDiagnostico INT NOT NULL AUTO_INCREMENT,
  NombreDiag VARCHAR(250) NOT NULL,
  PRIMARY KEY (IdDiagnostico));

CREATE TABLE IF NOT EXISTS sintomas (
  IdSintomas INT NOT NULL AUTO_INCREMENT,
  DescripcionSintoma VARCHAR(250) NOT NULL,
  PRIMARY KEY (IdSintomas));

CREATE TABLE IF NOT EXISTS sintomas_diagnostico (
  idSintomas_diagnostico INT NOT NULL AUTO_INCREMENT,
  idSintomas INT NOT NULL,
  PRIMARY KEY (idSintomas_diagnostico),
  FOREIGN KEY (idSintomas) REFERENCES sintomas(idSintomas));
  
CREATE TABLE IF NOT EXISTS diagnostico_consulta (
  IdDiagnostico_Consulta INT NOT NULL AUTO_INCREMENT,
  IdDiagnostico INT NOT NULL,
  IdConsulta INT NOT NULL,
  ObservacionesDiag VARCHAR(250) NULL,
  idSintomas_diagnostico INT NOT NULL,
  PRIMARY KEY (IdDiagnostico_Consulta),
  FOREIGN KEY (IdDiagnostico) REFERENCES diagnostico(IdDiagnostico),
  FOREIGN KEY (IdConsulta) REFERENCES consulta(IdConsulta));

CREATE TABLE IF NOT EXISTS medicamento (
  IdMedicamento INT NOT NULL AUTO_INCREMENT,
  NombreMedicamento VARCHAR(250) NOT NULL,
  PRIMARY KEY (IdMedicamento));

CREATE TABLE IF NOT EXISTS dosis (
  IdDosis INT NOT NULL AUTO_INCREMENT,
  IdMedicamento INT,
  miligramo VARCHAR (20) NOT NULL,
  PRIMARY KEY (IdDosis),
  FOREIGN KEY (IdMedicamento) REFERENCES medicamento(IdMedicamento));

CREATE TABLE IF NOT EXISTS tratamiento (
  IdTratamiento INT NOT NULL AUTO_INCREMENT,
  IdMedicamento INT NOT NULL,
  NombreTratamiento VARCHAR(250) NOT NULL,
  PRIMARY KEY (IdTratamiento),
  FOREIGN KEY (IdMedicamento) REFERENCES medicamento(IdMedicamento));

CREATE TABLE IF NOT EXISTS tratamiento_diag_cons (
  IdTratamiento_Diag_Cons INT NOT NULL AUTO_INCREMENT,
  IdTratamiento INT NOT NULL,
  IdDiagnostico_Consulta INT NOT NULL,
  ObservacionesTrat VARCHAR(250) NULL DEFAULT NULL,
  PRIMARY KEY (IdTratamiento_Diag_Cons),
  FOREIGN KEY (IdDiagnostico_Consulta) REFERENCES diagnostico_consulta(IdDiagnostico_Consulta),
  FOREIGN KEY (IdTratamiento) REFERENCES tratamiento(IdTratamiento));

CREATE TABLE Frecuencia (
    id_Frecuencia INT AUTO_INCREMENT PRIMARY KEY,
    tiempo_Frecuencia VARCHAR(255) NOT NULL);

CREATE TABLE Duracion (
    id_Duracion INT AUTO_INCREMENT PRIMARY KEY,
    Dia VARCHAR(255) NOT NULL);
    
CREATE TABLE Terapia (
    id_Terapia INT AUTO_INCREMENT PRIMARY KEY,
    tipo_Terapia VARCHAR(255) NOT NULL
);

CREATE TABLE procedimientos (
    id_Procedimiento INT AUTO_INCREMENT PRIMARY KEY,
    tipo_descripcion VARCHAR(255) NOT NULL
); 

CREATE TABLE cirugias (
    id_Cirugia INT AUTO_INCREMENT PRIMARY KEY,
    tipo_cirugia VARCHAR(255) NOT NULL
); 
    
CREATE TABLE IF NOT EXISTS indicaciones (
  IdIndicaciones INT NOT NULL AUTO_INCREMENT,
  IdDosis INT NOT NULL,
  IdTratamiento_Diag_Cons INT NOT NULL,
  DescripcionInd VARCHAR(450) NOT NULL,
  PRIMARY KEY (IdIndicaciones),
  FOREIGN KEY (IdDosis) REFERENCES dosis(IdDosis),
  FOREIGN KEY (IdTratamiento_Diag_Cons) REFERENCES tratamiento_diag_cons(IdTratamiento_Diag_Cons));

CREATE TABLE IF NOT EXISTS informe (
  IdInforme INT NOT NULL AUTO_INCREMENT,
  IdIndicaciones INT NOT NULL,
  PRIMARY KEY (IdInforme),
  FOREIGN KEY (IdIndicaciones) REFERENCES indicaciones(IdIndicaciones));

CREATE TABLE IF NOT EXISTS historialmedico (
  IdHistorial INT NOT NULL AUTO_INCREMENT,
  IdAntPersonal INT NOT NULL,
  IdAntFamiliares INT NOT NULL,
  IdInforme INT NOT NULL,
  PRIMARY KEY (IdHistorial),
  FOREIGN KEY (IdAntPersonal) REFERENCES antpersonal(IdAntPersonal),
  FOREIGN KEY (IdAntFamiliares) REFERENCES antfamiliares(IdAntFamiliares),
  FOREIGN KEY (IdInforme) REFERENCES informe(IdInforme));

CREATE TABLE IF NOT EXISTS examenes_consulta (
  idexamenes_consulta INT NOT NULL,
  TipoExamen VARCHAR(450) NOT NULL,
  NombreExamen VARCHAR(450) NOT NULL,
  FechaExamen DATETIME NOT NULL,
  IdDiagnostico_Consulta INT NOT NULL,
  PRIMARY KEY (idexamenes_consulta),
  FOREIGN KEY (IdDiagnostico_Consulta) REFERENCES diagnostico_consulta(IdDiagnostico_Consulta));

INSERT INTO enfermedades (nombre_enfermedad) VALUES
    ('Malaria'),
    ('Dengue'),
    ('Chikungunya'),
    ('Zika'),
    ('Leishmaniasis'),
    ('Tuberculosis'),
    ('Hepatitis A'),
    ('Hepatitis B'),
    ('Hepatitis C'),
    ('Fiebre amarilla'),
    ('Chagas'),
    ('Enfermedad de Chagas'),
    ('Enfermedad de Lyme'),
    ('Sarampión'),
    ('Rubeola'),
    ('Fiebre tifoidea'),
    ('Cólera'),
    ('Infecciones respiratorias agudas'),
    ('Infecciones de transmisión sexual'),
    ('Enfermedades cardiovasculares'),
    ('Diabetes'),
    ('Asma'),
    ('Cáncer');

INSERT INTO dosis (miligramo) VALUES
    ("5 mg"),
    ("10 mg"),
    ("20 mg"),
    ("25 mg"),
    ("50 mg"),
    ("75 mg"),
    ("100 mg"),
    ("125 mg"),
    ("150 mg"),
    ("200 mg"),
    ("250 mg"),
    ("500 mg"),
    ("750 mg"),
    ("1 g (1000 mg)"),
    ("1.5 g"),
    ("2 g (2000 mg)"),
    ("5 g"),
    ("10 g"),
    ("20 g"),
    ("25 g");

INSERT INTO Frecuencia (tiempo_Frecuencia) VALUES
    ("6 hora"),
    ("8 hora"),
    ("12 hora"),
    ("24 hora");
    
INSERT INTO Duracion (Dia) VALUES
    ("3 Dia"),
    ("5 Dia"),
    ("7 Dia"),
    ("10 Dia"),
    ("15 Dia"),
    ("20 Dia"),
    ("30 Dia"),
    ("otro Dia");

INSERT INTO Terapia (tipo_Terapia) VALUES
    ("Fisica"),
    ("Farmacologica"),
    ("otro ");

INSERT INTO procedimientos (tipo_descripcion) VALUES
    ('Cirugía de apéndice'),
    ('Endoscopia digestiva'),
    ('Colonoscopia'),
    ('Ecocardiograma'),
    ('Tomografía computarizada (TC)'),
    ('Resonancia magnética (RM)'),
    ('Biopsia'),
    ('Radioterapia'),
    ('Quimioterapia'),
    ('Angioplastia'),
    ('Cesárea'),
    ('Cateterismo cardíaco'),
    ('Laparoscopia'),
    ('Implante de marcapasos'),
    ('Test alergia');

INSERT INTO cirugias (tipo_cirugia) VALUES
    ('Cirugía de apéndice'),
    ('Cirugía de vesícula biliar'),
    ('Cirugía de hernia'),
    ('Cirugía de tiroides'),
    ('Cirugía de mama'),
    ('Cirugía cardiovascular'),
    ('Cirugía de columna'),
    ('Cirugía bariátrica'),
    ('Cirugía plástica y reconstructiva'),
    ('Cirugía de trasplante'),
    ('Cirugía de cataratas'),
    ('Cirugía de próstata'),
    ('Cirugía de oído'),
    ('Cirugía de cadera'),
    ('Cirugía de rodilla'),
    ('Cirugía maxilofacial'),
    ('Cirugía de retina'),
    ('Cirugía de columna lumbar'),
    ('Cirugía de mano'),
    ('Cirugía de vesícula biliar por laparoscopia');
