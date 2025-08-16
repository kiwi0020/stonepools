$(document).ready(function(){
    let rozmiar = $('.wybrany_rozmiar');
    let kolor = $('.wybrany_kolor');

    $('.wariant_rozmiaru').click(function(){
        // rozmiar.text($(this).children('p'));
        let nowyRozmiar = $(this).find('p').text();
        rozmiar.text("Rozmiar: " + nowyRozmiar);
    });

    $('.wariant_koloru').click(function(){
        // rozmiar.text($(this).children('p'));
        let nowyKolor = $(this).find('img').attr('title');
        kolor.text("Kolor: " + nowyKolor);
    });
});