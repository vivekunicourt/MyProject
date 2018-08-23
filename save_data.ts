

    function save_data(){

    let pno:string= ((<HTMLInputElement>document.getElementById("p")).value);
     let com:string=((<HTMLInputElement>document.getElementById("c")).value);
     fetch("save_form.php?p=" + pno + "&c=" + com).then(function (response) {
        //var data = response.json();
        console.log('test');
        
        console.log(response.json);
        return response.json();})
        .then(function (json) {
          console.log(json.msg);
             document.getElementById("msg").innerHTML = json.msg;
                ((<HTMLInputElement>document.getElementById("p")).value)="";
              ((<HTMLInputElement>document.getElementById("c")).value)="";
        })
        .catch(error => console.error(error));
    
    }
