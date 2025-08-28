<style>
    .time {
        height: 100vh;
        padding-top: 250px;
    }

    h1 {
        font-family: "Kalnia", serif;
        font-size: 75px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    #time-a {
        text-decoration: none;
        border: 1px solid black;
        color: #2F5336;
        font-family: "Kalnia", serif;
        background-color: rgba(255, 238, 210, 1);
        font-size: 20px;
        transition: all 0.5s ease;
    }

    #time-a:hover {
        background-color: #2F5336;
        color: rgba(255, 238, 210, 1);
    }

    @media (max-width: 768px) {
        .time {
            padding-top: 50px;
            height: auto;
            padding-bottom: 50px;
        }

        h1 {
            font-size: 45px;
            /* 75px'den küçült */
            text-align: center;
        }

        #time-a {
            font-size: 16px;
            padding: 10px 20px !important;
        }

        .col-lg-5 {
            text-align: center;
            margin-bottom: 20px;
        }
    }
</style>

<div class="time">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-lg-5 col-0">
                    <img src="/img/TimeSvg.svg" alt="" width="85%">
                </div>
                <div class="col-lg-7 col-12 pt-5">
                    <h1>Sadece İstediğiniz <br> Zamanı Belirleyin</h1>
                    <div class="text-center">
                        <a href="#" id="time-a" class="text-center px-5 p-2 rounded-5">Rezervasyon Yap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>