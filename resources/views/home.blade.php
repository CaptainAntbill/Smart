 <html style="background-color:#1d2533" lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <title>Document</title>
 </head>

 <body><br>
     <div class="container">
         <div class="notification" style="background-color:#1d2533">
             <div class="hero is-success is-bold">
                 <div class="hero-body">
                     <div class="container">
                         <h1 class="title is-1">Smart</h1>
                     </div>
                 </div>
             </div>
         </div>
     </div> <br>
     <div class="container">
         <div class="notification">
             <h1 class="title is-2" style="font-weight: 300">
                 Seleccione una opcion!
             </h1>
             <div class="tile is-ancestor">
                 <div class="tile is-vertical">
                     <div class="tile">
                         <div class="tile is-parent is-vertical">
                             <span class="tile is-child is-link notification has-text-centered" onclick="location.href='/phone'">
                                 <p class="title" style="margin: 7%">Smartphones</p>
                             </span>

                             <span class="tile is-child notification is-link has-text-centered" onclick="location.href='/accessory'">
                                 <p class="title" style="margin: 10%">Accesorios</p>
                             </span>
                         </div>
                         <div class="tile is-parent is-vertical">
                             <span class="tile is-child notification is-link has-text-centered" onclick="location.href='/brand'">
                                 <p class="title" style="margin: 10%">Marcas</p>
                             </span>

                             <span class="tile is-child notification has-text-centered is-link" onclick="location.href='/spectrum'">
                                 <p class="title" style="margin: 10%">Gamas</p>
                             </span>
                         </div>
                         <div class="tile is-parent is-vertical">

                             <span class="tile is-child notification is-link has-text-centered" onclick="location.href='/purchase_accessory'">
                                 <p class="title" style="margin: 5%">Registro Accesorios</p>
                             </span>

                             <span class="tile is-child notification has-text-centered is-link" onclick="location.href='/purchase'">
                                 <p class="title" style="margin: 5%">Registro Smartphones</p>
                             </span>
                         </div>
                         <div class="tile is-parent is-vertical">

                             <span class="tile is-child notification is-link has-text-centered" onclick="location.href='/provider'">
                                 <p class="title" style="margin: 8%">Proveedores</p>
                             </span>
                             <span class="tile is-child notification has-text-centered is-link" onclick="location.href='/client'">
                                 <p class="title" style="margin: 10%">Clientes</p>
                             </span>
                         </div>
                     </div>
                 </div>
             </div>
 </body>

 </html>