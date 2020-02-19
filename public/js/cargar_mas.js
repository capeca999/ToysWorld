$(function () {
    var pagina=0;

    cargarMas();





    $(document).scroll(detectarScroll());

    function detectarScroll() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 500) {
            $(document).off("scroll");
            cargarMas();
            //$("#pagina").val($("#pagina").val()+1);


        }

    }












    function cargarMas() {


        var searchBar;
        if ($(".buscartoy").val()) {
            searchBar = $(this).val();
        } else {
            searchBar = "";
        }

        $.ajax('http://localhost:8000/api/toys/' + pagina + '/' + searchBar,
            {


                success: function (data) {
                    pagina++;
                    console.log(pagina);

                    data = JSON.parse(data);
                    for (var cont = 0; cont < data.length; cont++) {
                        let divPrincipal = $("<div></div>").attr("class", "col-sm-6 col-md-4 product-item animation-element slide-top-left");
                        let divContainer = $("<div></div>").attr("class", "product-container");
                        divContainer.appendTo(divPrincipal);
                        let divRow1 = $("<div></div>").attr("class", "row");
                        divRow1.appendTo(divContainer);
//      let hrefImg = $("<a> </a>").attr("href", "/img/"+data[cont].id+".jpg" ).text();
                        let divImg = $("<div></div>").attr("class", "col-md-12").appendTo(divRow1);
                        let hrefImg = $("<a> </a>").attr({
                            href: "/producto/" + data[cont].id,
                            class: "product-image"
                        }).appendTo(divImg);
                        $("<img> </img>").attr("src", "/img/" + data[cont].id + ".jpg").appendTo(hrefImg);
                        let divRow2 = $("<div></div>").attr("class", "row").appendTo(divContainer);
                        let divCol2 = $("<div></div>").attr("class", "col-8").appendTo(divRow2);
                        let h2 = $("<h2></h2>").appendTo(divCol2);
                        let nombreProducto = $("<a></a>").attr("href", "/producto/" + data[cont].id).text(data[cont].name).appendTo(h2);
                        let divRow3 = $("<div></div>").attr("class", "row").appendTo(divContainer);
                        let divCol3 = $("<div></div>").attr("class", "col-12").appendTo(divRow3);
                        let pDrescripcion = $("<p></p>").attr("class", "product-description").text(data[cont].description).appendTo(divCol3);
                        let divRow4 = $("<div></div>").attr("class", "row").appendTo(divCol3);
                        let divCol4 = $("<div></div>").attr("class", "col-6").appendTo(divRow4);
                        let buttonComprar = $("<button></button>").attr({
                            class: "btn btn-light",
                            type: "button"
                        }).text("Compra Ahora").appendTo(divCol4);
                        let divCol5 = $("<div></div>").attr("class", "col-6").appendTo(divRow4);
                        let pPrecio = $("<p></p>").attr("class", "product-price").text(data[cont].price).appendTo(divCol5);

                        divPrincipal.appendTo($("#listaProductos"));
                    }
///img/{{$juguete['producto']->id}}.jpg

                    $(document).on("scroll",  detectarScroll);


                }
            });


    }
});

