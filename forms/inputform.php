<style>
	#modalib{
		width:100%;
		height:100%;
		position:fixed;
		background-color:rgba(0,0,0,0.5);
		top:0px;left:0px;
		z-index: 1000;
		display:none;
	}
	.inputbox{
		width:267px;
		height:282px;
		background-color:white;
		position:fixed;
		top:calc( 50vh - 141px );
		left:calc( 50vw - 133px );
		border-radius: 4px;
	}
	#ibtitle{
		width:257px;
		height:35px;
		line-height:35px;
		background-color:orange;
		color:white;
		padding:0px 5px 0px 5px;
	}
	#ibdata{
		min-width:227px;
		max-width:227px;
		min-height:160px;
		max-height:160px;
		margin:10px 10px 10px 10px;
		border:1px solid #cecece;
		padding:10px;
		font-family:calibri;
		font-size:14px;
	}
	.ibboton {
		width: 92px;
		height: 30px;
		line-height: 30px;
		background-color: #545454;
		color: white;
		float: left;
		margin: 0px 2px 0px 10px;
		text-align: center;
		cursor:pointer;
	}
	.ibboton:hover{
		background-color: black;
	}

</style>

<div id="modalib">
	<div class="inputbox">
		<div id="ibtitle"> Sin titulo </div>
		<textarea id="ibdata"></textarea>
		<div class="ibboton" id="ibsave">Guardar</div>
		<div class="ibboton" id="ibcancel">Cancelar</div>
	</div>
</div>
