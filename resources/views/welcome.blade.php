<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    </head>
    <body>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column is-half is-offset-one-quarter">
                        <form id="2c2p-payment-form" action="/home" method="POST">
                            @csrf()
                            <div class="field">
                                <label class="label">Credit Card Number</label>
                                <div class="control">
                                    <input class="input" type="text" data-encrypt="cardnumber" maxlength="16" placeholder="Credit Card Number">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" data-encrypt="month" maxlength="2" placeholder="MM">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input" type="text" data-encrypt="year" maxlength="4" placeholder="YYYY">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input" type="password" data-encrypt="cvv" maxlength="4" autocomplete="off" placeholder="CVV2/CVC2">
                                </div>
                            </div>

                            <div class="control">
                                <button class="button is-primary" type="submit" value="Submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript" src="{{ config('laravel-2c2p.secure_pay_script') }}"></script>
        <script type="text/javascript">
            My2c2p.onSubmitForm("2c2p-payment-form", function(errCode,errDesc){
                if(errCode!=0){
                    alert(errDesc);
                }
            });
        </script>
    </body>
</html>
