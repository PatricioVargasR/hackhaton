<!DOCTYPE html>
<html>
<head>
<style>
    .container {
        position: relative;
        display: inline-block;
    }

    .underline {
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: black;
        transform-origin: top left;
        transform: rotate(90deg);
        top: 50%;
        left: 0;
        z-index: -1;
    }

    h3 {
        position: relative;
        z-index: 1;
    }
</style>
</head>
<body>

<div class="container">
    <h3>Nuestro Equipo</h3>
    <div class="underline"></div>
</div>

</body>
</html>