<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--link rel="stylesheet" href="../css/footer/footer.css"-->
	<style>
		
footer{
	width: 100%;
	height: 100px;
	background:rgba(255, 111, 31, 0.4);
	position: fixed;
	bottom: 0;
}
.
.btnI-footer{
	cursor: pointer;
	height: 40px;
}
.btnU-footer{
	cursor: pointer;
	height: 27px;

}
.btnT-footer{
	cursor: default;
	height: 27px;
}
.btnC-footer{
	cursor: default;
	height: 27px;
}
.btnF-footer{
	cursor: pointer;
	height: 31px;
}
.btnS-footer{
	cursor: pointer;
	height: 40px;	
}
.btnIn-footer{
	cursor: pointer;
	height: 40px;
}
.Tp-footer {
    position: relative;
    display: inline-block;
    border-bottom: none; 
}
.Tp-footer .Tptxt-footer {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
    position: absolute;
    z-index: 1;
}
.Tp-footer:hover .Tptxt-footer {
    visibility: visible;
}
.Tp-footer .Tptxt-footer {
    top: 5px;
    left: 40%; 
}
#posU-footer{
	position: relative;	 
	top: 13px;	
	right: -30px;
}
#posT-footer{
	position: relative;	 
	top: -5px;	
	right: -310px;
}
#posC-footer{
	position: relative;	 
	top: 10px;	
	right: -600px;
}
#posF-footer{
	position: relative;	 
	top: 13px;	
	right: -850px;
}
#posI-footer{
	position: relative;
	top: 13px;
	right: -1250px: 
}
.txtTx-footer{
	font-size: 7px;
}
	</style>
</head>
<body>
	<footer>
			<div class="Tp-footer" id="posU-footer">
				<a href="https://www.google.com/maps/@4.633618,-74.0739014,3a,75y,160.09h,89.91t/data=!3m6!1e1!3m4!1sRN4amXosp1e9C2DgE6DF7g!2e0!7i13312!8i6656" target="_blank"><input type="image" src="img/botones/ubicacion.png" class="btnU-footer"></a>
				<span class="Tptxt-footer">Ubicación</span>
				<p> Cra 22 No. 44A-30 <br/> Bogotá- Colombia</p>	
			</div>
			<div class="Tp-footer" id="posT-footer">
				<input type="image" src="img/botones/Telefono.png" class="btnT-footer">
				<span class="Tptxt-footer">Teléfono</span>
				<p><a class="txtTx-footer">►</a> 485 7903</p>
			</div>
			<div class="Tp-footer" id="posC-footer">
				<input type="image" src="img/botones/celular.png" class="btnC-footer">
				<span class="Tptxt-footer">Celular</span>
				<p><a class="txtTx-footer">►</a> 3172543405 <br/><a class="txtTx-footer">►</a> 3005631648</p>
			</div>
			<div class="Tp-footer" id="posF-footer">
				<a href="https://es-la.facebook.com/eldinosauriolibreria/" target="_blank"><input type="image" src="img/botones/facebook.png" class="btnF-footer"></a>
				<span class="Tptxt-footer">Facebook</span> 
				<p> El Dinosaurio Libreria <br/> Jorge Ramirez Fajardo</p>
			</div>
		</footer>
</body>
</html>