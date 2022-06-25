<!-- build customer shopping sidebar -->
   

   <div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Products Categories</h3>
    </div>
    
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
           
           <!-- pull product catagories from DB -->
            
         <?php getPCats(); ?>
            
        </ul>
    </div>
    
</div>

<!-- establish catagories menu -->
<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div><!-- panel-heading Finish -->
    
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
        
        <!-- pull catagories from DB -->
            
         <?php getCats(); ?>
            
        </ul>
    </div>
    
</div>