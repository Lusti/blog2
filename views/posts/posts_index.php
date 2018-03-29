<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	 <div id="blog" class="row">

                  <div class="col-sm-2 paddingTop20">
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="javascript:;"><span class="glyphicon glyphicon-star"></span> News</a></li>
                    <li><a href="javascript:;">Latest news</a></li>
                    <li><a href="javascript:;">Updates</a></li>
                    <li><a href="javascript:;">Training</a></li>
                    <li><a href="javascript:;">Nutrition</a></li>
                    <li><a href="javascript:;">Proteins</a></li>
                    <li><a href="javascript:;">Recipes</a></li>
                    <li><a href="javascript:;">Challenge</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="javascript:;"><i class="glyphicon glyphicon-off"></i> Sign in</a></li>
                </ul>
            </nav>
                      <div><h2 class="add"></h2></div>
        </div>

        <?foreach($posts as $post):?>
                 <div class="col-md-10 blogShort">
                     <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?= $post['post_subject']; ?></a></h1>
                     <article><p>
                          <?= $post['post_text']; ?>
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="http://bootsnipp.com/user/snippets/2RoQ">READ MORE</a>
                 </div>
                 <?endforeach?>

               <div class="col-md-12 gap10"></div>
             </div>
</div>
