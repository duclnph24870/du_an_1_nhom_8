<?php 
    require "../PHP/connection.php";
    $sql = "SELECT * FROM truyen";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $truyen = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="block">
        <div class="block-item">Hello</div>
        <div class="block-item">Hello1</div>
        <div class="block-item">Hello2</div>
    </div>
    <table>
        <thead>
            <th>id</th>
            <th>Tên</th>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>
    <script>
        const truyen = [];
        
    </script>
    <?php 
    $t =  json_encode($truyen);
     echo '
        <script>
            const truyen1 = '.$t.'
        </script>
     ';
    ?>
    <script>
        const div1 = document.querySelector('.block');
        document.querySelector('tbody').innerHTML = div1.innerHTML;
        const truyen1Arr = Object.entries(truyen1);
        const htmls = truyen1Arr.map (function (truyen) {
            return `
                <tr>
                    <td>${truyen[0]}</td>
                    <td>${truyen[1]['tenTruyen']}</td>
                </tr>
            `;
        })
        // document.querySelector('tbody').innerHTML = htmls.join('');
    </script>
</html>