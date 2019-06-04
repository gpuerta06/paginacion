<div class="container my-5">
  <h1 class="mb-5">Paginación</h1>
 <div class="card-columns">
  <?php foreach($datos['articulos'] as $articulo) : ?>
    
    <div class="card" style="width: 18rem;">
      
      <div class="card-body">
        <h5 class="card-title"><?=$articulo->titulo;?></h5>
        <p class="card-text">Ejemplo de como paginar artículos de estilo card en Bootstrap 4 </p>
        <a href="#" class="btn btn-primary">Ver más</a>
      </div>
      </div>

     <?php endforeach; ?>
   </div>
    <nav aria-label="Page navigation example" class="my-5">
      <ul class="pagination">
        <li class="page-item <?=$_GET['pagina']<=1 ? 'disabled' : ''?>"><a class="page-link" href="?c=paginacion&a=Index&pagina=<?=$_GET['pagina']-1?>">Anterior</a></li>
        <?php for($i=0; $i < $paginas; $i++):
          ?>
        <li class="page-item <?=$_GET['pagina']==$i+1 ? 'active' : ''?>"><a class="page-link" href="?c=paginacion&a=Index&pagina=<?=$i+1?>"><?=$i+1?></a></li>
      <?php endfor
          ?>
        
        <li class="page-item <?=$_GET['pagina']>=$paginas ? 'disabled' : ''?>"><a class="page-link" href="?c=paginacion&a=Index&pagina=<?=$_GET['pagina']+1?>">Siguiente</a></li>
      </ul>
    </nav>
</div>