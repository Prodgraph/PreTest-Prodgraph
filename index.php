<!DOCTYPE html>
<html lang="FR">
  <head>
    <meta charset="utf-8">

    <title>Starter Template for Bootstrap Test</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

     </head>

	<body>
    <H1>Test de connection a la base De Donnés </H1>
    <?php 
	include('include/Connect_Base.php');
	$nuart=4800017;
	echo'<h1>Exploration de la base</h1>';
	try
	{
		$sql="SELECT Titre FROM base_catalis WHERE NUART='$nuart'";
		$req=$DB->query($sql);
		while($d=$req->fetch(PDO::FETCH_OBJ))
		{
			echo $d->Titre.'<br/>';	
		}
		try
		{
			$sql="SELECT argu FROM base_catalis_argu WHERE NUART='$nuart'";
			$req=$DB->query($sql);
			while($d=$req->fetch(PDO::FETCH_OBJ))
			{
				echo $d->argu;	
			}	
		}
		catch(PDOException $e)
		{
			echo '<p style="color:red;font-weight:bold;">La requete n\'est pas valide</p>';	
		}	
	}
	//Si celle-ci est invalide on affiche le message suivant
	catch(PDOException $e)
	{
		echo '<p style="color:red;font-weight:bold;">La requete n\'est pas valide</p>';	
	}	
	?>
    
    
 	<!--<div class="container">
    <div class="navbar navbar-default navbar-fixed-top">
    	<div class="container">
        	<div class="navbar-header">
           	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                	<span class="sr-only">Toogle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>
           		<a  class="navbar-brand" href="#">Mon Site</a>
            </div>
                <div class="navbar-collapse collapse">
                	<ul class="nav navbar-nav">
                    	<li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="dropdown"> 
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                            	<li><a href="#">Sous Menu 1</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Sous Menu 2</a></li>
                            </ul>
                        </li>
                    </ul>                	
              </div>                
        </div>    	
    </div>
    </div>
    
    <div class="container">
    	<div class="row" style="margin-top:20px;">
        	<div class="col-md-4" style="background-color:red;">
            	<h2>Image</h2>
            </div>
            <div class="col-md-8" style="background-color:blue;">
            	<h2>Texte</h2>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-8" style="background-color:yellow; margin-top:0;">
            	<h2>Texte</h2>
            </div>
            <div class="col-md-4" style="background-color:green;">
            	<h2>Image</h2>
            </div>
        </div>
    
    <hr class="featurette-divider">
    <footer style="background-color:#CCC">
    	<p class="pull-right">
        	Hagues Antoine 2014
        </p>
    	<p>Copyright</p>
    </footer>
    </div>
   </div>-->
   

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
	</body>
</html>