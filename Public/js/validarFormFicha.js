
// function validarF(){

    let formulario = document.getElementById('form_ficha_tecnica');
    //const formulario = document.getElementById('formulario');
    const inputs = document.querySelectorAll('#form_ficha_tecnica input');

    const expresiones = {
        //comentario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
        // nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
        //password: /^.{4,12}$/, // 4 a 12 digitos.
        correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
        telefono: /^\d{10,14}$/ // 7 a 14 numeros.
    }

    const campos = {
        //comentario: false,
        // nombre: false,
        //password: false,
        correo: false,
        telefono: false
    }

    const validarFormulario = (e) => {
        switch (e.target.name) {
            // case "comentario":
            //     validarCampo(expresiones.comentario, e.target, 'comentario');
            // break;
            // case "nombre":
            //     validarCampo(expresiones.nombre, e.target, 'nombre');
            // break;
            // case "password":
            //     validarCampo(expresiones.password, e.target, 'password');
            //     validarPassword2();
            // break;
            // case "password2":
            //     validarPassword2();
            // break;
            case "correo":
                validarCampo(expresiones.correo, e.target, 'correo');
            break;
            case "telefono":
                validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
        }
    }

    const validarCampo = (expresion, input, campo) => {
        if(expresion.test(input.value)){
            document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
            document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
            document.querySelector(`#grupo__${campo} i`).classList.add('ion-md-checkmark-circle');
            document.querySelector(`#grupo__${campo} i`).classList.remove('ion-ios-close-circle');
            document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
            campos[campo] = true;
        } else {
            document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
            document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
            document.querySelector(`#grupo__${campo} i`).classList.add('ion-ios-close-circle');
            document.querySelector(`#grupo__${campo} i`).classList.remove('ion-md-checkmark-circle');
            document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
            campos[campo] = false;
        }
    }

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    });



    formulario.addEventListener('submit', e=>{
        e.preventDefault();

        //VALIDAMOS SI SE PRECIONO EL CAPTCHA
        /*var response = grecaptcha.getResponse();*/
        /*
        if(response.length == 0){
            //NO VERIFICADO
            document.getElementById('formulario__mensaje-captcha').classList.add('formulario__mensaje-activo');
            setTimeout(() => {
                document.getElementById('formulario__mensaje-captcha').classList.remove('formulario__mensaje-activo');
            }, 5000);
        } else {
            */
            //VERIFICADO
            // const terminos = document.getElementById('terminos');
            if(campos.correo && campos.telefono){
                console.log('Formulario exitoso');

                document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
                setTimeout(() => {
                    document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
                }, 5000);

                document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
                    icono.classList.remove('formulario__grupo-correcto');
                });

                let removerClase = document.querySelectorAll('.remover');

                
                if(removerClase.length > 0){
                    for(let i = 0; i < removerClase.length; i++){
                        removerClase[i].parentNode.removeChild(removerClase[i]);
                    }
                }

                
            
                /*
                //ENVIAMOS LOS DATOS A PHP
                let datos = new FormData(formulario);
                //creamos un objeto
                let peticion = {
                    method:'POST',
                    body:datos,
                }
                fetch('Public/php/formulario.php', peticion)
                .then(respuesta => respuesta.json())
                .then(respuesta =>{
            
                    for(const resultado in respuesta){
                        let padre = document.querySelector('#'+resultado);
                        padre.classList.add('resaltar');
                        let txt = document.createElement('p');
                        txt.classList.add('text-danger');
                        txt.classList.add('remover');
                        txt.innerHTML = respuesta[resultado];
                        document.querySelector('#'+resultado).insertAdjacentElement('afterend', txt);
                    }
            
                }).catch(error => console.log('Error', error));
                //FIN DATOS PHP
                formulario.reset();
                // return true;
                */
                // formulario.reset();

                download();
               
                
            
            } else {
                console.log('Formulario fallido');
                document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
                setTimeout(() => {
                    document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
                }, 5000);
            }
            //alert("Captcha verificado");
        /*}*/
    });
    console.log('Estoy en el formulario');

    //FUNCIÓN PARA DESCARGAR
    function download(){
        
        let Fosfoplex_E = "Public/pdf/Antimicrobiano-Fosfoplex-E10.pdf";

        // ANTIBIÓTICOS Y QUIMIOTERÁPICOS
        if(document.URL.includes("Fosfoplex-E-10.php")){
            downloadFile('Public/pdf/Antimicrobiano-Fosfoplex-E10.pdf');
        }
        if(document.URL.includes("Gentaplex-10.php")){
            downloadFile('Public/pdf/Antibiotico-Gentaplex10.pdf');
        }
        if(document.URL.includes("Ceftioplex-LPU.php")){
            downloadFile('Public/pdf/Antibiotico-Ceftioplex-LPU.pdf');
        }
        if(document.URL.includes("Florfeniplex-D-30.php")){
            downloadFile('Public/pdf/Antibiotico-FlorfeniplexD30.pdf');
        }
        if(document.URL.includes("Kanamicina-MDKR-10.php")){
            downloadFile('Public/pdf/Kanamicina-MDK-10.pdf');
        }
        if(document.URL.includes("Betaplex.php")){
            downloadFile('Public/pdf/Antibiotico-BetaplexMDKR.pdf');
        }
        if(document.URL.includes("Sulfaplex-Inyectable.php")){
            downloadFile('Public/pdf/Antibiotico-Sulfaplex-Inyectable.pdf');
        }
        if(document.URL.includes("Tilosina-200-MDKR.php")){
            downloadFile('Public/pdf/TILOSINA-200-MDKR.pdf');
        }
        if(document.URL.includes("Pulmoplex-Inyectable.php")){
            downloadFile('Public/pdf/PULMOPLEX-INYECTABLE.pdf');
        }
        if(document.URL.includes("Oxiplex-L-A-20.php")){
            downloadFile('Public/pdf/OXIPLEX-LA-20.pdf');
        }
        if(document.URL.includes("Oxiplex-5.php")){
            downloadFile('Public/pdf/Antibiotico-Oxiplex-5.pdf');
        }
        if(document.URL.includes("Floxaplex-L-A-15.php")){
            downloadFile('Public/pdf/FLOXAPLEX-LA-15.pdf');
        }
        if(document.URL.includes("Floxaplex-Inyectable-10.php")){
            downloadFile('Public/pdf/FLOXAPLEX-INYECTABLE-10.pdf');
        }
        if(document.URL.includes("Ceftioplex-Suspension.php")){
            downloadFile('Public/pdf/CEFTIOPLEX-SUSP.pdf');
        }
        if(document.URL.includes("Florfeniplex-F.php")){
            downloadFile('Public/pdf/Antibiotico-Florfeniplex-F.pdf');
        }
        if(document.URL.includes("Florfeniplex-DB.php")){
            downloadFile('Public/pdf/Antibiotico-Florfeniplex-DB.pdf');
        }
        if(document.URL.includes("GT-10-20.php")){
            downloadFile('Public/pdf/Antibiotico-GT-10-20.pdf');
        }
        if(document.URL.includes("Peni-Estreptoplex.php")){
            downloadFile('Public/pdf/Antibiotico-Peni-Estreptoplex.pdf');
        }
        if(document.URL.includes("TGN-Mediker.php")){
            downloadFile('Public/pdf/Antibiotico-TGN-Mediker.pdf');
        }
        if(document.URL.includes("Pulmoplex-M.php")){
            downloadFile('Public/pdf/Antibiotico-Pulmoplex-M.pdf');
        }
        // ANTIINFLAMATORIOS
        if(document.URL.includes("Dexaplex-MDKR.php")){
            downloadFile('Public/pdf/Dexaplex.pdf');
        }
        if(document.URL.includes("Fluniplex-MDKR.php")){
            downloadFile('Public/pdf/FLUNIPLEX-MDKR.pdf');
        }
        if(document.URL.includes("Piroplex.php")){
            downloadFile('Public/pdf/Antiinflamatorio-Piroplex.pdf');
        }
        // DESINFECTANTES
        if(document.URL.includes("Glutakuat-Sanitizer.php")){
            downloadFile('Public/pdf/Glutakuat-sanitizer.pdf');
        }
        if(document.URL.includes("VIR-MDKR.php")){
            downloadFile('Public/pdf/Vir-MDKR.pdf');
        }
        if(document.URL.includes("Micro-Bios-MDKR.php")){
            downloadFile('Public/pdf/desinfectante-Micro-Bios.pdf');
        }
        // DESPARASITANTES ORALES
        if(document.URL.includes("EQ-Voral.php")){
            downloadFile('Public/pdf/Desparasitante-oral-EQ-VORAL.pdf');
        }
        // DESPARASITANTES SOLUBLES
        if(document.URL.includes("Inversol-Soluble.php")){
            downloadFile('Public/pdf/Desparasitante-Soluble-Inversol-soluble-32.pdf');
        }
        if(document.URL.includes("Inversol-Soluble-1.php")){
            downloadFile('Public/pdf/Desparasitante-Soluble-Inversol-soluble-1-1.pdf');
        }
        if(document.URL.includes("Cocciplex.php")){
            downloadFile('Public/pdf/Desparasitante-Soluble-Cocciplex-25.pdf');
        }
        if(document.URL.includes("Fiproline.php")){
            downloadFile('Public/pdf/Fiproline.pdf');
        }
        // ELECTROLITOS Y VITAMÍNICOS
        if(document.URL.includes("Vitaforce-C-MDKR.php")){
            downloadFile('Public/pdf/Electrolitos-Vitaforce-C-MDKR.pdf');
        }
        if(document.URL.includes("Electrolitos-MDKR.php")){
            downloadFile('Public/pdf/Electrolitos-MDKR.pdf');
        }
        if(document.URL.includes("Vitaforce-ADE.php")){
            downloadFile('Public/pdf/Electrolitos-Vitaforce-ADE.pdf');
        }
        if(document.URL.includes("Rehidra-Milk.php")){
            downloadFile('Public/pdf/Electrolitos-Rehidramilk.pdf');
        }
        if(document.URL.includes("Hidra-Vit.php")){
            downloadFile('Public/pdf/Electrolitos-Hidra-Vit.pdf');
        }
        // HORMONALES
        if(document.URL.includes("Ovoplex.php")){
            downloadFile('Public/pdf/Hormonales-Ovoplex.pdf');
        }
        if(document.URL.includes("Oxitoplex.php")){
            downloadFile('Public/pdf/Hormonales-Oxitoplex.pdf');
        }
        if(document.URL.includes("Prostaplex-D.php")){
            downloadFile('Public/pdf/PROSTAPLEX-D.pdf');
        }
        if(document.URL.includes("Fertiplex.php")){
            downloadFile('Public/pdf/Hormonales-Fertiplex.pdf');
        }
        // INTRAMAMARIOS
        if(document.URL.includes("Mastiplex-Bio.php")){
            downloadFile('Public/pdf/MASTIPLEX-BIO.pdf');
        }
        if(document.URL.includes("Mastiplex-2E.php")){
            downloadFile('Public/pdf/MASTIPLEX-2E.pdf');
        }
        if(document.URL.includes("Mastiplex-TS.php")){
            downloadFile('Public/pdf/MASTIPLEX-TS.pdf');
        }
        if(document.URL.includes("Mastiplex-Dry.php")){
            downloadFile('Public/pdf/Intramamarios-Mastiplex-Dry.pdf');
        }
        if(document.URL.includes("Mastiplex-Plus.php")){
            downloadFile('Public/pdf/MASTIPLEX-PLUS.pdf');
        }
        if(document.URL.includes("Mastiplex-Clox-Dry.php")){
            downloadFile('Public/pdf/Intramamarios-Mastiplex-Clox-Dry.pdf');
        }
        // OTC
        if(document.URL.includes("Calcioplex.php")){
            downloadFile('Public/pdf/OTC-calcioplex.pdf');
        }
        if(document.URL.includes("Protekto-Vac.php")){
            downloadFile('Public/pdf/PROTEKTO-VAC.pdf');
        }
        if(document.URL.includes("Spray-Vaccine-Stabilizer.php")){
            downloadFile('Public/pdf/SPRAY-VACCINE-STABILIZER.pdf');
        }
        if(document.URL.includes("Birds-Far.php")){
            downloadFile('Public/pdf/Repelente-BirdsFar.pdf');
        }
        // PREMEZCLAS
        if(document.URL.includes("Neumoplex-Plus-PX.php")){
            downloadFile('Public/pdf/Premezcla-Neumoplex-Plus-PX.pdf');
        }
        if(document.URL.includes("Naturex-CTC-TML-PX.php")){
            downloadFile('Public/pdf/Premezcla-Naturex-CTC+TML-PX.pdf');
        }
        if(document.URL.includes("Florfenicol-PX.php")){
            downloadFile('Public/pdf/FLORFENICOL-PX2.pdf');
        }
        if(document.URL.includes("Oxitetra-Premix.php")){
            downloadFile('Public/pdf/OXITETRA-PREMIX-50.pdf');
        }
        if(document.URL.includes("Naturex-Bio.php")){
            downloadFile('Public/pdf/Premezcla-Naturex-Bio-20.pdf');
        }
        if(document.URL.includes("Oxitetra-Premix-20.php")){
            downloadFile('Public/pdf/Oxitetra-20-Premix.pdf');
        }
        // PRODUCTOS SOLUBLES
        if(document.URL.includes("neumoplex-plus-mdkr.php")){
            downloadFile('Public/pdf/Productos-Solubles-Neumoplex-Plus.pdf');
        }
        if(document.URL.includes("Bromeg-MDKR.php")){
            downloadFile('Public/pdf/Bromeg-MDKR-Soluble.pdf');
        }
        if(document.URL.includes("Asprin-MDKR.php")){
            downloadFile('Public/pdf/ASPRIN-MDKR.pdf');
        }
        if(document.URL.includes("Doxiplex-Soluble.php")){
            downloadFile('Public/pdf/DOXIPLEX-SOLUBLE-20');
        }
        if(document.URL.includes("Pulmoplex-Soluble.php")){
            downloadFile('Public/pdf/PULMOPLEX-SOLUBLE-25.pdf');
        }
        if(document.URL.includes("Fosfoplex-Soluble.php")){
            downloadFile('Public/pdf/FOSFOPLEX-SOLUBLE-10.pdf');
        }
        if(document.URL.includes("Eri-C-Soluble.php")){
            downloadFile('Public/pdf/ERI-C-SOLUBLE.pdf');
        }
        if(document.URL.includes("Floxaplex-Soluble.php")){
            downloadFile('Public/pdf/FLOXAPLEX-20-SOLUBLE.pdf');
        }
        // SUEROS Y SOLUCIONES
        if(document.URL.includes("isosol-mdkr.php")){
            downloadFile('Public/pdf/ISOSOL-MDKR.pdf');
        }
        if(document.URL.includes("agua-esteril-mdkr.php")){
            downloadFile('Public/pdf/Agua-Esteril-MDKR.pdf');
        }
        if(document.URL.includes("soldex-mdkr.php")){
            downloadFile('Public/pdf/SOLDEX-MDKR-50.pdf');
        }
        if(document.URL.includes("buffer-mdkr.php")){
            downloadFile('Public/pdf/Sueros-Buffer.pdf');
        }
        if(document.URL.includes("hartmann-mdkr.php")){
            downloadFile('Public/pdf/Sueros-Hartmann.pdf');
        }
        if(document.URL.includes("solucion-hipertonica.php")){
            downloadFile('Public/pdf/Sueros-Hipertonica.pdf');
        }

        
        

        function downloadFile(filePath){
            var link=document.createElement('a');
            link.href = filePath;
            link.download = filePath.substr(filePath.lastIndexOf('/') + 1);
            link.click();
        }

    }