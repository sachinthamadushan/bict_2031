<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1>Item Manage</h1>
                        <form method="POST">
                            <div class="p-2">
                                <input class="form-control" type="text" id="itemName" placeholder="Enter Item Name">
                            </div>
                            <div class="p-2">
                                <input class="form-control" type="text" id="itemDesc" placeholder="Enter Item Description">
                            </div>
                            <div class="p-2">
                                <input class="form-control" type="text" id="itemPrice" placeholder="Enter Item Price">
                            </div>
                            <div class="p-2">
                                <button onclick="saveItem();" class="btn btn-primary">Save Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1>Item List</h1>
                        <div class="p-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Item Description</th>
                                        <th scope="col">Item Price</th>
                                    </tr>
                                </thead>
                                <tbody id="itemList">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="index.js"></script>
</body>
</html>