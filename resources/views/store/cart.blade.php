@extends('store.store')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description">Descrição</td>
                            <td class="price">Preço</td>
                            <td class="qtd">Qtd</td>
                            <td class="total">Total</td>
                            <td class="total">Delete</td>
                        </tr>
                    </thead>

                    <tbody>
                        @if(isset($cart))

                            @foreach($cart->all() as $k=>$item)


                                <tr>

                                    <td class="cart_product">
                                        <a href="#">
                                            Imagem1
                                        </a>
                                    </td>
                                    <td class="cart_description">
                                        <h4>
                                            <a href="#">
                                                {{ $item['name'] }}
                                            </a>
                                        </h4>

                                        <p>
                                            Código {{ $k }}
                                        </p>
                                    </td>
                                    <td class="cart_price">
                                        R$ {{ $item['price'] }}
                                    </td>

                                    <td class="cart_quantity">
                                        R$ {{ $item['qtd'] }}
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">
                                            RS {{ $item['price'] * $item['qtd'] }}
                                        </p>
                                    </td>
                                    <td class="cart_delete">
                                        <a href="{{ route('cart.destroy', ['id' => $k]) }}" class="cart_quantity_delete">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@stop