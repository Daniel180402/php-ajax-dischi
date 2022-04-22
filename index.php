<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>
<body>
    <?php
        include __DIR__ . '/data.php';
    ?>
    <main id="app">
        <div class="container h-100 d-flex align-items-center">
            <div class="disc-wrapper d-flex flex-wrap">
                <div class="card" v-for="disc in dischi">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> {{ disc.title }} </h5>
                        <p class="card-text">{{ disc.author }}</p>
                        <p class="card-text">{{ disc.year }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>