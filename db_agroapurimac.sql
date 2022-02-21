create database db_agroapurimac;
use db_agroapurimac;

create table Rol_Usuario(
id_rol int auto_increment primary key not null,
nombre_rol varchar(50) not null
);
insert into Rol_Usuario(nombre_rol) value("admin");
insert into Rol_Usuario(nombre_rol) value("vendedor");
insert into Rol_Usuario(nombre_rol) value("cliente");

create table Usuario(
id_usuario int auto_increment primary key not null,
id_rol int not null,
estado_usuario int not null,
correo_usuario varchar(40) not null,
password_usuario varchar(30) not null,
nombre_usuario varchar(40) not null,
apellido_usuario varchar(40),
direccion_usuario varchar(50),
foreign key (id_rol) references Rol_Usuario(id_rol)
);
insert into Usuario value(1,1,0,"admin@gmail.com","admin","admin","apellidos","Los Rosales");
insert into Usuario value(2,3,0,"cliente@gmail.com","cliente","cliente general","---","abancay-apu");

create table Categoria(
id_categoria int auto_increment primary key not null,
nombre_categoria varchar(30),
descripcion_categoria varchar(1000)
);
insert into Categoria(nombre_categoria,descripcion_categoria) values('Biológicos',' Insecticidas Fungicidas Inoculante de suelo Acondicionador de suelos Nematicidas.');

create table Helado(
id_helado int auto_increment primary key not null,
nombre_helado varchar(20) not null,
precio_helado double not null,
stock_helado int not null,
imagen1_helado varchar(200),
imagen2_helado varchar(200),
descripcion varchar(500) not null,
id_categoria int not null,
foreign key (id_categoria) references Categoria(id_categoria)
);
insert into Helado value(1,"EndoMaxx ",23,200,"imagenproducto1.jpg" ,"imagenproducto2.jpg","Para uso en suelo o inoculante de semillas. Puede también ser usado como tratamiento de semilla. Ideal para cultivos de exportación , Palto , Vid , Cítricos y Hortalizas.",1);
insert into Helado value(2,"CUTSALT ",15,200,"imagenproducto3.jpg" ,"imagenproducto4.jpg","Corrector de suelos sódicos, salinos-sódicos y suelos con carencias de calcio, de reacción alcalina débil, que en medio alcalino es capaz de suministrar a la planta el calcio necesario para su normal desarrollo.",1);

 create table Carrito(
id_carrito int auto_increment primary key not null,
id_helado int not null,
id_usuario int not null,
cantidad_carrito int not null,
foreign key (id_helado) references Helado(id_helado),
foreign key (id_usuario) references Usuario(id_usuario)
);
create table Ventas(
id_venta int auto_increment primary key not null,
id_usuario int not null,
id_helado int not null,
fecha datetime not null,
cantidad int not null,
precio_total double not null,
foreign key (id_usuario) references Usuario(id_usuario),
foreign key (id_helado) references Helado(id_helado)
);

create table Empresa(
id_empresa int auto_increment primary key not null,
nombre_empresa varchar(20),
slogan_empresa varchar(100),
telefono1_empresa varchar(15),
telefono2_empresa varchar(15),
email1_empresa varchar(30),
email2_empresa varchar(30),
icono_empresa varchar(50),
logo_empresa varchar(50),
ubicacion_empresa varchar(50),
mapa_empresa varchar(250)
);
insert into Empresa values('1','AgroApurímac','Somos una empresa que brinda a nuestra clientela la venta de productos agroquimicos','+51 927613580','+51 983659999','agroa_purimac03@gmail.com','victor03huaman@gmail.com','icono.png','logo.png','Av. Diaz Barcenas Nro. 808 Cercado (808-B)','https://www.google.com/maps/dir//Ave+Diaz+Barcenas+892-904,+Abancay+03001/@-13.6359009,-72.8830378,185m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x916d02d8dd21d497:0xbe5695b876cc72f5!2m2!1d-72.8823775!2d-13.6350609');
 