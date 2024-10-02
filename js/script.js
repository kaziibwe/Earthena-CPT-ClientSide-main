
function dropdown() {
    let Dropdown = document.querySelector('.dropdown')
    if (Dropdown.className === "dropdown") {
        Dropdown.className += " responsive";
    } else {
        Dropdown.className = "dropdown";
    }
}

function myfunc() {
    let div = document.querySelector('.div').classList;
    if (div.contains('hidden')) {
        div.remove('hidden');
        div.add('show');
    } else {
        div.remove('show');
        div.add('hidden');
    }
}
function myfanc() {
    let div = document.querySelector('.div').classList;
    if (div.contains('show')) {
        div.add('hidden');
        div.remove('show');
    }
}
function lerts(exporter, deleter) {
    if (exporter == true) {
        alert("Still under heavy development, you will soon be eble to export your conversations! keep trying for any update")
    } else if (deleter == true) {
        alert("Still under heavy development, you will soon be eble to export your conversations! keep trying for any update")
    }

}


function addElementToArray() {
    let myArray = [];
    let arr = myArray
    let generateRandomString = (length) => {
        let result = '';
        const characters = '0123456789abcdefghijklmnopqrstuvwxyz';

        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * characters.length);
            result += characters[randomIndex];
        }

        return result;
    }

    const randomString = generateRandomString(24);

    //--drillox-works
    const holder = document.getElementById("holder");


    if (arr.length >= 0) {
        const newElement = {
            id: randomString,
            name: "",
        };
        arr.push(newElement);

        holder.innerHTML = ``;
        document.getElementById("recommends").style.display = "";
        recommendationsAnimation()
        document.getElementById("copyright").style.visibility = "visible";

    }


}


async function recommendationsAnimation() {
    const recommends = document.getElementById("recommends")

    //recommends.style = "background-color:red"


    recommends.childNodes.forEach(element => {

        //element.style = "display:none"
        element.style = "visibility:invisible"
        element.className = "h-[50px] bg-[#f0f0f0] p-2  drilloxAnim"


    });

    let leng = recommends.children.length;
    let index = 0;
    //recommends.children[index].style = "display: "
    function min() {
        if (index < leng) {
            //recommends.children[index].style = "display: "
            recommends.children[index].style = "visibility: visible"

            index++;
            setTimeout(min, 800);
        } else {
            recommends.childNodes.forEach(element => {

                //element.style = "display:none"
                element.className = "h-[50px] bg-[#f0f0f0] p-2 "

            });
        }

    }
    min()


}



recommendationsAnimation();




