
function enable_tab(elem_class){
    var elements = document.getElementsByClassName(elem_class);
    //console.log(elements.length);
    for(var i = 0 ; i < elements.length ; i ++){
        var elem = elements.item(i);
        elem.addEventListener('keydown', 
        function(){
            if(event.keyCode == 9){
                event.preventDefault();
                
                var ele = event.target;
                var val = ele.value;
                var pos = ele.selectionStart;

                ele.value = val.substr(0, pos) + '\t' + val.substr(pos, val.length);
                ele.setSelectionRange(pos + 1, pos + 1);
                console.log(pos);
            }else{
            }
        }
        );
    }
}


function change_txtarea(){
    var content = document.getElementById("content").value;
    var detail = document.getElementById("detail").value;
    var preview = document.getElementById("prev_field");

    var marked_text = marked(content) + marked(detail);
    //console.log(marked_text);
    preview.innerHTML = marked_text;

}