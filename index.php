<!DOCTYPE html>
<html>

<head>
    <title>BetaMedia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php" type="text/css">
</head>

<body>
    <section>
        <div>
            <h1>Kelionės</h1>
            <table class="table2">
                <tr>
                    <th>PASIŪLYMAS</th>
                    <th>Kaina</th>
                    <th>Paveikslėlis</th>
                </tr>
            </table>
        </div>
        <div>
            <h1>Grožis</h1>
            <table class="table1">
                <tr>
                    <th>PASIŪLYMAS</th>
                    <th>Kaina</th>
                    <th>Paveikslėlis</th>
                </tr>
            </table>
        </div>
    </section>


    <script>
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "functions.php", true);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                var data = JSON.parse(this.responseText);

                data.forEach(d => {
                    var sk = d.category;
                    console.log(sk);
                    var newRowElement = document.createElement("tr");

                    // Title
                    var newRowDataTitle = document.createElement("td");
                    newRowDataTitle.innerText = d.title;
                    newRowElement.appendChild(newRowDataTitle);

                    // Price
                    var newRowDataPrice = document.createElement("td");
                    newRowDataPrice.innerText = d.price;
                    newRowElement.appendChild(newRowDataPrice);

                    // Image
                    var newRowDataImage = document.createElement("td");
                    var newRowDataImageElement = document.createElement("img");
                    newRowDataImageElement.src = d.image;
                    newRowDataImage.appendChild(newRowDataImageElement);
                    newRowElement.appendChild(newRowDataImage);
                    if (sk == 1) {
                        document.querySelector(".table2").appendChild(newRowElement);
                    } else {
                        document.querySelector(".table1").appendChild(newRowElement);
                    }

                });
            }
        };

        xmlhttp.send();

    </script>

</body>

</html>
