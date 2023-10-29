window.onload=()=>{



    document.querySelector('.menu-toggle').addEventListener('click', function () {
        document.querySelector('.menu').classList.toggle('active');
        this.classList.toggle('active');
    });



    if(document.forms.new_estimate_form){
        var form = document.forms.new_estimate_form;
        var length = form.length;
        var Width = form.Width;
        var material_cost = form.material_cost;
        var estimated_cost = form.estimated_cost;

        length.addEventListener('keyup', ()=>{
            var final = Width.value * length.value + Number(material_cost.value);
            estimated_cost.value = "$"+final;
        });

        Width.addEventListener('keyup', ()=>{
            var final = Width.value * length.value + Number(material_cost.value);
            estimated_cost.value = "$"+final;
        });

        material_cost.addEventListener('keyup', ()=>{
            var final = Width.value * length.value + Number(material_cost.value);
            estimated_cost.value = "$"+final;
        });

    }



}
