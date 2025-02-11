<!DOCTYPE html>
<html lang="en">

    <link rel="stylesheet" href="/css/home.css">

    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>  
    </head>

    <body class="crud_body">
        <div class="crud_side">
            <div>
                <div class="circlogo"></div>
                <div class="containerthreat"> 
                    <img src="{{ asset('images/TWLogo.png') }}" alt="Logo" class="threat">
                </div>
                <div class="containerwatch"> 
                    <img src="{{ asset('images/TWLogo.png') }}" alt="Logo" class="watch">
                </div>
            </div>    
            <button class="letd" id="butletd" onclick="changeLETD()">LETD</button>
            <button class="enhance" id="butenhance" onclick="changeENHANCE()">ENHANCE</button>
            <button class="tht" id="buttht" onclick="changeTHT()">THT</button>
            <a href="{{ route('home') }}">HOME</a>
        </div>
        <div class="containerform">
            <div class="contletd" id="contletd">
                <div class="naming"><h1>LETD</h1><button class="crt" onclick="toggleCreateFormletd()" style="margin-left: 1239px;">CREATE</button></div>
                <div class="form">
                    <div class="name">IMAGE</div>
                    <div class="name">TITLE</div>
                    <div class="name">DESCRIPTION</div>
                    <div class="name"></div>
                    @foreach ($letds as $letd)
                        @if ($loop->index >= 0)
                        <div class="services"><img src="{{ $letd['service_image'] }}" alt=""></div>
                        <div class="services"><h4>{{ $letd['service_name']}}</h4></div>
                        <div class="services"><h4>{{ $letd['service_description']}}</h4></div>
                        <div class="updlt">
                            <button class="upd" onclick="toggleUpdateFormletd({{ $letd['id'] }})"><b>UPDATE</b></button>
                            <form action="{{ route('crud.deleteletd', $letd['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dlt"><b>DELETE</b></button>
                            </form>
                        </div>
                        <div class="form4all" id="updateFormletd-{{ $letd['id'] }}">
                                <form action="{{ route('crud.updateletd', $letd['id']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div style="height: 35px; width:100%; display:flex; flex-direction: row;">
                                        <div style="width: 180px; font-size:larger; display: grid; place-content: center;font-family:Arial, Helvetica, sans-serif;">TITLE</div>
                                        <input type="text" name="name" placeholder="{{ $letd['service_name'] }}" required 
                                               style="font-size:larger; width:100%; border: 1px solid black;font-family:Arial, Helvetica, sans-serif;">
                                    </div>
                                    <div class="flbox"></div>
                                    <div style="min-height: 130px; width:100%; display:flex; flex-direction: row;">
                                        <div style="width: 165px; font-size:larger; display: grid; place-content: top; padding-left:13px; font-family:Arial, Helvetica, sans-serif;">DESCRIPTION</div>
                                        <textarea name="description" 
                                                  style="font-size:larger; width:100%; border: 1px solid black; resize:vertical;font-family:Arial, Helvetica, sans-serif;" 
                                                  required >{{ $letd['service_description'] }}</textarea>
                                    </div>
                                    <div class="flbox"></div>
                                    <div style="height: 130px; width:100%; display:flex; flex-direction: row;">
                                        <div style="width: 105px; font-size:larger; display: grid; place-content: top ;font-family:Arial, Helvetica, sans-serif; padding-left:50px">IMAGE</div>
                                        <div><img src="{{ $letd['service_image'] }}" alt="" style="height: 130px; object-fit:scale-down"></div>
                                        <input type="file" name="image" required
                                           style="font-family:Arial, Helvetica, sans-serif; font-size:larger; margin-left:20px;">
                                    </div>
                                    <div style="height: content; width:100%; display:flex; flex-direction: row; place-content: end">
                                        <button type="submit" style="font-family:Arial, Helvetica, sans-serif; height:30px; weight: 50px"><b>SAVE</b></button>
                                        <button type="button" onclick="toggleUpdateFormletd({{ $letd['id'] }})" style="font-family:Arial, Helvetica, sans-serif; margin-left:20px; height:30px;"><b>CANCEL</b></button>
                                    </div>
                                </form>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="flbox"></div>
            </div>

            <div class="conttht" id="conttht">
                <div class="naming"><h1>THT</h1><button class="crt" onclick="toggleCreateFormtht()" style="margin-left: 1250px;">CREATE</button></div>
                <div class="form">
                    <div class="name">IMAGE</div>
                    <div class="name">TITLE</div>
                    <div class="name">DESCRIPTION</div>
                    <div class="name"></div>
                    @foreach ($thts as $tht)
                        @if ($loop->index >= 0)
                        <div class="services"><img src="{{ $tht['service_image'] }}" alt=""></div>
                        <div class="services"><h4>{{ $tht['service_name']}}</h4></div>
                        <div class="services"><h4>{{ $tht['service_description']}}</h4></div>
                        <div class="updlt">
                            <button class="upd" onclick="toggleUpdateFormtht({{ $tht['id'] }})"><b>UPDATE</b></button>
                            <form action="{{ route('crud.deletetht', $tht['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dlt"><b>DELETE</b></button>
                            </form>
                        </div>
                        <div class="form4all" id="updateFormtht-{{ $tht['id'] }}">
                            <form action="{{ route('crud.updatetht', $tht['id']) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div style="height: 35px; width:100%; display:flex; flex-direction: row;">
                                    <div style="width: 180px; font-size:larger; display: grid; place-content: center;font-family:Arial, Helvetica, sans-serif;">TITLE</div>
                                    <input type="text" name="name" placeholder="{{ $tht['service_name'] }}" required 
                                           style="font-size:larger; width:100%; border: 1px solid black;font-family:Arial, Helvetica, sans-serif;">
                                </div>
                                <div class="flbox"></div>
                                <div style="min-height: 130px; width:100%; display:flex; flex-direction: row;">
                                    <div style="width: 165px; font-size:larger; display: grid; place-content: top; padding-left:13px; font-family:Arial, Helvetica, sans-serif;">DESCRIPTION</div>
                                    <textarea name="description" 
                                              style="font-size:larger; width:100%; border: 1px solid black; resize:vertical;font-family:Arial, Helvetica, sans-serif;" 
                                              required >{{ $tht['service_description'] }}</textarea>
                                </div>
                                <div class="flbox"></div>
                                <div style="height: 130px; width:100%; display:flex; flex-direction: row;">
                                    <div style="width: 105px; font-size:larger; display: grid; place-content: top ;font-family:Arial, Helvetica, sans-serif; padding-left:50px">IMAGE</div>
                                    <div><img src="{{ $tht['service_image'] }}" alt="" style="height: 130px; object-fit:scale-down"></div>
                                    <input type="file" name="image" required
                                       style="font-family:Arial, Helvetica, sans-serif; font-size:larger; margin-left:20px;">
                                </div>
                                <div style="height: content; width:100%; display:flex; flex-direction: row; place-content: end">
                                    <button type="submit" style="font-family:Arial, Helvetica, sans-serif; height:30px; weight: 50px"><b>SAVE</b></button>
                                    <button type="button" onclick="toggleUpdateFormtht({{ $tht['id'] }})" style="font-family:Arial, Helvetica, sans-serif; margin-left:20px; height:30px;"><b>CANCEL</b></button>
                                </div>
                            </form>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="flbox"></div>
            </div>

            <div class="contenhance" id="contenhance">
                <div class="naming"><h1>ENHANCE</h1><button class="crt" onclick="toggleCreateFormenhance()" style="margin-left: 1196px;">CREATE</button></div>
                <div class="form">
                    <div class="name">IMAGE</div>
                    <div class="name">TITLE</div>
                    <div class="name">DESCRIPTION</div>
                    <div class="name"></div>
                    @foreach ($enhances as $enhance)
                        @if ($loop->index >= 0)
                        <div class="services"><img src="{{ $enhance['service_image'] }}" alt=""></div>
                        <div class="services"><h4>{{ $enhance['service_name']}}</h4></div>
                        <div class="services"><h4>{{ $enhance['service_description']}}</h4></div>
                        <div class="updlt">
                            <button class="upd" onclick="toggleUpdateFormenhance({{ $enhance['id'] }})"><b>UPDATE</b></button>
                            <form action="{{ route('crud.deleteenhance', $enhance['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dlt"><b>DELETE</b></button>
                            </form>
                        </div>
                        <div class="form4all" id="updateFormenhance-{{ $enhance['id'] }}">
                            <form action="{{ route('crud.updateenhance', $enhance['id']) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div style="height: 35px; width:100%; display:flex; flex-direction: row;">
                                    <div style="width: 180px; font-size:larger; display: grid; place-content: center;font-family:Arial, Helvetica, sans-serif;">TITLE</div>
                                    <input type="text" name="name" placeholder="{{ $enhance['service_name'] }}" required 
                                           style="font-size:larger; width:100%; border: 1px solid black;font-family:Arial, Helvetica, sans-serif;">
                                </div>
                                <div class="flbox"></div>
                                <div style="min-height: 130px; width:100%; display:flex; flex-direction: row;">
                                    <div style="width: 165px; font-size:larger; display: grid; place-content: top; padding-left:13px; font-family:Arial, Helvetica, sans-serif;">DESCRIPTION</div>
                                    <textarea name="description" 
                                              style="font-size:larger; width:100%; border: 1px solid black; resize:vertical;font-family:Arial, Helvetica, sans-serif;" 
                                              required >{{ $enhance['service_description'] }}</textarea>
                                </div>
                                <div class="flbox"></div>
                                <div style="height: 130px; width:100%; display:flex; flex-direction: row;">
                                    <div style="width: 105px; font-size:larger; display: grid; place-content: top ;font-family:Arial, Helvetica, sans-serif; padding-left:50px">IMAGE</div>
                                    <div><img src="{{ $enhance['service_image'] }}" alt="" style="height: 130px; object-fit:scale-down"></div>
                                    <input type="file" name="image" required
                                       style="font-family:Arial, Helvetica, sans-serif; font-size:larger; margin-left:20px;">
                                </div>
                                <div style="height: content; width:100%; display:flex; flex-direction: row; place-content: end">
                                    <button type="submit" style="font-family:Arial, Helvetica, sans-serif; height:30px; weight: 50px"><b>SAVE</b></button>
                                    <button type="button" onclick="toggleUpdateFormenhance({{ $enhance['id'] }})" style="font-family:Arial, Helvetica, sans-serif; margin-left:20px; height:30px;"><b>CANCEL</b></button>
                                </div>
                            </form>
                        </div>
                        @endif
                    @endforeach
                </div>

                {{-- <div> 
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
                </div> --}}

                <div class="flbox"></div>
            </div>

            <div id="createformletd" class="createform">
                <h1 style="font-size:x-large;margin: 20px 0px 10px 20px">LETD</h1>
                <div class="flbox"></div>
                <form action="{{ route('crud.createletd') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="height: 35px; width:100%; display:flex; flex-direction: row;">
                        <div style="width: 180px; font-size:larger; display: grid; place-content: center;font-family:Arial, Helvetica, sans-serif;">TITLE</div>
                        <input type="text" name="name" placeholder="Service Title" required 
                               style="font-size:larger; width:100%; border: 1px solid black;font-family:Arial, Helvetica, sans-serif;">
                    </div>
                    <div class="flbox"></div>
                    <div style="min-height: 130px; width:100%; display:flex; flex-direction: row;">
                        <div style="width: 165px; font-size:larger; display: grid; place-content: top; padding-left:13px; font-family:Arial, Helvetica, sans-serif;">DESCRIPTION</div>
                        <textarea name="description" placeholder="Enter Description" 
                                  style="font-size:larger; width:100%; border: 1px solid black; resize:vertical;font-family:Arial, Helvetica, sans-serif;" 
                                  required></textarea>
                    </div>
                    <div class="flbox"></div>
                    <div style="height: 130px; width:100%; display:flex; flex-direction: row;">
                        <div style="width: 105px; font-size:larger; display: grid; place-content: top ;font-family:Arial, Helvetica, sans-serif; padding-left:50px">IMAGE</div>
                        <input type="file" name="image" required
                           style="font-family:Arial, Helvetica, sans-serif; font-size:larger; margin-left:20px;">
                    </div>
                    <div style="height: content; width:100%; display:flex; flex-direction: row; place-content: end">
                        <button type="submit" style="font-family:Arial, Helvetica, sans-serif; height:30px; weight: 50px"><b>SAVE</b></button>
                        <button type="button" onclick="toggleCreateFormletd()" style="font-family:Arial, Helvetica, sans-serif; margin-left:20px; height:30px;"><b>CANCEL</b></button>
                    </div>
                </form>
            </div>

            <div id="createformtht" class="createform">
                <h1 style="font-size:x-large;margin: 20px 0px 10px 20px">THT</h1>
                <div class="flbox"></div>
                <form action="{{ route('crud.createtht') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="height: 35px; width:100%; display:flex; flex-direction: row;">
                        <div style="width: 180px; font-size:larger; display: grid; place-content: center;font-family:Arial, Helvetica, sans-serif;">TITLE</div>
                        <input type="text" name="name" placeholder="Service Title" required 
                               style="font-size:larger; width:100%; border: 1px solid black;font-family:Arial, Helvetica, sans-serif;">
                    </div>
                    <div class="flbox"></div>
                    <div style="min-height: 130px; width:100%; display:flex; flex-direction: row;">
                        <div style="width: 165px; font-size:larger; display: grid; place-content: top; padding-left:13px; font-family:Arial, Helvetica, sans-serif;">DESCRIPTION</div>
                        <textarea name="description" placeholder="Enter Description" 
                                  style="font-size:larger; width:100%; border: 1px solid black; resize:vertical;font-family:Arial, Helvetica, sans-serif;" 
                                  required></textarea>
                    </div>
                    <div class="flbox"></div>
                    <div style="height: 130px; width:100%; display:flex; flex-direction: row;">
                        <div style="width: 105px; font-size:larger; display: grid; place-content: top ;font-family:Arial, Helvetica, sans-serif; padding-left:50px">IMAGE</div>
                        <input type="file" name="image" required
                           style="font-family:Arial, Helvetica, sans-serif; font-size:larger; margin-left:20px;">
                    </div>
                    <div style="height: content; width:100%; display:flex; flex-direction: row; place-content: end">
                        <button type="submit" style="font-family:Arial, Helvetica, sans-serif; height:30px; weight: 50px"><b>SAVE</b></button>
                        <button type="button" onclick="toggleCreateFormtht()" style="font-family:Arial, Helvetica, sans-serif; margin-left:20px; height:30px;"><b>CANCEL</b></button>
                    </div>
                </form>
            </div>

            <div id="createformenhance" class="createform">
                <h1 style="font-size:x-large;margin: 20px 0px 10px 20px">ENHANCE</h1>
                <div class="flbox"></div>
                <form action="{{ route('crud.createenhance') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="height: 35px; width:100%; display:flex; flex-direction: row;">
                        <div style="width: 180px; font-size:larger; display: grid; place-content: center;font-family:Arial, Helvetica, sans-serif;">TITLE</div>
                        <input type="text" name="name" placeholder="Service Title" required 
                               style="font-size:larger; width:100%; border: 1px solid black;font-family:Arial, Helvetica, sans-serif;">
                    </div>
                    <div class="flbox"></div>
                    <div style="min-height: 130px; width:100%; display:flex; flex-direction: row;">
                        <div style="width: 165px; font-size:larger; display: grid; place-content: top; padding-left:13px; font-family:Arial, Helvetica, sans-serif;">DESCRIPTION</div>
                        <textarea name="description" placeholder="Enter Description" 
                                  style="font-size:larger; width:100%; border: 1px solid black; resize:vertical;font-family:Arial, Helvetica, sans-serif;" 
                                  required></textarea>
                    </div>
                    <div class="flbox"></div>
                    <div style="height: 130px; width:100%; display:flex; flex-direction: row;">
                        <div style="width: 105px; font-size:larger; display: grid; place-content: top ;font-family:Arial, Helvetica, sans-serif; padding-left:50px">IMAGE</div>
                        <input type="file" name="image" required
                           style="font-family:Arial, Helvetica, sans-serif; font-size:larger; margin-left:20px;">
                    </div>
                    <div style="height: content; width:100%; display:flex; flex-direction: row; place-content: end">
                        <button type="submit" style="font-family:Arial, Helvetica, sans-serif; height:30px; weight: 50px"><b>SAVE</b></button>
                        <button type="button" onclick="toggleCreateFormenhance()" style="font-family:Arial, Helvetica, sans-serif; margin-left:20px; height:30px;"><b>CANCEL</b></button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            const letd = document.getElementById('contletd');
            const tht = document.getElementById('conttht');
            const enhance = document.getElementById('contenhance');
            const butletd = document.getElementById('butletd');
            const buttht = document.getElementById('buttht');
            const butenhance = document.getElementById('butenhance');
            
            function changeLETD() {
                letd.style.marginLeft = '0px';
                tht.style.marginLeft = '2000px';
                enhance.style.marginLeft = '2000px';
                butletd.style.textDecoration = 'underline';
                buttht.style.textDecoration = 'none';
                butenhance.style.textDecoration = 'none';
            }
            function changeTHT() {
                letd.style.marginLeft = '2000px';
                tht.style.marginLeft = '0px';
                enhance.style.marginLeft = '2000px';
                buttht.style.textDecoration = 'underline';
                butenhance.style.textDecoration = 'none';
                butletd.style.textDecoration = 'none';
            }
            function changeENHANCE() {
                letd.style.marginLeft = '2000px';
                tht.style.marginLeft = '2000px';
                enhance.style.marginLeft = '0px';
                butenhance.style.textDecoration = 'underline';
                buttht.style.textDecoration = 'none';
                butletd.style.textDecoration = 'none';
            }

            function toggleUpdateFormletd(id) {
                const form = document.getElementById(`updateFormletd-${id}`);
            
                if (form.style.display === 'none' || form.style.display === '') {
                    letd.style.marginLeft = '2000px';
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                    letd.style.marginLeft = '0px';
                }
            }

            function toggleUpdateFormtht(id) {
                const form = document.getElementById(`updateFormtht-${id}`);
            
                if (form.style.display === 'none' || form.style.display === '') {
                    tht.style.marginLeft = '2000px';
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                    tht.style.marginLeft = '0px';
                }
            }

            function toggleUpdateFormenhance(id) {
                const form = document.getElementById(`updateFormenhance-${id}`);
            
                if (form.style.display === 'none' || form.style.display === '') {
                    enhance.style.marginLeft = '2000px';
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                    enhance.style.marginLeft = '0px';
                }
            }

            function toggleCreateFormletd() {
                const form = document.getElementById('createformletd');
            
                if (form.style.display === 'none' || form.style.display === '') {
                    letd.style.marginLeft = '2000px';
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                    letd.style.marginLeft = '0px';
                }
            }

            function toggleCreateFormtht() {
                const form = document.getElementById('createformtht');
            
                if (form.style.display === 'none' || form.style.display === '') {
                    tht.style.marginLeft = '2000px';
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                    tht.style.marginLeft = '0px';
                }
            }

            function toggleCreateFormenhance() {
                const form = document.getElementById('createformenhance');
            
                if (form.style.display === 'none' || form.style.display === '') {
                    enhance.style.marginLeft = '2000px';
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                    enhance.style.marginLeft = '0px';
                }
            }

        </script>
    </body>
</html>