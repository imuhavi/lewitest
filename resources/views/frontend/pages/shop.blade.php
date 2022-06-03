@extends('frontend.master')
@section('content')
@section('header_css')
<link rel="stylesheet" href="{{ asset('/frontend/assets/') }}/css/price-range.css">

@endsection
<main>

  <section class="container" id="category-shop">
    <!-- Bradcum Here -->
    <div class="d-flex justify-content-between my-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Category</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $subcategory->name ?? '' }}</li>
        </ol>
      </nav>

      <button class="btn btn-outline-secondary d-lg-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#filter" aria-controls="filter"><i class="fas fa-filter"></i></button>
    </div>

    <!-----------------------------
            Filter For Mobile 
      ------------------------------>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="filter" aria-labelledby="offcanvasRightLabel"
      data-bs-scroll="true">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Filter By</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="col-md-12 siderbar">
          <aside>
            <div class="filter-container border p-3 rounded">
              <h4>Filter By</h4>

              <div class="accordion mt-4" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="filter-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                      aria-controls="panelsStayOpen-collapseOne">
                      Filter By Price <i class="fas fa-caret-down text-right"></i>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">

                      <div class="price-range-wraper">
                        <div class="price-input">
                          <div class="field">
                            <span>Min</span>
                            <input type="number" id="input-min" value="{{ $min }}" min="{{ $min }}" max="{{ $max }}">
                          </div>
                          <div class="field">
                            <span>Max</span>
                            <input type="number" id="input-max" value="{{ $max }}" min="{{ $min }}" max="{{ $max }}">
                          </div>
                        </div>
                        <div class="slider">
                          <div class="progress"></div>
                        </div>
                        <div class="range-input">
                          <input type="range" id="range-min" min="{{ $min }}" max="{{ $max }}" value="{{ $min }}"
                            step="5" onchange="minPrice()">
                          <input type="range" id="range-max" min="{{ $min }}" max="{{ $max }}" value="{{ $max }}"
                            step="10" onchange="maxPrice()">
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="accordion-item mt-3">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="filter-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                      aria-controls="panelsStayOpen-collapseTwo">
                      Filter By Color <i class="fas fa-caret-down text-right"></i>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">

                      <ul class="filter-color" id="filter-color">
                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="color" id="color-1">
                            <label class="form-check-label" for="color-1">
                              Green
                            </label>
                          </div>
                        </li>

                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="color" id="color-2">
                            <label class="form-check-label" for="color-2">
                              Red
                            </label>
                          </div>
                        </li>

                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="color" id="color-3">
                            <label class="form-check-label" for="color-3">
                              Blue
                            </label>
                          </div>
                        </li>

                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="color" id="color-4">
                            <label class="form-check-label" for="color-4">
                              Yellow
                            </label>
                          </div>
                        </li>

                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="color" id="color-5">
                            <label class="form-check-label" for="color-5">
                              Samon
                            </label>
                          </div>
                        </li>


                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="color" id="color-6">
                            <label class="form-check-label" for="color-6">
                              Ocene
                            </label>
                          </div>
                        </li>
                      </ul>

                      <button class="btn fivedots-filter-btn">Filter</button>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mt-3">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="filter-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                      aria-controls="panelsStayOpen-collapseThree">
                      Filter By Size <i class="fas fa-caret-down text-right"></i>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                      <ul class="filter-size">
                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="size" id="size-1">
                            <label class="form-check-label" for="size-1">
                              Small
                            </label>
                          </div>
                        </li>

                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="size" id="size-2">
                            <label class="form-check-label" for="size-2">
                              Medium
                            </label>
                          </div>
                        </li>

                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="size" id="size-3">
                            <label class="form-check-label" for="size-3">
                              Large
                            </label>
                          </div>
                        </li>

                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="size" id="size-4">
                            <label class="form-check-label" for="size-4">
                              Extra Large
                            </label>
                          </div>
                        </li>

                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="size" id="size-5">
                            <label class="form-check-label" for="size-5">
                              Extra extra large
                            </label>
                          </div>
                        </li>


                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" type="radio" name="size" id="size-6">
                            <label class="form-check-label" for="size-6">
                              Extra Small
                            </label>
                          </div>
                        </li>
                      </ul>
                      <button class="btn fivedots-filter-btn">Filter</button>
                    </div>
                  </div>
                </div>


                <div class="accordion-item mt-3">
                  <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="filter-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                      aria-controls="panelsStayOpen-collapseFour">
                      Filter By Brand <i class="fas fa-caret-down text-right"></i>
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                      <ul class="filter-brand">
                        @foreach($brands as $item)
                        <li>
                          <div class="form-check">
                            <input class="form-check-input filter-select" value="{{ $item->id }}" type="radio"
                              name="brand" id="brand-{{ $item->id }}">
                            <label class="form-check-label" for="brand-{{ $item->id }}">
                              {{ $item->name }}
                            </label>
                          </div>
                        </li>
                        @endforeach
                      </ul>
                      <button class="btn fivedots-filter-btn">Filter</button>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </aside>
        </div>
      </div>
    </div>


    <div class="row">
      <!---------------------------------
                Left Sidebar
        -------------------------------->

      <div class="col-lg-3 siderbar d-none d-sm-none d-md-none d-lg-block">
        <aside>
          <div class="filter-container border p-3 rounded">
            <h4>Filter By</h4>
            <div class="accordion mt-4" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="filter-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    Filter By Price <i class="fas fa-caret-down text-right"></i>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                  aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">

                    <div class="price-range-wraper">
                      <div class="price-input">
                        <div class="field">
                          <span>Min</span>
                          <input type="number" id="input-min" value="{{ $min }}" min="{{ $min }}" max="{{ $max }}">
                        </div>
                        <div class="field">
                          <span>Max</span>
                          <input type="number" id="input-max" value="{{ $max }}" min="{{ $min }}" max="{{ $max }}">
                        </div>
                      </div>
                      <div class="slider">
                        <div class="progress"></div>
                      </div>
                      <div class="range-input">
                        <input type="range" id="range-min" min="{{ $min }}" max="{{ $max }}" value="{{ $min }}" step="5"
                          onchange="minPrice()">
                        <input type="range" id="range-max" min="{{ $min }}" max="{{ $max }}" value="{{ $max }}"
                          step="10" onchange="maxPrice()">
                      </div>
                    </div>


                  </div>



                </div>
              </div>
            </div>

            <div class="accordion-item mt-3">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="filter-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseTwo">
                  Filter By Color <i class="fas fa-caret-down text-right"></i>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">

                  <ul class="filter-color" id="filter-color">
                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="color" id="color-1">
                        <label class="form-check-label" for="color-1">
                          Green
                        </label>
                      </div>
                    </li>

                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="color" id="color-2">
                        <label class="form-check-label" for="color-2">
                          Red
                        </label>
                      </div>
                    </li>

                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="color" id="color-3">
                        <label class="form-check-label" for="color-3">
                          Blue
                        </label>
                      </div>
                    </li>

                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="color" id="color-4">
                        <label class="form-check-label" for="color-4">
                          Yellow
                        </label>
                      </div>
                    </li>

                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="color" id="color-5">
                        <label class="form-check-label" for="color-5">
                          Samon
                        </label>
                      </div>
                    </li>


                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="color" id="color-6">
                        <label class="form-check-label" for="color-6">
                          Ocene
                        </label>
                      </div>
                    </li>
                  </ul>

                  <button class="btn fivedots-filter-btn">Filter</button>
                </div>
              </div>
            </div>

            <div class="accordion-item mt-3">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="filter-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseThree">
                  Filter By Size <i class="fas fa-caret-down text-right"></i>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <ul class="filter-size" id="filter-size">
                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="size" id="size-1">
                        <label class="form-check-label" for="size-1">
                          Small
                        </label>
                      </div>
                    </li>

                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="size" id="size-2">
                        <label class="form-check-label" for="size-2">
                          Medium
                        </label>
                      </div>
                    </li>

                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="size" id="size-3">
                        <label class="form-check-label" for="size-3">
                          Large
                        </label>
                      </div>
                    </li>

                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="size" id="size-4">
                        <label class="form-check-label" for="size-4">
                          Extra Large
                        </label>
                      </div>
                    </li>

                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="size" id="size-5">
                        <label class="form-check-label" for="size-5">
                          Extra extra large
                        </label>
                      </div>
                    </li>


                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" type="radio" name="size" id="size-6">
                        <label class="form-check-label" for="size-6">
                          Extra Small
                        </label>
                      </div>
                    </li>
                  </ul>
                  <button class="btn fivedots-filter-btn">Filter</button>
                </div>
              </div>
            </div>


            <div class="accordion-item mt-3">
              <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                <button class="filter-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseFour">
                  Filter By Brand <i class="fas fa-caret-down text-right"></i>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                  <ul class="filter-brand">
                    @foreach($brands as $item)
                    <li>
                      <div class="form-check">
                        <input class="form-check-input filter-select" value="{{ $item->id }}" type="radio" name="brand"
                          id="brand-{{ $item->id }}">
                        <label class="form-check-label" for="brand-{{ $item->id }}">
                          {{ $item->name }}
                        </label>
                      </div>
                    </li>
                    @endforeach
                  </ul>

                  <button class="btn fivedots-filter-btn">Filter</button>
                </div>
              </div>
            </div>

          </div>
        </aside>
      </div>

      <!---------------------------------
                    Products
        -------------------------------->
      <div class="col-md-12 col-lg-9">
        <div class="row mb-5">
          <div class="col-12 d-flex justify-content-between">
            <h2>{{ $subcategory->name ?? ''}}</h2>
            <div class="filter">
              <select id="select_js">
                <option>Filter By</option>
                <option>Low To High</option>
                <option>High to Low</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row gy-5">
          @foreach( $products as $product)

          @php
          $discountAmount = ($product->price - ($product->discount / 100) * $product->price);

          $discount = (($product->discount * 100) / $product->price)
          @endphp

          <div class="col-md-4 text-center">
            <div class="product-content">
              @if($product->discount !== null && $product->discount_type !== 'Flat')
              <p class="label">{{ $product->discount}}%</p>

              @elseif($product->discount !== null && $product->discount_type == 'Flat')
              <p class="label">{{$discount}}%</p>
              @endif
              <div class="proudct-img">
                <a href="{{ route('productView', $product->slug) }}">
                  <img class="img-fluid" src="{{ asset('backend/uploads/' . $product->thumbnail) }}" alt="product-12">
                </a>
                <div class="overlay">
                  <div class="action">
                    <span><a href="{{ route('productView', $product->slug) }}"><i class="fas fa-eye"></i></a></span>
                    <span><a href="#"><i class="far fa-heart"></i></a></span>
                  </div>
                </div>
              </div>
              <a href="{{ route('productView', $product->slug) }}" class="product-title d-block mt-3">{{
                Str::limit($product->name, 25)
                }}</a>


              @if($product->discount !== null && $product->discount_type !== 'Flat')
              <h3 class="new-price my-2">{{ $discountAmount}}</h3>
              <p class="old-price text-danger">{{ $product->price }}</p>
              @elseif($product->discount !== null && $product->discount_type == 'Flat')
              <h3 class="new-price my-2">{{ $product->price- $product->discount }}</h3>
              <p class="old-price text-danger">{{ $product->price }}</p>
              @else
              <h3 class="new-price my-2">{{ $product->price }}</h3>
              @endif
            </div>
          </div>
          @endforeach

        </div>
      </div>

    </div>

  </section>
</main>
@endsection

@section('footer_js')
<script src="{{ asset('/frontend/assets/') }}/js/price-range.js" type="text/javascript"></script>

<script src="{{ asset('/frontend/assets/') }}/js/price-range-sm.js" type="text/javascript"></script>
@endsection