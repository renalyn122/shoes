<style >
    body{
/*        background: linear-gradient(90deg, rgba(149,0,255,1) 0%, rgba(255,0,181,1) 100%);*/
    }
     ul li a{
        color: white !important;
     }

     .main-header .top-search-holder .search-area .search-button:after {
    color: black;
    content: "\f002";
    font-family: fontawesome;
    font-size: 13px;
    line-height: 9px;
    vertical-align: middle;
}


</style>


<div class="side-menu animate-dropdown outer-bottom-xs"style="width:150%; margin-left: -50%;" >
    <div class="head" style="color:white; background-color:purple;"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
  
        <ul class="nav">
            <li class="dropdown menu-item">
              <?php $sql=mysqli_query($con,"select id,categoryName  from category");
while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="category.php?cid=<?php echo $row['id'];?>" class="dropdown-toggle" style="color:white !important; background: linear-gradient(90deg, rgba(123,0,199,1) 0%, rgba(255,0,151,1) 100%) !important;" ><i class="icon fa fa-desktop fa-fw" ></i>
                <?php echo $row['categoryName'];?></a>
                <?php }?>
                        
</li>
</ul>
    </nav>
</div>