@extends('layouts.app')

@section('content')
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="h5">{{ __('messages.ShoppingBag') }}</th>
                                    <th scope="col">{{ __('messages.Format') }}</th>
                                    <th scope="col">{{ __('messages.Quantity') }}</th>
                                    <th scope="col">{{ __('messages.Price') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <img src="/assets/images/{{ $item->image }}" class="img-fluid rounded-3"
                                                    style="width: 120px;" alt="Book">
                                                <div class="flex-column ms-4">
                                                    <p class="mb-2">{{ $item->product_name }}</p>
                                                    <p class="mb-0">{{ $item->description }}</p>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="align-middle">
                                            <p class="mb-0" style="font-weight: 500;">Digital</p>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex flex-row">
                                                <button class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity"
                                                    value="{{ $item->qty }}" type="number"
                                                    class="form-control form-control-sm" style="width: 50px;" />

                                                <button class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <p class="mb-0" style="font-weight: 500;">${{ $item->net }}</p>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                    <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                        <div class="card-body p-4">

                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                                    <form>
                                        <div class="d-flex flex-row pb-3">
                                            <div class="d-flex align-items-center pe-2">
                                                <input class="form-check-input" type="radio" name="radioNoLabel"
                                                    id="radioNoLabel1v" value="" aria-label="..." checked />
                                            </div>
                                            <div class="rounded border w-100 p-3">
                                                <p class="d-flex align-items-center mb-0">
                                                    <i
                                                        class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>{{ __('messages.CreditCard') }}

                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row pb-3">
                                            <div class="d-flex align-items-center pe-2">
                                                <input class="form-check-input" type="radio" name="radioNoLabel"
                                                    id="radioNoLabel2v" value="" aria-label="..." />
                                            </div>
                                            <div class="rounded border w-100 p-3">
                                                <p class="d-flex align-items-center mb-0">
                                                    <i
                                                        class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>{{ __('messages.DebitCard') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div class="d-flex align-items-center pe-2">
                                                <input class="form-check-input" type="radio" name="radioNoLabel"
                                                    id="radioNoLabel3v" value="" aria-label="..." />
                                            </div>
                                            <div class="rounded border w-100 p-3">
                                                <p class="d-flex align-items-center mb-0">
                                                    <i
                                                        class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i>{{ __('messages.PayPal') }}
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="form-outline mb-4 mb-xl-5">
                                                <input type="text" id="typeName" class="form-control form-control-lg"
                                                    siez="17" placeholder="John Smith" />
                                                <label class="form-label"
                                                    for="typeName">{{ __('messages.NameOnCard') }}</label>
                                            </div>

                                            <div class="form-outline mb-4 mb-xl-5">
                                                <input type="text" id="typeExp" class="form-control form-control-lg"
                                                    placeholder="MM/YY" size="7" id="exp" minlength="7"
                                                    maxlength="7" />
                                                <label class="form-label"
                                                    for="typeExp">{{ __('messages.Expiration') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="form-outline mb-4 mb-xl-5">
                                                <input type="text" id="typeText" class="form-control form-control-lg"
                                                    siez="17" placeholder="1111 2222 3333 4444" minlength="19"
                                                    maxlength="19" />
                                                <label class="form-label"
                                                    for="typeText">{{ __('messages.CardNumber') }}</label>
                                            </div>

                                            <div class="form-outline mb-4 mb-xl-5">
                                                <input type="password" id="typeText"
                                                    class="form-control form-control-lg"
                                                    placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3"
                                                    maxlength="3" />
                                                <label class="form-label" for="typeText">Cvv</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3">
                                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                                        <p class="mb-2">{{ __('messages.Subtotal') }}</p>
                                        <p class="mb-2">${{ $summary->subtotal }}</p>
                                    </div>

                                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                                        <p class="mb-0">{{ __('messages.TotalTaxIncluded') }}</p>
                                        <p class="mb-0">${{ $summary->totalWithTax }}</p>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">{{ __('messages.TotalAfterDiscount') }}</p>
                                        <p class="mb-2">${{ $summary->totalWithDiscount }}</p>
                                    </div>
                                    <span class="badge bg-danger">Try Me :$</span>

                                    <div class="d-flex justify-content-between">

                                        <a
                                            href="{{ route('downloadCartPDF') }}"class="btn btn-primary btn-block btn-lg form-control">

                                            <span>{{ __('messages.Checkout') }}</span>
                                            <span>${{ $summary->totalWithDiscount }}</span>

                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
