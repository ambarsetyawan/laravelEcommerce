
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Categorias</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

            @foreach($categories as $categorie)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="http://commerce.dev:10088/category/1">{{ $categorie->name }}</a></h4>
                </div>
            </div>
            @endforeach

        </div><!--/category-products-->



    </div>
</div>
