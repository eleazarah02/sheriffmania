<?php
if ($_SESSION['uid']==='1') { ?>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
      	<span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
    </div>
    <div class="collapse navbar-collapse" id="miMenu">
      <ul class="nav navbar-nav">
            <li class="<?php if (isset($active_usuarios)){echo $active_usuarios;}?>"><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
            <li class="<?php if (isset($active_productos)){echo $active_productos;}?>"><a href="listar.php"><span class="glyphicon glyphicon-list"></span> Productos</a></li>
            <li class="<?php if (isset($active_proveedores)){echo $active_proveedores;}?>"><a href="Proveedores.php"><span class="glyphicon glyphicon-list"></span> Proveedores</a></li>
            <li class="<?php if (isset($active_ventas)){echo $active_ventas;}?>"><a href="ventas.php"><span class="glyphicon glyphicon-usd"></span> Ventas</a></li>
          <li class="<?php if (isset($active_vender)){echo $active_vender;}?>"><a href="vender.php"><span class="glyphicon glyphicon-shopping-cart"></span> Vender</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right"> 
        <li><a href="logout.php"><?php echo $userDetails->name;?> <span class="glyphicon glyphicon-off"></span>  Cerrar Sesi&oacute;n</a></li>    
      </ul>
    </div>
  </div>
</nav>
<?php  }
  else { ?>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand active" href="home.php"><span class="glyphicon glyphicon-home"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="miMenu">
      <ul class="nav navbar-nav">
            <!-- <li><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li> -->
            <li><a href="listar.php"><span class="glyphicon glyphicon-list"></span> Productos</a></li>
            <!-- <li><a href="proveedores.php"><span class="glyphicon glyphicon-list"></span> Proveedores</a></li> -->
            <!-- <li><a href="ventas.php"><span class="glyphicon glyphicon-usd"></span> Ventas</a></li> -->
          <li><a href="vender.php"><span class="glyphicon glyphicon-shopping-cart"></span> Vender</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right"> 
        <li><a href="logout.php"><?php echo $userDetails->name;?> <span class="glyphicon glyphicon-off"></span>  Cerrar Sesi&oacute;n</a></li>    
      </ul>
    </div>
  </div>
</nav>
<?php  }
  
  ?>   