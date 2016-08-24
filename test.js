
function getXHR(){
    var req;
    try{
        req = new XMLHttpRequest();
    }catch(e){
        try{
            req = new ActiveXObject('Msxml2.XMLHTTP');
        }catch(e){
            req = new ActiveXObject('Microsoft.XMLHTTP');
        }
    }
    return req;
}

function asyncSend(){
    event.preventDefault();
    var req = getXHR();
    req.onreadystatechange = function(){
        var result = document.getElementById('result');
        if(req.readyState == 4){
            if(req.status == 200){
                result.innerHTML = req.responseText;
            }else{
                result.innerHTML = "サーバーエラー";
            }
        }else{
            result.innerHTML = "通信中";
        }
    }
    req.open('GET', 'helloAjax.php?name=' + 
        encodeURIComponent(document.form1.name.value), true);
    req.send(null);
}

function convert(){
    var markdown_text = document.getElementById("markdown_edit").value;
    console.log(marked(markdown_text));
    document.getElementById("html_view").innerHTML = marked(markdown_text);
}

function change_style(){
    var style_text = document.getElementById("style_edit").value;
    document.getElementById("sty").innerHTML = style_text;
}


function init(){
    var elements = document.getElementsByClassName('input_field');
    console.log(elements.length);
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