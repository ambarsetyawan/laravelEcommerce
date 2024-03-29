@extends('store.store')

@section('categories')
    @include('store.partial.categories')
@stop

@section('content')

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Em destaque</h2>

            @include('store.partial.product', ['products' => $pFeatured ])

        </div>


        <div class="features_items">
            <h2 class="title text-center">Recomendados</h2>

                 @include('store.partial.product', ['products' => $pRecommended])

        </div>
        <!--recommended-->

    </div>

@stop