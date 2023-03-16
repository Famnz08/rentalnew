<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Order</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Montserrat', sans-serif;
}

body {
    padding: 5px;
    background-color: #7a34ca;
}

p {
    margin: 0%;
}

.container {
    max-width: 900px;
    margin: 20px auto;
    overflow: hidden;
    background-color: #f8f9fa;
}

.box-1 {
    max-width: 450px;
    padding: 10px 40px;
    user-select: none;
}

.box-1 div .fs-12 {
    font-size: 8px;
    color: white;
}

.box-1 div .fs-14 {
    font-size: 15px;
    color: white;
}

.box-1 img.pic {
    width: 20px;
    height: 20px;
    object-fit: cover;
}

.box-1 img.mobile-pic {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.box-1 .name {
    font-size: 11px;
    font-weight: 600;
}

.dis {
    font-size: 12px;
    font-weight: 500;
}

label.box {
    width: 100%;
    font-size: 12px;
    background: #ddd;
    margin-top: 12px;
    padding: 10px 12px;
    border-radius: 5px;
    cursor: pointer;
    border: 1px solid transparent;
}

#one:checked~label.first,
#two:checked~label.second,
#three:checked~label.third {
    border-color: #7700ff;
}

#one:checked~label.first .circle,
#two:checked~label.second .circle,
#three:checked~label.third .circle {
    border-color: #7a34ca;
    background-color: #fff;
}

label.box .course {
    width: 100%;
}

label.box .circle {
    height: 12px;
    width: 12px;
    background: #ccc;
    border-radius: 50%;
    margin-right: 15px;
    border: 4px solid transparent;
    display: inline-block;
}

input[type="radio"] {
    display: none;
}

.box-2 {
    max-width: 450px;
    padding: 10px 40px;
}


.box-2 .box-inner-2 input.form-control {
    font-size: 12px;
    font-weight: 600;
}

.box-2 .box-inner-2 .inputWithIcon {
    position: relative;
}

.box-2 .box-inner-2 .inputWithIcon span {
    position: absolute;
    left: 15px;
    top: 8px;
}

.box-2 .box-inner-2 .inputWithcheck {
    position: relative;
}

.box-2 .box-inner-2 .inputWithcheck span {
    position: absolute;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: green;
    font-size: 12px;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    right: 15px;
    top: 6px;
}

.form-control:focus,
.form-select:focus {
    box-shadow: none;
    outline: none;
    border: 1px solid #7700ff;
}

.border:focus-within {
    border: 1px solid #7700ff !important;
}

.box-2 .card-atm .form-control {
    border: none;
    box-shadow: none;
}

.form-select {
    border-radius: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;

}

.address .form-control.zip {
    border-radius: 0;
    border-bottom-left-radius: 10px;

}

.address .form-control.state {
    border-radius: 0;
    border-bottom-right-radius: 10px;

}

.box-2 .box-inner-2 .btn.btn-outline-primary {
    width: 120px;
    padding: 10px;
    font-size: 11px;
    padding: 0% !important;
    display: flex;
    align-items: center;
    border: none;
    border-radius: 0;
    background-color: whitesmoke;
    color: black;
    font-weight: 600;
}

.box-2 .box-inner-2 .btn.btn-primary {
    background-color: #7700ff;
    color: whitesmoke;
    font-size: 14px;
    display: flex;
    align-items: center;
    font-weight: 600;
    justify-content: center;
    border: none;
    padding: 10px;
}

.box-2 .box-inner-2 .btn.btn-primary:hover {
    background-color: #7a34ca;
}

.box-2 .box-inner-2 .btn.btn-primary .fas {
    font-size: 13px !important;
    color: whitesmoke;
}

.carousel-indicators [data-bs-target] {
    width: 10px;
    height: 10px;
    border-radius: 50%;
}

.carousel-inner {
    width: 100%;
    height: 250px;
}

.carousel-item img {
    object-fit: cover;
    height: 100%;
}

.carousel-control-prev {
    transform: translateX(-50%);
    opacity: 1;
}

.carousel-control-prev:hover .fas.fa-arrow-left {
    transform: translateX(-5px);
}

.carousel-control-next {
    transform: translateX(50%);
    opacity: 1;
}

.carousel-control-next:hover .fas.fa-arrow-right {
    transform: translateX(5px);
}

.fas.fa-arrow-left,
.fas.fa-arrow-right {
    font-size: 0.8rem;
    transition: all .2s ease;
}

.icon {
    width: 30px;
    height: 30px;
    background-color: #f8f9fa;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transform-origin: center;
    opacity: 1;
}

.fas,
.fab {
    color: #6d6c6d;
}

::placeholder {
    font-size: 12px;
}

@media (max-width:768px) {
    .container {
        max-width: 700px;
        margin: 10px auto;
    }

    .box-1,
    .box-2 {
        max-width: 600px;
        padding: 20px 90px;
        margin: 20px auto;
    }

}

@media (max-width:426px) {

    .box-1,
    .box-2 {
        max-width: 400px;
        padding: 20px 10px;
    }

    ::placeholder {
        font-size: 9px;
    }
}</style>
                                </head>
                                <body className='snippet-body'>@foreach($rental as $p)
                                <div class="container d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7i9FBKNQH2ZUv6Ud9ScdmhFsd8jS65QPTwGfs6vX6Ng&s"
                    class="pic rounded-circle" alt="">
					
                <p class="ps-2 name">{{$p->admins->name}}</p>
            </div>
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">{{$p->name}}</p>
                    <p class="fw-lighter"></p>
                </div>
                <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-indicators">
                    </div>
                    <div class="carousel-inner">
						
						<img src="{{ asset('images/'.$p->foto) }}" alt="" style="width: 500px;">
						
                    </div>
                </div>
                <p class="dis info my-3">
				Anda bisa mengalahkan semua lawan, tetapi selalu ada tantangan yang masih harus Anda hadapi, yaitu yang ada di dalam diri Anda. Bagi Anda yang berani menghadapi tantangan apa pun, kami telah mengembangkan motor yang layak untuk juara sejati. Ninja ZX-10R baru memiliki apa yang diperlukan untuk juara: semua body aerodinamis baru dengan winglet terintegrasi, lampu depan LED kecil & ringan, instrumentasi warna TFT, dan konektivitas Smartphone plus pembaruan yang berasal dari keahlian Kawasaki Racing Team World Superbike. Sekarang setelah Anda memiliki Ninja yang berfokus pada balapan, Face Yourself.
                </p>
                <div class="radiobtn">
                    <label for="one" class="box py-2 first">
                        <div class="d-flex align-items-start">
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                       CC = {{$p->cc}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="two" class="box py-2 second">
                        <div class="d-flex">
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Harga = {{$p->price}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Details</p>
                    <p class="dis mb-3">Isi formulir dibawah ini jika ingin order</p>
                </div>
                <form action="/rental/postorder" method="post">
					@csrf
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Motor</p>
            <select name="motor_id" class="form-control">
                <option value="">Silahlan Dipilih</option>
                @foreach($motor as $m)
                <option value="{{$m->id}}">{{$m->name}}</option>
                @endforeach
            </select>
                    </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Rent</p>
                            <input class="form-control" type="text" name="rent_for">
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Penalty</p>
                            <input class="form-control" type="text" name="penalty" placeholder="Denda">
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Amount</p>
                            <input class="form-control" type="text" name="amount" placeholder="Total bayar">
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Lama Sewa</p>
                            <input class="form-control" type="number" name="date">
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Tanggal kembali</p>
                            <input class="form-control" type="date" name="return_date">
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Tanggal kembali yang seharusnya</p>
                            <input class="form-control" type="date" name="real_return_date">
                        </div>
                        <div class="address">
                            <div class="d-flex">
                            </div>
                            </div>
                                <div ><button type="submit" class="btn btn-primary mt-2">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            @endforeach
                                </body>
                            </html>