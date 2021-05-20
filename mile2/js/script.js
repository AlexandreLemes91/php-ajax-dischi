const app = new Vue(
    {
        el: "#app",

        data: {
            albums: [],
        },

        created(){
            axios.get('http://localhost/php-intro/es4%20PHP%20Dischi/mile2/json/database.php')
            .then( resp =>{
                this.albums = resp.data;
                console.log(this.albums);
            })
            .catch(err =>{
                console.log("Error: ", err );
            })
        }
    }
)