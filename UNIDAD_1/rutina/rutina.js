while (estoy_vivo == false && el_despertador_suena == false) {
    duermo();
}  

me_levanto();

if (agua) {
    me_ducho();
    
    if (dentifrico) {
        me_lavo_los_dientes();
    }
}

if (desayuno) {
    yo_desayuno();

    if (dentifrico && agua) {
        me_lavo_los_dientes();
    }
}

salgo_de_casa();
