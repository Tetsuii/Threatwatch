<!DOCTYPE html>
<html lang="en">

    <link rel="stylesheet" href="/css/home.css">

    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>  
    </head>

    <body>
        <div class="crud_side"><button class="letd" onclick="">LETD</button><button class="enhance">ENHANCE</button><button class="tht">THT</button>
        </div>
        <div class="contletd">
            <div>
                <h3>Creating new service</h3>
                <form action="/crud/createletd" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="name" id="" placeholder="Service Name" require>
                    <br>
                    <textarea name="description" id="" placeholder="Service Description" require></textarea>
                    <br>
                    <input type="file" name="image" id="" require>
                    <input type="submit" value="Create">
                </form>
            </div>

            <div>
                <h3>Updating service</h3>
                <form action="/crud/updateletd" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="number" name="id" id="" placeholder="Service ID here" require>
                    <input type="text" name="name" id="" placeholder="Service Name" require>
                    <br>
                    <textarea name="description" id="" placeholder="Service Description" require></textarea>
                    <br>
                    <input type="file" name="image" id="" require>
                    <input type="submit" value="Update">
                </form>
            </div>

            <div>
                <h3>Delete service</h3>
                <form action="/crud/deleteletd" method="POST">
                    @csrf
                    <input type="number" name="id" id="" placeholder="Service ID here" require>
                    <br>
                    <input type="submit" value="Delete">
                </form>
            </div>
        </div>

        <div class="conttht">
            <div>
                <h3>Creating new service</h3>
                <form action="/crud/createtht" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="name" id="" placeholder="Service Name" require>
                    <br>
                    <textarea name="description" id="" placeholder="Service Description" require></textarea>
                    <br>
                    <input type="file" name="image" id="" require>
                    <input type="submit" value="Create">
                </form>
            </div>

            <div>
                <h3>Updating service</h3>
                <form action="/crud/updatetht" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="number" name="id" id="" placeholder="Service ID here" require>
                    <input type="text" name="name" id="" placeholder="Service Name" require>
                    <br>
                    <textarea name="description" id="" placeholder="Service Description" require></textarea>
                    <br>
                    <input type="file" name="image" id="" require>
                    <input type="submit" value="Update">
                </form>
            </div>

            <div>
                <h3>Delete service</h3>
                <form action="/crud/deletetht" method="POST">
                    @csrf
                    <input type="number" name="id" id="" placeholder="Service ID here" require>
                    <br>
                    <input type="submit" value="Delete">
                </form>
            </div>
        </div>

        <div class="contenhance">
            <div>
                <h3>Creating new service</h3>
                <form action="/crud/createenhance" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="name" id="" placeholder="Service Name" require>
                    <br>
                    <textarea name="description" id="" placeholder="Service Description" require></textarea>
                    <br>
                    <input type="file" name="image" id="" require>
                    <input type="submit" value="Create">
                </form>
            </div>

            <div>
                <h3>Updating service</h3>
                <form action="/crud/updateenhance" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="number" name="id" id="" placeholder="Service ID here" require>
                    <input type="text" name="name" id="" placeholder="Service Name" require>
                    <br>
                    <textarea name="description" id="" placeholder="Service Description" require></textarea>
                    <br>
                    <input type="file" name="image" id="" require>
                    <input type="submit" value="Update">
                </form>
            </div>

            <div>
                <h3>Delete service</h3>
                <form action="/crud/deleteenhance" method="POST">
                    @csrf
                    <input type="number" name="id" id="" placeholder="Service ID here" require>
                    <br>
                    <input type="submit" value="Delete">
                </form>
            </div>
        </div>
    </body>
</html>