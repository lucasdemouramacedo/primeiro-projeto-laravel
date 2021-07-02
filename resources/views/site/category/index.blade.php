@extends('layouts.site') <!-- chama o código do arquivo site.blade.php na pasta layout -->

@section('content') <!-- indexa  esse contúdo onde a função @*yield('content') é chamada no arquivo site.blade.php-->


    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">With apples drink teriyaki. </h1>
        </div>
        <div class="pattern__header"></div>
    </header>
    <!-- Products list -->
    <div class="gray-background">
        <section class="products__cultivation__category main-wrapper">
            @foreach($categories as $category)
                <article class="card__product">
                    <a href="{{route('site.products.category', ['category' => $category])}}">
                        <div class="card__cover">
                            <img src="{{asset($category->image)}}">
                        </div>
                        <header class="card__product-header">
                            <h2 class="title-medium">{{$category->name}}</h2>
                            <p>{{$category->description}}</p>
                        </header>
                    </a>
                </article>
            @endforeach
        </section>
    </div>


@endsection
