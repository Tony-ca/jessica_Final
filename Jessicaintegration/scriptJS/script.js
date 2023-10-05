
// REALISATION

function base_rea() {
    let h3Elements = document.querySelectorAll('.h3Realisation, .bestImg');
    h3Elements.forEach(h3Element => {
        h3Element.style.opacity= '1';
    });
    let h3Elements1 = document.querySelectorAll('.h3Realisation1, .best1Img');
    h3Elements1.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements2 = document.querySelectorAll('.h3Realisation2, .best2Img');
    h3Elements2.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements3 = document.querySelectorAll('.h3Realisation3, .best3Img');
    h3Elements3.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements4 = document.querySelectorAll('.h3Realisation4, .best4Img');
    h3Elements4.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    
    
    let h3Elements5 = document.querySelectorAll('#modal_pos1, .best1ImgTel');
    h3Elements5.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements6 = document.querySelectorAll('#modal_pos2, .best2ImgTel');
    h3Elements6.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements7 = document.querySelectorAll('#modal_pos3, .best3ImgTel');
    h3Elements7.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Element8 = document.querySelectorAll('#modal_pos4, .best4ImgTel');
    h3Element8.forEach(h3Element => {
        h3Element.style.display= 'none';
    });

    
    let h3Element9 = document.querySelectorAll('.sousTitre1');
    h3Element9.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element10 = document.querySelectorAll('.sousTitre2');
    h3Element10.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element11 = document.querySelectorAll('.sousTitre3');
    h3Element11.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element12 = document.querySelectorAll('.sousTitre4');
    h3Element12.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });

    let h3ElementTabfleche = document.querySelectorAll('.FlecheTab');
    h3ElementTabfleche.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3ElementTab1 = document.querySelectorAll('.sousTitreTab1');
    h3ElementTab1.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab2 = document.querySelectorAll('.sousTitreTab2');
    h3ElementTab2.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab3 = document.querySelectorAll('.sousTitreTab3');
    h3ElementTab3.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab4 = document.querySelectorAll('.sousTitreTab4');
    h3ElementTab4.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });

    let h3Elements9 = document.querySelectorAll('.sousTitreTel1');
    h3Elements9.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements10 = document.querySelectorAll('.sousTitreTel2');
    h3Elements10.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements11 = document.querySelectorAll('.sousTitreTel3');
    h3Elements11.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements12 = document.querySelectorAll('.sousTitreTel4');
    h3Elements12.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
}


function showH3_1() {
    let h3Elements = document.querySelectorAll('.h3Realisation, .bestImg');
    h3Elements.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements1 = document.querySelectorAll('.h3Realisation1, .best1Img');
    h3Elements1.forEach(h3Element => {
        h3Element.style.opacity= '1';
    });
    let h3Elements2 = document.querySelectorAll('.h3Realisation2, .best2Img');
    h3Elements2.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements3 = document.querySelectorAll('.h3Realisation3, .best3Img');
    h3Elements3.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements4 = document.querySelectorAll('.h3Realisation4, .best4Img');
    h3Elements4.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });


    let h3Elements5 = document.querySelectorAll('#modal_pos1');
    h3Elements5.forEach(h3Element => {
        h3Element.style.display= 'block';
    });
    let h3Elements6 = document.querySelectorAll('#modal_pos2');
    h3Elements6.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements7 = document.querySelectorAll('#modal_pos3');
    h3Elements7.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Element8 = document.querySelectorAll('#modal_pos4');
    h3Element8.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
   
    
    let h3Element9 = document.querySelectorAll('.sousTitre1');
    h3Element9.forEach(h3Element => {
        h3Element.style.transform= 'translateX(80px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#C2A775';
    });
    let h3Element10 = document.querySelectorAll('.sousTitre2');
    h3Element10.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element11 = document.querySelectorAll('.sousTitre3');
    h3Element11.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element12 = document.querySelectorAll('.sousTitre4');
    h3Element12.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });


    let h3ElementTab1 = document.querySelectorAll('.sousTitreTab1, .FlecheTab');
    h3ElementTab1.forEach(h3Element => {
        h3Element.style.transform= 'translatey(15px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#C2A775';
    });
    let h3ElementTab2 = document.querySelectorAll('.sousTitreTab2');
    h3ElementTab2.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab3 = document.querySelectorAll('.sousTitreTab3');
    h3ElementTab3.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab4 = document.querySelectorAll('.sousTitreTab4');
    h3ElementTab4.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
}


function showH3_2() {
    let h3Elements = document.querySelectorAll('.h3Realisation, .bestImg');
    h3Elements.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements1 = document.querySelectorAll('.h3Realisation1, .best1Img');
    h3Elements1.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements2 = document.querySelectorAll('.h3Realisation2, .best2Img');
    h3Elements2.forEach(h3Element => {
        h3Element.style.opacity= '1';
    });
    let h3Elements3 = document.querySelectorAll('.h3Realisation3, .best3Img');
    h3Elements3.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements4 = document.querySelectorAll('.h3Realisation4, .best4Img');
    h3Elements4.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });

    
    let h3Elements5 = document.querySelectorAll('#modal_pos1');
    h3Elements5.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements6 = document.querySelectorAll('#modal_pos2');
    h3Elements6.forEach(h3Element => {
        h3Element.style.display= 'block';
    });
    let h3Elements7 = document.querySelectorAll('#modal_pos3');
    h3Elements7.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements8 = document.querySelectorAll('#modal_pos4');
    h3Elements8.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    
    
    let h3Element9 = document.querySelectorAll('.sousTitre1');
    h3Element9.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element10 = document.querySelectorAll('.sousTitre2');
    h3Element10.forEach(h3Element => {
        h3Element.style.transform= 'translateX(80px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#C2A775';
    });
    let h3Element11 = document.querySelectorAll('.sousTitre3');
    h3Element11.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element12 = document.querySelectorAll('.sousTitre4');
    h3Element12.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });

    
    let h3ElementTab1 = document.querySelectorAll('.sousTitreTab1');
    h3ElementTab1.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab2 = document.querySelectorAll('.sousTitreTab2, .FlecheTab');
    h3ElementTab2.forEach(h3Element => {
        h3Element.style.transform= 'translatey(15px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#C2A775';
    });
    let h3ElementTab3 = document.querySelectorAll('.sousTitreTab3');
    h3ElementTab3.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab4 = document.querySelectorAll('.sousTitreTab4');
    h3ElementTab4.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
}


function showH3_3() {
    let h3Elements = document.querySelectorAll('.h3Realisation, .bestImg');
    h3Elements.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements1 = document.querySelectorAll('.h3Realisation1, .best1Img');
    h3Elements1.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements2 = document.querySelectorAll('.h3Realisation2, .best2Img');
    h3Elements2.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements3 = document.querySelectorAll('.h3Realisation3, .best3Img');
    h3Elements3.forEach(h3Element => {
        h3Element.style.opacity= '1';
    });
    let h3Elements4 = document.querySelectorAll('.h3Realisation4, .best4Img');
    h3Elements4.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });

    
    let h3Elements5 = document.querySelectorAll('#modal_pos1');
    h3Elements5.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements6 = document.querySelectorAll('#modal_pos2');
    h3Elements6.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements7 = document.querySelectorAll('#modal_pos3');
    h3Elements7.forEach(h3Element => {
        h3Element.style.display= 'block';
    });
    let h3Elements8 = document.querySelectorAll('#modal_pos4');
    h3Elements8.forEach(h3Element => {
        h3Element.style.display= 'none';
    });

    
    let h3Element9 = document.querySelectorAll('.sousTitre1');
    h3Element9.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element10 = document.querySelectorAll('.sousTitre2');
    h3Element10.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element11 = document.querySelectorAll('.sousTitre3');
    h3Element11.forEach(h3Element => {
        h3Element.style.transform= 'translateX(80px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#C2A775';
    });
    let h3Element12 = document.querySelectorAll('.sousTitre4');
    h3Element12.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });

    let h3ElementTab1 = document.querySelectorAll('.sousTitreTab1');
    h3ElementTab1.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab2 = document.querySelectorAll('.sousTitreTab2');
    h3ElementTab2.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab3 = document.querySelectorAll('.sousTitreTab3, .FlecheTab');
    h3ElementTab3.forEach(h3Element => {
        h3Element.style.transform= 'translatey(15px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#C2A775';
    });
    let h3ElementTab4 = document.querySelectorAll('.sousTitreTab4');
    h3ElementTab4.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
}


function showH3_4() {
    let h3Elements = document.querySelectorAll('.h3Realisation, .bestImg');
    h3Elements.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements1 = document.querySelectorAll('.h3Realisation1, .best1Img');
    h3Elements1.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements2 = document.querySelectorAll('.h3Realisation2, .best2Img');
    h3Elements2.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements3 = document.querySelectorAll('.h3Realisation3, .best3Img');
    h3Elements3.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements4 = document.querySelectorAll('.h3Realisation4, .best4Img');
    h3Elements4.forEach(h3Element => {
        h3Element.style.opacity= '4';
    });

    
    let h3Elements5 = document.querySelectorAll('#modal_pos1');
    h3Elements5.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements6 = document.querySelectorAll('#modal_pos2');
    h3Elements6.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements7 = document.querySelectorAll('#modal_pos3');
    h3Elements7.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements8 = document.querySelectorAll('#modal_pos4');
    h3Elements8.forEach(h3Element => {
        h3Element.style.display= 'block';
    });

    
    let h3Element9 = document.querySelectorAll('.sousTitre1');
    h3Element9.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element10 = document.querySelectorAll('.sousTitre2');
    h3Element10.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element11 = document.querySelectorAll('.sousTitre3');
    h3Element11.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#ffffff';
    });
    let h3Element12 = document.querySelectorAll('.sousTitre4');
    h3Element12.forEach(h3Element => {
        h3Element.style.transform= 'translateX(80px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#C2A775';
    });


    let h3ElementTab1 = document.querySelectorAll('.sousTitreTab1');
    h3ElementTab1.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab2 = document.querySelectorAll('.sousTitreTab2');
    h3ElementTab2.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab3 = document.querySelectorAll('.sousTitreTab3');
    h3ElementTab3.forEach(h3Element => {
        h3Element.style.transform= 'translateX(0px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#346077';
    });
    let h3ElementTab4 = document.querySelectorAll('.sousTitreTab4, .FlecheTab');
    h3ElementTab4.forEach(h3Element => {
        h3Element.style.transform= 'translatey(15px)';
        h3Element.style.transition= '0.7s';
        h3Element.style.color= '#C2A775';
    });
}


function showPhone_1() {
    let h3Elements = document.querySelectorAll('.best1ImgTel, #modal_pos1');
    h3Elements.forEach(h3Element => {
        h3Element.style.display= 'block';
    });
    let h3Elements1 = document.querySelectorAll('.best2ImgTel, #modal_pos2');
    h3Elements1.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements2 = document.querySelectorAll('.best3ImgTel, #modal_pos3');
    h3Elements2.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements3 = document.querySelectorAll('.best4ImgTel, #modal_pos4');
    h3Elements3.forEach(h3Element => {
        h3Element.style.display= 'none';
    });

    let h3Elements4 = document.querySelectorAll('.h3Realisation');
    h3Elements4.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements5 = document.querySelectorAll('.h3Realisation1');
    h3Elements5.forEach(h3Element => {
        h3Element.style.opacity= '1';
    });
    let h3Elements6 = document.querySelectorAll('.h3Realisation2');
    h3Elements6.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements7 = document.querySelectorAll('.h3Realisation3');
    h3Elements7.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements8 = document.querySelectorAll('.h3Realisation4');
    h3Elements8.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });

    let h3Elements9 = document.querySelectorAll('.sousTitreTel1');
    h3Elements9.forEach(h3Element => {
        h3Element.style.color= '#C2A775';
    });
    let h3Elements10 = document.querySelectorAll('.sousTitreTel2');
    h3Elements10.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements11 = document.querySelectorAll('.sousTitreTel3');
    h3Elements11.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements12 = document.querySelectorAll('.sousTitreTel4');
    h3Elements12.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
}


function showPhone_2() {
    let h3Elements = document.querySelectorAll('.best1ImgTel, #modal_pos1');
    h3Elements.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements1 = document.querySelectorAll('.best2ImgTel, #modal_pos2');
    h3Elements1.forEach(h3Element => {
        h3Element.style.display= 'block';
    });
    let h3Elements2 = document.querySelectorAll('.best3ImgTel, #modal_pos3');
    h3Elements2.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements3 = document.querySelectorAll('.best4ImgTel, #modal_pos4');
    h3Elements3.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    
    let h3Elements4 = document.querySelectorAll('.h3Realisation');
    h3Elements4.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements5 = document.querySelectorAll('.h3Realisation1');
    h3Elements5.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements6 = document.querySelectorAll('.h3Realisation2');
    h3Elements6.forEach(h3Element => {
        h3Element.style.opacity= '1';
    });
    let h3Elements7 = document.querySelectorAll('.h3Realisation3');
    h3Elements7.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements8 = document.querySelectorAll('.h3Realisation4');
    h3Elements8.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });

    let h3Elements9 = document.querySelectorAll('.sousTitreTel1');
    h3Elements9.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements10 = document.querySelectorAll('.sousTitreTel2');
    h3Elements10.forEach(h3Element => {
        h3Element.style.color= '#C2A775';
    });
    let h3Elements11 = document.querySelectorAll('.sousTitreTel3');
    h3Elements11.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements12 = document.querySelectorAll('.sousTitreTel4');
    h3Elements12.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
}


function showPhone_3() {
    let h3Elements = document.querySelectorAll('.best1ImgTel, #modal_pos1');
    h3Elements.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements1 = document.querySelectorAll('.best2ImgTel, #modal_pos2');
    h3Elements1.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements2 = document.querySelectorAll('.best3ImgTel, #modal_pos3');
    h3Elements2.forEach(h3Element => {
        h3Element.style.display= 'block';
    });
    let h3Elements3 = document.querySelectorAll('.best4ImgTel, #modal_pos4');
    h3Elements3.forEach(h3Element => {
        h3Element.style.display= 'none';
    }); 
    
    let h3Elements4 = document.querySelectorAll('.h3Realisation');
    h3Elements4.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements5 = document.querySelectorAll('.h3Realisation1');
    h3Elements5.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements6 = document.querySelectorAll('.h3Realisation2');
    h3Elements6.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements7 = document.querySelectorAll('.h3Realisation3');
    h3Elements7.forEach(h3Element => {
        h3Element.style.opacity= '1';
    });
    let h3Elements8 = document.querySelectorAll('.h3Realisation4');
    h3Elements8.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });

    let h3Elements9 = document.querySelectorAll('.sousTitreTel1');
    h3Elements9.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements10 = document.querySelectorAll('.sousTitreTel2');
    h3Elements10.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements11 = document.querySelectorAll('.sousTitreTel3');
    h3Elements11.forEach(h3Element => {
        h3Element.style.color= '#C2A775';
    });
    let h3Elements12 = document.querySelectorAll('.sousTitreTel4');
    h3Elements12.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
}


function showPhone_4() {
    let h3Elements = document.querySelectorAll('.best1ImgTel, #modal_pos1');
    h3Elements.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements1 = document.querySelectorAll('.best2ImgTel, #modal_pos2');
    h3Elements1.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements2 = document.querySelectorAll('.best3ImgTel, #modal_pos3');
    h3Elements2.forEach(h3Element => {
        h3Element.style.display= 'none';
    });
    let h3Elements3 = document.querySelectorAll('.best4ImgTel, #modal_pos4');
    h3Elements3.forEach(h3Element => {
        h3Element.style.display= 'block';
    });
    
    let h3Elements4 = document.querySelectorAll('.h3Realisation');
    h3Elements4.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements5 = document.querySelectorAll('.h3Realisation1');
    h3Elements5.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements6 = document.querySelectorAll('.h3Realisation2');
    h3Elements6.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements7 = document.querySelectorAll('.h3Realisation3');
    h3Elements7.forEach(h3Element => {
        h3Element.style.opacity= '0';
    });
    let h3Elements8 = document.querySelectorAll('.h3Realisation4');
    h3Elements8.forEach(h3Element => {
        h3Element.style.opacity= '1';
    });

    let h3Elements9 = document.querySelectorAll('.sousTitreTel1');
    h3Elements9.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements10 = document.querySelectorAll('.sousTitreTel2');
    h3Elements10.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements11 = document.querySelectorAll('.sousTitreTel3');
    h3Elements11.forEach(h3Element => {
        h3Element.style.color= '#ffffff';
    });
    let h3Elements12 = document.querySelectorAll('.sousTitreTel4');
    h3Elements12.forEach(h3Element => {
        h3Element.style.color= '#C2A775';
    });
}





// NAVBAR MENU BURGER 
const toggleBtn = document.querySelector('.toggle_btn')
const toggleBtnIcon = document.querySelector('.toggle_btn')
const dropDownMenu = document.querySelector('.dropdown_menu')

toggleBtn.onclick = function() {
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

}

const toggleBtnAccueil = document.querySelector('.menuAccueil')

    toggleBtnAccueil.onclick = function() {
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')
            }
const toggleBtnQui = document.querySelector('.menuQui')

    toggleBtnQui.onclick = function() {
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')
}
const toggleBtnRea = document.querySelector('.menuRea')

    toggleBtnRea.onclick = function() {
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')
}
const toggleBtnContact = document.querySelector('.menuContact')

    toggleBtnContact.onclick = function() {
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')
}

