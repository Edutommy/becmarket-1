new Vue({
    el:'#app',
    data:{
        url: "http://localhost/BECMarket/",
        
        //datos negocio
        nombreNegocio:'',
        tipoNegocio:'',
        rutEmpresa:'',
        direccionNegocio:'',

        //datos vendedor
        rut:'',
        nombre:'',
        apellidos:'',
        celular:'',
        email:'',
        password:'',

    },
    methods:{
        guardar: async function(){
            var form = new FormData();
            var fecha = new Date();
            var creacion = fecha.getFullYear() + '-' + (fecha.getMonth()+1) + '-' + fecha.getDate();
            //negocio
            form.append("rut_negocio",this.rutEmpresa);
            form.append("nombreNegocio",this.nombreNegocio);
            form.append("direccionNegocio",this.direccionNegocio);
            form.append("tipoNegocio",this.tipoNegocio);
            form.append("vendedorfk",this.rut);

            //vendedor
            form.append("codigo_usuario",this.rut);
            form.append("email",this.email);
            form.append("nombre",this.nombre);
            form.append("apellidos",this.apellidos);
            form.append("contrasena",this.password);
            form.append("telefono",this.celular);
            form.append("fechaCreacion",creacion);
            try{
                var recurso = 'controladores/NuevoVendedor.php';
                const res = await fetch(this.url+recurso,{
                    method:"post",
                    body:form,
                });
                //const resp = await res.json();
                //console.log(resp);
                //limpiar campos
                this.nombreNegocio='';
                this.tipoNegocio='';
                this.rutEmpresa='';
                this.direccionNegocio='';
                this.rut='';
                this.nombre='';
                this.apellidos='';
                this.celular='';
                this.email='';
                this.password='';
            }catch(error){
                console.log(error);
            }
        }
    },
    created(){

    }
});