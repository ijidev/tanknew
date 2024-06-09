@extends('layouts.front')

@section('title')

@endsection

@section('content')
    <div class="row justify-content-center" style="margin-bottom:100px;">
        <div class="col-md-8">
            <div class="text-center">
                <img src="{{ asset($product->img) }}" class="rounded-circl rounded-top rounded-bottom" height="80" width="80" alt="product img"> 
                
                <h4>
                    {{ $product->name }}
                </h4>
                <div class="row">
                    <div class="col-6">
                        Total amount
                        <h6>
                            @php
                                $price ;
                                $combo ;
                            @endphp
                            @forelse($userProduct->where('product_id',$product->id) as $userP)
                               @php
                                  $price = $userP->price; 
                                  $combo = 10;
                               @endphp
                            @empty
                              @php
                                 $price =  $product->price; 
                                 $combo = 1;
                              @endphp
                            @endforelse
                            
                            £ {{ $price }}
                        </h6>
                    </div>
                    <div class="col-6">
                        Profit
                        <h6>
                            £{{ ($price / 100 * Auth::user()->tier->percent) * $combo }}
                        </h6>
                    </div>
                </div>
            </div>
            
            
            <div class="text-center mb-4 mt-4">
                <div class="mb-4 mt-4">
                    <strong>Creation Time</strong> <br>
                    {{ $product->created_at }}
                </div>
                <div class="mb-4 mt-4">
                    <strong>Rating No.</strong> <br>
                    {{ uniqId(5) }}
                    
                </div>
            </div>



            <div class="card bg-info">
                <div class="card-body">
                    <div class="container">
                        <span id="rateMe1"></span>
                    </div>
                      

                    <form action="{{ route('submit.review',$product->id) }}">

                        <Input name="r_id" value="{{ $r_id }}" hidden>
                     
                        <div class="text-center">
                            <strong>Rate Us Now</strong> <br>

                            <style>
                                .rating {
                                    display: inline-block;
                                }
                        
                                .rating input {
                                    display: none;
                                }
                        
                                .rating label {
                                    font-size: 30px;
                                    cursor: pointer;
                                    float: right; /* Align stars to the right */
                                }
                        
                                .rating label:before {
                                    content: '\2605';
                                    margin-right: 5px;
                                }
                        
                                .rating input:checked ~ label:before {
                                    content: '\2605'; /* Filled star character */
                                    color: #FFD700; /* Yellow color or your preferred color */
                                }
                            </style>
                        
                            <div class="rating">
                                <input type="radio" id="star1" value="1">
                                <label for="star1"></label>

                                <input type="radio" id="star2" value="2">
                                <label for="star2"></label>

                                <input type="radio" id="star3" value="3">
                                <label for="star3"></label>

                                <input type="radio" id="star4" value="4">
                                <label for="star4"></label>
                                
                                <input type="radio" id="star5" value="5">
                                <label for="star5"></label>
                            </div>
                        
                            <script>
                                // JavaScript can be used to capture the selected rating and process it as needed
                                const ratingInputs = document.querySelectorAll('.rating input');
                                let selectedRating = 0;
                        
                                ratingInputs.forEach(input => {
                                    input.addEventListener('change', () => {
                                        selectedRating = input.value;
                                        // console.log('Selected Rating: ' + selectedRating);
                                        // You can perform further actions with the selected rating here
                                    });
                                });
                            </script>
                        </div>

                        <div class="form-group mb-3 text-white">
                            <h5 class="text-light mt-4">Describe your Review (optional)</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="" value="Excellent! I personally used it too, very Applicable"/>
                                <label class="form-check-label" for="html"> Excellent! I personally used it too, very Applicable </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="" value="Normal! Not used often but know the Product"/>
                                <label class="form-check-label" for="htmll"> Normal! Not used often but know the Product </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="" value="Opps! Not used or heard it before"/>
                                <label class="form-check-label" for="hhtml"> Opps! Not used or heard it before </label>
                            </div>
                            


                            </div>

                        <div class="form-group mb-4">
                            {{-- <label for="comment">Comment</label> --}}
                            <textarea name="comment" id=""  cols="10" class="form-control" placeholder="type here"></textarea>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button class="btn btn-primary" style="width:98%; border:solid 1px black;" type="submit">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

